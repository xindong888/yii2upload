
功能说明:带有进度条\预览的Yii2图片上传小部件

![GitHub][github]

[github]:https://github.com/xindong888/yii2upload/blob/master/pic/yii2upload.png?raw=true

使用环境:

**必须在Yii2的环境下使用**

使用说明:

在控制器内绑定动作

```php
use yii2upload\UploadActionX;
class PostsController extends Controller
{
    public function actions()
    {
       return [
            'yii2upload'=>[
                'class'=>UploadActionX::className(),
                'model'=>PostsForm::className(),
                'filePath'=>Yii::getAlias('@webroot'),
                'fileName'=>time(),
                //'fileType'=>[['xml'],'仅支持xml']
            ]
        ];
    }
}
```

数据模型内添加一个[$file]文件字段

```php
    class PostsForm extends Model
    {
        public $label_img;
        public $file;
        /**
         * @inheritdoc
         */
        public function rules()
        {
            return [
                ['label_img', 'string'],
                ['file','file']
            ];
        }

    }
```

表单内写入小部件
```php

<?php $form = ActiveForm::begin(); ?>
    <?php
   
     echo $form->field($model, 'label_img')->widget(\yii2upload\FileUploadX::className(),
         [
             'config' =>
                 [
                     'buttonName' => '图片上传',//按钮的名称
                     'serverUrl'=>'yii2upload',//控制器的动作名称
                 ]
         ]);
     ?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('common', 'Posted'), ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>

```
