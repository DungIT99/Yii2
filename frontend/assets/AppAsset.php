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
        'css/jquery-ui.css',
        'css/site.css',
        'css/util.css',
        'css/main.css',
        'images/icons/favicon.png',
        'vendor/bootstrap/css/bootstrap.min.css',
        'fonts/font-awesome-4.7.0/css/font-awesome.min.css',
        'fonts/iconic/css/material-design-iconic-font.min.css',
        'fonts/linearicons-v1.0.0/icon-font.min.css',
        'vendor/animate/animate.css',	
        'vendor/css-hamburgers/hamburgers.min.css',
        'vendor/animsition/css/animsition.min.css',
        'vendor/select2/select2.min.css',	
        'vendor/daterangepicker/daterangepicker.css',
        'vendor/slick/slick.css',
        'vendor/MagnificPopup/magnific-popup.css',
        'vendor/perfect-scrollbar/perfect-scrollbar.css',
    ];
    public $js = [
    'js/jquery-1.11.3.min.js',
    'js/bootstrap.min.js',
    'js/jquery-ui.js',
    'js/picker.js',
	'vendor/animsition/js/animsition.min.js',
	'vendor/bootstrap/js/popper.js',
	'vendor/bootstrap/js/bootstrap.min.js',
    'vendor/select2/select2.min.js',
    'vendor/daterangepicker/moment.min.js',
	'vendor/daterangepicker/daterangepicker.js',
	'vendor/slick/slick.min.js',
	'js/slick-custom.js',
	'vendor/parallax100/parallax100.js',
	'vendor/MagnificPopup/jquery.magnific-popup.min.js',
	'vendor/isotope/isotope.pkgd.min.js',
	'vendor/sweetalert/sweetalert.min.js',
	'vendor/perfect-scrollbar/perfect-scrollbar.min.js',
	'js/main.js',


    

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
       
    ];
}
