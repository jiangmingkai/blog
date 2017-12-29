<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title>H+ 后台主题UI框架 - FAQ</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link href="/Public/auth/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/Public/auth/css/font-awesome.min.css?v=4.3.0" rel="stylesheet">
    <link href="/Public/auth/css/animate.min.css" rel="stylesheet">
    <link href="/Public/auth/css/style.min.css?v=3.0.0" rel="stylesheet">
    <!-- 全局js -->
    <script src="/Public/auth/js/jquery-2.1.1.min.js"></script>
    <script src="/Public/auth/js/bootstrap.min.js?v=3.4.0"></script>
    <script src="/Public/auth/js/content.min.js?v=1.0.0"></script>

    <script>
        $(document).ready(function () {
            $("#loading-example-btn").click(function () {
                btn = $(this);
                simpleLoad(btn, true);
                simpleLoad(btn, false)
            })
        });
        function simpleLoad(a, b) {
            if (b) {
                a.children().addClass("fa-spin");
                a.contents().last().replaceWith(" Loading")
            } else {
                setTimeout(function () {
                    a.children().removeClass("fa-spin");
                    a.contents().last().replaceWith(" Refresh")
                }, 2000)
            }
        }
        ;
    </script>
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
    <link rel="stylesheet" type="text/css" href="/Public/auth/lib/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="/Public/auth/lib/h-ui.admin/css/style.css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script><![endif]-->
    <!--/meta 作为公共模版分离出去-->
    <title>栏目管理</title>
</head>
<body>
<section>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span> 系统管理
        <span class="c-gray en">&gt;</span> 栏目管理
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新">
            <i class="Hui-iconfont">&#xe68f;</i>
        </a>
    </nav>
    <div class="pd-20 text-c">
        <div class="cl pd-5 bg-1 bk-gray mt-20">
            <span class="l">
                <a class="btn btn-primary radius" onclick="system_category_add('添加栏目','<?php echo U("set/cate");?>')" href="javascript:;">
                    <i class="Hui-iconfont">&#xe600;</i> 添加栏目
                </a>
            </span>
            <span class="r">共有数据：<strong>{{ $count }}</strong> 条</span>
        </div>
        <div class="mt-20">
            <table style="margin-bottom: 0px;;"
                   class="table table-border table-bordered table-hover table-bg table-sort">
                <tr class="text-c">
                    <td width="5%"><input type="checkbox" name="" value=""></td>
                    <td width="5%">ID</td>
                    <td width="10%">栏目名称</td>
                    <td width="20%">栏目名称</td>
                    <td width="20%">栏目网址</td>
                    <td width="10%">排序</td>
                    <td width="20%">操作</td>
                </tr>
            </table>
            @foreach($nav as $k=>$v)
            <table style="margin-bottom: 0px;"
                   class="table table-border table-bordered table-hover table-bg table-sort">
                <tr class="text-c">
                    <td width="5%"><input type="checkbox" name="" value=""></td>
                    <td width="5%"></td>
                    <td width="10%">一级栏目</td>
                    <td width="20%"><a data-toggle="collapse"
                                       href="#faq{{ $v[0]['id'] }}"></a></td>
                    <td width="20%">{{ $v[0]['nav_url'] }}</td>
                    <td width="10%">{{ $v[0]['order'] }}</td>
                    <td width="20%">
                        <a title="编辑" href="javascript:;" onclick="system_category_edit('栏目编辑','<?php echo U("set/cate");?>/{{ $v[0]["id"] }}')"
                        style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6df;</i>
                        </a>
                        <a title="生成静态页" href="javascript:;"
                           onclick="static_save(this,'{{ $v[0]['id'] }}',1,'{{ $v[0]['nav_url'] }}')"
                           class="ml-5"
                           style="text-decoration:none">
                            <i class="Hui-iconfont">&#xe6df;</i>
                        </a>
                        <a title="删除" href="javascript:;" onclick="system_category_del(this,'{{ $v[0]['id'] }}')" class="ml-5"
                           style="text-decoration:none">
                            <i class="Hui-iconfont">&#xe6e2;</i>
                        </a>
                    </td>
                </tr>
            </table>
            <div style="margin-top:0;padding:0;" id="faq{{ $v[0]['id'] }}"
                 class="panel-collapse collapse faq-answer">
                <table style="margin-bottom: 0;"
                       class="table table-border table-bordered table-hover table-bg table-sort">
                    @foreach($v[1] as $kk=>$vv)
                    <tr class="text-c">
                        <td width="5%"><input type="checkbox" name="" value=""></td>
                        <td width="5%">{{ $vv['id'] }}</td>
                        <td width="10%">二级栏目</td>
                        <td width="20%">&nbsp;&nbsp;&nbsp;├&nbsp;&nbsp;{{ $vv['nav_title'] }}</td>
                        <td width="20%">{{ $vv['nav_url'] }}</td>
                        <td width="10%">{{ $vv['order'] }}</td>
                        <td width="20%">
                            <a title="编辑" href="javascript:;" onclick="system_category_edit('栏目编辑','{{ URL("auth/set/cate") }}/{{ $vv['id'] }}')"
                            style="text-decoration:none">
                            <i class="Hui-iconfont">&#xe6df;</i>
                            </a>
                            <a title="生成静态页" href="javascript:;"
                               onclick="static_save(this,'{{ $vv['id'] }}',1,'{{ $vv['nav_url'] }}')"
                               class="ml-5"
                               style="text-decoration:none">
                                <i class="Hui-iconfont">&#xe6df;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="system_category_del(this,'{{ $vv['id'] }}')" class="ml-5"
                               style="text-decoration:none">
                                <i class="Hui-iconfont">&#xe6e2;</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @endforeach
        </div>
    </div>

</section>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/auth/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/auth/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/auth/lib/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Public/auth/lib/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/auth/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript">
    /*系统-栏目-添加*/
    function system_category_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }
    /*系统-栏目-编辑*/
    function system_category_edit(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
    /*系统-栏目-删除*/
    function system_category_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            $.ajax({
                url: "{{ URL('auth/set/cate-del') }}",
                type: 'post',
                data: {'id': id, '_token': "{{ csrf_token() }}"},
                success: function (data) {
                    if (data == 1) {
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!', {icon: 1, time: 1000});
                    }
                }
            })
        });
    }
    function static_save(obj, id, info,url) {
        layer.confirm("确认要生成静态页吗?", function (index) {
            $.ajax({
                url: "{{ URL('auth/set/static-save') }}",
                type: 'post',
                data: {'id': id, 'is_static': info,'url_nav':url, '_token': "{{ csrf_token() }}"},
                success: function (data) {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,' + data + ',0)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                    $(obj).remove();
                    layer.msg('已启用!', {icon: 6, time: 1000});

                }
            })
        });
    }
</script>

<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>