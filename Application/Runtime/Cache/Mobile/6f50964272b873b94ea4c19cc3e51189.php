<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言</title>
    <link href="/Public/mobile/css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/foot.css"/>
</head>
<body>
<div class="title">
    <div class="map"><h1 class="map_title"></h1></div><!--map-->
    <!--<div class="logo"></div>&lt;!&ndash;logo&ndash;&gt;-->
    <div class="chearfix"></div>
</div><!--title-->
<!-- UY BEGIN -->
<!--WAP版-->
<div id="SOHUCS" sid="cytdenxfn" ></div>
<script id="changyan_mobile_js" charset="utf-8" type="text/javascript"
        src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=cytdenxfn&conf=prod_149deac60b51b76653de89576402b768">
</script>
<div class="lfooter" style="z-index: 999">
    <ul>
        <li><a href="<?php echo U('index/index');?>"><img src="/Public/mobile/images/index.png" width="30" height="30"/><br/>首页</a></li>
        <li><a href="<?php echo U('index/travel');?>"><img src="/Public/mobile/images/travel.png" width="30" height="30"/><br/>出行</a></li>
        <li><a target="_blank" href="/music/index.html"><img src="/Public/mobile/images/yinyue.png" width="30" height="30"/><br/>音乐</a></li>
        <li><a href="<?php echo U('index/message');?>"><img src="/Public/mobile/images/liuyan.png" width="30" height="30"/><br/>联系我们</a></li>
    </ul>
</div>
</body>
</html>