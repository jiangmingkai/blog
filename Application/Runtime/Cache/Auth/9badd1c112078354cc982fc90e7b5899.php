<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <script type="text/javascript" src="http://libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
    <script type="text/javascript" src="http://cdn.bootcss.com/css3pie/2.0beta1/PIE_IE678.js"></script>
    <![endif]-->
    <link type="text/css" rel="stylesheet" href="/Public/auth/css/H-ui.min.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/auth/css/h-ui.admin/css/H-ui.admin.css"/>
    <!--[if IE 7]>
    <link href="http://www.bootcss.com/p/font-awesome/assets/css/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <title>博客</title>
    <style>
        .text-nav{
            width:30%;float:left;text-align: center;
        }
    </style>
</head>
<body>
<div class="cl pd-20" style=" background-color:#5bacb6">
    <!--<img class="avatar avatar-XL l" src="images/user.png">-->
    <dl style="color:#fff">
        <dt style="width:100%;text-align: center;font-size: 20px"><?php echo ($new['new_title']); ?></dt>
        <dd><div class="text-nav">分类:&nbsp;&nbsp;<?php echo ($new['new_name']); ?></div><div class="text-nav">关键词:&nbsp;&nbsp;<?php echo ($new['new_key']); ?></div><div class="text-nav">时间:&nbsp;&nbsp;<?php echo ($new['new_create_time']); ?></div></dd>
    </dl>
</div>
<div class="pd-20">
    <?php echo ($new['new_content']); ?>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/H-ui.js"></script>
<script type="text/javascript" src="js/H-ui.admin.js"></script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>