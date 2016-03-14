/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50623
Source Host           : localhost:3306
Source Database       : any_i

Target Server Type    : MYSQL
Target Server Version : 50623
File Encoding         : 65001

Date: 2016-03-14 12:43:22
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
  `detail_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail_description` text COLLATE utf8_unicode_ci,
  `detail_title_en` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail_description_en` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of action
-- ----------------------------
INSERT INTO `action` VALUES ('731518aaaf', 'PAC', '\"à¸à¸²à¸£à¸—à¸µà¹ˆà¸—à¸±à¹‰à¸‡ 2 à¸à¹ˆà¸²à¸¢à¹„à¸”à¹‰à¸—à¸³à¸‡à¸²à¸™à¸£à¹ˆà¸§à¸¡à¸à¸±à¸™à¸ˆà¸¶à¸‡à¹€à¸à¸´à¸”à¸à¸²à¸£à¸ªà¹ˆà¸‡à¹€à¸ªà¸£à¸´à¸¡à¸‹à¸¶à¹ˆà¸‡à¸à¸±à¸™à¹à¸¥à¸°à¸à¸±à¸™à¹ƒà¸™à¹à¸•à¹ˆà¸¥à¸°à¸”à¹‰à¸²à¸™ à¸—à¸³à¹ƒà¸«à¹‰ PAC à¹€à¸•à¸´à¸šà¹‚à¸•à¸­à¸¢à¹ˆà¸²à¸‡à¸ªà¸¡à¹ˆà¸³à¹€à¸ªà¸¡à¸­à¹à¸¥à¸°à¸•à¹ˆà¸­à¹€à¸™à¸·à¹ˆà¸­à¸‡\"', 'PAC', '\"By joining together, it has allowed us to enhance each other\'s strengths, and helped PAC achieve continuous, sustained growth.\"', '4', 'PAC', '   \"à¸„à¸·à¸­ à¸šà¸£à¸´à¸©à¸±à¸— à¹à¸­à¸”à¸§à¸²à¸™à¸‹à¹Œ à¹€à¸­à¹‡à¸à¸‹à¹€à¸Šà¸™à¸ˆà¹Œ à¹€à¸—à¸„à¹‚à¸™à¹‚à¸¥à¸¢à¸µ à¸ˆà¸³à¸à¸±à¸” à¸‚à¸­à¸‡à¹€à¸£à¸² à¹€à¸£à¸´à¹ˆà¸¡à¸à¹ˆà¸­à¸•à¸±à¹‰à¸‡à¸˜à¸¸à¸£à¸à¸´à¸ˆà¸¡à¸²à¸•à¸±à¹‰à¸‡à¹à¸•à¹ˆà¸›à¸µ 2546 à¹‚à¸”à¸¢à¸”à¸³à¹€à¸™à¸´à¸™à¸˜à¸¸à¸£à¸à¸´à¸ˆà¸ à¸²à¸¢à¹ƒà¸•à¹‰à¹à¸šà¸£à¸™à¸”à¹Œ PAC à¹€à¸£à¸²à¹€à¸£à¸´à¹ˆà¸¡à¸•à¹‰à¸™à¸”à¹‰à¸§à¸¢à¸à¸²à¸£à¸—à¸³à¹€à¸›à¹‡à¸™à¸˜à¸¸à¸£à¸à¸´à¸ˆà¸ à¸²à¸¢à¹ƒà¸™à¸„à¸£à¸­à¸šà¸„à¸£à¸±à¸§ à¸„à¸·à¸­à¸—à¸³à¹€à¸„à¸£à¸·à¹ˆà¸­à¸‡à¸›à¸£à¸±à¸šà¸­à¸²à¸à¸²à¸¨ à¸‹à¸¶à¹ˆà¸‡à¸›à¸à¸´à¹€à¸ªà¸˜à¹„à¸¡à¹ˆà¹„à¸”à¹‰à¸«à¸£à¸­à¸à¸§à¹ˆà¸²à¹€à¸›à¹‡à¸™à¸„à¸£à¸·à¹ˆà¸­à¸‡à¹ƒà¸Šà¹‰à¹„à¸Ÿà¸Ÿà¹‰à¸²à¸—à¸µà¹ˆà¸¡à¸µà¸„à¸§à¸²à¸¡à¸ˆà¸³à¹€à¸›à¹‡à¸™à¹ƒà¸™à¸¢à¸¸à¸„à¸™à¸µà¹‰à¹à¸«à¸¥à¸° à¹à¸¥à¸°à¸à¹‡à¹€à¸›à¹‡à¸™à¹€à¸„à¸£à¸·à¹ˆà¸­à¸‡à¹ƒà¸Šà¹‰à¹„à¸Ÿà¸Ÿà¹‰à¸²à¸—à¸µà¹ˆà¸¡à¸µà¸­à¸±à¸•à¸£à¸²à¸à¸²à¸£à¸ªà¸´à¹‰à¸™à¹€à¸›à¸¥à¸·à¸­à¸‡à¸žà¸¥à¸±à¸‡à¸‡à¸²à¸™à¸—à¸µà¹ˆà¸„à¹ˆà¸­à¸™à¸‚à¹‰à¸²à¸‡à¸ªà¸¹à¸‡ à¹à¸•à¹ˆà¸¡à¸±à¸™à¸¡à¸µà¸šà¸—à¸šà¸²à¸—à¹€à¸›à¹‡à¸™à¸«à¸™à¸¶à¹ˆà¸‡à¹ƒà¸™à¸›à¸±à¸ˆà¸ˆà¸±à¸¢à¸ªà¸³à¸„à¸±à¸à¹ƒà¸™à¸Šà¸µà¸§à¸´à¸•à¸›à¸£à¸°à¸ˆà¸³à¸§à¸±à¸™à¸‚à¸­à¸‡à¹€à¸à¸·à¸­à¸šà¸—à¸¸à¸à¹† à¸„à¸£à¸±à¸§à¹€à¸£à¸·à¸­à¸™ à¹à¸¥à¸°à¸ªà¸³à¸«à¸£à¸±à¸šà¸˜à¸¸à¸£à¸à¸´à¸ˆà¸—à¸¸à¸à¹† à¸ à¸²à¸„à¸ªà¹ˆà¸§à¸™à¸”à¹‰à¸§à¸¢à¹ƒà¸Šà¹ˆà¸¡à¸±à¹‰à¸¢à¸„à¸° à¸‹à¸¶à¹ˆà¸‡à¸ˆà¸¸à¸”à¸™à¸µà¹‰à¹€à¸­à¸‡à¸—à¸µà¹ˆà¹€à¸à¸´à¸”à¹€à¸›à¹‡à¸™à¹à¸£à¸‡à¸šà¸±à¸™à¸”à¸²à¸¥à¹ƒà¸ˆà¹à¸¥à¸°à¸œà¸¥à¸±à¸à¸”à¸±à¸™à¹ƒà¸«à¹‰à¹€à¸£à¸²à¹€à¸à¸´à¸”à¹à¸™à¸§à¸„à¸´à¸”à¹ƒà¸™à¸à¸²à¸£à¸§à¸´à¸ˆà¸±à¸¢à¹à¸¥à¸°à¸žà¸±à¸’à¸™à¸²à¸œà¸¥à¸´à¸•à¸ à¸±à¸“à¸‘à¹Œà¸‚à¸¶à¹‰à¸™à¸¡à¸² à¸ˆà¸™à¹ƒà¸™à¸—à¸µà¹ˆà¸ªà¸¸à¸”à¸à¹‡à¸à¸¥à¸²à¸¢à¸¡à¸²à¹€à¸›à¹‡à¸™ â€œà¸™à¸§à¸±à¸•à¸à¸£à¸£à¸¡à¹€à¸„à¸£à¸·à¹ˆà¸­à¸‡à¸—à¸³à¸™à¹‰à¸³à¸£à¹‰à¸­à¸™à¸Ÿà¸£à¸µà¸ˆà¸²à¸à¹€à¸„à¸£à¸·à¹ˆà¸­à¸‡à¸›à¸£à¸±à¸šà¸­à¸²à¸à¸²à¸¨â€ à¸„à¹ˆà¸° à¸«à¸¥à¸±à¸à¸à¸²à¸£à¸„à¸·à¸­à¹€à¸£à¸²à¸­à¸²à¸¨à¸±à¸¢à¹€à¸—à¸„à¹‚à¸™à¹‚à¸¥à¸¢à¸µà¸à¸²à¸£à¹à¸¥à¸à¹€à¸›à¸¥à¸µà¹ˆà¸¢à¸™à¸„à¸§à¸²à¸¡à¸£à¹‰à¸­à¸™ à¹‚à¸”à¸¢à¸™à¸³à¹€à¸­à¸²à¸žà¸¥à¸±à¸‡à¸‡à¸²à¸™à¸—à¸µà¹ˆà¸•à¹‰à¸­à¸‡à¸ªà¸¹à¸à¹€à¸ªà¸µà¸¢à¹„à¸›à¸­à¸¢à¹ˆà¸²à¸‡à¸ªà¸´à¹‰à¸™à¹€à¸›à¸¥à¸·à¸­à¸‡à¹ƒà¸™à¸£à¸°à¸šà¸šà¸›à¸£à¸±à¸šà¸­à¸²à¸à¸²à¸¨à¹€à¸™à¸µà¹ˆà¸¢ à¸™à¸³à¸¡à¸²à¸›à¸£à¸±à¸šà¸­à¸¸à¸“à¸«à¸ à¸¹à¸¡à¸´à¸™à¹‰à¸³à¹ƒà¸«à¹‰à¸ªà¸¹à¸‡à¸‚à¸¶à¹‰à¸™à¸ˆà¸™à¹€à¸›à¹‡à¸™à¸™à¹‰à¸³à¸£à¹‰à¸­à¸™ à¸‹à¸¶à¹ˆà¸‡à¹€à¸£à¸²à¸žà¸±à¸’à¸™à¸²à¸ˆà¸™à¸ªà¸²à¸¡à¸²à¸£à¸–à¸—à¸”à¹à¸—à¸™à¸à¸²à¸£à¸•à¹‰à¸¡à¸™à¹‰à¸³à¸£à¹‰à¸­à¸™à¸ˆà¸²à¸ Heater à¹„à¸Ÿà¸Ÿà¹‰à¸²à¹„à¸”à¹‰ 100% à¸ˆà¸²à¸à¸™à¸±à¹‰à¸™à¹€à¸£à¸²à¸à¹‡à¸¡à¸µà¸à¸²à¸£à¸žà¸±à¸’à¸™à¸²à¸œà¸¥à¸´à¸•à¸ à¸±à¸“à¸‘à¹Œà¸›à¸£à¸°à¸«à¸¢à¸±à¸”à¸žà¸¥à¸±à¸‡à¸‡à¸²à¸™à¸¡à¸²à¹€à¸£à¸·à¹ˆà¸­à¸¢à¹† à¸ˆà¸™à¸›à¸±à¸ˆà¸ˆà¸¸à¸šà¸±à¸™ PAC à¸à¹‡à¹„à¸”à¹‰à¸£à¸±à¸šà¸à¸²à¸£à¸¢à¸­à¸¡à¸£à¸±à¸šà¹ƒà¸«à¹‰à¹€à¸›à¹‡à¸™à¸«à¸™à¸¶à¹ˆà¸‡à¹ƒà¸™à¸œà¸¹à¹‰à¸™à¸³à¸—à¸²à¸‡à¸”à¹‰à¸²à¸™à¸™à¸§à¸±à¸•à¸à¸£à¸£à¸¡à¸žà¸¥à¸±à¸‡à¸‡à¸²à¸™à¸ªà¸°à¸­à¸²à¸”à¹ƒà¸™à¸£à¸°à¸”à¸±à¸šà¹à¸™à¸§à¸«à¸™à¹‰à¸²à¸‚à¸­à¸‡à¸›à¸£à¸°à¹€à¸—à¸¨à¸„à¹ˆà¸°\r\n\r\n   à¸•à¹ˆà¸­à¸¡à¸² PAC à¹„à¸”à¹‰à¸¡à¸µà¹‚à¸­à¸à¸²à¸ªà¸£à¸¹à¹‰à¸ˆà¸±à¸à¸à¸±à¸šà¸—à¸²à¸‡ any i à¸„à¹ˆà¸° à¹à¸¥à¸°à¸à¹‡à¹„à¸”à¹‰à¸¡à¸µà¹‚à¸­à¸à¸²à¸ªà¸ˆà¸±à¸šà¸¡à¸·à¸­à¸—à¸³à¸˜à¸¸à¸£à¸à¸´à¸ˆà¸£à¹ˆà¸§à¸¡à¸à¸±à¸™ à¹‚à¸”à¸¢ any i à¹€à¸›à¹‡à¸™à¸šà¸£à¸´à¸©à¸±à¸—à¸—à¸µà¹ˆà¸¡à¸µà¸„à¸§à¸²à¸¡à¹€à¸Šà¸µà¹ˆà¸¢à¸§à¸Šà¸²à¸à¸—à¸²à¸‡à¸”à¹‰à¸²à¸™à¹ƒà¸«à¹‰à¸„à¸³à¸›à¸£à¸¶à¸à¸©à¸²à¸—à¸²à¸‡à¸”à¹‰à¸²à¸™à¸˜à¸¸à¸£à¸à¸´à¸ˆ à¸à¸²à¸£à¸šà¸£à¸´à¸«à¸²à¸£à¸ˆà¸±à¸”à¸à¸²à¸£ à¸à¸²à¸£à¸§à¸²à¸‡à¹à¸œà¸™à¸à¸¥à¸¢à¸¸à¸—à¸˜à¹Œà¸—à¸²à¸‡à¸à¸²à¸£à¸•à¸¥à¸²à¸” à¸à¸²à¸£à¸§à¸²à¸‡à¸£à¸°à¸šà¸šà¸šà¸±à¸à¸Šà¸µ à¸„à¸¥à¸±à¸‡à¸ªà¸´à¸™à¸„à¹‰à¸² à¹à¸¥à¸°à¸£à¸°à¸šà¸šà¹„à¸­à¸—à¸µ à¸•à¸¥à¸­à¸”à¸ˆà¸™à¹ƒà¸«à¹‰à¸„à¸³à¹à¸™à¸°à¸™à¸³à¹ƒà¸™à¸à¸²à¸£à¹à¸à¹‰à¸›à¸±à¸à¸«à¸²à¸—à¸²à¸‡à¸˜à¸¸à¸£à¸à¸´à¸ˆà¸­à¸¢à¹ˆà¸²à¸‡à¸£à¸­à¸šà¸”à¹‰à¸²à¸™ à¹ƒà¸™à¸‚à¸“à¸°à¸—à¸µà¹ˆà¸•à¸±à¸§ PAC à¹€à¸­à¸‡à¸à¹‡à¸¡à¸µà¸„à¸§à¸²à¸¡à¹à¸‚à¹‡à¸‡à¹à¸£à¸‡à¹à¸¥à¸°à¹‚à¸”à¸”à¹€à¸”à¹ˆà¸™à¸—à¸²à¸‡à¸”à¹‰à¸²à¸™à¸œà¸¥à¸´à¸•à¸ à¸±à¸“à¸‘à¹Œ à¸à¸²à¸£à¸—à¸µà¹ˆà¸—à¸±à¹‰à¸‡ 2 à¸à¹ˆà¸²à¸¢à¹„à¸”à¹‰à¸—à¸³à¸‡à¸²à¸™à¸£à¹ˆà¸§à¸¡à¸à¸±à¸™à¸ˆà¸¶à¸‡à¹€à¸à¸´à¸”à¸à¸²à¸£à¸ªà¹ˆà¸‡à¹€à¸ªà¸£à¸´à¸¡à¸‹à¸¶à¹ˆà¸‡à¸à¸±à¸™à¹à¸¥à¸°à¸à¸±à¸™à¹ƒà¸™à¹à¸•à¹ˆà¸¥à¸°à¸”à¹‰à¸²à¸™ à¸—à¸³à¹ƒà¸«à¹‰ PAC à¹€à¸•à¸´à¸šà¹‚à¸•à¸­à¸¢à¹ˆà¸²à¸‡à¸ªà¸¡à¹ˆà¸³à¹€à¸ªà¸¡à¸­à¹à¸¥à¸°à¸•à¹ˆà¸­à¹€à¸™à¸·à¹ˆà¸­à¸‡ à¸ªà¸²à¸¡à¸²à¸£à¸–à¹€à¸•à¸£à¸µà¸¢à¸¡à¸„à¸§à¸²à¸¡à¸žà¸£à¹‰à¸­à¸¡à¸£à¸­à¸‡à¸£à¸±à¸šà¸à¸²à¸£à¹€à¸ˆà¸£à¸´à¸à¹€à¸•à¸´à¸šà¹‚à¸•à¸‚à¸­à¸‡à¸˜à¸¸à¸£à¸à¸´à¸ˆà¹ƒà¸™à¸­à¸™à¸²à¸„à¸• à¸ˆà¸²à¸à¸à¸²à¸£à¸à¸³à¸«à¸™à¸”à¸—à¸´à¸¨à¸—à¸²à¸‡à¸‚à¸­à¸‡à¸˜à¸¸à¸£à¸à¸´à¸ˆà¸‚à¸­à¸‡à¸•à¸±à¸§à¹€à¸­à¸‡à¹„à¸”à¹‰à¹€à¸­à¸‡à¸­à¸¢à¹ˆà¸²à¸‡à¸¡à¸µà¸›à¸£à¸°à¸ªà¸´à¸—à¸˜à¸´à¸ à¸²à¸žà¸¡à¸²à¸à¸‚à¸¶à¹‰à¸™à¸„à¹ˆà¸°\"â€‹', 'PAC', '\"Our company, Advance Exchange Technology Co., Ltd., began operating in 2003 under the brand PAC. We started off as a family-run business, manufacturing air conditioning units, which are devices that are needed more than ever these days, and are also known for being wasteful for energy. But it is undeniable that they are essential for living here, in almost every home and business. This was the inspiration for us to develop an innovative \"free water heater\" by taking advantage of the heat that is normally released into the atmosphere as waste, and using a heat exchange system to capture this lost energy as use it to heat water for use, so 100% of the hot water needed can come from our mechanism. We\'ve been continuously refining and improving our products to the point where today, PAC is recognized as one of the leaders in clean energy innovations in Thailand.\"\r\n\r\n\"Recently, PAC had an opportunity to meet with any i and work together on strategic marketing planning, accounting systems, inventory and IT, giving advice to solve a wide variety of issues. They have helped us grow our business with greater efficiency, while helping us prepare our business for even more growth in the future.\"');
INSERT INTO `action` VALUES ('ff645202cc', 'The Wisdom Bangkok', 'Achieve Noble Goal of whom belief in \"DIGITAL\" is a \"NEW WORLD\" by using \"OUR WISDOM\" ', 'The Wisdom Bangkok', 'Achieve Noble Goal of whom belief in \"DIGITAL\" is a \"NEW WORLD\" by using \"OUR WISDOM\" ', '0', 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¸šà¸£à¸´à¸©à¸±à¸—', '     â€œTHE WISDOM BANGKOK (TWB) à¸à¹ˆà¸­à¸•à¸±à¹‰à¸‡à¸¡à¸²à¸•à¸±à¹‰à¸‡à¹à¸•à¹ˆà¸›à¸µ 2553 à¹€à¸£à¸´à¹ˆà¸¡à¹à¸£à¸à¹€à¸¥à¸¢à¸„à¸·à¸­à¹€à¸£à¸²à¸—à¸³ Social Network Platform  à¸ˆà¸™à¸§à¸±à¸™à¸™à¸¶à¸‡à¹„à¸”à¹‰à¸¡à¸µà¹‚à¸­à¸à¸²à¸ªà¸£à¸±à¸šà¸œà¸´à¸”à¸Šà¸­à¸šà¹‚à¸„à¸£à¸‡à¸à¸²à¸£à¹ƒà¸™à¸ªà¹ˆà¸§à¸™à¸‚à¸­à¸‡ Digital Marketing Strategy à¹ƒà¸«à¹‰à¸à¸±à¸šà¸šà¸£à¸´à¸©à¸±à¸— à¸ªà¸´à¸‡à¸«à¹Œ à¸„à¸­à¸£à¹Œà¹€à¸›à¸­à¹€à¸£à¸Šà¸±à¹ˆà¸™ à¸™à¸±à¸šà¹€à¸›à¹‡à¸™à¸ˆà¸¸à¸”à¹€à¸›à¸¥à¸µà¹ˆà¸¢à¸™à¸—à¸µà¹ˆà¸—à¸³à¹ƒà¸«à¹‰à¸šà¸£à¸´à¸©à¸±à¸—à¹„à¸”à¹‰à¸œà¸±à¸™à¸•à¸±à¸§à¸ˆà¸²à¸à¸œà¸¹à¹‰à¸ªà¸£à¹‰à¸²à¸‡ Platform à¸¡à¸²à¹€à¸›à¹‡à¸™ Digital Media Agency à¹à¸¥à¸°à¹€à¸£à¸²à¸à¹‡à¸—à¸³à¹€à¸£à¸·à¹ˆà¸­à¸¢à¸¡à¸²à¸•à¸±à¹‰à¸‡à¹à¸•à¹ˆà¸™à¸±à¹‰à¸™ à¸ˆà¸™à¹€à¸£à¸²à¹€à¸›à¹‡à¸™ Digital Agency à¸—à¸µà¹ˆà¹„à¸”à¹‰à¸£à¸±à¸šà¸‡à¸²à¸™à¹‚à¸›à¸£à¹€à¸ˆà¸„ Digital Marketing à¸—à¸µà¹ˆà¹ƒà¸«à¸à¹ˆà¸—à¸µà¹ˆà¸ªà¸¸à¸”à¹ƒà¸™à¹„à¸—à¸¢à¹ƒà¸™à¸›à¸µ 2555 à¹à¸¥à¸°à¹€à¸›à¹‡à¸™à¸–à¸·à¸­à¸«à¸™à¸¶à¹ˆà¸‡à¹ƒà¸™à¸œà¸¹à¹‰à¸™à¸³à¹ƒà¸™à¸•à¸¥à¸²à¸”\r\n     TWB à¹€à¸›à¹‡à¸™à¸—à¸µà¹ˆà¸£à¸¹à¹‰à¸ˆà¸±à¸à¹ƒà¸™à¸à¸²à¸£à¸ªà¸£à¹‰à¸²à¸‡à¸™à¸§à¸±à¸•à¸à¸£à¸£à¸¡à¹ƒà¸«à¸¡à¹ˆà¹ƒà¸™à¹‚à¸¥à¸ Digital à¸à¹ˆà¸­à¸™à¹ƒà¸„à¸£ à¹€à¸£à¸²à¹€à¸›à¹‡à¸™à¸œà¸¹à¹‰à¸™à¸³à¹ƒà¸™à¸à¸²à¸£à¹€à¸­à¸²à¹€à¸—à¸„à¹‚à¸™à¹‚à¸¥à¸¢à¸µà¹ƒà¸«à¸¡à¹ˆà¹† à¸¡à¸²à¹ƒà¸Šà¹‰à¸à¹ˆà¸­à¸™à¸„à¸¹à¹ˆà¹à¸‚à¹ˆà¸‡ 1-2 à¸›à¸µà¹€à¸ªà¸¡à¸­ à¸­à¸¢à¹ˆà¸²à¸‡à¸à¸²à¸£à¸ªà¸£à¹‰à¸²à¸‡à¹€à¸à¸¡à¸šà¸™ Facebook, à¸à¸²à¸£à¸ªà¸£à¹‰à¸²à¸‡ 3D Museum,  à¸à¸²à¸£à¸—à¸³ Responsive Design à¹ƒà¸™à¸—à¸¸à¸à¹† à¸­à¸¸à¸›à¸à¸£à¸“à¹Œ à¹à¸¥à¸°à¸à¸²à¸£à¸ªà¸£à¹‰à¸²à¸‡ Crowd Donation Platform à¹ƒà¸™à¸›à¸µ 2556 à¸Šà¸·à¹ˆà¸­ Borkboon.com à¸‹à¸¶à¹ˆà¸‡à¸¡à¸µà¸ªà¸¡à¸²à¸Šà¸´à¸à¸¡à¸²à¸à¸—à¸µà¹ˆà¸ªà¸¸à¸”à¹ƒà¸™à¹„à¸—à¸¢à¸–à¸¶à¸‡ 70,000 à¸„à¸™ à¸‹à¸¶à¹ˆà¸‡à¸ˆà¸°à¹€à¸«à¹‡à¸™à¹„à¸”à¹‰à¸§à¹ˆà¸²à¸šà¸£à¸´à¸©à¸±à¸—à¸ªà¸£à¹‰à¸²à¸‡à¸™à¸§à¸±à¸•à¸à¸£à¸£à¸¡à¹ƒà¸«à¹‰à¸à¸±à¸šà¸•à¸¥à¸²à¸”à¸•à¸¥à¸­à¸”à¸¡à¸² à¸ˆà¸™à¹ƒà¸™à¸›à¸±à¸ˆà¸ˆà¸¸à¸šà¸±à¸™ TWB à¹€à¸›à¹‡à¸™ Digital Media Agency à¹à¸«à¹ˆà¸‡à¹à¸£à¸à¹à¸¥à¸°à¹à¸«à¹ˆà¸‡à¹€à¸”à¸µà¸¢à¸§à¹ƒà¸™à¸›à¸£à¸°à¹€à¸—à¸¨à¹„à¸—à¸¢à¸—à¸µà¹ˆà¹ƒà¸«à¹‰à¸šà¸£à¸´à¸à¸²à¸£à¸£à¸°à¸šà¸š Marketing Automation à¹à¸¥à¸° Location Intelligence\r\n     TWB à¸¡à¸µà¹‚à¸­à¸à¸²à¸ªà¹„à¸”à¹‰à¸£à¸±à¸šà¸„à¸³à¸›à¸£à¸¶à¸à¸©à¸²à¹à¸¥à¸°à¸ªà¸™à¸±à¸šà¸ªà¸™à¸¸à¸™à¸ˆà¸²à¸ any i à¹ƒà¸™à¸«à¸¥à¸²à¸¢à¹†à¸”à¹‰à¸²à¸™ à¸‹à¸¶à¹ˆà¸‡ any i à¹€à¸›à¹‡à¸™à¸—à¸µà¹ˆà¸›à¸£à¸¶à¸à¸©à¸²à¸—à¸µà¹ˆà¹à¸•à¸à¸•à¹ˆà¸²à¸‡à¸ˆà¸²à¸à¸šà¸£à¸´à¸©à¸±à¸—à¹ƒà¸«à¹‰à¸„à¸³à¸›à¸£à¸¶à¸à¸©à¸²à¸—à¸±à¹ˆà¸§à¹†à¹„à¸› any i à¹€à¸›à¹‡à¸™à¸—à¸µà¹ˆà¸›à¸£à¸¶à¸à¸©à¸²à¸—à¸µà¹ˆà¸¡à¸µà¸›à¸£à¸°à¸ªà¸šà¸à¸²à¸£à¸“à¹Œà¸ˆà¸£à¸´à¸‡ à¹à¸¥à¸°à¹€à¸›à¹‡à¸™à¸œà¸¹à¹‰à¸šà¸£à¸´à¸«à¸²à¸£à¸—à¸µà¹ˆà¹€à¸„à¸¢à¹„à¸”à¹‰à¸¥à¸‡à¸¡à¸·à¸­à¸—à¸³à¹à¸¥à¸°à¸›à¸£à¸°à¸ªà¸šà¸„à¸§à¸²à¸¡à¸ªà¸³à¹€à¸£à¹‡à¸ˆà¹ƒà¸™à¸˜à¸¸à¸£à¸à¸´à¸ˆ IT à¸—à¸µà¹ˆà¸¡à¸µà¸¡à¸¹à¸¥à¸„à¹ˆà¸²à¸«à¸¥à¸±à¸à¸žà¸±à¸™à¸¥à¹‰à¸²à¸™à¹à¸¥à¹‰à¸§à¸ˆà¸£à¸´à¸‡ à¸ˆà¸¶à¸‡à¹à¸•à¸à¸•à¹ˆà¸²à¸‡à¸ˆà¸²à¸à¸—à¸µà¹ˆà¸›à¸£à¸¶à¸à¸©à¸²à¸—à¸µà¹ˆà¸­à¸·à¹ˆà¸™à¸—à¸µà¹ˆà¸‚à¸²à¸”à¸›à¸£à¸°à¸ªà¸šà¸à¸²à¸£à¸“à¹Œ à¹à¸¥à¸°à¸‚à¸²à¸”à¸„à¸§à¸²à¸¡à¹€à¸‚à¹‰à¸²à¹ƒà¸ˆà¹ƒà¸™à¹€à¸£à¸·à¹ˆà¸­à¸‡à¸à¸²à¸£à¸—à¸³à¸˜à¸¸à¸£à¸à¸´à¸ˆ à¹‚à¸”à¸¢à¹€à¸‰à¸žà¸²à¸°à¸˜à¸¸à¸£à¸à¸´à¸ˆà¸—à¸²à¸‡à¸”à¹‰à¸²à¸™ IT à¸à¸²à¸£à¸—à¸µà¹ˆ TWB à¸¡à¸µà¹‚à¸­à¸à¸²à¸ªà¹„à¸”à¹‰à¸žà¸šà¸à¸±à¸š any i à¸—à¸³à¹ƒà¸«à¹‰à¸à¸²à¸£à¸šà¸£à¸´à¸«à¸²à¸£à¸‡à¸²à¸™à¸‚à¸­à¸‡ TWB à¸¡à¸µà¸§à¸´à¸ªà¸±à¸¢à¸—à¸±à¸¨à¸™à¹Œà¸¡à¸²à¸à¸‚à¸¶à¹‰à¸™ à¹à¸¥à¸°à¸žà¸£à¹‰à¸­à¸¡à¸—à¸µà¹ˆà¸ˆà¸°à¹€à¸•à¸´à¸šà¹‚à¸•à¸­à¸¢à¹ˆà¸²à¸‡à¹€à¸‚à¹‰à¸¡à¹à¸‚à¹‡à¸‡\r\n     any i à¹€à¸›à¹‡à¸™à¸¡à¸²à¸à¸à¸§à¹ˆà¸²à¸—à¸µà¹ˆà¸›à¸£à¸¶à¸à¸©à¸²à¸—à¸µà¹ˆà¸—à¸±à¹ˆà¸§à¹†à¹„à¸› any i à¸¡à¸µà¸—à¸±à¹‰à¸‡à¸§à¸´à¸ªà¸±à¸¢à¸—à¸±à¸¨à¸™à¹Œ à¸›à¸£à¸°à¸ªà¸šà¸à¸²à¸£à¸“à¹Œ à¸„à¸§à¸²à¸¡à¸¡à¸±à¹ˆà¸™à¹ƒà¸ˆ à¸ªà¸²à¸¢à¸ªà¸±à¸¡à¸žà¸±à¸™à¸˜à¹Œà¹ƒà¸™à¸˜à¸¸à¸£à¸à¸´à¸ˆà¸­à¸·à¹ˆà¸™à¹† à¹à¸¥à¸° à¹à¸£à¸‡à¸šà¸±à¸™à¸”à¸²à¸¥à¹ƒà¸ˆà¹ƒà¸«à¹‰à¸à¸±à¸š TWB à¸‹à¸¶à¹ˆà¸‡à¸—à¸³à¹ƒà¸«à¹‰ TWB à¸ªà¸²à¸¡à¸²à¸£à¸–à¹€à¸•à¸´à¸šà¹‚à¸•à¸­à¸¢à¹ˆà¸²à¸‡à¸à¹‰à¸²à¸§à¸à¸£à¸°à¹‚à¸”à¸” à¹à¸¥à¸°à¸¡à¸±à¹ˆà¸™à¸„à¸‡à¹„à¸›à¹ƒà¸™à¹€à¸§à¸¥à¸²à¹€à¸”à¸µà¸¢à¸§à¸à¸±à¸™â€', 'COMPANY PROFILE', '     The Wisdom Bangkok (TWB) is established since 2010. We provided total Digital Marketing Solution for Singha Corporation which started from initiated marketing strategy, implementation as well as created Social Network Platform. By that time, we also expanded our business as a Digital Media Agency and became the largest Digital Marketing Service Provider and the market leader in Digital Marketing Technology.\r\n     TWB is known as an innovator in Digital Marketing Technology for Thai market.  We adopt the latest technology faster than our competitors at least 1 â€“ 2 years in advance such as Facebook Games, 3D museum and Responsive Design Devices. In 2011, we established the largest Crowd Donation Platform named Borkboon.com which has more than 70,000 members. TWB is the ONLY Digital Media Agency in Thailand who can provide Marketing Automation and Location Intelligence to our customers.\r\n     TWB has an opportunity to be consulted and supported by any i in several dimensions. Since any i consultants have very extensive experiences in consulting for large enterprises and Multination companies, therefore, they have very well understanding about how to execute the billion Baht projects as well as the complicate projects. Consulting with any i, we have broaden our mind and have better vision for our business. any i inspire and guide us to grow in a big leap with a sustainable plan.');

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
INSERT INTO `action_photo` VALUES ('12446c83b6', 'ff645202cc_12446c83b6.png', '3', 'ff645202cc');
INSERT INTO `action_photo` VALUES ('1dcebde33c', 'ff645202cc_1dcebde33c.png', '4', 'ff645202cc');
INSERT INTO `action_photo` VALUES ('299744722b', '731518aaaf_299744722b.jpg', '3', '731518aaaf');
INSERT INTO `action_photo` VALUES ('2e0756254a', '731518aaaf_2e0756254a.jpg', '2', '731518aaaf');
INSERT INTO `action_photo` VALUES ('40560fe288', '731518aaaf_40560fe288.jpg', '5', '731518aaaf');
INSERT INTO `action_photo` VALUES ('58cec65fa6', '731518aaaf_58cec65fa6.jpg', '4', '731518aaaf');
INSERT INTO `action_photo` VALUES ('59560715cc', 'ff645202cc_59560715cc.png', '2', 'ff645202cc');
INSERT INTO `action_photo` VALUES ('6a719fbd5d', 'ff645202cc_6a719fbd5d.png', '5', 'ff645202cc');
INSERT INTO `action_photo` VALUES ('c4f7d5d98b', '731518aaaf_c4f7d5d98b.jpg', '1', '731518aaaf');
INSERT INTO `action_photo` VALUES ('fbda5511b2', 'ff645202cc_fbda5511b2.png', '1', 'ff645202cc');

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
INSERT INTO `advisor` VALUES ('25676f41f5', 'à¸—à¸µà¹ˆà¸›à¸£à¸¶à¸à¸©à¸²à¸—à¸²à¸‡à¸˜à¸¸à¸£à¸à¸´à¸ˆ', 'à¸§à¸µà¸£à¸¢à¸² à¸¥à¸´à¸¡à¸›à¸ªà¸¸à¸˜à¸£à¸£à¸¡', '', 'Business Advisor', 'Weraya Limpasuthum', '', '2', '25676f41f5_1450795806.jpg');
INSERT INTO `advisor` VALUES ('3b061675a3', 'à¸—à¸µà¹ˆà¸›à¸£à¸¶à¸à¸©à¸²à¸—à¸²à¸‡à¸šà¸±à¸à¸Šà¸µ', 'à¸™à¸¤à¸¡à¸¥ à¹€à¸§à¸Šà¸›à¸£à¸°à¸ªà¸´à¸—à¸˜à¸´à¹Œ', '', 'Accounting Advisor', 'Narumon Wetchpasit', '', '5', '3b061675a3_1450795850.jpg');
INSERT INTO `advisor` VALUES ('524ad8a8b8', 'à¸—à¸µà¹ˆà¸›à¸£à¸¶à¸à¸©à¸²à¸—à¸²à¸‡à¸˜à¸¸à¸£à¸à¸´à¸ˆ', 'à¸ˆà¸•à¸¸à¸žà¸£ à¸„à¸‡à¸«à¸¸à¹ˆà¸™', '', 'Business Advisor', 'Jatuporn Konghun', '', '4', '524ad8a8b8_1450795834.jpg');
INSERT INTO `advisor` VALUES ('7928667581', 'à¹€à¸¥à¸‚à¸²à¸™à¸¸à¸à¸²à¸£à¸šà¸£à¸´à¸©à¸±à¸—', 'à¸‚à¸™à¸´à¸©à¸à¸²  à¸˜à¸²à¸£à¸²à¸“à¸±à¸•à¸´', '', 'Corporate Secretary', 'Kanittha Tharanut', '', '7', '7928667581_1450795773.jpg');
INSERT INTO `advisor` VALUES ('87e22c3d3c', 'à¸—à¸µà¹ˆà¸›à¸£à¸¶à¸à¸©à¸²à¸—à¸²à¸‡à¸”à¹‰à¸²à¸™à¸›à¸Žà¸´à¸šà¸±à¸•à¸´à¸‡à¸²à¸™', 'à¸˜à¸™à¸´à¸  à¸šà¸¸à¸à¸à¸²à¸ˆà¸²à¸£à¸±à¸à¸©à¹Œ', '', 'Operations Advisor', 'Tanic Bunyajarak', '', '6', '87e22c3d3c_1450795863.jpg');
INSERT INTO `advisor` VALUES ('e9a857e50a', 'à¸—à¸µà¹ˆà¸›à¸£à¸¶à¸à¸©à¸²à¸—à¸²à¸‡à¸˜à¸¸à¸£à¸à¸´à¸ˆ', 'à¹€à¸¡à¸˜à¸´à¸“à¸µ  à¸ˆà¸£à¸´à¸¢à¸²à¸ªà¸–à¸²à¸žà¸£', '', 'Business Advisor', 'Methinee Jariyasathaporn', '', '3', 'e9a857e50a_1450795820.jpg');

-- ----------------------------
-- Table structure for `banner`
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `picture` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT '0',
  `picture_mobile` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('016adac702', '016adac702_1453190538.jpg', 'à¹€à¸£à¸²à¹ƒà¸Šà¹‰à¹ƒà¸ˆà¸£à¹ˆà¸§à¸¡à¸¥à¸‡à¸—à¸¸à¸™', 'Invest with Passion ', '3', '016adac702_mobile_1449047695.jpg');
INSERT INTO `banner` VALUES ('0cec9edb34', '0cec9edb34_1453190561.jpg', 'à¸¡à¸±à¹ˆà¸™à¹ƒà¸ˆà¸—à¸¸à¸à¸à¹‰à¸²à¸§à¸šà¸™à¹€à¸ªà¹‰à¸™à¸—à¸²à¸‡à¸˜à¸¸à¸£à¸à¸´à¸ˆ', 'Confidence Every Step of the Way', '5', '0cec9edb34_mobile_1449047723.jpg');
INSERT INTO `banner` VALUES ('35db40db6b', '35db40db6b_1453190529.jpg', 'Business advisory | venture', 'Business advisory | venture', '1', '35db40db6b_mobile_1449047686.jpg');
INSERT INTO `banner` VALUES ('9d8fa2f317', '9d8fa2f317_1453190550.jpg', 'à¸ˆà¸¸à¸”à¸žà¸¥à¸±à¸‡à¹ƒà¸ˆ à¸‚à¸±à¸šà¹€à¸„à¸¥à¸·à¹ˆà¸­à¸™à¸„à¸¸à¸“à¸ªà¸¹à¹ˆà¸ˆà¸¸à¸”à¸«à¸¡à¸²à¸¢', 'Inspiring You to Bold Achievements', '4', '9d8fa2f317_mobile_1449047715.jpg');
INSERT INTO `banner` VALUES ('e100564fb7', 'e100564fb7_1453190519.jpg', 'à¸•à¸´à¸”à¸›à¸µà¸à¹ƒà¸«à¹‰à¸„à¸§à¸²à¸¡à¸à¸±à¸™', 'Let Your Dreams Take Flight', '2', 'e100564fb7_mobile_1449047704.jpg');

-- ----------------------------
-- Table structure for `contact`
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `detail` text COLLATE utf8_unicode_ci,
  `detail_en` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('1', 'à¸šà¸£à¸´à¸©à¸±à¸—  à¹€à¸­à¸™à¸™à¸µà¹ˆ à¹„à¸­ à¸„à¸­à¸£à¹Œà¸›à¸­à¹€à¸£à¸Šà¸±à¹ˆà¸™ à¸ˆà¸³à¸à¸±à¸”\r\nà¹€à¸¥à¸‚à¸—à¸µà¹ˆ 89 à¸Šà¸±à¹‰à¸™à¸—à¸µà¹ˆ 11 à¸¢à¸¹à¸™à¸´à¸• 1108 à¸­à¸²à¸„à¸²à¸£ à¹€à¸­à¹„à¸­à¹€à¸­ à¹à¸„à¸›à¸›à¸´à¸•à¸­à¸¥ à¹€à¸‹à¹‡à¸™à¹€à¸•à¸­à¸£à¹Œ à¸–à¸™à¸™à¸£à¸±à¸Šà¸”à¸²à¸ à¸´à¹€à¸©à¸ à¹à¸‚à¸§à¸‡à¸”à¸´à¸™à¹à¸”à¸‡ à¹€à¸‚à¸•à¸”à¸´à¸™à¹à¸”à¸‡ à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£ 10400\r\nWork: +66 2 248 4591 Fax: +66 2 248 2936', 'any i corporation\r\nAIA Capital Center 89 Floor 11th Unit 1108 Ratchadaphisek Road, Dindaeng, Bangkok, 10400 Thailand\r\nWork: +66 2 248 4591 Fax: +66 2 248 2936', 'info@anyicorp.com');

-- ----------------------------
-- Table structure for `encore`
-- ----------------------------
DROP TABLE IF EXISTS `encore`;
CREATE TABLE `encore` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `support` text COLLATE utf8_unicode_ci,
  `advice` text COLLATE utf8_unicode_ci,
  `inspriation` text COLLATE utf8_unicode_ci,
  `support_en` text COLLATE utf8_unicode_ci,
  `advice_en` text COLLATE utf8_unicode_ci,
  `inspriation_en` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of encore
-- ----------------------------
INSERT INTO `encore` VALUES ('1', 'à¹€à¸¡à¸·à¹ˆà¸­à¸„à¸¸à¸“à¸¡à¸¸à¹ˆà¸‡à¸¡à¸±à¹ˆà¸™à¸—à¸¸à¹ˆà¸¡à¹€à¸—à¸¥à¸‡à¸—à¸¸à¸™à¹ƒà¸™à¸„à¸§à¸²à¸¡à¸à¸±à¸™ any i à¸à¹‡à¸žà¸£à¹‰à¸­à¸¡à¸£à¹ˆà¸§à¸¡à¸ªà¸™à¸±à¸šà¸ªà¸™à¸¸à¸™à¹ƒà¸«à¹‰à¸˜à¸¸à¸£à¸à¸´à¸ˆà¹ƒà¸™à¸à¸±à¸™à¸‚à¸­à¸‡à¸„à¸¸à¸“à¹€à¸•à¸´à¸šà¹‚à¸•à¹à¸¥à¸°à¹à¸‚à¹‡à¸‡à¹à¸£à¸‡à¸¡à¸²à¸à¸‚à¸¶à¹‰à¸™ à¸ˆà¸™à¸à¸¥à¸²à¸¢à¹€à¸›à¹‡à¸™à¸„à¸§à¸²à¸¡à¸ˆà¸£à¸´à¸‡', 'à¸—à¸µà¸¡à¸‡à¸²à¸™à¸‚à¸­à¸‡ any i à¸¡à¸²à¸ˆà¸²à¸à¸à¸²à¸£à¸—à¸³à¸‡à¸²à¸™à¹ƒà¸™à¸«à¸¥à¸²à¸à¸«à¸¥à¸²à¸¢à¸ªà¸²à¸‚à¸² à¹à¸¥à¸°à¸¥à¹‰à¸§à¸™à¸¡à¸µà¸„à¸§à¸²à¸¡à¸£à¸¹à¹‰ à¸„à¸§à¸²à¸¡à¹€à¸Šà¸µà¹ˆà¸¢à¸§à¸Šà¸²à¸à¹€à¸‰à¸žà¸²à¸°à¸—à¸²à¸‡ à¹ƒà¸«à¹‰à¸„à¸¸à¸“à¸¡à¸±à¹ˆà¸™à¹ƒà¸ˆà¹„à¸”à¹‰à¸§à¹ˆà¸²à¸—à¸¸à¸à¸„à¸³à¹à¸™à¸°à¸™à¸³à¹ƒà¸™à¸—à¸¸à¸à¸‚à¸±à¹‰à¸™à¸•à¸­à¸™à¸‚à¸­à¸‡à¸à¸²à¸£à¸”à¸³à¹€à¸™à¸´à¸™à¸˜à¸¸à¸£à¸à¸´à¸ˆ à¸ˆà¸°à¹€à¸›à¹‡à¸™à¹„à¸›à¸­à¸¢à¹ˆà¸²à¸‡à¸–à¸¹à¸à¸•à¹‰à¸­à¸‡à¹à¸¡à¹ˆà¸™à¸¢à¸³\r\n', 'à¹€à¸£à¸²à¸£à¸¹à¹‰à¸§à¹ˆà¸²à¹ƒà¸™à¸à¸²à¸£à¸—à¸³à¸‡à¸²à¸™ à¹€à¸£à¸·à¹ˆà¸­à¸‡à¸‚à¸­à¸‡à¹ƒà¸ˆ à¸ªà¸³à¸„à¸±à¸à¹„à¸¡à¹ˆà¹à¸žà¹‰à¸ªà¸´à¹ˆà¸‡à¹ƒà¸” any i à¸žà¸£à¹‰à¸­à¸¡à¹à¸Šà¸£à¹Œà¸›à¸£à¸°à¸ªà¸šà¸à¸²à¸£à¸“à¹Œà¹à¸¥à¸°à¹à¸™à¸§à¸„à¸´à¸”à¸ˆà¸²à¸à¸à¸²à¸£à¸—à¸³à¸‡à¸²à¸™à¹€à¸žà¸·à¹ˆà¸­à¸ªà¸£à¹‰à¸²à¸‡à¹à¸£à¸‡à¸šà¸±à¸™à¸”à¸²à¸¥à¹ƒà¸ˆà¹ƒà¸«à¹‰à¸„à¸¸à¸“à¸žà¸£à¹‰à¸­à¸¡à¸—à¸µà¹ˆà¸ˆà¸°à¸à¹ˆà¸²à¸Ÿà¸±à¸™à¹„à¸›à¸–à¸¶à¸‡à¹€à¸ªà¹‰à¸™à¸Šà¸±à¸¢\r\n', 'If you are willing to invest capital and energy in your dreams, any i is ready to help your venture grow from the seed of an idea into a robust reality\r\n', 'The any i team features a wealth of experience from a diversity of industries to guide businesses on the right path to growth and success.\r\n', 'When it comes to achieving success in business, enthusiasm is as significant factor as any other. At any i, we are ready to share hard-won experiences and perspectives, keeping you inspired to overcome any challenges.');

-- ----------------------------
-- Table structure for `partner`
-- ----------------------------
DROP TABLE IF EXISTS `partner`;
CREATE TABLE `partner` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `link` varchar(500) COLLATE utf8_unicode_ci DEFAULT 'javascript:;',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of partner
-- ----------------------------
INSERT INTO `partner` VALUES ('07aa8fa087', '07aa8fa087_1451287173.jpg', '1', 'http://www.weldasia.com');
INSERT INTO `partner` VALUES ('f7bf8cc477', 'f7bf8cc477_1451282829.jpg', '0', 'http://www.greenprocapital.com');

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

-- ----------------------------
-- Table structure for `welcome`
-- ----------------------------
DROP TABLE IF EXISTS `welcome`;
CREATE TABLE `welcome` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `vdo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('vdo','img') COLLATE utf8_unicode_ci DEFAULT 'vdo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of welcome
-- ----------------------------
INSERT INTO `welcome` VALUES ('1', '1446205567.mp4', 'The Business Scanner', '1450941148_img.jpg', 'vdo');
