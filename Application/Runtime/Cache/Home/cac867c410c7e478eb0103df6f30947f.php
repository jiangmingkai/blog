<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo CONFIG_TITLE;?></title>
    <meta name="keywords" content="<?php echo CONFIG_KEY;?>"/>
    <meta name="description" content="<?php echo CONFIG_ABS;?>"/>
    <link href="/Public/sys/css/base.css" rel="stylesheet">
    <link href="/Public/sys/css/book.css" rel="stylesheet">
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
    <a href="<?php echo U('life/index');?>"><span>慢生活</span><span class="en">Life</span></a>
    <a href="http://www.91sheli.cn" target="_blank"><span>福利社</span><span class="en">Welfare</span></a>
    <a href="<?php echo U('share/index');?>"><span>模板分享</span><span class="en">Share</span></a>
    <a href="<?php echo U('learn/index');?>"><span>学无止境</span><span class="en">Learn</span></a>
    <a href="<?php echo U('book/index');?>"><span>留言</span><span class="en">Saying</span></a>
</nav>
</header>
<article>
    <div class="container">
        <h2 class="ctitle"><b>留言板</b> <span>你，生命中最重要的过客，之所以是过客，因为你未曾为我停留。</span></h2>
        <div class="gbook">
            <div class="about">
                <div id="fountainG">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </div>
                <div class="about_girl"><span><a href="/"><img src="/Public/sys/images/girl.jpg"></a></span>
                    <p>当您驻足停留过，从此便注定我们的缘分。站在时间的尽头，我们已是朋友，前端的路上我再也不用一个人独自行走。</p>
                </div>
                <div class="about_girl"><span><a href="/"><img src="/Public/sys/images/girl.jpg"></a></span>
                    <p>当您驻足停留过，从此便注定我们的缘分。站在时间的尽头，我们已是朋友，前端的路上我再也不用一个人独自行走。</p>
                </div>
            </div>
        </div>
    </div>
    </aside>
    <!-- UY BEGIN -->
    <div id="uyan_frame"></div>
    <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=2090545"></script>
    <!-- UY END -->
</article>
<footer>备案号: <a href="/"><?php echo CONFIG_NUM;?></a> </footer>
<script>
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        (function(){
            window.scrollReveal = new scrollReveal({reset: true});
        })();
    };
</script>
</body>
</html>