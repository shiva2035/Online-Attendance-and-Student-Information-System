-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 03:56 PM
-- Server version: 5.5.12
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oams`
--

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `uname` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `from` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`uname`, `subject`, `message`, `from`, `time`) VALUES
('', '', 'http://localhost/shiva/intramail/logo2.png\r\n', 'B082035', '19:33:50'),
('B081167', 'Hi', 'how are you good afternoon', 'B082035', '19:31:11'),
('B082035', 'Hi Happy Republic Da', 'Dear Friend!\r\n    Happy Republic Day! Wish you all the best', 'B082035', '07:03:45'),
('fac_01', 'Reason/Explanation f', 'Suffering from fever', 'SEA01', '14:56:35'),
('fac_01', 'Explanation for the ', 'Sir, really very sorry for coming late for the class.Sir, really very sorry for coming late for the ', 'sea01', '14:08:18'),
('fac_01', 'Hello Welcome to OAS', 'Welcome Dude!', 'fac_01', '17:15:27');
