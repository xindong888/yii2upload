<?php
/**
 * Created by PhpStorm.
 * User: 金鹰视频教程网刘前进
 * Date: 2017/9/3
 * Time: 下午1:24
 * Url:   www.xjke.com
 * 文件上传的控制器动作需要绑定到现有的控制器
 */

namespace yii2upload;

use Yii;
use yii\base\Action;
use yii\web\UploadedFile;

class UploadActionX extends Action
{

    /**
     * @property string $model 数据模型,必填
     * @property string $filePath 路径必填[绝对路径]
     * @property string $fileName 名称如果不填写按照原来的文件名进行存储
     */
    public $model;
    public $filePath = '';
    public $fileName = '';
    public $fileType=[['gif', 'jpg', 'png'],'目前只支持gif,jpg,png'];
    public function run()
    {
        //实例化数据模型
        $model = new $this->model();
        //使用上传组件来接收数据并进行判断
        if ($model->file = UploadedFile::getInstance($model, 'file')) {
            //判断是否设置文件名
            if (empty($this->fileName)) {
                $name = $model->file->baseName . '.' . $model->file->extension;
            } else {
                $name = $this->fileName . '.' . $model->file->extension;
            }
            $path = $this->filePath . '/upload/';
            //判断文件是否存储成功
            if (!in_array($model->file->extension, $this->fileType[0])) {
                $data = ['url' => '3', 'message' => $this->fileType[1]];
                echo json_encode($data);
            } else if (@$model->file->saveAs($path . $name)) {
                //返回路径
                $data = ['url' => '0', 'message' => Yii::getAlias('@web') . '/upload/' . $name];
                echo json_encode($data);
            } else {
                //返回路径错误
                $data = ['url' => '1', 'message' => '请填写完整路径,<br>例如<br>win下:<br>c:/xx/..;<br>mac,linux下:<br>/目录/..'];
                echo json_encode($data);
            };
        } else {
            //返回其他错误
            $data = ['url' => '2', 'message' => '这是一个错误'];
            echo json_encode($data);
        }
    }
}