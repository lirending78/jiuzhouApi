<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\C2cOrder;
use App\Models\User\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class C2cOrderController extends AdminController
{


    public function grid()
    {
        $grid =  Grid::make(new C2cOrder(), function (Grid $grid) {
            $grid->column('order_no','订单编号');
            if (request()->has('user_id')) {
                $user = request()->all()['user_id'];
                $grid->model()->where('user_id', $user);
            }
            if (request()->has('entrust_type')) {
                $grid->model()->where('entrust_type', request()->all()['entrust_type']);
            }

            $grid->column('order_no');
            $grid->column('user_id')->display(function (){
                return User::query()->where('user_id',$this->user_id)->value('real_name');
            });
            $grid->column('entrust_type')->using(['buy'=>'买入','sell'=>'卖出'])->label(['buy'=>'green','sell'=>'red']);
            $grid->column('order_type')->label();
            $grid->column('amount');
            $grid->column('remaining_amount');
            $grid->column('total_price')->display(function (){
                //返回保留两位小数
                return sprintf("%.2f", $this->total_price);
            });
            $grid->column('currency');
            $grid->column('pay_status')->using([1=>'部分成交', 2=>'完全成交', 3=>'主动取消', 0=>'待匹配',])->label([1 => 'blue', 2 => 'green', 3 => 'red', 4 => 'orange',]);
            $grid->column('handle_time');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->column('cancel_time');
            $grid->disableCreateButton();
            $grid->disableEditButton();
            $grid->disableDeleteButton();
            $grid->disableActions();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('uuid');
            });
            $tab = \Dcat\Admin\Widgets\Tab::make();
            $active =  request()->get('entrust_type')??null;
            $url = request()->url();
            $queryParams = request()->except('entrust_type');
            $tab->addLink('全部', $url . '?' . http_build_query(array_merge($queryParams, ['entrust_type' => null])), empty($active) ? true : false);
            $tab->addLink('买入', $url . '?' . http_build_query(array_merge($queryParams, ['entrust_type' => 'buy'])), $active == 'buy' ? true : false);
            $tab->addLink('卖出', $url . '?' . http_build_query(array_merge($queryParams, ['entrust_type' => 'sell'])), $active == 'sell' ? true : false);
            $grid->header($tab->render());

        });

        return \Dcat\Admin\Widgets\Card::make('',$grid);
    }
    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new C2cOrder(), function (Show $show) {
            $show->field('uuid');
            $show->field('order_no');
            $show->field('user_id');
            $show->field('order_type');
            $show->field('amount');
            $show->field('remaining_amount');
            $show->field('price');
            $show->field('cancel_time');
            $show->field('currency');
            $show->field('status');
            $show->field('handle_time');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new C2cOrder(), function (Form $form) {
            $form->display('uuid');
            $form->text('order_no');
            $form->text('user_id');
            $form->text('order_type');
            $form->text('amount');
            $form->text('remaining_amount');
            $form->text('price');
            $form->text('cancel_time');
            $form->text('currency');
            $form->text('status');
            $form->text('handle_time');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
