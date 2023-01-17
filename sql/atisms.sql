-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 01:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atisms`
--

-- --------------------------------------------------------

--
-- Table structure for table `alresult`
--

CREATE TABLE `alresult` (
  `s_ino` varchar(20) NOT NULL,
  `a_ino` int(11) NOT NULL,
  `a_year` year(4) NOT NULL,
  `a_aggregate` double NOT NULL,
  `a_medi` varchar(10) NOT NULL,
  `a_sub1` varchar(30) NOT NULL,
  `a_mar1` varchar(2) NOT NULL,
  `a_sub2` varchar(30) NOT NULL,
  `a_mar2` varchar(2) NOT NULL,
  `a_sub3` varchar(30) NOT NULL,
  `a_mar3` varchar(2) NOT NULL,
  `a_mar4` varchar(2) NOT NULL,
  `a_mar5` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alresult`
--

INSERT INTO `alresult` (`s_ino`, `a_ino`, `a_year`, `a_aggregate`, `a_medi`, `a_sub1`, `a_mar1`, `a_sub2`, `a_mar2`, `a_sub3`, `a_mar3`, `a_mar4`, `a_mar5`) VALUES
('VAV/IT/2018/F/0001', 23454321, 0000, 0.123, 'Tamil', 'ewhgfd', 'B', 'rgfd', 'B', 'fdhgfd', 'B', 'B', '34'),
('VAV/IT/2018/F/0002', 123456, 2015, 0.245, 'Tamil', 'Economic', 'A', 'Account', 'A', 'Business Study', 'A', 'A', '65');

-- --------------------------------------------------------

--
-- Table structure for table `attempt1`
--

