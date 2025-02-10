<?php

namespace App\Models\Fund;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class TradingPairCategoryModel extends BaseModel implements Sortable
{
    use SoftDeletes,SortableTrait;

    protected $table = 'trading_pair_categories';

    protected $primaryKey = 'uuid';
    protected array $sortable = [
        // 设置排序字段名称
        'order_column_name' => 'sort',
        // 是否在创建时自动排序，此参数建议设置为true
        'sort_when_creating' => true,
    ];
    protected $fillable = [
        'name',
        'description',
        'sort',
        'status',
    ];
}
