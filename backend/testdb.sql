
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2014 at 01:55 PM
-- Server version: 5.1.61
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u576565229_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `day_of_week` char(10) DEFAULT NULL,
  `time_of_day` char(15) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `size_limit` tinyint(3) unsigned NOT NULL,
  `course_id` int(11) unsigned DEFAULT NULL,
  `teacher_id` int(11) unsigned DEFAULT NULL,
  `room_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_foreignkey_class_course` (`course_id`),
  KEY `index_foreignkey_class_teacher` (`teacher_id`),
  KEY `index_foreignkey_class_room` (`room_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `day_of_week`, `time_of_day`, `start_date`, `end_date`, `size_limit`, `course_id`, `teacher_id`, `room_id`) VALUES
(6, 'Wed', '07:30 PM', '2014-07-16', '2014-09-24', 0, 2, 4, 2),
(7, 'Sat', '10:30 AM', '2014-07-12', '2014-09-27', 0, 2, 4, 2),
(8, 'Sat', '06:30 PM', '2014-07-05', '2014-09-20', 0, 4, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_student`
--

CREATE TABLE IF NOT EXISTS `class_student` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(11) unsigned DEFAULT NULL,
  `student_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQ_42a802a453b47272c6bf9a3e6ff16617bff936cd` (`class_id`,`student_id`),
  KEY `index_for_class_student_class_id` (`class_id`),
  KEY `index_for_class_student_student_id` (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `class_student`
--

INSERT INTO `class_student` (`id`, `class_id`, `student_id`) VALUES
(1, 6, 1),
(2, 8, 1),
(3, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(20) DEFAULT NULL,
  `course_desc` varchar(120) DEFAULT NULL,
  `class_size_limit` tinyint(3) unsigned NOT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `course_desc`, `class_size_limit`, `active`) VALUES
(1, 'Tap', 'Tap dancing', 5, 1),
(2, 'Jazz', 'Don''t mean a thing if it ain''t got that swing', 5, 1),
(3, 'Ballet', 'Swan lake, duck pond, what have you', 5, 1),
(4, 'Ballroom', 'Waltz, foxtrot and quickstep', 0, 1),
(5, 'Modern', 'Whatever that may be', 0, 1),
(6, 'Latin', 'Tango, rumba, salsa, cha-cha', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `city` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `phone_number_1` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `phone_number_2` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `phone_number_3` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `paymethod_id` int(11) unsigned DEFAULT NULL,
  `email_address_1` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `email_address_2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`id`, `last_name`, `first_name`, `address_line_1`, `address_line_2`, `city`, `postal_code`, `phone_number_1`, `phone_number_2`, `phone_number_3`, `paymethod_id`, `email_address_1`, `email_address_2`) VALUES
(1, 'Smith', 'Mary', '123 Main Street', 'Apt. 5432', 'Brampton', 'L6S 2J4', '(905) 123-4567', '(416) 147-2528', '0', 4, 'bla@bla.com', 'bla2@bla.com'),
(2, 'Elliot', 'Mama Cass', NULL, NULL, NULL, NULL, '(416) 234-5678', NULL, NULL, 3, 'mama@sixties.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paymethod`
--

CREATE TABLE IF NOT EXISTS `paymethod` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `method_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `paymethod`
--

INSERT INTO `paymethod` (`id`, `method_name`) VALUES
(1, 'Credit Card'),
(2, 'Debit Card'),
(3, 'Cash'),
(4, 'Cheque');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `room_name` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `room_desc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_name`, `room_desc`) VALUES
(1, 'Room 12', 'The big room'),
(2, 'Room 2', 'The small room'),
(3, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `family_id` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_foreignkey_student_family` (`family_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `date_of_birth`, `family_id`, `active`, `registration_date`) VALUES
(1, 'Joseph', 'Smith', '2010-01-12', 1, 1, '2014-07-20'),
(2, 'Jane', 'Doe', '2001-12-21', 1, 1, '2014-07-20'),
(3, 'Jack', 'Jackson', '0000-00-00', NULL, NULL, NULL),
(4, 'Clarissa', 'Mudpuddle', '2007-07-07', 2, 1, '2014-07-24'),
(5, 'Billy', 'Elliot', '1999-06-10', 2, 1, '2014-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(120) DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `first_name`, `last_name`, `active`) VALUES
(1, 'Goody', 'Twoshoes', NULL),
(2, 'Fred', 'Flintstone', 1),
(3, 'Lucille', 'Ball', 1),
(4, 'Samuel', 'Swinger', 1),
(5, NULL, NULL, 0),
(6, NULL, NULL, 0),
(7, 'Tom', 'Thumb', 0),
(8, 'Tom', 'Thumb', 0),
(9, 'test', 'test', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
