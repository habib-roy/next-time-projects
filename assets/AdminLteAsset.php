<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/AdminLte';
    public $css = [
        'css/patch.css',
    ];
    public $js = [
        // 
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset'
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
