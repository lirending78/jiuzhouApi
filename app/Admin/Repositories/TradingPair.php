<?php

namespace App\Admin\Repositories;

use App\Models\Fund\TradingPairModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class TradingPair extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
