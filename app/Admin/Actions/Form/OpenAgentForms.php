<?php

namespace App\Admin\Actions\Form;

use App\Http\Services\User\UserService;

use App\Models\Agent\AgentAdminRolesUser;
use App\Models\Agent\AgentAdminUsers;
use App\Models\Agent\AgentModel;
use App\Models\User\UserType;
use Carbon\Carbon;
use Dcat\Admin\Contracts\LazyRenderable;
use Dcat\Admin\Traits\LazyWidget;
use Dcat\Admin\Widgets\Form;
use Illuminate\Support\Facades\DB;

class OpenAgentForms extends Form implements LazyRenderable
{
    use LazyWidget;
    /**
     * @return string
     */
    protected string $title = '开通代理';


    /**
     * 处理提交逻辑
     */
    public function handle(array $input)
    {
        $mobile = $input['mobile'];

        // 检查手机号或登录账号是否已存在
        if ($this->accountExists($mobile)) {
            return $this->response()->error('账号或手机号已存在！');
        }

        DB::beginTransaction();
        try {
            // 创建代理商
            $agent = $this->createAgent($input);
            // 创建代理商后台用户
            $user = $this->createAgentAdminUser($agent->getAttribute('uuid'), $input);

            // 分配角色
            $this->assignRoles($user->getKey(), $input['roles']);
            DB::commit();

            return $this->response()
                ->alert()
                ->success("操作成功！\n登录账号: {$user->username}\n登录密码: {$input['password']}\n代理商名称: {$user->name}");
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->response()->error('操作失败：' . $e->getMessage());
        }
    }
    /**
     * 创建代理商
     */
    private function createAgent(array $input): AgentModel
    {
        return AgentModel::query()->create([
            'user_id' => $input['user_id'],
            'agent_name' => $input['agent_name'],
            'mobile' => $input['mobile'],
            'type' => $input['agent_type'] ?? 1,
            'status' => 2,
        ]);
    }
    /**
     * 创建代理商后台用户
     */
    private function createAgentAdminUser(string $agentId, array $input): AgentAdminUsers
    {
        return AgentAdminUsers::query()->create([
            'name' => $input['agent_name'],
            'username' => $input['mobile'],
            'password' => bcrypt($input['password']),
            'agent_id' => $agentId,
            'agent_user_id' => $input['user_id'],
        ]);
    }
    /**
     * 分配角色
     */
    private function assignRoles(int $userId, array $roles): void
    {
        foreach ($roles as $roleId) {
            AgentAdminRolesUser::query()->create([
                'user_id' => $userId,
                'role_id' => $roleId,
            ]);
        }
    }
    /**
     * 检查账号或手机号是否存在
     */
    private function accountExists(string $mobile): bool
    {
        return AgentAdminUsers::query()->where('name', $mobile)->exists()
            || AgentModel::query()->where('mobile', $mobile)->exists();
    }
    /**
     * 创建表单
     */
    public function form()
    {
        $id = $this->payload['id'] ?? null;

        $this->hidden('user_id')->value($id);
        $this->select('agent_type', '代理商类型')
            ->options($this->getAgentTypes())
            ->required();

        $member = (new UserService())->getMemberById($id);
        $this->mobile('mobile', '登录账号')
            ->default($member['user_mobile'] ?? '')
            ->required();

        $this->text('agent_name', '代理商名称')
            ->default($member['user_name'] ?? '')
            ->required();

        $this->password('password', '密码')
            ->default(88888888)
            ->help('默认密码 88888888');

        $this->multipleSelect('roles', trans('admin.roles'))
            ->options($this->getRoles())
            ->required();

        $this->confirm('确认提交吗？');
    }

    /**
     * 获取代理商类型选项
     */
    private function getAgentTypes(): array
    {
        return UserType::all()
            ->pluck('type', 'uuid')
            ->toArray() ?? ['未分组'];
    }
    /**
     * 获取角色选项
     */
    private function getRoles(): array
    {
        $roleModel = config('agent-admin.database.roles_model');

        return $roleModel::query()
            ->where('id', '>', 1)
            ->pluck('name', 'id')
            ->toArray();
    }
}
