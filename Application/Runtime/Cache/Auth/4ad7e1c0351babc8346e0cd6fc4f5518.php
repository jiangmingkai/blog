<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" type="text/css" href="/Public/auth/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/auth/css/Hui-iconfont/1.0.8/iconfont.css"/>
    <title>新闻列表</title>
    <style type="text/css">
       /* 分页数字链接样式 */
        .pagebox{padding:30px 20px 20px 20px;}
        .paging a,.paging span.Bg,.paging a:hover,.paging a.current,.paging a:hover span.Bg,.paging a.current span.Bg{background:url(/Public/auth/images/pagebg.png) no-repeat;}
        .paging{text-align:center;font-size:13px;}
        .paging a{padding-bottom:4px;display:inline-block;background-position:0 -134px;padding-bottom:11px;}
        .paging a:hover{text-decoration:none;}
        .paging b{font-weight:100;opacity:0;*visibility:hidden;}
        .paging span.Bg{
            width:58px;height:17px;line-height:17px;padding-left:5px;text-align:left;margin-right:1px;display:inline-block;background-position:0px 11px;currentsor:pointer;
            -moz-transition:all 0.3s ease;
            -webkit-transition:all 0.3s ease;
            -o-transition:all 0.3s ease;
        }
        .paging a:link,.paging a:visited{color:#266EB0;}
        .paging a:hover,.paging a.current{color:#fff;background-position:0px -93px;}
        .paging a:hover span.Bg,.paging a.current span.Bg{background-position:0px -63px;}
        .paging a:hover span.Bg b,.paging a.current span.Bg b{opacity:1;*visibility:visible;}
        /* 上下翻页样式 */
        .paging a.prev,.paging a.prev span.Bg,.paging a.prev b,.paging a.prev:hover,.paging a.prev:hover span.Bg,.paging a.prev:hover b,.paging a.next,.paging a.next span.Bg,.paging a.next b,.paging a.next:hover,.paging a.next:hover span.Bg,.paging a.next:hover b{background:url(/Public/auth/images/prev-next-bg.png) no-repeat}
        .paging a.prev{background-position:0px -72px;}
        .paging a.prev span.Bg{width:61px;padding-left:0px;background-position:0px -121px;}
        .paging a.prev b{background-position:0px 17px;}
        .paging a.prev:hover{background-position:0px -25px;}
        .paging a.prev:hover span.Bg{background-position:0px -108px;}
        .paging a.prev:hover b{background-position:0px 4px;opacity:1;*visibility:visible;}
        .paging a.next{background-position:-61px -72px;}
        .paging a.next span.Bg{width:61px;padding-left:0px;background-position:-61px -121px;}
        .paging a.next b{background-position:-61px 17px;}
        .paging a.next:hover{background-position:-61px -25px;}
        .paging a.next:hover span.Bg{background-position:-61px -108px;}
        .paging a.next:hover b{background-position:-61px 4px;opacity:1;*visibility:visible;}
        .paging a.prev b,.paging a.next b{
            width:61px;display:inline-block;height:17px;opacity:1;*visibility:visible;
            -moz-transition:all 0.6s ease;
            -webkit-transition:all 0.6s ease;
            -o-transition:all 0.6s ease;
        }
    </style>
</head>
<body>
<section class="Hui-article-box">
    <div class="Hui-article">
        <article class="cl pd-20">

            <div class="cl pd-5 bg-1 bk-gray mt-20">
                <span class="l">
                    <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius">
                        <i class="Hui-iconfont">&#xe6e2;</i>
                        批量删除
                    </a>
                    <a href="javascript:;" class="btn btn-primary radius"
                       onclick=news_add('添加新闻','<?php echo U("new/add");?>','','510')>
                        <i class="Hui-iconfont">&#xe600;</i>
                        添加新闻
                    </a>
                </span>
                <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px"
                   href="javascript:location.replace(location.href);" title="刷新">
                    <i class="Hui-iconfont">&#xe68f;</i>
                </a>
            </div>
            <div class="mt-20">
                <table class="table table-border table-bordered table-hover table-bg table-sort">
                    <thead>
                    <tr class="text-c">
                        <th width="25"><input type="checkbox" name="" value=""></th>
                        <th width="30">ID</th>
                        <th width="180">栏目</th>
                        <th width="180">标题</th>
                        <th width="50">作者</th>
                        <th width="120">创建时间</th>
                        <th width="50">状态</th>
                        <th width="100">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="text-c">
                            <td><input type="checkbox" value="1" name=""></td>
                            <td><?php echo ($vo["new_id"]); ?></td>
                            <td><?php echo ($vo["nav_title"]); ?></td>
                            <td>
                                <u style="cursor:pointer" class="text-primary"
                                   onclick="news_show('','member-show.html','10001','360','400')">
                                    <?php echo ($vo["new_title"]); ?>
                                </u>
                            </td>
                            <td><?php echo ($vo["new_auth"]); ?></td>
                            <td><?php echo ($vo["new_create_time"]); ?></td>
                            <td class="td-status">
                                <?php if($vo["new_show"] == 1 ): ?><span class="label label-success radius">已启用</span>
                                    <?php else: ?>
                                    <span class="label label-defaunt radius">已停用</span><?php endif; ?>

                            </td>

                            <td class="td-manage">
                                <?php if($vo["new_show"] == 1 ): ?><a style="text-decoration:none"
                                       onClick='news_stop(this,"<?php echo ($vo["new_id"]); ?>",0)'
                                       href="javascript:;" title="停用">
                                        <i class="Hui-iconfont">&#xe631;</i>
                                    </a>
                                    <?php else: ?>
                                    <a style="text-decoration:none"
                                       onClick='news_start(this,"<?php echo ($vo["new_id"]); ?>",1)'
                                       href="javascript:;" title="启用">
                                        <i class="Hui-iconfont">&#xe6e1;</i>
                                    </a><?php endif; ?>
                                <a title="编辑" href="javascript:;"
                                   onclick="news_edit('编辑','<?php echo U('new/edit');?>?id=<?php echo ($vo["new_id"]); ?>','4','','510')"
                                   class="ml-5"
                                   style="text-decoration:none">
                                    <i class="Hui-iconfont">&#xe6df;</i>
                                </a>
                                <a title="删除" href="javascript:;" onclick="news_del(this,<?php echo ($vo["new_id"]); ?>)" class="ml-5"
                                   style="text-decoration:none">
                                    <i class="Hui-iconfont">&#xe6e2;</i>
                                </a>
                            </td>
                        </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
                <div class="pagebox">
                    <div class="paging">
                <?php echo ($page); ?>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/auth/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/auth/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/auth/lib/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/auth/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript">
    $(function () {
        $('.table-sort').dataTable({
            "aaSorting": [[1, "desc"]],//默认第几个排序
            "bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable": false, "aTargets": [0, 8, 9]}// 制定列不参与排序
            ]
        });
        $('.table-sort tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });
    });
    /*新闻-添加*/
    function news_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }
    /*新闻-查看*/
    function news_show(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
    /*新闻-启用*/
    function news_start(obj, id, info) {
        layer.confirm("确认要启用吗?", function (index) {
            $.ajax({
                url: "<?php echo U('new/show');?>",
                type: 'post',
                data: {'id': id, 'is_show': info},
                success: function (data) {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="news_stop(this,' + data + ',0)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                    $(obj).remove();
                    layer.msg('已启用!', {icon: 6, time: 1000});

                }
            })
        });
    }
    /*新闻-停用*/
    function news_stop(obj, id, info) {
        layer.confirm('确认要停用吗？', function (index) {
            $.ajax({
                url: "<?php echo U('new/show');?>",
                type: 'post',
                data: {'id': id, 'is_show': info, '_token': "{{ csrf_token() }}"},
                success: function (data) {
                    if (data) {
                        $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="news_start(this,' + data + ',1)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
                        $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
                        $(obj).remove();
                        layer.msg('已停用!', {icon: 5, time: 1000});
                    }
                }
            })
        });
    }
    /*新闻-编辑*/
    function news_edit(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
    /*新闻-删除*/
    function news_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            $.ajax({
                url: "<?php echo U('new/delete');?>",
                type: 'post',
                data: {'id': id},
                success: function (data) {
                    if (data == 1) {
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!', {icon: 1, time: 1000});
                    }
                }
            })
        });
    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>