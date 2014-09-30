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
-- Table structure for table `studetails`
--

CREATE TABLE IF NOT EXISTS `studetails` (
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
-- Dumping data for table `studetails`
--

INSERT INTO `studetails` (`uname`, `pass1`, `first`, `last`, `father`, `mother`, `dob`, `blood`, `email`, `fath_email`, `moth_email`, `mobile`, `fath_mobile`, `emergency_mob`, `present_addr`, `permanent_addr`, `class`, `tutor_id`) VALUES
('sea01', 'shiva01', 'Shiva Kumar01', 'Kanneboina01', 'Krishnaiah', 'Padma', '1993-01-29', 'B+', 'shiva2035.iiit@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', '9963808956', 'fath_mobil', '9963808956', 'present_addr_01', 'permanent_addr_01', 'SEA', 'Tutor_01'),
('sea02', 'shiva02', 'Shiva Kumar02', 'Kanneboina02', 'Father02', 'Mother02', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', '9963808956', 'fath_mobil', 'emergency_', 'present_addr_02', 'permanent_addr_02', 'Class', 'Tutor_02'),
('sea03', 'shiva03', 'Shiva Kumar03', 'Kanneboina03', 'Father03', 'Mother03', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_0', 'fath_mobil', 'emergency_', 'present_addr_03', 'permanent_addr_03', 'Class', 'Tutor_03'),
('sea04', 'shiva04', 'Shiva Kumar04', 'Kanneboina04', 'Father04', 'Mother04', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_0', 'fath_mobil', 'emergency_', 'present_addr_04', 'permanent_addr_04', 'Class', 'Tutor_04'),
('sea05', 'shiva05', 'Shiva Kumar05', 'Kanneboina05', 'Father05', 'Mother05', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_0', 'fath_mobil', 'emergency_', 'present_addr_05', 'permanent_addr_05', 'Class', 'Tutor_05'),
('sea06', 'shiva06', 'Shiva Kumar06', 'Kanneboina06', 'Father06', 'Mother06', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_0', 'fath_mobil', 'emergency_', 'present_addr_06', 'permanent_addr_06', 'Class', 'Tutor_06'),
('sea07', 'shiva07', 'Shiva Kumar07', 'Kanneboina07', 'Father07', 'Mother07', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_0', 'fath_mobil', 'emergency_', 'present_addr_07', 'permanent_addr_07', 'Class', 'Tutor_07'),
('sea08', 'shiva08', 'Shiva Kumar08', 'Kanneboina08', 'Father08', 'Mother08', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_0', 'fath_mobil', 'emergency_', 'present_addr_08', 'permanent_addr_08', 'Class', 'Tutor_08'),
('sea09', 'shiva09', 'Shiva Kumar09', 'Kanneboina09', 'Father09', 'Mother09', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_0', 'fath_mobil', 'emergency_', 'present_addr_09', 'permanent_addr_09', 'Class', 'Tutor_09'),
('sea10', 'shiva10', 'Shiva Kumar10', 'Kanneboina10', 'Father10', 'Mother10', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_1', 'fath_mobil', 'emergency_', 'present_addr_10', 'permanent_addr_10', 'Class', 'Tutor_10'),
('sea11', 'shiva11', 'Shiva Kumar11', 'Kanneboina11', 'Father11', 'Mother11', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_1', 'fath_mobil', 'emergency_', 'present_addr_11', 'permanent_addr_11', 'Class', 'Tutor_11'),
('sea12', 'shiva12', 'Shiva Kumar12', 'Kanneboina12', 'Father12', 'Mother12', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_1', 'fath_mobil', 'emergency_', 'present_addr_12', 'permanent_addr_12', 'Class', 'Tutor_12'),
('sea13', 'shiva13', 'Shiva Kumar13', 'Kanneboina13', 'Father13', 'Mother13', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_1', 'fath_mobil', 'emergency_', 'present_addr_13', 'permanent_addr_13', 'Class', 'Tutor_13'),
('sea14', 'shiva14', 'Shiva Kumar14', 'Kanneboina14', 'Father14', 'Mother14', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_1', 'fath_mobil', 'emergency_', 'present_addr_14', 'permanent_addr_14', 'Class', 'Tutor_14'),
('sea15', 'shiva15', 'Shiva Kumar15', 'Kanneboina15', 'Father15', 'Mother15', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_1', 'fath_mobil', 'emergency_', 'present_addr_15', 'permanent_addr_15', 'Class', 'Tutor_15'),
('sea16', 'shiva16', 'Shiva Kumar16', 'Kanneboina16', 'Father16', 'Mother16', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_1', 'fath_mobil', 'emergency_', 'present_addr_16', 'permanent_addr_16', 'Class', 'Tutor_16'),
('sea17', 'shiva17', 'Shiva Kumar17', 'Kanneboina17', 'Father17', 'Mother17', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_1', 'fath_mobil', 'emergency_', 'present_addr_17', 'permanent_addr_17', 'Class', 'Tutor_17'),
('sea18', 'shiva18', 'Shiva Kumar18', 'Kanneboina18', 'Father18', 'Mother18', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_1', 'fath_mobil', 'emergency_', 'present_addr_18', 'permanent_addr_18', 'Class', 'Tutor_18'),
('sea19', 'shiva19', 'Shiva Kumar19', 'Kanneboina19', 'Father19', 'Mother19', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_1', 'fath_mobil', 'emergency_', 'present_addr_19', 'permanent_addr_19', 'Class', 'Tutor_19'),
('sea20', 'shiva20', 'Shiva Kumar20', 'Kanneboina20', 'Father20', 'Mother20', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_2', 'fath_mobil', 'emergency_', 'present_addr_20', 'permanent_addr_20', 'Class', 'Tutor_20'),
('sea21', 'shiva21', 'Shiva Kumar21', 'Kanneboina21', 'Father21', 'Mother21', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_2', 'fath_mobil', 'emergency_', 'present_addr_21', 'permanent_addr_21', 'Class', 'Tutor_21'),
('sea22', 'shiva22', 'Shiva Kumar22', 'Kanneboina22', 'Father22', 'Mother22', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_2', 'fath_mobil', 'emergency_', 'present_addr_22', 'permanent_addr_22', 'Class', 'Tutor_22'),
('sea23', 'shiva23', 'Shiva Kumar23', 'Kanneboina23', 'Father23', 'Mother23', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_2', 'fath_mobil', 'emergency_', 'present_addr_23', 'permanent_addr_23', 'Class', 'Tutor_23'),
('sea24', 'shiva24', 'Shiva Kumar24', 'Kanneboina24', 'Father24', 'Mother24', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_2', 'fath_mobil', 'emergency_', 'present_addr_24', 'permanent_addr_24', 'Class', 'Tutor_24'),
('sea25', 'shiva25', 'Shiva Kumar25', 'Kanneboina25', 'Father25', 'Mother25', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_2', 'fath_mobil', 'emergency_', 'present_addr_25', 'permanent_addr_25', 'Class', 'Tutor_25'),
('sea26', 'shiva26', 'Shiva Kumar26', 'Kanneboina26', 'Father26', 'Mother26', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_2', 'fath_mobil', 'emergency_', 'present_addr_26', 'permanent_addr_26', 'Class', 'Tutor_26'),
('sea27', 'shiva27', 'Shiva Kumar27', 'Kanneboina27', 'Father27', 'Mother27', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_2', 'fath_mobil', 'emergency_', 'present_addr_27', 'permanent_addr_27', 'Class', 'Tutor_27'),
('sea28', 'shiva28', 'Shiva Kumar28', 'Kanneboina28', 'Father28', 'Mother28', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_2', 'fath_mobil', 'emergency_', 'present_addr_28', 'permanent_addr_28', 'Class', 'Tutor_28'),
('sea29', 'shiva29', 'Shiva Kumar29', 'Kanneboina29', 'Father29', 'Mother29', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_2', 'fath_mobil', 'emergency_', 'present_addr_29', 'permanent_addr_29', 'Class', 'Tutor_29'),
('sea30', 'shiva30', 'Shiva Kumar30', 'Kanneboina30', 'Father30', 'Mother30', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_3', 'fath_mobil', 'emergency_', 'present_addr_30', 'permanent_addr_30', 'Class', 'Tutor_30'),
('sea31', 'shiva31', 'Shiva Kumar31', 'Kanneboina31', 'Father31', 'Mother31', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_3', 'fath_mobil', 'emergency_', 'present_addr_31', 'permanent_addr_31', 'Class', 'Tutor_31'),
('sea32', 'shiva32', 'Shiva Kumar32', 'Kanneboina32', 'Father32', 'Mother32', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_3', 'fath_mobil', 'emergency_', 'present_addr_32', 'permanent_addr_32', 'Class', 'Tutor_32'),
('sea33', 'shiva33', 'Shiva Kumar33', 'Kanneboina33', 'Father33', 'Mother33', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_3', 'fath_mobil', 'emergency_', 'present_addr_33', 'permanent_addr_33', 'Class', 'Tutor_33'),
('sea34', 'shiva34', 'Shiva Kumar34', 'Kanneboina34', 'Father34', 'Mother34', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_3', 'fath_mobil', 'emergency_', 'present_addr_34', 'permanent_addr_34', 'Class', 'Tutor_34'),
('sea35', 'shiva35', 'Shiva Kumar35', 'Kanneboina35', 'Father35', 'Mother35', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_3', 'fath_mobil', 'emergency_', 'present_addr_35', 'permanent_addr_35', 'Class', 'Tutor_35'),
('sea36', 'shiva36', 'Shiva Kumar36', 'Kanneboina36', 'Father36', 'Mother36', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_3', 'fath_mobil', 'emergency_', 'present_addr_36', 'permanent_addr_36', 'Class', 'Tutor_36'),
('sea37', 'shiva37', 'Shiva Kumar37', 'Kanneboina37', 'Father37', 'Mother37', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_3', 'fath_mobil', 'emergency_', 'present_addr_37', 'permanent_addr_37', 'Class', 'Tutor_37'),
('sea38', 'shiva38', 'Shiva Kumar38', 'Kanneboina38', 'Father38', 'Mother38', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_3', 'fath_mobil', 'emergency_', 'present_addr_38', 'permanent_addr_38', 'Class', 'Tutor_38'),
('sea39', 'shiva39', 'Shiva Kumar39', 'Kanneboina39', 'Father39', 'Mother39', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_3', 'fath_mobil', 'emergency_', 'present_addr_39', 'permanent_addr_39', 'Class', 'Tutor_39'),
('sea40', 'shiva40', 'Shiva Kumar40', 'Kanneboina40', 'Father40', 'Mother40', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_4', 'fath_mobil', 'emergency_', 'present_addr_40', 'permanent_addr_40', 'Class', 'Tutor_40'),
('sea41', 'shiva41', 'Shiva Kumar41', 'Kanneboina41', 'Father41', 'Mother41', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_4', 'fath_mobil', 'emergency_', 'present_addr_41', 'permanent_addr_41', 'Class', 'Tutor_41'),
('sea42', 'shiva42', 'Shiva Kumar42', 'Kanneboina42', 'Father42', 'Mother42', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_4', 'fath_mobil', 'emergency_', 'present_addr_42', 'permanent_addr_42', 'Class', 'Tutor_42'),
('sea43', 'shiva43', 'Shiva Kumar43', 'Kanneboina43', 'Father43', 'Mother43', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_4', 'fath_mobil', 'emergency_', 'present_addr_43', 'permanent_addr_43', 'Class', 'Tutor_43'),
('sea44', 'shiva44', 'Shiva Kumar44', 'Kanneboina44', 'Father44', 'Mother44', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_4', 'fath_mobil', 'emergency_', 'present_addr_44', 'permanent_addr_44', 'Class', 'Tutor_44'),
('sea45', 'shiva45', 'Shiva Kumar45', 'Kanneboina45', 'Father45', 'Mother45', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_4', 'fath_mobil', 'emergency_', 'present_addr_45', 'permanent_addr_45', 'Class', 'Tutor_45'),
('sea46', 'shiva46', 'Shiva Kumar46', 'Kanneboina46', 'Father46', 'Mother46', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_4', 'fath_mobil', 'emergency_', 'present_addr_46', 'permanent_addr_46', 'Class', 'Tutor_46'),
('sea47', 'shiva47', 'Shiva Kumar47', 'Kanneboina47', 'Father47', 'Mother47', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_4', 'fath_mobil', 'emergency_', 'present_addr_47', 'permanent_addr_47', 'Class', 'Tutor_47'),
('sea48', 'shiva48', 'Shiva Kumar48', 'Kanneboina48', 'Father48', 'Mother48', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_4', 'fath_mobil', 'emergency_', 'present_addr_48', 'permanent_addr_48', 'Class', 'Tutor_48'),
('sea49', 'shiva49', 'Shiva Kumar49', 'Kanneboina49', 'Father49', 'Mother49', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_4', 'fath_mobil', 'emergency_', 'present_addr_49', 'permanent_addr_49', 'Class', 'Tutor_49'),
('sea50', 'shiva50', 'Shiva Kumar50', 'Kanneboina50', 'Father50', 'Mother50', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_5', 'fath_mobil', 'emergency_', 'present_addr_50', 'permanent_addr_50', 'Class', 'Tutor_50'),
('sea51', 'shiva51', 'Shiva Kumar51', 'Kanneboina51', 'Father51', 'Mother51', '0000-00-00', 'A+', 'email01@gmail.com', 'fath_email01@gmail.com', 'moth_email01@gmail.com', 'Mobileno_5', 'fath_mobil', 'emergency_', 'present_addr_51', 'permanent_addr_51', 'Class', 'Tutor_51');
