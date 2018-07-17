# Host: qdm22258262.my3w.com  (Version: 5.1.73)
# Date: 2018-07-17 12:49:00
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

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
  `product_date` varchar(20) DEFAULT NULL COMMENT '生产日期',
  `market_date` varchar(20) DEFAULT NULL COMMENT '上市日期',
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `addtime` int(10) DEFAULT NULL,
  `provider` varchar(255) DEFAULT '''贵州裕尔盈酒业有限公司''' COMMENT '生产厂家',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1上架，0下架',
  `sort` int(11) NOT NULL DEFAULT '9999' COMMENT '排序，越小越靠前',
  `degree` int(11) DEFAULT NULL COMMENT '酒精度',
  `net_wt` int(11) DEFAULT NULL COMMENT '净含量',
  `odor_type` varchar(255) DEFAULT NULL COMMENT '香型',
  `packing` varchar(255) DEFAULT NULL COMMENT '包装',
  `buy_link` varchar(255) DEFAULT NULL COMMENT '购买链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "jx_goods"
#

INSERT INTO `jx_goods` VALUES (1,'台酿盛宴 乐享财富 500ml 53℃','',45,'\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n这是介绍\n……','/Files/2018-06-21/5b2bb0b162135.jpg',0,'','','0','0','','',NULL,'\'贵州裕尔盈酒业有限公司\'',1,9999,NULL,NULL,NULL,NULL,NULL),(2,'台酿盛宴原浆酒 450ml 53℃','',45,'台酿盛宴贵州手礼，产于贵州省仁怀市茅台镇，是世界著名三大蒸馏名酒之一，是中国大曲酱香型白酒的鼻祖和典型代表，其酿造工艺列入中国首批非物质文化遗产名录。这是台酿盛盛宴送给所有来贵州朋友的伴手礼，原浆酒指粮食通过曲发酵成酒，完全是不勾不兑的原始酒液。原浆酒相较新工艺白酒香气浓郁，甘甜味美，酒味醇厚，并且酒中含有氨基酸、有机酸和多种维生素，其营养性特点显著。并且饮后不上头，对身体刺激小。','/Files/2018-06-21/5b2bb4505f450.jpg',288,'2','','0','0','','',NULL,'\'贵州裕尔盈酒业有限公司\'',1,9999,53,0,'酱香型','',''),(3,'台酿盛宴原浆酒 500ml 53℃','',45,'台酿盛宴十年经典，产于贵州省仁怀市茅台镇，原料为当地出产的有机高粱和小麦。是世界著名三大蒸馏名酒之一，是中国大曲酱香型白酒的鼻祖和典型代表，其酿造工艺列入中国首批非物质文化遗产名录，是绿色食品、有机食品、地理标志保护产品。10年陈年台酿盛宴经典酒其基本基酒酒龄不低于10年，按照10年陈年贵州国酒标准精心勾兑而成，未添加任何香气。具有酱香突出、幽雅细腻、酒体圆润醇厚、回味悠长老熟芳香舒适显著的风格。','/Files/2018-06-21/5b2bb48435d09.jpg',599,'2','&lt;p style=\\&quot;text-align:center\\&quot;&gt;&lt;img src=\\&quot;/Uploads/image/20180716/1531728671656784.png\\&quot; title=\\&quot;1531728671656784.png\\&quot; alt=\\&quot;blob.png\\&quot;/&gt;&lt;/p&gt;&lt;p style=\\&quot;text-align:center\\&quot;&gt;&lt;img src=\\&quot;/Uploads/image/20180716/1531728681306252.png\\&quot; title=\\&quot;1531728681306252.png\\&quot; alt=\\&quot;blob.png\\&quot;/&gt;&lt;/p&gt;&lt;p style=\\&quot;text-align:center\\&quot;&gt;&lt;img src=\\&quot;/Uploads/image/20180716/1531728701240500.png\\&quot; title=\\&quot;1531728701240500.png\\&quot; alt=\\&quot;blob.png\\&quot;/&gt;&lt;/p&gt;&lt;p style=\\&quot;text-align:center\\&quot;&gt;&lt;img src=\\&quot;/Uploads/image/20180716/1531728714311459.png\\&quot; title=\\&quot;1531728714311459.png\\&quot; alt=\\&quot;blob.png\\&quot;/&gt;&lt;/p&gt;&lt;p style=\\&quot;text-align:center\\&quot;&gt;&lt;img src=\\&quot;/Uploads/image/20180716/1531728723843936.png\\&quot; title=\\&quot;1531728723843936.png\\&quot; alt=\\&quot;blob.png\\&quot;/&gt;&lt;/p&gt;&lt;p style=\\&quot;text-align:center\\&quot;&gt;&lt;img src=\\&quot;/Uploads/image/20180716/1531728734170378.png\\&quot; title=\\&quot;1531728734170378.png\\&quot; alt=\\&quot;blob.png\\&quot;/&gt;&lt;/p&gt;&lt;p style=\\&quot;text-align: center;\\&quot;&gt;&lt;img src=\\&quot;/Uploads/image/20180716/1531728761603575.png\\&quot; title=\\&quot;1531728761603575.png\\&quot; alt=\\&quot;blob.png\\&quot;/&gt;&lt;/p&gt;','2018-07-13','2018-07-13','','',NULL,'\'贵州裕尔盈酒业有限公司\'',1,9999,53,500,'酱香型','彩盒、瓶子、手提袋','');
