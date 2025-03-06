<?php

namespace App\Admin\Repositories;

use App\Models\User\UserWithdrawalAddress as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class UserWithdrawalAddress extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
