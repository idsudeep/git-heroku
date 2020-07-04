-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 07:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `update_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `device_details`
--

CREATE TABLE `device_details` (
  `dd_id` int(5) NOT NULL,
  `model_no` text NOT NULL,
  `date_create` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `d_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device_details`
--

INSERT INTO `device_details` (`dd_id`, `model_no`, `date_create`, `status`, `d_type`) VALUES
(3, 'U; Android 9; en-in; Re', '2019-12-09', 'active', 'phone'),
(4, 'Android 9; SM-J600GF) A', '2019-12-09', 'active', 'phone'),
(5, 'Android 7.1.1; Moto E (', '2019-12-09', 'active', 'phone'),
(6, 'Android 6.0.1; SM-J210F', '2019-12-09', 'active', 'phone'),
(8, 'U; Android 9; en-in; PO', '2019-12-09', 'active', 'phone'),
(9, 'Android 8.1.0; SM-G610F', '2019-12-09', 'active', 'phone'),
(10, 'Android 9; LLD-AL10) Ap', '2019-12-09', 'active', 'phone'),
(11, 'Android 8.1.0; CPH1803)', '2019-12-09', 'active', 'phone'),
(12, 'Android 6.0.1; Redmi 3S', '2019-12-09', 'active', 'phone'),
(17, 'Android 9; Nokia 5.1 Pl', '2019-12-13', 'active', 'phone'),
(18, 'Android 9; LLD-AL10) Ap', '2019-12-15', 'active', 'phone'),
(19, 'Android 6.0.1; KIW-L22)', '2020-05-17', 'active', 'phone'),
(20, 'Android 9; SM-A750F) Ap', '2020-05-17', 'active', 'phone'),
(21, 'Android 6.0; E5563) App', '2020-05-18', 'active', 'phone');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_d`
--

CREATE TABLE `faculty_d` (
  `userid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_d`
--

INSERT INTO `faculty_d` (`userid`, `fname`, `email`, `password`) VALUES
(1, 'auto', 'auto@gmail.com', 'ioi');

-- --------------------------------------------------------

--
-- Table structure for table `std_details`
--

CREATE TABLE `std_details` (
  `userid` int(5) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `sem` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_no` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_details`
--

INSERT INTO `std_details` (`userid`, `regno`, `fname`, `course`, `sem`, `email`, `password`, `mobile_no`) VALUES
(3, '18sksac004', 'Rahul', 'Mca', 3, 'rahul03994@gmail.com', 'ii', 9731892750),
(4, 'MCA18093 ', 'Gloria ', 'Mca', 3, 'mendonce.gloria@gmail.com', 'abc123', 9590251703),
(5, '18sksac005', 'Sahana t n', 'Mca', 3, 'sahanananjegowda55368@gmail.com', 'sahana', 7619683039),
(6, 'MCA18089', 'Neha', 'MCA', 3, 'neharamesh1998@gmail.com', '123abc', 7829878286),
(8, '18sksa002', 'Nagesh G K', 'MCA', 3, 'nagesh3kumar3@gmail.com', 'nagesh1996', 8088088713),
(9, 'MCA18101 ', 'Mahesh Balikai ', 'MCA ', 3, 'maheshbalikai80@gmail.com', 'Mahesh@462000', 8050355189),
(10, '18sksac007', 'Yashwanth ', 'Mca', 3, 'Yashwanthkumar8999@gmail.com', 'yash123', 9876543210),
(11, 'MCA18090', 'Aishwarya', 'MCA', 3, 'alakananda2281997@gmail.com', '12345678', 7795907004),
(12, '18sksac006', 'Sudeep', 'mca', 4, 'sudeep.numb@gmail.com', 'ioi', 9731892750),
(17, 'Mca18062', 'Vatiij', 'Mca', 3, 'abhijitdutta62966@gmail.com', 'abhi', 6294550746),
(18, '15p9135', 'Karan', 'M. Pharm', 3, 'boharakaran549@gmail.com', 'kbohara987', 9731893750),
(19, '14sksb7034', 'Saljagring Marak', 'mca', 4, 'saljamarak16@gmail.com', 'ioi', 9101028489),
(20, '19SKSB1708', 'Ghanshyam', 'mca', 4, 'g@gmail.com', 'ioi', 8197171195),
(21, '112', 'Fb', 'mca', 4, 'Salja715@gmail.com', 'ioi', 98666655888);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device_details`
--
ALTER TABLE `device_details`
  ADD PRIMARY KEY (`dd_id`);

--
-- Indexes for table `faculty_d`
--
ALTER TABLE `faculty_d`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `std_details`
--
ALTER TABLE `std_details`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `device_details`
--
ALTER TABLE `device_details`
  MODIFY `dd_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `faculty_d`
--
ALTER TABLE `faculty_d`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `std_details`
--
ALTER TABLE `std_details`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
