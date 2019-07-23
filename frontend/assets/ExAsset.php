<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ExAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/jquery-ui.css',
        'css/ex.css'
    ];
    public $js = [
'js/jquery-1.11.3.min.js',
    'js/bootstrap.min.js',
    'js/picker.js',
    'js/jquery-ui.js',
    
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
