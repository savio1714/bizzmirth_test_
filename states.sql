-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 08:19 AM
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
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `short_name` varchar(5) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-allow 2-not allow'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `short_name`, `state_name`, `country_id`, `status`) VALUES
(1, 'AP', 'Andhra Pradesh', 1, 2),
(2, 'AR', 'Arunachal Pradesh', 1, 2),
(3, 'AS', 'Assam', 1, 2),
(4, 'BR', 'Bihar', 1, 2),
(5, 'CG', 'Chhattisgarh', 1, 2),
(6, 'GA', 'Goa', 1, 1),
(7, 'GJ', 'Gujarat', 1, 2),
(8, 'HR', 'Haryana', 1, 2),
(9, 'HP', 'Himachal Pradesh', 1, 2),
(10, 'JH', 'Jharkhand', 1, 2),
(11, 'KA', 'Karnataka', 1, 2),
(12, 'KL', 'Kerala', 1, 2),
(13, 'MP', 'Madhya Pradesh', 1, 2),
(14, 'MH', 'Maharashtra', 1, 2),
(15, 'MN', 'Manipur', 1, 2),
(16, 'ML', 'Meghalaya', 1, 2),
(17, 'MZ', 'Mizoram', 1, 2),
(18, 'NL', 'Nagaland', 1, 2),
(19, 'OR', 'Odisha', 1, 2),
(20, 'PB', 'Punjab', 1, 2),
(21, 'RJ', 'Rajasthan', 1, 2),
(22, 'SK', 'Sikkim', 1, 2),
(23, 'TN', 'Tamil Nadu', 1, 2),
(24, 'TS', 'Telangana', 1, 2),
(25, 'TR', 'Tripura', 1, 2),
(26, 'UP', 'Uttar Pradesh', 1, 2),
(27, 'UK', 'Uttarakhand', 1, 2),
(28, 'WB', 'West Bengal', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
