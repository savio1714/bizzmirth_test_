-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 01:53 PM
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
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `district` varchar(99) NOT NULL,
  `pincode` varchar(7) NOT NULL,
  `state_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0-deleted 1-allow 2-not allow'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `district`, `pincode`, `state_id`, `status`) VALUES
(1, 'Airport, Dabolim', 'South Goa', '403 801', 6, 1),
(2, 'Aldona', 'North Goa', '403 508', 6, 1),
(3, 'Altinho', 'North Goa', '403 001', 6, 1),
(4, 'Alto Porvorim', 'North Goa', '403 521', 6, 1),
(5, 'Anjuna', 'North Goa', '403 509', 6, 1),
(6, 'Aquem', 'South Goa', '403 601', 6, 1),
(7, 'Arambol', 'North Goa', '403 524', 6, 1),
(8, 'Arpora', 'North Goa', '403 518', 6, 1),
(9, 'Assonora', 'North Goa', '403 503', 6, 1),
(10, 'Assolna', 'South Goa', '403 701', 6, 1),
(11, 'Baina', 'South Goa', '403 808', 6, 1),
(12, 'Bambolim Camp', 'North Goa', '403 201', 6, 1),
(13, 'Bambolim Complex', 'North Goa', '403 202', 6, 1),
(14, 'Bazar Ponda', 'North Goa', '403 401', 6, 1),
(15, 'Benaulim', 'South Goa', '403 716', 6, 1),
(16, 'Betim', 'North Goa', '403 101', 6, 1),
(17, 'Betora Ind Estate', 'South Goa', '403 409', 6, 1),
(18, 'Betul', 'South Goa', '403 603', 6, 1),
(19, 'Bicholim', 'North Goa', '403 504', 6, 1),
(20, 'Bogmalo', 'South Goa', '403 806', 6, 1),
(21, 'Calangute', 'North Goa', '403 516', 6, 1),
(22, 'Canacona', 'South Goa', '403 702', 6, 1),
(23, 'Candolim', 'North Goa', '403 515', 6, 1),
(24, 'Cansaulim', 'South Goa', '403 712', 6, 1),
(25, 'Caranzalem', 'North Goa', '403 002', 6, 1),
(26, 'Carmona', 'South Goa', '403 523', 6, 1),
(27, 'Cavelossim', 'South Goa', '403 731', 6, 1),
(28, 'Chandor', 'South Goa', '403 174', 6, 1),
(29, 'Chicalim', 'South Goa', '403 711', 6, 1),
(30, 'Chinchinim', 'South Goa', '403 715', 6, 1),
(31, 'Chorao', 'North Goa', '404 102', 6, 1),
(32, 'Collem', 'South Goa', '403 410', 6, 1),
(33, 'Colva', 'South Goa', '403 708', 6, 1),
(34, 'Colvale', 'North Goa', '403 513', 6, 1),
(35, 'Complex Altinho', 'North Goa', '403 001', 6, 1),
(36, 'Corlim Ind. Estate', 'North Goa', '403 110', 6, 1),
(37, 'Carmona', 'South Goa', '403 717', 6, 1),
(38, 'Cortalim', 'South Goa', '403 710', 6, 1),
(39, 'Cuncolim', 'South Goa', '403 703', 6, 1),
(40, 'Curchorem', 'South Goa', '403 706', 6, 1),
(41, 'Dona Paula', 'North Goa', '403 004', 6, 1),
(42, 'Dramapur', 'South Goa', '403 725', 6, 1),
(43, 'Duler', 'North Goa', '403 527', 6, 1),
(44, 'Farmagudi', 'South Goa', '403 405', 6, 1),
(45, 'Fatorda', 'South Goa', '403 602', 6, 1),
(46, 'Fontainhas', 'North Goa', '403 001', 6, 1),
(47, 'Goa University', 'North Goa', '403 206', 6, 1),
(48, 'Goa Velha', 'North Goa', '403 108', 6, 1),
(49, 'Honda Ind Estate', 'North Goa', '403 530', 6, 1),
(50, 'Kundaim Ind Estate', 'South Goa', '403 110', 6, 1),
(51, 'Loliem', 'South Goa', '403 728', 6, 1),
(52, 'Loutulim', 'South Goa', '403 718', 6, 1),
(53, 'Majorda', 'South Goa', '403 713', 6, 1),
(54, 'Mandrem', 'North Goa', '403 527', 6, 1),
(55, 'Mapuca', 'North Goa', '403 507', 6, 1),
(56, 'Marcel', 'North Goa', '403 107', 6, 1),
(57, 'Mardol', 'North Goa', '403 404', 6, 1),
(58, 'Margao', 'South Goa', '403 601', 6, 1),
(59, 'Moira', 'North Goa', '403 514', 6, 1),
(60, 'Mormugao', 'South Goa', '403 803', 6, 1),
(61, 'Naval Base Verem', 'North Goa', '403 109', 6, 1),
(62, 'Navelim', 'South Goa', '403 707', 6, 1),
(63, 'Navelim Camp', 'South Goa', '403 707', 6, 1),
(64, 'Neura', 'North Goa', '403 104', 6, 1),
(65, 'Nuvem', 'South Goa', '403 604', 6, 1),
(66, 'Orlim', 'South Goa', '403 724', 6, 1),
(67, 'Panaji', 'North Goa', '403 001', 6, 1),
(68, 'Pernem', 'North Goa', '403 512', 6, 1),
(69, 'Ponda', 'North Goa', '403 401', 6, 1),
(70, 'Quepem', 'South Goa', '403 405', 6, 1),
(71, 'Reis Magos', 'North Goa', '403 114', 6, 1),
(72, 'Ribandar', 'North Goa', '403 006', 6, 1),
(73, 'Saligao', 'North Goa', '403 531', 6, 1),
(74, 'Sanguem', 'South Goa', '403 704', 6, 1),
(75, 'Santa Cruz', 'North Goa', '403 005', 6, 1),
(76, 'Sinquerim', 'North Goa', '403 519', 6, 1),
(77, 'Siolim', 'North Goa', '403 517', 6, 1),
(78, 'Taleigao', 'North Goa', '403 003', 6, 1),
(79, 'Tisca (Ponda)', 'South Goa', '403 406', 6, 1),
(80, 'Tivim', 'North Goa', '403 502', 6, 1),
(81, 'Usgao', 'North Goa', '403 407', 6, 1),
(82, 'Vaddem', 'South Goa', '403 802', 6, 1),
(83, 'Valpoi', 'North Goa', '403 506', 6, 1),
(84, 'Varca', 'South Goa', '403 721', 6, 1),
(85, 'Vasco da Gama', 'South Goa', '403 802', 6, 1),
(86, 'Velim', 'South Goa', '403 722', 6, 1),
(87, 'Verna', 'South Goa', '403 722', 6, 1),
(88, 'Zuarinagar', 'South Goa', '403 726', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_code` varchar(5) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0-deleted 1-allow 2-not allow'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `country_name`, `country_code`, `status`) VALUES
(1, 'IN', 'India', '+91', 1);

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
  `country_code` varchar(3) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(8) NOT NULL,
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

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `id_proof`, `level`, `user_type`, `registrant`, `reference_no`, `register_by`, `register_date`, `deleted_date`, `status`) VALUES
(1, '1', 'savio', 'miranda', 'savio@gmail.com', ' 91', '5643765785', '1996-06-15', '25', 'male', '1', '6', '12', '403 201', 'dfffsdfsdf', 'upload/profile_pic/21062021131511kitten_ball_thread_white_background_95135_1366x768.jpg', 'id_proof/21062021131542kitten_fence_walk_fluffy_89369_1366x768.jpg', '', 2, '', '', '1', '2021-06-21 11:15:43', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `franchisee`
--

CREATE TABLE `franchisee` (
  `id` int(11) NOT NULL,
  `franchisee_id` varchar(255) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `kyc` varchar(255) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `aadhar_card` varchar(255) NOT NULL,
  `voting_card` varchar(255) NOT NULL,
  `bank_passbook` varchar(255) NOT NULL,
  `registrant` varchar(100) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `register_by` varchar(100) NOT NULL COMMENT '1. admin 5.Sales Manager',
  `user_type` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-registered 2-pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `franchisee`
--

INSERT INTO `franchisee` (`id`, `franchisee_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `registrant`, `reference_no`, `register_by`, `user_type`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'BH_F_2021_001', 'savio', 'miranda', 'savio@gmail.com', ' 91', '6542349834', '2000-06-01', '21', 'male', '1', '6', '14', '403 401', 'fatorad margao goa', 'profile_pic/26062021113741cat_black_drawing_night_apofiss_94590_1920x1080.jpg', '', '', '', '', '', 'stenly miranda', '1', '5', 4, '2021-06-26 10:57:51', '2021-06-26 16:27:51', 0),
(2, 'BH_F_2021_002', 'upasana', 'pandit', 'upasana@gmail.com', ' 91', '6542349838', '1999-06-07', '22', 'male', '1', '6', '17', '403 409', 'fatorad margao goa', 'profile_pic/26062021125838kitten_ball_thread_white_background_95135_1366x768.jpg', 'kyc/28062021120333kitten_fence_walk_fluffy_89369_1366x768.jpg', '', '', '', '', 'tony miranda', '2', '5', 4, '2021-06-28 10:03:34', '', 1),
(3, 'BH_F_2021_003', 'savio', 'sdsda', 'xyz@gmail.com', ' 91', '2345678909', '1999-06-22', '22', 'male', '1', '6', '13', '403 202', 'fatorad margao goa', 'profile_pic/26062021130020cat_black_drawing_night_apofiss_94590_1920x1080.jpg', '', '', '', '', '', 'stenly miranda', '1', '5', 4, '2021-06-26 11:00:29', '2021-06-26 16:30:29', 0);

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
(1, 'admin', 'admin@32', '1', '1', '2021-06-25 10:47:44', 1),
(2, 'savio@gmail.com', '%t(Og*7Q', 'BH_F_2021_001', '4', '2021-06-26 09:37:46', 0),
(3, 'savio@gmail.com', 'Gw%La0UQ', 'BH_TA_2021_001', '3', '2021-06-26 09:41:40', 0),
(4, 'upasana@gmail.com', 'XKCT6%ZQ', 'BH_F_2021_002', '4', '2021-06-26 10:59:47', 1),
(5, 'xyz@gmail.com', 'XGB(YOTq', 'BH_F_2021_003', '4', '2021-06-26 11:00:25', 0),
(6, 'xyz@gmail.com', 'L!ZVHSti', 'BH_TA_2021_002', '3', '2021-06-28 09:59:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_manager`
--

CREATE TABLE `sales_manager` (
  `id` int(11) NOT NULL,
  `sales_manager_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `kyc` varchar(255) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `aadhar_card` varchar(255) NOT NULL,
  `voting_card` varchar(255) NOT NULL,
  `bank_passbook` varchar(255) NOT NULL,
  `registrant` varchar(100) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `register_by` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-registered 2-pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_manager`
--

INSERT INTO `sales_manager` (`id`, `sales_manager_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `registrant`, `reference_no`, `register_by`, `user_type`, `register_date`, `deleted_date`, `status`) VALUES
(1, '1', 'stenly', 'miranda', 'stenly@gmail.com', ' 91', '2377676909', '2002-06-02', '', 'male', '1', '6', '13', '403 202', 'xyz 566jgvdsads', 'profile_pic/25062021071042kitten_ball_thread_white_background_95135_1366x768.jpg', '', '', '', '', '', '', '', '', 5, '2021-06-25 07:56:06', '0000-00-00', 1),
(2, '2', 'tony', 'miranda', 'tony@gmail.com', ' 91', '2377676909', '2002-06-02', '', 'male', '1', '6', '13', '403 202', 'xyz 566jgvdsads', 'profile_pic/25062021071042kitten_ball_thread_white_background_95135_1366x768.jpg', '', '', '', '', '', '', '', '', 5, '2021-06-25 07:56:10', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-allow 2-not allow'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`, `country_id`, `status`) VALUES
(1, 'Andhra Pradesh', 1, 2),
(2, 'Arunachal Pradesh', 1, 2),
(3, 'Assam', 1, 2),
(4, 'Bihar', 1, 2),
(5, 'Chhattisgarh', 1, 2),
(6, 'Goa', 1, 1),
(7, 'Gujarat', 1, 2),
(8, 'Haryana', 1, 2),
(9, 'Himachal Pradesh', 1, 2),
(10, 'Jharkhand', 1, 2),
(11, 'Karnataka', 1, 2),
(12, 'Kerala', 1, 2),
(13, 'Madhya Pradesh', 1, 2),
(14, 'Maharashtra', 1, 2),
(15, 'Manipur', 1, 2),
(16, 'Meghalaya', 1, 2),
(17, 'Mizoram', 1, 2),
(18, 'Nagaland', 1, 2),
(19, 'Odisha', 1, 2),
(20, 'Punjab', 1, 2),
(21, 'Rajasthan', 1, 2),
(22, 'Sikkim', 1, 2),
(23, 'Tamil Nadu', 1, 2),
(24, 'Telangana', 1, 2),
(25, 'Tripura', 1, 2),
(26, 'Uttar Pradesh', 1, 2),
(27, 'Uttarakhand', 1, 2),
(28, 'West Bengal', 1, 2);

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
  `country_code` varchar(3) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `kyc` varchar(255) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `aadhar_card` varchar(255) NOT NULL,
  `voting_card` varchar(255) NOT NULL,
  `bank_passbook` varchar(255) NOT NULL,
  `registrant` varchar(100) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `register_by` varchar(100) NOT NULL COMMENT '1. admin 4.Franchisee',
  `user_type` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '	0-deleted 1-registered 2-pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_agent`
--

INSERT INTO `travel_agent` (`id`, `travel_agent_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `registrant`, `reference_no`, `register_by`, `user_type`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'BH_TA_2021_001', 'saviook', 'dfdf', 'savio@gmail.com', ' 91', '6542349838', '1996-06-01', '25', 'male', '1', '6', '14', '403 401', 'fatorad margao goa', 'profile_pic/26062021114135kitten_ball_thread_white_background_95135_1366x768.jpg', '', '', '', '', '', 'savio miranda', 'BH_F_2021_001', '4', 3, '2021-06-26 09:41:36', '2021-06-26 16:27:40', 0),
(2, '', 'saviom', 'dfdf', 'savidfdfo@gmail.com', ' 91', '4543576437', '2000-06-03', '21', 'female', '1', '6', '3', '403 001', 'dfdfdfdfdsdf', 'profile_pic/26062021115232kitten_ball_thread_white_background_95135_1366x768.jpg', '', '', '', '', '', 'savio miranda', 'BH_F_2021_001', '4', 3, '2021-06-26 09:52:47', '', 2),
(3, 'BH_TA_2021_002', 'savio m', 'miranda', 'xyz@gmail.com', ' 91', '2345678909', '1998-06-02', '23', 'male', '1', '6', '11', '403 808', 'fatorad margao goa', 'profile_pic/29062021084615kitten_fence_walk_fluffy_89369_1366x768.jpg', 'kyc/28062021110122kitten_fence_walk_fluffy_89369_1366x768.jpg', 'pancard/28062021110127cat_black_drawing_night_apofiss_94590_1920x1080.jpg', '', '', '', 'fdfsfdf sdfdsfsdf', 'BH_F_2021_002', '4', 3, '2021-06-28 09:00:30', '', 1);

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
(3, 'Travel Agent', 1),
(4, 'Franchisee', 1),
(5, 'Sales Manager', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchisee`
--
ALTER TABLE `franchisee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_manager`
--
ALTER TABLE `sales_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
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
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `franchisee`
--
ALTER TABLE `franchisee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales_manager`
--
ALTER TABLE `sales_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `travel_agent`
--
ALTER TABLE `travel_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
