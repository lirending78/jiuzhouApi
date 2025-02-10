<?php

namespace App\Admin\Repositories;

use App\Models\Financial\RechargeRecord as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class RechargeRecord extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
