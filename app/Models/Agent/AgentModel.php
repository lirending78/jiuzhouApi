<?php

namespace App\Models\Agent;

use App\Models\BaseModel;

class AgentModel extends BaseModel
{

    protected $table = 'agents';

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'user_id',
        'agent_name',
        'mobile',
        'type',
        'status',
        ];
}
