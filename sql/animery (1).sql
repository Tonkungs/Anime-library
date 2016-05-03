-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2015 at 05:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `animery`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anime`
--

CREATE TABLE IF NOT EXISTS `tb_anime` (
  `idtb_anime_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสอนิเมะ',
  `tb_anime_name_hi` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่ออนิเมะฮิรากานะ',
  `tb_anime_genres` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชนิดของอนิเมะ',
  `tb_anime_Type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทอนิเมะ',
  `tb_anime_Synopsis` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'เนื้อเรื่องน่อ',
  `tb_anime_Picture` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ภาพขนาดเล็ก',
  `tb_anime_Picture_Head` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ภาพหัว',
  `tb_anime_time` datetime NOT NULL COMMENT 'เวลาที่เพิ่มอนิเมะเข้ามา',
  `tb_anime_vdo` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ลิงค์ vdo',
  `tb_member_idtb_member` int(11) NOT NULL,
  PRIMARY KEY (`idtb_anime_id`,`tb_member_idtb_member`),
  UNIQUE KEY `idtb_anime_id_UNIQUE` (`idtb_anime_id`),
  KEY `fk_tb_anime_tb_member1_idx` (`tb_member_idtb_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_anime`
--

INSERT INTO `tb_anime` (`idtb_anime_id`, `tb_anime_name_hi`, `tb_anime_genres`, `tb_anime_Type`, `tb_anime_Synopsis`, `tb_anime_Picture`, `tb_anime_Picture_Head`, `tb_anime_time`, `tb_anime_vdo`, `tb_member_idtb_member`) VALUES
(1, 'Sword Art Online II', 'Action', 'TV SERIES', 'One year after the SAO incident, Kirito is approached by Seijiro Kikuoka from Japan''s Ministry of Internal Affairs and Communications Department "VR Division" with a rather peculiar request. That was an investigation on the "Death Gun" incident that occurred in the gun and steel filled VRMMO called Gun Gale Online (GGO). "Players who are shot by a mysterious avatar with a jet black gun lose their lives even in the real world..." Failing to turn down Kikuoka''s bizarre request, Kirito logs in to GGO even though he is not completely convinced that the virtual world could physically affect the real world. Kirito wanders in an unfamiliar world in order to gain any clues about the "Death Gun." Then, a female sniper named Sinon who owns a gigantic "Hecate II" rifle extends Kirito a helping hand. With Sinon''s help, Kirito decides to enter the "Bullet of Bullets," a large tournament to choose the most powerful gunner within the realm of GGO, in hopes to become the target of the "Death Gun" and make direct contact with the mysterious avatar. ', 'img/pic/65185l.jpg', 'img/picHead/an-saoll.jpg', '2014-12-24 05:01:41', 'xaxHMzVosl4', 1),
(2, 'ALDNOAH.ZERO', 'Action', 'TV SERIES', 'The Knights of Mars fall from the skies. Spurring on their giants made of steel. In order to eradicate the humans of Earth. This is ALDNOAH.ZERO. Creators of overwhelming power have gathered to make this epic tale a reality. Having once worked on the TV anime series Fate/Zero, Gen Urobuchi, writer of supreme skill who plumbs the deepest recesses of the mind; Ei Aoki, who exceeds his viewers'' expectations by light years with his visual expressions that are both gorgeous and audacious, enter the ring once more. Animation production will be by A-1 Pictures, as well as TROYCA, which Aoki himself is involved with. In addition, Takako Shimura is also on board as original character designer. The delicate bearing of her characters painfully depicts people living through an interplanetary war. Plus, the mecha designs are overseen by cutting-edge I-IV. As for the music, Hiroyuki Sawano will add an air of profundity. What they are creating is striking action, world-building where no detail has been overlooked, and an almost palpable sense of the terror of war, and personal drama resulting from the intertwining of genuine, earnest emotion. This will be an utterly new robot anime that both sticks to the tried-and-true, yet also is unlike anything seen before. ALDNOAH.ZERO. This show is declaring war on us humans of Earth. You must go out and meet it.', 'img/pic/60263.jpg', 'img/picHead/an-ac0.jpg', '2014-12-24 05:02:03', 'WW93-iM0V2Y', 1),
(3, 'Akame ga Kill!', 'Action', 'TV SERIES', 'Tatsumi, a boy swordsman hoping to save the village he lives in from suffering from the oppression of the empire, leaves for the imperial capital with his childhood friend and a magic charm. Along the way, they get separated by a bandit attack; and when Tatsumi arrives at the imperial capital all alone, what awaited was its true colorsâ€“â€“so corrupt that it would strike anyone speechless.\r\nâ€œThere is a fearsome clan of assassins that have recently been targeting the directors of the imperial capital and the rich.â€\r\nAfter Tatsumi hears of such a rumor in the home of the noble he found shelter with, he realizes their existence, which hides in the darkness of night.\r\nThe existence of the clan of assassinsâ€“â€“of those from Night Raid.', 'img/pic/Akame ga Kill!.jpg', 'img/picHead/an-Akame-ga-Kill!.jpg', '2014-12-24 11:30:51', 'lrd5UriGpq8', 1),
(4, 'Black Butler Book of Circus', 'Fantasy', 'TV SERIES', 'In Victorian London, the breathtaking performances of the Noah''s Ark Circus have captured the attention of people all across the city. But the spell of magic and wonderment woven under the big top is not without consequences. Children have suddenly begun to vanish, and some suspect these mysterious performers are responsible. In an attempt to get to the bottom of these disturbing disappearances, the dashing duo of demon butler, Sebastian Michaelis, and his young master, Ciel Phantomhive, will infiltrate the circus and uncover whatever darkness may lie at its core!\r\n\r\n', 'img/pic/Black Butler Book of Circus.jpg', 'img/picHead/4.jpg', '2014-12-24 10:46:01', 'C8ZLjAT9ewk', 1),
(5, 'Persona 4 the Golden ANIMATION', 'Mystery', 'TV SERIES', '3 years have passed since the anime series, Persona 4 was aired...\r\nAnd now, they''re coming back! Based on a hugely popular RPG, Persona 4 became a sensation as soon as it started airing in 2011, drawing in not only gaming fans, but anime fans as well.\r\nReleased after the broadcast, the PlayStation Vita title, Persona 4 Golden, was a massive hit, with 350,000 copies sold, as if to flaunt Persona 4''s seemingly unstoppable popularity.\r\nAnd this summer, they''re coming back with the usual gang, joined by a few new faces.\r\nJuly 2014...at last, the "Golden" days will begin! Don''t miss the start of this new story. Spring. Far from the city, time flows peacefully in this rural town.\r\nAs the cherry blossoms scatter in the wind, a young man named Yu Narukami steps off the train at Yasoinaba Station.\r\nYu has come to this town, where his uncle lives, for family reasons; he will be transferring into the local high school, Yasogami High. And so begins his school life... The shopping mall after school. A series of murders taking place in town.\r\nThe Midnight Channel, airing late at nightâ€¦ What lies in store for Yu and his friends "this time around?"', 'img/pic/63251.jpg', 'img/picHead/7.jpg', '2014-12-24 10:47:30', 'BnrWjXVqV2M', 1),
(6, 'Samurai Jam -Bakumatsu Rock-', 'Historical', 'TV SERIES', 'It is the era that will later be known as Bakumatsu, the â€œSong of Peacefulâ€ Age...\r\nA time of peace when the people''s hearts were captivated by \r\nthe Tokugawa shogunate''s Heaven''s Songs.\r\nSinging the Heaven''s Songs are the Top Idols, the Shinsengumi.\r\nTheir voices pierce the hearts of young girls, and their live shows rock the world.\r\nBy leveraging the Idols'' star power and a reign of peace through Heaven''s Songs, the shogunate seeks absolute control over the people, arresting those who sing anything else.\r\nBut some don''t take kindly to the shogunate''s controlling ways.\r\nLike Ryoma Sakamoto, a man who loves freedom and rock.\r\nHe''s ready to make a stand with his guitar and his rock-and-roll soul!\r\nWill his passion be enough to liberate the souls of the people?\r\nThe Shinsengumi, who steal the people''s hearts,\r\nand the people who are about to change history...\r\nThe rockers'' voices are about to clash...', 'img/pic/62557.jpg', 'img/picHead/9.jpg', '2014-12-24 11:05:38', '8QIrrVwfSfg', 1),
(7, 'M3 the dark metal', 'C2C', 'TV SERIES', 'A distorted, endlessly black darkness.\r\nThe location where the dark swallowed everything and took everything from us has become known as the Lightless Realm.\r\nBorn there, as if they were mirror images of the despair and chaos humans felt, were aberrations.\r\nThey were called Admonitions.\r\nAn investigation of the Lightless Realm that eats away at the human psyche.\r\nCan a group of eight boys and girls gathered in an effort to combat the Admonitions see the light of the future beyond the Lightless Realm, while their past destinies and dangerous present intertwine in a complicated web?', 'img/pic/60273.jpg', 'img/picHead/10.jpg', '2014-12-24 18:35:48', '7KeRvmgSnDw', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_article`
--

