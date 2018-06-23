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
        'https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700',
        'sourse/css/bootstrap.css',
        'sourse/css/animate.css',
        'sourse/css/owl.carousel.min.css',
        'sourse/fonts/ionicons/css/ionicons.min.css',
        'sourse/fonts/fontawesome/css/font-awesome.min.css',
        'sourse/fonts/flaticon/font/flaticon.css',
        'sourse/css/style.css',
    ];

    public $js = [
        'sourse/js/jquery-migrate-3.0.0.js',
        'sourse/js/popper.min.js',
        'sourse/js/owl.carousel.min.js',
        'sourse/js/jquery.waypoints.min.js',
        'sourse/js/jquery.stellar.min.js',
        'sourse/js/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset', // yii.js, jquery.js
        'yii\bootstrap\BootstrapPluginAsset' // bootstrap.js
    ];
}
