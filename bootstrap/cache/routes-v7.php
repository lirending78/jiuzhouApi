<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/admin/dcat-api/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.dcat-api.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dcat-api/form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.dcat-api.form',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dcat-api/form/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.dcat-api.form.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dcat-api/form/destroy-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.dcat-api.form.destroy-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dcat-api/value' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.dcat-api.value',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dcat-api/render' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.dcat-api.render',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dcat-api/tinymce/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.dcat-api.tinymce.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dcat-api/editor-md/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.dcat-api.editor-md.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.menu.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.menu.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.permissions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.permissions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/permissions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.permissions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/extensions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.extensions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.extensions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.generated::PSj27Y1QqrPWl8R7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.generated::ODJVOuTBkCqobmit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.generated::H4K8H5zjTuJteRkx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.generated::EPuGOvhimthMinB6',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/helpers/scaffold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.generated::1ANydGuHIXHS1O4V',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.generated::FAC9PznfEJvlg0dh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/helpers/scaffold/table' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.generated::3M6VqjDVfP7K3jCM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/helpers/icons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.generated::60vKavrZ40MBaayg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/UserWalletDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.UserWalletDetail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tinymcemedia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.tinymcemedia.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KVgngXf3f1rSzcCt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.generated::swmKBf7CwlJofZM0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user_mange' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_mange.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_mange.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user_mange/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_mange.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.news.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.news.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.news.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/base-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.base-setting.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.base-setting.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/base-setting/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.base-setting.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user_authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_authentication.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_authentication.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user_authentication/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_authentication.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/c2cOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.c2cOrder.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.c2cOrder.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/c2cOrder/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.c2cOrder.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order_trade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.order_trade.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.order_trade.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order_trade/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.order_trade.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin_setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.admin_setting.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.admin_setting.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin_setting/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.admin_setting.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user_type/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_type.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/recharge_record' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.recharge_record.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.recharge_record.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/recharge_record/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.recharge_record.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transaction_flow' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.transaction_flow.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.transaction_flow.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transaction_flow/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.transaction_flow.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdrawal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.withdrawal.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.withdrawal.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdrawal/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.withdrawal.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trading-pair' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trading-pair/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trading-pair-cate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair-cate.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair-cate.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trading-pair-cate/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair-cate.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.wallet.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.wallet.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.wallet.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trading' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trading/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currency.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currency.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currency/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currency.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currencies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currencies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currencies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currencies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currencies.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/dcat-api/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.dcat-api.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/dcat-api/form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.dcat-api.form',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/dcat-api/form/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.dcat-api.form.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/dcat-api/form/destroy-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.dcat-api.form.destroy-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/dcat-api/value' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.dcat-api.value',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/dcat-api/render' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.dcat-api.render',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/dcat-api/tinymce/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.dcat-api.tinymce.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/dcat-api/editor-md/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.dcat-api.editor-md.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/auth/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/auth/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/auth/menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.menu.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.menu.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/auth/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/auth/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/auth/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.permissions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.permissions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/auth/permissions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.permissions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/auth/extensions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.extensions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.extensions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::eax8kOpSP7kyo8tN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::CULwbXv63yWUL4Sg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/auth/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::BZONYiuN6G0EdUWt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::sbQo2OGPGN1gGL2a',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/helpers/scaffold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::gvsMrxkFMMq4PvoM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::KhI5BN8CpyhZEVUt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/helpers/scaffold/table' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::L6Xj0Drzp5747wDU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/helpers/icons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::z4cDfnQ12FDcIEOs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::3yM98iHDAWqg5iSm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::lbUH9qctpGPpNj94',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/operation-logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.dcat-admin.operation-log.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/auth/operation-logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.dcat-admin.operation-log.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/llconfig' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.llconfig.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.llconfig.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/llconfig/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.llconfig.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/llconfig' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.llconfig.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.llconfig.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/llconfig/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.llconfig.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dcat-easy-sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.generated::bhsmGvsp6ObST4Hr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/dcat-easy-sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::wfvByLWjMZLS8Uw2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dcat-smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.generated::0JipnX2Pihk2ATCn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/dcat-smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::1WCbBpdk6SOEUNcW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.media.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.media.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/batch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.media.batch-destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.media.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.media.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/media/batch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.media.batch-destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/api/hosts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.hosts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/api/folders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/api/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/api/clear-cache-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache-all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/api/delete-multiple-files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete-multiple-files',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/api/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.logs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media-extension/get-files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.admin.media-extension.get-files',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/media-extension/get-files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.admin.media-extension.get-files',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dcat-marketplace' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.generated::fa0MWqDW59xnWmum',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent-admin/dcat-marketplace' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.generated::K7SMyaZFtMGtylKI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/RegisterSendCode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register_send_code',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/Login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ForgetPassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forget_password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/LoginOut' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login_out',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/ChangePassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change_password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/Authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'authentication',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/GetAuthentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get_authentication',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/GetUserInfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get_user_info',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/Avatar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'avatar',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'test1111',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/common/get-msg-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get_message_code',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/common/check-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'check_code',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/common/get-email-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get_email_code',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/common/check-email-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'check_email_code',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/common/get-trading-pairs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get_trading_pairs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/common/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upload_file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/orders/send-sell-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send_sell_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/orders/send-buy-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send_buy_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/orders/get-trad-buy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get_trad_buy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/NewsList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news_list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financial/Recharge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recharge',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financial/GetRecharge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get_recharge',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financial/RechargeList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recharge_list',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financial/EditRecharge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit_recharge',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financial/Withdrawal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdrawal',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financial/WalletList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallet_list',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financial/ChangeWalletWithdrawalAddress' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change_wallet_withdrawal_address',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financial/ChangeWallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change_wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financial/WalletDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallet_detail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financial/GetRechargeAddress' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get_recharge_address',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MkHOG2tw2an22HLC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WjZbehlPumhKIc3P',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|dmin/(?|a(?|uth/(?|users/([^/]++)(?|(*:48)|/edit(*:60)|(*:67))|menu/([^/]++)(?|/edit(*:96)|(*:103))|roles/([^/]++)(?|(*:129)|/edit(*:142)|(*:150))|permissions/([^/]++)(?|(*:182)|/edit(*:195)|(*:203))|extensions/([^/]++)(*:231)|operation\\-logs/([^/]++)(*:263))|dmin_setting/([^/]++)(?|(*:296)|/edit(*:309)|(*:317)))|user_(?|mange/([^/]++)(?|(*:352)|/edit(*:365)|(*:373))|authentication/([^/]++)(?|(*:408)|/edit(*:421)|(*:429))|type/([^/]++)(?|(*:454)|/edit(*:467)|(*:475)))|news/([^/]++)(?|(*:501)|/edit(*:514)|(*:522))|base\\-setting/([^/]++)(?|(*:556)|/edit(*:569)|(*:577))|c(?|2cOrder/([^/]++)(?|(*:609)|/edit(*:622)|(*:630))|urrenc(?|y/([^/]++)(?|(*:661)|/edit(*:674)|(*:682))|ies/([^/]++)(?|(*:706)|/edit(*:719)|(*:727))))|order_trade/([^/]++)(?|(*:761)|/edit(*:774)|(*:782))|recharge_record/([^/]++)(?|(*:818)|/edit(*:831)|(*:839))|tra(?|nsaction_flow/([^/]++)(?|(*:879)|/edit(*:892)|(*:900))|ding(?|\\-pair(?|/([^/]++)(?|(*:937)|/edit(*:950)|(*:958))|\\-cate/([^/]++)(?|(*:985)|/edit(*:998)|(*:1006)))|/([^/]++)(?|(*:1029)|/edit(*:1043)|(*:1052))))|w(?|ithdrawal/([^/]++)(?|(*:1089)|/edit(*:1103)|(*:1112))|allet/([^/]++)(?|(*:1139)|/edit(*:1153)|(*:1162)))|llconfig/([^/]++)(?|(*:1193)|/edit(*:1207)|(*:1216)))|gent\\-admin/(?|auth/(?|users/([^/]++)(?|(*:1267)|/edit(*:1281)|(*:1290))|menu/([^/]++)(?|/edit(*:1321)|(*:1330))|roles/([^/]++)(?|(*:1357)|/edit(*:1371)|(*:1380))|permissions/([^/]++)(?|(*:1413)|/edit(*:1427)|(*:1436))|extensions/([^/]++)(*:1465)|operation\\-logs/([^/]++)(*:1498))|llconfig/([^/]++)(?|(*:1528)|/edit(*:1542)|(*:1551)))|utologin/([^/]++)(*:1579))|/log\\-viewer(?|/api/f(?|olders/([^/]++)(?|/(?|download(*:1643)|clear\\-cache(*:1664))|(*:1674))|iles/([^/]++)(?|/(?|download(*:1712)|clear\\-cache(*:1733))|(*:1743)))|(?:/((?:.*)))?(*:1768)))/?$}sDu',
    ),
    3 => 
    array (
      48 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      60 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      67 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      96 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.menu.edit',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.menu.update',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.menu.destroy',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.permissions.show',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.permissions.edit',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.permissions.update',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.permissions.destroy',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      231 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.extensions.update',
          ),
          1 => 
          array (
            0 => 'extension',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.dcat-admin.operation-log.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.admin_setting.show',
          ),
          1 => 
          array (
            0 => 'admin_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.admin_setting.edit',
          ),
          1 => 
          array (
            0 => 'admin_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.admin_setting.update',
          ),
          1 => 
          array (
            0 => 'admin_setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.admin_setting.destroy',
          ),
          1 => 
          array (
            0 => 'admin_setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_mange.show',
          ),
          1 => 
          array (
            0 => 'user_mange',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_mange.edit',
          ),
          1 => 
          array (
            0 => 'user_mange',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_mange.update',
          ),
          1 => 
          array (
            0 => 'user_mange',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_mange.destroy',
          ),
          1 => 
          array (
            0 => 'user_mange',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_authentication.show',
          ),
          1 => 
          array (
            0 => 'user_authentication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_authentication.edit',
          ),
          1 => 
          array (
            0 => 'user_authentication',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_authentication.update',
          ),
          1 => 
          array (
            0 => 'user_authentication',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_authentication.destroy',
          ),
          1 => 
          array (
            0 => 'user_authentication',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_type.show',
          ),
          1 => 
          array (
            0 => 'user_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_type.edit',
          ),
          1 => 
          array (
            0 => 'user_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      475 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_type.update',
          ),
          1 => 
          array (
            0 => 'user_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.user_type.destroy',
          ),
          1 => 
          array (
            0 => 'user_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.news.show',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.news.edit',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.news.update',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.news.destroy',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.base-setting.show',
          ),
          1 => 
          array (
            0 => 'base_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.base-setting.edit',
          ),
          1 => 
          array (
            0 => 'base_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.base-setting.update',
          ),
          1 => 
          array (
            0 => 'base_setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.base-setting.destroy',
          ),
          1 => 
          array (
            0 => 'base_setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      609 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.c2cOrder.show',
          ),
          1 => 
          array (
            0 => 'c2cOrder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      622 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.c2cOrder.edit',
          ),
          1 => 
          array (
            0 => 'c2cOrder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.c2cOrder.update',
          ),
          1 => 
          array (
            0 => 'c2cOrder',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.c2cOrder.destroy',
          ),
          1 => 
          array (
            0 => 'c2cOrder',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currency.show',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      674 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currency.edit',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currency.update',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currency.destroy',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      706 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currencies.show',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currencies.edit',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      727 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currencies.update',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.currencies.destroy',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      761 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.order_trade.show',
          ),
          1 => 
          array (
            0 => 'order_trade',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.order_trade.edit',
          ),
          1 => 
          array (
            0 => 'order_trade',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.order_trade.update',
          ),
          1 => 
          array (
            0 => 'order_trade',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.order_trade.destroy',
          ),
          1 => 
          array (
            0 => 'order_trade',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      818 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.recharge_record.show',
          ),
          1 => 
          array (
            0 => 'recharge_record',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      831 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.recharge_record.edit',
          ),
          1 => 
          array (
            0 => 'recharge_record',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.recharge_record.update',
          ),
          1 => 
          array (
            0 => 'recharge_record',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.recharge_record.destroy',
          ),
          1 => 
          array (
            0 => 'recharge_record',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.transaction_flow.show',
          ),
          1 => 
          array (
            0 => 'transaction_flow',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.transaction_flow.edit',
          ),
          1 => 
          array (
            0 => 'transaction_flow',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.transaction_flow.update',
          ),
          1 => 
          array (
            0 => 'transaction_flow',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.transaction_flow.destroy',
          ),
          1 => 
          array (
            0 => 'transaction_flow',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair.show',
          ),
          1 => 
          array (
            0 => 'trading_pair',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      950 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair.edit',
          ),
          1 => 
          array (
            0 => 'trading_pair',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair.update',
          ),
          1 => 
          array (
            0 => 'trading_pair',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair.destroy',
          ),
          1 => 
          array (
            0 => 'trading_pair',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      985 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair-cate.show',
          ),
          1 => 
          array (
            0 => 'trading_pair_cate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair-cate.edit',
          ),
          1 => 
          array (
            0 => 'trading_pair_cate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1006 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair-cate.update',
          ),
          1 => 
          array (
            0 => 'trading_pair_cate',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading-pair-cate.destroy',
          ),
          1 => 
          array (
            0 => 'trading_pair_cate',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading.show',
          ),
          1 => 
          array (
            0 => 'trading',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading.edit',
          ),
          1 => 
          array (
            0 => 'trading',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1052 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading.update',
          ),
          1 => 
          array (
            0 => 'trading',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.trading.destroy',
          ),
          1 => 
          array (
            0 => 'trading',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1089 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.withdrawal.show',
          ),
          1 => 
          array (
            0 => 'withdrawal',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.withdrawal.edit',
          ),
          1 => 
          array (
            0 => 'withdrawal',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.withdrawal.update',
          ),
          1 => 
          array (
            0 => 'withdrawal',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.withdrawal.destroy',
          ),
          1 => 
          array (
            0 => 'withdrawal',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.wallet.show',
          ),
          1 => 
          array (
            0 => 'wallet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.wallet.edit',
          ),
          1 => 
          array (
            0 => 'wallet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.wallet.update',
          ),
          1 => 
          array (
            0 => 'wallet',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.wallet.destroy',
          ),
          1 => 
          array (
            0 => 'wallet',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.llconfig.show',
          ),
          1 => 
          array (
            0 => 'llconfig',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.llconfig.edit',
          ),
          1 => 
          array (
            0 => 'llconfig',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.llconfig.update',
          ),
          1 => 
          array (
            0 => 'llconfig',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.admin.llconfig.destroy',
          ),
          1 => 
          array (
            0 => 'llconfig',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.menu.edit',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.menu.update',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.menu.destroy',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.permissions.show',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1427 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.permissions.edit',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.permissions.update',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.permissions.destroy',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.extensions.update',
          ),
          1 => 
          array (
            0 => 'extension',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1498 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.dcat-admin.operation-log.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.llconfig.show',
          ),
          1 => 
          array (
            0 => 'llconfig',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1542 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.llconfig.edit',
          ),
          1 => 
          array (
            0 => 'llconfig',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.llconfig.update',
          ),
          1 => 
          array (
            0 => 'llconfig',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dcat.agent-admin.llconfig.destroy',
          ),
          1 => 
          array (
            0 => 'llconfig',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'autologin',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.download',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.clear-cache',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1674 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.delete',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1712 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.download',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1733 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.index',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'dcat.admin.dcat-api.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dcat-api/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\HandleActionController@handle',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\HandleActionController@handle',
        'as' => 'dcat.admin.dcat-api.action',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.dcat-api.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dcat-api/form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\HandleFormController@handle',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\HandleFormController@handle',
        'as' => 'dcat.admin.dcat-api.form',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.dcat-api.form.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dcat-api/form/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\HandleFormController@uploadFile',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\HandleFormController@uploadFile',
        'as' => 'dcat.admin.dcat-api.form.upload',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.dcat-api.form.destroy-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dcat-api/form/destroy-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\HandleFormController@destroyFile',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\HandleFormController@destroyFile',
        'as' => 'dcat.admin.dcat-api.form.destroy-file',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.dcat-api.value' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dcat-api/value',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ValueController@handle',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ValueController@handle',
        'as' => 'dcat.admin.dcat-api.value',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.dcat-api.render' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dcat-api/render',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RenderableController@handle',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RenderableController@handle',
        'as' => 'dcat.admin.dcat-api.render',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.dcat-api.tinymce.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dcat-api/tinymce/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\TinymceController@upload',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\TinymceController@upload',
        'as' => 'dcat.admin.dcat-api.tinymce.upload',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.dcat-api.editor-md.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dcat-api/editor-md/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\EditorMDController@upload',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\EditorMDController@upload',
        'as' => 'dcat.admin.dcat-api.editor-md.upload',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.users.index',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@index',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.users.create',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@create',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@create',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/auth/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.users.store',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@store',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@store',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.users.show',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@show',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@show',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.users.edit',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@edit',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@edit',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/auth/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.users.update',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@update',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@update',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/auth/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.users.destroy',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@destroy',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@destroy',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.menu.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.menu.index',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@index',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.menu.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/auth/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.menu.store',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@store',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@store',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.menu.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/menu/{menu}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.menu.edit',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@edit',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@edit',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.menu.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/auth/menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.menu.update',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@update',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@update',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.menu.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/auth/menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.menu.destroy',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@destroy',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@destroy',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.roles.index',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@index',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.roles.create',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@create',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@create',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/auth/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.roles.store',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@store',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@store',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.roles.show',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@show',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@show',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.roles.edit',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@edit',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@edit',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/auth/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.roles.update',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@update',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@update',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/auth/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.roles.destroy',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@destroy',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@destroy',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.permissions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.permissions.index',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@index',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.permissions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/permissions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.permissions.create',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@create',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@create',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.permissions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/auth/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.permissions.store',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@store',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@store',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.permissions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.permissions.show',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@show',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@show',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.permissions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/permissions/{permission}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.permissions.edit',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@edit',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@edit',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.permissions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/auth/permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.permissions.update',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@update',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@update',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.permissions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/auth/permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.permissions.destroy',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@destroy',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@destroy',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.extensions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/extensions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.extensions.index',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ExtensionController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ExtensionController@index',
        'namespace' => NULL,
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.extensions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/auth/extensions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.extensions.store',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ExtensionController@store',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ExtensionController@store',
        'namespace' => NULL,
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.extensions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/auth/extensions/{extension}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.extensions.update',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ExtensionController@update',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ExtensionController@update',
        'namespace' => NULL,
        'prefix' => 'admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Admin\\Controllers\\AuthController@getLogin',
        'controller' => 'App\\Admin\\Controllers\\AuthController@getLogin',
        'as' => 'dcat.admin.',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.generated::PSj27Y1QqrPWl8R7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Admin\\Controllers\\AuthController@postLogin',
        'controller' => 'App\\Admin\\Controllers\\AuthController@postLogin',
        'as' => 'dcat.admin.generated::PSj27Y1QqrPWl8R7',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.generated::ODJVOuTBkCqobmit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Admin\\Controllers\\AuthController@getLogout',
        'controller' => 'App\\Admin\\Controllers\\AuthController@getLogout',
        'as' => 'dcat.admin.generated::ODJVOuTBkCqobmit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.generated::H4K8H5zjTuJteRkx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Admin\\Controllers\\AuthController@getSetting',
        'controller' => 'App\\Admin\\Controllers\\AuthController@getSetting',
        'as' => 'dcat.admin.generated::H4K8H5zjTuJteRkx',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.generated::EPuGOvhimthMinB6' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/auth/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Admin\\Controllers\\AuthController@putSetting',
        'controller' => 'App\\Admin\\Controllers\\AuthController@putSetting',
        'as' => 'dcat.admin.generated::EPuGOvhimthMinB6',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.generated::1ANydGuHIXHS1O4V' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/helpers/scaffold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ScaffoldController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ScaffoldController@index',
        'as' => 'dcat.admin.generated::1ANydGuHIXHS1O4V',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.generated::FAC9PznfEJvlg0dh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/helpers/scaffold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ScaffoldController@store',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ScaffoldController@store',
        'as' => 'dcat.admin.generated::FAC9PznfEJvlg0dh',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.generated::3M6VqjDVfP7K3jCM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/helpers/scaffold/table',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ScaffoldController@table',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ScaffoldController@table',
        'as' => 'dcat.admin.generated::3M6VqjDVfP7K3jCM',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.generated::60vKavrZ40MBaayg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/helpers/icons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\IconController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\IconController@index',
        'as' => 'dcat.admin.generated::60vKavrZ40MBaayg',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.UserWalletDetail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/UserWalletDetail',
      'action' => 
      array (
        'middleware' => 'admin.app:admin',
        'uses' => 'App\\Admin\\Renderable\\WalletDetail@handle',
        'controller' => 'App\\Admin\\Renderable\\WalletDetail@handle',
        'as' => 'dcat.admin.UserWalletDetail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.tinymcemedia.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tinymcemedia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Admin\\Controllers\\TinymceMediaController@index',
        'controller' => 'App\\Admin\\Controllers\\TinymceMediaController@index',
        'as' => 'dcat.admin.tinymcemedia.index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KVgngXf3f1rSzcCt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'domain' => NULL,
        'uses' => 'Mosiboom\\DcatIframeTab\\Controllers\\IframeController@index',
        'controller' => 'Mosiboom\\DcatIframeTab\\Controllers\\IframeController@index',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::KVgngXf3f1rSzcCt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.generated::swmKBf7CwlJofZM0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Admin\\Controllers\\HomeController@index',
        'controller' => 'App\\Admin\\Controllers\\HomeController@index',
        'as' => 'dcat.admin.generated::swmKBf7CwlJofZM0',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_mange.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_mange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_mange.index',
        'uses' => 'App\\Admin\\Controllers\\UserController@index',
        'controller' => 'App\\Admin\\Controllers\\UserController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_mange.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_mange/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_mange.create',
        'uses' => 'App\\Admin\\Controllers\\UserController@create',
        'controller' => 'App\\Admin\\Controllers\\UserController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_mange.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user_mange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_mange.store',
        'uses' => 'App\\Admin\\Controllers\\UserController@store',
        'controller' => 'App\\Admin\\Controllers\\UserController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_mange.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_mange/{user_mange}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_mange.show',
        'uses' => 'App\\Admin\\Controllers\\UserController@show',
        'controller' => 'App\\Admin\\Controllers\\UserController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_mange.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_mange/{user_mange}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_mange.edit',
        'uses' => 'App\\Admin\\Controllers\\UserController@edit',
        'controller' => 'App\\Admin\\Controllers\\UserController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_mange.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/user_mange/{user_mange}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_mange.update',
        'uses' => 'App\\Admin\\Controllers\\UserController@update',
        'controller' => 'App\\Admin\\Controllers\\UserController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_mange.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/user_mange/{user_mange}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_mange.destroy',
        'uses' => 'App\\Admin\\Controllers\\UserController@destroy',
        'controller' => 'App\\Admin\\Controllers\\UserController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.news.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.news.index',
        'uses' => 'App\\Admin\\Controllers\\NewsController@index',
        'controller' => 'App\\Admin\\Controllers\\NewsController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.news.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.news.create',
        'uses' => 'App\\Admin\\Controllers\\NewsController@create',
        'controller' => 'App\\Admin\\Controllers\\NewsController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.news.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.news.store',
        'uses' => 'App\\Admin\\Controllers\\NewsController@store',
        'controller' => 'App\\Admin\\Controllers\\NewsController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.news.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.news.show',
        'uses' => 'App\\Admin\\Controllers\\NewsController@show',
        'controller' => 'App\\Admin\\Controllers\\NewsController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.news.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/{news}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.news.edit',
        'uses' => 'App\\Admin\\Controllers\\NewsController@edit',
        'controller' => 'App\\Admin\\Controllers\\NewsController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.news.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.news.update',
        'uses' => 'App\\Admin\\Controllers\\NewsController@update',
        'controller' => 'App\\Admin\\Controllers\\NewsController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.news.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.news.destroy',
        'uses' => 'App\\Admin\\Controllers\\NewsController@destroy',
        'controller' => 'App\\Admin\\Controllers\\NewsController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.base-setting.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/base-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.base-setting.index',
        'uses' => 'App\\Admin\\Controllers\\BaseSettingController@index',
        'controller' => 'App\\Admin\\Controllers\\BaseSettingController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.base-setting.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/base-setting/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.base-setting.create',
        'uses' => 'App\\Admin\\Controllers\\BaseSettingController@create',
        'controller' => 'App\\Admin\\Controllers\\BaseSettingController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.base-setting.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/base-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.base-setting.store',
        'uses' => 'App\\Admin\\Controllers\\BaseSettingController@store',
        'controller' => 'App\\Admin\\Controllers\\BaseSettingController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.base-setting.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/base-setting/{base_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.base-setting.show',
        'uses' => 'App\\Admin\\Controllers\\BaseSettingController@show',
        'controller' => 'App\\Admin\\Controllers\\BaseSettingController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.base-setting.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/base-setting/{base_setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.base-setting.edit',
        'uses' => 'App\\Admin\\Controllers\\BaseSettingController@edit',
        'controller' => 'App\\Admin\\Controllers\\BaseSettingController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.base-setting.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/base-setting/{base_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.base-setting.update',
        'uses' => 'App\\Admin\\Controllers\\BaseSettingController@update',
        'controller' => 'App\\Admin\\Controllers\\BaseSettingController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.base-setting.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/base-setting/{base_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.base-setting.destroy',
        'uses' => 'App\\Admin\\Controllers\\BaseSettingController@destroy',
        'controller' => 'App\\Admin\\Controllers\\BaseSettingController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_authentication.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_authentication',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_authentication.index',
        'uses' => 'App\\Admin\\Controllers\\UserAuthenticationController@index',
        'controller' => 'App\\Admin\\Controllers\\UserAuthenticationController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_authentication.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_authentication/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_authentication.create',
        'uses' => 'App\\Admin\\Controllers\\UserAuthenticationController@create',
        'controller' => 'App\\Admin\\Controllers\\UserAuthenticationController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_authentication.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user_authentication',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_authentication.store',
        'uses' => 'App\\Admin\\Controllers\\UserAuthenticationController@store',
        'controller' => 'App\\Admin\\Controllers\\UserAuthenticationController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_authentication.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_authentication/{user_authentication}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_authentication.show',
        'uses' => 'App\\Admin\\Controllers\\UserAuthenticationController@show',
        'controller' => 'App\\Admin\\Controllers\\UserAuthenticationController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_authentication.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_authentication/{user_authentication}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_authentication.edit',
        'uses' => 'App\\Admin\\Controllers\\UserAuthenticationController@edit',
        'controller' => 'App\\Admin\\Controllers\\UserAuthenticationController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_authentication.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/user_authentication/{user_authentication}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_authentication.update',
        'uses' => 'App\\Admin\\Controllers\\UserAuthenticationController@update',
        'controller' => 'App\\Admin\\Controllers\\UserAuthenticationController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_authentication.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/user_authentication/{user_authentication}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_authentication.destroy',
        'uses' => 'App\\Admin\\Controllers\\UserAuthenticationController@destroy',
        'controller' => 'App\\Admin\\Controllers\\UserAuthenticationController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.c2cOrder.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/c2cOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.c2cOrder.index',
        'uses' => 'App\\Admin\\Controllers\\C2cOrderController@index',
        'controller' => 'App\\Admin\\Controllers\\C2cOrderController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.c2cOrder.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/c2cOrder/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.c2cOrder.create',
        'uses' => 'App\\Admin\\Controllers\\C2cOrderController@create',
        'controller' => 'App\\Admin\\Controllers\\C2cOrderController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.c2cOrder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/c2cOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.c2cOrder.store',
        'uses' => 'App\\Admin\\Controllers\\C2cOrderController@store',
        'controller' => 'App\\Admin\\Controllers\\C2cOrderController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.c2cOrder.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/c2cOrder/{c2cOrder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.c2cOrder.show',
        'uses' => 'App\\Admin\\Controllers\\C2cOrderController@show',
        'controller' => 'App\\Admin\\Controllers\\C2cOrderController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.c2cOrder.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/c2cOrder/{c2cOrder}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.c2cOrder.edit',
        'uses' => 'App\\Admin\\Controllers\\C2cOrderController@edit',
        'controller' => 'App\\Admin\\Controllers\\C2cOrderController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.c2cOrder.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/c2cOrder/{c2cOrder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.c2cOrder.update',
        'uses' => 'App\\Admin\\Controllers\\C2cOrderController@update',
        'controller' => 'App\\Admin\\Controllers\\C2cOrderController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.c2cOrder.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/c2cOrder/{c2cOrder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.c2cOrder.destroy',
        'uses' => 'App\\Admin\\Controllers\\C2cOrderController@destroy',
        'controller' => 'App\\Admin\\Controllers\\C2cOrderController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.order_trade.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order_trade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.order_trade.index',
        'uses' => 'App\\Admin\\Controllers\\TradesOrderController@index',
        'controller' => 'App\\Admin\\Controllers\\TradesOrderController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.order_trade.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order_trade/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.order_trade.create',
        'uses' => 'App\\Admin\\Controllers\\TradesOrderController@create',
        'controller' => 'App\\Admin\\Controllers\\TradesOrderController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.order_trade.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/order_trade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.order_trade.store',
        'uses' => 'App\\Admin\\Controllers\\TradesOrderController@store',
        'controller' => 'App\\Admin\\Controllers\\TradesOrderController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.order_trade.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order_trade/{order_trade}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.order_trade.show',
        'uses' => 'App\\Admin\\Controllers\\TradesOrderController@show',
        'controller' => 'App\\Admin\\Controllers\\TradesOrderController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.order_trade.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order_trade/{order_trade}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.order_trade.edit',
        'uses' => 'App\\Admin\\Controllers\\TradesOrderController@edit',
        'controller' => 'App\\Admin\\Controllers\\TradesOrderController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.order_trade.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/order_trade/{order_trade}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.order_trade.update',
        'uses' => 'App\\Admin\\Controllers\\TradesOrderController@update',
        'controller' => 'App\\Admin\\Controllers\\TradesOrderController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.order_trade.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/order_trade/{order_trade}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.order_trade.destroy',
        'uses' => 'App\\Admin\\Controllers\\TradesOrderController@destroy',
        'controller' => 'App\\Admin\\Controllers\\TradesOrderController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.admin_setting.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin_setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.admin_setting.index',
        'uses' => 'App\\Admin\\Controllers\\SettingController@index',
        'controller' => 'App\\Admin\\Controllers\\SettingController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.admin_setting.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin_setting/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.admin_setting.create',
        'uses' => 'App\\Admin\\Controllers\\SettingController@create',
        'controller' => 'App\\Admin\\Controllers\\SettingController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.admin_setting.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin_setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.admin_setting.store',
        'uses' => 'App\\Admin\\Controllers\\SettingController@store',
        'controller' => 'App\\Admin\\Controllers\\SettingController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.admin_setting.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin_setting/{admin_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.admin_setting.show',
        'uses' => 'App\\Admin\\Controllers\\SettingController@show',
        'controller' => 'App\\Admin\\Controllers\\SettingController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.admin_setting.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin_setting/{admin_setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.admin_setting.edit',
        'uses' => 'App\\Admin\\Controllers\\SettingController@edit',
        'controller' => 'App\\Admin\\Controllers\\SettingController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.admin_setting.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin_setting/{admin_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.admin_setting.update',
        'uses' => 'App\\Admin\\Controllers\\SettingController@update',
        'controller' => 'App\\Admin\\Controllers\\SettingController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.admin_setting.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin_setting/{admin_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.admin_setting.destroy',
        'uses' => 'App\\Admin\\Controllers\\SettingController@destroy',
        'controller' => 'App\\Admin\\Controllers\\SettingController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_type.index',
        'uses' => 'App\\Admin\\Controllers\\UserTypeController@index',
        'controller' => 'App\\Admin\\Controllers\\UserTypeController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_type.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_type/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_type.create',
        'uses' => 'App\\Admin\\Controllers\\UserTypeController@create',
        'controller' => 'App\\Admin\\Controllers\\UserTypeController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_type.store',
        'uses' => 'App\\Admin\\Controllers\\UserTypeController@store',
        'controller' => 'App\\Admin\\Controllers\\UserTypeController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_type.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_type/{user_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_type.show',
        'uses' => 'App\\Admin\\Controllers\\UserTypeController@show',
        'controller' => 'App\\Admin\\Controllers\\UserTypeController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user_type/{user_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_type.edit',
        'uses' => 'App\\Admin\\Controllers\\UserTypeController@edit',
        'controller' => 'App\\Admin\\Controllers\\UserTypeController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/user_type/{user_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_type.update',
        'uses' => 'App\\Admin\\Controllers\\UserTypeController@update',
        'controller' => 'App\\Admin\\Controllers\\UserTypeController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.user_type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/user_type/{user_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.user_type.destroy',
        'uses' => 'App\\Admin\\Controllers\\UserTypeController@destroy',
        'controller' => 'App\\Admin\\Controllers\\UserTypeController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.recharge_record.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/recharge_record',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.recharge_record.index',
        'uses' => 'App\\Admin\\Controllers\\RechargeRecordController@index',
        'controller' => 'App\\Admin\\Controllers\\RechargeRecordController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.recharge_record.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/recharge_record/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.recharge_record.create',
        'uses' => 'App\\Admin\\Controllers\\RechargeRecordController@create',
        'controller' => 'App\\Admin\\Controllers\\RechargeRecordController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.recharge_record.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/recharge_record',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.recharge_record.store',
        'uses' => 'App\\Admin\\Controllers\\RechargeRecordController@store',
        'controller' => 'App\\Admin\\Controllers\\RechargeRecordController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.recharge_record.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/recharge_record/{recharge_record}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.recharge_record.show',
        'uses' => 'App\\Admin\\Controllers\\RechargeRecordController@show',
        'controller' => 'App\\Admin\\Controllers\\RechargeRecordController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.recharge_record.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/recharge_record/{recharge_record}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.recharge_record.edit',
        'uses' => 'App\\Admin\\Controllers\\RechargeRecordController@edit',
        'controller' => 'App\\Admin\\Controllers\\RechargeRecordController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.recharge_record.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/recharge_record/{recharge_record}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.recharge_record.update',
        'uses' => 'App\\Admin\\Controllers\\RechargeRecordController@update',
        'controller' => 'App\\Admin\\Controllers\\RechargeRecordController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.recharge_record.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/recharge_record/{recharge_record}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.recharge_record.destroy',
        'uses' => 'App\\Admin\\Controllers\\RechargeRecordController@destroy',
        'controller' => 'App\\Admin\\Controllers\\RechargeRecordController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.transaction_flow.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transaction_flow',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.transaction_flow.index',
        'uses' => 'App\\Admin\\Controllers\\TransactionFlowController@index',
        'controller' => 'App\\Admin\\Controllers\\TransactionFlowController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.transaction_flow.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transaction_flow/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.transaction_flow.create',
        'uses' => 'App\\Admin\\Controllers\\TransactionFlowController@create',
        'controller' => 'App\\Admin\\Controllers\\TransactionFlowController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.transaction_flow.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/transaction_flow',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.transaction_flow.store',
        'uses' => 'App\\Admin\\Controllers\\TransactionFlowController@store',
        'controller' => 'App\\Admin\\Controllers\\TransactionFlowController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.transaction_flow.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transaction_flow/{transaction_flow}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.transaction_flow.show',
        'uses' => 'App\\Admin\\Controllers\\TransactionFlowController@show',
        'controller' => 'App\\Admin\\Controllers\\TransactionFlowController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.transaction_flow.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transaction_flow/{transaction_flow}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.transaction_flow.edit',
        'uses' => 'App\\Admin\\Controllers\\TransactionFlowController@edit',
        'controller' => 'App\\Admin\\Controllers\\TransactionFlowController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.transaction_flow.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/transaction_flow/{transaction_flow}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.transaction_flow.update',
        'uses' => 'App\\Admin\\Controllers\\TransactionFlowController@update',
        'controller' => 'App\\Admin\\Controllers\\TransactionFlowController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.transaction_flow.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/transaction_flow/{transaction_flow}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.transaction_flow.destroy',
        'uses' => 'App\\Admin\\Controllers\\TransactionFlowController@destroy',
        'controller' => 'App\\Admin\\Controllers\\TransactionFlowController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.withdrawal.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdrawal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.withdrawal.index',
        'uses' => 'App\\Admin\\Controllers\\WithdrawalController@index',
        'controller' => 'App\\Admin\\Controllers\\WithdrawalController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.withdrawal.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdrawal/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.withdrawal.create',
        'uses' => 'App\\Admin\\Controllers\\WithdrawalController@create',
        'controller' => 'App\\Admin\\Controllers\\WithdrawalController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.withdrawal.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/withdrawal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.withdrawal.store',
        'uses' => 'App\\Admin\\Controllers\\WithdrawalController@store',
        'controller' => 'App\\Admin\\Controllers\\WithdrawalController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.withdrawal.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdrawal/{withdrawal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.withdrawal.show',
        'uses' => 'App\\Admin\\Controllers\\WithdrawalController@show',
        'controller' => 'App\\Admin\\Controllers\\WithdrawalController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.withdrawal.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdrawal/{withdrawal}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.withdrawal.edit',
        'uses' => 'App\\Admin\\Controllers\\WithdrawalController@edit',
        'controller' => 'App\\Admin\\Controllers\\WithdrawalController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.withdrawal.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/withdrawal/{withdrawal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.withdrawal.update',
        'uses' => 'App\\Admin\\Controllers\\WithdrawalController@update',
        'controller' => 'App\\Admin\\Controllers\\WithdrawalController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.withdrawal.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/withdrawal/{withdrawal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.withdrawal.destroy',
        'uses' => 'App\\Admin\\Controllers\\WithdrawalController@destroy',
        'controller' => 'App\\Admin\\Controllers\\WithdrawalController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trading-pair',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair.index',
        'uses' => 'App\\Admin\\Controllers\\TradingPairController@index',
        'controller' => 'App\\Admin\\Controllers\\TradingPairController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trading-pair/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair.create',
        'uses' => 'App\\Admin\\Controllers\\TradingPairController@create',
        'controller' => 'App\\Admin\\Controllers\\TradingPairController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/trading-pair',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair.store',
        'uses' => 'App\\Admin\\Controllers\\TradingPairController@store',
        'controller' => 'App\\Admin\\Controllers\\TradingPairController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trading-pair/{trading_pair}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair.show',
        'uses' => 'App\\Admin\\Controllers\\TradingPairController@show',
        'controller' => 'App\\Admin\\Controllers\\TradingPairController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trading-pair/{trading_pair}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair.edit',
        'uses' => 'App\\Admin\\Controllers\\TradingPairController@edit',
        'controller' => 'App\\Admin\\Controllers\\TradingPairController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/trading-pair/{trading_pair}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair.update',
        'uses' => 'App\\Admin\\Controllers\\TradingPairController@update',
        'controller' => 'App\\Admin\\Controllers\\TradingPairController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/trading-pair/{trading_pair}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair.destroy',
        'uses' => 'App\\Admin\\Controllers\\TradingPairController@destroy',
        'controller' => 'App\\Admin\\Controllers\\TradingPairController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair-cate.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trading-pair-cate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair-cate.index',
        'uses' => 'App\\Admin\\Controllers\\TradingPairCategoryController@index',
        'controller' => 'App\\Admin\\Controllers\\TradingPairCategoryController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair-cate.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trading-pair-cate/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair-cate.create',
        'uses' => 'App\\Admin\\Controllers\\TradingPairCategoryController@create',
        'controller' => 'App\\Admin\\Controllers\\TradingPairCategoryController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair-cate.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/trading-pair-cate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair-cate.store',
        'uses' => 'App\\Admin\\Controllers\\TradingPairCategoryController@store',
        'controller' => 'App\\Admin\\Controllers\\TradingPairCategoryController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair-cate.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trading-pair-cate/{trading_pair_cate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair-cate.show',
        'uses' => 'App\\Admin\\Controllers\\TradingPairCategoryController@show',
        'controller' => 'App\\Admin\\Controllers\\TradingPairCategoryController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair-cate.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trading-pair-cate/{trading_pair_cate}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair-cate.edit',
        'uses' => 'App\\Admin\\Controllers\\TradingPairCategoryController@edit',
        'controller' => 'App\\Admin\\Controllers\\TradingPairCategoryController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair-cate.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/trading-pair-cate/{trading_pair_cate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair-cate.update',
        'uses' => 'App\\Admin\\Controllers\\TradingPairCategoryController@update',
        'controller' => 'App\\Admin\\Controllers\\TradingPairCategoryController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading-pair-cate.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/trading-pair-cate/{trading_pair_cate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading-pair-cate.destroy',
        'uses' => 'App\\Admin\\Controllers\\TradingPairCategoryController@destroy',
        'controller' => 'App\\Admin\\Controllers\\TradingPairCategoryController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.wallet.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.wallet.index',
        'uses' => 'App\\Admin\\Controllers\\UserWalletController@index',
        'controller' => 'App\\Admin\\Controllers\\UserWalletController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.wallet.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.wallet.create',
        'uses' => 'App\\Admin\\Controllers\\UserWalletController@create',
        'controller' => 'App\\Admin\\Controllers\\UserWalletController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.wallet.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.wallet.store',
        'uses' => 'App\\Admin\\Controllers\\UserWalletController@store',
        'controller' => 'App\\Admin\\Controllers\\UserWalletController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.wallet.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet/{wallet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.wallet.show',
        'uses' => 'App\\Admin\\Controllers\\UserWalletController@show',
        'controller' => 'App\\Admin\\Controllers\\UserWalletController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.wallet.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet/{wallet}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.wallet.edit',
        'uses' => 'App\\Admin\\Controllers\\UserWalletController@edit',
        'controller' => 'App\\Admin\\Controllers\\UserWalletController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.wallet.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/wallet/{wallet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.wallet.update',
        'uses' => 'App\\Admin\\Controllers\\UserWalletController@update',
        'controller' => 'App\\Admin\\Controllers\\UserWalletController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.wallet.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/wallet/{wallet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.wallet.destroy',
        'uses' => 'App\\Admin\\Controllers\\UserWalletController@destroy',
        'controller' => 'App\\Admin\\Controllers\\UserWalletController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading.index',
        'uses' => 'App\\Admin\\Controllers\\TradingController@index',
        'controller' => 'App\\Admin\\Controllers\\TradingController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trading/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading.create',
        'uses' => 'App\\Admin\\Controllers\\TradingController@create',
        'controller' => 'App\\Admin\\Controllers\\TradingController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/trading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading.store',
        'uses' => 'App\\Admin\\Controllers\\TradingController@store',
        'controller' => 'App\\Admin\\Controllers\\TradingController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trading/{trading}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading.show',
        'uses' => 'App\\Admin\\Controllers\\TradingController@show',
        'controller' => 'App\\Admin\\Controllers\\TradingController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trading/{trading}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading.edit',
        'uses' => 'App\\Admin\\Controllers\\TradingController@edit',
        'controller' => 'App\\Admin\\Controllers\\TradingController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/trading/{trading}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading.update',
        'uses' => 'App\\Admin\\Controllers\\TradingController@update',
        'controller' => 'App\\Admin\\Controllers\\TradingController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.trading.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/trading/{trading}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.trading.destroy',
        'uses' => 'App\\Admin\\Controllers\\TradingController@destroy',
        'controller' => 'App\\Admin\\Controllers\\TradingController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currency.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currency.index',
        'uses' => 'App\\Admin\\Controllers\\WalletCurrencyController@index',
        'controller' => 'App\\Admin\\Controllers\\WalletCurrencyController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currency.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currency.create',
        'uses' => 'App\\Admin\\Controllers\\WalletCurrencyController@create',
        'controller' => 'App\\Admin\\Controllers\\WalletCurrencyController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currency.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currency.store',
        'uses' => 'App\\Admin\\Controllers\\WalletCurrencyController@store',
        'controller' => 'App\\Admin\\Controllers\\WalletCurrencyController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currency.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currency.show',
        'uses' => 'App\\Admin\\Controllers\\WalletCurrencyController@show',
        'controller' => 'App\\Admin\\Controllers\\WalletCurrencyController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currency.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/{currency}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currency.edit',
        'uses' => 'App\\Admin\\Controllers\\WalletCurrencyController@edit',
        'controller' => 'App\\Admin\\Controllers\\WalletCurrencyController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currency.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/currency/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currency.update',
        'uses' => 'App\\Admin\\Controllers\\WalletCurrencyController@update',
        'controller' => 'App\\Admin\\Controllers\\WalletCurrencyController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currency.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/currency/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currency.destroy',
        'uses' => 'App\\Admin\\Controllers\\WalletCurrencyController@destroy',
        'controller' => 'App\\Admin\\Controllers\\WalletCurrencyController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currencies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currencies.index',
        'uses' => 'App\\Admin\\Controllers\\CurrencyController@index',
        'controller' => 'App\\Admin\\Controllers\\CurrencyController@index',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currencies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currencies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currencies.create',
        'uses' => 'App\\Admin\\Controllers\\CurrencyController@create',
        'controller' => 'App\\Admin\\Controllers\\CurrencyController@create',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currencies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currencies.store',
        'uses' => 'App\\Admin\\Controllers\\CurrencyController@store',
        'controller' => 'App\\Admin\\Controllers\\CurrencyController@store',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currencies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currencies.show',
        'uses' => 'App\\Admin\\Controllers\\CurrencyController@show',
        'controller' => 'App\\Admin\\Controllers\\CurrencyController@show',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currencies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currencies/{currency}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currencies.edit',
        'uses' => 'App\\Admin\\Controllers\\CurrencyController@edit',
        'controller' => 'App\\Admin\\Controllers\\CurrencyController@edit',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currencies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currencies.update',
        'uses' => 'App\\Admin\\Controllers\\CurrencyController@update',
        'controller' => 'App\\Admin\\Controllers\\CurrencyController@update',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.currencies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.currencies.destroy',
        'uses' => 'App\\Admin\\Controllers\\CurrencyController@destroy',
        'controller' => 'App\\Admin\\Controllers\\CurrencyController@destroy',
        'namespace' => 'App\\Admin\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.dcat-api.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/dcat-api/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\HandleActionController@handle',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\HandleActionController@handle',
        'as' => 'dcat.agent-admin.dcat-api.action',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/agent-admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.dcat-api.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/dcat-api/form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\HandleFormController@handle',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\HandleFormController@handle',
        'as' => 'dcat.agent-admin.dcat-api.form',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/agent-admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.dcat-api.form.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/dcat-api/form/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\HandleFormController@uploadFile',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\HandleFormController@uploadFile',
        'as' => 'dcat.agent-admin.dcat-api.form.upload',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/agent-admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.dcat-api.form.destroy-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/dcat-api/form/destroy-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\HandleFormController@destroyFile',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\HandleFormController@destroyFile',
        'as' => 'dcat.agent-admin.dcat-api.form.destroy-file',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/agent-admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.dcat-api.value' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/dcat-api/value',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ValueController@handle',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ValueController@handle',
        'as' => 'dcat.agent-admin.dcat-api.value',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/agent-admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.dcat-api.render' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/dcat-api/render',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RenderableController@handle',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RenderableController@handle',
        'as' => 'dcat.agent-admin.dcat-api.render',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/agent-admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.dcat-api.tinymce.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/dcat-api/tinymce/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\TinymceController@upload',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\TinymceController@upload',
        'as' => 'dcat.agent-admin.dcat-api.tinymce.upload',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/agent-admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.dcat-api.editor-md.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/dcat-api/editor-md/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\EditorMDController@upload',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\EditorMDController@upload',
        'as' => 'dcat.agent-admin.dcat-api.editor-md.upload',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => '/agent-admin/dcat-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.users.index',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@index',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.users.create',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@create',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@create',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/auth/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.users.store',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@store',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@store',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.users.show',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@show',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@show',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.users.edit',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@edit',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@edit',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'agent-admin/auth/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.users.update',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@update',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@update',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'agent-admin/auth/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.users.destroy',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\UserController@destroy',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\UserController@destroy',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.menu.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.menu.index',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@index',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.menu.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/auth/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.menu.store',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@store',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@store',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.menu.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/menu/{menu}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.menu.edit',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@edit',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@edit',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.menu.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'agent-admin/auth/menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.menu.update',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@update',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@update',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.menu.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'agent-admin/auth/menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.menu.destroy',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@destroy',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\MenuController@destroy',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.roles.index',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@index',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.roles.create',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@create',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@create',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/auth/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.roles.store',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@store',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@store',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.roles.show',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@show',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@show',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.roles.edit',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@edit',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@edit',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'agent-admin/auth/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.roles.update',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@update',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@update',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'agent-admin/auth/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.roles.destroy',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@destroy',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\RoleController@destroy',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.permissions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.permissions.index',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@index',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.permissions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/permissions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.permissions.create',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@create',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@create',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.permissions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/auth/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.permissions.store',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@store',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@store',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.permissions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.permissions.show',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@show',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@show',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.permissions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/permissions/{permission}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.permissions.edit',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@edit',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@edit',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.permissions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'agent-admin/auth/permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.permissions.update',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@update',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@update',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.permissions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'agent-admin/auth/permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.permissions.destroy',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@destroy',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\PermissionController@destroy',
        'namespace' => 'Dcat\\Admin\\Http\\Controllers',
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.extensions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/extensions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.extensions.index',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ExtensionController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ExtensionController@index',
        'namespace' => NULL,
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.extensions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/auth/extensions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.extensions.store',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ExtensionController@store',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ExtensionController@store',
        'namespace' => NULL,
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.extensions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'agent-admin/auth/extensions/{extension}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.extensions.update',
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ExtensionController@update',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ExtensionController@update',
        'namespace' => NULL,
        'prefix' => 'agent-admin/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\AgentAdmin\\Controllers\\AuthController@getLogin',
        'controller' => 'App\\AgentAdmin\\Controllers\\AuthController@getLogin',
        'as' => 'dcat.agent-admin.',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::eax8kOpSP7kyo8tN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\AgentAdmin\\Controllers\\AuthController@postLogin',
        'controller' => 'App\\AgentAdmin\\Controllers\\AuthController@postLogin',
        'as' => 'dcat.agent-admin.generated::eax8kOpSP7kyo8tN',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::CULwbXv63yWUL4Sg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\AgentAdmin\\Controllers\\AuthController@getLogout',
        'controller' => 'App\\AgentAdmin\\Controllers\\AuthController@getLogout',
        'as' => 'dcat.agent-admin.generated::CULwbXv63yWUL4Sg',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::BZONYiuN6G0EdUWt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\AgentAdmin\\Controllers\\AuthController@getSetting',
        'controller' => 'App\\AgentAdmin\\Controllers\\AuthController@getSetting',
        'as' => 'dcat.agent-admin.generated::BZONYiuN6G0EdUWt',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::sbQo2OGPGN1gGL2a' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'agent-admin/auth/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\AgentAdmin\\Controllers\\AuthController@putSetting',
        'controller' => 'App\\AgentAdmin\\Controllers\\AuthController@putSetting',
        'as' => 'dcat.agent-admin.generated::sbQo2OGPGN1gGL2a',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::gvsMrxkFMMq4PvoM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/helpers/scaffold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ScaffoldController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ScaffoldController@index',
        'as' => 'dcat.agent-admin.generated::gvsMrxkFMMq4PvoM',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::KhI5BN8CpyhZEVUt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/helpers/scaffold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ScaffoldController@store',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ScaffoldController@store',
        'as' => 'dcat.agent-admin.generated::KhI5BN8CpyhZEVUt',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::L6Xj0Drzp5747wDU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/helpers/scaffold/table',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\ScaffoldController@table',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\ScaffoldController@table',
        'as' => 'dcat.agent-admin.generated::L6Xj0Drzp5747wDU',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::z4cDfnQ12FDcIEOs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/helpers/icons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\Http\\Controllers\\IconController@index',
        'controller' => 'Dcat\\Admin\\Http\\Controllers\\IconController@index',
        'as' => 'dcat.agent-admin.generated::z4cDfnQ12FDcIEOs',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::3yM98iHDAWqg5iSm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Mosiboom\\DcatIframeTab\\Controllers\\IframeController@index',
        'controller' => 'Mosiboom\\DcatIframeTab\\Controllers\\IframeController@index',
        'as' => 'dcat.agent-admin.generated::3yM98iHDAWqg5iSm',
        'namespace' => 'App\\AgentAdmin\\Controllers',
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::lbUH9qctpGPpNj94' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\AgentAdmin\\Controllers\\HomeController@index',
        'controller' => 'App\\AgentAdmin\\Controllers\\HomeController@index',
        'as' => 'dcat.agent-admin.generated::lbUH9qctpGPpNj94',
        'namespace' => 'App\\AgentAdmin\\Controllers',
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.dcat-admin.operation-log.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/auth/operation-logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\OperationLog\\Http\\Controllers\\LogController@index',
        'controller' => 'Dcat\\Admin\\OperationLog\\Http\\Controllers\\LogController@index',
        'as' => 'dcat.admin.dcat-admin.operation-log.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.dcat-admin.operation-log.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/auth/operation-logs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\OperationLog\\Http\\Controllers\\LogController@destroy',
        'controller' => 'Dcat\\Admin\\OperationLog\\Http\\Controllers\\LogController@destroy',
        'as' => 'dcat.admin.dcat-admin.operation-log.destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.dcat-admin.operation-log.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/auth/operation-logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\OperationLog\\Http\\Controllers\\LogController@index',
        'controller' => 'Dcat\\Admin\\OperationLog\\Http\\Controllers\\LogController@index',
        'as' => 'dcat.agent-admin.dcat-admin.operation-log.index',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.dcat-admin.operation-log.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'agent-admin/auth/operation-logs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Dcat\\Admin\\OperationLog\\Http\\Controllers\\LogController@destroy',
        'controller' => 'Dcat\\Admin\\OperationLog\\Http\\Controllers\\LogController@destroy',
        'as' => 'dcat.agent-admin.dcat-admin.operation-log.destroy',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.llconfig.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/llconfig',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.llconfig.index',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@index',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.llconfig.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/llconfig/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.llconfig.create',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@create',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.llconfig.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/llconfig',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.llconfig.store',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@store',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.llconfig.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/llconfig/{llconfig}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.llconfig.show',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@show',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.llconfig.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/llconfig/{llconfig}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.llconfig.edit',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@edit',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.llconfig.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/llconfig/{llconfig}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.llconfig.update',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@update',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.llconfig.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/llconfig/{llconfig}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.admin.llconfig.destroy',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@destroy',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.llconfig.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/llconfig',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.llconfig.index',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@index',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@index',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.llconfig.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/llconfig/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.llconfig.create',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@create',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@create',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.llconfig.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent-admin/llconfig',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.llconfig.store',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@store',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@store',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.llconfig.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/llconfig/{llconfig}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.llconfig.show',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@show',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@show',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.llconfig.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/llconfig/{llconfig}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.llconfig.edit',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@edit',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@edit',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.llconfig.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'agent-admin/llconfig/{llconfig}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.llconfig.update',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@update',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@update',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.llconfig.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'agent-admin/llconfig/{llconfig}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'as' => 'dcat.agent-admin.llconfig.destroy',
        'uses' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@destroy',
        'controller' => 'Ll\\DcatConfig\\Http\\Controllers\\DcatConfigController@destroy',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.generated::bhsmGvsp6ObST4Hr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dcat-easy-sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Weiwait\\DcatEasySms\\Http\\Controllers\\DcatEasySmsController@index',
        'controller' => 'Weiwait\\DcatEasySms\\Http\\Controllers\\DcatEasySmsController@index',
        'as' => 'dcat.admin.generated::bhsmGvsp6ObST4Hr',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::wfvByLWjMZLS8Uw2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/dcat-easy-sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Weiwait\\DcatEasySms\\Http\\Controllers\\DcatEasySmsController@index',
        'controller' => 'Weiwait\\DcatEasySms\\Http\\Controllers\\DcatEasySmsController@index',
        'as' => 'dcat.agent-admin.generated::wfvByLWjMZLS8Uw2',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.generated::0JipnX2Pihk2ATCn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dcat-smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Weiwait\\DcatSmtp\\Http\\Controllers\\DcatSmtpController@index',
        'controller' => 'Weiwait\\DcatSmtp\\Http\\Controllers\\DcatSmtpController@index',
        'as' => 'dcat.admin.generated::0JipnX2Pihk2ATCn',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::1WCbBpdk6SOEUNcW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/dcat-smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Weiwait\\DcatSmtp\\Http\\Controllers\\DcatSmtpController@index',
        'controller' => 'Weiwait\\DcatSmtp\\Http\\Controllers\\DcatSmtpController@index',
        'as' => 'dcat.agent-admin.generated::1WCbBpdk6SOEUNcW',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.media.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Jatdung\\MediaManager\\Http\\Controllers\\MediaManagerController@index',
        'controller' => 'Jatdung\\MediaManager\\Http\\Controllers\\MediaManagerController@index',
        'as' => 'dcat.admin.media.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.media.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Jatdung\\MediaManager\\Http\\Controllers\\MediaManagerController@destroy',
        'controller' => 'Jatdung\\MediaManager\\Http\\Controllers\\MediaManagerController@destroy',
        'as' => 'dcat.admin.media.destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.media.batch-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/media/batch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Jatdung\\MediaManager\\Http\\Controllers\\MediaManagerController@batchDestroy',
        'controller' => 'Jatdung\\MediaManager\\Http\\Controllers\\MediaManagerController@batchDestroy',
        'as' => 'dcat.admin.media.batch-destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.media.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Jatdung\\MediaManager\\Http\\Controllers\\MediaManagerController@index',
        'controller' => 'Jatdung\\MediaManager\\Http\\Controllers\\MediaManagerController@index',
        'as' => 'dcat.agent-admin.media.index',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.media.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'agent-admin/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Jatdung\\MediaManager\\Http\\Controllers\\MediaManagerController@destroy',
        'controller' => 'Jatdung\\MediaManager\\Http\\Controllers\\MediaManagerController@destroy',
        'as' => 'dcat.agent-admin.media.destroy',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.media.batch-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'agent-admin/media/batch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Jatdung\\MediaManager\\Http\\Controllers\\MediaManagerController@batchDestroy',
        'controller' => 'Jatdung\\MediaManager\\Http\\Controllers\\MediaManagerController@batchDestroy',
        'as' => 'dcat.agent-admin.media.batch-destroy',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.hosts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/hosts',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.hosts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/folders',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/folders/{folderIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'log-viewer/api/folders/{folderIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.clear-cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'log-viewer/api/folders/{folderIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/files/{fileIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'log-viewer/api/files/{fileIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'log-viewer/api/files/{fileIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.clear-cache-all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'log-viewer/api/clear-cache-all',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache-all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.delete-multiple-files' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'log-viewer/api/delete-multiple-files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete-multiple-files',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/logs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.logs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/{view?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.admin.media-extension.get-files' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/media-extension/get-files',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Pstldz\\MediaExtension\\Http\\Controllers\\MediaExtensionController@getFiles',
        'controller' => 'Pstldz\\MediaExtension\\Http\\Controllers\\MediaExtensionController@getFiles',
        'as' => 'dcat.admin.admin.media-extension.get-files',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.admin.media-extension.get-files' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/media-extension/get-files',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Pstldz\\MediaExtension\\Http\\Controllers\\MediaExtensionController@getFiles',
        'controller' => 'Pstldz\\MediaExtension\\Http\\Controllers\\MediaExtensionController@getFiles',
        'as' => 'dcat.agent-admin.admin.media-extension.get-files',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.admin.generated::fa0MWqDW59xnWmum' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dcat-marketplace',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Sparkinzy\\DcatMarketPlace\\Http\\Controllers\\DcatMarketPlaceController@index',
        'controller' => 'Sparkinzy\\DcatMarketPlace\\Http\\Controllers\\DcatMarketPlaceController@index',
        'as' => 'dcat.admin.generated::fa0MWqDW59xnWmum',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dcat.agent-admin.generated::K7SMyaZFtMGtylKI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent-admin/dcat-marketplace',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin.app:agent-admin',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'Sparkinzy\\DcatMarketPlace\\Http\\Controllers\\DcatMarketPlaceController@index',
        'controller' => 'Sparkinzy\\DcatMarketPlace\\Http\\Controllers\\DcatMarketPlaceController@index',
        'as' => 'dcat.agent-admin.generated::K7SMyaZFtMGtylKI',
        'namespace' => NULL,
        'prefix' => '/agent-admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\User\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\V1\\User\\AuthController@register',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register_send_code' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/RegisterSendCode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\User\\AuthController@RegisterSendCode',
        'controller' => 'App\\Http\\Controllers\\V1\\User\\AuthController@RegisterSendCode',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'register_send_code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/Login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\User\\AuthController@Login',
        'controller' => 'App\\Http\\Controllers\\V1\\User\\AuthController@Login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forget_password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/ForgetPassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\User\\AuthController@ForgetPassword',
        'controller' => 'App\\Http\\Controllers\\V1\\User\\AuthController@ForgetPassword',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'forget_password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login_out' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/LoginOut',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\User\\AuthController@LoginOut',
        'controller' => 'App\\Http\\Controllers\\V1\\User\\AuthController@LoginOut',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'login_out',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'change_password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/ChangePassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\User\\AuthController@ChangePassword',
        'controller' => 'App\\Http\\Controllers\\V1\\User\\AuthController@ChangePassword',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'change_password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'authentication' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/Authentication',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\User\\AuthController@Authentication',
        'controller' => 'App\\Http\\Controllers\\V1\\User\\AuthController@Authentication',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'authentication',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get_authentication' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/GetAuthentication',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\User\\AuthController@GetAuthentication',
        'controller' => 'App\\Http\\Controllers\\V1\\User\\AuthController@GetAuthentication',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'get_authentication',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get_user_info' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/GetUserInfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\User\\AuthController@GetUserInfo',
        'controller' => 'App\\Http\\Controllers\\V1\\User\\AuthController@GetUserInfo',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'get_user_info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'avatar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/Avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\User\\AuthController@Avatar',
        'controller' => 'App\\Http\\Controllers\\V1\\User\\AuthController@Avatar',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'avatar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'test1111' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\User\\AuthController@test',
        'controller' => 'App\\Http\\Controllers\\V1\\User\\AuthController@test',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'test1111',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get_message_code' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/common/get-msg-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Common\\SmsController@getMessageCode',
        'controller' => 'App\\Http\\Controllers\\V1\\Common\\SmsController@getMessageCode',
        'namespace' => NULL,
        'prefix' => 'api/common',
        'where' => 
        array (
        ),
        'as' => 'get_message_code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'check_code' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/common/check-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Common\\SmsController@checkCodes',
        'controller' => 'App\\Http\\Controllers\\V1\\Common\\SmsController@checkCodes',
        'namespace' => NULL,
        'prefix' => 'api/common',
        'where' => 
        array (
        ),
        'as' => 'check_code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get_email_code' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/common/get-email-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Common\\EmailController@sendEmail',
        'controller' => 'App\\Http\\Controllers\\V1\\Common\\EmailController@sendEmail',
        'namespace' => NULL,
        'prefix' => 'api/common',
        'where' => 
        array (
        ),
        'as' => 'get_email_code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'check_email_code' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/common/check-email-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Common\\EmailController@checkCodes',
        'controller' => 'App\\Http\\Controllers\\V1\\Common\\EmailController@checkCodes',
        'namespace' => NULL,
        'prefix' => 'api/common',
        'where' => 
        array (
        ),
        'as' => 'check_email_code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get_trading_pairs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/common/get-trading-pairs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Common\\TradingPairsController@getTradingPairs',
        'controller' => 'App\\Http\\Controllers\\V1\\Common\\TradingPairsController@getTradingPairs',
        'namespace' => NULL,
        'prefix' => 'api/common',
        'where' => 
        array (
        ),
        'as' => 'get_trading_pairs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'upload_file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/common/upload-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Common\\FileController@upload',
        'controller' => 'App\\Http\\Controllers\\V1\\Common\\FileController@upload',
        'namespace' => NULL,
        'prefix' => 'api/common',
        'where' => 
        array (
        ),
        'as' => 'upload_file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send_sell_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/orders/send-sell-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Orders\\OrdersController@sendSellOrders',
        'controller' => 'App\\Http\\Controllers\\V1\\Orders\\OrdersController@sendSellOrders',
        'namespace' => NULL,
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'send_sell_order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send_buy_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/orders/send-buy-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Orders\\OrdersController@sendBuyOrders',
        'controller' => 'App\\Http\\Controllers\\V1\\Orders\\OrdersController@sendBuyOrders',
        'namespace' => NULL,
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'send_buy_order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get_trad_buy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/orders/get-trad-buy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Orders\\OrdersController@getTradBuy',
        'controller' => 'App\\Http\\Controllers\\V1\\Orders\\OrdersController@getTradBuy',
        'namespace' => NULL,
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'get_trad_buy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/NewsList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\User\\NewsController@NewsList',
        'controller' => 'App\\Http\\Controllers\\V1\\User\\NewsController@NewsList',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'news_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recharge' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/financial/Recharge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@Recharge',
        'controller' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@Recharge',
        'namespace' => NULL,
        'prefix' => 'api/financial',
        'where' => 
        array (
        ),
        'as' => 'recharge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get_recharge' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/financial/GetRecharge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@GetRecharge',
        'controller' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@GetRecharge',
        'namespace' => NULL,
        'prefix' => 'api/financial',
        'where' => 
        array (
        ),
        'as' => 'get_recharge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recharge_list' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/financial/RechargeList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@RechargeList',
        'controller' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@RechargeList',
        'namespace' => NULL,
        'prefix' => 'api/financial',
        'where' => 
        array (
        ),
        'as' => 'recharge_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit_recharge' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/financial/EditRecharge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@EditRecharge',
        'controller' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@EditRecharge',
        'namespace' => NULL,
        'prefix' => 'api/financial',
        'where' => 
        array (
        ),
        'as' => 'edit_recharge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdrawal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/financial/Withdrawal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@Withdrawal',
        'controller' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@Withdrawal',
        'namespace' => NULL,
        'prefix' => 'api/financial',
        'where' => 
        array (
        ),
        'as' => 'withdrawal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wallet_list' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/financial/WalletList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@WalletList',
        'controller' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@WalletList',
        'namespace' => NULL,
        'prefix' => 'api/financial',
        'where' => 
        array (
        ),
        'as' => 'wallet_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'change_wallet_withdrawal_address' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/financial/ChangeWalletWithdrawalAddress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@ChangeWalletWithdrawalAddress',
        'controller' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@ChangeWalletWithdrawalAddress',
        'namespace' => NULL,
        'prefix' => 'api/financial',
        'where' => 
        array (
        ),
        'as' => 'change_wallet_withdrawal_address',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'change_wallet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/financial/ChangeWallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@ChangeWallet',
        'controller' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@ChangeWallet',
        'namespace' => NULL,
        'prefix' => 'api/financial',
        'where' => 
        array (
        ),
        'as' => 'change_wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wallet_detail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/financial/WalletDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@WalletDetail',
        'controller' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@WalletDetail',
        'namespace' => NULL,
        'prefix' => 'api/financial',
        'where' => 
        array (
        ),
        'as' => 'wallet_detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get_recharge_address' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/financial/GetRechargeAddress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'jwt',
        ),
        'uses' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@GetRechargeAddress',
        'controller' => 'App\\Http\\Controllers\\V1\\Financial\\FinancialController@GetRechargeAddress',
        'namespace' => NULL,
        'prefix' => 'api/financial',
        'where' => 
        array (
        ),
        'as' => 'get_recharge_address',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MkHOG2tw2an22HLC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000a1b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MkHOG2tw2an22HLC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WjZbehlPumhKIc3P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000a290000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WjZbehlPumhKIc3P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'autologin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'autologin/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:139:"function (\\App\\Models\\Agent\\AgentAdminUsers $user) {
    \\Auth::guard(\'agent-admin\')->login($user);
    return \\redirect(\'/agent-admin\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000a2b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'autologin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
