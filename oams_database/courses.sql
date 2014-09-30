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
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` varchar(10) DEFAULT NULL,
  `course_name` varchar(25) DEFAULT NULL,
  `fac_id` varchar(10) DEFAULT NULL,
  `course_timings` varchar(20) DEFAULT NULL,
  `total_lects` int(11) DEFAULT NULL,
  `remarks` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `fac_id`, `course_timings`, `total_lects`, `remarks`) VALUES
('CS2102', 'Discrete Structures', 'fac_01', '08.35-09.30', 20, 'NA'),
('CS2101', 'Data Structures and Probl', 'fac_02', '09.30-10.25', 25, 'NA'),
('CS2103', 'Digital Electronics and L', 'fac_03', '10.35-11.30', 20, 'NA'),
('CS2104', 'Operating System and Admi', 'fac_04', '11.30-12.25', 25, 'NA'),
('CS2105', 'Microprocessor Architectu', 'fac_05', '01.15-02.05', 25, 'NA'),
('CS2106', 'Soft Skills', 'fac_06', '02.05-02.55', 25, 'NA'),
('CS2107', 'Lab Data Structures and P', 'fac_07', '03.05-03.55', 10, 'NA'),
('CS2108', 'Lab Digital Electronics a', 'fac_08', '03.55-04.45', 10, 'NA'),
('CS2109', 'Lab Operating System and ', 'fac_09', '08.35-10.25', 10, 'NA'),
('CS2110', 'Lab Microprocessor Archit', 'fac_10', '10.35-12.25', 10, 'NA'),
('CS2111', 'Lab Soft Skills', 'fac_11', '01.15-02.55', 10, 'NA'),
('CS2201', 'Engineering Maths - III', 'fac_12', '08.35-09.30', 20, 'NA'),
('CS2202', 'Object Oriented and multi', 'fac_13', '09.30-10.25', 25, 'NA'),
('CS2203', 'Microprocessors and Inter', 'fac_14', '10.35-11.30', 20, 'NA'),
('CS2204', 'Computer Graphics and Gam', 'fac_15', '11.30-12.25', 25, 'NA'),
('CS2205', 'Computer Organization', 'fac_16', '01.15-02.05', 25, 'NA'),
('CS2206', 'Lab-Programming Laborator', 'fac_17', '02.05-02.55', 25, 'NA'),
('CS2207', 'Tutorial- Engineering Mat', 'fac_18', '03.05-03.55', 10, 'NA'),
('CS2208', 'Lab-Object Oriented and m', 'fac_19', '03.55-04.45', 10, 'NA'),
('CS2209', 'Lab-Microprocessors and I', 'fac_20', '08.35-10.25', 10, 'NA'),
('CS3101', 'Database Management Syste', 'fac_21', '08.35-09.30', 20, 'NA'),
('CS3102', 'Data Communications', 'fac_22', '09.30-10.25', 25, 'NA'),
('CS3103', 'Microprocessors and Micro', 'fac_23', '10.35-11.30', 20, 'NA'),
('CS3104', 'Digital Signal Processing', 'fac_24', '11.30-12.25', 25, 'NA'),
('CS3105', 'Theory of Computation', 'fac_25', '01.15-02.05', 25, 'NA'),
('CS3106', 'RDBMS and Visual Programm', 'fac_26', '02.05-02.55', 25, 'NA'),
('CS3107', 'Lab RDBMS and Visual Prog', 'fac_27', '03.05-03.55', 10, 'NA'),
('CS3108', 'Lab Signal Processing Lab', 'fac_28', '03.55-04.45', 10, 'NA'),
('CS3201', 'Principles of Programming', 'fac_29', '10.35-12.25', 10, 'NA'),
('CS3202', 'Computer Networks(3)', 'fac_30', '01.15-02.55', 10, 'NA'),
('CS3203', 'Finance and Management In', 'fac_31', '08.35-09.30', 20, 'NA'),
('CS3204', 'Systems Programming & Ope', 'fac_32', '09.30-10.25', 25, 'NA'),
('CS3205', 'Software Engineering', 'fac_33', '10.35-11.30', 20, 'NA'),
('CS3206', 'Computer Networks(1)', 'fac_34', '11.30-12.25', 25, 'NA'),
('CS3207', 'Lab Software Laboratory', 'fac_35', '01.15-02.05', 10, 'NA'),
('CS3208', 'Lab Computer Networks', 'fac_36', '02.05-02.55', 10, 'NA'),
('CS3209', 'Lab Software Development ', 'fac_37', '03.05-03.55', 10, 'NA'),
('CS3210', 'Lab Seminar and Technical', 'fac_38', '03.55-04.45', 10, 'NA'),
('CS4101', 'Design and Analysis of Al', 'fac_39', '08.35-09.30', 20, 'NA'),
('CS4102', 'Principal of Compiler Des', 'fac_40', '09.30-10.25', 25, 'NA'),
('CS4103', 'Object Oriented Modelling', 'fac_41', '10.35-11.30', 20, 'NA'),
('CS4104', 'Ele-I Artificial Intellig', 'fac_42', '11.30-12.25', 25, 'NA'),
('CS4105', 'Ele-II Software Testing a', 'fac_43', '01.15-02.05', 25, 'NA'),
('CS4106', 'Lab Object Oriented Model', 'fac_44', '02.05-02.55', 25, 'NA'),
('CS4107', 'Lab Artificial Intelligen', 'fac_45', '03.05-03.55', 10, 'NA'),
('CS4108', 'Lab Computer Laboratory-I', 'fac_46', '03.55-04.45', 10, 'NA'),
('CS4201', 'Distributed Operating Sys', 'fac_47', '08.35-09.30', 20, 'NA'),
('CS4202', 'Advanced Computer Archite', 'fac_48', '09.30-10.25', 25, 'NA'),
('CS4203', 'Elective-III', 'fac_49', '10.35-11.30', 20, 'NA'),
('CS4204', 'Elective-IV', 'fac_50', '11.30-12.25', 25, 'NA'),
('CS4205', 'Lab Elective-III', 'fac_51', '01.15-02.05', 25, 'NA'),
('CS4206', 'Lab Computer Laboratory-I', 'fac_52', '02.05-02.55', 25, 'NA'),
('CS4207', 'Lab Project Work', 'fac_53', '03.05-03.55', 10, 'NA'),
('CS5101', 'Applied Algorithms', 'fac_54', '08.35-09.30', 20, 'NA'),
('CS5102', 'High Performance Database', 'fac_55', '09.30-10.25', 25, 'NA'),
('CS5103', 'Advanced Computer Archite', 'fac_56', '10.35-11.30', 20, 'NA'),
('CS5104', 'Research Methodology', 'fac_57', '11.30-12.25', 25, 'NA'),
('CS5105', 'ME-I Elective –I', 'fac_58', '01.15-02.05', 25, 'NA'),
('CS5106', 'Laboratory Practice-I', 'fac_59', '02.05-02.55', 25, 'NA'),
('CS5201', 'Operating System Design', 'fac_60', '08.35-09.30', 20, 'NA'),
('CS5202', 'Software Design and Archi', 'fac_61', '09.30-10.25', 20, 'NA'),
('CS5203', 'Advanced Computer Network', 'fac_62', '10.35-11.30', 25, 'NA'),
('CS5204', 'ME-II Elective –II', 'fac_63', '11.30-12.25', 20, 'NA'),
('CS5205', 'Laboratory Practice-II', 'fac_64', '01.15-02.05', 10, 'NA'),
('CS2110', 'Discrete Structuress', 'fac_0', '08.35-9.45', 20, 'NA');
