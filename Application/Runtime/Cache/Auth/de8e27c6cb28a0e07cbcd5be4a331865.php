<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="Bookmark" href="favicon.ico">
    <link rel="Shortcut Icon" href="favicon.ico"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/Public/auth/lib/html5.js"></script>
    <script type="text/javascript" src="/Public/auth/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/Public/auth/lib/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/auth/lib/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/auth/lib/Hui-iconfont/1.0.8/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/auth/lib/h-ui.admin/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/auth/lib/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" href="/Public/login/css/sweetalert.css">
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<article class="page-container">
    <form class="form form-horizontal" id="form1">
        <input type="hidden" name="admin_id" id="admin_id" value="<?php echo ($info['admin_id']); ?>">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>账号：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo ($info['admin_name']); ?>" placeholder="" id="admin_name" name="admin_name"
                       onblur="checkna()" required>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>密码：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="password" class="input-text" value="<?php echo ($info['admin_pass']); ?>" placeholder="" id="admin_pass" name="admin_pass"
                       required>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>确认密码：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="password" class="input-text" value="<?php echo ($info['admin_pass']); ?>" placeholder="" id="admin_pass1" name="admin_pass1"
                       required>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <button onClick="member_save();" class="btn btn-secondary radius" type="button"><i
                        class="Hui-iconfont">&#xe632;</i> 保&nbsp;&nbsp;&nbsp;存
                </button>
                <button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/auth/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/auth/lib/h-ui/js/H-ui.js"></script>
<!--/_footer /作为公共模版分离出去-->
<script src="/Public/login/js/sweetalert.min.js"></script>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">

    function member_save() {
        var name = $('#admin_name').val();
        var pass = $('#admin_pass').val();//选中的值
        var pass1 = $('#admin_pass1').val();//选中的值
        if (name != '' && pass != '' && pass1 != '') {
            if (pass == pass1){
                info = {
                    'name': name,
                    'pass': pass,
                };
                $.ajax({
                    url: "<?php echo U('index/save_member');?>",
                    type: "post",
                    data: info,
                    success: function (data) {
                        if (data) {
                            swal({
                                title: "提交成功",
                                text: '',
                                type: "success"
                            })
                        }
                    }
                })
            }else {
                swal({
                    title: "两次输入的密码不一样",
                    text: '',
                    type: "error"
                })
            }
        } else {
            swal({
                title: "请认真填写每一项",
                text: '',
                type: "error"
            })
        }

    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>