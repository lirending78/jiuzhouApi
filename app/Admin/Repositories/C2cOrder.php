<?php

namespace App\Admin\Repositories;

use App\Models\Order\C2cOrderModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class C2cOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;



}
