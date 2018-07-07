# Host: localhost  (Version: 5.5.53)
# Date: 2018-07-07 09:13:32
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "jx_admin"
#

DROP TABLE IF EXISTS `jx_admin`;
CREATE TABLE `jx_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roleid` int(11) DEFAULT '0' COMMENT '1超级管理员，2普通管理员',
  `username` varchar(255) DEFAULT '''''' COMMENT '用户名',
  `password` varchar(255) DEFAULT '' COMMENT '密码',
  `realname` varchar(255) DEFAULT NULL COMMENT '真名',
  `sex` int(11) DEFAULT NULL COMMENT '性别，1男，0女',
  `mobile` varchar(255) DEFAULT NULL COMMENT '手机',
  `email` varchar(255) DEFAULT '' COMMENT '邮箱',
  `note` varchar(255) DEFAULT NULL COMMENT '备注',
  `addtime` int(10) DEFAULT NULL COMMENT '添加时间',
  `status` int(11) DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='管理员';

#
# Data for table "jx_admin"
#

INSERT INTO `jx_admin` VALUES (2,0,'admin','2138cb5b0302e84382dd9b3677576b24',NULL,NULL,NULL,'',NULL,NULL,2),(4,1,'meiting','31eb61f6988af5ea302261983afc0c5e',NULL,NULL,NULL,'','',1496646420,1),(5,1,'guanghui','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,'','',1515476781,1),(6,2,'gangbangwei','672d2a1b442ba5c80b6269bf6f81550a',NULL,NULL,NULL,'','',1521163399,1);

#
# Structure for table "jx_category"
#

DROP TABLE IF EXISTS `jx_category`;
CREATE TABLE `jx_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0' COMMENT '父类id',
  `level` int(10) DEFAULT '1' COMMENT '深度',
  `cname` varchar(255) DEFAULT '' COMMENT '分类名',
  `type` int(11) DEFAULT '1' COMMENT '1列表，2文章',
  `picture` varchar(255) DEFAULT NULL COMMENT '分类缩略图',
  `addtime` int(10) DEFAULT NULL COMMENT '添加时间',
  `status` int(11) DEFAULT '1' COMMENT '状态,0废弃，1产品分类，2文章分类，3图片分类',
  `note` varchar(255) DEFAULT NULL COMMENT '备注',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='分类表';

#
# Data for table "jx_category"
#

INSERT INTO `jx_category` VALUES (1,0,1,'企业概况',1,NULL,NULL,2,NULL,0),(2,0,1,'产品中心',1,NULL,1527738712,1,'',0),(3,0,1,'新闻资讯',1,NULL,NULL,2,NULL,0),(4,0,1,'服务中心',1,NULL,NULL,2,NULL,0),(5,0,1,'合作者关系',1,NULL,NULL,2,NULL,0),(6,0,1,'图片分类',1,NULL,1528199581,3,'',0),(7,6,1,'首页大轮播图',1,NULL,1528199588,3,'',0),(8,6,1,'首页企业概况上轮播图',1,NULL,1528199595,3,'',0),(9,6,1,'首页新闻资讯上图片',1,NULL,1528199604,3,'',0),(10,6,1,'首页服务中心上图片',1,NULL,1528199623,3,'',0),(11,6,1,'企业概况banner图',1,NULL,1528199636,3,'',0),(12,6,1,'产品中心banner图',1,NULL,1528199646,3,'',0),(13,6,1,'新闻资讯banner图',1,NULL,1528199661,3,'',0),(15,6,1,'服务中心banner图',1,NULL,1528199733,3,'',0),(16,6,1,'合作者关系banner图',1,NULL,NULL,3,NULL,0),(17,1,1,'公司简介',2,NULL,1530625297,2,'',0),(18,1,1,'领导介绍',1,NULL,1530625311,2,'',0),(19,1,1,'公司架构',2,NULL,1530625326,2,'',0),(20,1,1,'文化理念',2,NULL,1530625336,2,'',0),(21,1,1,'企业荣誉',2,NULL,1530625351,2,'',0),(22,1,1,'生产基地',2,NULL,1530625371,2,'',0),(23,1,1,'联系我们',2,NULL,1530625382,2,'',0),(24,1,1,'发展规划',1,NULL,1530625392,2,'',0),(25,3,1,'公告公示',1,NULL,1530625439,2,'',0),(26,3,1,'招聘公告',1,NULL,1530625450,2,'',0),(27,3,1,'公司新闻',1,NULL,1530625460,2,'',0),(28,3,1,'市场活动',1,NULL,1530625471,2,'',0),(29,3,1,'媒体聚焦',1,NULL,1530625480,2,'',0),(30,3,1,'行业动态',1,NULL,1530625491,2,'',0),(31,4,1,'打假防伪',2,NULL,1530625647,2,'',0),(32,4,1,'防伪溯源',2,NULL,1530625672,2,'',0),(33,4,1,'在线咨询',1,NULL,1530625679,0,'',0),(34,4,1,'国内经销商',2,NULL,1530625688,2,'',0),(35,4,1,'物流查询',2,NULL,1530625700,2,'',0),(36,4,1,'国际经销商',2,NULL,1530625710,2,'',0),(37,4,1,'在线培训',2,NULL,1530625718,2,'',0),(39,4,1,'开票信息',2,NULL,1530625732,2,'',0),(40,5,1,'公司公告',1,NULL,1530625744,2,'',0),(41,5,1,'财务报告',1,NULL,1530625754,2,'',0),(42,5,1,'投资者关系通讯',2,NULL,1530625763,2,'',0),(43,2,2,'台酿盛宴',1,NULL,1530626817,1,'',0),(44,2,2,'测试分类',1,NULL,1530628288,1,'',0),(45,43,3,'原浆酒',1,NULL,1530887337,1,'',0);

#
# Structure for table "jx_goods"
#

DROP TABLE IF EXISTS `jx_goods`;
CREATE TABLE `jx_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `cid` int(11) DEFAULT '0',
  `summary` text,
  `picture` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL COMMENT '单位：1件，2瓶',
  `content` text,
  `product_date` int(10) DEFAULT NULL COMMENT '生产日期',
  `market_date` int(10) DEFAULT NULL COMMENT '上市日期',
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `addtime` int(10) DEFAULT NULL,
  `provider` varchar(255) DEFAULT '''贵州裕尔盈酒业有限公司''' COMMENT '生产厂家',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1上架，0下架',
  `sort` int(11) NOT NULL DEFAULT '9999' COMMENT '排序，越小越靠前',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "jx_goods"
#

INSERT INTO `jx_goods` VALUES (1,'台酿盛宴 乐享财富 500ml 53℃','',5,'\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n……','/Files/2018-06-21/5b2bb0b162135.jpg',0,'','',0,0,'','',NULL,'\'贵州裕尔盈酒业有限公司\'',1,9999),(2,'台酿盛宴原浆酒 450ml 53℃','',5,'\n\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n……','/Files/2018-06-21/5b2bb4505f450.jpg',0,'','',0,0,'','',NULL,'\'贵州裕尔盈酒业有限公司\'',1,9999),(3,'台酿盛宴原浆酒 500ml 53℃','',5,'\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n……','/Files/2018-06-21/5b2bb48435d09.jpg',0,'','',0,0,'','',NULL,'\'贵州裕尔盈酒业有限公司\'',1,9999);

#
# Structure for table "jx_history"
#

DROP TABLE IF EXISTS `jx_history`;
CREATE TABLE `jx_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tyear` int(4) NOT NULL COMMENT '年',
  `tmonth` int(2) NOT NULL COMMENT '月',
  `tday` int(2) NOT NULL COMMENT '日',
  `content` text NOT NULL COMMENT '事件内容',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

#
# Data for table "jx_history"
#

INSERT INTO `jx_history` VALUES (1,2015,5,19,'根据遵市编通〔2015〕1号文件精神，遵义市软件园区管理委员会（遵义市大学生创新创业园区管理委员会）正式成立。',1),(4,2015,10,8,'遵义大学城众创空间正式开园。',1),(6,2015,11,19,'省委常委、贵阳市委书记陈刚率2015年全省第三次项目建设现场观摩会代表团观摩遵义软件园虾子分园8号楼展厅（观摩了遵义大数据管理中心入驻项目情况、软件园建设情况、澳德机器人软件研发情况等）。',1),(7,2015,12,25,'遵义市大学生创新创业园获得2015年度市级创业孵化基地。（遵市人社通〔2015〕199号）。',1),(8,2015,12,30,'基金申报成功获批。',1),(9,2016,1,1,'启迪投资基金、贵孵一起创投资基金申报成功',1),(10,2016,9,1,'众创小镇开园',1),(11,2016,12,1,'大学城众创空间获2016年度省级创业孵化示范基地称号',1),(12,2017,1,1,'获中国创新创业示范基地称号',1),(15,2017,2,2,'遵义软件园动工建设',1),(16,2016,10,30,'云端号成功试飞',1),(17,2016,10,30,'荣获“遵义市青年创业示范基地”称号',1),(18,2016,7,30,'全省第二次项目建设现场观摩会',1),(19,2016,5,30,'开展红五月·正青春校园活动',1),(20,2016,5,30,'参加2016年数博会',1),(21,2016,4,30,'国家人事部领导莅临园区指导工作',1),(23,2017,8,30,'（HTC）贵州威爱教育科技有限公司项目合作签约',1),(24,2017,8,30,'成功举办遵义市第五届创业大赛复赛',1),(25,2017,7,30,'国务院第四次大督查走进遵义市大学生创新创业园',1),(26,2017,7,30,'遵义大数据学院（千人培养计划第一期）隆重开学',1),(27,2017,5,30,'组织园区企业参加2017年数博会',1),(28,2017,5,30,'园区举办首届遵义市互联网+大学生创新创业大赛',1),(29,2017,3,14,'明确五大行动计划和六大服务体系',1);

#
# Structure for table "jx_image"
#

DROP TABLE IF EXISTS `jx_image`;
CREATE TABLE `jx_image` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT '0' COMMENT '关联文章id',
  `name` varchar(255) DEFAULT NULL COMMENT '图片名称',
  `route` varchar(255) DEFAULT NULL COMMENT '图片保存路径',
  `link` varchar(255) DEFAULT NULL COMMENT '图片链接',
  `addtime` int(10) DEFAULT NULL COMMENT '添加时间',
  `status` int(11) DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='图片表';

#
# Data for table "jx_image"
#

INSERT INTO `jx_image` VALUES (1,7,'首页轮播大图一','/Files/2018-06-11/5b1e7d2d4d184.jpg','',1530624412,1),(2,7,'首页轮播大图二','/Files/2018-06-11/5b1e7d798d12d.jpg','',1530624962,1),(3,7,'首页轮播大图三','/Files/2018-06-11/5b1e7da7256bd.jpg','',1530624969,1),(4,7,'首页轮播大图四','/Files/2018-06-11/5b1e7dd9c472d.jpg','',1530624977,1),(5,7,'首页轮播大图五','/Files/2018-06-11/5b1e7e08bdbcb.jpg','',1530624984,1),(6,12,'企业概况banner','/Files/2018-06-07/5b18bb8dccadb.jpg','',1530624995,1),(7,13,'产品中心banner','/Files/2018-06-07/5b18bb9c8fcf5.jpg','',1530625006,1),(8,13,'新闻资讯banner','/Files/2018-06-07/5b18bba8dab80.jpg','',1530627771,1),(9,15,'服务中心banner','/Files/2018-06-07/5b18bbbb0bdfa.jpg','',1530625029,1),(10,16,'合作者关系banner','/Files/2018-06-07/5b18bc5a190dd.jpg','',1530625042,1),(11,8,'首页左侧轮播小图一','/Files/2018-06-07/5b18bbdc7c522.jpg','http://www.zunyisp.org/Home/News/detail/id/367.html',1530625056,1),(12,8,'首页左侧轮播小图二','/Files/2018-06-07/5b18bbe618701.jpg','',1530625081,1),(13,8,'首页左侧轮播小图三','/Files/2018-06-07/5b18bbf2d07ac.gif','',1530625092,1),(14,8,'悬浮广告','/Files/2018-03-16/5aab30a46f563.jpg','http://www.zunyisp.com.cn/Home/News/detail/id/333.html',1521168548,0),(15,9,'首页右侧轮播小图一','/Files/2018-07-03/5b3b86dc9ef3c.jpg','',1530627886,1),(18,10,'1231','/Files/2018-07-03/5b3b874848646.jpg','',1530627912,1);

#
# Structure for table "jx_link"
#

DROP TABLE IF EXISTS `jx_link`;
CREATE TABLE `jx_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(255) NOT NULL DEFAULT '' COMMENT '网站名',
  `link` varchar(255) NOT NULL DEFAULT '' COMMENT '网址',
  `addtime` int(10) DEFAULT NULL COMMENT '添加时间',
  `status` int(11) DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

#
# Data for table "jx_link"
#

INSERT INTO `jx_link` VALUES (1,'中央人民政府','http://www.gov.cn',1486374715,1),(10,'贵州省人民政府','http://www.gzgov.gov.cn',1486374862,1),(11,'贵州省政府招商引资信息网','http://www.investgz.gov.cn',1486374874,1),(12,'遵义市人民政府','http://www.zunyi.gov.cn',1486374909,1),(21,'遵义市新蒲新区','http://www.gzzyxpxq.gov.cn/newController.do?method=showIndexList',1486375030,1);

#
# Structure for table "jx_log"
#

DROP TABLE IF EXISTS `jx_log`;
CREATE TABLE `jx_log` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT '0' COMMENT '管理员',
  `uip` varchar(255) DEFAULT NULL COMMENT '用户IP地址',
  `action` varchar(255) DEFAULT NULL COMMENT '操作行为',
  `status` int(11) DEFAULT '1' COMMENT '操作状态',
  `note` varchar(255) DEFAULT NULL COMMENT '备注',
  `dotime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8 COMMENT='操作日志';

#
# Data for table "jx_log"
#

INSERT INTO `jx_log` VALUES (1,'admin','119.0.78.242','登陆',1,'正常登陆','2018-06-07 12:56:16'),(2,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 12:57:37'),(3,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 12:57:46'),(4,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 12:57:57'),(5,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 12:58:09'),(6,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 12:58:18'),(7,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 12:58:54'),(8,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 12:59:08'),(9,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 12:59:21'),(10,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 12:59:39'),(11,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 13:00:12'),(12,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 13:00:22'),(13,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 13:00:35'),(14,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 13:01:43'),(15,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 13:02:08'),(16,'admin','119.0.78.242','添加图片',1,'成功新增图片','2018-06-07 13:02:18'),(17,'admin','119.0.78.242','文章删除',1,'删除文章:七','2018-06-07 13:07:08'),(18,'admin','119.0.78.242','文章删除',1,'删除文章:六','2018-06-07 13:07:21'),(19,'admin','119.0.78.242','文章删除',1,'删除文章:五','2018-06-07 13:07:33'),(20,'admin','119.0.78.242','文章删除',1,'删除文章:二','2018-06-07 13:07:37'),(21,'admin','119.0.78.242','文章删除',1,'删除文章:一','2018-06-07 13:07:41'),(22,'admin','119.0.78.242','文章删除',1,'删除文章:三','2018-06-07 13:07:45'),(23,'admin','119.0.78.242','文章删除',1,'删除文章:四','2018-06-07 13:07:48'),(24,'admin','119.0.78.242','文章删除',1,'删除文章:遵义市软件园欢迎您','2018-06-07 13:07:59'),(25,'admin','119.0.78.242','文章删除',1,'删除文章:遵义市软件园（大学生创业园）管委员会 积极开展学习活动 努力提高思想认识','2018-06-07 13:08:02'),(26,'admin','114.135.6.25','登陆',1,'正常登陆','2018-06-10 12:04:23'),(27,'admin','119.0.114.222','添加图片',1,'成功新增图片','2018-06-11 21:46:21'),(28,'admin','119.0.114.222','添加图片',1,'成功新增图片','2018-06-11 21:47:38'),(29,'admin','119.0.114.222','添加图片',1,'成功新增图片','2018-06-11 21:48:23'),(30,'admin','119.0.114.222','添加图片',1,'成功新增图片','2018-06-11 21:49:14'),(31,'admin','119.0.114.222','添加图片',1,'成功新增图片','2018-06-11 21:50:01'),(32,'admin','222.86.45.108','登陆',1,'正常登陆','2018-06-21 18:55:43'),(33,'admin','127.0.0.1','添加产品',1,'添加产品：','2018-06-21 22:04:55'),(34,'admin','127.0.0.1','添加产品',1,'添加产品：','2018-06-21 22:05:37'),(35,'admin','127.0.0.1','添加产品',1,'添加产品：','2018-06-21 22:21:04'),(36,'admin','127.0.0.1','添加产品',1,'添加产品：','2018-06-21 22:21:56'),(37,'admin','127.0.0.1','登陆',1,'正常登陆','2018-06-27 20:27:59'),(38,'admin','127.0.0.1','添加文章',1,'添加文章：关于我们','2018-06-27 21:02:09'),(39,'admin','127.0.0.1','编辑文章',1,'编辑文章：关于我们','2018-06-27 21:15:58'),(40,'admin','127.0.0.1','编辑文章',1,'编辑文章：关于我们','2018-06-27 21:18:44'),(41,'admin','127.0.0.1','编辑文章',1,'编辑文章：关于我们','2018-06-27 21:22:53'),(42,'admin','127.0.0.1','添加文章',1,'添加文章：服务中心','2018-06-27 21:28:54'),(43,'admin','127.0.0.1','编辑文章',1,'编辑文章：服务中心','2018-06-27 21:30:27'),(44,'admin','127.0.0.1','添加文章',1,'添加文章：商务合作','2018-06-27 21:33:00'),(45,'admin','127.0.0.1','编辑文章',1,'编辑文章：商务合作','2018-06-27 21:35:40'),(46,'admin','127.0.0.1','添加文章',1,'添加文章：在线培训','2018-06-27 21:40:32'),(47,'admin','127.0.0.1','添加文章',1,'添加文章：联系方式','2018-06-27 21:48:31'),(48,'admin','127.0.0.1','登陆',1,'正常登陆','2018-06-28 18:13:17'),(49,'admin','127.0.0.1','登陆',1,'正常登陆','2018-07-03 20:50:11'),(50,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:26:52'),(51,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:36:02'),(52,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:36:10'),(53,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:36:17'),(54,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:36:24'),(55,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:36:35'),(56,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:36:46'),(57,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:36:58'),(58,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:37:09'),(59,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:37:22'),(60,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:37:36'),(61,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:38:01'),(62,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:38:12'),(63,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:38:22'),(64,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 21:38:53'),(65,'admin','127.0.0.1','添加分类',1,'添加分类 [公司简介] 成功','2018-07-03 21:41:37'),(66,'admin','127.0.0.1','添加分类',1,'添加分类 [领导介绍] 成功','2018-07-03 21:41:51'),(67,'admin','127.0.0.1','添加分类',1,'添加分类 [公司架构] 成功','2018-07-03 21:42:06'),(68,'admin','127.0.0.1','添加分类',1,'添加分类 [文化理念] 成功','2018-07-03 21:42:16'),(69,'admin','127.0.0.1','添加分类',1,'添加分类 [企业荣誉] 成功','2018-07-03 21:42:31'),(70,'admin','127.0.0.1','添加分类',1,'添加分类 [生产基地] 成功','2018-07-03 21:42:52'),(71,'admin','127.0.0.1','添加分类',1,'添加分类 [联系我们] 成功','2018-07-03 21:43:02'),(72,'admin','127.0.0.1','添加分类',1,'添加分类 [发展规划] 成功','2018-07-03 21:43:12'),(73,'admin','127.0.0.1','添加分类',1,'添加分类 [公告公示] 成功','2018-07-03 21:43:59'),(74,'admin','127.0.0.1','添加分类',1,'添加分类 [招聘公告] 成功','2018-07-03 21:44:10'),(75,'admin','127.0.0.1','添加分类',1,'添加分类 [公司新闻] 成功','2018-07-03 21:44:20'),(76,'admin','127.0.0.1','添加分类',1,'添加分类 [市场活动] 成功','2018-07-03 21:44:31'),(77,'admin','127.0.0.1','添加分类',1,'添加分类 [媒体聚焦] 成功','2018-07-03 21:44:40'),(78,'admin','127.0.0.1','添加分类',1,'添加分类 [行业动态] 成功','2018-07-03 21:44:51'),(79,'admin','127.0.0.1','添加分类',1,'添加分类 [打假防伪] 成功','2018-07-03 21:47:28'),(80,'admin','127.0.0.1','添加分类',1,'添加分类 [防伪溯源] 成功','2018-07-03 21:47:52'),(81,'admin','127.0.0.1','添加分类',1,'添加分类 [在线咨询] 成功','2018-07-03 21:47:59'),(82,'admin','127.0.0.1','添加分类',1,'添加分类 [国内经销商] 成功','2018-07-03 21:48:09'),(83,'admin','127.0.0.1','添加分类',1,'添加分类 [物流查询] 成功','2018-07-03 21:48:20'),(84,'admin','127.0.0.1','添加分类',1,'添加分类 [国际经销商] 成功','2018-07-03 21:48:30'),(85,'admin','127.0.0.1','添加分类',1,'添加分类 [在线培训] 成功','2018-07-03 21:48:38'),(86,'admin','127.0.0.1','添加分类',1,'添加分类 [业务服务] 成功','2018-07-03 21:48:44'),(87,'admin','127.0.0.1','添加分类',1,'添加分类 [开票信息] 成功','2018-07-03 21:48:52'),(88,'admin','127.0.0.1','添加分类',1,'添加分类 [公司公告] 成功','2018-07-03 21:49:04'),(89,'admin','127.0.0.1','添加分类',1,'添加分类 [财务报告] 成功','2018-07-03 21:49:14'),(90,'admin','127.0.0.1','添加分类',1,'添加分类 [投资者关系通讯] 成功','2018-07-03 21:49:23'),(91,'admin','127.0.0.1','添加分类',1,'添加分类 [台酿盛宴] 成功','2018-07-03 22:06:57'),(92,'admin','127.0.0.1','登陆',1,'正常登陆','2018-07-03 22:11:20'),(93,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 22:22:52'),(94,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 22:23:24'),(95,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 22:24:26'),(96,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 22:24:46'),(97,'admin','127.0.0.1','添加图片',1,'成功新增图片','2018-07-03 22:25:12'),(98,'admin','127.0.0.1','添加分类',1,'添加分类 [测试分类] 成功','2018-07-03 22:31:29'),(99,'admin','127.0.0.1','添加文章',1,'添加文章：公司介绍','2018-07-03 23:10:47'),(100,'admin','127.0.0.1','登陆',1,'正常登陆','2018-07-04 10:36:29'),(101,'admin','127.0.0.1','添加文章',1,'添加文章：关于公司','2018-07-04 10:41:20'),(102,'admin','127.0.0.1','添加文章',1,'添加文章：测试','2018-07-04 10:50:15'),(103,'admin','127.0.0.1','添加文章',1,'添加文章：测试','2018-07-04 10:50:34'),(104,'admin','127.0.0.1','添加文章',1,'添加文章：测试','2018-07-04 10:50:53'),(105,'admin','127.0.0.1','登陆',1,'正常登陆','2018-07-06 20:02:07'),(106,'admin','127.0.0.1','添加文章',1,'添加文章：打假防伪','2018-07-06 20:28:28'),(107,'admin','127.0.0.1','添加文章',1,'添加文章：12313','2018-07-06 21:59:18'),(108,'admin','127.0.0.1','添加分类',1,'添加分类 [原浆酒] 成功','2018-07-06 22:28:57');

#
# Structure for table "jx_message"
#

DROP TABLE IF EXISTS `jx_message`;
CREATE TABLE `jx_message` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '' COMMENT '标题',
  `ftitle` varchar(255) DEFAULT NULL COMMENT '副标题',
  `uid` int(11) DEFAULT '0' COMMENT '回复者id',
  `type` int(11) DEFAULT '1' COMMENT '分类，1问，2答',
  `rid` int(11) DEFAULT '0' COMMENT '关联id',
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键字',
  `description` varchar(255) DEFAULT NULL COMMENT '简介',
  `content` text COMMENT '内容',
  `author` varchar(255) DEFAULT NULL COMMENT '作者',
  `image` varchar(255) DEFAULT NULL COMMENT '图片',
  `link` varchar(255) DEFAULT NULL COMMENT '链接',
  `status` int(11) DEFAULT '1' COMMENT '状态，1未查看，2已回复，0已删除',
  `views` int(11) DEFAULT '1' COMMENT '浏览次数',
  `addtime` int(10) DEFAULT NULL COMMENT '添加时间',
  `savetime` int(10) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COMMENT='系统文章表';

#
# Data for table "jx_message"
#

INSERT INTO `jx_message` VALUES (1,'园区介绍',NULL,0,6,0,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,NULL),(2,'发展历程',NULL,0,7,0,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,NULL),(3,'联系我们',NULL,0,10,0,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,NULL),(4,'总体介绍',NULL,0,44,0,NULL,NULL,'至2016年底，园区共投入建设资金8亿元，建成研发楼12万㎡，在建36万㎡。引进了惠普、中兴、光启、禾苗、财富之舟、弘年、沃特沃德、晶源动力、贵州省智能终端检测中心等软件及大数据企业74家，从业人员2000人。成功设立2支创业投资基金，基金规模1.9亿元。软件园采取“管委会+公司”的运作模式，先后组建了园区开发公司、双创服务公司、投资管理公司、基金管理公司、大数据运用示范公司、信息技术服务公司、人力资源服务公司和生活配套服务公司等，着力打造遵义软件园投资集团，全力为不同发展阶段的入驻企业提供IT技术、人力资源、企业孵化、投资融资、运营管理、生活配套等服务。',NULL,NULL,NULL,2,1,NULL,NULL),(5,'主导产业',NULL,0,44,0,NULL,NULL,'遵义软件园积极打造软件及大数据产业集聚区，紧紧围绕新蒲经开区智能终端制造产业和遵义大学城人才资源优势，打造产业链成长引擎，构建产业链重要支撑体系。经过多年布局优化，园区主导产业涵盖智能终端软件研发、服务外包、呼叫中心、移动互联、电子商务、文化创意和行业应用等多个领域，示范和引领作用日渐显著。园区积极引进业界领先的战略客户，不断加大战略选商力度，不断优化调整产业结构。 ',NULL,NULL,NULL,2,1,NULL,NULL),(6,'重点发展',NULL,0,44,0,NULL,NULL,' 园区紧紧抓住贵州省发展大数据战略机遇，以打造遵义市开放创新新引擎为战略目标，依托新蒲经开区智能终端产业基础和遵义大学城人才资源优势，按照“园区协同、双创推动、龙头带动、人才促动、基金撬动”的发展思路，全力推进遵义软件和双创产业发展。',NULL,NULL,NULL,0,1,NULL,NULL),(7,'服务外包',NULL,0,5,0,NULL,NULL,'杰出的软件项目团队和国内顶尖的IT行业精英，致力于为全球范围的客户提供国际标准化的优质服务。从系统解决方案到软件服务，我们始终遵循对客户的承诺并一直保持着高质量的美誉；我们所提供的软件标准和项目交付恪守世界级质量规范，这使得我们的客户能够在自身的业务领域延展服务的价值。',NULL,NULL,NULL,2,1,NULL,NULL),(8,'软件开发',NULL,0,5,0,NULL,NULL,'产业发展迅猛，其中手机游戏、位置服务、操作系统、移动广告等领域的企业发展势头良好，乐蛙、魔迅等多家企业获得业界投资。',NULL,NULL,NULL,2,1,NULL,NULL),(9,'软件测试',NULL,0,5,0,NULL,NULL,'产业规模继续保持领先，园区不仅拥有高通、德州仪器、美满电子等国际领先企业，更有众多像迦美信芯、海斐圣等拥有自主核心技术的创业型企业。',NULL,NULL,NULL,2,1,NULL,NULL),(10,'呼叫中心',NULL,0,5,0,NULL,NULL,'创新模式不断涌现，包括东方电子支付、二三四五、洋码头等企业在电子支付、网址导航、海外代购和物流优化等模式下持续创新，在工农业、商贸流通、交通运输和旅游等多领域的应用不断拓展。',NULL,NULL,NULL,2,1,NULL,NULL),(11,'大数据',NULL,0,5,0,NULL,NULL,'产业自主创新能力稳步攀升，已经形成了以沪江网、河马动画等企业为核心代表的文化创意产业集群。',NULL,NULL,NULL,2,1,NULL,NULL),(12,'创新创业产业园',NULL,0,6,0,NULL,NULL,'园区拥有大批后端从事应用服务开发的企业，已经具备了有利的区位竞争优势。特别是由园区企业智位机器人研发的DreamMaker桌面型3D打印机已经成功面市，此款产品是市面上同类产品中打印尺寸、速度、打印精度最高的，而售价只有国外同类产品的三分之一。',NULL,NULL,NULL,2,1,NULL,NULL),(13,'互联网产业园',NULL,0,6,0,NULL,NULL,'多年来，花旗金融、胜科金仕达等国际一流金融信息服务厂商在园区内不断发展壮大，为园区金融信息服务领域的发展打下了深厚的基础。而从事金融交易工具及量化模型开发的无花果信息，从事金融软件应用系统的天用唯勤和棠棣信息等优秀企业，也都紧紧围绕金融和软件的核心技术默默耕耘。特别是上海拍拍贷金融信息服务有限公司，已发展成为国内第一家P2P网络信用借贷平台，国内最大的P2P人群聚集地，同时也是第一家由工商部门特批并得到政府认可的互联网金融平台。',NULL,NULL,NULL,2,1,NULL,NULL),(14,'软件创新基地',NULL,0,6,0,NULL,NULL,'自开园以来，友邦保险、花旗银行和高通公司等知名企业就把数据中心建在园内，近年来，园区还涌现出诸如从事数据挖掘业务的锦融决策，从事云平台开发建设的汇智软件，从事云存储业务的七牛云存储，从事自主创新数据库系统的达梦数据库，从事数据管理和数据驱动业务的信核数据，从事数据库精准营销的运筹信息，从事商业智能应用系统开发的伟凡数据等一大批优秀企业，并集聚了基础设施、公共研发平台等综合优势，这些都将成为推动园区大数据产业发展的坚强动力。',NULL,NULL,NULL,2,1,NULL,NULL),(15,'大数据中心',NULL,0,6,0,NULL,NULL,'自开园以来，友邦保险、花旗银行和高通公司等知名企业就把数据中心建在园内，近年来，园区还涌现出诸如从事数据挖掘业务的锦融决策，从事云平台开发建设的汇智软件，从事云存储业务的七牛云存储，从事自主创新数据库系统的达梦数据库，从事数据管理和数据驱动业务的信核数据，从事数据库精准营销的运筹信息，从事商业智能应用系统开发的伟凡数据等一大批优秀企业，并集聚了基础设施、公共研发平台等综合优势，这些都将成为推动园区大数据产业发展的坚强动力。',NULL,NULL,NULL,2,1,NULL,NULL),(16,'大数据应用产业链',NULL,0,6,0,NULL,NULL,'自开园以来，友邦保险、花旗银行和高通公司等知名企业就把数据中心建在园内，近年来，园区还涌现出诸如从事数据挖掘业务的锦融决策，从事云平台开发建设的汇智软件，从事云存储业务的七牛云存储，从事自主创新数据库系统的达梦数据库，从事数据管理和数据驱动业务的信核数据，从事数据库精准营销的运筹信息，从事商业智能应用系统开发的伟凡数据等一大批优秀企业，并集聚了基础设施、公共研发平台等综合优势，这些都将成为推动园区大数据产业发展的坚强动力。',NULL,NULL,NULL,2,1,NULL,NULL),(29,'通讯工程',NULL,0,6,0,NULL,NULL,'自开园以来，友邦保险、花旗银行和高通公司等知名企业就把数据中心建在园内，近年来，园区还涌现出诸如从事数据挖掘业务的锦融决策，从事云平台开发建设的汇智软件，从事云存储业务的七牛云存储，从事自主创新数据库系统的达梦数据库，从事数据管理和数据驱动业务的信核数据，从事数据库精准营销的运筹信息，从事商业智能应用系统开发的伟凡数据等一大批优秀企业，并集聚了基础设施、公共研发平台等综合优势，这些都将成为推动园区大数据产业发展的坚强动力。',NULL,NULL,NULL,2,1,NULL,NULL),(30,'人才培养基地',NULL,0,6,0,NULL,NULL,'整合行业资源，协助企业建立自己的招聘管理平台，一站式发布，同步推送各大招聘网站，并定期组织企业校园招聘专场、人力资源沙龙和政策宣讲专场，并在激烈的市场经济竞争中，针对高端人才开办高级人才猎头及相关咨询服务，包括高端人才信息的发布与收集、协调与沟通。',NULL,NULL,NULL,2,1,NULL,NULL);

#
# Structure for table "jx_news"
#

DROP TABLE IF EXISTS `jx_news`;
CREATE TABLE `jx_news` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `cid` smallint(3) DEFAULT NULL COMMENT '所在分类',
  `title` varchar(200) DEFAULT NULL COMMENT '新闻标题',
  `ftitle` varchar(200) DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `titlepic` varchar(1000) DEFAULT NULL,
  `phone_pic` varchar(200) DEFAULT NULL,
  `keywords` varchar(50) DEFAULT NULL COMMENT '文章关键字',
  `description` mediumtext COMMENT '文章描述',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `summary` varchar(255) DEFAULT NULL COMMENT '文章摘要',
  `news_time` varchar(255) DEFAULT NULL COMMENT '新闻发布时间',
  `content` text,
  `lang` varchar(10) NOT NULL DEFAULT 'zh-cn',
  `aid` smallint(3) DEFAULT NULL COMMENT '发布者UID',
  `click` int(11) NOT NULL DEFAULT '0',
  `is_recommend` int(1) NOT NULL DEFAULT '0' COMMENT '首页推荐，0不推荐，1推荐',
  `is_list` int(11) DEFAULT '0' COMMENT '列表推荐，0不推荐，1推荐',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `style` varchar(20) DEFAULT '' COMMENT '风格',
  `type` int(11) DEFAULT NULL COMMENT '政策分类，1国家，2贵州省，3遵义市，4软件园',
  `is_hot` int(1) NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `size` varchar(100) DEFAULT NULL,
  `suffer` varchar(10) DEFAULT NULL COMMENT '经验',
  `production` varchar(10) DEFAULT NULL COMMENT '设计作品',
  `honor` varchar(255) DEFAULT NULL COMMENT '荣誉',
  `city` varchar(255) DEFAULT NULL COMMENT '所在城市',
  `academy` varchar(255) DEFAULT NULL COMMENT '毕业院校',
  `pic_title` varchar(200) DEFAULT NULL,
  `dosage_form` varchar(200) DEFAULT NULL COMMENT '剂型',
  `etalon` varchar(200) DEFAULT NULL COMMENT '规格',
  `approval_number` varchar(200) DEFAULT NULL COMMENT '批准文号',
  `producer` varchar(255) DEFAULT NULL COMMENT '生产商',
  `author` varchar(255) DEFAULT 'admin' COMMENT '原创作者',
  `source` varchar(255) DEFAULT NULL COMMENT '来源',
  `published` int(10) DEFAULT '0',
  `update_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='新闻表';

#
# Data for table "jx_news"
#

INSERT INTO `jx_news` VALUES (1,18,'公司介绍','',NULL,NULL,NULL,'','',1,'贵州裕尔盈酒业有限公司成立于2016年9月，现位于贵州省遵义市汇川区昆明路唯一国际金创大厦，目前主要经营国酒之都酱香型白酒。是在响应黔货出山的号召下，秉承互联网思维，顺应贵州大数据发展之势，集现代化和传统销售网络于一体的新兴企业，旨在从事酒都茅台酱香型白酒的营销推广服务。公司立足于专业的运营管理、人才优势、整合产业链资源，致力于将“黔北酒乡网”打造成中国酱香白酒网络直营第一平台。','2018-06-27','<p style=\"text-align: left;\" dir=\"ltr\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">公司简介：</span></strong></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: 宋体, SimSun; font-size: 21px;\">&nbsp;&nbsp; &nbsp;</span><span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\"><span style=\"font-size: 16px;\">贵州裕尔盈酒业有限公司成立于</span>2016<span style=\"font-size: 16px;\">年</span>9<span style=\"font-size: 16px;\">月，现位于贵州省遵义市汇川区昆明路唯一国际金创大厦，目前主要经营国酒之都酱香型白酒。是在响应黔货出山的号召下，秉承互联网思维，顺应贵州大数据发展之势，集现代化和传统销售网络于一体的新兴企业，旨在从事酒都茅台酱香型白酒的营销推广服务。公司立足于专业的运营管理、人才优势、整合产业链资源，致力于将“黔北酒乡网”打造成中国酱香白酒网络直营第一平台。公司将以推动产品创新、生产技术创新和经营模式创新为基石，激活传统的酱香白酒流通渠道；本着“和谐共赢、服务大众”的经营理念，直面市场经济大潮和电子商商务大趋势，精心缔造酒文化品牌；以质量、规模、效益为中心，完善市场运作机制，联合酒企、物流仓储，最大限度让利终端消费者，开拓酱香白酒线上线下消费用酒新模式，将台酿盛宴”推进中国千家万户，使之立足黔北，布局全国，走向世界。</span></span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">&nbsp;</span></p><p dir=\"ltr\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">企业文化：</span></span></strong></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">企业愿景：让台酿盛宴走进千家万户，黔北酒乡网打造为酱香白酒第一平台；</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">企业使命：给老百姓一瓶好酒；</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">经营理念：诚信为本、优质健康、精益求精、服务大众、合作共赢；</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">核心价值：裕尔不凡，共盈金樽；</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">服务宗旨；微笑挂在脸上，服务记在心里，为了客户的一切，为了一切的客户；</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">员工教育：树雄心干大事，忠心报效祖国，孝心回敬父母；</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">竞争理念：超越对手并非击倒对手，关注细节、做得更好。</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">&nbsp;</span></span></p><p dir=\"ltr\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">生产基地：</span></strong></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">&nbsp;&nbsp;&nbsp; 台酿盛宴酒业公司的主要生产基地，坐落于驰名中外、享有“天下第一酒镇”、“国酒之都”的仁怀市茅台镇。是台酿盛宴系列酒研发、生产、贮藏、灌装基地。聚宝酒业前身正方酒业，1987年建厂，不断兼并重组壮大。酒厂占地200多亩，生产工人300多人，固定资产近6亿元，流动资产超5000万。现有传统发酵池300多个，年生产优质酱香酒5000多吨，拥有三名高级白酒酿造大师和多名白酒技术人才，拥有一流的产品过滤和检验检测设备，拥有多条现代化生产灌装包装线。是茅台镇极具规模的白酒企业。</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">&nbsp;&nbsp;&nbsp; 53° 台酿盛宴酒拓展了低度酒向高度酒的发展空间 ; 品鉴、贵州手礼、经典、陈酿、乐享财富酒满足了中低档消费者的需求; 10 年、 15 年、20年、 30 年陈年台酿盛宴酒填补了我国极品酒、年份酒、陈年老窖的空白;在国内独创年代梯级式的产品开发模式。形成了高中低档、极品多个系列多个规格品种，全方位跻身市场，从而占据了白酒市场制高点，称雄于中国极品酒市场。</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">&nbsp;</span></span></p><p dir=\"ltr\"></p><p style=\"white-space: normal;\" dir=\"ltr\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">发展规划：</span></strong></p><p style=\"white-space: normal;\" dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">2016年：免费品鉴聚人</span></span></p><p style=\"white-space: normal;\" dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">2017年：收获口碑站稳市场</span></span></p><p style=\"white-space: normal;\" dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">2018年：新营销模式全国启动</span></span></p><p style=\"white-space: normal;\" dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">2019年：成立股份制有限公司，启动集团化运营</span></span></p><p style=\"white-space: normal;\" dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">2021年：启动上市规划</span></span></p><p dir=\"ltr\"><br/></p><p dir=\"ltr\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">联系我们：</span></strong></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">公司地址：中国贵州省遵义市汇川区昆明路唯一国际金创大厦9楼0927</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">公司名称：贵州裕尔盈酒业有限公司</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">电话：0851-28925666&nbsp;&nbsp;&nbsp; 0851-28636777</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">邮编：563000</span></span></p><p dir=\"ltr\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">&nbsp;</span></span></p><p dir=\"ltr\"><br/></p><p dir=\"ltr\"><br/></p>','zh-cn',2,0,0,0,0,'',NULL,0,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',1530105773,1530105773),(2,18,'服务中心','',NULL,NULL,NULL,'','',1,'打假维权：台酿盛宴打假维权办公室\r\n0851-28925666\r\n0851-28636777\r\n','2018-06-27','<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><strong><span style=\"font-family: arial, helvetica, sans-serif;\">打假维权：</span></strong><span style=\"font-family: arial, helvetica, sans-serif;\">台酿盛宴打假维权办公室</span></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">0851-28925666</span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">0851-28636777</span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><br/></span></p><hr/><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><strong><span style=\"font-size: 21px; font-family: 宋体;\"></span></strong></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><strong><span style=\"font-size: 21px; font-family: 宋体;\">在线咨询：</span></strong></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><span style=\"font-size: 21px; font-family: 宋体;\">问：我在百度、天猫、淘宝查到价格只要几十块一瓶，是真的吗？</span></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">答：您好，不是真的，请您关注我公司旗下“黔北酒乡网”公众号，再购买。</span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">问：几款酒的价格是多少？</span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><span style=\"font-size: 21px; font-family: 宋体;\">答：您好，贵州手礼</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 21px;\">288</span><span style=\"font-size: 21px; font-family: 宋体;\">元</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 21px;\">/</span><span style=\"font-size: 21px; font-family: 宋体;\">瓶，乐享财富</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 21px;\">399</span><span style=\"font-size: 21px; font-family: 宋体;\">元</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 21px;\">/</span><span style=\"font-size: 21px; font-family: 宋体;\">瓶，十年经典</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 21px;\">599</span><span style=\"font-size: 21px; font-family: 宋体;\">元</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 21px;\">/</span><span style=\"font-size: 21px; font-family: 宋体;\">瓶，全国统一零售价。</span></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">问：有些说是你们的实体工作室？</span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><span style=\"font-size: 21px; font-family: 宋体;\">答：请您咨询工作室室长姓名电话，拨打</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 21px;\">0851-28925666</span><span style=\"font-size: 21px; font-family: 宋体;\">或</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 21px;\">0851-28636777</span><span style=\"font-size: 21px; font-family: 宋体;\">查询。</span></span></p><p><br/></p>','zh-cn',2,0,0,0,0,'',NULL,0,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',1530106227,1530106227),(3,15,'商务合作','',NULL,NULL,NULL,'','',1,'分布情况\r\n\r\n','2018-06-27','<p>分布情况</p><p><img src=\"/Uploads/image/20180627/1530106332105535.png\" title=\"1530106332105535.png\" alt=\"1.png\" width=\"798\" height=\"422\" style=\"width: 798px; height: 422px;\"/></p>','zh-cn',2,0,0,0,0,'',NULL,0,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',1530106539,1530106539),(4,15,'在线培训','',NULL,NULL,NULL,'','',1,'独有的自然生态环境使”台酿盛宴“独具唯一性','2018-06-27','<p></p><p style=\"text-indent:28px\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">&nbsp;</span><img src=\"/Uploads/image/20180627/1530106747134254.png\" title=\"1530106747134254.png\" alt=\"2.png\"/></p><p style=\"text-align:center;text-indent:28px\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><strong><span style=\"font-size: 18px; font-family: 宋体;\">独有的自然生态环境使”台酿盛宴“独具唯一性</span></strong></span></p><p style=\"text-indent:28px\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">香醉神州大地，当属黔酿美酒。贵州这块生态圈中不可复制的地理条件，让贵州高原演变成酱香白酒的发源地和主产区，茅台镇的生态环境更是酿造出酱香优质白酒不可替代的保证。</span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size: 18px; font-family: 宋体;\">年平均温度在</span>17.3<span style=\"font-size: 18px; font-family: 宋体;\">℃，年日照时数为</span>1400<span style=\"font-size: 18px; font-family: 宋体;\">小时，全年</span>310<span style=\"font-size: 18px; font-family: 宋体;\">天无霜期，年降水量</span>800-900<span style=\"font-size: 18px; font-family: 宋体;\">毫米，平均海波</span>880<span style=\"font-size: 18px; font-family: 宋体;\">米，年平均相对湿度</span>81-85%<span style=\"font-size: 18px; font-family: 宋体;\">，常年温差和昼夜温差小，湿度大，土壤丰富，有多种优质土壤，非常适合种植、小麦、高粱等作物，这些正是酿造“台酿盛宴“配方中的主要原料。利于酿造台酿盛宴酒微生物的栖息、繁殖。茅台镇当地的岩层为侏罗白垩系的紫色砂页岩、砾岩，土壤中的酸碱度适中，渗水性好，地下水通过后，溶解了多种对人体有益的微量元素。</span></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size: 18px; font-family: 宋体;\">真正的酱香白酒只有贵州出品，因为真正的正宗酱香型白酒具有极强的产地依赖性。</span></span></p><p><img src=\"/Uploads/image/20180627/1530106758627446.png\" title=\"1530106758627446.png\" alt=\"3.png\"/></p><p style=\"text-align:center\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><strong><span style=\"font-size: 18px; font-family: 宋体;\">独有的自然生态赤水河</span></strong></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">&nbsp;&nbsp;&nbsp; <span style=\"font-size: 18px; font-family: 宋体;\">赤水河，即赤水，为中国长江上游支流，因河流含沙量高、水色赤黄而得名。赤水河是国内唯一一条没有被开发的长江支流。河水清澈透底，两岸陡峭、多险滩急流。</span></span></p><p style=\"text-align:left\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">&nbsp;&nbsp;&nbsp; <span style=\"font-size: 18px; font-family: 宋体;\">“台酿盛宴”酒的酿造取源赤水河。水质优良无色透明，微甜爽口，酸碱适度，且富含有多种微量元素，钙镁离子含量硬度均符合优质饮用水的标准，赤水河水有一个奇怪的现象，每年的端午节至重阳节，因雨季来临而河水呈赤红色；而重阳节至竖年端午节之间，河水则清澈透明。茅台镇的酱香型白酒必须完全按照这一节律的变化进行酿制。</span></span><img src=\"/Uploads/image/20180627/1530106766107695.png\" title=\"1530106766107695.png\" alt=\"4.png\"/></p><p style=\"text-align:center\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><strong><span style=\"font-size: 18px; font-family: 宋体;\">独有的微生物群繁衍从古至今从未间断</span></strong></span></p><p style=\"text-indent:28px\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><span style=\"font-size: 18px; font-family: 宋体;\">茅台镇的特殊气候和地质结构，加上长期大规模的酿酒酒厂，使得酒厂周围的空气中漂游无数的微生物群体，而其中已知的约有</span>100<span style=\"font-size: 18px; font-family: 宋体;\">多种微生物直接影响“台酿盛宴”酒的酒质。</span></span></p><p style=\"text-indent:28px\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><span style=\"font-size: 18px; font-family: 宋体;\">台酿盛宴的工艺技术是独有的，采用独有的制曲方式作为空气和泥土中的微生物结合的载体，非常适合酿造台酿盛宴的</span>300<span style=\"font-size: 18px; font-family: 宋体;\">多种微生物的均匀生长和繁殖，而其他白酒只利用了空气中的微生物，所以酒味不全面。酱香白酒酿造、发酵的不同温度，形成不同的菌系、酶系，有利于酯化、生香和香味物质的累积，构成产品的独特风格。</span></span></p><p style=\"text-indent:28px\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">“台酿盛宴”系列的美酒，香了一条大江，香得山高水远，香得地久天长。</span></p><p style=\"text-align:center\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><strong><img src=\"/Uploads/image/20180627/1530106772314433.png\" title=\"1530106772314433.png\" alt=\"5.png\"/></strong></span></p><p style=\"text-align:center\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><strong><span style=\"font-size: 18px; font-family: 宋体;\">独有的多种优质粮食、完美比例配方酿造出品质完全的世界名酒“台酿盛宴”</span></strong></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">&nbsp;&nbsp;&nbsp; <span style=\"font-size: 18px; font-family: 宋体;\">一定要用仁怀本地产糯高粱，出自茅台镇的红缨子高粱，颗粒坚实饱满，均匀粒小皮厚，其截面成玻璃质地状十分有利于酱香白酒的多轮次翻烤，淀粉含量高，经得起多次蒸煮。外地高粱一般取到第五次酒后就被榨干了，只有本地高粱能完成七次取酒。</span></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">&nbsp;&nbsp;&nbsp; <span style=\"font-size: 18px; font-family: 宋体;\">酱香大曲正是采用优质的小麦制作，因为小麦粘着力强，营养丰富，适宜于菌种的生长，也符合前人总结的酿酒经验：“得自然之曲，仍称第一品。”现在不少其他酿酒企业也在制曲原料中适当添加小麦，以增加酒的醇厚感。</span></span></p><p style=\"text-indent:28px\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">集高粱、小麦等多种粮食之精华的台酿盛宴是纯天然绿色饮品，味觉层次全面而丰富，谐调地调动了人的视觉、嗅觉、味觉三种美感的最佳享受，体现了中国“中庸”文化的极高境界，因此台酿盛宴酒深受中外消费者的喜爱。</span></p><p style=\"text-indent:28px\"><img src=\"/Uploads/image/20180627/1530106782238137.png\" title=\"1530106782238137.png\" alt=\"6.png\"/></p><p style=\"text-align:center\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><strong><span style=\"font-size: 16px; font-family: 宋体;\">漫长、独有的酿造工艺使“台酿盛宴”从众多白酒中脱颖而出</span></strong></span></p><p style=\"text-align:left\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">第一个特点是：一年一个生产周期；</span></p><p style=\"text-align:left\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><span style=\"font-size: 16px; font-family: 宋体;\">第二个特点是：两次投料：</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">A</span><span style=\"font-size: 16px; font-family: 宋体;\">：第一次投料叫下沙、</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">B</span><span style=\"font-size: 16px; font-family: 宋体;\">：第二次投料叫糙沙；</span></span></p><p style=\"text-align:left\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">第三个特点：三十天窖内发酵，</span></p><p style=\"text-align:left\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><span style=\"font-size: 16px; font-family: 宋体;\">第四个特点：四十天高温发酵制曲；</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p><p style=\"text-align:left\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">第五个特点：端午前后踩曲</span></p><p style=\"text-align:left\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><span style=\"font-size: 16px; font-family: 宋体;\">第六个特点：六个月存曲</span> <span style=\"font-size: 16px; font-family: 宋体;\">；</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p><p style=\"text-align:left\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">第七个特点：七次取酒，</span></p><p style=\"text-align:left\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><span style=\"font-size: 16px; font-family: 宋体;\">第八个特点：八次发酵：即八次撒曲、摊凉、堆积发酵；</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p><p style=\"text-align:left\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><span style=\"font-size: 16px; font-family: 宋体;\">第九个特点：九月重阳下沙，</span> <span style=\"font-size: 16px; font-family: 宋体;\">九次蒸煮</span></span></p><p style=\"text-align:left\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">第十个特点：十个工艺特点。</span></p><p style=\"text-align:left\"><img src=\"/Uploads/image/20180627/1530106792543835.jpg\" title=\"1530106792543835.jpg\" alt=\"7.jpg\"/></p><p style=\"text-align:center\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><strong>&nbsp;</strong></span></p><p style=\"text-align:center\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><strong><span style=\"font-size: 18px; font-family: 宋体;\">独有的和谐品质使“台酿盛宴”成为中华文化的典型代表</span></strong></span></p><p style=\"text-align:left\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">&nbsp;&nbsp; <span style=\"font-size: 18px; font-family: 宋体;\">&nbsp;“ 酒都”茅台镇，酒文化的历史源远流长，至今已走过3000多年的历史长河。</span></span></p><p style=\"text-align:left\"><span style=\"font-family: 宋体; font-size: 18px;\">&nbsp;&nbsp;&nbsp; 最早评价酱香酒的人出现在公元前135年，汉武帝的称赞，并留了“唐蒙饮构酱而使夜郎”的传说。“茅台香酿酽如油”，“如今好酒在茅台”，浓缩了古人对酱香美酒的审美感受。早在1952年的第一次全国评酒会上评选，严谨认真的评酒专家们就给予了酱香白酒“历史悠远；酱香突出,令人陶醉,敞杯不饮,香气扑鼻,满口生香,口味：幽雅细腻,酒体丰满醇厚,回味悠长,茅香不绝.茅台酒液：纯净透明、醇馥幽郁.”的高度评价。专家的评语恰与数百年多年前诗人的评价惊人地相似，不仅说明了专家评语的真实可靠，以及酱香白酒长期稳定的卓越品质，而且还反映出酱香白酒所蕴涵中国的传统中庸文化。同时，也证明了只有酱香白酒才是中华民族文化酒的典型代表。</span></p><p><br/></p>','zh-cn',2,0,0,0,0,'',NULL,0,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',1530106832,NULL),(5,15,'联系方式','',NULL,NULL,NULL,'','',1,'联系方式','2018-06-27','<p><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">联系我们：</span></strong></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">公司地址：中国贵州省遵义市汇川区昆明路唯一国际金创大厦9楼0927</span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">公司名称：贵州裕尔盈酒业有限公司</span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 21px;\">电话：0851-28925666&nbsp;&nbsp;&nbsp; 0851-28636777</span></p><p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\">邮编：</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><span style=\"font-size: 21px; font-family: 宋体;\"></span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 21px;\">563000</span></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\"><br/></span></p><p><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">开票信息：</span></strong></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">名称：贵州裕尔盈酒业有限公司<br/></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">纳税人识别号：91520303MA6DMWAY9J<br/></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">地址：贵州省遵义市汇川区昆明路唯一国际金创大厦9楼0927室<br/></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">电话：18212184134<br/></span></p><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18px;\">开户行及账号：中国工商银行股份有限公司遵义红花岗支行2403020109200054156<span style=\"font-family: arial, helvetica, sans-serif; font-size: 21px;\"><br/></span></span></p>','zh-cn',2,0,0,0,0,'',NULL,0,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',1530107311,NULL),(6,17,'公司介绍','',NULL,NULL,NULL,'','',1,'贵州茅台酒股份有限公司是由中国贵州茅台酒厂有限责任公司、贵州茅台酒厂技术开发公司、贵州省轻纺集体工业联社、深圳清华大学研究院、中国食品发酵工业研究所、北京糖业烟酒公司、江苏省糖烟酒总公司、上海捷强烟草糖酒（集团）有限公司等八家公司共同发起，并经过贵州省人民政府黔府函字（1999）291号文件批准设立的股份有限公司，注册资本为一亿八千五百万元。','2018-07-03','<p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; line-height: 25px; border-width: 0px; text-indent: 24px; color: rgb(77, 77, 77); font-size: 14px;\">贵州茅台酒股份有限公司是由中国贵州茅台酒厂有限责任公司、贵州茅台酒厂技术开发公司、贵州省轻纺集体工业联社、深圳清华大学研究院、中国食品发酵工业研究所、北京糖业烟酒公司、江苏省糖烟酒总公司、上海捷强烟草糖酒（集团）有限公司等八家公司共同发起，并经过贵州省人民政府黔府函字（1999）291号文件批准设立的股份有限公司，注册资本为一亿八千五百万元。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; line-height: 25px; border-width: 0px; text-indent: 24px; color: rgb(77, 77, 77); font-size: 14px;\">目前，贵州茅台酒股份有限公司茅台酒年生产量四万吨；43°、38°、33°茅台酒拓展了茅台酒家族低度酒的发展空间；茅台王子酒、茅台迎宾酒满足了中低档消费者的需求；15年、30年、50年、80年陈年茅台酒填补了我国极品酒、年份酒、陈年老窖的空白；在国内独创年代梯级式的产品开发模式。形成了低度、高中低档、极品三大系列200多个规格品种，全方位跻身市场，从而占据了白酒市场制高点，称雄于中国极品酒市场。</p><table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\" class=\"firstRow\"><td valign=\"top\" width=\"467\" style=\"margin: 0px; padding: 10px 0px 0px; border-width: 0px; color: rgb(77, 77, 77);\"><p style=\"margin-top: 10px; margin-bottom: 10px; line-height: 25px; border-width: 0px; text-indent: 24px; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">厂旗的寓意：</strong><br/>形意上：三条曲线—寓意有机茅台、科技茅台、人文茅台；中部弧线—表现川流不息、源远流长的赤水河是企业的源泉，也寓意企业如同赤水河一浪推动一浪，一浪更比一浪高。<br/>色意上：黄色—是身份与地位的象征，是茅台特有的文化、特有的历史、特有的品质、特有的地位和“人文茅台”所特有的整合价值。绿色—是企业“绿色时代”造就的结晶体“绿色茅台”和“有机茅台”。银灰色—象征企业融合传统工艺与现代科技，不断探索、研究、开发、实施“科技茅台”战略。</p></td><td valign=\"top\" width=\"20\" style=\"margin: 0px; padding: 0px; border-width: 0px; color: rgb(77, 77, 77);\"><br/></td><td align=\"middle\" valign=\"top\" width=\"224\" style=\"margin: 0px; padding: 0px; border-width: 0px; color: rgb(77, 77, 77);\"><img alt=\"贵州茅台酒股份有限公司厂旗\" src=\"/Uploads/image/20180703/1530630617985298.jpg\" style=\"border-width: 0px 6px; border-style: none solid; border-top-color: initial; border-right-color: rgb(252, 252, 252); border-bottom-color: initial; border-left-color: rgb(252, 252, 252); border-image: initial; max-width: 100%; height: 134px; padding: 0px; margin: 0px 0px 0px 12px; width: 200px; float: right;\"/></td></tr><tr style=\"margin: 0px; padding: 0px;\"><td colspan=\"3\" style=\"margin: 0px; padding: 0px; border-width: 0px; color: rgb(77, 77, 77);\" height=\"10\"><br/></td></tr><tr style=\"margin: 0px; padding: 0px;\"><td valign=\"top\" style=\"margin: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255); border-width: 0px;\"><p style=\"margin-top: 10px; margin-bottom: 10px; line-height: 25px; border-width: 0px; text-indent: 24px; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">企徽的寓意：</strong><br/>在形态上为圆形，利用红蓝两色对比、反白成一抽象的鹰形，象征企业似雄鹰展翅腾飞，同时隐喻出集团公司英文缩写字母“M”。以鹰象征企业的恢宏气势，展示强大深厚的生命力和鲜明厚重的企业形象。标志两边共八根流动的线条，寓意着厂徽是在茅台酒荣获巴拿马 国际金奖80周年之际推出，使企业标志具有深远的历史意义和纪念意义。标志的色彩为红、蓝、白，分别象征茅台酒的酱香、醇甜、窖底。另，红色寓示企业的开拓精神和激昂奋勇的热情，也隐含茅台酒的独特醇香，并巧妙地溶入五星，寓意茅台酒的国酒地位和国际荣誉。“茅台”缩写注入海洋，象征国酒茅台屹立于世界。</p></td><td valign=\"top\" style=\"margin: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255); border-width: 0px;\" width=\"20\"><br/></td><td valign=\"top\" style=\"margin: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255); border-width: 0px;\" width=\"20\"><br/></td></tr></tbody></table><p><br/></p>','zh-cn',2,0,0,0,0,'',NULL,0,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',1530630647,NULL),(7,17,'关于公司','',NULL,NULL,NULL,'','',1,'2313','2018-07-04','<p>1231313</p>','zh-cn',2,0,0,0,0,'',NULL,0,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','',1530672080,NULL),(8,25,'测试','',NULL,NULL,NULL,'','',1,'12313','2018-07-04','<p>1231</p>','zh-cn',2,0,0,0,0,'',NULL,0,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',1530672615,NULL),(9,31,'测试','',NULL,NULL,NULL,'','',1,'1231','2018-07-04','<p>1232131</p>','zh-cn',2,0,0,0,0,'',NULL,0,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',1530672634,NULL),(10,40,'测试','',NULL,NULL,NULL,'','',1,'1231','2018-07-04','<p>12313</p>','zh-cn',2,0,0,0,0,'',NULL,0,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',1530672653,NULL),(11,31,'打假防伪','',NULL,NULL,NULL,'','',1,'123','2018-07-06','<p>132123</p>','zh-cn',2,0,0,0,0,'',NULL,0,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',1530880108,NULL),(12,42,'12313','',NULL,NULL,NULL,'','',1,'123','2018-07-06','<p>123</p>','zh-cn',2,0,0,0,0,'',NULL,0,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',1530885558,NULL);

#
# Structure for table "jx_system"
#

DROP TABLE IF EXISTS `jx_system`;
CREATE TABLE `jx_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `address` varchar(255) DEFAULT NULL COMMENT '公司地址',
  `logo` varchar(255) DEFAULT NULL COMMENT '公司logo',
  `xy` varchar(255) DEFAULT NULL COMMENT '坐标',
  `tel` varchar(15) DEFAULT NULL COMMENT '公司电话',
  `website` varchar(255) DEFAULT NULL COMMENT '公司网址',
  `webname` varchar(255) DEFAULT NULL COMMENT '网站名称',
  `title` varchar(255) DEFAULT NULL COMMENT '网站标题',
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键词',
  `description` text COMMENT '网站描述',
  `ico` varchar(255) DEFAULT NULL COMMENT '网站ico',
  `copyright` varchar(255) DEFAULT NULL COMMENT '版权信息',
  `icp` varchar(255) DEFAULT NULL COMMENT '备案信息',
  `phone` varchar(255) DEFAULT NULL COMMENT '客服电话',
  `qq` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `weipic` varchar(255) DEFAULT NULL COMMENT '公众号二维码',
  `docount` text COMMENT '统计代码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='系统信息表，不可删除，';

#
# Data for table "jx_system"
#

INSERT INTO `jx_system` VALUES (1,'贵州裕尔盈酒业有限公司','遵义新蒲新区大学城平安街B2区1号楼1层','/Files/2018-05-31/5b0f6604a34e9.png','','0851-28791834','http://www.zunyisp.com.cn','黔北酒乡网','黔北酒乡网','黔北酒乡网,软件开发','黔北酒乡网','/Files/2018-05-31/5b0f66048f230.png','Copyright © 2018 若尘. All rights reserved.','黔ICP备12001935号-2','0851-28791834','88888888888','zsp201507@163.com','/Files/2017-03-07/58be28c13be98.jpg',' <script type=\"text/javascript\">\r\n \r\n    </script>');

#
# Structure for table "jx_views"
#

DROP TABLE IF EXISTS `jx_views`;
CREATE TABLE `jx_views` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` char(11) NOT NULL COMMENT 'ip',
  `vtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "jx_views"
#

