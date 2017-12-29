/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : tpblog

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-09-23 18:35:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_pass` varchar(255) DEFAULT NULL,
  `admin_create_time` datetime DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_show` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0锁定',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES ('1', 'admin', 'admin', '2017-09-14 14:35:22', '21232f297a57a5a743894a0e4a801fc3', '1');

-- ----------------------------
-- Table structure for `tbl_config`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_config`;
CREATE TABLE `tbl_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `config_url` varchar(255) DEFAULT NULL COMMENT '网站根目录',
  `config_title` varchar(255) DEFAULT NULL COMMENT '网站标题',
  `config_abs` varchar(255) DEFAULT NULL COMMENT '网站描述',
  `config_key` varchar(255) DEFAULT NULL COMMENT '网站关键词',
  `config_num` varchar(255) DEFAULT NULL COMMENT '网站备案号',
  `config_cal` varchar(255) DEFAULT NULL COMMENT '联系方式',
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'CURRENT_TIMESTAMP',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_config
-- ----------------------------
INSERT INTO `tbl_config` VALUES ('1', '', '32131', '12312', '131', '31', '3123', '2017-09-23 18:29:15');

-- ----------------------------
-- Table structure for `tbl_nav`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_nav`;
CREATE TABLE `tbl_nav` (
  `nav_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nav_title` varchar(255) DEFAULT NULL,
  `nav_create_time` datetime DEFAULT NULL,
  `nav_one` tinyint(4) DEFAULT NULL COMMENT '分类级别',
  PRIMARY KEY (`nav_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_nav
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_new`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_new`;
CREATE TABLE `tbl_new` (
  `new_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `new_title` varchar(255) DEFAULT NULL COMMENT '标题',
  `new_img` varchar(255) DEFAULT NULL,
  `new_imgsave` varchar(255) DEFAULT NULL,
  `new_auth` varchar(255) DEFAULT NULL COMMENT '作者',
  `new_content` text COMMENT '内容',
  `new_create_time` datetime DEFAULT NULL,
  `new_order` tinyint(4) DEFAULT '0' COMMENT '排序',
  `new_type` int(11) DEFAULT NULL COMMENT '分类',
  `new_num` int(11) DEFAULT NULL COMMENT '阅读量',
  `new_describe` text COMMENT '描述',
  `new_key` varchar(255) DEFAULT NULL COMMENT '关键词',
  `new_show` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1显示',
  `new_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`new_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_new
-- ----------------------------
INSERT INTO `tbl_new` VALUES ('1', 'larvel 数据库', null, null, null, '现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，\r\n\r\nScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力。只需要给元素增加 data-scroll-reveal 属性，当元素进入可视区域的时候会自动被触发设置好的动画。这里有一个我做的示例网站。演示\r\n\r\n1、引入文件\r\n\r\n <script src=\"js/scrollReveal.js\"></script>\r\n\r\n2、html页面\r\n\r\n必须给元素加上 data-scroll-reveal 属性，加上之后会执行默认的动画效果，你也可以自定义改属性以显示不同的动画效果，如：\r\n\r\n<div data-scroll-reveal=\"enter left and move 50px over 1.33s\">杨青个人博客</div>\r\n\r\n<div data-scroll-reveal=\"enter from the bottom after 1s\">ScrollReveal</div>\r\n\r\n<div data-scroll-reveal=\"wait 2.5s and then ease-in-out 100px\">ScrollReveal</div>\r\n\r\n3、JavaScript\r\n\r\n  <script>\r\n\r\n	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){\r\n\r\n		(function(){\r\n\r\n			window.scrollReveal = new scrollReveal({reset: true});\r\n\r\n		})();\r\n\r\n	};\r\n\r\n</script> \r\n\r\ndata-scroll-reveal属性\r\n\r\n上面说了可以自定义 data-scroll-reveal 属性，下面来看看该属性的关键词和值（可选）。\r\n\r\nenter\r\n\r\n说明: 动画起始方向\r\nv\r\n\r\n值: top | right | bottom | left\r\n\r\nmove\r\n\r\n说明: 动画执行距离\r\n\r\n值: 数字，以 px 为单位\r\n\r\nover\r\n\r\n说明: 动画持续时间\r\n\r\n值: 数字，以秒为单位\r\n\r\nafter/wait\r\n\r\n说明: 动画延迟时间<\r\n\r\n值: 数字，以秒为单位\r\n\r\n填充（可选）\r\n\r\n可以在 data-scroll-reveal 属性里填充（添加）一些类似编程的“语句”，使其更有可读性，scrollReveal.js 支持以下“语句”：\r\n\r\nfrom\r\n\r\nthe\r\n\r\nand\r\n\r\nthen\r\n\r\nbut\r\n\r\nwith\r\n现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，\r\n\r\nScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力。只需要给元素增加 data-scroll-reveal 属性，当元素进入可视区域的时候会自动被触发设置好的动画。这里有一个我做的示例网站。演示\r\n\r\n1、引入文件\r\n\r\n <script src=\"js/scrollReveal.js\"></script>\r\n\r\n2、html页面\r\n\r\n必须给元素加上 data-scroll-reveal 属性，加上之后会执行默认的动画效果，你也可以自定义改属性以显示不同的动画效果，如：\r\n\r\n<div data-scroll-reveal=\"enter left and move 50px over 1.33s\">杨青个人博客</div>\r\n\r\n<div data-scroll-reveal=\"enter from the bottom after 1s\">ScrollReveal</div>\r\n\r\n<div data-scroll-reveal=\"wait 2.5s and then ease-in-out 100px\">ScrollReveal</div>\r\n\r\n3、JavaScript\r\n\r\n  <script>\r\n\r\n	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){\r\n\r\n		(function(){\r\n\r\n			window.scrollReveal = new scrollReveal({reset: true});\r\n\r\n		})();\r\n\r\n	};\r\n\r\n</script> \r\n\r\ndata-scroll-reveal属性\r\n\r\n上面说了可以自定义 data-scroll-reveal 属性，下面来看看该属性的关键词和值（可选）。\r\n\r\nenter\r\n\r\n说明: 动画起始方向\r\nv\r\n\r\n值: top | right | bottom | left\r\n\r\nmove\r\n\r\n说明: 动画执行距离\r\n\r\n值: 数字，以 px 为单位\r\n\r\nover\r\n\r\n说明: 动画持续时间\r\n\r\n值: 数字，以秒为单位\r\n\r\nafter/wait\r\n\r\n说明: 动画延迟时间<\r\n\r\n值: 数字，以秒为单位\r\n\r\n填充（可选）\r\n\r\n可以在 data-scroll-reveal 属性里填充（添加）一些类似编程的“语句”，使其更有可读性，scrollReveal.js 支持以下“语句”：\r\n\r\nfrom\r\n\r\nthe\r\n\r\nand\r\n\r\nthen\r\n\r\nbut\r\n\r\nwith\r\n现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，\r\n\r\nScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力。只需要给元素增加 data-scroll-reveal 属性，当元素进入可视区域的时候会自动被触发设置好的动画。这里有一个我做的示例网站。演示\r\n\r\n1、引入文件\r\n\r\n <script src=\"js/scrollReveal.js\"></script>\r\n\r\n2、html页面\r\n\r\n必须给元素加上 data-scroll-reveal 属性，加上之后会执行默认的动画效果，你也可以自定义改属性以显示不同的动画效果，如：\r\n\r\n<div data-scroll-reveal=\"enter left and move 50px over 1.33s\">杨青个人博客</div>\r\n\r\n<div data-scroll-reveal=\"enter from the bottom after 1s\">ScrollReveal</div>\r\n\r\n<div data-scroll-reveal=\"wait 2.5s and then ease-in-out 100px\">ScrollReveal</div>\r\n\r\n3、JavaScript\r\n\r\n  <script>\r\n\r\n	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){\r\n\r\n		(function(){\r\n\r\n			window.scrollReveal = new scrollReveal({reset: true});\r\n\r\n		})();\r\n\r\n	};\r\n\r\n</script> \r\n\r\ndata-scroll-reveal属性\r\n\r\n上面说了可以自定义 data-scroll-reveal 属性，下面来看看该属性的关键词和值（可选）。\r\n\r\nenter\r\n\r\n说明: 动画起始方向\r\nv\r\n\r\n值: top | right | bottom | left\r\n\r\nmove\r\n\r\n说明: 动画执行距离\r\n\r\n值: 数字，以 px 为单位\r\n\r\nover\r\n\r\n说明: 动画持续时间\r\n\r\n值: 数字，以秒为单位\r\n\r\nafter/wait\r\n\r\n说明: 动画延迟时间<\r\n\r\n值: 数字，以秒为单位\r\n\r\n填充（可选）\r\n\r\n可以在 data-scroll-reveal 属性里填充（添加）一些类似编程的“语句”，使其更有可读性，scrollReveal.js 支持以下“语句”：\r\n\r\nfrom\r\n\r\nthe\r\n\r\nand\r\n\r\nthen\r\n\r\nbut\r\n\r\nwith\r\n现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，\r\n\r\nScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力。只需要给元素增加 data-scroll-reveal 属性，当元素进入可视区域的时候会自动被触发设置好的动画。这里有一个我做的示例网站。演示\r\n\r\n1、引入文件\r\n\r\n <script src=\"js/scrollReveal.js\"></script>\r\n\r\n2、html页面\r\n\r\n必须给元素加上 data-scroll-reveal 属性，加上之后会执行默认的动画效果，你也可以自定义改属性以显示不同的动画效果，如：\r\n\r\n<div data-scroll-reveal=\"enter left and move 50px over 1.33s\">杨青个人博客</div>\r\n\r\n<div data-scroll-reveal=\"enter from the bottom after 1s\">ScrollReveal</div>\r\n\r\n<div data-scroll-reveal=\"wait 2.5s and then ease-in-out 100px\">ScrollReveal</div>\r\n\r\n3、JavaScript\r\n\r\n  <script>\r\n\r\n	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){\r\n\r\n		(function(){\r\n\r\n			window.scrollReveal = new scrollReveal({reset: true});\r\n\r\n		})();\r\n\r\n	};\r\n\r\n</script> \r\n\r\ndata-scroll-reveal属性\r\n\r\n上面说了可以自定义 data-scroll-reveal 属性，下面来看看该属性的关键词和值（可选）。\r\n\r\nenter\r\n\r\n说明: 动画起始方向\r\nv\r\n\r\n值: top | right | bottom | left\r\n\r\nmove\r\n\r\n说明: 动画执行距离\r\n\r\n值: 数字，以 px 为单位\r\n\r\nover\r\n\r\n说明: 动画持续时间\r\n\r\n值: 数字，以秒为单位\r\n\r\nafter/wait\r\n\r\n说明: 动画延迟时间<\r\n\r\n值: 数字，以秒为单位\r\n\r\n填充（可选）\r\n\r\n可以在 data-scroll-reveal 属性里填充（添加）一些类似编程的“语句”，使其更有可读性，scrollReveal.js 支持以下“语句”：\r\n\r\nfrom\r\n\r\nthe\r\n\r\nand\r\n\r\nthen\r\n\r\nbut\r\n\r\nwith\r\n现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，\r\n\r\nScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力。只需要给元素增加 data-scroll-reveal 属性，当元素进入可视区域的时候会自动被触发设置好的动画。这里有一个我做的示例网站。演示\r\n\r\n1、引入文件\r\n\r\n <script src=\"js/scrollReveal.js\"></script>\r\n\r\n2、html页面\r\n\r\n必须给元素加上 data-scroll-reveal 属性，加上之后会执行默认的动画效果，你也可以自定义改属性以显示不同的动画效果，如：\r\n\r\n<div data-scroll-reveal=\"enter left and move 50px over 1.33s\">杨青个人博客</div>\r\n\r\n<div data-scroll-reveal=\"enter from the bottom after 1s\">ScrollReveal</div>\r\n\r\n<div data-scroll-reveal=\"wait 2.5s and then ease-in-out 100px\">ScrollReveal</div>\r\n\r\n3、JavaScript\r\n\r\n  <script>\r\n\r\n	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){\r\n\r\n		(function(){\r\n\r\n			window.scrollReveal = new scrollReveal({reset: true});\r\n\r\n		})();\r\n\r\n	};\r\n\r\n</script> \r\n\r\ndata-scroll-reveal属性\r\n\r\n上面说了可以自定义 data-scroll-reveal 属性，下面来看看该属性的关键词和值（可选）。\r\n\r\nenter\r\n\r\n说明: 动画起始方向\r\nv\r\n\r\n值: top | right | bottom | left\r\n\r\nmove\r\n\r\n说明: 动画执行距离\r\n\r\n值: 数字，以 px 为单位\r\n\r\nover\r\n\r\n说明: 动画持续时间\r\n\r\n值: 数字，以秒为单位\r\n\r\nafter/wait\r\n\r\n说明: 动画延迟时间<\r\n\r\n值: 数字，以秒为单位\r\n\r\n填充（可选）\r\n\r\n可以在 data-scroll-reveal 属性里填充（添加）一些类似编程的“语句”，使其更有可读性，scrollReveal.js 支持以下“语句”：\r\n\r\nfrom\r\n\r\nthe\r\n\r\nand\r\n', '2017-09-13 11:21:42', '0', '2', null, null, null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('2', '灯具公司复古风格PSD设计稿', null, null, null, '此模板为PSD设计稿，复古风格。首页主要突出产品，以及公司简介。手绘灯作为头部背景图片，这个比较特别。html可以做出灯一闪一闪的效果，或者说旁边有个按钮...', '2017-09-12 12:16:12', '0', '2', null, null, null, '0', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('3', '个人博客模板古典系列之――江南墨..', null, null, null, '一共是四个页面，首页，图文列表，图片列表，文字内容。此模板风格为中国古典风格，山水画墨迹成就一幅江南墨卷。页面首页设计较为简单，突出文章重点。图文列表显示...', '2017-09-01 12:16:54', '0', '3', null, null, null, '0', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('4', '美丽的茧', null, null, null, '让世界拥有它的脚步，让我保有我的茧。当溃烂已极的心灵再不想做一丝一毫的思索时，就让我静静回到我的茧内，以回忆为睡榻，以悲哀为覆被，这是我唯一的美丽。', '2017-09-04 12:17:32', '0', '3', null, null, null, '0', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('5', '三步实现滚动条触动css动画效果', null, null, null, '现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，ScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力...', '2017-09-05 12:18:20', '0', '2', null, null, null, '0', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('6', '212', null, null, '312313', '<p>3213131<br/></p>', null, '0', '2', null, '23131', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('7', '212', null, null, '312313', '<p>3213131<br/></p>', null, '0', '2', null, '23131', null, '0', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('8', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('9', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('10', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('11', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('12', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('13', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('14', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('15', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('16', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('17', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('18', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('19', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('20', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('21', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('22', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('23', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '2', null, '12312312', null, '0', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('24', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '2', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('25', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '7', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('26', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '7', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('27', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '7', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('28', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '7', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('29', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '7', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('30', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '1', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('31', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '7', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('32', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '7', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('33', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '7', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('34', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '7', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('35', '213', null, null, '3123', '<p>132313<br/></p>', null, '0', '7', null, '12312312', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('36', '个人博客模板古典系列之――江南墨..', null, null, '', '<p>一共是四个页面，首页，图文列表，图片列表，文字内容。此模板风格为中国古典风格，山水画墨迹成就一幅江南墨卷。页面首页设计较为简单，突出文章重点。图文列表显示...</p>', null, '0', '1', null, '', null, '0', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('37', '个人博客模板古典系列之――江南墨..', null, null, '', '<p>一共是四个页面，首页，图文列表，图片列表，文字内容。此模板风格为中国古典风格，山水画墨迹成就一幅江南墨卷。页面首页设计较为简单，突出文章重点。图文列表显示...</p>', null, '0', '1', null, '', null, '0', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('38', '个人博客模板古典系列之――江南墨..', null, null, '', '<p>一共是四个页面，首页，图文列表，图片列表，文字内容。此模板风格为中国古典风格，山水画墨迹成就一幅江南墨卷。页面首页设计较为简单，突出文章重点。图文列表显示...</p>', null, '0', '1', null, '', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('39', '个人博客模板古典系列之――江南墨..', null, null, '121', '<p>一共是四个页面，首页，图文列表，图片列表，文字内容。此模板风格为中国古典风格，山水画墨迹成就一幅江南墨卷。页面首页设计较为简单，突出文章重点。图文列表显示...</p>', null, '0', '1', null, '1212', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('40', '个人博客模板古典系列之――江南墨..', null, null, 'admin', '<p>一共是四个页面，首页，图文列表，图片列表，文字内容。此模板风格为中国古典风格，山水画墨迹成就一幅江南墨卷。页面首页设计较为简单，突出文章重点。图文列表显示...</p>', null, '0', '1', null, '1212', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('41', '12313', null, null, '123', '<p>21312312<br/></p>', null, '0', '3', null, '12313', null, '1', '2017-09-20 10:59:57');
INSERT INTO `tbl_new` VALUES ('42', '12313', null, null, '123', '<p>213123122132<br/></p>', null, '0', '1', null, '12313', null, '0', '2017-09-20 10:59:57');

-- ----------------------------
-- Table structure for `tbl_new_type`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_new_type`;
CREATE TABLE `tbl_new_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `new_name` varchar(255) DEFAULT NULL,
  `new_type_id` tinyint(4) NOT NULL DEFAULT '0' COMMENT '二级分类id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_new_type
-- ----------------------------
INSERT INTO `tbl_new_type` VALUES ('1', '学无止境', '0');
INSERT INTO `tbl_new_type` VALUES ('2', '心得笔记', '1');
INSERT INTO `tbl_new_type` VALUES ('3', 'ip查询', '1');
INSERT INTO `tbl_new_type` VALUES ('4', 'css3|html5', '1');
INSERT INTO `tbl_new_type` VALUES ('5', '网站建设', '1');
INSERT INTO `tbl_new_type` VALUES ('6', 'js经典实例', '1');
INSERT INTO `tbl_new_type` VALUES ('7', '推荐工具', '1');
