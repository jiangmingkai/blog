/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : tpblog

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-12-29 15:34:53
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
INSERT INTO `tbl_config` VALUES ('1', '', '花气袭人是酒香', '个人博客', '江明楷的个人博客', '豫ICP备17012012号-1', '13175200827', '2017-12-29 15:01:16');

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
  `new_top` tinyint(4) NOT NULL DEFAULT '0' COMMENT '首页置顶1为置顶',
  PRIMARY KEY (`new_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_new
-- ----------------------------
INSERT INTO `tbl_new` VALUES ('1', 'larvel 数据库', null, null, null, '现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，\r\n\r\nScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力。只需要给元素增加 data-scroll-reveal 属性，当元素进入可视区域的时候会自动被触发设置好的动画。这里有一个我做的示例网站。演示\r\n\r\n1、引入文件\r\n\r\n <script src=\"js/scrollReveal.js\"></script>\r\n\r\n2、html页面\r\n\r\n必须给元素加上 data-scroll-reveal 属性，加上之后会执行默认的动画效果，你也可以自定义改属性以显示不同的动画效果，如：\r\n\r\n<div data-scroll-reveal=\"enter left and move 50px over 1.33s\">杨青个人博客</div>\r\n\r\n<div data-scroll-reveal=\"enter from the bottom after 1s\">ScrollReveal</div>\r\n\r\n<div data-scroll-reveal=\"wait 2.5s and then ease-in-out 100px\">ScrollReveal</div>\r\n\r\n3、JavaScript\r\n\r\n  <script>\r\n\r\n	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){\r\n\r\n		(function(){\r\n\r\n			window.scrollReveal = new scrollReveal({reset: true});\r\n\r\n		})();\r\n\r\n	};\r\n\r\n</script> \r\n\r\ndata-scroll-reveal属性\r\n\r\n上面说了可以自定义 data-scroll-reveal 属性，下面来看看该属性的关键词和值（可选）。\r\n\r\nenter\r\n\r\n说明: 动画起始方向\r\nv\r\n\r\n值: top | right | bottom | left\r\n\r\nmove\r\n\r\n说明: 动画执行距离\r\n\r\n值: 数字，以 px 为单位\r\n\r\nover\r\n\r\n说明: 动画持续时间\r\n\r\n值: 数字，以秒为单位\r\n\r\nafter/wait\r\n\r\n说明: 动画延迟时间<\r\n\r\n值: 数字，以秒为单位\r\n\r\n填充（可选）\r\n\r\n可以在 data-scroll-reveal 属性里填充（添加）一些类似编程的“语句”，使其更有可读性，scrollReveal.js 支持以下“语句”：\r\n\r\nfrom\r\n\r\nthe\r\n\r\nand\r\n\r\nthen\r\n\r\nbut\r\n\r\nwith\r\n现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，\r\n\r\nScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力。只需要给元素增加 data-scroll-reveal 属性，当元素进入可视区域的时候会自动被触发设置好的动画。这里有一个我做的示例网站。演示\r\n\r\n1、引入文件\r\n\r\n <script src=\"js/scrollReveal.js\"></script>\r\n\r\n2、html页面\r\n\r\n必须给元素加上 data-scroll-reveal 属性，加上之后会执行默认的动画效果，你也可以自定义改属性以显示不同的动画效果，如：\r\n\r\n<div data-scroll-reveal=\"enter left and move 50px over 1.33s\">杨青个人博客</div>\r\n\r\n<div data-scroll-reveal=\"enter from the bottom after 1s\">ScrollReveal</div>\r\n\r\n<div data-scroll-reveal=\"wait 2.5s and then ease-in-out 100px\">ScrollReveal</div>\r\n\r\n3、JavaScript\r\n\r\n  <script>\r\n\r\n	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){\r\n\r\n		(function(){\r\n\r\n			window.scrollReveal = new scrollReveal({reset: true});\r\n\r\n		})();\r\n\r\n	};\r\n\r\n</script> \r\n\r\ndata-scroll-reveal属性\r\n\r\n上面说了可以自定义 data-scroll-reveal 属性，下面来看看该属性的关键词和值（可选）。\r\n\r\nenter\r\n\r\n说明: 动画起始方向\r\nv\r\n\r\n值: top | right | bottom | left\r\n\r\nmove\r\n\r\n说明: 动画执行距离\r\n\r\n值: 数字，以 px 为单位\r\n\r\nover\r\n\r\n说明: 动画持续时间\r\n\r\n值: 数字，以秒为单位\r\n\r\nafter/wait\r\n\r\n说明: 动画延迟时间<\r\n\r\n值: 数字，以秒为单位\r\n\r\n填充（可选）\r\n\r\n可以在 data-scroll-reveal 属性里填充（添加）一些类似编程的“语句”，使其更有可读性，scrollReveal.js 支持以下“语句”：\r\n\r\nfrom\r\n\r\nthe\r\n\r\nand\r\n\r\nthen\r\n\r\nbut\r\n\r\nwith\r\n现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，\r\n\r\nScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力。只需要给元素增加 data-scroll-reveal 属性，当元素进入可视区域的时候会自动被触发设置好的动画。这里有一个我做的示例网站。演示\r\n\r\n1、引入文件\r\n\r\n <script src=\"js/scrollReveal.js\"></script>\r\n\r\n2、html页面\r\n\r\n必须给元素加上 data-scroll-reveal 属性，加上之后会执行默认的动画效果，你也可以自定义改属性以显示不同的动画效果，如：\r\n\r\n<div data-scroll-reveal=\"enter left and move 50px over 1.33s\">杨青个人博客</div>\r\n\r\n<div data-scroll-reveal=\"enter from the bottom after 1s\">ScrollReveal</div>\r\n\r\n<div data-scroll-reveal=\"wait 2.5s and then ease-in-out 100px\">ScrollReveal</div>\r\n\r\n3、JavaScript\r\n\r\n  <script>\r\n\r\n	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){\r\n\r\n		(function(){\r\n\r\n			window.scrollReveal = new scrollReveal({reset: true});\r\n\r\n		})();\r\n\r\n	};\r\n\r\n</script> \r\n\r\ndata-scroll-reveal属性\r\n\r\n上面说了可以自定义 data-scroll-reveal 属性，下面来看看该属性的关键词和值（可选）。\r\n\r\nenter\r\n\r\n说明: 动画起始方向\r\nv\r\n\r\n值: top | right | bottom | left\r\n\r\nmove\r\n\r\n说明: 动画执行距离\r\n\r\n值: 数字，以 px 为单位\r\n\r\nover\r\n\r\n说明: 动画持续时间\r\n\r\n值: 数字，以秒为单位\r\n\r\nafter/wait\r\n\r\n说明: 动画延迟时间<\r\n\r\n值: 数字，以秒为单位\r\n\r\n填充（可选）\r\n\r\n可以在 data-scroll-reveal 属性里填充（添加）一些类似编程的“语句”，使其更有可读性，scrollReveal.js 支持以下“语句”：\r\n\r\nfrom\r\n\r\nthe\r\n\r\nand\r\n\r\nthen\r\n\r\nbut\r\n\r\nwith\r\n现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，\r\n\r\nScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力。只需要给元素增加 data-scroll-reveal 属性，当元素进入可视区域的时候会自动被触发设置好的动画。这里有一个我做的示例网站。演示\r\n\r\n1、引入文件\r\n\r\n <script src=\"js/scrollReveal.js\"></script>\r\n\r\n2、html页面\r\n\r\n必须给元素加上 data-scroll-reveal 属性，加上之后会执行默认的动画效果，你也可以自定义改属性以显示不同的动画效果，如：\r\n\r\n<div data-scroll-reveal=\"enter left and move 50px over 1.33s\">杨青个人博客</div>\r\n\r\n<div data-scroll-reveal=\"enter from the bottom after 1s\">ScrollReveal</div>\r\n\r\n<div data-scroll-reveal=\"wait 2.5s and then ease-in-out 100px\">ScrollReveal</div>\r\n\r\n3、JavaScript\r\n\r\n  <script>\r\n\r\n	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){\r\n\r\n		(function(){\r\n\r\n			window.scrollReveal = new scrollReveal({reset: true});\r\n\r\n		})();\r\n\r\n	};\r\n\r\n</script> \r\n\r\ndata-scroll-reveal属性\r\n\r\n上面说了可以自定义 data-scroll-reveal 属性，下面来看看该属性的关键词和值（可选）。\r\n\r\nenter\r\n\r\n说明: 动画起始方向\r\nv\r\n\r\n值: top | right | bottom | left\r\n\r\nmove\r\n\r\n说明: 动画执行距离\r\n\r\n值: 数字，以 px 为单位\r\n\r\nover\r\n\r\n说明: 动画持续时间\r\n\r\n值: 数字，以秒为单位\r\n\r\nafter/wait\r\n\r\n说明: 动画延迟时间<\r\n\r\n值: 数字，以秒为单位\r\n\r\n填充（可选）\r\n\r\n可以在 data-scroll-reveal 属性里填充（添加）一些类似编程的“语句”，使其更有可读性，scrollReveal.js 支持以下“语句”：\r\n\r\nfrom\r\n\r\nthe\r\n\r\nand\r\n\r\nthen\r\n\r\nbut\r\n\r\nwith\r\n现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，\r\n\r\nScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力。只需要给元素增加 data-scroll-reveal 属性，当元素进入可视区域的时候会自动被触发设置好的动画。这里有一个我做的示例网站。演示\r\n\r\n1、引入文件\r\n\r\n <script src=\"js/scrollReveal.js\"></script>\r\n\r\n2、html页面\r\n\r\n必须给元素加上 data-scroll-reveal 属性，加上之后会执行默认的动画效果，你也可以自定义改属性以显示不同的动画效果，如：\r\n\r\n<div data-scroll-reveal=\"enter left and move 50px over 1.33s\">杨青个人博客</div>\r\n\r\n<div data-scroll-reveal=\"enter from the bottom after 1s\">ScrollReveal</div>\r\n\r\n<div data-scroll-reveal=\"wait 2.5s and then ease-in-out 100px\">ScrollReveal</div>\r\n\r\n3、JavaScript\r\n\r\n  <script>\r\n\r\n	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){\r\n\r\n		(function(){\r\n\r\n			window.scrollReveal = new scrollReveal({reset: true});\r\n\r\n		})();\r\n\r\n	};\r\n\r\n</script> \r\n\r\ndata-scroll-reveal属性\r\n\r\n上面说了可以自定义 data-scroll-reveal 属性，下面来看看该属性的关键词和值（可选）。\r\n\r\nenter\r\n\r\n说明: 动画起始方向\r\nv\r\n\r\n值: top | right | bottom | left\r\n\r\nmove\r\n\r\n说明: 动画执行距离\r\n\r\n值: 数字，以 px 为单位\r\n\r\nover\r\n\r\n说明: 动画持续时间\r\n\r\n值: 数字，以秒为单位\r\n\r\nafter/wait\r\n\r\n说明: 动画延迟时间<\r\n\r\n值: 数字，以秒为单位\r\n\r\n填充（可选）\r\n\r\n可以在 data-scroll-reveal 属性里填充（添加）一些类似编程的“语句”，使其更有可读性，scrollReveal.js 支持以下“语句”：\r\n\r\nfrom\r\n\r\nthe\r\n\r\nand\r\n', '2017-09-13 11:21:42', '0', '2', null, null, null, '1', '2017-12-06 17:21:01', '1');
INSERT INTO `tbl_new` VALUES ('2', '灯具公司复古风格PSD设计稿', null, null, null, '此模板为PSD设计稿，复古风格。首页主要突出产品，以及公司简介。手绘灯作为头部背景图片，这个比较特别。html可以做出灯一闪一闪的效果，或者说旁边有个按钮...', '2017-09-12 12:16:12', '0', '2', null, null, null, '0', '2017-12-06 17:21:02', '1');
INSERT INTO `tbl_new` VALUES ('3', '个人博客模板古典系列之――江南墨..', null, null, null, '一共是四个页面，首页，图文列表，图片列表，文字内容。此模板风格为中国古典风格，山水画墨迹成就一幅江南墨卷。页面首页设计较为简单，突出文章重点。图文列表显示...', '2017-09-01 12:16:54', '0', '2', null, null, null, '0', '2017-12-29 13:52:01', '0');
INSERT INTO `tbl_new` VALUES ('4', '美丽的茧', null, null, null, '让世界拥有它的脚步，让我保有我的茧。当溃烂已极的心灵再不想做一丝一毫的思索时，就让我静静回到我的茧内，以回忆为睡榻，以悲哀为覆被，这是我唯一的美丽。', '2017-09-04 12:17:32', '0', '3', null, null, null, '0', '2017-09-20 10:59:57', '0');
INSERT INTO `tbl_new` VALUES ('5', '三步实现滚动条触动css动画效果', null, null, null, '现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，ScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力...', '2017-09-05 12:18:20', '0', '2', null, null, null, '1', '2017-12-29 13:54:13', '0');
INSERT INTO `tbl_new` VALUES ('36', '个人博客模板古典系列之――江南墨..', null, null, '', '<p>一共是四个页面，首页，图文列表，图片列表，文字内容。此模板风格为中国古典风格，山水画墨迹成就一幅江南墨卷。页面首页设计较为简单，突出文章重点。图文列表显示...</p>', '2017-12-06 17:48:52', '0', '1', null, '', null, '0', '2017-12-27 16:35:37', '0');
INSERT INTO `tbl_new` VALUES ('40', '个人博客模板古典系列之――江南墨..', null, null, 'admin', '<p>一共是四个页面，首页，图文列表，图片列表，文字内容。此模板风格为中国古典风格，山水画墨迹成就一幅江南墨卷。页面首页设计较为简单，突出文章重点。图文列表显示...</p>', '2017-12-06 17:48:52', '0', '2', null, '1212', null, '1', '2017-12-29 14:11:31', '0');
INSERT INTO `tbl_new` VALUES ('43', '基于thinkphp3.2的权限系统', null, null, '', '<p>基于thinkphp3.2的权限系统</p>', '2017-12-06 17:48:52', '0', '6', null, '', null, '0', '2017-12-29 14:11:21', '1');
INSERT INTO `tbl_new` VALUES ('44', '基于thinkphp3.2的权限系统', null, null, '', '<p>auth权限管理<br/>权限管理基本是作为网站的标配了；<br/>除非是像博客这类个人使用的；否则权限管理的重要性不言而喻；<br/>今个就来写写auth权限管理；<br/>thinkphp已经内置了auth权限类位于：/ThinkPHP/Library/Think/Auth.class.php<br/>执行里面的sql生成3张表auth_rule、auth_group、auth_group_access；<br/>然后自己再建一张users表；当然起其他的名字也是可以的；不过是需要在配置项中说明；</p>', '2017-12-06 17:55:09', '0', '4', null, '', null, '1', '2017-12-29 14:11:23', '0');

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

-- ----------------------------
-- Table structure for `tbl_travel`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_travel`;
CREATE TABLE `tbl_travel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL COMMENT '类型 ofo 摩拜',
  `url` text COMMENT '链接地址',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'CURRENT_TIMESTAMP',
  `create_time` datetime DEFAULT NULL,
  `new` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `stop_time` datetime DEFAULT '2020-01-01 00:00:00',
  `is_show` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_travel
-- ----------------------------
INSERT INTO `tbl_travel` VALUES ('1', '1', 'https://common.ofo.so/newdist/?MouthCardPage&channel=21323_1506585564474&type=2&duringType=1&subType=77303699', '2017-11-18 09:39:26', '2017-11-13 00:00:00', '0', '安徽卫视（1）', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('2', '1', 'https://common.ofo.so/newdist/?MouthCardPage&channel=21323_1506585654695&type=2&duringType=1&subType=80206688', '2017-11-14 17:18:49', '2017-11-13 00:00:00', '0', '安徽卫视（2）', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('3', '1', 'https://common.ofo.so/newdist/?MouthCardPage&channel=21323_1506585654695&type=2&duringType=1&subType=80206688', '2017-11-14 17:18:50', '2017-11-13 00:00:00', '0', '安徽卫视（3）', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('4', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2157932_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d33096_1506320961225%26type%3d2%26duringType%3d1%26subType%3d39854794', '2017-11-14 14:58:15', '2017-11-13 00:00:00', '0', '苏宁大聚惠（1）', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('5', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2157932_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d33096_1506321105448%26type%3d2%26duringType%3d1%26subType%3d48348426', '2017-11-14 14:58:09', '2017-11-13 00:00:00', '0', '苏宁大聚惠（2）', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('6', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2157932_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d33096_1506321265269%26type%3d2%26duringType%3d1%26subType%3d95958902', '2017-11-14 14:58:09', '2017-11-13 00:00:00', '0', '苏宁大聚惠（3）', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('7', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2106819_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d21323_1503040658153%26type%3d2%26duringType%3d1%26subType%3d55617617', '2017-11-14 14:58:08', '2017-11-13 00:00:00', '0', '安慕希联名卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('8', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2106819_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d21323_1502943014209%26type%3d2%26duringType%3d1%26subType%3d48759012', '2017-11-14 14:58:07', '2017-11-13 00:00:00', '0', '王老吉联名卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('9', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2106819_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d21323_1502866729702%26type%3d2%26duringType%3d1%26subType%3d12209636', '2017-11-14 14:58:06', '2017-11-13 00:00:00', '0', '国元证券月卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('10', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2106819_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d21323_1502959129816%26type%3d2%26duringType%3d1%26subType%3d48288229', '2017-11-14 14:58:05', '2017-11-13 00:00:00', '0', '新浪乐居月卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('11', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2106819_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d21323_1502896052247%26type%3d2%26duringType%3d1%26subType%3d54976839', '2017-11-14 14:58:05', '2017-11-13 00:00:00', '0', '途牛定制月卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('12', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2106819_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d21323_1502848591686%26type%3d2%26duringType%3d1%26subType%3d60279234', '2017-11-14 14:58:04', '2017-11-13 00:00:00', '0', '躺倒鸭联名卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('13', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2106819_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d21323_1503115957682%26type%3d2%26duringType%3d1%26subType%3d99911062', '2017-11-14 14:58:04', '2017-11-13 00:00:00', '0', '毒APP联名卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('14', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2106819_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d21323_1502951390188%26type%3d2%26duringType%3d1%26subType%3d27276995', '2017-11-14 14:58:03', '2017-11-13 00:00:00', '0', '饿了么联名卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('15', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2106819_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d21323_1502849545428%26type%3d2%26duringType%3d1%26subType%3d45128140', '2017-11-14 14:58:02', '2017-11-13 00:00:00', '0', '券妈妈联名卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('16', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2133271_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%3d%26channel%3d954_1504577697253%26type%3d2%26duringType%3d1%26subType%3d37186985%26from%3dsinglemessage', '2017-11-14 14:58:02', '2017-11-13 00:00:00', '0', '小蚁科技&ofo月卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('17', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2133271_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%3d%26channel%3d21323_1503563975517%26type%3d2%26duringType%3d1%26subType%3d13341283%26from%3dsinglemessage%26isappinstalled%3d0', '2017-11-14 14:58:01', '2017-11-13 00:00:00', '0', '凡科&ofo月卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('18', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2133271_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%3d%26channel%3d12717_1503037303067%26type%3d2%26duringType%3d1%26subType%3d27596096%26from%3dtimeline%26isappinstalled%3d0', '2017-11-14 14:58:01', '2017-11-13 00:00:00', '0', '驴妈妈&ofo月卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('19', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2133271_0&url=https%3a%2f%2factive.clewm.net%2fCd3uty%3fqrurl%3dhttps%253A%252F%252Fc3.clewm.net%252FCd3uty%3eype%3d1%26uname%3d177****4560%26key%3d7ad7d15b01eed4257050262216e3dcbba755e39984		', '2017-11-14 17:15:50', '2017-11-13 00:00:00', '0', '景安网络&ofo季卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('20', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2133271_0&url=https%3a%2f%2factive.clewm.net%2fCIxHCF%3fqrurl%3dhttp%253A%252F%252Fqr27.cn%252FCIxHCF%3eype%3d1%26key%3d07714159237a0191405025a5bc3d369b67b0fc9117', '2017-11-13 15:56:23', '2017-11-13 00:00:00', '0', '仿佛花艺&ofo季卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('21', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2133271_0&url=https%3a%2f%2falicliimg.clewm.net%2f718%2f920%2f1920718%2f15045785701506456aa763379378ce42f96657fdbd41f1504578527.jpg', '2017-11-13 15:56:23', '2017-11-13 00:00:00', '0', '智学网&ofo季卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('22', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2133271_0&url=https%3a%2f%2fcommon.ofo.so%2fabout%2fmonthCard%2fcampaign_alipay.html%3fchannel%3d26193_1503657949116%26type%3d2%26subType%3d92708980%26duringType%3d1%26app_idhttp://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2133271_0&url=https%3a%2f%2fcommon.ofo.so%2fabout%2fmonthCard%2fcampaign_alipay.html%3fchannel%3d26193_1503657949116%26type%3d2%26subType%3d92708980%26duringType%3d1%26app_id%3d2017030406052783%26source%3dalipay_wallet%26scope%3dauth_user%2cauth_zhima%26readauth%3don%26alipay_token%3d%26userOutputs%3dauth_user_0%26auth_code%3d4807cf651ee743e290e3bd53baa5NX66', '2017-11-13 15:56:24', '2017-11-13 00:00:00', '0', '支付宝&ofo月卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('23', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2156940_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%3d%26channel%3d9466_1503389907508%26type%3d2%26duringType%3d1%26subType%3d32581279', '2017-11-13 15:56:24', '2017-11-13 00:00:00', '0', '屈臣氏', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('24', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2134345_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d21323_1504234297335%26type%3d2%26duringType%3d1%26subType%3d51106940', '2017-11-13 15:56:25', '2017-11-13 00:00:00', '0', '德克士', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('25', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2169341_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d40294_1507712493392%26type%3d2%26duringType%3d1%26subType%3d15413640', '2017-11-13 15:56:25', '2017-11-13 00:00:00', '0', '光环国际（1）', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('26', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2169341_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d40294_1507712483387%26type%3d2%26duringType%3d1%26subType%3d50096569', '2017-11-13 15:56:26', '2017-11-13 00:00:00', '0', '光环国际（2）', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('27', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2169341_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d40294_1507712489075%26type%3d2%26duringType%3d1%26subType%3d13785002', '2017-11-13 15:56:26', '2017-11-13 00:00:00', '0', '光环国际（3）', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('28', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2167671_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d33840_1507542970413%26type%3d2%26duringType%3d1%26subType%3d77389835', '2017-11-13 15:56:27', '2017-11-13 00:00:00', '0', 'FindJapan（1）', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('29', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2167671_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d33840_1507543263071%26type%3d2%26duringType%3d1%26subType%3d33346127', '2017-11-13 15:56:28', '2017-11-13 00:00:00', '0', 'FindJapan（2）', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('30', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2167671_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d33840_1507543128711%26type%3d2%26duringType%3d1%26subType%3d52012392', '2017-11-13 15:56:29', '2017-11-13 00:00:00', '0', 'FindJapan（3）', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('31', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2183448_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%3d%26channel%3d8993_1508490965476%26type%3d2%26duringType%3d1%26subType%3d32351856', '2017-11-13 15:56:29', '2017-11-13 00:00:00', '0', '滴滴代驾', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('32', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2134444_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%3d%26channel%3d9466_1503372595543%26type%3d2%26duringType%3d1%26subType%3d89386053', '2017-11-13 15:56:30', '2017-11-13 00:00:00', '0', '开学季', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('33', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2163342_0&url=https%3a%2f%2factive.clewm.net%2fAs2lWj%3fqrurl%3dhttps%253A%252F%252Fc3.clewm.net%252FAs2lWj%26gtype%3d1%26key%3d3db6c15936bd62df2075148d76f53ba03913feb524', '2017-11-13 15:56:31', '2017-11-13 00:00:00', '0', '去哪儿旅行&ofo季卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('34', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2133271_0&url=https%3a%2f%2factive.clewm.net%2fFzvYF1%3fqrurl%3dhttps%253A%252F%252Fc3.clewm.net%252FFzvYF1%3eype%3d1%26key%3d54fa615d757e42e3b05114534a85ccce653e51c252', '2017-11-13 15:56:31', '2017-11-13 00:00:00', '0', '香飘飘&ofo季卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('35', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2179858_0&url=https%3a%2f%2factive.clewm.net%2fAF4cg8%3fqrurl%3dhttp%253A%252F%252Fqr27.cn%252FAF4cg8%26gtype%3d1%26key%3de338715ecec27989408564e8c5038e5bcd028e6604', '2017-11-13 16:55:55', '2017-11-13 00:00:00', '1', 'ofo季卡', '2020-01-01 00:00:00', '1');
INSERT INTO `tbl_travel` VALUES ('36', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2091650_0&url=https%3a%2f%2fm.mobike.com%2fh5%2fpartner_coupon%2fzh%2findex.html%3fcitycode%3d0755%26src%3dhdrs', '2017-11-13 15:56:15', '2017-11-13 15:55:21', '0', '券妈妈', '2017-11-30 23:59:59', '0');
INSERT INTO `tbl_travel` VALUES ('37', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2091650_0&url=https%3a%2f%2fevent.mobike.com%2fmc%2f%3fsrc%3dyzf', '2017-11-13 15:57:50', '2017-11-13 15:57:26', '0', '摩拜月卡-翼支付', '2017-11-30 23:59:59', '0');
INSERT INTO `tbl_travel` VALUES ('38', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2091650_0&url=https%3a%2f%2fevent.mobike.com%2fmc%2f%3fsrc%3dwph', '2017-11-13 15:59:18', '2017-11-13 15:58:33', '0', '摩拜月卡-唯品会', '2017-11-30 23:59:59', '0');
INSERT INTO `tbl_travel` VALUES ('39', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2091650_0&url=https%3a%2f%2fevent.mobike.com%2fmc%2f%3fsrc%3dltwyx', '2017-11-13 15:59:23', '2017-11-13 15:59:00', '0', '摩拜月卡-沃邮箱', '2017-11-30 23:59:59', '0');
INSERT INTO `tbl_travel` VALUES ('40', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2091650_0&url=https%3a%2f%2fevent.mobike.com%2fmc%2f%3fsrc%3dzgyd', '2017-11-13 16:00:34', '2017-11-13 16:00:11', '0', '摩拜月卡-中国移动', '2017-11-30 23:59:59', '0');
INSERT INTO `tbl_travel` VALUES ('41', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2091650_0&url=https%3a%2f%2fevent.mobike.com%2fmc%2f%3fsrc%3dtxxy', '2017-11-13 16:01:10', '2017-11-13 16:00:54', '0', '摩拜月卡-腾讯信用', '2017-11-30 23:59:59', '0');
INSERT INTO `tbl_travel` VALUES ('42', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2091650_0&url=https%3a%2f%2fevent.mobike.com%2fmc%2f', '2017-11-13 16:02:39', '2017-11-13 16:02:29', '0', '摩拜月卡', '2017-11-30 23:59:59', '0');
INSERT INTO `tbl_travel` VALUES ('43', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2091650_0&url=https%3a%2f%2fevent.mobike.com%2fmc%2f?src=jtgb', '2017-11-13 16:05:19', '2017-11-13 16:03:24', '0', '摩拜月卡-天津交通广播', '2017-11-30 23:59:59', '0');
INSERT INTO `tbl_travel` VALUES ('44', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2091650_0&url=https%3a%2f%2fevent.mobike.com%2fmc%2f?src=xwcb', '2017-11-13 16:05:22', '2017-11-13 16:04:20', '0', '摩拜月卡-新闻晨报', '2017-11-30 23:59:59', '0');
INSERT INTO `tbl_travel` VALUES ('45', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2091650_0&url=https%3a%2f%2fevent.mobike.com%2fmc%2f?src=icbc', '2017-11-13 16:05:24', '2017-11-13 16:05:08', '0', '摩拜月卡-中国工商银行', '2017-11-30 23:59:59', '0');
INSERT INTO `tbl_travel` VALUES ('46', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2091650_0&url=https%3a%2f%2fevent.mobike.com%2fmc%2f?src=zglt', '2017-11-13 16:34:34', '2017-11-13 16:05:59', '1', '摩拜月卡-中国联通', '2017-11-30 23:59:59', '0');
INSERT INTO `tbl_travel` VALUES ('47', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2091650_0&url=https%3a%2f%2fevent.mobike.com%2fmc%2f?src=wbhy', '2017-11-13 16:34:37', '2017-11-13 16:06:28', '1', '摩拜月卡-微博会员', '2017-11-30 23:59:59', '0');
INSERT INTO `tbl_travel` VALUES ('48', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d9c5ae6b5ce9af630dea9b56f4382d286', '2017-11-13 16:22:58', '2017-11-13 16:22:38', '0', '滴滴155元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('49', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d00a29a1adba46605004b124034faae6a', '2017-11-13 16:23:25', '2017-11-13 16:23:21', '0', '滴滴75元打车券', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('50', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3da570e90fe804e76e9b1dcc7473d7f50b', '2017-11-13 16:24:16', '2017-11-13 16:24:13', '0', '10月12滴滴165元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('51', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3df8006252272ed70e6cedbf89e32c3cad', '2017-11-13 16:24:49', '2017-11-13 16:24:46', '0', '10月18滴滴155元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('52', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d03abb1c0ec6b625d7ffd84861ff7e292', '2017-11-13 16:25:31', '2017-11-13 16:25:28', '0', '滴滴155元官方打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('53', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=http%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d5e9b38e8e4ab2a15707c8500f7df364e', '2017-11-13 16:26:14', '2017-11-13 16:26:12', '0', 'TIM&滴滴155元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('54', '3', 'http://www.quanmama.com/t/goto.aspx?url=http://t.cn/RW6MqPU', '2017-11-13 16:27:15', '2017-11-13 16:27:13', '0', '滴滴155元霜降打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('55', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d0ea3090ef9a84f94f93148045250a687%26from%3dsinglemessage%26isappinstalled%3d0', '2017-11-13 16:27:57', '2017-11-13 16:27:54', '0', '10月25滴滴165元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('56', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d5af97b46a332b3777d864b7601de4218', '2017-11-13 16:28:54', '2017-11-13 16:28:51', '0', '10月27滴滴155元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('57', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d4b662ebf02d55bdd5d4d046978b9202e', '2017-11-13 16:29:44', '2017-11-13 16:29:40', '0', '滴滴&腾讯视频送155元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('58', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3dbe4b75cf312acfbedc95e10e67201fcd', '2017-11-13 16:30:28', '2017-11-13 16:30:26', '0', '滴滴155元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('59', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3dc54a11418d66e5c729f2186870e402c5', '2017-11-13 16:31:00', '2017-11-13 16:30:57', '0', '滴滴50元打车券', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('60', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d90106e6ba4fc1533ed4dc73da50d5f34%26url%3dxxcto.com', '2017-11-13 16:31:56', '2017-11-13 16:31:53', '0', '11月8日滴滴155元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('61', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d44e1a60d212330288cf71d750652bafb%26url%3dxxcto.com', '2017-11-14 17:07:44', '2017-11-13 16:32:38', '0', '11月9日滴滴155元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('62', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d3ca583051a53bf034553e14e4807e5cf%26url%3dxxcto.com', '2017-11-14 17:09:22', '2017-11-13 16:33:29', '0', '滴滴155元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('63', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3db739947e3ba2d84f52dcf1e1472bf1c8', '2017-11-15 10:08:53', '2017-11-13 16:33:51', '0', '11月10日滴滴155元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('64', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d9f56894a96953eba68b548de30b1b683', '2017-11-15 10:08:58', '2017-11-14 17:07:35', '0', '11月13日滴滴155元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('65', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3dfe294bfdf0359133e6733f9732e58f3c%26lat%3d31.81359163821252%26lng%3d117.23347554713756%26maptype%3dsoso%26phone%3d%26datatype%3dwebapp%26token%3d6HTdQrxyw2HKgFmXAhy2jC2uAlNC3Sc8XRh3u5Mxsp5MyTsOwkAMANGroKld2Gscb3wbPuFTICRWVFHujtJRzryVEwXCmWrdjhk6q02ZOQtXykJYqPXAeH8_l4UyYbzGLqZTc--6Cbf_Fu4U5poRbt4d4bGfporwpHT7BQAA__8%253D%26channel%3d1200%26cityid%3d15', '2017-11-24 08:46:51', '2017-11-14 17:09:41', '0', '滴滴155元打车券+20滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('66', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2204523_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d21323_1509421109193%26type%3d2%26duringType%3d1%26subType%3d92096282', '2017-11-18 17:28:37', '2017-11-14 17:16:16', '1', '酷音送ofo小黄车免费月卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('67', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2204524_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%3d%26channel%3d21323_1504930435488%26type%3d2%26duringType%3d1%26subType%3d31868559', '2017-11-14 17:17:44', '2017-11-14 17:17:32', '1', '掌中安徽送ofo免费月卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('68', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2204522_0&url=https%3a%2f%2fcommon.ofo.so%2fnewdist%2f%3fMouthCardPage%26channel%3d21323_1509681838918%26type%3d2%26duringType%3d1%26subType%3d86975834', '2017-11-14 17:20:34', '2017-11-14 17:20:28', '1', '卡拉宝送ofo免费月卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('69', '1', 'https://active.clewm.net/E6IJaN?qrurl=https%3A%2F%2Fc3.clewm.net%2FE6IJaN&gtype=1&key=f3e881570df50122f10711a6a43247b2a1a8e71625', '2017-11-15 10:08:42', '2017-11-15 10:08:35', '1', '网易云音乐&ofo季卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('70', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2196271_0&url=https%3a%2f%2fcommon.ofo.so%2fcampaign%2fgiftbag%2freceive.html%3fchannel%3d3637_1509542054959%26type%3d2%26duringType%3d1%26subtype%3d78244282', '2017-11-16 13:49:31', '2017-11-16 13:49:21', '1', '小黄车99元免押金券+1元月卡免费领取', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('71', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d48d0e6ff9ed2f9a261138ee7c821f647', '2017-11-24 08:46:56', '2017-11-18 17:38:55', '0', '11月18日滴滴155元打车券+20滴币1', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('73', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2188594_0&url=https%3a%2f%2fm.mobike.com%2fh5%2fpartner_coupon%2fzh%2findex.html%3fcitycode%3d010%26src%3dqianjibian', '2017-11-18 17:42:40', '2017-11-18 17:42:38', '1', '千积变邀您免费骑摩拜月卡', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('74', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2190665_0&url=https%3a%2f%2fm.mobike.com%2fh5%2fpartner_coupon%2fzh%2findex.html%3fcitycode%3d0591%26src%3dfjxf%26from%3dsinglemessage%26isappinstalled%3d0', '2017-11-18 17:44:21', '2017-11-18 17:43:23', '1', '福建消防送摩拜单车月卡', '2017-11-30 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('75', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2221189_0&url=https%3a%2f%2fm.mobike.com%2fh5%2ften_coupon%2fzh%2findex.html%3fsrc%3dxzdz%26citycode%3d021', '2017-11-18 17:45:29', '2017-11-18 17:45:04', '1', '小猪短租送摩拜单车月卡', '2017-11-30 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('76', '2', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2182303_0&url=https%3a%2f%2fevent.mobike.com%2fmc%2f%3fsrc%3dgroup', '2017-11-18 17:46:33', '2017-11-18 17:46:09', '1', '了如三舍送摩拜月卡', '2017-12-30 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('77', '1', 'https://active.clewm.net/FE9Bhs?qrurl=https%3A%2F%2Fc3.clewm.net%2FFE9Bhs&gtype=1&key=bc2281503575987a510998c22596344c18cb306542', '2017-11-18 17:50:24', '2017-11-18 17:50:26', '1', '咪咕汇邀你免费骑ofo90天', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('78', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=https%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3d464e0490902ddadd7f33296605da11ce', '2017-11-24 08:46:25', '2017-11-24 08:45:58', '1', '11月20日滴滴155元打车券+5滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('79', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=http%3a%2f%2furl.cn%2f5Dp85Sy', '2017-11-24 08:47:11', '2017-11-24 08:46:45', '1', '11月21日滴滴155元打车券+5滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('80', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2112230_0&url=http%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3da570e90fe804e76e9b1dcc7473d7f50b', '2017-11-24 08:47:34', '2017-11-24 08:47:36', '1', '11月21日滴滴155元打车券+5滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('81', '3', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2226314_0&url=http%3a%2f%2fgsactivity.diditaxi.com.cn%2fgulfstream%2factivity%2fv2%2fgiftpackage%2findex%3fg_channel%3da570e90fe804e76e9b1dcc7473d7f50b', '2017-11-24 08:50:16', '2017-11-24 08:50:19', '1', '11月23滴滴155元打车通用券+5滴币', '2020-01-01 00:00:00', '0');
INSERT INTO `tbl_travel` VALUES ('82', '1', 'http://www.quanmama.com/t/goto.aspx?union=smzdm&tag=___2222377_0&url=https%3a%2f%2fcredit.jd.com%2fchannel%2fofo.html', '2017-11-24 09:26:36', '2017-11-24 09:26:38', '1', '京东金融送3张ofo月卡', '2020-01-01 00:00:00', '0');
