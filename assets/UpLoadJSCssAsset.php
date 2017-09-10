<?php
/**
 * Created by PhpStorm.
 * User: 金鹰视频教程网刘前进
 * Url:  www.xjke.com
 * Date: 2017/9/4
 * Time: 上午11:39
 */

namespace yii2upload\assets;


use yii\web\AssetBundle;

class UpLoadJSCssAsset extends AssetBundle
{
    public $sourcePath = '@webroot/vendor/xindong888/yii2upload/resources';
    public $js=[
        'js/upLoadJs.js'
    ];
    public $css=[
        'css/upLoadCss.css'
    ];
}