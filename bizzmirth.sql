-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 03:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizzmirth`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `id_proof` varchar(255) NOT NULL,
  `level` varchar(70) NOT NULL,
  `user_type` int(11) NOT NULL,
  `registrant` varchar(100) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `register_by` varchar(99) NOT NULL COMMENT '1. admin 2.Travel Agent',
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-registered 2-pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_type_id` varchar(30) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1-present 0-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `user_id`, `user_type_id`, `register_date`, `status`) VALUES
(1, 'admin', 'admin@32', '1', '1', '2021-05-27 13:40:51', 1),
(2, 'apurva', 'apurva@2345', '1', '3', '2021-05-27 13:40:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `travel_agent`
--

CREATE TABLE `travel_agent` (
  `id` int(11) NOT NULL,
  `travel_agent_id` varchar(255) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `id_proof` varchar(255) NOT NULL,
  `registrant` varchar(100) NOT NULL,
  `register_by` varchar(100) NOT NULL COMMENT '1. admin 2.Travel Agent',
  `user_type` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '	0-deleted 1-registered 2-pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_agent`
--

INSERT INTO `travel_agent` (`id`, `travel_agent_id`, `firstname`, `lastname`, `email`, `contact_no`, `date_of_birth`, `gender`, `address`, `profile_pic`, `id_proof`, `registrant`, `register_by`, `user_type`, `register_date`, `deleted_date`, `status`) VALUES
(1, '1', 'apurva', 'naik', 'apurva@gmail.com', '2345678906', '2020-09-07', 'female', 'xyz', '', '', '1', '1', 3, '2021-05-27 06:47:04', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `firstname` varchar(70) NOT NULL,
  `lastname` varchar(70) NOT NULL,
  `email` varchar(90) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `id_proof` varchar(200) NOT NULL,
  `user_type` int(11) NOT NULL,
  `registrant` varchar(70) NOT NULL,
  `register_by` varchar(11) NOT NULL COMMENT '1. admin 2.Travel Agent\r\n',
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT ' 0-deleted  1-registered 2-pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`id`, `user_id`, `firstname`, `lastname`, `email`, `contact_no`, `date_of_birth`, `gender`, `address`, `profile_pic`, `id_proof`, `user_type`, `registrant`, `register_by`, `register_date`, `deleted_date`, `status`) VALUES
(1, '1', 'Admin', 'Bizzmirth', 'bizzmirth.admin@gmail.com', '2377676909', '', 'male', 'xyz', '', '', 1, '', '1', '2021-05-27 13:43:28', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0-deleted 1-present'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `status`) VALUES
(1, 'admin', 1),
(2, 'customer', 1),
(3, 'Travel Agent', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_agent`
--
ALTER TABLE `travel_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `travel_agent`
--
ALTER TABLE `travel_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
