<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\TradesOrder;
use App\Models\User\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class TradesOrderController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TradesOrder(), function (Grid $grid) {
//            $grid->column('uuid')->sortable();
            $grid->column('order_item');
            $grid->column('user_id')->display(function (){
                return User::query()->where('user_id',$this->user_id)->value('real_name');
            });
            $grid->column('buy_order_no');
            $grid->column('sell_order_no');
            $grid->column('amount');
            $grid->column('price')->display(function (){
                return sprintf("%.2f", $this->price);
            });
            $grid->column('entrust_type')->using(['buy'=>'买入','sell'=>'卖出'])->label(['buy'=>'green','sell'=>'red']);
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->disableCreateButton();
            $grid->disableActions();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('uuid');

            });
        });
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
        return Show::make($id, new TradesOrder(), function (Show $show) {
            $show->field('uuid');
            $show->field('order_item');
            $show->field('buy_order_no');
            $show->field('sell_order_no');
            $show->field('amount');
            $show->field('price');
            $show->field('entrust_type');
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
        return Form::make(new TradesOrder(), function (Form $form) {
            $form->display('uuid');
            $form->text('order_item');
            $form->text('buy_order_no');
            $form->text('sell_order_no');
            $form->text('amount');
            $form->text('price');
            $form->text('entrust_type');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
