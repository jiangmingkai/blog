<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link rel="icon" href="/afavicon.ico" type="image/x-icon"/>
    <title>出行</title>
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/ltkj.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/aui-list.css"/>
    <style>
    </style>
</head>
<body>
<div id="pgcontainer">

    <!--头部的开始-->
    <header><a class="fanhui" href="JavaScript:history.go(-1)"></a> <strong> 出行更简单 </strong> <a href="#"
                                                                                                class="menubtn"></a>
        <!-- use captain icon for toggle menu -->
        <div id="hamburgermenu">
            <ul>
                <li><a href="/"><span>网站首页</span></a></li>
                <li class='hover'><a href="<?php echo U('index/info');?>?id=1"><span>小黄车</span></a></li>
                <li><a href="<?php echo U('index/info');?>?id=2"><span>摩拜单车</span></a></li>
                <li><a href="<?php echo U('index/info');?>?id=3"><span>滴滴出行</span></a></li>
                <!--<li><a href="<?php echo U('index/index');?>"><span>经理致辞</span></a></li>-->
                <!--<li><a href="<?php echo U('index/index');?>"><span>联系我们</span></a></li>-->
            </ul>
        </div>
        <div class="overlay"></div>
    </header>

    <div class="aui-content aui-margin-b-15">
        <ul class="aui-list aui-media-list">
            <li class="aui-list-header" style="background-color: #EE8B09">
                滴滴
            </li>
            <?php if(is_array($didi)): foreach($didi as $key=>$vo): ?><a href="<?php echo ($vo["url"]); ?>">
                    <li class="aui-list-item aui-list-item-middle">
                        <div class="aui-media-list-item-inner">
                            <div class="aui-list-item-media" style="width: 3rem;">
                                <img src="/Public/mobile/images/didi.jpg" class="aui-img-round aui-list-img-sm">
                            </div>
                            <div class="aui-list-item-inner aui-list-item-arrow">
                                <div class="aui-list-item-text">
                                    <div class="aui-list-item-title aui-font-size-14"><?php echo ($vo["title"]); ?></div>
                                    <?php if($vo['new'] == 1): ?><div class="aui-list-item-right" style="color: red">new</div>
                                        <?php else: ?>
                                        <div class="aui-list-item-right" style="color: red"></div><?php endif; ?>
                                </div>
                                <div class="aui-list-item-text">
                                    <div><?php echo ($vo["create_time"]); ?></div>
                                    <div style="text-align: right">点击领取</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </a><?php endforeach; endif; ?>
            <a href="<?php echo U('index/info');?>?id=3">
                <li class="aui-list-header">
                    <div style="width:100%;text-align: right;">
                        查看更多
                    </div>
                </li>
            </a>
            <div style="width: 100%;height: 5px"></div>
            <li class="aui-list-header" style="background-color: #E0BC03">
                小黄车
            </li>
            <?php if(is_array($ofo)): foreach($ofo as $key=>$vo): ?><a href="<?php echo ($vo["url"]); ?>">
                    <li class="aui-list-item aui-list-item-middle">
                        <div class="aui-media-list-item-inner">
                            <div class="aui-list-item-media" style="width: 3rem;">
                                <img src="/Public/mobile/images/ofo.png" class="aui-img-round aui-list-img-sm">
                            </div>
                            <div class="aui-list-item-inner aui-list-item-arrow">
                                <div class="aui-list-item-text">
                                    <div class="aui-list-item-title aui-font-size-14"><?php echo ($vo["title"]); ?></div>
                                    <?php if($vo['new'] == 1): ?><div class="aui-list-item-right" style="color: red">new</div>
                                        <?php else: ?>
                                        <div class="aui-list-item-right" style="color: red"></div><?php endif; ?>
                                </div>
                                <div class="aui-list-item-text">
                                    <div><?php echo ($vo["create_time"]); ?></div>
                                    <div style="text-align: right">点击领取</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </a><?php endforeach; endif; ?>
            <a href="<?php echo U('index/info');?>?id=1">
                <li class="aui-list-header">
                    <div style="width:100%;text-align: right;">
                        查看更多
                    </div>
                </li>
            </a>
            <div style="width: 100%;height: 5px"></div>
            <li class="aui-list-header" style="background-color: #ff2821">
                摩拜单车
            </li>
            <?php if(is_array($mobike)): foreach($mobike as $key=>$vo): ?><a href="<?php echo ($vo["url"]); ?>">
                    <li class="aui-list-item aui-list-item-middle">
                        <div class="aui-media-list-item-inner">
                            <div class="aui-list-item-media" style="width: 3rem;">
                                <img src="/Public/mobile/images/mobike.jpg" class="aui-img-round aui-list-img-sm">
                            </div>
                            <div class="aui-list-item-inner aui-list-item-arrow">
                                <div class="aui-list-item-text">
                                    <div class="aui-list-item-title aui-font-size-14"><?php echo ($vo["title"]); ?></div>
                                    <?php if($vo['new'] == 1): ?><div class="aui-list-item-right" style="color: red">new</div>
                                        <?php else: ?>
                                        <div class="aui-list-item-right" style="color: red"></div><?php endif; ?>
                                </div>
                                <div class="aui-list-item-text">
                                    <div><?php echo ($vo["create_time"]); ?></div>
                                    <div style="text-align: right">点击领取</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </a><?php endforeach; endif; ?>
            <a href="<?php echo U('index/info');?>?id=2">
                <li class="aui-list-header">
                    <div style="width:100%;text-align: right;">
                        查看更多
                    </div>
                </li>
            </a>
            <!--<li class="aui-list-item aui-list-item-middle">-->
            <!--<div class="aui-media-list-item-inner">-->
            <!--<div class="aui-list-item-media" style="width: 3rem;">-->
            <!--<img src="../image/liulangnan.png" class="aui-img-round aui-list-img-sm">-->
            <!--</div>-->
            <!--<div class="aui-list-item-inner aui-list-item-arrow">-->
            <!--流浪男-->
            <!--</div>-->
            <!--</div>-->
            <!--</li>-->
        </ul>
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
<script src="/Public/mobile/js/jquery-1.9.1.min.js"></script>
<script src="/Public/mobile/js/menu.js"></script>
</html>