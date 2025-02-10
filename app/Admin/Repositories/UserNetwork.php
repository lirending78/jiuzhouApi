<?php

namespace App\Admin\Repositories;

use App\Models\User\UserNetwork as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class UserNetwork extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
