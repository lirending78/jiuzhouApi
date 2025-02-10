<?php

namespace App\Http\Services\User;

use App\Http\Services\BaseService;
use App\Models\Agent\AgentModel;
use App\Models\User\User;
use App\Models\User\UserAuthentication;
use App\Models\User\UserNetwork;
use Ramsey\Uuid\Uuid;


class UserService extends BaseService
{

    protected $userModel = User::class;
    public function CheckUserCode($userCode)
    {
        $user_code = User::where('user_code', $userCode)->first();
        if ($user_code) {
            return true;
        } else {
            return false;
        }
    }

    public function GetUuid($invitation_code)
    {
         return User::where('user_code', $invitation_code)->first()['uuid']??null;
    }

    public function GetUserId($invitation_code)
    {
        return User::where('user_code', $invitation_code)->first()['user_id']??null;
    }

    public function GetUserMobile($user_id)
    {
        return User::where('user_id', $user_id)->first()['user_mobile']??null;
    }


    /**
     * 根据用户id获取用户信息
     *
     * @param string $user_id
     * @param string|array $cols
     * @param bool $for_update
     * @return array
     */
    public function getMemberById(string $user_id, string|array $cols = '*', bool $for_update = false): array
    {
        $filter = [
            'user_id' => $user_id,
            'status' => 1
        ];

        return $this->getMember($filter, $cols, $for_update);
    }

    /**
     * 获取单个用户信息
     *
     * @param array $filter
     * @param string|array $cols
     * @param bool $for_update
     * @return array
     */
    public function getMember(array $filter, string|array $cols): array
    {
        $query = User::query()
            ->where($filter);

        return $query->first($cols)
            ?->toArray() ?: [];
    }
    public function GetIp()
    {
        return request()->ip();
    }

    public function isAgent(string $user_id)
    {
        if (!$user_id){
            throw new \RuntimeException('缺少：user_id');
        }
        return AgentModel::query()->where(['user_id'=>$user_id,'status'=>2])->exists();
    }


    public function GetUserCode()
    {
        $code = $this->GetCode(8);
        $user_code = User::where('user_code', $code)->get(['user_code'])->first();
        if ($user_code) {
            return $this->GetUserCode();
        } else {
            return $code;
        }
    }

    //根据邀请码获取用户上级推荐人  没有返回null
    public function GetUserByCode($code)
    {

        $user_code = User::where('user_code', $code)->get()->first();
        if ($user_code) {
            return $user_code;
        } else {
            return null;
        }
    }

    public function GetCode($length = 6)
    {
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $code.= mt_rand(0, 9);
        }
        return $code;
    }
    //登录的token
    public function login($user)
    {
        $token = auth('api')->login($user);
        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ];
    }

    //校验手机号是否存在
    public function CheckPhone($phone)
    {
        $user = User::where('phone', $phone)->first();
        if ($user) {
            return true;
        } else {
            return false;
        }
    }
    //校验邮箱是否存在
    public function CheckEmail($email)
    {
        $user = User::where('user_mail', $email)->first();
        if ($user) {
            return true;
        } else {
            return false;
        }
    }
    //上传图片
    public function UploadImage($file)
    {
        $filename = time().rand(100,999).'.'.$file->getClientOriginalExtension();
        //保存在public/uploads/image/20240101/
        //保存到本地
        $path = public_path('/uploads/images/'. date('Ymd'));
        //修改文件名称
        if(!is_dir($path)){
            mkdir($path, 0777, true);
        }
        $file->move($path, $filename);
        return 'images/'. date('Ymd'). '/'. $filename;
    }

    //获取用户认证状态
    public function GetUserAuthStatus($user_id)
    {
        $user_auth = UserAuthentication::where('user_id', $user_id)->first();
        if ($user_auth && $user_auth['status'] == 1) {
            //拒绝
            return 0;
        }else if($user_auth && $user_auth['status'] == null){
            //待认证
            return 1;
        } else {
            return 2;
        }
    }

    /**
     * 更新用户关系网络表
     *
     * @param int $userId 新用户 ID
     * @param int|null $parentId 新用户的上级代理 ID，NULL 表示没有上级
     */
    public function updateUserNetwork($userId,$userCode)
    {
        // 获取上级用户
        $ancestorUser = $this->GetUserByCode($userCode);

        // 自我关系：用户与自己的关系，层级为 0
        $relations = [
            [
                'ancestor_id' => $userId,
                'descendant_id' => $userId,
                'level' => 0,
                 'uuid' => (string) Uuid::uuid4()
            ],
        ];

        if ($ancestorUser) {
            $ancestorId = $ancestorUser->user_id;

            // 查询上级代理的所有祖先关系
            $parentRelationships = UserNetwork::query()
                ->where('descendant_id', $ancestorId)
                ->get();

            // 继承上级代理的祖先关系，层级递增
            foreach ($parentRelationships as $relation) {
                $relations[] = [
                    'ancestor_id' => $relation->ancestor_id,
                    'descendant_id' => $userId,
                    'level' => $relation->level + 1,
                    'uuid' => (string) Uuid::uuid4()
                ];
            }
            // 添加直接上级的关系
            $relations[] = [
                'ancestor_id' => $ancestorId,
                'descendant_id' => $userId,
                'level' => 1,
                'uuid' => (string) Uuid::uuid4()
            ];
        }
        //数组去重
        // 批量插入关系
        UserNetwork::insert($relations);
    }
    /**
     * 根据用户user_Id查询其所有下级代理
     *
     * @param string $userId 用户 ID
     */
    public function getAllAncestors($userId)
    {
        $temp =  UserNetwork::query()
            ->join('user', 'user_network.ancestor_id', '=', 'user.user_id')
            ->where('user_network.ancestor_id', '=', $userId)
            ->where('user_network.level', '>', 0) // 排除自己
            ->orderBy('user_network.level') // 从最近上级到顶级
            ->select( 'user_network.level','user_network.descendant_id')
            ->get()->toArray();

         $all = [];
        foreach ($temp as $v){
            $all[] = User::query()
            ->where('user_id', $v['descendant_id'])->first();
        }
        //all去重
        $all = array_unique($all, SORT_REGULAR);
        return $all;
    }

    /**
     * 根据用户user_Id查询某个用户的上级关系网
     *
     * @param string $userId 用户 ID
     */
    public function getUserUpNetwork($userId)
    {


      $net_work = UserNetwork::query()
            ->join('user', 'user_network.ancestor_id', '=', 'user.user_id') // 连接用户表获取用户信息
            ->where('user_network.descendant_id', $userId) // 当前用户的祖先
            ->where('user_network.level', '>=', 0) // 排除自己
            ->orderBy('user_network.level', 'DESC') // 从最近上级到顶级
            ->select('user.*', 'user_network.descendant_id','user_network.level') // 查询用户信息和层级
            ->get()->toArray();
        //去除level相同的数据
        $net_work = array_unique($net_work, SORT_REGULAR);
        return $net_work;
    }


    //获取用户信息
    public function getUserInfo()
    {
        //获取当前域名

        $user = User::where('user_id', auth()->user()->user_id)
            ->get(['user_mobile','user_mail','user_name','avatar','real_name_authority'])
            ->first();

        if ($user) {
            return $user;
        } else {
            return null;
        }
    }



}
