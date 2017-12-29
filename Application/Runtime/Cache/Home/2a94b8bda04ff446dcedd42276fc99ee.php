<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo CONFIG_TITLE;?></title>
    <meta name="keywords" content="<?php echo CONFIG_KEY;?>"/>
    <meta name="description" content="<?php echo CONFIG_ABS;?>"/>
    <link href="/Public/sys/css/base.css" rel="stylesheet">
    <link href="/Public/sys/css/index.css" rel="stylesheet">
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
        <div class="blog" data-scroll-reveal="enter top">
            <?php if(is_array($top)): foreach($top as $key=>$vo): ?><figure>
                    <ul>
                        <a href="<?php echo U('index/info');?>?id=<?php echo ($vo["new_id"]); ?>"><img src="/Public/sys/images/t01.jpg"><span><?php echo ($vo["new_key"]); ?></span></a>
                    </ul>
                    <p><a href="<?php echo U('index/info');?>?id=<?php echo ($vo["new_id"]); ?>"><?php echo ($vo["new_title"]); ?></a></p>
                    <figcaption><?php echo (strip_tags(msubstr($vo["new_content"],0,70,'utf-8',true))); ?></figcaption>
                </figure><?php endforeach; endif; ?>
        </div>
        <ul class="cbp_tmtimeline">
            <?php if(is_array($new)): foreach($new as $key=>$vo): ?><li>
                    <time class="cbp_tmtime"><span><?php echo (substr($vo["new_create_time"],5,5)); ?></span> <span><?php echo (substr($vo["new_create_time"],0,4)); ?></span>
                    </time>
                    <div class="cbp_tmicon"></div>
                    <div class="cbp_tmlabel" data-scroll-reveal="enter right over 1s">
                        <h2><?php echo ($vo["new_title"]); ?></h2>
                        <p>
                            <span class="blogpic">
                                <a href="/"><img src="/Public/sys/images/t03.jpg"></a>
                            </span><?php echo (strip_tags(msubstr($vo["new_content"],0,150,'utf-8',true))); ?>
                        </p>
                        <a href="<?php echo U('index/info');?>?id=<?php echo ($vo["new_id"]); ?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>

                        <a href="" title="心得笔记" target="_blank" class="classname"><?php echo ($vo["new_name"]); ?></a>
                    </div>
                </li><?php endforeach; endif; ?>
        </ul>
    </div>
</article>
<footer>
    备案号: <a href="/"><?php echo CONFIG_NUM;?></a>
</footer>
<script>
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
        (function () {
            window.scrollReveal = new scrollReveal({reset: true});
        })();
    }
</script>
</body>
</html>