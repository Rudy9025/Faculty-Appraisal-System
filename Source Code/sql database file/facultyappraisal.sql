-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2017 at 05:23 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facultyappraisal`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `atid` tinyint(3) NOT NULL AUTO_INCREMENT,
  `fid` tinyint(3) NOT NULL,
  `activity_name` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `type_activity` varchar(30) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `currtime` datetime NOT NULL,
  PRIMARY KEY (`atid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

DROP TABLE IF EXISTS `admin_table`;
CREATE TABLE IF NOT EXISTS `admin_table` (
  `aid` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`aid`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
CREATE TABLE IF NOT EXISTS `assignments` (
  `asid` tinyint(3) NOT NULL AUTO_INCREMENT,
  `fid` tinyint(3) NOT NULL,
  `semester` tinyint(3) NOT NULL,
  `accept_assignment` varchar(10) NOT NULL,
  `details` varchar(100) NOT NULL,
  `filename` varchar(30) NOT NULL,
  `currtime` datetime NOT NULL,
  PRIMARY KEY (`asid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`asid`, `fid`, `semester`, `accept_assignment`, `details`, `filename`, `currtime`) VALUES
(3, 1, 3, 'Yes', 'Bm', 'Teaching Scheme_Sem V.pdf', '2017-12-18 08:40:14'),
(4, 1, 5, 'No', 'None', 'None', '2017-12-18 08:40:22'),
(5, 5, 3, 'No', 'None', 'None', '2017-12-22 05:49:17'),
(6, 5, 1, 'Yes', 'Ass', '4450603.pdf', '2017-12-22 05:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `circulars`
--

DROP TABLE IF EXISTS `circulars`;
CREATE TABLE IF NOT EXISTS `circulars` (
  `cid` tinyint(3) NOT NULL AUTO_INCREMENT,
  `filename` varchar(30) NOT NULL,
  `document_name` varchar(30) NOT NULL,
  `currtime` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` tinyint(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Faculty_Name` varchar(15) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `currtime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guide_project`
--

DROP TABLE IF EXISTS `guide_project`;
CREATE TABLE IF NOT EXISTS `guide_project` (
  `gid` tinyint(3) NOT NULL AUTO_INCREMENT,
  `fid` tinyint(3) NOT NULL,
  `semester` tinyint(3) NOT NULL,
  `total_project` tinyint(3) NOT NULL,
  `project_title` varchar(30) NOT NULL,
  `filename` varchar(55) DEFAULT NULL,
  `currtime` datetime NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide_project`
--

INSERT INTO `guide_project` (`gid`, `fid`, `semester`, `total_project`, `project_title`, `filename`, `currtime`) VALUES
(3, 4, 5, 30, 'Faculty Appraisal', 'Documentation.docx', '2017-12-18 13:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `library_details`
--

DROP TABLE IF EXISTS `library_details`;
CREATE TABLE IF NOT EXISTS `library_details` (
  `lid` tinyint(3) NOT NULL AUTO_INCREMENT,
  `fid` tinyint(3) NOT NULL,
  `books_from_institute` varchar(50) NOT NULL,
  `books_form_other_resources` varchar(50) NOT NULL,
  `journal_list` varchar(50) NOT NULL,
  `books_recommended` varchar(50) NOT NULL,
  `currtime` datetime NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_task`
--

DROP TABLE IF EXISTS `other_task`;
CREATE TABLE IF NOT EXISTS `other_task` (
  `otid` tinyint(3) NOT NULL AUTO_INCREMENT,
  `fid` tinyint(3) NOT NULL,
  `task` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `filename` varchar(30) NOT NULL,
  `currtime` datetime NOT NULL,
  PRIMARY KEY (`otid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_task`
--

INSERT INTO `other_task` (`otid`, `fid`, `task`, `role`, `filename`, `currtime`) VALUES
(4, 5, 'Project', 'Supervisor', 'None', '2017-12-22 05:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

DROP TABLE IF EXISTS `personal_details`;
CREATE TABLE IF NOT EXISTS `personal_details` (
  `fid` tinyint(3) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address_area` varchar(30) NOT NULL,
  `address_city` varchar(30) NOT NULL,
  `address_state` varchar(30) NOT NULL,
  `pincode` mediumint(6) NOT NULL,
  `country` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `area_of_specialization` varchar(30) NOT NULL,
  `doj` date NOT NULL,
  `payscale` mediumint(7) NOT NULL,
  `currtime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `fid` tinyint(3) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `contact_r` bigint(12) DEFAULT NULL,
  `contact_m` bigint(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `registered` varchar(5) NOT NULL,
  `currtime` datetime NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `contact_m` (`contact_m`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fid`, `firstname`, `middlename`, `lastname`, `gender`, `dob`, `contact_r`, `contact_m`, `email`, `password`, `registered`, `currtime`) VALUES
(5, 'tejas', 'Kamlesh', 'Shukla', 'Male', '1997-10-05', 0, 9723053436, 'shuklatejas21@gmail.com', 'tejas05', 'Yes', '2017-12-21 22:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `sid` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`sid`, `state_name`) VALUES
(1, 'Gujarat'),
(2, 'Andhar Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chhattisgarh'),
(7, 'Goa'),
(8, 'Haryana'),
(9, 'Himachal Pradesh'),
(10, 'Jammu & Kashmir'),
(11, 'Jharkhand'),
(12, 'Karnataka'),
(13, 'Kerala'),
(14, 'Madhya Pradesh'),
(15, 'Maharashtra'),
(16, 'Manipur'),
(17, 'Meghalaya'),
(18, 'Mizoram'),
(19, 'Nagaland'),
(20, 'Odisha (Orissa)'),
(21, 'Punjab'),
(22, 'Rajasthan'),
(23, 'Sikkim'),
(24, 'Tamil Nadu'),
(25, 'Telangana '),
(26, 'Tripura'),
(27, 'Uttar Pradesh'),
(28, 'Uttarakhand'),
(29, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `student_mentorship`
--

DROP TABLE IF EXISTS `student_mentorship`;
CREATE TABLE IF NOT EXISTS `student_mentorship` (
  `smid` tinyint(3) NOT NULL AUTO_INCREMENT,
  `fid` tinyint(3) NOT NULL,
  `total_no_of_mentees` tinyint(3) NOT NULL,
  `no_of_completed_booklet` tinyint(3) NOT NULL,
  `no_of_incomplete_booklet` tinyint(3) NOT NULL,
  `no_of_phone_call_made_to_parents` tinyint(3) NOT NULL,
  `reason_of_incomplete_booklet` varchar(30) NOT NULL,
  `currtime` datetime NOT NULL,
  PRIMARY KEY (`smid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task_assigned`
--

DROP TABLE IF EXISTS `task_assigned`;
CREATE TABLE IF NOT EXISTS `task_assigned` (
  `tid` tinyint(3) NOT NULL AUTO_INCREMENT,
  `fid` tinyint(3) NOT NULL,
  `semester` tinyint(3) NOT NULL,
  `subject_name` varchar(30) NOT NULL,
  `total_lec` tinyint(3) NOT NULL,
  `total_lab` tinyint(3) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `currtime` datetime NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_assigned`
--

INSERT INTO `task_assigned` (`tid`, `fid`, `semester`, `subject_name`, `total_lec`, `total_lab`, `filename`, `currtime`) VALUES
(7, 4, 1, 'fON', 30, 30, 'None', '2017-12-18 13:48:40'),
(8, 4, 5, 'FON', 30, 30, '4450603-FON Pracical list.pdf', '2017-12-18 13:49:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
