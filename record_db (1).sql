-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 04:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `record_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement_member`
--

CREATE TABLE `achievement_member` (
  `achievement_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `achievement_tbl`
--

CREATE TABLE `achievement_tbl` (
  `achievement_id` int(11) NOT NULL,
  `student_no` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `achievement_tbl`
--

INSERT INTO `achievement_tbl` (`achievement_id`, `student_no`, `name`, `date`, `member_id`) VALUES
(6, '2023-2222', 'Best Spiker', '10/20/2023', 0),
(21, '2023-2222', 'Most valuable Player', '12/25/2023', 0),
(22, '2023-2222', 'Most valuable Player', '12/25/2023', 0),
(23, '2023-2222', 'Best Opposite Hitter', '12/15/25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `club_member`
--

CREATE TABLE `club_member` (
  `club_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `club_organization_tbl`
--

CREATE TABLE `club_organization_tbl` (
  `club_id` int(11) NOT NULL,
  `student_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `club_organization_tbl`
--

INSERT INTO `club_organization_tbl` (`club_id`, `student_no`, `name`) VALUES
(8, '2013-2222', 'Boxing'),
(10, '2020-5296', 'Badminton'),
(11, '2020-1956', 'volleyball'),
(12, '2020-1956', 'volleyball');

-- --------------------------------------------------------

--
-- Table structure for table `event_tbl`
--

CREATE TABLE `event_tbl` (
  `event_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` varchar(50) NOT NULL,
  `club_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event_tbl`
--

INSERT INTO `event_tbl` (`event_id`, `name`, `location`, `date`, `club_id`) VALUES
(1, 'Governor\'s Cup', 'Kalibo, Aklan', '12/02/20223', 0),
(2, 'Inatramurals', 'CSQ Gym', '12/16/2023', 0),
(4, 'WVRAA', 'Numancia', '10/15/22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member_registration_tbl`
--

CREATE TABLE `member_registration_tbl` (
  `member_id` int(11) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `year_department` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `member_registration_tbl`
--

INSERT INTO `member_registration_tbl` (`member_id`, `fullname`, `year_department`, `position`, `gender`, `contact_no`, `age`) VALUES
(2, 'Isturis, Kritz M.', 'BSCS-2A', 'Spiker', 'Female', '123888', 19),
(3, 'Tipay, John Zelmar Nino B.', 'BSCS-2A', 'Spiker', 'male', '1254', 20),
(5, 'Dusaran, Jahren May P.', 'BSCS-2A', 'Libero', 'Female', '123', 19),
(6, 'Kritz M. Isturiz', 'BSCS-2A', 'Libero', 'female', '123', 19),
(8, 'Dusaran, Jahren May P.', 'BSCS-2A', 'open hitter', 'female', '12345', 19),
(17, 'oshienly', 'cs-2B', 'middle', 'Female', '12345', 19),
(24, 'Keith Lorenzo', 'BSCS-2A', 'middle blocker', 'male', '09123848', 26),
(25, 'Aian Glenn Villanueva', 'BSCS-2A', 'Spiker', 'male', '1235', 27),
(26, 'Justin Carl Casilac', 'BSCS-2A', 'Spiker', 'Male', '12345', 20),
(27, 'Mhyca Ella Herrero', 'BSED-2', 'Open Hitter', 'Female', '1232435', 20),
(28, 'Maxene Dela Cruz', 'Enginerring', 'Spiker', 'Female', '12454', 19),
(29, 'Rhazyll Teodosio', 'BSCS_2A', 'Setter', 'Female', '234335', 20),
(30, 'Alberto Mahinay', 'BSCS-2A', 'middle', 'male', '12345', 19),
(32, 'Rejane Dusaran', 'BSED-3A', 'Setter', 'Female', '55555', 20),
(33, 'Arizze Jaede Dusaran', 'Grade 1', 'Spiker', 'female', '2122546', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement_tbl`
--
ALTER TABLE `achievement_tbl`
  ADD PRIMARY KEY (`achievement_id`);

--
-- Indexes for table `club_organization_tbl`
--
ALTER TABLE `club_organization_tbl`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `event_tbl`
--
ALTER TABLE `event_tbl`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `member_registration_tbl`
--
ALTER TABLE `member_registration_tbl`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement_tbl`
--
ALTER TABLE `achievement_tbl`
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `club_organization_tbl`
--
ALTER TABLE `club_organization_tbl`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event_tbl`
--
ALTER TABLE `event_tbl`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member_registration_tbl`
--
ALTER TABLE `member_registration_tbl`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
