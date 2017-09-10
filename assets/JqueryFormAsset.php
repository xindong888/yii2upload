<?php
/**
 * Created by PhpStorm.
 * User: 金鹰视频教程网刘前进
 * Url:  www.xjke.com
 * Date: 2017/9/4
 * Time: 上午11:03
 */

namespace yii2upload\assets;


use yii\web\AssetBundle;

class JqueryFormAsset extends AssetBundle
{
    public $sourcePath='@webroot/vendor/jquery-form/form/dist';
    public $js=[
        'jquery.form.min.js'
    ];
}