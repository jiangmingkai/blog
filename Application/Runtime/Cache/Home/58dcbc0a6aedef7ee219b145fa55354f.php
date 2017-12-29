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
        <div class="about left">
            <ul>
                <h4 class="atitle"><span><?php echo (substr($new['new_create_time'],0,10)); ?></span><?php echo ($new['new_title']); ?></h4>
                <p class="newsnav">您现在的位置是:<a href="/">首页</a>&nbsp;>&nbsp;<a href="/download/div/"><?php echo ($new['new_name']); ?></a></p>
                <div id="content">
                    <?php echo ($new['new_content']); ?>
                    <!--<p>展示的是首页html，博客页面布局格式简单，没有复杂的背景，色彩局部点缀，动态的幻灯片展示，切换卡，标签云... 此作品设计图作者窦耀宇，<a-->
                            <!--href="/jstt/web/2015-02-25/745.html"><u><span style="color: rgb(51, 51, 51);">参选活动链接</span></u></a>-->
                    <!--</p>-->
                    <!--<p><img src="/d/file/download/div/2015-04-10/046d4a4a66006ea6279d138b17eae0c9.jpg" alt="柠檬绿兔小白个人博客模板"/>-->
                    <!--</p>-->
                    <!--<p><span class="bt-cs"><a href="http://www.yangqq.com/web/410/index.html" target="_blank">演示</a></span>-->
                    <!--</p>-->
                    <!--<p><span class="bt-cs"><a href="http://www.jiyouh.com" target="_blank">改编版</a></span></p>-->
                    <!--<p><img src="/d/file/download/div/2015-04-17/10c53280e9c1aa3e427019be1760423d.jpg" alt="个人博客"/></p>-->
                </div>
            </ul>
            <div class="infops">
                <?php echo ($new['new_describe']); ?>
                <!--<p class="bt-blue"><a href="http://pan.baidu.com/s/176nUY" target="_blank">下 载</a></p>-->
                <!--<p><b>下载说明：</b></p>-->
                <!--<p>1、解压密码：yangqq.com</p>-->
                <!--<p>2、只有部分模板会提供多页面下载，未加说明都是只有一个首页index.html模板。</p>-->
                <!--<p>3、如果您发现模板有错，或者您有其他更好的意见、建议请给我们留言，我们会及时处理！</p>-->
                <!--<p>4、如果您遇到什么问题，也可加入本站互动QQ群 280998807(交流群) 280998843（技术群）咨询！</p>-->
                <!--<p class="ps">* 下载本站模板以及作品仅供学习研究之用，若发现任何组织机构及个人有用于商业目的者,必追究其法律责任 *</p>-->
            </div>
            <div class="keybq">
                <p><span>关键字词</span>：个人博客模板</p>
            </div>
            <div class="nextinfo">
                <p>上一篇：<a href="<?php echo U('index/info');?>?id=<?php echo ($next['new_id']); ?>"><?php echo ((isset($next['new_title']) && ($next['new_title'] !== ""))?($next['new_title']):"无"); ?></a></p>
                <p>下一篇：<a href="<?php echo U('index/info');?>?id=<?php echo ($prev['new_id']); ?>"><?php echo ((isset($prev['new_title']) && ($prev['new_title'] !== ""))?($prev['new_title']):"无"); ?></a></p>
            </div>
            <div class="otherlink">
                <h2>相关文章</h2>
                <ul>
                    <?php if(is_array($news)): foreach($news as $key=>$vo): ?><li><a href="<?php echo U('index/info');?>?id=<?php echo ($vo['new_id']); ?>" title="<?php echo ($vo['new_title']); ?>"><?php echo ($vo['new_title']); ?></a></li><?php endforeach; endif; ?>
                </ul>
            </div>
            <div class="gbko">
                <!--高速版-->
                <div id="SOHUCS" sid="<?php echo ($new['new_id']); ?>"></div>
                <script charset="utf-8" type="text/javascript"
                        src="http://changyan.sohu.com/upload/changyan.js"></script>
                <script type="text/javascript">
                    window.changyan.api.config({
                        appid: 'cytdenxfn',
                        conf: 'prod_149deac60b51b76653de89576402b768'
                    });
                </script>
            </div>
        </div>

    </div>
    </div>
    </aside>
</article>
<footer> 备案号: <a href="/"><?php echo CONFIG_NUM;?></a></footer>
<script>
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
        (function () {
            window.scrollReveal = new scrollReveal({reset: true});
        })();
    }
    ;
</script>
<!--<script src="/e/public/onclick/?enews=donews&classid=11&id=746"></script>-->
</body>
</html>