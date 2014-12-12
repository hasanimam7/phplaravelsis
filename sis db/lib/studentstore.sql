-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2014 at 05:03 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentstore`
--

CREATE TABLE IF NOT EXISTS `studentstore` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_fname` varchar(64) NOT NULL,
  `student_lname` varchar(64) DEFAULT NULL,
  `student_address` varchar(64) DEFAULT NULL,
  `student_email` varchar(64) DEFAULT NULL,
  `student_mphone` varchar(64) DEFAULT NULL,
  `student_dob` date DEFAULT NULL,
  `student_gender` varchar(64) DEFAULT NULL,
  `student_mstatus` varchar(64) DEFAULT NULL,
  `student_degree` varchar(64) DEFAULT NULL,
  `student_hobby_reading` varchar(64) DEFAULT NULL,
  `student_hobby_movie` varchar(64) DEFAULT NULL,
  `student_hobby_travel` varchar(64) DEFAULT NULL,
  `student_hobby_playing` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
