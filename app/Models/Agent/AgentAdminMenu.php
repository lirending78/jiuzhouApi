<?php

namespace App\Models\Agent;

use App\Models\BaseModel;

use Dcat\Admin\Models\MenuCache;
use Dcat\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\EloquentSortable\Sortable;

class AgentAdminMenu extends Model implements Sortable
{
    use MenuCache,
        ModelTree {
        allNodes as treeAllNodes;
        ModelTree::boot as treeBoot;
    }
    protected $sortable = [
        'sort_when_creating' => true,
    ];

    protected $table = 'agent_admin_menu';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->init();
    }
    protected function init()
    {
        $connection = config('agent-admin.database.connection') ?: config('database.default');

        $this->setConnection($connection);

        $this->setTable(config('agent-admin.database.menu_table'));
    }
    protected $fillable = ['parent_id', 'order', 'title', 'icon', 'uri', 'extension', 'show'];

    public function roles(): BelongsToMany
    {
        $pivotTable = config('agent-admin.database.role_menu_table');

        $relatedModel = config('agent-admin.database.roles_model');

        return $this->belongsToMany($relatedModel, $pivotTable, 'menu_id', 'role_id')->withTimestamps();
    }
    public function permissions(): BelongsToMany
    {
        $pivotTable = config('agent-admin.database.permission_menu_table');

        $relatedModel = config('agent-admin.database.permissions_model');

        return $this->belongsToMany($relatedModel, $pivotTable, 'menu_id', 'permission_id')->withTimestamps();
    }
    public function allNodes(bool $force = false)
    {
        if ($force || $this->queryCallbacks) {
            return $this->fetchAll();
        }

        return $this->remember(function () {
            return $this->fetchAll();
        });
    }

    public function fetchAll()
    {
        return $this->withQuery(function ($query) {
            if (static::withPermission()) {
                $query = $query->with('permissions');
            }

            return $query->with('roles');
        })->treeAllNodes();
    }

    public static function withPermission()
    {
        return config('agent-admin.menu.bind_permission') && config('agent-admin.permission.enable');
    }

    /**
     * Determine if enable menu bind role.
     *
     * @return bool
     */
    public static function withRole()
    {
        return (bool) config('agent-admin.permission.enable');
    }

    /**
     * Detach models from the relationship.
     *
     * @return void
     */
    protected static function boot()
    {
        static::treeBoot();

        static::deleting(function ($model) {
            $model->roles()->detach();
            $model->permissions()->detach();

            $model->flushCache();
        });

        static::saved(function ($model) {
            $model->flushCache();
        });
    }
}
