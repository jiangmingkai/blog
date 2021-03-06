<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title>后台 - 主页</title>
    <meta name="keywords" content="后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="使用了Html5+CSS3等现代技术">
    <!--[if lt IE 8]>
    <script>
        alert('本已不支持IE6-8，请使用谷歌、火狐等浏览器\n或360、QQ等国产浏览器的极速模式浏览本页面！');
    </script>
    <![endif]-->
    <link href="/Public/auth/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/Public/auth/css/font-awesome.min.css?v=4.3.0" rel="stylesheet">
    <link href="/Public/auth/css/animate.min.css" rel="stylesheet">
    <link href="/Public/auth/css/style.min.css?v=3.0.0" rel="stylesheet">
    <link href="http://static.h-ui.net/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/Public/auth/css/Hui-iconfont/1.0.8/iconfont.css">
    <!-- 全局js -->
    <script src="/Public/auth/js/jquery-2.1.1.min.js"></script>
    <script src="/Public/auth/js/bootstrap.min.js?v=3.4.0"></script>
    <script src="/Public/auth/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/Public/auth/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/Public/auth/js/plugins/layer/layer.min.js"></script>

    <!-- 自定义js -->
    <script src="/Public/auth/js/hplus.min.js?v=3.0.0"></script>
    <script type="text/javascript" src="/Public/auth/js/contabs.min.js"></script>

    <!-- 第三方插件 -->
    <script src="/Public/auth/js/plugins/pace/pace.min.js"></script>

</head>

<body class="fixed-sidebar full-height-layout gray-bg">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="/Public/auth/img/profile_small.jpg"/></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">Beaut-zihan</strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="J_menuItem" href="<?php echo U('index/member');?>">修改资料</a></li>
                            <!--<li><a class="J_menuItem" href="profile.html">个人资料</a></li>-->
                            <!--<li><a class="J_menuItem" href="contacts.html">联系我们</a></li>-->
                            <!--<li><a class="J_menuItem" href="mailbox.html">信箱</a></li>-->
                            <li class="divider"></li>
                            <li><a href="<?php echo U('login/login_out');?>">安全退出</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">H+
                    </div>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa fa-bar-chart-o"></i>
                        <span class="nav-label">博客管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('new/index');?>">博客列表</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo U('new/add');?>">添加博客</a>
                        </li>
                    </ul>
                </li>

                <!--<li>-->
                    <!--<a href="#"><i class="fa fa-edit"></i> <span class="nav-label">用户管理</span><span-->
                            <!--class="fa arrow"></span></a>-->
                    <!--<ul class="nav nav-second-level">-->
                        <!--<li><a class="J_menuItem" href="{{ URL('auth/member/index') }}">用户列表</a>-->
                        <!--</li>-->
                        <!--<li><a class="J_menuItem" href="{{ URL('auth/member/add') }}">添加用户</a>-->
                        <!--</li>-->
                        <!--<li><a class="J_menuItem" href="{{ URL('auth/member/permission') }}">用户权限</a>-->
                        <!--</li>-->
                        <!--<li><a class="J_menuItem" href="{{ URL('auth/member/role') }}">角色管理</a>-->
                        <!--</li>-->
                        <!--<li><a class="J_menuItem" href="{{ URL('auth/member/log') }}">登录记录</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->
                <li>
                    <a href="#"><i class="icon Hui-iconfont">&#xe6a2;</i> <span class="nav-label">手机页面</span><span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="<?php echo U('mobile/index');?>">出行管理</a>
                        </li>
                        <!--<li>-->
                            <!--<a href="#">项目管理 <span class="fa arrow"></span></a>-->
                            <!--<ul class="nav nav-third-level">-->
                                <!--<li><a class="J_menuItem" href="projects.html">项目</a></li>-->
                                <!--<li><a class="J_menuItem" href="project_detail.html">项目详情</a></li>-->
                            <!--</ul>-->
                        <!--</li>-->
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">系统设置</span><span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <!--<li><a class="J_menuItem" href="<?php echo U('set/index');?>">栏目设置</a></li>-->
                        <li><a class="J_menuItem" href="<?php echo U('set/cate');?>">系统设置</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                        class="fa fa-bars"></i> </a>
                </div>
            </nav>
        </div>
        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>
            <button class="roll-nav roll-right dropdown J_tabClose"><span class="dropdown-toggle"
                                                                          data-toggle="dropdown">关闭操作<span
                    class="caret"></span></span>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a>定位当前选项卡</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                    </li>
                    <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                    </li>
                </ul>
            </button>
            <!--<a href="login.html" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>-->
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo U('index/welcome');?>"
                    frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
        <div class="footer">
            <div class="pull-right">&copy; 2014-2015 <a href="/" target="_blank">zihan's blog</a>
            </div>
        </div>
    </div>
    <!--右侧部分结束-->
</div>

</body>

</html>