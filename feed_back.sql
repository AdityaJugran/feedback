-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2017 at 08:17 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feed_back`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assign_subject`
--

CREATE TABLE `assign_subject` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `stream` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_subject`
--

INSERT INTO `assign_subject` (`id`, `subject_id`, `faculty_id`, `stream`) VALUES
(2, 6, 5, 1),
(3, 10, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `college_name`
--

CREATE TABLE `college_name` (
  `id` int(11) NOT NULL,
  `college` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_name`
--

INSERT INTO `college_name` (`id`, `college`) VALUES
(1, 'B.Tech'),
(2, 'B.Ed'),
(3, 'B.C.A');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`id`, `name`, `email`, `password`, `gender`) VALUES
(5, 'aman kk', 'xty@ff', '1234', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_chk`
--

CREATE TABLE `feedback_chk` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_chk`
--

INSERT INTO `feedback_chk` (`id`, `student_id`, `time`) VALUES
(1, 3, '2017-10-14 12:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `result_cal`
--

CREATE TABLE `result_cal` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `ques_id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_cal`
--

INSERT INTO `result_cal` (`id`, `student_id`, `subject_id`, `faculty_id`, `ques_id`, `score`) VALUES
(1, 3, 1, 2, 1, 1),
(2, 3, 3, 1, 1, 1),
(3, 3, 1, 2, 2, 1),
(4, 3, 3, 1, 2, 2),
(5, 3, 1, 2, 3, 1),
(6, 3, 3, 1, 3, 3),
(7, 3, 1, 2, 4, 1),
(8, 3, 3, 1, 4, 4),
(9, 3, 1, 2, 5, 1),
(10, 3, 3, 1, 5, 1),
(11, 3, 1, 2, 6, 1),
(12, 3, 3, 1, 6, 2),
(13, 3, 1, 2, 7, 1),
(14, 3, 3, 1, 7, 3),
(15, 3, 1, 2, 8, 1),
(16, 3, 3, 1, 8, 4),
(17, 3, 1, 2, 9, 1),
(18, 3, 3, 1, 9, 1),
(19, 3, 1, 2, 10, 1),
(20, 3, 3, 1, 10, 1),
(21, 3, 1, 2, 11, 1),
(22, 3, 3, 1, 11, 1),
(23, 3, 1, 2, 12, 1),
(24, 3, 3, 1, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STREAM`
--

CREATE TABLE `STREAM` (
  `id` int(11) NOT NULL,
  `stream` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STREAM`
--

INSERT INTO `STREAM` (`id`, `stream`) VALUES
(1, 'C.S.E.'),
(2, 'Civil'),
(3, 'Mechanical'),
(4, 'E.C.E'),
(5, 'E.E.E.'),
(6, 'B.C.A.'),
(7, 'B.Ed');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `admission_year` year(4) NOT NULL,
  `lateral_entry` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `registration_id` varchar(200) NOT NULL,
  `college_id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `stream` varchar(400) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `name`, `email`, `phone`, `password`, `admission_year`, `lateral_entry`, `semester`, `registration_id`, `college_id`, `roll_no`, `stream`, `gender`) VALUES
(2, 'asdfg', '', '', '', 0000, 0, 0, '0', 0, 0, '', ''),
(3, 'ADITYA JUGRAN', 'adityajugran@xyz.com', '1234567890', '0987654321', 2014, 0, 7, '1234', 1, 1, 'C.S.E.', 'male'),
(4, 'Ankita sharma', 'adityajugran@ymail.com', '987654321', '123', 2015, 2, 5, '68', 1, 98, 'C.S.E', 'female'),
(6, 'Aditya singh', 'adit@i.ci', '987654321', '1234', 2014, 2, 7, '3', 2, 3, 'C.S.E.', 'male'),
(7, 'Aditya singh', 'adit@i.ci', '987654321', '1234', 2014, 2, 7, '3', 2, 3, 'B.Ed', 'male'),
(8, 'anita jugran', 'anitajugran@xyz', '9632587412', '0987654321', 2015, 2, 5, '6985', 1, 2, 'C.S.E', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(200) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_code`, `semester`) VALUES
(5, 'HUM', 'HUM-101', 5),
(6, 'TEST1', '101', 1),
(7, 'TEST2', '102', 1),
(8, 'TEST3', '103', 1),
(9, 'TESTSEM2', '201', 2),
(10, 'TESTSEM22', '202', 2),
(11, 'TEST53', '203', 2),
(12, 'IT3', '301', 3),
(13, 'IT31', '302', 3),
(14, 'ITI', '303', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_subject`
--
ALTER TABLE `assign_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_name`
--
ALTER TABLE `college_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_chk`
--
ALTER TABLE `feedback_chk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `result_cal`
--
ALTER TABLE `result_cal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `STREAM`
--
ALTER TABLE `STREAM`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assign_subject`
--
ALTER TABLE `assign_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `college_name`
--
ALTER TABLE `college_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faculty_details`
--
ALTER TABLE `faculty_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedback_chk`
--
ALTER TABLE `feedback_chk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `result_cal`
--
ALTER TABLE `result_cal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `STREAM`
--
ALTER TABLE `STREAM`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback_chk`
--
ALTER TABLE `feedback_chk`
  ADD CONSTRAINT `feedback_chk_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_details` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
