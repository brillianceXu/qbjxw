# Host: localhost  (Version: 5.5.53)
# Date: 2018-07-11 15:41:35
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "jx_message"
#

DROP TABLE IF EXISTS `jx_message`;
CREATE TABLE `jx_message` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '' COMMENT '标题',
  `username` varchar(255) DEFAULT NULL COMMENT '姓名',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `sex` varchar(255) DEFAULT NULL COMMENT '性别',
  `content` text COMMENT '内容',
  `address` varchar(255) DEFAULT NULL COMMENT '所在地区',
  `status` int(11) DEFAULT '1' COMMENT '状态，1未回复，2已回复，0已删除',
  `mobile` int(11) DEFAULT '1' COMMENT '电话',
  `addtime` int(10) DEFAULT NULL COMMENT '添加时间',
  `answer` text COMMENT '回复',
  `updatetime` int(10) DEFAULT NULL COMMENT '回复时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='系统文章表';

#
# Data for table "jx_message"
#

