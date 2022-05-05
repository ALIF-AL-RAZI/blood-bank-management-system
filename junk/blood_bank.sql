-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 06:50 PM
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
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_address` char(100) DEFAULT NULL,
  `a_b_group` char(3) DEFAULT NULL,
  `a_email` varchar(20) DEFAULT NULL,
  `a_phone` int(11) NOT NULL,
  `a_age` int(11) DEFAULT NULL,
  `a_b_quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `donates_to`
--

CREATE TABLE `donates_to` (
  `d_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `test_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_address` char(100) DEFAULT NULL,
  `d_b_group` char(3) DEFAULT NULL,
  `d_email` varchar(20) DEFAULT NULL,
  `d_phone` int(11) NOT NULL,
  `d_age` int(11) DEFAULT NULL,
  `d_b_quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `h_address` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receives_from`
--

CREATE TABLE `receives_from` (
  `a_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `test_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `a_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `test_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `Tec_id` int(11) NOT NULL,
  `Tec_name` varchar(50) NOT NULL,
  `Tec_phone` int(11) DEFAULT NULL,
  `h_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
