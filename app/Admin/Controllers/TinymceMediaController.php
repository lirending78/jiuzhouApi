<?php

namespace App\Admin\Controllers;



use Dcat\Admin\Admin;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Support\JavaScript;
use Dcat\Admin\Support\WebUploader as WebUploaderHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Admin\MediaManager;

class TinymceMediaController
{
    public function index(Content $content, Request $request)
    {
        Admin::requireAssets('@jatdung.media-manager');

        $path = $request->get('path') ?: '/';
        $disk = $request->get('disk') ?: '';
        $view = $request->get('view') ?: 'table';
        $type = $request->get('type') ?: 'all';

        $manager = new MediaManager($path, $disk);
        return $content
            ->full()
            ->body(Admin::view("admin.tinymcemedia.index", [
                'list'        => $manager->ls($type),
                'nav'         => $manager->navigation($view,$type),
                'view'        => $view,
                'path'        => $path,
                'disks'       => $manager->getAllDisks(),
                'currentDisk' => $disk,
                'type'        => $type,
            ]));
    }
}
