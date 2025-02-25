<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Grid\OperateRelease;
use App\Admin\Repositories\TradingPair;
use App\Models\Fund\CurrencyModel;
use App\Models\Fund\TradingPairCategoryModel;
use App\Models\Fund\TradingPairModel;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;
use Illuminate\Support\Facades\DB;

class TradingPairController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TradingPair, function (Grid $grid) {
            $grid->model()->orderBy('sort');
//            $grid->column('uuid')->sortable();
            $grid->column('symbol');
            $grid->column('symbol_url')->image('', 60, 60);
            $grid->column('base_currency')->display(function ($row){
                return CurrencyModel::query()
                    ->where('uuid', $row)
                    ->value('name');
            });
            $grid->column('quote_currency')->display(function ($row){
                return CurrencyModel::query()
                    ->where('uuid', $row)
                    ->value('name');
            });
            $grid->column('trading_pair_categories')->display(function ($row) {
                return TradingPairCategoryModel::query()
                    ->where('uuid', $row)
                    ->where('status', 1)
                    ->value('name');
            });
            $grid->column('min_trade_amount')->limit(5);
            $grid->column('max_trade_amount')->limit(5);
            $grid->column('min_trade_price')->limit(5);
            $grid->column('max_trade_price')->limit(5);
            $grid->column('status')->switch();
            $grid->column('sort')->orderable();
            $grid->column('created_at')->sortable();
//            $grid->column('updated_at')->sortable();
//                $grid->append(new OperateRelease());
            $grid->tools(new OperateRelease());


            $grid->quickSearch(['symbol'])->placeholder('搜索交易对...');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('uuid');
                $filter->equal('symbol');
//                $filter->like('user_type')->select(UserType::all()->pluck(['type'],'uuid')->toArray())->width(3);

                $filter->equal('trading_pair_categories')->select(
                    TradingPairCategoryModel::query()
                        ->where('status', 1)
                        ->orderBy('sort')
                        ->select(DB::raw("CONCAT(name, ' (', description, ')') AS full_name"), 'uuid')
                        ->pluck('full_name', 'uuid')->toArray()
                );

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new TradingPair, function (Show $show) {
            $show->field('uuid');
            $show->field('symbol_url')->image();
            $show->field('base_currency');
            $show->field('quote_currency');
            $show->field('symbol');
            $show->field('min_trade_amount');
            $show->field('max_trade_amount');
            $show->field('min_trade_price');
            $show->field('max_trade_price');
            $show->field('status');
            $show->field('sort');
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
        return Form::make(new TradingPair, function (Form $form) {
            $form->display('uuid');
            $form->photo('symbol_url');
            $form->select('base_currency')
                ->options(CurrencyModel::all()->pluck('name', 'uuid'))
                ->required();

            // 计价币种
            $form->select('quote_currency')
                ->options(CurrencyModel::all()->pluck('name', 'uuid'))
                ->required();
            $form->select('trading_pair_categories')->options(function () {
                return TradingPairCategoryModel::query()
                    ->where('status', 1)
                    ->orderBy('sort')
                    ->select(DB::raw("CONCAT(name, ' (', description, ')') AS full_name"), 'uuid')
                    ->pluck('full_name', 'uuid');
            });
            $form->decimal('min_trade_amount')->required();
            $form->decimal('max_trade_amount')->required();
            $form->decimal('min_trade_price')->required();
            $form->decimal('max_trade_price')->required();
            $form->hidden('symbol');
            $form->switch('status')->default(1);
            $form->number('sort');


            $form->saving(function ($form) {
                // 在保存之前动态生成 symbol 字段的值
                $form->symbol = CurrencyModel::query()->where('uuid',$form->base_currency)->value('name')  . '/' . CurrencyModel::query()->where('uuid',$form->quote_currency)->value('name');
                // 仅在创建时进行验证
                if (!$form->isEditing()) {
                    // 验证是否已有相同的交易对
                    $existingPair = TradingPairModel::query()
                        ->where('base_currency', $form->base_currency)
                        ->where('quote_currency', $form->quote_currency)
                        ->exists();

                    if ($existingPair) {
                        // 如果存在，则抛出错误
                        throw new \Exception('该交易对已存在，请选择不同的基础币种和计价币种!');
                    }
                }
            });

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
