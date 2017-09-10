<?php
/**
 * Created by PhpStorm.
 * User: 金鹰视频教程网刘前进
 * Url:  www.xjke.com
 * Date: 2017/9/4
 * Time: 上午11:08
 * 用的CSS和js资源
 */

namespace yii2upload\assets;


use yii\web\AssetBundle;

class UpLoadAssetX extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@yii2upload';
    public $js = [
        //'js/upLoadJs.js'
    ];
    public $css = [
        //'css/upLoadCss.css'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii2upload\assets\JqueryFormAsset',
        'yii2upload\assets\UpLoadJSCssAsset',
    ];
}