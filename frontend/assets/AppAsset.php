<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    "bootstrap/css/bootstrap.min.css",
     "css/jquery-ui.css",
    "css/hover.css",
    "font-awesome/css/font-awesome.css",
    "css/owl.carousel.css",
    "css/owl.theme.css",
    "css/owl.transitions.css",
    "style.css"

    ];
    
    public $js = [
    "js/jquery-1.9.1.min.js",
    "js/popover.js",
    "js/pupop.js",

    "js/jquery.easing.min.js",
    "js/jquery.easy-ticker.js",
    "js/jquery-ui.js",
    "bootstrap/js/bootstrap.min.js",
    "js/jquery.sticky.js",
    "js/tkey.js",
        "js/owl.carousel.min.js",
    "js/slide.js",
    "js/gobal.js",
    "js/fb.js",
   

 



    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
