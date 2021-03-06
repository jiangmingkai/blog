<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0060)http://demo.h-ui.net/H-ui.admin/3.1/system-category-add.html -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <link rel="Bookmark" href="http://demo.h-ui.net/favicon.ico">
    <link rel="Shortcut Icon" href="http://demo.h-ui.net/favicon.ico">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/Public/auth/lib/html5.js"></script>
    <script type="text/javascript" src="/Public/auth/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/Public/auth/lib/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/auth/lib/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/auth/lib/Hui-iconfont/1.0.8/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/auth/lib/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="/Public/auth/lib/h-ui.admin/css/style.css"/>
    <link href="/Public/login/css/sweetalert.css" rel="stylesheet">
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script><![endif]-->
    <!--/meta 作为公共模版分离出去-->
    <title>栏目设置</title>
    <link rel="stylesheet" href="/Public/auth/css/layer.css" id="layui_layer_skinlayercss">
</head>
<body>
<div class="page-container">
    <form action="" method="post" class="form form-horizontal" id="form-category-add" novalidate="novalidate">
        <div id="tab-category" class="HuiTab">
            <div class="tabCon" style="display: block;">
                <!--<div class="row cl">-->
                    <!--<label class="form-label col-xs-4 col-sm-2">-->
                        <!--<span class="c-red">*</span>-->
                        <!--网站根目录：</label>-->
                    <!--<div class="formControls col-xs-8 col-sm-9">-->
                        <!--<input type="text" class="input-text" value="<?php echo ($info['config_url']); ?>" placeholder="" required id="config_url"  name="">-->
                    <!--</div>-->
                    <!--<div class="col-3">-->
                    <!--</div>-->
                <!--</div>-->
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">网站标题：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="<?php echo ($info['config_title']); ?>" placeholder="" id="config_title"
                               name="config_title">
                    </div>
                    <div class="col-3">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">网站描述：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                <textarea name="config_abs" id="config_abs" cols="" rows="" class="textarea"
                          placeholder="说点什么...最少输入10个字符"
                          datatype="*10-100"
                          dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)"><?php echo ($info['config_abs']); ?></textarea>
                        <p class="textarea-numberbar"><em class="textarea-length" id="result">0</em>/100</p>
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">网站关键字：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="<?php echo ($info['config_key']); ?>" placeholder="" id="config_key" name="config_key">
                    </div>
                    <div class="col-3">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">网站备案号：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="<?php echo ($info['config_num']); ?>" placeholder="" id="config_num" name="config_num">
                    </div>
                    <div class="col-3">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">联系方式：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="<?php echo ($info['config_cal']); ?>" placeholder="" id="config_cal" name="config_cal">
                    </div>
                    <div class="col-3">
                    </div>
                </div>
            </div>
        </div>
        <div class="row cl">
            <div class="col-9 col-offset-3">
                <button class="btn btn-primary radius" type="button" id="sub">提交</button>
            </div>
        </div>
    </form>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/auth/lib/jquery/1.9.1/jquery.min.js"></script>
<!--/_footer /作为公共模版分离出去-->
<script src="/Public/login/js/sweetalert.min.js"></script>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
    //    $(function () {
    //        var v = {{ $data->one_nav or 0 }};
    //        $(".select").find("option[value = '" + v + "']").attr("selected", "selected");
    //    });
    //    function lests(obj) {
    ////        $('.select').removeAttr('selected');
    ////        $(".select").find("option[value = '" + vv + "']").attr('selected',"selected");
    //        $('.tit').removeClass('selected');
    //        $(obj).addClass('selected');
    ////            document.getElementById("class").value=id;
    //    }
    $(document).ready(function () {
        $("#config_abs").keyup(function () {
            var length = 100;
            var content_len = $("#config_abs").val().length;
            var in_len = length - content_len;

            // 当用户输入的字数大于制定的数时，让提交按钮失效
            // 小于制定的字数，就可以提交
            if (in_len >= 0) {
                $("#result").html(content_len);
                $("#sub").attr("disabled", false);
                // 可以继续执行其他操作
            } else {
                $("#result").html(in_len);
                $("#sub").attr("disabled", true)
                swal({
                    title: "警告",
                    text: '输入的字数超过限制,将导致数据无法提交',
                    type: "warning"
                });
                return false;
            }

        });
    });

    $("#sub").click(function () {
        var title = $('#config_title').val();
        if (title != '') {
            $.ajax({
                url: "<?php echo U('set/cate_check');?>",
                type: 'post',
                data: $("#form-category-add").serialize(),
                success: function (data) {
                    if (data == 1) {
                        swal({
                            title: "提交成功",
                            text: "",
                            type: "success"
                        })
                    } else {
                        swal({
                            title: "提交失败",
                            text: '您没有任何修改',
                            type: "warning"
                        })
                    }
                },
                error: function () {
                    swal({
                        title: "提交失败",
                        text: "",
                        type: "error"
                    })
                }
            })
        } else {
            swal({
                title: "提交失败",
                text: "分类名称必填",
                type: "error"
            })
        }

    });

</script>
<!--/请在上方写此页面业务相关的脚本-->

</body>
</html>