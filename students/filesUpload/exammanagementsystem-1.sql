-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 05:22 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0
CREATE database exammanagementsystem;
USE exammanagementsystem;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exammanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `RegNo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `RegNo`, `password`) VALUES
(1, 'admin', '00000000');

-- --------------------------------------------------------

--
-- Table structure for table `approve_state`
--

CREATE TABLE `approve_state` (
  `Registration_No` varchar(100) NOT NULL,
  `Name_of_the_examination` varchar(100) NOT NULL,
  `subject_approval_1` varchar(100) NOT NULL,
  `subject_approval_2` tinyint(1) DEFAULT NULL,
  `subject_approval_3` tinyint(1) DEFAULT NULL,
  `subject_approval_4` tinyint(1) DEFAULT NULL,
  `subject_approval_5` tinyint(1) DEFAULT NULL,
  `subject_approval_6` tinyint(1) DEFAULT NULL,
  `subject_approval_7` tinyint(1) DEFAULT NULL,
  `subject_approval_8` tinyint(1) DEFAULT NULL,
  `subject_approval_9` tinyint(1) DEFAULT NULL,
  `subject_approval_10` tinyint(1) DEFAULT NULL,
  `subject_approval_11` tinyint(1) DEFAULT NULL,
  `subject_approval_12` tinyint(1) DEFAULT NULL,
  `subject_approval_13` tinyint(1) DEFAULT NULL,
  `subject_approval_14` tinyint(1) DEFAULT NULL,
  `subject_approval_15` tinyint(1) DEFAULT NULL,
  `hod_recommend` tinyint(1) NOT NULL,
  `dean_recommend` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approve_state`
--

