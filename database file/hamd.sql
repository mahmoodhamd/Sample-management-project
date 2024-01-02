-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 11:41 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hamd`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `drivers_id` int(100) NOT NULL AUTO_INCREMENT,
  `driver_name` varchar(255) NOT NULL,
  `driver_nic_no` varchar(255) NOT NULL,
  `driver_contact_no` varchar(255) NOT NULL,
  `driver_contact_no2` varchar(255) DEFAULT NULL,
  `driver_address` varchar(255) DEFAULT NULL,
  `driver_salary_per_month` int(100) DEFAULT NULL,
  `by` int(100) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`drivers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`drivers_id`, `driver_name`, `driver_nic_no`, `driver_contact_no`, `driver_contact_no2`, `driver_address`, `driver_salary_per_month`, `by`, `datetime`) VALUES
(8, 'Saqib Shaheen', '3110207429565', '03044477775', '03334367745', 'House No 116, Block E, Pak Arab Housing Society, Lahore', NULL, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `driver_documents`
--

CREATE TABLE IF NOT EXISTS `driver_documents` (
  `driver_documents_id` int(100) NOT NULL AUTO_INCREMENT,
  `drivers_id` int(100) NOT NULL,
  `document_title` varchar(255) NOT NULL,
  `sample_split_file_name` varchar(255) NOT NULL,
  `sample_split_file_code` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `by` int(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`driver_documents_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `u_name` varchar(255) DEFAULT NULL,
  `allow` int(100) DEFAULT NULL,
  `role` int(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `u_name`, `allow`, `role`) VALUES
(1, 'admin', 'admin', 'Admin', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
