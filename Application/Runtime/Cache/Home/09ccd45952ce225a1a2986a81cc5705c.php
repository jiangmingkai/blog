<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo CONFIG_TITLE;?></title>
    <meta name="keywords" content="<?php echo CONFIG_KEY;?>"/>
    <meta name="description" content="<?php echo CONFIG_ABS;?>"/>
    <link href="/Public/sys/css/base.css" rel="stylesheet">
    <link href="/Public/sys/css/about.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/Public/sys/js/modernizr.js"></script>
    <![endif]-->
    <script src="/Public/sys/js/scrollReveal.js"></script>
</head>
<body>
<header>
    <div class="logo" data-scroll-reveal="enter right over 1s">
    <a href="/"><img src="/Public/sys/images/logo.png"></a>
</div>
<nav class="topnav" data-scroll-reveal="enter bottom over 1s after 1s">
    <a href="<?php echo U('index/index');?>"><span>首页</span><span class="en">Home</span></a>
    <a href="<?php echo U('about/index');?>"><span>关于我</span><span class="en">About</span></a>
    <!--<a href="<?php echo U('life/index');?>"><span>慢生活</span><span class="en">Life</span></a>-->
    <a href="http://www.91sheli.cn" target="_blank"><span>福利社</span><span class="en">Welfare</span></a>
    <!--<a href="<?php echo U('share/index');?>"><span>模板分享</span><span class="en">Share</span></a>-->
    <a href="<?php echo U('learn/index');?>"><span>学无止境</span><span class="en">Learn</span></a>
    <a href="<?php echo U('book/index');?>"><span>留言</span><span class="en">Saying</span></a>
</nav>
</header>
<article>
    <div class="container">
        <div class="banner">
            <p data-scroll-reveal="enter top over 2s">我们不停的翻弄着回忆，却再也找不回那时的自己</p>
            <p data-scroll-reveal="enter left over 2s after 1s">人生，是一场盛大的遇见。若你懂得，就请珍惜。</p>
            <p data-scroll-reveal="enter bottom over 2s after 2s">无论下多久的雨，最后都会有彩虹；无论你多么悲伤，要相信幸福在前方等候.</p>
        </div>
        <div class="memorial_day">
            <div class="time_axis"></div>
            <ul>
                <li class="n1"><a href="/">入行</a>
                    <div class="dateview">2015</div>
                </li>
                <li class="n2"><a href="/">创建个人博客</a>
                    <div class="dateview">2016-01-12</div>
                </li>
                <li class="n3"><a href="/">分享第一个博客模板</a>
                    <div class="dateview">2016-06-08</div>
                </li>
                <li class="n4"><a href="/">制作第一个html5模板</a>
                    <div class="dateview">2017-08-08</div>
                </li>
                <li class="n5"><a href="/">模板更换为时间轴</a>
                    <div class="dateview">2017-09-08</div>
                </li>
            </ul>
        </div>
        <div class="about left">
            <h2>Just about me</h2>
            <ul>
                <p>

                </p>
            </ul>
            <h2>About my blog</h2>
            <p>域 名：www.91sheli.cn 创建于2016年03月12日 </p>
            <p>服务器：阿里云服务器</p>
            <p>程 序：ThinkPHP 3.2.3</p>


        </div>
    </div>
    </aside>
</article>
<footer> <a href="/"><?php echo CONFIG_NUM;?></a></footer>
<script>
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
        (function () {
            window.scrollReveal = new scrollReveal({reset: true});
        })();
    }
    ;
</script>
</body>
</html>