INSERT INTO `approve_state` (`Registration_No`, `Name_of_the_examination`, `subject_approval_1`, `subject_approval_2`, `subject_approval_3`, `subject_approval_4`, `subject_approval_5`, `subject_approval_6`, `subject_approval_7`, `subject_approval_8`, `subject_approval_9`, `subject_approval_10`, `subject_approval_11`, `subject_approval_12`, `subject_approval_13`, `subject_approval_14`, `subject_approval_15`, `hod_recommend`, `dean_recommend`) VALUES
('', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016ICTS32', 'First Year First Semester Examination In Information Communication Technology', '1', 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1),
('2018ICTS26', 'First Year Second Semester Examination In Information Communication Technology', '0', 1, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS36', 'First Year First Semester Examination In Information Communication Technology', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('2018ICTS36', 'Third Year First Semester Examination In Information Communication Technology', '1', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('2018ICTS42', 'First Year First Semester Examination In Information Communication Technology', '1', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0),
('2018ICTS44', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS45', 'First Year Second Semester Examination In Information Communication Technology', '1', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS47', 'First Year First Semester Examination In Information Communication Technology', '1', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('2018ICTS48', 'First Year Second Semester Examination In Information Communication Technology', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS4u98', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS59', 'First Year Second Semester Examination In Information Communication Technology', '1', 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS59', 'Second Year First Semester Examination In Information Communication Technology', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS72', 'First Year First Semester Examination In Information Communication Technology', '0', 1, 1, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('2018ICTS98', '1st Examination', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `approve_state_medical`
--

CREATE TABLE `approve_state_medical` (
  `Registration_No` varchar(100) NOT NULL,
  `Name_of_the_examination` varchar(100) NOT NULL,
  `subject_approval_1` tinyint(1) NOT NULL,
  `subject_approval_2` tinyint(1) DEFAULT NULL,
  `subject_approval_3` tinyint(1) DEFAULT NULL,
  `subject_approval_4` tinyint(1) DEFAULT NULL,
  `subject_approval_5` tinyint(1) DEFAULT NULL,
  `subject_approval_6` tinyint(1) DEFAULT NULL,
  `subject_approval_7` tinyint(1) DEFAULT NULL,
  `subject_approval_8` tinyint(1) DEFAULT NULL,
  `subject_approval_9` tinyint(1) DEFAULT NULL,
  `subject_approval_10` tinyint(1) DEFAULT NULL,
  `subject_approval_11` tinyint(1) DEFAULT NULL,
  `subject_approval_12` tinyint(1) DEFAULT NULL,
  `subject_approval_13` tinyint(1) DEFAULT NULL,
  `subject_approval_14` tinyint(1) DEFAULT NULL,
  `subject_approval_15` tinyint(1) DEFAULT NULL,
  `hod_recommend` tinyint(1) DEFAULT NULL,
  `dean_recommend` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approve_state_medical`
--

INSERT INTO `approve_state_medical` (`Registration_No`, `Name_of_the_examination`, `subject_approval_1`, `subject_approval_2`, `subject_approval_3`, `subject_approval_4`, `subject_approval_5`, `subject_approval_6`, `subject_approval_7`, `subject_approval_8`, `subject_approval_9`, `subject_approval_10`, `subject_approval_11`, `subject_approval_12`, `subject_approval_13`, `subject_approval_14`, `subject_approval_15`, `hod_recommend`, `dean_recommend`) VALUES
('2018ICTS40', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS42', 'First Year First Semester Examination In Information Communication Technology', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('2018ICTS47', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS49', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS53 ', 'First Year Second Semester Examination In Information Communication Technology', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('2018ICTS59 ', 'First Year First Semester Examination In Information Communication Technology', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `approve_state_resit`
--

CREATE TABLE `approve_state_resit` (
  `Registration_No` varchar(100) NOT NULL,
  `Name_of_the_examination` varchar(100) NOT NULL,
  `subject_approval_1` tinyint(1) NOT NULL,
  `subject_approval_2` tinyint(1) DEFAULT NULL,
  `subject_approval_3` tinyint(1) DEFAULT NULL,
  `subject_approval_4` tinyint(1) DEFAULT NULL,
  `subject_approval_5` tinyint(1) DEFAULT NULL,
  `subject_approval_6` tinyint(1) DEFAULT NULL,
  `subject_approval_7` tinyint(1) DEFAULT NULL,
  `subject_approval_8` tinyint(1) DEFAULT NULL,
  `subject_approval_9` tinyint(1) DEFAULT NULL,
  `subject_approval_10` tinyint(1) DEFAULT NULL,
  `subject_approval_11` tinyint(1) DEFAULT NULL,
  `subject_approval_12` tinyint(1) DEFAULT NULL,
  `subject_approval_13` tinyint(1) DEFAULT NULL,
  `subject_approval_14` tinyint(1) DEFAULT NULL,
  `subject_approval_15` tinyint(1) DEFAULT NULL,
  `hod_recommend` tinyint(1) NOT NULL,
  `dean_recommend` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approve_state_resit`
--

INSERT INTO `approve_state_resit` (`Registration_No`, `Name_of_the_examination`, `subject_approval_1`, `subject_approval_2`, `subject_approval_3`, `subject_approval_4`, `subject_approval_5`, `subject_approval_6`, `subject_approval_7`, `subject_approval_8`, `subject_approval_9`, `subject_approval_10`, `subject_approval_11`, `subject_approval_12`, `subject_approval_13`, `subject_approval_14`, `subject_approval_15`, `hod_recommend`, `dean_recommend`) VALUES
('2018ICTS42', 'First Year First Semester Examination In Information Communication Technology', 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS44', '', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('2018ICTS45', 'First Year Second Semester Examination In Information Communication Technology', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS47', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS48', 'First Year Second Semester Examination In Information Communication Technology', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS4u98', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018ICTS98', '1st Examination', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `asign_lecturer`
--

CREATE TABLE `asign_lecturer` (
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `LECNum` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asign_lecturer`
--

INSERT INTO `asign_lecturer` (`year`, `semester`, `subject_code`, `subject_name`, `LECNum`, `faculty`) VALUES
('1st year', '1st semester', 'AUX1113', 'English Language I', 'UV/FOTS/DICT/L/03', 'Technological Studies'),
('3rd year', '1st semester', 'AUX3112', 'Career Guidance', 'UV/FOTS/DICT/L/01', 'Technological studies'),
('1st year', '1st semester', 'TICT1114(P)', 'Essentials of ICT  Practical', 'UV/FOTS/DICT/L/01', 'Technological Studies'),
('1st year', '1st semester', 'TICT1114(T)', 'Essentials of ICT Theory', 'UV/FOTS/DICT/L/01', 'Technological Studies'),
('1st year', '1st semester', 'TICT1123', 'Mathematics for Technology', 'UV/FOTS/DICT/L/01', 'Technological Studies'),
('1st year', '1st semester', 'TICT1134(P)', 'Fundamentals of Computer Programming  Practical', 'UV/FOTS/DICT/L/01', 'Technological Studies'),
('1st year', '1st semester', 'TICT1134(T)', 'Fundamentals of Computer Programming Theory', 'UV/FOTS/DICT/L/01', 'Technological Studies'),
('1st year', '1st semester', 'TICT1142(P)', 'Fundamentals of Web Technologies Practical', 'UV/FOTS/DICT/L/01', 'Technological Studies'),
('1st year', '1st semester', 'TICT1142(T)', 'Fundamentals of Web Technologies Theory', 'UV/FOTS/DICT/L/01', 'Technological Studies'),
('1st year', '1st semester', 'TICT1152', 'Principles of Management', 'UV/FOTS/DICT/L/01', 'Technological Studies'),
('3rd year', '1st semester', 'TICT3162', 'Information Security', 'UV/FOTS/DICT/L/01', 'Technological studies');

-- --------------------------------------------------------

--
-- Table structure for table `check`
--

CREATE TABLE `check` (
  `year` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_offerings`
--

CREATE TABLE `course_offerings` (
  `id` int(11) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `faculty` varchar(200) NOT NULL,
  `course_code_1` varchar(20) DEFAULT NULL,
  `subject_name_1` varchar(200) DEFAULT NULL,
  `course_code_2` varchar(20) DEFAULT NULL,
  `subject_name_2` varchar(200) DEFAULT NULL,
  `course_code_3` varchar(20) DEFAULT NULL,
  `subject_name_3` varchar(200) DEFAULT NULL,
  `course_code_4` varchar(20) DEFAULT NULL,
  `subject_name_4` varchar(200) DEFAULT NULL,
  `course_code_5` varchar(20) DEFAULT NULL,
  `subject_name_5` varchar(200) DEFAULT NULL,
  `course_code_6` varchar(20) DEFAULT NULL,
  `subject_name_6` varchar(200) DEFAULT NULL,
  `course_code_7` varchar(20) DEFAULT NULL,
  `subject_name_7` varchar(200) DEFAULT NULL,
  `course_code_8` varchar(20) DEFAULT NULL,
  `subject_name_8` varchar(200) DEFAULT NULL,
  `course_code_9` varchar(20) DEFAULT NULL,
  `subject_name_9` varchar(200) DEFAULT NULL,
  `course_code_10` varchar(20) DEFAULT NULL,
  `subject_name_10` varchar(200) DEFAULT NULL,
  `course_code_11` varchar(255) NOT NULL,
  `subject_name_11` varchar(255) NOT NULL,
  `course_code_12` varchar(255) NOT NULL,
  `subject_name_12` varchar(255) NOT NULL,
  `course_code_13` varchar(255) NOT NULL,
  `subject_name_13` varchar(255) NOT NULL,
  `course_code_14` varchar(255) NOT NULL,
  `subject_name_14` varchar(255) NOT NULL,
  `course_code_15` varchar(255) NOT NULL,
  `subject_name_15` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_offerings`
--

INSERT INTO `course_offerings` (`id`, `year`, `semester`, `faculty`, `course_code_1`, `subject_name_1`, `course_code_2`, `subject_name_2`, `course_code_3`, `subject_name_3`, `course_code_4`, `subject_name_4`, `course_code_5`, `subject_name_5`, `course_code_6`, `subject_name_6`, `course_code_7`, `subject_name_7`, `course_code_8`, `subject_name_8`, `course_code_9`, `subject_name_9`, `course_code_10`, `subject_name_10`, `course_code_11`, `subject_name_11`, `course_code_12`, `subject_name_12`, `course_code_13`, `subject_name_13`, `course_code_14`, `subject_name_14`, `course_code_15`, `subject_name_15`) VALUES
(2, '1st year', '1st semester', 'Technological studies', 'AUX1113', 'English Language I', 'TICT1152', 'Principles of Management', 'TICT1142(T)', 'Fundamentals of Web Technologies Theory', 'TICT1142(P)', 'Fundamentals of Web Technologies Practical', 'TICT1134(T)', 'Fundamentals of Computer Programming Theory', 'TICT1134(P)', 'Fundamentals of Computer Programming  Practical', 'TICT1123', 'Mathematics for Technology', 'TICT1114(T)', 'Essentials of ICT Theory', 'TICT1114(P)', 'Essentials of ICT  Practical', 'TICT1152', 'Principles of Management', '', '', '', '', '', '', '', '', '', ''),
(3, '1st year', '2nd semester', 'Technological studies', 'TICT1261', 'IT Law New', 'TICT1233', 'Operating Systems Theory', 'TICT1223', 'Operating Systems Practical', 'TICT1224(T)', 'Object Oriented Programming Theory', 'TICT1224(P)', 'Object Oriented Programming Practical', 'TICT1212', 'Discrete Structures', 'TICT1252', 'Computational Engineering Drawing', 'TICT1243(T)', 'Electronics and Digital Circuit Designs Theory', 'TICT1243(P)', 'Electronics and Digital Circuit Designs Practical', 'AUX1212', 'Sri Lankan Studies, Social Harmony & Active citizens', '', '', '', '', '', '', '', '', '', ''),
(4, '2nd year', '1st semester', 'Technological studies', 'AUX2113', 'English Language II', 'TICT2153(T)', 'Human Computer Interaction Theory', 'TICT2153(P)', 'Human Computer Interaction Practical', 'TICT2142', 'Multimedia Design and Technologies', 'TICT2134(T)', 'Advanced Computer Programming Theory', 'TICT2134(P)', 'Advanced Computer Programming Practical', 'TICT2122', 'Statistics for Technology', 'TICT2113(T)', 'Data Structures and Algorithms Theory', 'TICT2113(P)', 'Data Structures and Algorithms Practical', 'TICT2123', 'Advanced Mathematics', '', '', '', '', '', '', '', '', '', ''),
(5, '2nd year', '2nd semester', 'Technological studies', 'TICT2233(T)', 'Database Management Systems Theory', 'TICT2233(P)', 'Database Management Systems Practical', 'TICT2263(T)', 'Accounting for Technology Theory', 'TICT2263(P)', 'Accounting for Technology Practical', 'TICT2212', 'Operational Research', 'TICT2252', 'System Analysis and Design', 'AUX2212', 'Soft skill and Career Guidance', 'TICT2222', 'Introduction to Computer Network', 'TICT2244(T)', 'Computer Graphics Theory', 'TICT2244(P)', 'Computer Graphics Practical', '', '', '', '', '', '', '', '', '', ''),
(6, '3rd year', '1st semester', 'Technological studies', 'AUX3112', 'Career Guidance', 'TICT3162', 'Information Security', 'TICT3153(T)', 'Software Engineering Theory', 'TICT3153(P)', 'Software Engineering Practical', 'TICT3142', 'Social and Professional Issues in IT', 'TICT3132(T)', 'Advanced Web Technologies Theory', 'TICT3132(P)', 'Advanced Web Technologies Practical', 'TICT3123(T)', 'Advanced Database Management Systems Theory', 'TICT3123(P)', 'Advanced Database Management Systems Practical', 'TICT3113', 'Computer Architecture and Organization', '', '', '', '', '', '', '', '', '', ''),
(7, '3rd year', '2nd semester', 'Technological studies', 'AUX3212', 'Research Methodology', 'TICT3263(T)', 'Essential of E-Commerce Theory', 'TICT3263(P)', 'Essential of E-Commerce Practical', 'TICT3253(T)', 'Digital Image Processing Theory', 'TICT3253(P)', 'Digital Image Processing Practical', 'TICT3242', 'Information Security', 'TICT3232', 'Project Management', 'TICT3224(T)', 'Advanced Computer Networks and Administration Theory', 'TICT3224(P)', 'Advanced Computer Networks and Administration Practical', 'TICT3272', 'Computerized Accounting', '', '', '', '', '', '', '', '', '', ''),
(8, '4th year', '1st semester', 'Technological studies', 'TICT4162', 'Bioinformatics', 'TICT4152', 'Cloud Application Development', 'TICT4143(T)', 'Intelligent Systems Theory', 'TICT4143(P)', 'Intelligent Systems Practical', 'TICT4133(T)', 'Mobile Application Development Theory', 'TICT4133(P)', 'Mobile Application Development Practical', 'TICT4122', 'Green Computing', 'TICT4112', 'Distributed Systems', 'TICT4122', 'Green Computing', 'TICT4112', 'Distributed Systems', 'new1', 'new sub1', 'nw2', 'new sub2', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dean`
--

CREATE TABLE `dean` (
  `DEANNum` varchar(255) NOT NULL,
  `DEANName` varchar(255) NOT NULL,
  `Faculty` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `passwords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dean`
--

INSERT INTO `dean` (`DEANNum`, `DEANName`, `Faculty`, `Email`, `contactno`, `passwords`) VALUES
('UV/FOTS/DEAN', 'DEANO1', 'Technological Studies', 'e@vac.ac.lk', '08745462', '111');

-- --------------------------------------------------------

--
-- Table structure for table `dr`
--

CREATE TABLE `dr` (
  `id` int(11) NOT NULL,
  `drnum` varchar(255) NOT NULL,
  `drname` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dr`
--

INSERT INTO `dr` (`id`, `drnum`, `drname`, `password`) VALUES
(1, 'UV/DR', 'DRUOV', '111');

-- --------------------------------------------------------

--
-- Table structure for table `examenrty`
--

CREATE TABLE `examenrty` (
  `INnum` varchar(100) NOT NULL,
  `faculty` varchar(100) DEFAULT NULL,
  `Name_of_the_examination` varchar(100) NOT NULL,
  `year` varchar(100) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `Name_with_initials` varchar(100) DEFAULT NULL,
  `Name_denoted_by_initial` varchar(100) DEFAULT NULL,
  `Registration_No` varchar(100) NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Mobile_Phone_no` int(100) DEFAULT NULL,
  `Date_of_admission` varchar(100) DEFAULT NULL,
  `course_code_1` varchar(100) DEFAULT NULL,
  `subject_name_1` varchar(100) DEFAULT NULL,
  `course_code_2` varchar(100) DEFAULT NULL,
  `subject_name_2` varchar(100) DEFAULT NULL,
  `course_code_3` varchar(400) NOT NULL,
  `subject_name_3` varchar(400) NOT NULL,
  `course_code_4` varchar(400) NOT NULL,
  `subject_name_4` varchar(400) NOT NULL,
  `course_code_5` varchar(400) NOT NULL,
  `subject_name_5` varchar(400) NOT NULL,
  `course_code_6` varchar(400) NOT NULL,
  `subject_name_6` varchar(400) NOT NULL,
  `course_code_7` varchar(400) NOT NULL,
  `subject_name_7` varchar(400) NOT NULL,
  `course_code_8` varchar(400) NOT NULL,
  `subject_name_8` varchar(400) NOT NULL,
  `course_code_9` varchar(400) NOT NULL,
  `subject_name_9` varchar(400) NOT NULL,
  `course_code_10` varchar(400) NOT NULL,
  `subject_name_10` varchar(400) NOT NULL,
  `course_code_11` varchar(255) NOT NULL,
  `subject_name_11` varchar(255) NOT NULL,
  `course_code_12` varchar(255) NOT NULL,
  `subject_name_12` varchar(255) NOT NULL,
  `course_code_13` varchar(255) NOT NULL,
  `subject_name_13` varchar(255) NOT NULL,
  `course_code_14` varchar(255) NOT NULL,
  `subject_name_14` varchar(255) NOT NULL,
  `course_code_15` varchar(255) NOT NULL,
  `subject_name_15` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examenrty`
--

INSERT INTO `examenrty` (`INnum`, `faculty`, `Name_of_the_examination`, `year`, `semester`, `gender`, `Name_with_initials`, `Name_denoted_by_initial`, `Registration_No`, `Address`, `Mobile_Phone_no`, `Date_of_admission`, `course_code_1`, `subject_name_1`, `course_code_2`, `subject_name_2`, `course_code_3`, `subject_name_3`, `course_code_4`, `subject_name_4`, `course_code_5`, `subject_name_5`, `course_code_6`, `subject_name_6`, `course_code_7`, `subject_name_7`, `course_code_8`, `subject_name_8`, `course_code_9`, `subject_name_9`, `course_code_10`, `subject_name_10`, `course_code_11`, `subject_name_11`, `course_code_12`, `subject_name_12`, `course_code_13`, `subject_name_13`, `course_code_14`, `subject_name_14`, `course_code_15`, `subject_name_15`) VALUES
('', 'Technological studies', 'First Year First Semester Examination In Information Communication Technology', '1st year', '1st semester', 'Mr.', 's. AndrewaA', 'Andrew Senanayaka', '2016ICTS32', ' Anamaduwa', 777639212, '2019-09-17', 'AUX1113', 'English Language I', 'TICT1152', 'Principles of Management', 'TICT1142(T)', 'Fundamentals of Web Technologies Theory', 'TICT1142(P)', 'Fundamentals of Web Technologies Practical', 'TICT1134(T)', 'Fundamentals of Computer Programming Theory', 'TICT1134(P)', 'Fundamentals of Computer Programming  Practical', 'TICT1123', 'Mathematics for Technology', 'TICT1114(T)', 'Essentials of ICT Theory', 'TICT1114(P)', 'Essentials of ICT  Practical', 'TICT1152', 'Principles of Management', '', '', '', '', '', '', '', '', '', ''),
('', 'Technological studies', 'First Year Second Semester Examination In Information Communication Technology', '1st year', '2nd semester', 'Female', 's.m.n.a.samarakoon', 'samarakoon mudiyanselage nishedha ayeshwery samara', '2018ICTS26', 'alawaththe niwasa dauldena,medawela udukinda', 715231430, '2020-02-23', 'TICT1261', 'IT Law New', 'TICT1233', 'Operating Systems Theory', 'TICT1223', 'Operating Systems Practical', 'TICT1224(T)', 'Object Oriented Programming Theory', 'TICT1224(P)', 'Object Oriented Programming Practical', 'TICT1212', 'Discrete Structures', 'TICT1252', 'Computational Engineering Drawing', 'TICT1243(T)', 'Electronics and Digital Circuit Designs Theory', 'TICT1243(P)', 'Electronics and Digital Circuit Designs Practical', 'AUX1212', 'Sri Lankan Studies, Social Harmony & Active citizens', '', '', '', '', '', '', '', '', '', ''),
('TS4032', 'Technological studies', 'First Year First Semester Examination In Information Communication Technology', '1st year', '1st semester', 'Mr.', 'K. D. S. DILSHAN', 'Kottage Don Sahiru', '2018ICTS36', 'NO 130/2/2, Ranawiru Nuwan Dhanushka Peiris Avenue, Galthude, Panadura', 716154449, '2020-02-07', 'AUX1113', 'English Language I', 'TICT1152', 'Principles of Management', 'TICT1142(T)', 'Fundamentals of Web Technologies Theory', 'TICT1142(P)', 'Fundamentals of Web Technologies Practical', 'TICT1134(T)', 'Fundamentals of Computer Programming Theory', 'TICT1134(P)', 'Fundamentals of Computer Programming  Practical', 'TICT1123', 'Mathematics for Technology', 'TICT1114(T)', 'Essentials of ICT Theory', 'TICT1114(P)', 'Essentials of ICT  Practical', 'TICT1152', 'Principles of Management', '', '', '', '', '', '', '', '', '', ''),
('', 'Technological studies', 'First Year First Semester Examination In Information Communication Technology', '1st year', '1st semester', 'Mis.', 'M IMASHA', 'MALSHI IMASHA', '2018ICTS42', ' KATUNAYAKE,SRI LANKA', 774656016, '2020-03-23', 'AUX1113', 'English Language I', 'TICT1152', 'Principles of Management', 'TICT1142(T)', 'Fundamentals of Web Technologies Theory', 'TICT1142(P)', 'Fundamentals of Web Technologies Practical', 'TICT1134(T)', 'Fundamentals of Computer Programming Theory', 'TICT1134(P)', 'Fundamentals of Computer Programming  Practical', 'TICT1123', 'Mathematics for Technology', 'TICT1114(T)', 'Essentials of ICT Theory', 'TICT1114(P)', 'Essentials of ICT  Practical', 'TICT1152', 'Principles of Management', '', '', '', '', '', '', '', '', '', ''),
('TS4042', 'Technological studies', 'First Year First Semester Examination In Information Communication Technology', '1st year', '1st semester', 'Mr.', 'M.D.D.RANASINGHE', 'MUTHUNAYAKAGE DINUKA DULANJANA RANASINGHE', '2018ICTS47', ' 60/1 BANDARANAYAKA ROAD VEYANGODA', 765659067, '1999-07-04', 'AUX1113', 'English Language I', 'TICT1152', 'Principles of Management', 'TICT1142(T)', 'Fundamentals of Web Technologies Theory', 'TICT1142(P)', 'Fundamentals of Web Technologies Practical', 'TICT1134(T)', 'Fundamentals of Computer Programming Theory', 'TICT1134(P)', 'Fundamentals of Computer Programming  Practical', 'TICT1123', 'Mathematics for Technology', 'TICT1114(T)', 'Essentials of ICT Theory', 'TICT1114(P)', 'Essentials of ICT  Practical', 'TICT1152', 'Principles of Management', '', '', '', '', '', '', '', '', '', ''),
('', 'Technological studies', 'First Year Second Semester Examination In Information Communication Technology', '1st year', '2nd semester', 'Male', 'S.J.M. NAVEEN SHALINDA SRIMAL', 'SAMARAKOON JAYASUNDARA MUDIYANSELAGE NAVEEN SHALIN', '2018ICTS59', 'NO 15,Pallepanguwa Lunugala', 717598542, '2020-01-23', 'TICT1261', 'IT Law New', 'TICT1233', 'Operating Systems Theory', 'TICT1223', 'Operating Systems Practical', 'TICT1224(T)', 'Object Oriented Programming Theory', 'TICT1224(P)', 'Object Oriented Programming Practical', 'TICT1212', 'Discrete Structures', 'TICT1252', 'Computational Engineering Drawing', 'TICT1243(T)', 'Electronics and Digital Circuit Designs Theory', 'TICT1243(P)', 'Electronics and Digital Circuit Designs Practical', 'AUX1212', 'Sri Lankan Studies, Social Harmony & Active citizens', '', '', '', '', '', '', '', '', '', ''),
('', 'Technological studies', 'Second Year First Semester Examination In Information Communication Technology', '2nd year', '1st semester', 'Male', 'S.J.M. NAVEEN SHALINDA SRIMAL', 'SAMARAKOON JAYASUNDARA MUDIYANSELAGE NAVEEN SHALIN', '2018ICTS59', 'NO 15,Pallepanguwa Lunugala', 717598542, '2020-01-23', 'AUX2113', 'English Language II', 'TICT2153(T)', 'Human Computer Interaction Theory', 'TICT2153(P)', 'Human Computer Interaction Practical', 'TICT2142', 'Multimedia Design and Technologies', 'TICT2134(T)', 'Advanced Computer Programming Theory', 'TICT2134(P)', 'Advanced Computer Programming Practical', 'TICT2122', 'Statistics for Technology', 'TICT2113(T)', 'Data Structures and Algorithms Theory', 'TICT2113(P)', 'Data Structures and Algorithms Practical', 'TICT2123', 'Advanced Mathematics', '', '', '', '', '', '', '', '', '', ''),
('', 'Technological studies', 'First Year First Semester Examination In Information Communication Technology', '1st year', '1st semester', 'Mr.', 'L.S.MADUSANKA', 'LAHIRU SUJITH MADUSANKA', '2018ICTS72', ' MAHAUSWEWA,ANAMADUWA', 71656444, '2020-01-20', 'AUX1113', 'English Language I', 'TICT1152', 'Principles of Management', 'TICT1142(T)', 'Fundamentals of Web Technologies Theory', 'TICT1142(P)', 'Fundamentals of Web Technologies Practical', 'TICT1134(T)', 'Fundamentals of Computer Programming Theory', 'TICT1134(P)', 'Fundamentals of Computer Programming  Practical', 'TICT1123', 'Mathematics for Technology', 'TICT1114(T)', 'Essentials of ICT Theory', 'TICT1114(P)', 'Essentials of ICT  Practical', 'TICT1152', 'Principles of Management', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `comment`) VALUES
(1, 'good'),
(2, 'hi'),
(3, 'goods'),
(4, 'sasas'),
(5, 'iihjrj'),
(6, 'qqwwwww'),
(7, ''),
(8, '');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `HODNum` varchar(255) NOT NULL,
  `HODName` varchar(255) NOT NULL,
  `Faculty` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `passwords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`HODNum`, `HODName`, `Faculty`, `Email`, `contactno`, `passwords`) VALUES
('UV/FOTS/DICT/H', 'FOTHO1', 'Technological Studies', 'e@vac.ac.lk', '08745462', ' 111');

-- --------------------------------------------------------

--
-- Table structure for table `lec`
--

CREATE TABLE `lec` (
  `LECNum` varchar(255) NOT NULL,
  `LECName` varchar(255) NOT NULL,
  `Faculty` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lec`
--

INSERT INTO `lec` (`LECNum`, `LECName`, `Faculty`, `Email`, `contactno`, `password`) VALUES
('UV/FOTS/DICT/L/01', 'LOCFOT', 'Technological Studies', 'e@vac.ac.lk', '098765421', ' 111'),
('UV/FOTS/DICT/L/02', 'LEC02', 'Technological Studies', 'ACBD@vac.ac.lk', '076585214', ' 112'),
('UV/FOTS/DICT/L/03', 'abs', 'Technological Studies', 'ACBD@vac.ac.lk', '344', ' 111');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `RegNo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `RegNo`, `password`) VALUES
(1, 'aaa', 'dinudinu'),
(3, 'dinu', '222'),
(4, '', ''),
(5, 'wwww', '8888'),
(6, '', ''),
(7, '2018ICTS47', 'aaaa'),
(8, 'aaa', '1111111');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `faculty` varchar(100) DEFAULT NULL,
  `Name_of_the_examination` varchar(100) NOT NULL,
  `year` varchar(100) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `Name_with_initials` varchar(100) DEFAULT NULL,
  `Name_denoted_by_initial` varchar(100) DEFAULT NULL,
  `Registration_No` varchar(100) NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Mobile_Phone_no` int(100) DEFAULT NULL,
  `Date_of_admission` varchar(100) DEFAULT NULL,
  `myfile_medical` varchar(255) NOT NULL,
  `myfile_pay` varchar(255) NOT NULL,
  `course_code_1` varchar(100) DEFAULT NULL,
  `subject_name_1` varchar(100) DEFAULT NULL,
  `course_code_2` varchar(100) DEFAULT NULL,
  `subject_name_2` varchar(100) DEFAULT NULL,
  `course_code_3` varchar(100) NOT NULL,
  `subject_name_3` varchar(100) NOT NULL,
  `course_code_4` varchar(100) NOT NULL,
  `subject_name_4` varchar(100) NOT NULL,
  `course_code_5` varchar(100) NOT NULL,
  `subject_name_5` varchar(100) NOT NULL,
  `course_code_6` varchar(100) NOT NULL,
  `subject_name_6` varchar(100) NOT NULL,
  `course_code_7` varchar(100) NOT NULL,
  `subject_name_7` varchar(100) NOT NULL,
  `course_code_8` varchar(100) NOT NULL,
  `subject_name_8` varchar(100) NOT NULL,
  `course_code_9` varchar(100) NOT NULL,
  `subject_name_9` varchar(100) NOT NULL,
  `course_code_10` varchar(100) NOT NULL,
  `subject_name_10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`faculty`, `Name_of_the_examination`, `year`, `semester`, `gender`, `Name_with_initials`, `Name_denoted_by_initial`, `Registration_No`, `Address`, `Mobile_Phone_no`, `Date_of_admission`, `myfile_medical`, `myfile_pay`, `course_code_1`, `subject_name_1`, `course_code_2`, `subject_name_2`, `course_code_3`, `subject_name_3`, `course_code_4`, `subject_name_4`, `course_code_5`, `subject_name_5`, `course_code_6`, `subject_name_6`, `course_code_7`, `subject_name_7`, `course_code_8`, `subject_name_8`, `course_code_9`, `subject_name_9`, `course_code_10`, `subject_name_10`) VALUES
('', '', '', '', 'Mis.', 'M IMASHA', 'MALSHI IMASHA', '2018ICTS40', ' KATUNAYAKE,SRI LANKA', 774656016, '2020-03-23', '', 'Screenshot (8).png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Technological studies', 'First Year First Semester Examination In Information Communication Technology', '1st year', '1st semester', 'Mis.', 'M IMASHA', 'MALSHI IMASHA', '2018ICTS42', ' KATUNAYAKE,SRI LANKA', 774656016, '2020-03-23', 'C:xampp	mpphpB7AE.tmp', 'Screenshot (7).png', 'dfd', 'df', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', 'Mr.', 'M.D.D.RANASINGHE', 'MUTHUNAYAKAGE DINUKA DULANJANA RANASINGHE', '2018ICTS47', ' 60/1 BANDARANAYAKA ROAD VEYANGODA', 765659067, '1999-07-04', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', 'Mr.', 'M.D.D.RANASINGHE', 'MUTHUNAYAKAGE DINUKA DULANJANA RANASINGHE', '2018ICTS49', ' 60/1 BANDARANAYAKA ROAD VEYANGODA', 765659067, '1999-07-04', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Technological studies', 'First Year Second Semester Examination In Information Communication Technology', '1st year', '1st semester', 'Mr.', 'R.M.S.S Rajapakshe', 'Rajapakshe Mudiyanselage Sachintha Sandaruwan', '2018ICTS53 ', ' welimada', 712446924, '2020-02-04', 'C:xampp	mpphpC9A0.tmp', 'IMG-20190621-WA0003.jpg', 'TICT1243', 'object orianted progaram', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Technological studies', 'First Year First Semester Examination In Information Communication Technology', '1st year', '1st semester', 'Male', 'S.J.M. NAVEEN SHALINDA SRIMAL', 'SAMARAKOON JAYASUNDARA MUDIYANSELAGE NAVEEN SHALIN', '2018ICTS59 ', 'NO 15,Pallepanguwa Lunugala', 717598542, '2020-01-23', 'C:xampp	mpphpD05E.tmp', 'IMG-20190923-WA0020.jpg', 'AUX1113', 'English Language I', 'TICT1152', 'Principles of Management', 'TICT1142(T)', 'Fundamentals of Web Technologies Theory', '', '', 'TICT1134(T)', 'Fundamentals of Computer Programming Theory', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `message`, `created_at`) VALUES
(27, 'Frist year examination ', 'First year semester 1 exam held on next week', '2023-04-23 11:28:38'),
(28, 'Medical /Re-site ', 'submit your medical and re-site form (deadline -4/28/2023', '2023-04-23 17:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `resit`
--

CREATE TABLE `resit` (
  `faculty` varchar(100) DEFAULT NULL,
  `Name_of_the_examination` varchar(100) DEFAULT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `Name_with_initials` varchar(100) DEFAULT NULL,
  `Name_denoted_by_initial` varchar(100) DEFAULT NULL,
  `Registration_No` varchar(100) NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Mobile_Phone_no` int(100) DEFAULT NULL,
  `Date_of_admission` varchar(100) DEFAULT NULL,
  `myfile_pay` varchar(100) DEFAULT NULL,
  `course_code_1` varchar(100) DEFAULT NULL,
  `subject_name_1` varchar(100) DEFAULT NULL,
  `Ast_attempt_1` varchar(100) DEFAULT NULL,
  `Bst_attempt_1` varchar(100) DEFAULT NULL,
  `Cst_attempt_1` varchar(100) DEFAULT NULL,
  `course_code_2` varchar(100) DEFAULT NULL,
  `subject_name_2` varchar(100) DEFAULT NULL,
  `Ast_attempt_2` varchar(100) DEFAULT NULL,
  `Bst_attempt_2` varchar(100) DEFAULT NULL,
  `Cst_attempt_2` varchar(100) DEFAULT NULL,
  `course_code_3` varchar(100) NOT NULL,
  `subject_name_3` varchar(100) NOT NULL,
  `Ast_attempt_3` varchar(100) NOT NULL,
  `Bst_attempt_3` varchar(100) NOT NULL,
  `Cst_attempt_3` varchar(100) NOT NULL,
  `course_code_4` varchar(100) NOT NULL,
  `subject_name_4` varchar(100) NOT NULL,
  `Ast_attempt_4` varchar(100) NOT NULL,
  `Bst_attempt_4` varchar(100) NOT NULL,
  `Cst_attempt_4` varchar(100) NOT NULL,
  `course_code_5` varchar(100) NOT NULL,
  `subject_name_5` varchar(100) NOT NULL,
  `Ast_attempt_5]` varchar(100) NOT NULL,
  `Bst_attempt_5` varchar(100) NOT NULL,
  `Cst_attempt_5` varchar(100) NOT NULL,
  `course_code_6` varchar(100) NOT NULL,
  `subject_name_6` varchar(100) NOT NULL,
  `Ast_attempt_6` varchar(100) NOT NULL,
  `Bst_attempt_6` varchar(100) NOT NULL,
  `Cst_attempt_6]` varchar(100) NOT NULL,
  `course_code_7` varchar(100) NOT NULL,
  `subject_name_7` varchar(100) NOT NULL,
  `Ast_attempt_7` varchar(100) NOT NULL,
  `Bst_attempt_7` varchar(100) NOT NULL,
  `Cst_attempt_7` varchar(100) NOT NULL,
  `course_code_8` varchar(100) NOT NULL,
  `subject_name_8` varchar(100) NOT NULL,
  `Ast_attempt_8` varchar(100) NOT NULL,
  `Bst_attempt_8]` varchar(100) NOT NULL,
  `Cst_attempt_8` varchar(100) NOT NULL,
  `course_code_9` varchar(100) NOT NULL,
  `subject_name_9` varchar(100) NOT NULL,
  `Ast_attempt_9` varchar(100) NOT NULL,
  `Bst_attempt_9` varchar(100) NOT NULL,
  `Cst_attempt_9` varchar(100) NOT NULL,
  `course_code_10` varchar(100) NOT NULL,
  `subject_name_10` varchar(100) NOT NULL,
  `Ast_attempt_10` varchar(100) NOT NULL,
  `Bst_attempt_10` varchar(100) NOT NULL,
  `Cst_attempt_10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resit`
--

INSERT INTO `resit` (`faculty`, `Name_of_the_examination`, `year`, `semester`, `gender`, `Name_with_initials`, `Name_denoted_by_initial`, `Registration_No`, `Address`, `Mobile_Phone_no`, `Date_of_admission`, `myfile_pay`, `course_code_1`, `subject_name_1`, `Ast_attempt_1`, `Bst_attempt_1`, `Cst_attempt_1`, `course_code_2`, `subject_name_2`, `Ast_attempt_2`, `Bst_attempt_2`, `Cst_attempt_2`, `course_code_3`, `subject_name_3`, `Ast_attempt_3`, `Bst_attempt_3`, `Cst_attempt_3`, `course_code_4`, `subject_name_4`, `Ast_attempt_4`, `Bst_attempt_4`, `Cst_attempt_4`, `course_code_5`, `subject_name_5`, `Ast_attempt_5]`, `Bst_attempt_5`, `Cst_attempt_5`, `course_code_6`, `subject_name_6`, `Ast_attempt_6`, `Bst_attempt_6`, `Cst_attempt_6]`, `course_code_7`, `subject_name_7`, `Ast_attempt_7`, `Bst_attempt_7`, `Cst_attempt_7`, `course_code_8`, `subject_name_8`, `Ast_attempt_8`, `Bst_attempt_8]`, `Cst_attempt_8`, `course_code_9`, `subject_name_9`, `Ast_attempt_9`, `Bst_attempt_9`, `Cst_attempt_9`, `course_code_10`, `subject_name_10`, `Ast_attempt_10`, `Bst_attempt_10`, `Cst_attempt_10`) VALUES
('', '', '', '', '', 'A.D.sandun kumara', '', '2018ICTS44', '', 0, '', '', 'TICT3421', 'hshwb wxbx', 'C-', 'C-', 'C-', 'TICT5672', 'dggsa uudss', 'C-', 'C-', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', ''),
('', '', '', '', '', '', '', '2018ICTS47', '', 0, '', '', '', '', 'C-', 'C-', 'C-', '', '', 'C-', 'C-', 'C-', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', ''),
('', '', '', '', '', '', '', '2018ICTS4u98', '', 0, '', '', '', '', 'C-', 'C-', 'C-', '', '', 'C-', 'C-', 'C-', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', ''),
('Technological Studies', '1st Examination', '1st year', '1st Semester', 'Male', 'PGAC Viduranga', 'Pallegama Gam Acharige', '2018ICTS98', 'Viduranga, Oil tank road, Deniyaya.', 770363890, '23/09/2020', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `signnew`
--

CREATE TABLE `signnew` (
  `id` int(11) NOT NULL,
  `signature_data` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signnew`
--

INSERT INTO `signnew` (`id`, `signature_data`, `created_at`) VALUES
(8, 'data:image/png;base64,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', '2023-07-30 21:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Registration_No` varchar(10) NOT NULL,
  `INnum` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Name_with_initials` varchar(50) NOT NULL,
  `Name_denoted_by_initial` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Date_of_admission` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `Mobile_Phone_no` varchar(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Registration_No`, `INnum`, `gender`, `Name_with_initials`, `Name_denoted_by_initial`, `password`, `Date_of_admission`, `email`, `Mobile_Phone_no`, `Address`, `faculty`) VALUES
('2016ICTS32', '', 'Mr.', 's. AndrewaA', 'Andrew Senanayaka', '12345', '2019-09-17', '', '0777639212', ' Anamaduwa', 'Technological Studies'),
('2018ICTS26', '', 'Female', 's.m.n.a.samarakoon', 'samarakoon mudiyanselage nishedha ayeshwery samara', '123nish', '2020-02-23', '', '0715231430', 'alawaththe niwasa dauldena,medawela udukinda', 'Technological Studies'),
('2018ICTS36', 'TS4032', 'Mr.', 'K. D. S. DILSHAN', 'Kottage Don Sahiru', '12345', '2020-02-07', 'dilshansahiru2000@gmail.com', '0716154449', 'NO 130/2/2, Ranawiru Nuwan Dhanushka Peiris Avenue, Galthude, Panadura', 'Technological Studies'),
('2018ICTS42', '', 'Mis.', 'M IMASHA a', 'MALSHI IMASHA', 'ABC@12', '2020-03-23', '', '0774656016', ' KATUNAYAKE,SRI LANKA', 'Technological Studies'),
('2018ICTS47', 'TS4042', 'Mr.', 'M.D.D.RANASINGHE', 'MUTHUNAYAKAGE DINUKA DULANJANA RANASINGHE', '111', '1999-07-04', '', '0765659067', ' 60/1 BANDARANAYAKA ROAD VEYANGODA', 'Technological Studies'),
('2018ICTS53', '', 'Mr.', 'R.M.S.S Rajapakshe', 'Rajapakshe Mudiyanselage Sachintha Sandaruwan', '8675', '2020-02-04', '', '0712446924', ' welimada', 'Technological Studies'),
('2018ICTS56', '', 'Mr.', 'K.D.N.N.PERRA', 'KAHAVITAGE DON NIPUNA NAYANAJITH PERERA', 'NIPUNA', '2020-01-24', '', '0765625117', ' HOMAGAMA', 'Technological Studies'),
('2018ICTS59', '', 'Male', 'S.J.M. NAVEEN SHALINDA SRIMAL', 'SAMARAKOON JAYASUNDARA MUDIYANSELAGE NAVEEN SHALIN', '123456789', '2020-01-23', '', '0717598542', 'NO 15,Pallepanguwa Lunugala', 'Technological Studies'),
('2018ICTS72', '', 'Mr.', 'L.S.MADUSANKA', 'LAHIRU SUJITH MADUSANKA', 'ICTS72', '2020-01-20', '', '071656444', ' MAHAUSWEWA,ANAMADUWA', 'Technological Studies');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approve_state`
--
ALTER TABLE `approve_state`
  ADD PRIMARY KEY (`Registration_No`,`Name_of_the_examination`);

--
-- Indexes for table `approve_state_medical`
--
ALTER TABLE `approve_state_medical`
  ADD PRIMARY KEY (`Registration_No`,`Name_of_the_examination`);

--
-- Indexes for table `approve_state_resit`
--
ALTER TABLE `approve_state_resit`
  ADD PRIMARY KEY (`Registration_No`,`Name_of_the_examination`);

--
-- Indexes for table `asign_lecturer`
--
ALTER TABLE `asign_lecturer`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `course_offerings`
--
ALTER TABLE `course_offerings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dr`
--
ALTER TABLE `dr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examenrty`
--
ALTER TABLE `examenrty`
  ADD PRIMARY KEY (`Registration_No`,`Name_of_the_examination`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`HODNum`);

--
-- Indexes for table `lec`
--
ALTER TABLE `lec`
  ADD PRIMARY KEY (`LECNum`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`Registration_No`,`Name_of_the_examination`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resit`
--
ALTER TABLE `resit`
  ADD PRIMARY KEY (`Registration_No`);

--
-- Indexes for table `signnew`
--
ALTER TABLE `signnew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Registration_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_offerings`
--
ALTER TABLE `course_offerings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dr`
--
ALTER TABLE `dr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `signnew`
--
ALTER TABLE `signnew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
