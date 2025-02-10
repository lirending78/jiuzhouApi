<?php

namespace App\Admin\Repositories;

use App\Models\User\UserWallet as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class UserWallet extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
