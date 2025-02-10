<?php

namespace App\Admin\Repositories;

use App\Models\Financial\Currency as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class WalletCurrency extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
