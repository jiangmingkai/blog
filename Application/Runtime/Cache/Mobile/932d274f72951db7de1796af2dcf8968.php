<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<meta name=viewport
      content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, width=device-width,minimal-ui">
<html>
<head>
    <meta charset="utf-8">
    <title>个人博客</title>
    <link href="/Public/mobile/css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="title">
    <div class="map"><h1 class="map_title">郑州市</h1></div><!--map-->
    <!--<div class="logo"></div>&lt;!&ndash;logo&ndash;&gt;-->
    <div class="chearfix"></div>
</div><!--title-->
<div class="seach">
    <Div class="seach_white_bg">
        <div class="seach_icon"></div>
        <input placeholder="输入关键字搜索"/>
        <div class="chearfix"></div>
    </Div><!--seach_white_bg-->
</div><!--seach-->
<div class="banner"></div><!--banner-->
<!--<div class="caigou_box">-->
<!--<div class="kuaisu">-->
<!--<div class="kuaisu_bg"></div>-->
<!--<div class="kuaisu_title">快速采购</div>-->
<!--<div class="kuaisu_cent">采购全车件</div>-->
<!--</div>&lt;!&ndash;kuaisu&ndash;&gt;-->
<!--<div class="zhusou">-->
<!--<div class="zhusou_bg"></div>-->
<!--<div class="zhusou_title">采购助手</div>-->
<!--<div class="zhusou_cent">帮您批发采购</div>-->
<!--</div>&lt;!&ndash;zhuhsou&ndash;&gt;-->
<!--<div class="chearfix"></div>-->
<!--</div>&lt;!&ndash;caigoubox&ndash;&gt;-->
<div class="goodshop_title">
    <div class="blues"></div>
    <div class="goodshop_title_title">最新博客</div>
    <div class="chearfix"></div>
</div><!--goodshop_title-->
<?php if(is_array($new)): foreach($new as $key=>$vo): ?><div class="goodshop_cent">
        <Div class="goodshop_cent_left"><img src=""/></Div>
        <div class="goodshop_cent_right">
            <div class="shop_name"><?php echo ($vo["new_title"]); ?></div>
            <div class="shop_zhuying">内容：<span><?php echo (msubstr($vo["new_content"],0,20)); ?></span></div>
            <div class="shop_tel">时间：<span><?php echo (substr($vo["new_time"],0,10)); ?></span></div>
        </div><!--goodshop_cent_right-->
        <div class="chearfix"></div>
    </div><!--goodshop_cent--><?php endforeach; endif; ?>
<div class="foot_none"></div><!--撑起来foot的高度-->

</body>
</html>