-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 01:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramakeen`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `observation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `defendants`
--

CREATE TABLE `defendants` (
  `id` int(11) DEFAULT NULL,
  `def_name` text DEFAULT NULL,
  `def_email` text DEFAULT NULL,
  `def_ID` text DEFAULT NULL,
  `def_phone` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `elwasata`
--

CREATE TABLE `elwasata` (
  `request_id` int(11) NOT NULL,
  `applicant_status` varchar(30) NOT NULL,
  `applicant_name` text NOT NULL,
  `applicant_email` text NOT NULL,
  `applicant_phone` text NOT NULL,
  `applicant_ID` varchar(50) NOT NULL,
  `defendent_name` text NOT NULL,
  `defendent_email` text NOT NULL,
  `defendent_phone` text NOT NULL,
  `defendent_ID` text NOT NULL,
  `type` text NOT NULL,
  `request_classification` varchar(60) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `subject` text NOT NULL,
  `created_at` text NOT NULL,
  `bill_number` text DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `elwasata_file`
--

CREATE TABLE `elwasata_file` (
  `id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `position` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `priv` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `password`, `email`, `mobile`, `role`, `created_at`, `updated_at`, `priv`) VALUES
(4, 'الاستاذ عمر', 'ramakeen1', 'info@ramakeen1.com', '5645645645', 'admin', '2021-09-04 01:21:20', NULL, '1'),
(5, 'الاستاذ عمر', 'ramakeen2', 'info@ramakeen2.com', '5645', 'admin', '2021-09-04 01:26:26', NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `services1`
--

CREATE TABLE `services1` (
  `service_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `service_type` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `subject` text NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_file`
--

CREATE TABLE `service_file` (
  `id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `position` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elwasata`
--
ALTER TABLE `elwasata`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services1`
--
ALTER TABLE `services1`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_file`
--
ALTER TABLE `service_file`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `elwasata`
--
ALTER TABLE `elwasata`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services1`
--
ALTER TABLE `services1`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
