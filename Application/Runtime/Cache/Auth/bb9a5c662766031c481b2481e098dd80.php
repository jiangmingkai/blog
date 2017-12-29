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

    <title>新增文章 - 资讯管理</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<article class="page-container">
    <form class="form form-horizontal" id="form-article-add">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章标题：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="news_title" name="news_title">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
				<select name="news_nav_id" class="select" id="news_nav_id">
                    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["new_name"]); ?></option>
                        <?php if(is_array($vo['0'])): foreach($vo['0'] as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>">&nbsp;&nbsp;&nbsp;|--<?php echo ($v["new_name"]); ?></option><?php endforeach; endif; endforeach; endif; ?>
                </select>
				</span>
            </div>
        </div>
        <!--{{&#45;&#45;<div class="row cl">&#45;&#45;}}-->
        <!--{{&#45;&#45;<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章类型：</label>&#45;&#45;}}-->
        <!--{{&#45;&#45;<div class="formControls col-xs-8 col-sm-9">&#45;&#45;}}-->
        <!--{{&#45;&#45;<span class="select-box">&#45;&#45;}}-->
        <!--{{&#45;&#45;<select name="" class="select">&#45;&#45;}}-->
        <!--{{&#45;&#45;<option value="0">全部类型</option>&#45;&#45;}}-->
        <!--{{&#45;&#45;<option value="1">帮助说明</option>&#45;&#45;}}-->
        <!--{{&#45;&#45;<option value="2">新闻资讯</option>&#45;&#45;}}-->
        <!--{{&#45;&#45;</select>&#45;&#45;}}-->
        <!--{{&#45;&#45;</span>&#45;&#45;}}-->
        <!--{{&#45;&#45;</div>&#45;&#45;}}-->
        <!--{{&#45;&#45;</div>&#45;&#45;}}-->
        <!--{{&#45;&#45;<div class="row cl">&#45;&#45;}}-->
        <!--{{&#45;&#45;<label class="form-label col-xs-4 col-sm-2">排序值：</label>&#45;&#45;}}-->
        <!--{{&#45;&#45;<div class="formControls col-xs-8 col-sm-9">&#45;&#45;}}-->
        <!--{{&#45;&#45;<input type="text" class="input-text" value="0" placeholder="" id="" name="">&#45;&#45;}}-->
        <!--{{&#45;&#45;</div>&#45;&#45;}}-->
        <!--{{&#45;&#45;</div>&#45;&#45;}}-->
        <!--{{&#45;&#45;<div class="row cl">&#45;&#45;}}-->
        <!--{{&#45;&#45;<label class="form-label col-xs-4 col-sm-2">关键词：</label>&#45;&#45;}}-->
        <!--{{&#45;&#45;<div class="formControls col-xs-8 col-sm-9">&#45;&#45;}}-->
        <!--{{&#45;&#45;<input type="text" class="input-text" value="" placeholder="" id="" name="">&#45;&#45;}}-->
        <!--{{&#45;&#45;</div>&#45;&#45;}}-->
        <!--{{&#45;&#45;</div>&#45;&#45;}}-->
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">文章摘要：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <textarea name="news_abs" id="news_abs" cols="" rows="" class="textarea"
                          placeholder="说点什么...最少输入10个字符"
                          datatype="*10-100"
                          dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)"></textarea>
                <p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">文章作者：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="news_auth"
                       name="news_auth">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">关键词：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="关键词中间用，或者空格隔开" id="news_key"
                       name="news_key">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">前台展示：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="check-box">
                    <input type="checkbox" id="news_show" name="news_show">
                    <label for="checkbox-pinglun">&nbsp;</label>
                </div>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">文章内容：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <script id="editor" type="text/plain" style="width:100%;height:400px;"></script>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <button onClick="news_save();" class="btn btn-secondary radius" type="button"><i
                        class="Hui-iconfont">&#xe632;</i> 保存草稿
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
<script type="text/javascript" src="/Public/auth/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/auth/lib/ueditor/1.4.3/ueditor.all.min.js"></script>
<script type="text/javascript" src="/Public/auth/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
    $(function () {
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
        var ue = UE.getEditor('editor');
    });
    window.onload = function () {
        setContent();
    };

    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
//        alert(arr.join("\n"));
    }

    function news_save() {
        var arr = [];
        arr.push();
        arr.push(UE.getEditor('editor').getContent());
        var editor = arr.join("\n");
        var show = $("#news_show").get(0).checked;
        if (show == true) {
            show = 1;
        } else {
            show = 0;
        }
        var title = $('#news_title').val();
        var new_id = $('#news_nav_id').val();//选中的值
        var new_auth = $('#news_auth').val();
        var new_abs = $('#news_abs').val();
        var new_key = $('#new_key').val();
        alert(editor);
        if (editor == ' ' || editor == null) {
        } else {
            if (new_abs.length < 200) {
                info = {
                    'new_content': editor,
                    'new_show': show,
                    'new_title': title,
                    'new_id': new_id,
                    'new_auth': new_auth,
                    'new_abs': new_abs
                };
                $.ajax({
                    url: "<?php echo U('new/save');?>",
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
            } else {
                swal({
                    title: "提交失败",
                    text: '摘要不能大于200字',
                    type: "error"
                })
            }
        }
    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>