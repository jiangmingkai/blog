<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-cn">
<head>
    <meta name="viewport" content="initial-scale=1, user-scalable=0, minimal-ui" charset="UTF-8">
    <title>加载底部</title>
    <!-- UC强制全屏 -->
    <meta name="full-screen" content="yes">
    <!-- QQ强制全屏 -->
    <meta name="x5-fullscreen" content="true">
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/ltkj.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/aui-list.css"/>
    <link rel="stylesheet" href="/Public/mobile/up/dropload.css">
</head>
<body>
<div id="pgcontainer">
    <!--头部的开始-->
    <header>
        <a class="fanhui" href="JavaScript:history.go(-1)"></a> <strong> 个人博客 </strong> <a href="#"
                                                                                               class="menubtn"></a>
        <div id="hamburgermenu">
            <ul>
                <li><a href="<?php echo U('index/blog');?>"><span>博客首页</span></a></li>
                <?php if(is_array($type)): foreach($type as $key=>$vo): ?><li class='hover'><a href="<?php echo U('index/blog');?>?type=<?php echo ($vo["id"]); ?>"><span><?php echo ($vo["new_name"]); ?></span></a></li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="overlay"></div>
    </header>
    <div class="aui-content aui-margin-b-15">
        <ul class="aui-list aui-media-list">
            <div id="content">
                <div style=''>
                    <?php if(is_array($info)): foreach($info as $key=>$vo): ?><a href="<?php echo U('index/blog_info');?>?id=<?php echo ($vo["new_id"]); ?>">
                            <li class="aui-list-item aui-list-item-middle">
                                <div class="aui-media-list-item-inner">
                                    <div class="aui-list-item-media" style="width: 3rem;">
                                        <img src="/Public/mobile/images/hor.jpg"
                                             class="aui-img-round aui-list-img-sm">
                                    </div>
                                    <div class="aui-list-item-inner aui-list-item-arrow">
                                        <div class="aui-list-item-text">
                                            <div class="aui-list-item-title aui-font-size-14">标题：<?php echo ($vo["new_title"]); ?></div>
                                            <div class="aui-list-item-right" style="color: red"></div>
                                        </div>
                                        <div class="aui-list-item-text">
                                            <div><?php echo (strip_tags(msubstr($vo["new_content"],0,50,'utf-8',true))); ?></div>
                                        </div>
                                        <div class="aui-list-item-text">
                                            <div><?php echo ($vo["new_create_time"]); ?></div>
                                            <div style="text-align: right">点击查看</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a><?php endforeach; endif; ?>
                </div>
                <div class="content">
                    <div class="lists"></div>
                </div>
            </div>
        </ul>
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
<!-- jQuery1.7以上 或者 Zepto 二选一，不要同时都引用 -->
<script src="/Public/mobile/js/jquery-1.9.1.min.js"></script>
<!--<script src="/Public/mobile/up/zepto.min.js"></script>-->
<script src="/Public/mobile/up/dropload.min.js"></script>
<script src="/Public/mobile/js/menu.js"></script>
<script>
    function subString(str, len, hasDot) {
        var newLength = 0;
        var newStr = "";
        var chineseRegex = /[^\x00-\xff]/g;
        var singleChar = "";
        var strLength = str.replace(chineseRegex, "**").length;
        for (var i = 0; i < strLength; i++) {
            singleChar = str.charAt(i).toString();
            if (singleChar.match(chineseRegex) != null) {
                newLength += 2;
            }
            else {
                newLength++;
            }
            if (newLength > len) {
                break;
            }
            newStr += singleChar;
        }

        if (hasDot && strLength > len) {
            newStr += "...";
        }
        return newStr;
    }
    $(function(){
        // 页数
        var page = 0;
        // 每页展示5个
        var size = 5;
        var type = <?php echo ($new_type); ?>;
        // dropload
        $('.content').dropload({
            scrollArea : window,
            loadDownFn : function(me){
                page++;
                // 拼接HTML
                var result = '';
                $.ajax({
                    type: 'POST',
                    url: '<?php echo U("index/blog_load");?>',
                    data:{'page':page,'size':size,'type':type},
                    dataType: 'json',
                    success: function(data){
                        var arrLen = data.lists.length;
                        if(arrLen > 0){
                            for(var i=0; i<arrLen; i++){
                                result += '<a href=<?php echo U("index/blog_info");?>?id='+data.lists[i]["new_id"]+'>'
                                        +'<li class="aui-list-item aui-list-item-middle">'
                                        +'<div class="aui-media-list-item-inner">'
                                        +'<div class="aui-list-item-media" style="width: 3rem;">'
                                        +'<img src="/Public/mobile/images/hor.jpg" class="aui-img-round aui-list-img-sm">'
                                        +' </div><div class="aui-list-item-inner aui-list-item-arrow"><div class="aui-list-item-text">'
                                        +'<div class="aui-list-item-title aui-font-size-14">'+data.lists[i]["new_title"]+'</div>'
                                        +'<div class="aui-list-item-right" style="color: red"></div></div><div class="aui-list-item-text">'
                                        +'<div>'+data.lists[i]["new_content"].substring(0,30)+'</div>'
                                        +'</div><div class="aui-list-item-text">'
                                        +'<div>'+data.lists[i]["new_create_time"]+'</div><div style="text-align: right">点击查看</div>'
                                        +'</div></div></div></li></a>';
                            }
                            // 如果没有数据
                        }else{
                            // 锁定
                            me.lock();
                            // 无数据
                            me.noData();
                        }
                        // 为了测试，延迟1秒加载
                        setTimeout(function(){
                            // 插入数据到页面，放到最后面
                            $('.lists').append(result);
                            // 每次数据插入，必须重置
                            me.resetload();
                        },1000);
                    },
                    error: function(xhr, type){
                        alert('Ajax error!');
                        // 即使加载出错，也得重置
                        me.resetload();
                    }
                });
            }
        });
    });

</script>
</body>
</html>