<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Currency;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CurrencyController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Currency(), function (Grid $grid) {
            $grid->column('uuid');
            $grid->column('symbol');
            $grid->column('name');
            $grid->column('type')->using(__('currency.options.type'));
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function ($filter) {
                $filter->like('name', '货币名称');
                $filter->like('symbol', '货币符号');
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
        return Show::make($id, new Currency(), function (Show $show) {
            $show->field('uuid');
            $show->field('symbol');
            $show->field('name');
            $show->field('type')->using(__('currency.options.type'));
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
        return Form::make(new Currency(), function (Form $form) {
            $form->display('uuid');
            $form->text('symbol')->rules(function ($form) {
                // 如果是创建操作，则进行 unique 校验
                return $form->isEditing() ? ['required'] : ['required', 'unique:App\Models\Fund\CurrencyModel,symbol'];
            }, [
                'required' => '币种符号不能为空',
                'unique' => '币种符号已存在',
            ]);

            $form->text('name')->rules(function ($form) {
                // 如果是创建操作，则进行 unique 校验
                return $form->isEditing() ? ['required'] : ['required', 'unique:App\Models\Fund\CurrencyModel,name'];
            }, [
                'required' => '名称不能为空',
                'unique' => '名称已存在',
            ]);
//            $form->text('type')->default(1);
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
