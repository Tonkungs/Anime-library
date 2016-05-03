-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2014 at 10:04 AM
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
  ON DELETE CASCADE  
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tb_article`
--

INSERT INTO `tb_article` (`idtb_article`, `tb_article_name`, `tb_article`, `tb_article_time`, `tb_member_idtb_member`) VALUES
(1, 'Test 1', 'Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1Test 1', '2014-12-23 20:20:34', 1),
(2, 'à¸³à¹„à¸žà¸³à¸žà¹„à¸³', 'à¹„à¸³à¸žà¸³à¹„à¸žà¹„à¸³à¸ž', '2014-12-23 20:22:07', 2),
(3, '56464', '5464564564564565555555555555555555', '2014-12-24 00:17:39', 1),
(4, '78979', 'gfdgdfgd;gklnohtd;lgndsofhgdlkgn;dgdfgfdg', '2014-12-24 00:20:09', 1),
(5, 'dfgdfg', 'dfgdfg', '2014-12-24 00:20:21', 1),
(6, 'dfsdfsdf''', 'hfhfghfg''', '2014-12-24 00:21:34', 1),
(7, 'dfsdfsdf', 'sdfsdfsdfsdf', '2014-12-24 04:00:50', 1),
(8, '88888888888', '888888853cf/glkjd;goiksjd/lkshd;fsfsdfsf', '2014-12-24 04:00:58', 1),
(9, '88888888888', '888888888888888888888', '2014-12-24 10:53:04', 1),
(10, 'Test Arcticle', 'Test Arcticle', '2014-12-24 12:21:46', 1),
(11, 'dasdasda', 'sdasdasdasdasd', '2014-12-24 15:29:39', 8);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_article`
--
ALTER TABLE `tb_article`
  ADD CONSTRAINT `fk_tb_article_tb_member1` FOREIGN KEY (`tb_member_idtb_member`) REFERENCES `tb_member` (`idtb_member`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
