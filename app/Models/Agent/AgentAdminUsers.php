<?php

namespace App\Models\Agent;

use App\Models\BaseModel;
use Dcat\Admin\Models\Menu;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Dcat\Admin\Traits\HasPermissions;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class AgentAdminUsers extends Model implements AuthenticatableContract, Authorizable
{
    use Authenticatable,
        HasPermissions,
        HasDateTimeFormatter;

    protected $table = 'agent_admin_users';
    const DEFAULT_ID = 1;

    protected $fillable = ['username', 'password', 'name', 'avatar','agent_id','agent_user_id'];

    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->init();

        parent::__construct($attributes);
    }

    protected function init()
    {
        $connection = config('agent-admin.database.connection') ?: config('database.default');

        $this->setConnection($connection);

        $this->setTable(config('agent-admin.database.users_table'));
    }

    /**
     * Get avatar attribute.
     *
     * @return mixed|string
     */
    public function getAvatar()
    {
        $avatar = $this->avatar;

        if ($avatar) {
            if (! URL::isValidUrl($avatar)) {
                $avatar = Storage::disk(config('agent-admin.upload.disk'))->url($avatar);
            }

            return $avatar;
        }

        return admin_asset(config('agent-admin.default_avatar') ?: '@admin/images/default-avatar.jpg');
    }

    /**
     * A user has and belongs to many roles.
     *
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        $pivotTable = config('agent-admin.database.role_users_table');

        $relatedModel = config('agent-admin.database.roles_model');

        return $this->belongsToMany($relatedModel, $pivotTable, 'user_id', 'role_id')->withTimestamps();
    }

    /**
     * 判断是否允许查看菜单.
     *
     * @param  array|Menu  $menu
     * @return bool
     */
    public function canSeeMenu($menu)
    {
        return true;
    }
}
