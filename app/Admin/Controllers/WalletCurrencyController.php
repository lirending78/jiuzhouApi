<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\WalletCurrency;
use App\Http\Services\Common\PicService;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;


class WalletCurrencyController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new WalletCurrency(), function (Grid $grid) {
            $grid->column('name');
            $grid->column('status_recharge')->switch();
            $grid->column('status_withdrawal')->switch();
            $grid->qrcode->qrcode(function () {
                return $this->address;
            }, 200, 200);
            $grid->column('address');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

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
        return Show::make($id, new WalletCurrency(), function (Show $show) {
            $show->field('uuid');
            $show->field('name');
            $show->field('network');
            $show->field('status_recharge');
            $show->field('status_withdrawal');
            $show->field('address');
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
        return Form::make(new WalletCurrency(), function (Form $form) {
            $form->text('name');
            $form->list('network');
            $form->switch('status_recharge');
            $form->switch('status_withdrawal');
            $form->text('address');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
