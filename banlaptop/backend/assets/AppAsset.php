<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
   public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'style.css',
           'stylelogin.css',
        'css/sb-admin.css',
        'css/plugins/morris.css',
        'font-awesome/css/font-awesome.min.css'

    ];
    public $js = [
    'js/jquery.js',
    'js/bootstrap.min.js',
         'js/main.js',
   'tinymce/tinymce.min.js',
     // 'ckeditor/ckeditor.js',
     'js/editor.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
