<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Dcat\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\EloquentSortable\Sortable;

/**
 * Class Menu.
 *
 * @property int $id
 * @method where($parent_id, $id)
 * @property string $gateway 短信服务商
 * @property string $name 名称
 * @property string $configs 配置项
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $sort 排序
 * @property int $status 状态
 * @method static \Illuminate\Database\Eloquent\Builder|SmsGateWays newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsGateWays newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsGateWays ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|SmsGateWays query()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsGateWays whereConfigs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsGateWays whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsGateWays whereGateway($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsGateWays whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsGateWays whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsGateWays whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsGateWays whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsGateWays whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class  SmsGateWays extends Model implements Sortable
{
    use HasDateTimeFormatter,
        ModelTree {
        allNodes as treeAllNodes;
        ModelTree::boot as treeBoot;
    }

    /**
     * @var array
     */
    protected $sortable = [
        'sort_when_creating' => true,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['parent_id', 'order', 'name'];

    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->init();
    }

    protected function init()
    {
        $connection = config('admin.database.connection') ?: config('database.default');

        $this->setConnection($connection);

        $this->setTable('sms_gateways');
    }




    /**
     * Fetch all elements.
     *
     * @return static[]|\Illuminate\Support\Collection
     */
    public function fetchAll()
    {
        return $this->treeAllNodes();
    }





}