CREATE TABLE `attempt1` (
  `r_id` int(11) NOT NULL,
  `s_id` varchar(20) DEFAULT NULL,
  `r_course` varchar(10) DEFAULT NULL,
  `b_year` year(4) DEFAULT NULL,
  `r_year` varchar(5) DEFAULT NULL,
  `r_semi` varchar(5) DEFAULT NULL,
  `r_sub1` varchar(5) DEFAULT NULL,
  `r_sub2` varchar(5) DEFAULT NULL,
  `r_sub3` varchar(5) DEFAULT NULL,
  `r_sub4` varchar(5) DEFAULT NULL,
  `r_sub5` varchar(5) DEFAULT NULL,
  `r_sub6` varchar(5) DEFAULT NULL,
  `r_sub7` varchar(5) DEFAULT NULL,
  `r_sub8` varchar(5) DEFAULT NULL,
  `r_gpa` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attempt1`
--

INSERT INTO `attempt1` (`r_id`, `s_id`, `r_course`, `b_year`, `r_year`, `r_semi`, `r_sub1`, `r_sub2`, `r_sub3`, `r_sub4`, `r_sub5`, `r_sub6`, `r_sub7`, `r_sub8`, `r_gpa`) VALUES
(27, 'VAV/IT/2018/F/0001', 'HNDIT', 2018, '1st', '1st', 'A+', 'A+', 'A-', 'A', 'E', 'A-', 'B', 'A', 4),
(28, 'VAV/IT/2018/F/0002', 'HNDIT', 2018, '1st', '1st', 'A+', 'A+', 'A+', 'A', 'A+', 'A+', 'A+', 'A+', 4);

-- --------------------------------------------------------

--
-- Table structure for table `attempt2`
--

CREATE TABLE `attempt2` (
  `r_id` int(11) NOT NULL,
  `s_id` varchar(20) DEFAULT NULL,
  `r_course` varchar(10) DEFAULT NULL,
  `b_year` year(4) DEFAULT NULL,
  `r_year` varchar(5) DEFAULT NULL,
  `r_semi` varchar(5) DEFAULT NULL,
  `r_sub1` varchar(5) DEFAULT NULL,
  `r_sub2` varchar(5) DEFAULT NULL,
  `r_sub3` varchar(5) DEFAULT NULL,
  `r_sub4` varchar(5) DEFAULT NULL,
  `r_sub5` varchar(5) DEFAULT NULL,
  `r_sub6` varchar(5) DEFAULT NULL,
  `r_sub7` varchar(5) DEFAULT NULL,
  `r_sub8` varchar(5) DEFAULT NULL,
  `r_gpa` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attempt2`
--

INSERT INTO `attempt2` (`r_id`, `s_id`, `r_course`, `b_year`, `r_year`, `r_semi`, `r_sub1`, `r_sub2`, `r_sub3`, `r_sub4`, `r_sub5`, `r_sub6`, `r_sub7`, `r_sub8`, `r_gpa`) VALUES
(23, 'VAV/IT/2018/F/0001', 'HNDIT', 2018, '1st', '2nd', NULL, NULL, '', '', 'C', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attempt3`
--

CREATE TABLE `attempt3` (
  `r_id` int(11) NOT NULL,
  `s_id` varchar(20) DEFAULT NULL,
  `r_course` varchar(10) DEFAULT NULL,
  `b_year` year(4) DEFAULT NULL,
  `r_year` varchar(5) DEFAULT NULL,
  `r_semi` varchar(5) DEFAULT NULL,
  `r_sub1` varchar(5) DEFAULT NULL,
  `r_sub2` varchar(5) DEFAULT NULL,
  `r_sub3` varchar(5) DEFAULT NULL,
  `r_sub4` varchar(5) DEFAULT NULL,
  `r_sub5` varchar(5) DEFAULT NULL,
  `r_sub6` varchar(5) DEFAULT NULL,
  `r_sub7` varchar(5) DEFAULT NULL,
  `r_sub8` varchar(5) DEFAULT NULL,
  `r_gpa` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attempt4`
--

CREATE TABLE `attempt4` (
  `r_id` int(11) NOT NULL,
  `s_id` varchar(20) DEFAULT NULL,
  `r_course` varchar(10) DEFAULT NULL,
  `b_year` year(4) DEFAULT NULL,
  `r_year` varchar(5) DEFAULT NULL,
  `r_semi` varchar(5) DEFAULT NULL,
  `r_sub1` varchar(5) DEFAULT NULL,
  `r_sub2` varchar(5) DEFAULT NULL,
  `r_sub3` varchar(5) DEFAULT NULL,
  `r_sub4` varchar(5) DEFAULT NULL,
  `r_sub5` varchar(5) DEFAULT NULL,
  `r_sub6` varchar(5) DEFAULT NULL,
  `r_sub7` varchar(5) DEFAULT NULL,
  `r_sub8` varchar(5) DEFAULT NULL,
  `r_gpa` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(11) NOT NULL,
  `c_fname` varchar(60) NOT NULL,
  `c_sname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_fname`, `c_sname`) VALUES
(18, 'Hieger National Diploma in English', 'HNDE'),
(19, 'height national diploma in information technology', 'HNDIT'),
(20, 'Hieger National Diploma Accounting', 'HNDA');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `password`) VALUES
(1, 'admin', '123'),
(2, 'user', '123');

-- --------------------------------------------------------

--
-- Table structure for table `olresult`
--

CREATE TABLE `olresult` (
  `s_ino` varchar(20) NOT NULL,
  `o_ino` int(10) NOT NULL,
  `o_year` year(4) NOT NULL,
  `o_medi` varchar(10) NOT NULL,
  `o_mar1` varchar(2) NOT NULL,
  `o_mar2` varchar(2) NOT NULL,
  `o_mar3` varchar(2) NOT NULL,
  `o_mar4` varchar(2) NOT NULL,
  `o_mar5` varchar(2) NOT NULL,
  `o_mar6` varchar(2) NOT NULL,
  `o_sub7` varchar(30) NOT NULL,
  `o_mar7` varchar(2) NOT NULL,
  `o_sub8` varchar(30) NOT NULL,
  `o_mar8` varchar(2) NOT NULL,
  `o_sub9` varchar(30) NOT NULL,
  `o_mar9` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `olresult`
--

INSERT INTO `olresult` (`s_ino`, `o_ino`, `o_year`, `o_medi`, `o_mar1`, `o_mar2`, `o_mar3`, `o_mar4`, `o_mar5`, `o_mar6`, `o_sub7`, `o_mar7`, `o_sub8`, `o_mar8`, `o_sub9`, `o_mar9`) VALUES
('VAV/IT/2018/F/0001', 345465654, 0000, 'Tamil', 'A', 'A', 'B', 'A', 'A', 'A', 'Business & Accounting', 'A', 'Music', 'A', 'Information $ Communication', 'o_'),
('VAV/IT/2018/F/0002', 123456, 2013, 'Tamil', 'A', 'A', 'B', 'A', 'A', 'A', 'Business & Accounting', 'A', 'Music', 'A', 'Information $ Communication', 'o_');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `s_ino` varchar(20) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `byear` year(4) NOT NULL,
  `course` varchar(15) NOT NULL,
  `s_iname` varchar(30) NOT NULL,
  `s_fname` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `age` int(3) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `p_add` varchar(70) NOT NULL,
  `c_add` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`s_ino`, `image_name`, `byear`, `course`, `s_iname`, `s_fname`, `dob`, `age`, `nic`, `gender`, `mobile`, `email`, `country`, `state`, `p_add`, `c_add`) VALUES
('VAV/IT/2018/F/0001', '63c65499141cc-1673942169.jpg', 2008, 'HNDIT', 'k.kalaivathanan', 'kanesh kalaivathanan', '1996-06-13', 23, '123456789v', 'Male', 773852345, 'Student@gmail.com', 'Sri Lanka', 'Northen', 'vavuniya', 'vavuniya'),
('VAV/IT/2018/F/0002', '63c6571e71e20-1673942814.jpg', 2018, 'HNDIT', 'K.KANNAN', 'KARNAN KANNAN', '1996-01-17', 0, '123456789V', 'Male', 771234567, 'KANNAN@GMAIL.COM', 'Sri Lanka', 'Northen', 'Vavuniya Vavuniya', 'Vavuniya Vavuniya');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` varchar(11) NOT NULL,
  `sub_fname` varchar(60) NOT NULL,
  `sub_sname` varchar(10) NOT NULL,
  `sub_cre` int(2) NOT NULL,
  `sub_course` varchar(10) NOT NULL,
  `sub_year` varchar(10) NOT NULL,
  `sub_semi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_fname`, `sub_sname`, `sub_cre`, `sub_course`, `sub_year`, `sub_semi`) VALUES
('HNDA1209', 'Acoount', 'AC', 6, 'HNDA', '1st', '1st'),
('HNDA1210', 'economic', 'ECO', 5, 'HNDA', '1st', '1st'),
('HNDA1211', 'Business', 'BUS', 5, 'HNDA', '1st', '1st'),
('HNDIT1209', 'Object oriented programming', 'OOP', 2, 'HNDIT', '1st', '1st'),
('HNDIT1210', 'graphic and multimedia', 'GM', 3, 'HNDIT', '1st', '1st'),
('HNDIT1211', 'data structure and algorithms', 'DSA', 2, 'HNDIT', '1st', '1st'),
('HNDIT1212', 'system analysis and design', 'SAD', 3, 'HNDIT', '1st', '1st'),
('HNDIT1213', 'data communication and network', 'DCN', 3, 'HNDIT', '1st', '1st'),
('HNDIT1214', 'statistics for information technology', 'SIT', 3, 'HNDIT', '1st', '1st'),
('HNDIT1215', 'English for technology II', 'EN', 4, 'HNDIT', '1st', '1st'),
('HNDIT1216', 'human values and professional ethics', 'HV', 4, 'HNDIT', '1st', '1st');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alresult`
--
ALTER TABLE `alresult`
  ADD PRIMARY KEY (`s_ino`);

--
-- Indexes for table `attempt1`
--
ALTER TABLE `attempt1`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `attempt2`
--
ALTER TABLE `attempt2`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `attempt3`
--
ALTER TABLE `attempt3`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `attempt4`
--
ALTER TABLE `attempt4`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `olresult`
--
ALTER TABLE `olresult`
  ADD PRIMARY KEY (`s_ino`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`s_ino`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempt1`
--
ALTER TABLE `attempt1`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `attempt2`
--
ALTER TABLE `attempt2`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `attempt3`
--
ALTER TABLE `attempt3`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attempt4`
--
ALTER TABLE `attempt4`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
