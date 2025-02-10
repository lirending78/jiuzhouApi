<?php

namespace App\Admin\Repositories;

use App\Models\Order\TradesOrderModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class TradesOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
