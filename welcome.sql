/*
Navicat MySQL Data Transfer

Source Server         : AION
Source Server Version : 50702
Source Host           : localhost:3306
Source Database       : any_i

Target Server Type    : MYSQL
Target Server Version : 50702
File Encoding         : 65001

Date: 2015-10-30 18:10:15
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `welcome`
-- ----------------------------
DROP TABLE IF EXISTS `welcome`;
CREATE TABLE `welcome` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `vdo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of welcome
-- ----------------------------
INSERT INTO `welcome` VALUES ('1', 'eye.mp4', null);
