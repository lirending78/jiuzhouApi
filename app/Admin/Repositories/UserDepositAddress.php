<?php

namespace App\Admin\Repositories;

use App\Models\User\UserDepositAddress as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class UserDepositAddress extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
