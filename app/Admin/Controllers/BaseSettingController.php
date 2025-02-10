<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\JsonResponse;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Tab;
use Dcat\Admin\Layout\Row;
use Illuminate\Http\Request;
use Weiwait\DcatEasySms\Forms\SmsConfig;
use Weiwait\DcatEasySms\Models\SmsGateway;
use Weiwait\DcatSmtp\Forms\SmtpConfig;

class BaseSettingController extends Controller
{




    public function index(Content $content)
    {
        $tab = Tab::make();
        $tab->add('短信', new SmsConfig());
//        $tab->add('SMTP', new SmtpConfig());
        $channelsTable = $this->getChannelsTable();
        $content->title('配置')
            ->row(function (Row $row) use ($tab , $channelsTable) {
            $row->column(6, $tab->withCard());
            $row->column(6, $channelsTable);
        });
        return $content;
    }
    // 获取通道表格
    public function getChannelsTable()
    {
        // 获取所有的短信通道

        // 创建表格组件
        $Grid = Grid::make(new SmsGateway(),function (Grid $grid){
            $grid->disableActions();
            $grid->disableRowSelector();
            $grid->disableRefreshButton();
            $grid->disableCreateButton();
            $grid->model()->orderBy('sort');
            $grid->simplePaginate();
            $grid->column('id')->hide();
            $grid->column('name');
            $grid->column('gateway','标识');
            $grid->column('sort','排序')->orderable();
            $grid->column('status','状态')->switch();
        });
        return $Grid;
    }


    public static function update($id,Request $request){
        $sms = SmsGateway::query()->where('id',$id)->first();
        // 如果找不到记录，返回错误
        if (!$sms) {
            return JsonResponse::make()->error('Record not found!');
        }

        $status = $request->get('status');
        if (isset($status)){
            SmsGateway::query()->where('id',$id)->update(['status'=>$request->get('status')]);
            return JsonResponse::make()->success('success！');
        }
        // 获取排序方向
        $sort = $request->get('_orderable');  // 0 = 向下, 1 = 向上

        if (isset($sort)) {
            // 向下排序 (0 = 向下)
            if ($sort == 0) {
                // 查找下一条记录
                $next_sms = SmsGateway::query()->where('sort', $sms->sort + 1)->first();
                if ($next_sms) {
                    // 交换排序值
                    SmsGateway::query()->where('id', $id)->update(['sort' => $sms->sort + 1]);
                    SmsGateway::query()->where('id', $next_sms->id)->update(['sort' => $sms->sort]);
                }
            }
            // 向上排序 (1 = 向上)
            elseif ($sort == 1) {
                // 查找上一条记录
                $previous_sms = SmsGateway::query()->where('sort', $sms->sort - 1)->first();
                if ($previous_sms) {
                    // 交换排序值
                    SmsGateway::query()->where('id', $id)->update(['sort' => $sms->sort - 1]);
                    SmsGateway::query()->where('id', $previous_sms->id)->update(['sort' => $sms->sort]);
                }
            }

            return JsonResponse::make()->success('Sort order updated successfully!');
        }

        return JsonResponse::make()->error('There are no modifications');
    }
}