CREATE TABLE IF NOT EXISTS `tb_article` (
  `idtb_article` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสบทความ\n',
  `tb_article_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อบทความ\n',
  `tb_article` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'ตัวบทความ',
  `tb_article_time` datetime NOT NULL COMMENT 'เวลาที่สร้าง\n',
  `tb_member_idtb_member` int(11) NOT NULL,
  PRIMARY KEY (`idtb_article`,`tb_member_idtb_member`),
  KEY `fk_tb_article_tb_member1_idx` (`tb_member_idtb_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tb_article`
--

INSERT INTO `tb_article` (`idtb_article`, `tb_article_name`, `tb_article`, `tb_article_time`, `tb_member_idtb_member`) VALUES
(3, '56464', '5464564564564565555555555555555555', '2014-12-24 00:17:39', 1),
(4, '78979', 'gfdgdfgd;gklnohtd;lgndsofhgdlkgn;dgdfgfdg', '2014-12-24 00:20:09', 1),
(5, 'dfgdfg', 'dfgdfg', '2014-12-24 00:20:21', 1),
(6, 'dfsdfsdf''', 'hfhfghfg''', '2014-12-24 00:21:34', 1),
(13, 'ggggg', 'ggggg', '2014-12-24 18:35:18', 1),
(21, 'กกกกกกกกกกกก', 'กกกกกกกกกกกกกกกกกกกกกกก', '2014-12-25 15:29:41', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_comment_anime`
--

CREATE TABLE IF NOT EXISTS `tb_comment_anime` (
  `idtb_comment` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสคอมเม็น',
  `tb_comment_com` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'ช่องกรอกคอมเม็น',
  `tb_member_idtb_member` int(11) NOT NULL,
  `tb_comment_time` datetime NOT NULL COMMENT 'วันที่คอมเม็น',
  `tb_anime_idtb_anime_id` int(11) NOT NULL,
  PRIMARY KEY (`idtb_comment`,`tb_member_idtb_member`,`tb_anime_idtb_anime_id`),
  UNIQUE KEY `tb_comment_date_UNIQUE` (`tb_comment_time`),
  KEY `fk_tb_comment_tb_member1_idx` (`tb_member_idtb_member`),
  KEY `fk_tb_comment_copy1_tb_anime1_idx` (`tb_anime_idtb_anime_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tb_comment_anime`
--

INSERT INTO `tb_comment_anime` (`idtb_comment`, `tb_comment_com`, `tb_member_idtb_member`, `tb_comment_time`, `tb_anime_idtb_anime_id`) VALUES
(3, 'dsfdf', 1, '2014-12-24 05:31:22', 1),
(4, 'tyrtyrtyrty', 1, '2014-12-24 05:39:17', 1),
(5, 'yututyutyutyu', 1, '2014-12-24 05:39:20', 1),
(6, 'tyutyutyu21f65gh4g2.3hfgh', 1, '2014-12-24 05:39:30', 2),
(7, 'sdsadasd', 1, '2014-12-24 05:39:54', 2),
(8, 'trrtert', 1, '2014-12-24 05:42:25', 2),
(9, 'tyrtyrty', 1, '2014-12-24 05:42:31', 1),
(10, '12312312312321', 1, '2014-12-24 10:50:35', 7),
(11, '2222222222222222222222222222222222222222222222', 1, '2014-12-24 10:50:55', 6),
(12, 'sadasd', 1, '2014-12-24 13:27:08', 7),
(13, '546456', 1, '2014-12-24 13:33:07', 6),
(14, '54646456', 1, '2014-12-24 13:33:24', 7),
(15, '45646456', 1, '2014-12-24 13:39:37', 5),
(16, '54646464123123', 1, '2014-12-24 13:43:30', 5),
(17, 'fsdffsf', 1, '2014-12-24 13:45:03', 3),
(18, 'hjgjghj', 1, '2014-12-24 14:42:11', 1),
(19, 'asdasdas', 8, '2014-12-24 16:15:37', 1),
(20, 'dsfsd', 8, '2014-12-24 16:15:39', 1),
(21, 'sadasdas', 8, '2014-12-24 16:23:30', 7),
(22, 'fghfhfgh', 8, '2014-12-24 16:32:11', 4),
(23, 'hgfhyfgh', 1, '2014-12-24 18:33:42', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_comment_article`
--

CREATE TABLE IF NOT EXISTS `tb_comment_article` (
  `idtb_comment` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสคอมเม็น',
  `tb_comment_com` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'ช่องกรอกคอมเม็น',
  `tb_member_idtb_member` int(11) NOT NULL,
  `tb_article_idtb_article` int(11) NOT NULL,
  `tb_comment_time` datetime NOT NULL COMMENT 'วันที่คอมเม็น',
  PRIMARY KEY (`idtb_comment`,`tb_member_idtb_member`,`tb_article_idtb_article`),
  UNIQUE KEY `tb_comment_date_UNIQUE` (`tb_comment_time`),
  KEY `fk_tb_comment_tb_member1_idx` (`tb_member_idtb_member`),
  KEY `fk_tb_comment_tb_article1_idx` (`tb_article_idtb_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tb_comment_article`
--

INSERT INTO `tb_comment_article` (`idtb_comment`, `tb_comment_com`, `tb_member_idtb_member`, `tb_article_idtb_article`, `tb_comment_time`) VALUES
(1, '154654136', 1, 5, '2014-12-24 03:21:41'),
(2, 'dfgdfgfdg', 1, 5, '2014-12-24 03:38:57'),
(3, 'gfdfgdfg', 1, 6, '2014-12-24 03:44:57'),
(4, '16d54g132f1gdfg', 1, 6, '2014-12-24 03:45:02'),
(9, '1212', 1, 5, '2014-12-24 04:29:24'),
(10, '55555555555555555', 1, 5, '2014-12-24 04:48:32'),
(11, '6666666666666', 1, 6, '2014-12-24 04:48:48'),
(12, '555555555555', 1, 6, '2014-12-24 04:56:48'),
(17, 'user2', 9, 5, '2014-12-24 11:36:27'),
(22, 'à¸—à¸”à¸ªà¸­à¸šà¸—à¸”à¸ªà¸­à¸šà¸—à¸”à¸ªà¸­à¸šà¸—à¸”à¸ªà¸­à¸š', 8, 4, '2014-12-25 15:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE IF NOT EXISTS `tb_member` (
  `idtb_member` int(11) NOT NULL AUTO_INCREMENT,
  `tb_member_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสสมาชิก',
  `tb_member_pass` varchar(70) COLLATE utf8_unicode_ci NOT NULL COMMENT 'พาสสมาชิก',
  `tb_member_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อีเมล์',
  `tb_member_time` datetime NOT NULL COMMENT 'เวลาที่สมัคร\n',
  `tb_member_type` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user' COMMENT 'ประเภทสมาชิก',
  PRIMARY KEY (`idtb_member`),
  UNIQUE KEY `tb_member_id_UNIQUE` (`tb_member_id`),
  UNIQUE KEY `tb_member_email_UNIQUE` (`tb_member_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`idtb_member`, `tb_member_id`, `tb_member_pass`, `tb_member_email`, `tb_member_time`, `tb_member_type`) VALUES
(1, 'admin', 'add2591687d7ce7a7d69a7c7f73ee4764c971358', 'ton_narutos_ddv.2dhjj@hotmail.com', '2014-12-23 13:09:34', 'admin'),
(2, 'adming', '062bc38ef31d5b80c0ad764e7b938218256c12dd', 'ton_narutos_ddv.2dfsdfhjj@hotmail.com', '2014-12-23 13:10:05', 'user'),
(3, 'asasas', 'a66d719d6e2b73effdabac9db7fa48661d868c3e', 'tpm@hot.com', '2014-12-23 16:58:55', 'user'),
(4, 'dsfdsfsdfff', 'ed1bf4207ca07f5ff4a9b4b6721db7a8966103f9', 'dsfdsfsd@oh.com', '2014-12-23 16:59:25', 'user'),
(5, 'asasassdsadsa', '64e9a2f73fc823525a717f608a8c4c22edb003ba', 'ton_narutosfdsf_ddv.2dfsdfhjj@hotmail.com', '2014-12-23 17:25:39', 'user'),
(6, 'fdgdfgfrf', 'e11c9ee45409e079d26e9aefe1a5e6f90fb420bc', 'gfdgdfg@g.com', '2014-12-23 17:28:03', 'user'),
(7, 'adminfdf', 'af8ab7682674a50c223629ec085794cb16853cca', 'toninputEmail_v.2@hotmail.com', '2014-12-23 19:57:03', 'user'),
(8, 'user', 'd75e01111e9b0b31f2d767ce2dd93f2c81cf8b0f', 'fdf@hot.comuser', '2014-12-24 00:26:01', 'user'),
(9, 'user2', '456f688939c8ad4bc929f105b3296fdf695273db', 'user2@hot.com', '2014-12-24 11:36:15', 'user'),
(11, 'ssssssssss', 'add2591687d7ce7a7d69a7c7f73ee4764c971358', 'admin@hot.com', '2014-12-24 14:27:09', 'user'),
(12, '555555555', 'fc3b567f2f50b7ef8b428641cee9a8daa9649ad3', '555555555@h.com', '2014-12-24 14:28:08', 'user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anime`
--
ALTER TABLE `tb_anime`
  ADD CONSTRAINT `fk_tb_anime_tb_member1` FOREIGN KEY (`tb_member_idtb_member`) REFERENCES `tb_member` (`idtb_member`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_article`
--
ALTER TABLE `tb_article`
  ADD CONSTRAINT `fk_tb_article_tb_member1` FOREIGN KEY (`tb_member_idtb_member`) REFERENCES `tb_member` (`idtb_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_comment_anime`
--
ALTER TABLE `tb_comment_anime`
  ADD CONSTRAINT `fk_tb_comment_copy1_tb_anime1` FOREIGN KEY (`tb_anime_idtb_anime_id`) REFERENCES `tb_anime` (`idtb_anime_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_comment_tb_member10` FOREIGN KEY (`tb_member_idtb_member`) REFERENCES `tb_member` (`idtb_member`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_comment_article`
--
ALTER TABLE `tb_comment_article`
  ADD CONSTRAINT `fk_tb_comment_tb_article1` FOREIGN KEY (`tb_article_idtb_article`) REFERENCES `tb_article` (`idtb_article`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tb_comment_tb_member1` FOREIGN KEY (`tb_member_idtb_member`) REFERENCES `tb_member` (`idtb_member`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
