-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 04:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptor`
--

CREATE TABLE `acceptor` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_address` char(100) DEFAULT NULL,
  `a_b_group` char(3) DEFAULT NULL,
  `a_email` varchar(20) DEFAULT NULL,
  `a_phone` int(11) NOT NULL,
  `a_age` int(11) DEFAULT NULL,
  `a_b_quan` int(11) DEFAULT NULL,
  `a_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acceptor`
--

INSERT INTO `acceptor` (`a_id`, `a_name`, `a_address`, `a_b_group`, `a_email`, `a_phone`, `a_age`, `a_b_quan`, `a_pass`) VALUES
(201, 'rahim', 'Dhanmondi', 'AB+', 'rahim@gmail.com', 1893247294, 67, NULL, '456'),
(202, 'jalil', 'ramna', 'O+', 'jalil.gmail.com', 1254390432, 38, NULL, 'fdgd'),
(203, 'hamim', 'old dhaka', 'AB+', 'hamim@gmail.com', 1673859526, 56, NULL, '988'),
(204, 'hamim', 'old dhaka', 'AB+', 'hamim@gmail.com', 1673859526, 56, NULL, '988'),
(205, 'abul hasan', 'gulsan', 'B+', 'abul.hasan@gmail.com', 1845360129, 26, NULL, '190');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `d_id` int(11) NOT NULL,
  `test_date` date NOT NULL,
  `Tec_id` int(11) NOT NULL,
  `disease` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`d_id`, `test_date`, `Tec_id`, `disease`) VALUES
(102, '2022-04-20', 501, 'null');

-- --------------------------------------------------------

--
-- Table structure for table `donates_to`
--

CREATE TABLE `donates_to` (
  `d_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `test_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donates_to`
--

INSERT INTO `donates_to` (`d_id`, `h_id`, `test_date`) VALUES
(101, 401, '2021-11-24'),
(101, 401, '2021-12-26'),
(101, 401, '2022-01-01'),
(101, 401, '2022-01-19'),
(101, 401, '2022-01-20'),
(101, 401, '2022-03-10'),
(102, 401, '2022-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `d_id` int(10) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_address` char(100) DEFAULT NULL,
  `d_b_group` char(3) DEFAULT NULL,
  `d_email` varchar(50) NOT NULL,
  `d_phone` int(11) NOT NULL,
  `d_age` int(11) DEFAULT NULL,
  `d_b_quan` int(11) DEFAULT NULL,
  `d_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`d_id`, `d_name`, `d_address`, `d_b_group`, `d_email`, `d_phone`, `d_age`, `d_b_quan`, `d_pass`) VALUES
(101, 'Alif', 'Mirpur', 'A+', 'alif.razi@northsouth', 1872792494, 22, 250, '123'),
(102, 'khaleq', 'Uttara', 'B+', 'khaleq.rahman@gmail.com', 45, NULL, NULL, '234'),
(103, 'khaleq', 'Uttara', 'B+', 'khaleq.rahman@gmail.com', 1956756855, 45, NULL, '234'),
(104, 'abdullah', 'Uttara', 'O+', 'abdullah.gmail.com', 1565792103, 27, NULL, '890'),
(105, 'mohibul', 'kajipara', 'O+', 'mohibul@gmail.com', 1789236478, 98, NULL, '590');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `h_address` char(100) DEFAULT NULL,
  `h_phone` int(11) NOT NULL,
  `h_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_id`, `h_name`, `h_address`, `h_phone`, `h_link`) VALUES
(401, 'Evercare Hospital', 'Bashundhara', 1478634569, 'https://www.evercarebd.com/dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `receives_from`
--

CREATE TABLE `receives_from` (
  `a_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `test_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receives_from`
--

INSERT INTO `receives_from` (`a_id`, `h_id`, `test_date`) VALUES
(202, 401, '2021-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `a_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `test_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`a_id`, `h_id`, `test_date`) VALUES
(202, 401, '2022-03-10'),
(204, 401, '2022-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `Tec_id` int(11) NOT NULL,
  `Tec_name` varchar(50) NOT NULL,
  `Tec_phone` int(11) DEFAULT NULL,
  `h_id` int(11) NOT NULL,
  `Tec_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`Tec_id`, `Tec_name`, `Tec_phone`, `h_id`, `Tec_pass`) VALUES
(501, 'moinul', 1478324569, 401, '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptor`
--
ALTER TABLE `acceptor`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`d_id`,`test_date`),
  ADD KEY `Tec_id` (`Tec_id`);

--
-- Indexes for table `donates_to`
--
ALTER TABLE `donates_to`
  ADD PRIMARY KEY (`d_id`,`h_id`,`test_date`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `receives_from`
--
ALTER TABLE `receives_from`
  ADD PRIMARY KEY (`a_id`,`h_id`,`test_date`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`a_id`,`h_id`,`test_date`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`Tec_id`),
  ADD KEY `h_id` (`h_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceptor`
--
ALTER TABLE `acceptor`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD CONSTRAINT `diagnosis_ibfk_1` FOREIGN KEY (`Tec_id`) REFERENCES `technician` (`Tec_id`);

--
-- Constraints for table `donates_to`
--
ALTER TABLE `donates_to`
  ADD CONSTRAINT `donates_to_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `donor` (`d_id`),
  ADD CONSTRAINT `donates_to_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `hospital` (`h_id`);

--
-- Constraints for table `receives_from`
--
ALTER TABLE `receives_from`
  ADD CONSTRAINT `receives_from_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `acceptor` (`a_id`),
  ADD CONSTRAINT `receives_from_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `hospital` (`h_id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `acceptor` (`a_id`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `hospital` (`h_id`);

--
-- Constraints for table `technician`
--
ALTER TABLE `technician`
  ADD CONSTRAINT `technician_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hospital` (`h_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
