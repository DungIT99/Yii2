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
        'css/bootstrap.min.css',
        'css/hero-slider-style.css',
        'css/magnific-popup.css',
        'css/tooplate-style.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,400',
        'css/jquery-ui.css',
       
    ];
    public $js = [
        'js/jquery-1.11.3.min.js',
        'js/hero-slider-main.js',
        'js/bootstrap.min.js',
         'js/isInViewport.min.js',
         'js/tether.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/jquery-ui.js',
        'js/picker.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
       
    ];
}
