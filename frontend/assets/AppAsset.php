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
        'css/stui_block.css',
        'css/stui_custom.css',
        'css/stui_default.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/stui_default.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

    //定义按需加载JS方法，注意加载顺序在最后
    public static function addJs($view, $jsfile) {
        $view->registerJsFile($jsfile, [AppAsset::className(), 'depends' => 'app\assets\AppAsset','position'=>$view::POS_END]);
    }

    //定义按需加载css方法，注意加载顺序在最后
    public static function addCss($view, $cssfile)
    {
        $view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'app\assets\AppAsset', 'position' => $view::POS_END]);
    }
}
