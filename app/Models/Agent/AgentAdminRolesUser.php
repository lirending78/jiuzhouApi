<?php

namespace App\Models\Agent;


use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;


class AgentAdminRolesUser extends Model
{
    protected $table = 'agent_role_users';
    public $incrementing = false; // 如果没有自增主键
    protected $primaryKey = null; // 无主键
    protected $fillable = [
        'role_id',
        'user_id'
    ];
}
