<?php
/**
 * Created by PhpStorm.
 * User: 金鹰视频教程网刘前进
 * Url:  www.xjke.com
 * Date: 2017/9/3
 * Time: 下午1:56
 * @see 一个上传组件的ui
 */
?>
<div class="yii2UpLoadCss" data-url="<?php echo $config['serverUrl']?>" form-name="<?php echo $formId?>">
    <input type="hidden" name="<?php echo $attribute ?>" id="label"/>
    <a class="btn btn-success a-upload">
        <?php echo $config['buttonName']?>
        <input type="file" name="<?php echo $inputName ?>" id="upload-file" class="inputFile"/>
    </a>
    <div id="yii2UpLoadError" style="display: none;color: #ff2117"></div>
    <img id="output-preview" width="200px" class="img-thumbnail">
    <div class="progress yii2UpLoadProgress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0"
             aria-valuemax="100" style="width: 0%" id="upLoadProgress">
            <span class="sr-only">45% Complete</span>
        </div>
    </div>
</div>