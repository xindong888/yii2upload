<?php
/**
 * Created by PhpStorm.
 * User: 金鹰视频教程网刘前进
 * Date: 2017/8/29
 * Time: 上午10:53
 * Url:  www.xjke.com
 */
namespace yii2upload;


use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\InputWidget;
use yii2upload\assets\UpLoadAssetX;

class FileUploadX extends InputWidget
{
    public $config = [];

    public function init()
    {
        \Yii::setAlias('@yii2upload','@web/vendor/xindong888/yii2upload/resources');
        $_config = [
            'serverUrl' =>'yii2upload',  //上传服务器地址
            'fileName' => 'file',                                      //提交的图片表单名称
            'buttonName' => '图片上传',//图片域名 不填为当前域名
        ];
        $this->config = ArrayHelper::merge($_config, $this->config);
    }

    public function run()
    {
        //注册js和CSS
        UpLoadAssetX::register($this->view);
        //判断Model
        if ($this->hasModel()) {
            $inputName = Html::getInputName($this->model, 'file');
            $inputValue = Html::getAttributeValue($this->model, 'file');
            return $this->render('index',[
                'config'=>$this->config,
                'inputName' => $inputName,
                'inputValue' => $inputValue,
                'attribute' => Html::getInputName($this->model,$this->attribute),
                //获取表单名称
                'formId'=>$this->field->form->id,
                'model'=>$this->model
            ]);
        } else {
            return '必须设置为Model子类';
        }
    }

}