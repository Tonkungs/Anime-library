-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2014 at 10:05 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tb_comment_article`
--

INSERT INTO `tb_comment_article` (`idtb_comment`, `tb_comment_com`, `tb_member_idtb_member`, `tb_article_idtb_article`, `tb_comment_time`) VALUES
(1, '154654136', 1, 5, '2014-12-24 03:21:41'),
(2, 'dfgdfgfdg', 1, 5, '2014-12-24 03:38:57'),
(3, 'gfdfgdfg', 1, 6, '2014-12-24 03:44:57'),
(4, '16d54g132f1gdfg', 1, 6, '2014-12-24 03:45:02'),
(5, 'gdfgdfg', 1, 1, '2014-12-24 03:45:11'),
(6, 'fdg564dfg85dfg', 1, 1, '2014-12-24 03:45:15'),
(7, 'gggggggggggggggggg', 1, 1, '2014-12-24 03:45:19'),
(8, '45645645645645', 1, 2, '2014-12-24 04:10:28'),
(9, '1212', 1, 5, '2014-12-24 04:29:24'),
(10, '55555555555555555', 1, 5, '2014-12-24 04:48:32'),
(11, '6666666666666', 1, 6, '2014-12-24 04:48:48'),
(12, '555555555555', 1, 6, '2014-12-24 04:56:48'),
(13, '333333333333333333', 1, 8, '2014-12-24 04:59:23'),
(16, '888888888888888888888', 1, 9, '2014-12-24 10:53:11'),
(17, 'user2', 9, 5, '2014-12-24 11:36:27');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_comment_article`
--
ALTER TABLE `tb_comment_article`
  ADD CONSTRAINT `fk_tb_comment_tb_member1` FOREIGN KEY (`tb_member_idtb_member`) REFERENCES `tb_member` (`idtb_member`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_comment_tb_article1` FOREIGN KEY (`tb_article_idtb_article`) REFERENCES `tb_article` (`idtb_article`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
