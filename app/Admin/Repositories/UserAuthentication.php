<?php

namespace App\Admin\Repositories;

use App\Models\User\UserAuthentication as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class UserAuthentication extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
