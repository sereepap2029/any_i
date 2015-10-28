/*
Navicat MySQL Data Transfer

Source Server         : AION
Source Server Version : 50702
Source Host           : localhost:3306
Source Database       : any_i

Target Server Type    : MYSQL
Target Server Version : 50702
File Encoding         : 65001

Date: 2015-10-28 13:17:38
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `action`
-- ----------------------------
DROP TABLE IF EXISTS `action`;
CREATE TABLE `action` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `title_en` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8_unicode_ci,
  `sort_order` bigint(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of action
-- ----------------------------
INSERT INTO `action` VALUES ('bf5fd61783', 'PAC SolarAire', '“วันที่เราหยุดไม่ได้เพราะมาไกลแล้ว แต่จะเดินต่อก็ยังหาทางไปไม่ถูก การที่มีคนเดินเข้ามาช่วยชี้ทางให้ มันเหมือนกับเราเห็นทาง และโอกาสใหม่ที่จะไปต่อได้แล้ว”', 'PAC SolarAire', '“วันที่เราหยุดไม่ได้เพราะมาไกลแล้ว แต่จะเดินต่อก็ยังหาทางไปไม่ถูก การที่มีคนเดินเข้ามาช่วยชี้ทางให้ มันเหมือนกับเราเห็นทาง และโอกาสใหม่ที่จะไปต่อได้แล้ว”', '2');
INSERT INTO `action` VALUES ('eb7374e098', 'PAC SolarAire1', '“วันที่เราหยุดไม่ได้เพราะมาไกลแล้ว แต่จะเดินต่อก็ยังหาทางไปไม่ถูก การที่มีคนเดินเข้ามาช่วยชี้ทางให้ มันเหมือนกับเราเห็นทาง และโอกาสใหม่ที่จะไปต่อได้แล้ว”1', 'PAC SolarAire1', '“วันที่เราหยุดไม่ได้เพราะมาไกลแล้ว แต่จะเดินต่อก็ยังหาทางไปไม่ถูก การที่มีคนเดินเข้ามาช่วยชี้ทางให้ มันเหมือนกับเราเห็นทาง และโอกาสใหม่ที่จะไปต่อได้แล้ว”1', '1');

-- ----------------------------
-- Table structure for `action_photo`
-- ----------------------------
DROP TABLE IF EXISTS `action_photo`;
CREATE TABLE `action_photo` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `action_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of action_photo
-- ----------------------------
INSERT INTO `action_photo` VALUES ('07efd2f8af', 'eb7374e098_07efd2f8af.jpg', '0', 'eb7374e098');
INSERT INTO `action_photo` VALUES ('4e16170a7b', 'eb7374e098_4e16170a7b.jpg', '1', 'eb7374e098');
INSERT INTO `action_photo` VALUES ('8ebd31eb2d', 'eb7374e098_8ebd31eb2d.jpg', '2', 'eb7374e098');
INSERT INTO `action_photo` VALUES ('b13542a6f7', 'bf5fd61783_b13542a6f7.jpg', '2', 'bf5fd61783');
INSERT INTO `action_photo` VALUES ('da8fab7e41', 'bf5fd61783_da8fab7e41.jpg', '0', 'bf5fd61783');
INSERT INTO `action_photo` VALUES ('fef91142c2', 'bf5fd61783_fef91142c2.jpg', '1', 'bf5fd61783');

-- ----------------------------
-- Table structure for `advisor`
-- ----------------------------
DROP TABLE IF EXISTS `advisor`;
CREATE TABLE `advisor` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Position` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_en` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Position_en` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` bigint(11) DEFAULT '0',
  `picture` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of advisor
-- ----------------------------
INSERT INTO `advisor` VALUES ('25676f41f5', '11', '111', '22', '333', '444', '555', '1', '25676f41f5_1445935471.png');
INSERT INTO `advisor` VALUES ('3b061675a3', 'qwe', 'asd', 'qwe', 'dsad', 'qwe', 'asd', '4', '3b061675a3_1445935272.png');
INSERT INTO `advisor` VALUES ('524ad8a8b8', 'd', 'Sweetd', 'sa', 'asd', 'wqe', 'asd', '5', '524ad8a8b8_1445935281.png');
INSERT INTO `advisor` VALUES ('b235064845', 'sad', 'wqe', 'sad', 'qwe', 'asd', 'qwe', '2', 'b235064845_1445935288.png');
INSERT INTO `advisor` VALUES ('e9a857e50a', 'asd', 'wqe', 'asd', 'qwe', 'asd', 'qwe', '3', 'e9a857e50a_1445935296.png');

-- ----------------------------
-- Table structure for `partner`
-- ----------------------------
DROP TABLE IF EXISTS `partner`;
CREATE TABLE `partner` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of partner
-- ----------------------------
INSERT INTO `partner` VALUES ('11c56811a8', '11c56811a8_1446012338.jpg', '6');
INSERT INTO `partner` VALUES ('5da9adbdfb', '5da9adbdfb_1446012315.jpg', '1');
INSERT INTO `partner` VALUES ('679b964ae5', '679b964ae5_1446012338.jpg', '5');
INSERT INTO `partner` VALUES ('a8384b9a61', 'a8384b9a61_1446012315.jpg', '3');
INSERT INTO `partner` VALUES ('b1168466bd', 'b1168466bd_1446012315.jpg', '2');
INSERT INTO `partner` VALUES ('dbf589f04e', 'dbf589f04e_1446012338.jpg', '4');
INSERT INTO `partner` VALUES ('dc7c1a257c', 'dc7c1a257c_1446011792.jpg', '0');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('viewer','clamer','admin','company','sadmin') COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_access` bigint(11) DEFAULT NULL,
  `company` varchar(600) COLLATE utf8_unicode_ci DEFAULT 'all',
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('sadmin', 'sadmin', 'sadmin', 'sadmin', 'sadmin', '1426166350', null, '');
INSERT INTO `user` VALUES ('sereepap2029', '123456789', 'atom', 'atom', 'sadmin', '1445768009', 'all', null);
