-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 03:41 PM
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type_id` varchar(30) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1-present 0-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `user_id`, `user_type_id`, `register_date`, `status`) VALUES
(1, 'admin', 'admin@32', 1, '1', '0000-00-00 00:00:00', 1),
(2, 'savio', 'savio@234', 2, '2', '2021-05-04 06:15:19', 1),
(3, 'apurva', 'apurva@2345', 3, '3', '2021-05-04 06:16:08', 1),
(4, 'upasana', 'upasana@234', 4, '2', '2021-05-04 06:15:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `id` int(11) NOT NULL,
  `firstname` varchar(70) NOT NULL,
  `lastname` varchar(70) NOT NULL,
  `email` varchar(90) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(99) NOT NULL,
  `id_proof` varchar(99) NOT NULL,
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

INSERT INTO `users_details` (`id`, `firstname`, `lastname`, `email`, `contact_no`, `date_of_birth`, `gender`, `address`, `profile_pic`, `id_proof`, `user_type`, `registrant`, `register_by`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'Admin', 'Bizzmirth', 'bizzmirth.admin@gmail.com', '2345678906', '', 'male', 'xyz', '', '', 1, '', '1', '2021-05-05 07:54:21', '', 1),
(2, 'Savio', 'Mirannda', 'saviomiranda@gmail.com', '23456789099', '', 'male', 'abc', '', '', 2, '3', '2', '2021-05-05 07:55:41', '', 1),
(3, 'Apurva', 'Naik', 'apurva.naik@gmail.com', '2345676909', '', 'female', 'asd', '', '', 3, '1', '1', '2021-05-05 07:57:04', '', 1),
(4, 'Upasana', 'xyz', 'upasana@gmail.com', '2377676909', '', 'female', 'fgfgfg', '', '', 2, '3', '2', '2021-05-05 07:58:33', '2021-05-20 17:06:36', 1),
(5, 'tony', 'miranda', 'tony@gmail.com', '233435535345', '2021-05-03', 'undefined', '', 'upload/profile_pic/11052021093813kitten_ball_thread_white_background_95135_1366x768.jpg', 'id_proof/11052021093857cat_black_drawing_night_apofiss_94590_1920x1080.jpg', 2, '1', '1', '2021-05-11 07:39:44', '2021-05-20 10:56:35', 1),
(6, 'stenly', 'Miranda', 'stenly@gmail.com', 'dfddsfsfsdfsdfs', '2019-07-17', 'male', '', 'upload/profile_pic/11052021123949kitten_ball_thread_white_background_95135_1366x768.jpg', 'id_proof/11052021124032kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '1', '2021-05-11 10:40:36', '', 1),
(7, 'stenly', 'Miranda', 'stenly@gmail.com', 'dfddsfsfsdfsdfs', '2019-07-17', 'male', '', 'upload/profile_pic/11052021123949kitten_ball_thread_white_background_95135_1366x768.jpg', 'id_proof/11052021124032kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '', '2021-05-11 10:41:00', '2021-05-20 10:52:38', 0),
(8, 'stenly s', 'Miranda', 'stenly@gmail.com', 'dfddsfsfsdfsdfs', '2019-07-02', 'male', '', 'upload/profile_pic/11052021123949kitten_ball_thread_white_background_95135_1366x768.jpg', 'id_proof/11052021124032kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '', '2021-05-11 10:44:19', '2021-05-20 10:52:51', 0),
(9, 'sdsd', 'dfdf', 'fabregasnasrii@gmail.com', '3434343432', '2021-05-17', 'male', '', 'upload/profile_pic/13052021131412kitten_fence_walk_fluffy_89369_1366x768.jpg', 'id_proof/13052021131441kitten_ball_thread_white_background_95135_1366x768.jpg', 2, '', '', '2021-05-13 11:14:47', '', 0),
(10, 'fgf', 'fgfgf', 'fabregasnasrii@gmail.com', '5454544543', '2021-05-10', 'male', '', 'upload/profile_pic/13052021144146kitten_ball_thread_white_background_95135_1366x768.jpg', 'id_proof/13052021144207cat_black_drawing_night_apofiss_94590_1920x1080.jpg', 2, '', '1', '2021-05-13 12:42:12', '', 2),
(11, 'sds', 'fdf', 'fabregasnasrii@gmail', '22343453546', '2021-05-18', 'male', '', 'upload/profile_pic/19052021080127kitten_ball_thread_white_background_95135_1366x768.jpg', 'id_proof/19052021080157kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '1', '2021-05-19 06:07:09', '', 2),
(12, 'sds', 'fdf', 'fabregasnasrii@gmail', '22343453546', '2021-05-18', 'male', '', 'upload/profile_pic/19052021080127kitten_ball_thread_white_background_95135_1366x768.jpg', 'id_proof/19052021080157kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '1', '2021-05-19 06:07:09', '2021-05-20 17:44:16', 2),
(13, 'sds', 'fdf', 'fabregasnasrii@gmail', '22343453546', '2021-05-18', 'male', '', 'upload/profile_pic/19052021080127kitten_ball_thread_white_background_95135_1366x768.jpg', 'id_proof/19052021080157kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '1', '2021-05-19 06:07:40', '2021-05-20 18:32:34', 0),
(14, 'sds', 'dfd', 'saviomanblue@gmail', '343434343455', '2021-05-12', 'male', '', 'upload/profile_pic/19052021080915cat_black_drawing_night_apofiss_94590_1920x1080.jpg', 'id_proof/19052021080910kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '', '2021-05-19 06:09:23', '2021-05-20 10:59:03', 1),
(15, 'sds', 'fgfg', 'saviomanblue@gmail.com', '45464664545', '2021-05-10', 'male', '', 'upload/profile_pic/19052021081434kitten_fence_walk_fluffy_89369_1366x768.jpg', 'id_proof/19052021081402kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '', '2021-05-19 06:14:37', '2021-05-20 10:59:09', 1),
(16, 'sds', 'fgfg', 'saviomanblue@gmail.com', '45464664545', '2021-05-10', 'male', '', 'upload/profile_pic/19052021081533cat_black_drawing_night_apofiss_94590_1920x1080.jpg', 'id_proof/19052021081402kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '1', '2021-05-19 06:15:37', '2021-05-20 17:43:16', 0),
(17, 'sds', 'f', 'saviomanblue@gmail.com', '4546466454', '2021-05-10', 'male', '', 'upload/profile_pic/19052021081533cat_black_drawing_night_apofiss_94590_1920x1080.jpg', 'id_proof/19052021081402kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '1', '2021-05-19 06:17:19', '2021-05-20 14:39:09', 1),
(18, 'sds', 'gfgf', 'fabregasnasrii@gmail.com', '4545454545', '2021-05-11', 'male', '', 'upload/profile_pic/19052021082050cat_black_drawing_night_apofiss_94590_1920x1080.jpg', 'id_proof/19052021082104kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '1', '2021-05-19 06:21:51', '2021-05-20 10:59:21', 1),
(19, 'sds', 'gfgf', 'fabregasnasrii@gmail.com', '4545454545', '2021-05-11', 'male', '', 'upload/profile_pic/19052021082050cat_black_drawing_night_apofiss_94590_1920x1080.jpg', 'id_proof/19052021082104kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '', '2021-05-19 06:55:03', '2021-05-20 10:54:26', 1),
(20, 'sds', 'gfgf', 'fabregasnasrii@gmail.com', '4545454548', '2021-05-11', 'male', '', 'upload/profile_pic/19052021082050cat_black_drawing_night_apofiss_94590_1920x1080.jpg', 'id_proof/19052021082104kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '1', '2021-05-19 06:56:05', '2021-05-20 11:02:17', 1),
(21, 'sds', 'fgfg', 'saviomanblue@gmail.com', '5656465445', '2021-05-21', 'male', '', 'upload/profile_pic/19052021090913kitten_fence_walk_fluffy_89369_1366x768.jpg', 'id_proof/19052021090941kitten_ball_thread_white_background_95135_1366x768.jpg', 2, '', '', '2021-05-19 07:09:43', '2021-05-20 17:43:25', 0),
(22, 'sdsd', 'hghg', 'fabregasnasrii@gmail.com', '6546565654', '2021-05-09', 'female', '', 'upload/profile_pic/19052021092007cat_black_drawing_night_apofiss_94590_1920x1080.jpg', 'id_proof/19052021092028cat_black_drawing_night_apofiss_94590_1920x1080.jpg', 2, '', '', '2021-05-19 07:20:46', '2021-05-20 16:28:40', 1),
(23, 'sdsd', 'fgfgfgfg', 'fabregasnasrii@gmail.com', '5675545654', '2021-05-03', 'male', '', 'upload/profile_pic/19052021092118kitten_ball_thread_white_background_95135_1366x768.jpg', 'id_proof/19052021092134kitten_fence_walk_fluffy_89369_1366x768.jpg', 2, '', '1', '2021-05-19 07:21:52', '2021-05-20 18:41:01', 0);

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
-- Indexes for table `login`
--
ALTER TABLE `login`
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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
