<?php

namespace App\Admin\Repositories;

use App\Models\Fund\TradingPairCategoryModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class TradingPairCategory extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
