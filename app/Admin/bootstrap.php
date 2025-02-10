<?php

use Dcat\Admin\Admin;
use Dcat\Admin\Form\Field\Editor;
use Dcat\Admin\Grid;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;
use Dcat\Admin\Show;
use Dcat\Admin\Layout\Navbar;
use Illuminate\Support\Facades\Cookie;
use Pstldz\MediaExtension\Form\SingleFile;
use Pstldz\MediaExtension\Form\Files;
use Pstldz\MediaExtension\Form\Photo;
use Pstldz\MediaExtension\Form\Photos;
use Pstldz\MediaExtension\Form\Video;
use Pstldz\MediaExtension\Form\Videos;
use Dcat\Admin\Support\JavaScript;
use Dcat\Admin\Layout\Menu;


/**
 * Dcat-admin - admin builder based on Laravel.
 * @author jqh <https://github.com/jqhph>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 *
 * extend custom field:
 * Dcat\Admin\Form::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Column::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Filter::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */




Admin::style(
    <<<CSS
.modal-open .modal::-webkit-scrollbar {
    width: 0 !important;
}
CSS
);


Form::resolving(function (Form $form) {
    $form->tools(function (Form\Tools $tools) {
        $tools->disableList();
        $tools->disableView();
        $tools->append('<div class="btn-group pull-right" style="margin-right: 5px"><a href="javascript:history.go(-1);" class="btn btn-sm btn-primary "><i class="feather icon-corner-up-left"></i><span class="d-none d-sm-inline">&nbsp;'.trans('admin.back').'</span></a></div>');
    });
    $form->disableViewCheck();
    $form->disableEditingCheck();
});

Grid::resolving(function (Grid $grid){
    $grid->disableViewButton();
    $grid->paginate(10);
});
$tinyMceFileUrl = route('dcat.admin.tinymcemedia.index',['path'=>'images','type'=>'all'],false);
$tinyMceImageUrl = route('dcat.admin.tinymcemedia.index',['path'=>'images','type'=>'image'],false);
$tinyMceMediaUrl = route('dcat.admin.tinymcemedia.index',['path'=>'videos','type'=>'video'],false);
Editor::resolving(function (Editor $editor) use($tinyMceFileUrl,$tinyMceImageUrl,$tinyMceMediaUrl){
    $editor->options([
        'plugins' => [
            'advlist',
            'autolink',
            'link',
            'image',
            'media',
            'lists',
            'preview',
            'code',
            'help',
            'fullscreen',
            'table',
            'autoresize',
            'codesample',
            'imagetools',
            'indent2em',
            'emoticons',
            'hr',
            'searchreplace',
            'wordcount',
            'importword'
        ],
        'toolbar' => [
            'undo redo | preview fullscreen | styleselect | fontsizeselect bold italic underline strikethrough forecolor backcolor | hr link image media emoticons blockquote removeformat codesample',
            'alignleft aligncenter alignright  alignjustify| indent2em indent outdent bullist numlist table subscript superscript | importword searchreplace code',
        ],
        'file_picker_callback'=> JavaScript::make(
            <<<JS
function (callback, value, meta) {
    this.addCommand('mceInsertMedia', function (ui, v) {
        callback(v.url);
    });
    if (meta.filetype == 'file'){
        this.windowManager.openUrl({
            title: '媒体管理',
            url: '$tinyMceFileUrl'
        })
    }
    if (meta.filetype == 'image'){
        this.windowManager.openUrl({
            title: '媒体管理',
            url: '$tinyMceImageUrl'
        })
    }
    if (meta.filetype == 'media'){
        this.windowManager.openUrl({
            title: '媒体管理',
            url: '$tinyMceMediaUrl'
        })
    }
}
JS
        ),
        'table_default_styles' => [
            'border-collapse' => 'collapse',
        ],
        'branding' => false,
        'max_height'=>600,
        'fontsize_formats'=>'12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px 52px 54px 56px 58px 60px',
    ])->height(600)->imageDirectory('images/'.date('Ymd'));
});

SingleFile::resolving(function (SingleFile $file){
    $file->autoUpload()->path('files')->move('files/'.date('Ymd'))->uniqueName()->retainable()->removable()->chunkSize(4*1024);
});
Files::resolving(function (Files $file){
    $file->autoUpload()->path('files')->move('files/'.date('Ymd'))->uniqueName()->retainable()->removable()->chunkSize(4*1024)->limit(100);
});
Photo::resolving(function (Photo $photo){
    $photo->autoUpload()->path('images')->move('images/'.date('Ymd'))->uniqueName()->retainable()->removable()->maxSize(4*1024);
});
Photos::resolving(function (Photos $photos){
    $photos->autoUpload()->path('images')->move('images/'.date('Ymd'))->uniqueName()->retainable()->removable()->maxSize(4*1024)->limit(100);
});
Video::resolving(function (Video $video){
    $video->autoUpload()->path('videos')->move('videos/'.date('Ymd'))->uniqueName()->retainable()->removable()->chunkSize(4*1024)->maxSize(20*1024);
});
Videos::resolving(function (Videos $videos){
    $videos->autoUpload()->path('videos')->move('videos/'.date('Ymd'))->uniqueName()->retainable()->removable()->chunkSize(4*1024)->limit(100);
});
//SeoInput::resolving(function (SeoInput $input){
//    $input->saving(function($v){
//        return array_values(array_filter($v));
//    });
//});
