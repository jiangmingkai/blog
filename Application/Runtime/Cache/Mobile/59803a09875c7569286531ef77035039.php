<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<meta name=viewport
      content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, width=device-width,minimal-ui">
<html>
<head>
    <meta charset="utf-8">
    <title>花气袭人是酒香</title>
    <link href="/Public/mobile/css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/foot.css"/>
</head>
<body>
<!--<div class="title">-->
<!--<div class="map"><h1 class="map_title">郑州市</h1></div>-->
<!--<div class="logo"></div>-->
<!--<div class="chearfix"></div>-->
<!--</div>-->
<div class="banner" style="height: 100%;width: 100%">
    <img src="/Public/mobile/images/banner.jpg" alt="" style="height: 100%;width: 100%">
</div>
<div class="chearfix"></div>
<div class="goodshop_title">
    <div class="blues"></div>
    <div class="goodshop_title_title">最新博客</div>
    <div class="chearfix"></div>
</div>
<?php if(is_array($new)): foreach($new as $key=>$vo): ?><a href="<?php echo U('index/blog_info');?>?id=<?php echo ($vo["new_id"]); ?>">
        <div class="goodshop_cent">
            <Div class="goodshop_cent_left"><img src="/Public/mobile/images/hor.jpg"
                                                 style="height: 100%;width: 100%"/></Div>
            <div class="goodshop_cent_right">
                <div class="shop_name"
                     style="overflow : hidden;white-space: nowrap;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                    <?php echo ($vo["new_title"]); ?>
                </div>
                <div class="shop_zhuying">内容：<span><?php echo (strip_tags(msubstr($vo["new_content"],0,20,'utf-8',true))); ?></span></div>
                <div class="shop_tel">时间：<span><?php echo (substr($vo["new_time"],0,10)); ?></span></div>
            </div>
            <div class="chearfix"></div>
        </div>
    </a><?php endforeach; endif; ?>
<div class="foot_none"></div>
<div class="lfooter" style="z-index: 999">
    <ul>
        <li><a href="<?php echo U('index/index');?>"><img src="/Public/mobile/images/index.png" width="30" height="30"/><br/>首页</a></li>
        <li><a href="<?php echo U('index/travel');?>"><img src="/Public/mobile/images/travel.png" width="30" height="30"/><br/>出行</a></li>
        <li><a target="_blank" href="/music/index.html"><img src="/Public/mobile/images/yinyue.png" width="30" height="30"/><br/>音乐</a></li>
        <!--<li><a href="<?php echo U('index/message');?>"><img src="/Public/mobile/images/liuyan.png" width="30" height="30"/><br/>联系我们</a></li>-->
        <li><a href="<?php echo U('index/blog');?>"><img src="/Public/mobile/images/liuyan.png" width="30" height="30"/><br/>博客</a></li>
    </ul>
</div>
</body>
<script>
    // 获取窗口宽度
    if (window.innerWidth)
        winWidth = window.innerWidth;
    else if ((document.body) && (document.body.clientWidth))
        winWidth = document.body.clientWidth;
    // 获取窗口高度
    if (window.innerHeight)
        winHeight = window.innerHeight;
    else if ((document.body) && (document.body.clientHeight))
        winHeight = document.body.clientHeight;
    // 通过深入 Document 内部对 body 进行检测，获取窗口大小
    if (document.documentElement && document.documentElement.clientHeight && document.documentElement.clientWidth) {
        winHeight = document.documentElement.clientHeight;
        winWidth = document.documentElement.clientWidth;
    }
    if (winWidth >= 500) {
        window.location.href = "<?php echo U('Home/index/index');?>";
    }
</script>
</html>