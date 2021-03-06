<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head><title>
    共享单车
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <link href="/Public/mobile/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/Public/mobile/css/NewGlobal.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/ltkj.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/aui-list.css"/>
    <link rel="stylesheet" href="/Public/mobile/up/dropload.css">
</head>
<body>
<div class="header">
    <a href="<?php echo U('index/travel');?>" class="home">
        <span class="header-icon header-icon-home"></span>
        <span class="header-name">主页</span>
    </a>
    <div class="title" id="titleString"></div>
    <a href="javascript:history.go(-1);" class="back">
        <span class="header-icon header-icon-return"></span>
        <span class="header-name">返回</span>
    </a>
</div>
<div class="aui-content aui-margin-b-15">
    <ul class="aui-list aui-media-list">
        <?php if($id == 1): ?><li class="aui-list-header" style="background-color: #E0BC03">
                小黄车
            </li>
            <?php elseif($id == 2): ?>
            <li class="aui-list-header" style="background-color: #ff2821">
                摩拜单车
            </li>
            <?php else: ?>
            <li class="aui-list-header" style="background-color: #EE8B09">
                滴滴
            </li><?php endif; ?>
        <div class="content">
            <div class="lists"></div>
        </div>
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
</body>
<script src="/Public/mobile/js/jquery-1.9.1.min.js"></script>
<!--<script src="/Public/mobile/up/zepto.min.js"></script>-->
<script src="/Public/mobile/up/dropload.min.js"></script>
<script>
    $(function(){
        // 页数
        var page = 0;
        // 每页展示5个
        var size = 5;
        var id = <?php echo ($id); ?>;
        alert(id);
        // dropload
        $('.content').dropload({
            scrollArea : window,
            loadDownFn : function(me){
                page++;
                // 拼接HTML
                var result = '';
                $.ajax({
                    type: 'POST',
                    url: "<?php echo U('index/load');?>",
                    data:{'page':page,'size':size,'id':id},
                    dataType: 'json',
                    success: function(data){
                        var result = '';
                        var img = '';
                        var news = '';
                        var arrLen = data.lists.length;
                        if(arrLen > 0){
                            for(var i=0; i<arrLen; i++){
                                if(data.lists[i]['type'] == 1){
                                    img='<img src="/Public/mobile/images/ofo.png" class="aui-img-round aui-list-img-sm"></div>';
                                }else if(data.lists[i]['type'] == 2){
                                    img='<img src="/Public/mobile/images/mobike.jpg" class="aui-img-round aui-list-img-sm"></div>';
                                }else {
                                    img='<img src="/Public/mobile/images/didi.jpg" class="aui-img-round aui-list-img-sm"></div>';
                                }
                                if(data.lists[i]['new'] == 1){
                                    news='<div class="aui-list-item-right" style="color: red">new</div>';
                                }else if(data.lists[i]['stop_time']=='2020-01-01 00:00:00'){
                                    news='<div class="aui-list-item-right">&nbsp;</div>';
                                }else {
                                    news='<div class="aui-list-item-right">结束时间&nbsp;'+data.lists[i]['stop_time'].substring(10,0)+'</div>';
                                }
                                result += '<a href="'+data.lists[i]['url']+'">'
                                        +'<li class="aui-list-item aui-list-item-middle">'
                                        +'<div class="aui-media-list-item-inner">'
                                        +'<div class="aui-list-item-media" style="width: 3rem;">'
                                        +img
                                        +'<div class="aui-list-item-inner aui-list-item-arrow">'
                                        +'<div class="aui-list-item-text">'
                                        +'<div class="aui-list-item-title aui-font-size-14">'+data.lists[i]['title']+'</div>'
                                        +news
                                        +'</div>'
                                        +'<div class="aui-list-item-text">'
                                        +'<div>'+data.lists[i]['create_time']+'</div>'
                                        +'<div style="text-align: right;color: #04843a">点击领取</div>'
                                        +'</div>'
                                        +'</div>'
                                        +'</div>'
                                        +'</li>'
                                        +'</a>';
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
</html>