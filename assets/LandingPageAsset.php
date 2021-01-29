<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

class LandingPageAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/LandingPage';

    public $css = [
        'css/slick.css',
        'css/font-awesome.min.css',
        'css/LineIcons.css',
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/default.css',
        'css/style.css',
    ];

    public $js = [
        'js/vendor/jquery-1.12.4.min.js',
        'js/vendor/modernizr-3.7.1.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/plugins.js',
        'js/slick.min.js',
        'js/waypoints.min.js',
        'js/jquery.counterup.min.js',
        'js/jquery.appear.min.js',
        'js/wow.min.js',
        'js/headroom.min.js',
        'js/jquery.nav.js',
        'js/scrollIt.min.js',
        'js/main.js'
    ];
}
