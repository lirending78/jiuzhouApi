<?php

namespace App\Admin\Repositories;

use App\Models\User\UserType as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class UserType extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
