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
('fac_01', 'fac_01', 'Shiva Kumar', 'K', '1993-01-29', '2008-08-25', '3 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808987667', '996380898798', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_02', 'fac_02', 'Shiva Kumar', 'Kanneboina', '1993-01-28', '2008-08-24', '4 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808957', '9963808957', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_03', 'fac_03', 'Shiva Kumar', 'K', '1993-01-27', '2008-08-23', '5 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808958', '9963808958', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_04', 'fac_04', 'Shiva Kumar', 'K', '1993-01-26', '2008-08-22', '6 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808959', '9963808959', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_05', 'fac_05', 'Shiva Kumar', 'K', '1993-01-25', '2008-08-21', '7 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808960', '9963808960', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_06', 'fac_06', 'Shiva Kumar', 'K', '1993-01-24', '2008-08-20', '8 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808961', '9963808961', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_07', 'fac_07', 'Shiva Kumar', 'K', '1993-01-23', '2008-08-19', '9 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808962', '9963808962', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_08', 'fac_08', 'Shiva Kumar', 'K', '1993-01-22', '2008-08-18', '10 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808963', '9963808963', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_09', 'fac_09', 'Shiva Kumar', 'K', '1993-01-21', '2008-08-17', '11 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808964', '9963808964', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_10', 'fac_10', 'Shiva Kumar', 'K', '1993-01-20', '2008-08-16', '12 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808965', '9963808965', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_11', 'fac_11', 'Shiva Kumar', 'K', '1993-01-19', '2008-08-15', '13 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808966', '9963808966', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_12', 'fac_12', 'Shiva Kumar', 'K', '1993-01-18', '2008-08-14', '14 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808967', '9963808967', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_13', 'fac_13', 'Shiva Kumar', 'K', '1993-01-17', '2008-08-13', '15 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808968', '9963808968', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_14', 'fac_14', 'Shiva Kumar', 'K', '1993-01-16', '2008-08-12', '16 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808969', '9963808969', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_15', 'fac_15', 'Shiva Kumar', 'K', '1993-01-15', '2008-08-11', '17 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808970', '9963808970', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_16', 'fac_16', 'Shiva Kumar', 'K', '1993-01-14', '2008-08-10', '18 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808971', '9963808971', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_17', 'fac_17', 'Shiva Kumar', 'K', '1993-01-13', '2008-08-09', '19 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808972', '9963808972', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_18', 'fac_18', 'Shiva Kumar', 'K', '1993-01-12', '2008-08-08', '20 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808973', '9963808973', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_19', 'fac_19', 'Shiva Kumar', 'K', '1993-01-11', '2008-08-07', '21 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808974', '9963808974', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar'),
('fac_20', 'fac_20', 'Shiva Kumar', 'K', '1993-01-10', '2008-08-06', '22 Yrs- 5 Months', 'B+', 'shiva2035.iiit@gmail.com', '9963808975', '9963808975', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', 'SEA', 'Student at RGUKT-Basar');
