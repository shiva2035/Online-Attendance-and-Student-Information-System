-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 03:55 PM
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
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `uname` varchar(10) DEFAULT NULL,
  `pass1` varchar(15) DEFAULT NULL,
  `first` varchar(13) DEFAULT NULL,
  `last` varchar(20) DEFAULT NULL,
  `father` varchar(20) DEFAULT NULL,
  `mother` varchar(8) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `blood` varchar(3) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `fath_email` varchar(30) DEFAULT NULL,
  `moth_email` varchar(30) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `fath_mobile` varchar(10) DEFAULT NULL,
  `emergency_mob` varchar(10) DEFAULT NULL,
  `present_addr` varchar(50) DEFAULT NULL,
  `permanent_addr` varchar(50) DEFAULT NULL,
  `class` varchar(5) DEFAULT NULL,
  `tutor_id` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`uname`, `pass1`, `first`, `last`, `father`, `mother`, `dob`, `blood`, `email`, `fath_email`, `moth_email`, `mobile`, `fath_mobile`, `emergency_mob`, `present_addr`, `permanent_addr`, `class`, `tutor_id`) VALUES
('admin', 'admin', 'Shiva Kumar', 'K', 'Administration', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
