$(function () {
    var options = {
        //获取上传地址
        url: $('.yii2UpLoadCss').attr('data-url'),
        dataType: 'json',
        //成功以后的事件
        success: function (data) {
            if (data.url === "0") {
                //获取返回的文件类型名
                var fileType=data.message.split('.').pop();
                //判断文件类型是不是图片
                if($.inArray(fileType,['jpg','gif','png']) !== -1){
                    //如果上传的是图片显示预览,否则不显示预览,只显示提示
                    $("#output-preview").attr('src', data.message).css('display', 'block');
                }else{
                    $('#yii2UpLoadError').html(data.message+'已经上传').css('display', 'block');
                }
                $("#label").val(data.message);
            } else {
                $('#yii2UpLoadError').html(data.message).css('display', 'block');
            }
        },
        //上传中的事件
        uploadProgress: function (event, position, total, percentComplete) {
            var son = document.getElementById('upLoadProgress');
            son.innerHTML = '完成' + percentComplete + "%";
            son.style.width = percentComplete + "%";
        },
        //提交表单之前做的验证
        beforeSubmit: function () {
            //初始化进度条
            $('#upLoadProgress').width('0%');
            $('.yii2UpLoadProgress').css('display', 'block');
            //把错误框初始化
            $('#yii2UpLoadError').html('').css('display', 'none');
        }
    };
    $(':file').change(function (e) {
        e.preventDefault();
        if ($(this).val()) {
            //获取表单的名称
            var formName="#"+$('.yii2UpLoadCss').attr('form-name');
            $(formName).ajaxSubmit(options);
        }
    })
});

