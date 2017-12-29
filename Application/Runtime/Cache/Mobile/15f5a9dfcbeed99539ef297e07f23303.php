<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link rel="icon" href="/afavicon.ico" type="image/x-icon"/>
    <title>博客内容</title>
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/ltkj.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/aui-list.css"/>

</head>
<body>
<div id="pgcontainer">
    <!--头部的开始-->
    <header><a class="fanhui" href="JavaScript:history.go(-1)"></a> <strong> 博客内容 </strong>
        <div class="overlay"></div>
    </header>

    <div class="zymain">
        <div style="text-align: center;font-size: 18px"><?php echo ($new['new_title']); ?></div>
        <div style="text-align: right;margin-right: 2%"><?php echo ($new['new_create_time']); ?></div>
        <div class="zy_nr">
            <?php echo ($new['new_content']); ?>
        </div>
    </div>
    <div class="dbgao"></div>
    <div class="lfooter" style="z-index: 999">
    <ul>
        <li><a href="<?php echo U('index/index');?>"><img src="/Public/mobile/images/index.png" width="30" height="30"/><br/>首页</a></li>
        <li><a href="<?php echo U('index/travel');?>"><img src="/Public/mobile/images/travel.png" width="30" height="30"/><br/>出行</a></li>
        <li><a target="_blank" href="/music/index.html"><img src="/Public/mobile/images/yinyue.png" width="30" height="30"/><br/>音乐</a></li>
        <!--<li><a href="<?php echo U('index/message');?>"><img src="/Public/mobile/images/liuyan.png" width="30" height="30"/><br/>联系我们</a></li>-->
        <li><a href="<?php echo U('index/blog');?>"><img src="/Public/mobile/images/liuyan.png" width="30" height="30"/><br/>博客</a></li>
    </ul>
</div>
</div>
</body>
<!--顶部右侧点击向左移动js-->
</html>