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
-- Table structure for table `fac_users`
--

CREATE TABLE IF NOT EXISTS `fac_users` (
  `uname` varchar(10) NOT NULL,
  `pass1` varchar(20) NOT NULL,
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `exp` varchar(20) NOT NULL,
  `blood` varchar(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `emergency_mob` varchar(12) NOT NULL,
  `present_addr` varchar(50) NOT NULL,
  `permanent_addr` varchar(50) NOT NULL,
  `class` varchar(5) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_users`
--

INSERT INTO `fac_users` (`uname`, `pass1`, `first`, `last`, `dob`, `doj`, `exp`, `blood`, `email`, `mobile`, `emergency_mob`, `present_addr`, `permanent_addr`, `class`, `remarks`) VALUES
('fac_01', 'fac_01', 'Avihs Kumar', 'K', '1993-01-29', '2008-08-25', '3 Yrs- 5 Months', 'B+', 'shiva2035.abcd@gmail.com', '998975695', '998968952', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar');
