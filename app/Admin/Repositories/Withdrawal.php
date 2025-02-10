<?php

namespace App\Admin\Repositories;

use App\Models\User\Withdrawal as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Withdrawal extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
