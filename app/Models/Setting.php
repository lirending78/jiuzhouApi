<?php

namespace App\Models;

use Faker\Provider\Base;

class Setting extends BaseModel
{
    protected $table = 'admin_settings';

    protected $fillable = [
        'slug',
        'value',
    ];

    public function getValue($slug)
    {
        return $this->where('slug', $slug)->first()->value??'';
    }

}
