-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 02:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

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
-- Table structure for table `branch_manager`
--

CREATE TABLE `branch_manager` (
  `id` int(11) NOT NULL,
  `branch_manager_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `head_office` varchar(99) NOT NULL,
  `zone` varchar(99) NOT NULL,
  `region` varchar(99) NOT NULL,
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
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-registered 2-pending 3-removed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_manager`
--

INSERT INTO `branch_manager` (`id`, `branch_manager_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `head_office`, `zone`, `region`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `registrant`, `reference_no`, `register_by`, `user_type`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'BMGA096', 'sdfdsfdsf ok', 'dsfdsfsdf', 'dsfsd@gmail.com', '91', '0820828644', 'gfhfgh', 'gfhgfh', 'gfhgfh', '1999-07-08', '22', 'male', '1', '6', '13', '403 202', 'gfhgfhgfh', 'profile_pic/2207202109161330100.jpg', '', '', '', '', '', 'savio MIRANDA', 'RMGA001', '7', 6, '2021-08-05 10:12:10', '2021-08-05 15:42:10', 3),
(2, 'BMKL259', 'ghfhgf', 'gfhgfhgf', 'hgfhgfh@gmail.com', '91', '0808286425', 'dfsdf', 'dsff', 'dfsdfsd', '1996-07-13', '25', 'male', '1', '12', 'dfgfdgdf', '675645', 'dsfdfsdgdfgf', 'profile_pic/220720210917555c1lDgi.jpg', '', '', '', '', '', 'savio MIRANDA', 'RMGA001', '7', 6, '2021-07-29 11:29:46', '2021-07-29 16:59:46', 3),
(3, 'BMAS814', 'dfgfg', 'fdgdfg', 'dfgdfgdf@ggg.com', '91', '3464563456', 'gdfgdfg', 'fdgdfgdf', 'fdgdfg', '2000-07-14', '21', 'female', '1', '3', 'dgfdgf', '676754', 'fdgdfgdfgdfgdfgd', 'profile_pic/220720210920095c1lDgi.jpg', '', '', '', '', '', 'savio MIRANDA', 'RMGA001', '7', 6, '2021-07-26 11:06:30', '', 0),
(4, 'BMGA814', 'savio', 'Miranda', 'saviomanblue@gmail.com', '91', '0298286425', 'dsfsdf', 'sdfsfds', 'sdfsdf', '2001-07-09', '20', 'male', '1', '6', '13', '403 202', 'fdgsdfsdfsdfsdfsf', 'profile_pic/2207202109324320525386_1964954860185193_3693311684249777947_n.jpg', '', '', '', '', '', 'hghg gkgk', 'RMGA003', '7', 6, '2021-07-23 12:11:04', '', 1),
(5, 'BMGA593', 'savio ok', 'miranda ok', 'dfdsfdf@gmail.com', '91', '6754653456', 'gdfgdfg', 'dfgdfgdf', 'dfgdfgdfg', '2000-07-13', '21', 'male', '1', '6', '13', '403 202', 'fdgdfgfdgfdgfdgfdgdf ok', 'profile_pic/26072021141945at2.jpg', '', '', '', '', '', 'tony miranda', 'RMGA352', '7', 6, '2021-07-26 12:27:55', '2021-07-26 17:57:55', 3),
(6, 'BMGA610', 'dfsfsd', 'sdfdsfsdf', 'sdfsdfsd@gmail.com', '91', '5678237654', 'panjim ok', 'dsff', 'dsfdfds', '2000-07-21', '21', 'male', '1', '6', '13', '403 202', 'sdfdsfsdfsdfsdfsdfdsf', 'profile_pic/26072021143847at3.jpg', '', '', '', '', '', 'tony miranda', 'RMGA352', '7', 6, '2021-07-26 12:39:46', '', 1),
(7, 'BMGA713', 'hgfhgfh', 'fhgfhfg', 'fghgfhghf@gmail.com', '91', '7654565434', 'dfgdfgdfgdf', 'gdfgdfgdf', 'dfgdfgdf', '2000-07-21', '21', 'male', '1', '6', '2', '403 508', 'gdfgdfgdfg', 'profile_pic/27072021133535at3.jpg', '', '', '', '', '', 'savio MIRANDA', 'RMGA001', '7', 6, '2021-07-28 06:01:11', '2021-07-28 11:31:11', 3),
(8, 'BMGA837', 'fgddfgdf', 'gdfgdfg', 'dgdfgdfg@gmail.com', '91', '7676545654', 'fdsfsdfd', 'sfsdfsdf', 'sdfsdfsd', '1993-07-06', '28', 'male', '1', '6', '6', '403 601', 'dsfdsfsdfsd', 'profile_pic/27072021143337at3.jpg', '', '', '', '', '', 'savio MIRANDA', 'RMGA001', '7', 6, '2021-07-28 05:57:18', '2021-07-28 11:27:18', 3),
(9, 'BMGA612', 'fdgdfgdf ok', 'gdfgdfgd', 'dfgfgdfgdfg@gmail.com', '91', '9878675645', 'gdfgdfg', 'dfgfgfdg', 'hghgfhfgh', '2000-07-07', '21', 'male', '1', '6', '12', '403 201', 'dfgdfgdfgdf', 'profile_pic/27072021143751at2.jpg', '', '', '', '', '', 'tony miranda', 'RMGA352', '7', 6, '2021-07-28 07:00:26', '', 1),
(10, '', 'gfhgfhfg', 'gfhgfh', 'fghgfhgf@gmail.com', '91', '6756987678', 'gfhgfhgh', 'gfhgfhgfhg', 'gfhgfhgfh', '2000-07-15', '21', 'male', '1', '6', '13', '403 202', 'ghgfhgfhgfhgfh', 'profile_pic/28072021080212at3.jpg', '', '', '', '', '', 'hghg gkgk', 'RMGA003', '7', 6, '2021-07-28 06:02:34', '2021-07-28 11:32:34', 0),
(11, '', 'savio ok', 'MIRANDA', 'saviogmanblue@gmail.com', '91', '0820826425', 'hgmhm', 'ghmhmh', 'ghmghmgh', '1999-07-15', '22', 'male', '1', '6', '11', '403 808', 'hgmhmhgm', 'profile_pic/28072021090841at3.jpg', '', '', '', '', '', 'hghg gkgk', 'RMGA003', '7', 6, '2021-07-28 07:12:18', '2021-07-28 12:42:18', 0),
(12, '', 'dfsfdsf', 'sdfsdfsdf', 'sadsads@gmail.com', '91', '4567234590', 'dfgdfgd', 'fdgfdgdfgdfg', 'fdgdfgdf', '2000-07-14', '21', 'male', '1', '6', '14', '403 401', 'gfdfgfggdgdfgdfgfdgdf', 'profile_pic/29072021131508at2.jpg', 'kyc/29072021131503at3.jpg', '', '', '', '', 'savio MIRANDA', 'RMGA001', '7', 6, '2021-07-29 11:15:11', '', 2),
(13, 'BMGA095', 'dfsfdsf', 'sdfsdfsdf', 'sadsads@gmail.com', '91', '4567234590', 'dfgdfgd', 'fdgfdgdfgdfg', 'fdgdfgdf', '2000-07-14', '21', 'male', '1', '6', '14', '403 401', 'gfdfgfggdgdfgdfgfdgdf', 'profile_pic/29072021131508at2.jpg', 'kyc/29072021131503at3.jpg', '', '', '', '', 'savio MIRANDA', 'RMGA001', '7', 6, '2021-08-05 09:54:46', '', 1),
(14, 'BMGA653', 'dfsfdsf', 'sdfsdfsdf', 'sadsads@gmail.com', '91', '4567234590', 'dfgdfgd', 'fdgfdgdfgdfg', 'fdgdfgdf', '2000-07-14', '21', 'male', '1', '6', '14', '403 401', 'gfdfgfggdgdfgdfgfdgdf', 'profile_pic/29072021131508at2.jpg', 'kyc/29072021131503at3.jpg', '', '', '', '', 'savio MIRANDA', 'RMGA001', '7', 6, '2021-07-29 11:30:30', '2021-07-29 17:00:30', 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(299) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1-present 2-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `description`, `picture`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'ghgfhgf', 'ghfghgfh', 'category/09082021121353animalscat1.jpg', '2021-08-09 10:14:34', '', 1),
(2, 'fgdgfdg', 'gfdgfdgfdg', 'category/090820211216375c1lDgi.jpg', '2021-08-09 10:26:57', '', 1);

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
(88, 'Zuarinagar', 'South Goa', '403 726', 6, 1),
(89, 'Sanquelim', 'North Goa', '403505', 6, 1);

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
(1, 'IN', 'India', '91', 1);

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
  `level` varchar(70) NOT NULL,
  `user_type` int(11) NOT NULL,
  `registrant` varchar(100) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `customer_reference_no` varchar(255) NOT NULL,
  `register_by` varchar(99) NOT NULL COMMENT '1. admin 3.Travel Agent',
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-registered 2-pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `level`, `user_type`, `registrant`, `reference_no`, `customer_reference_no`, `register_by`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'CU2100001', 'savio', 'MIRANDA', 'saviomanblue@gmail.com', '91', '0208286425', '2001-07-13', '20', 'male', '1', '6', '15', '403 716', 'jfyhfjhfgfgjf', 'profile_pic/29072021074539at3.jpg', '', '', '', '', '', '', 2, '', '', '', '1', '2021-07-29 05:45:52', '2021-07-29 11:49:11', 0),
(2, 'CU2100002', 'uhjkhjh', 'kklhjhk', 'ghgjgj@gmail.com', '91', '5645348765', '1999-07-21', '22', 'male', '1', '6', '9', '403 503', 'sdfsdfdsfsdf', 'profile_pic/29072021074702at3.jpg', '', '', '', '', '', '', 2, 'ghhgfh ok ghgfhgfh', 'TA21002', '', '3', '2021-07-29 05:47:03', '2021-07-29 11:49:55', 0),
(3, 'CU2100004', 'dfgfg', 'dfgdfg', 'dfgfgfdg@gmail.com', '91', '8978675678', '2000-07-16', '21', 'male', '1', '6', '13', '403 202', 'dfgdfgdfgdfgdfg', 'profile_pic/29072021082042at3.jpg', '', '', '', '', '', '', 2, '', '', '', '1', '2021-07-29 06:20:51', '2021-07-29 11:52:13', 0),
(4, 'CU2100003', 'dfgfdgfd', 'gdfgdfgdfg', 'dfgdfgdfg@gmail.com', '91', '3456783456', '1999-07-16', '22', 'female', '1', '6', '9', '403 503', 'dfgdfgdfgdfgdfgdf', 'profile_pic/29072021082139at2.jpg', '', '', '', '', '', '', 2, 'ghhgfh ok ghgfhgfh', 'TA21002', '', '3', '2021-07-29 06:21:47', '2021-07-29 11:52:24', 0),
(5, 'CU2100005', 'gdfgdfdffg ok', 'dfgdfgfdg', 'dfgdfgd@gmail.com', '91', '4567345678', '1999-07-06', '22', 'male', '1', '6', '11', '403 808', 'hgfhgfhfghghfh', 'profile_pic/29072021114653at3.jpg', '', '', '', '', '', '', 2, '', '', '', '1', '2021-07-29 09:46:55', '', 1),
(6, 'CU2100006', 'ghjghjgh', 'hjghjhj', 'ghjhgj@gmail.com', '91', '9087876565', '1997-07-12', '24', 'male', '1', '6', '15', '403 716', 'dgfgdfgdfgdfgfdgf', 'profile_pic/29072021114826at3.jpg', '', '', '', '', '', '1', 2, 'ghhgfh ok ghgfhgfh', 'TA21002', 'CU2100005', '3', '2021-07-29 09:48:27', '2021-07-30 11:53:37', 0),
(7, 'CU2100007', 'ghhghgfh', 'gfhgfhgf', 'jfgfg@gmail.com', '91', '2345434565', '1997-07-07', '24', 'male', '1', '6', '13', '403 202', 'fdgfdgfdgdfgg', 'profile_pic/30072021082440at3.jpg', '', '', '', '', '', '', 2, 'ghhgfh ok ghgfhgfh', 'TA21002', '', '3', '2021-07-30 06:25:27', '', 1),
(8, 'CU2100008', 'dgfgfdgfdg', 'dfgdfgdfg', 'dfgdfgdf@gmial.com', '91', '7678765456', '1997-07-13', '24', 'female', '1', '6', '14', '403 401', 'dfdsfdsfsf dsfsdfsdfsd', 'profile_pic/30072021093641at2.jpg', '', '', '', '', '', '1', 2, 'ghhgfh ghgfhgfh', 'TA21002', 'CU2100007', '3', '2021-07-30 07:36:43', '', 1),
(9, '', 'gfhfghgfh', 'gfhgfhgfhfg', 'hfhfgh@gmail.com', '91', '0820828642', '1999-08-10', '22', 'male', '1', '6', '9', '403 503', 'jhhljljhjhkh', 'profile_pic/04082021115713at3.jpg', 'kyc/04082021115747at3.jpg', '', '', '', '', '', 2, '', '', '', '1', '2021-08-04 09:57:52', '', 2);

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
(1, 'F21001', 'hjsgdsg ok', 'fhfhh', 'hbhb@gmail.com', '91', '9876786546', '1997-07-21', '24', 'male', '1', '6', '9', '403 503', 'fdgsdfsdfsdfsdfsf', 'profile_pic/23072021122822at3.jpg', '', '', '', '', '', 'fdsffsdf sdfsdff', 'SMGA206', '5', 4, '2021-07-28 11:36:53', '2021-07-28 17:06:53', 0),
(2, 'F21002', 'gdfdgfdg', 'dfgdfgd', 'dfgdfgdf@ggg.com', '91', '6545654543', '1998-07-13', '23', 'female', '1', '6', '6', '403 601', 'sdfsdfdsfsdf', 'profile_pic/28072021133746at3.jpg', '', '', '', '', '', 'fdsffsdf ok sdfsdff', 'SMGA206', '5', 4, '2021-07-30 05:02:03', '2021-07-30 10:32:03', 0),
(3, '', 'gfhgfhgfh ok', 'gfhgfhgfh', 'gfhgfh@gmail.com', '91', '4537656789', '1998-07-13', '23', 'male', '1', '6', '11', '403 808', 'fdgfgdfgddfg', 'profile_pic/29072021072758at3.jpg', '', '', '', '', '', 'tony miranda', 'SMGA470', '5', 4, '2021-07-29 05:30:29', '', 2),
(4, 'F21003', 'dsgfdsf ok', 'sdfsdfsd', 'fsdfsdfsd@gmail.com', '91', '8978675690', '1999-07-06', '22', 'male', '1', '6', '12', '403 201', 'dasdadasd dasdasdsd', 'profile_pic/30072021070259at3.jpg', '', '', '', '', '', 'tony sdfsdff', 'SMGA206', '5', 4, '2021-08-02 10:13:08', '', 1),
(5, '', 'fgfdgfd', 'dfgfdg', 'fdgfdgdfg@gmail.com', '91', '0808286425', '2000-08-20', '20', 'male', '1', '6', '16', '403 101', 'fdsfdsfsdfsdfsdf', 'profile_pic/05082021111555at3.jpg', '', '', '', '', '', 'savio fgjfjgf', 'SMGA205', '5', 4, '2021-08-05 09:16:24', '', 2);

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
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '3-removed 1-present 0-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `user_id`, `user_type_id`, `register_date`, `status`) VALUES
(1, 'admin', 'admin@32', '1', '1', '2021-07-22 05:33:03', 1),
(2, 'saviomanblue@gmail.com', 'EmNMwqag', 'RMGA001', '7', '2021-07-22 06:49:38', 1),
(3, 'saviomaggugnblue@gmail.com', 'luA!Dgiw', 'RMKL002', '7', '2021-07-22 06:49:43', 1),
(4, 'saviomanvhvblue@gmail.com', '@Ca4g*E3', 'RMGA003', '7', '2021-07-22 06:49:49', 3),
(5, 'nbnb@gamil.com', 'c5ZmPoHE', 'RMAS003', '7', '2021-07-22 06:52:00', 1),
(6, 'saviomanblue@gmail.com', 'J8#uRjT*', 'BM417', '6', '2021-07-22 07:10:51', 1),
(7, 'dsfsd@gmail.com', 'Meo!k*Wc', 'BMGA096', '6', '2021-07-22 07:16:19', 3),
(8, 'hgfhgfh@gmail.com', 'BqtNXJ6z', 'BMKL259', '6', '2021-07-22 07:18:43', 1),
(9, 'dfgdfgdf@ggg.com', 'Cr9*f0nx', 'BMAS814', '6', '2021-07-22 07:20:21', 1),
(10, 'saviomanblue@gmail.com', 'mM4Pfk*C', 'BMGA814', '6', '2021-07-22 07:32:48', 1),
(11, 'fghf@gmail.com', 'Eau#wtyh', 'BMGA485', '7', '2021-07-22 11:30:01', 3),
(12, 'saviomanblue@gmail.com', 'JLM(k5vG', 'SMGA205', '5', '2021-07-22 11:38:46', 3),
(13, 'fghg@gmail.com', 'nm6BpRVH', 'SMGA910', '5', '2021-07-22 11:43:07', 3),
(14, 'saviomanblue@gmail.com', 'pjhc^bW0', 'SMGA205', '5', '2021-07-22 12:05:11', 3),
(15, 'sdfsdf@gmail.com', 'kS7WqmlR', 'SMGA206', '5', '2021-07-22 12:37:44', 1),
(16, 'khjkhj@gmail.com', 'UAoi4f5*', 'SMGA246', '5', '2021-07-22 12:39:40', 3),
(17, 'hbhb@gmail.com', 'IRAs5vTd', 'F21001', '4', '2021-07-23 10:29:32', 0),
(18, 'fhfh@gmail.com', 'UL9pICX@', 'SMGA756', '5', '2021-07-23 11:16:10', 3),
(19, 'tonye@gmail.com', 'yqju1QGS', 'SMGA470', '5', '2021-07-26 11:10:00', 3),
(20, 'tony@gmail.com', 'KWcbCfro', 'RMGA352', '7', '2021-07-26 11:14:45', 3),
(21, 'dfdsfdf@gmail.com', 'McpqXylL', 'BMGA593', '6', '2021-07-26 12:20:55', 3),
(22, 'sdfsdfsd@gmail.com', 'E)rC2Sn@', 'BMGA610', '6', '2021-07-26 12:39:46', 1),
(23, 'fghgfhghf@gmail.com', '4OY9K%HA', 'BMGA713', '6', '2021-07-27 12:24:47', 3),
(24, 'dgdfgdfg@gmail.com', '9JKOLVXw', 'BMGA837', '6', '2021-07-27 12:33:43', 3),
(25, 'dfgfgdfgdfg@gmail.com', '4#(2zQxb', 'BMGA612', '6', '2021-07-27 12:40:35', 1),
(26, 'dfgdfgdf@ggg.com', '#7P63%FH', 'RMGA841', '7', '2021-07-28 07:23:40', 1),
(27, 'jkjklj@gmail.com', 'Agz5rGV%', 'RMGA860', '7', '2021-07-28 07:25:26', 1),
(28, 'vcbcvb@gmail.com', 'lIBesxyW', 'RMGA859', '7', '2021-07-28 09:47:05', 1),
(29, 'dfgdfgdf@ggg.com', 'Gjab8ZQe', 'SMGA694', '5', '2021-07-28 09:58:43', 3),
(30, 'dfgdfgdf@ggg.com', 'cMk0UAIB', 'F21002', '4', '2021-07-28 11:38:40', 0),
(31, 'saviomanblue@gmail.com', '7qWtvJx#', 'TA21001', '3', '2021-07-28 12:42:39', 0),
(32, 'gfhgfh@gmail.com', 'Savio@234', 'TA21002', '3', '2021-07-29 05:35:09', 1),
(33, 'saviomanblue@gmail.com', '(6zYqpuI', 'CU2100001', '2', '2021-07-29 06:00:28', 0),
(34, 'ghgjgj@gmail.com', '1XaOD!Fr', 'CU2100002', '2', '2021-07-29 06:00:42', 0),
(35, 'dfgdfgdfg@gmail.com', 'E54MjVqb', 'CU2100003', '2', '2021-07-29 06:21:54', 0),
(36, 'dfgfgfdg@gmail.com', 'oXYLI7r@', 'CU2100004', '2', '2021-07-29 06:22:07', 0),
(37, 'dfgdfgd@gmail.com', 'zx^Z8m#N', 'CU2100005', '2', '2021-07-29 09:47:19', 1),
(38, 'ghjhgj@gmail.com', 'yUFtX%GJ', 'CU2100006', '2', '2021-07-29 09:48:58', 0),
(39, 'sadsads@gmail.com', 'LdmcWiG8', 'BMGA653', '6', '2021-07-29 11:29:35', 3),
(40, 'fsdfsdfsd@gmail.com', '*fLAX^W9', 'F21003', '4', '2021-07-30 05:03:19', 1),
(41, 'vgjfgfg@gmail.com', 'BtjUuz(L', 'TA21003', '3', '2021-07-30 05:19:05', 0),
(42, 'jfgfg@gmail.com', 'LoArNR6g', 'CU2100007', '2', '2021-07-30 06:25:58', 1),
(43, 'dfgdfgdf@gmial.com', 'dnCfUR8)', 'CU2100008', '2', '2021-07-30 07:36:56', 1),
(44, 'gddg@gmail.com', 'MNK1no3D', 'TA21004', '3', '2021-08-02 10:08:31', 1),
(45, 'saviosmanblussse@gmail.com', 'z5RT^yIY', 'TA21005', '3', '2021-08-03 10:02:33', 0),
(46, 'sadsads@gmail.com', 'IRZ6x7!@', 'BMGA095', '6', '2021-08-05 09:54:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` varchar(99) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `message2` text NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `register_by` varchar(100) NOT NULL COMMENT '	0-deleted 1-admin 2-customer 3-TA 4-F 5-SM 6-BM 7-RM',
  `from_whom` int(11) NOT NULL,
  `operation` varchar(99) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(99) NOT NULL DEFAULT '1' COMMENT '	0-deleted 1-registered 2- Deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `title`, `message`, `message2`, `reference_no`, `register_by`, `from_whom`, `operation`, `register_date`, `status`) VALUES
(1, '', 'Add Branch Manager', 'Added New Branch Manager', 'Added New Branch Manager', 'RMGA001', '7', 1, '', '2021-07-27 11:35:46', '1'),
(2, '', 'Add Branch Manager', 'Added New Branch Manager by RMGA001', 'Added New Branch Manager by RMGA001', 'RMGA001', '7', 1, '', '2021-07-27 12:33:39', '1'),
(3, '', 'Add Branch Manager', 'Added New Branch Manager by RMGA352', 'Added New Branch Manager by RMGA352', 'RMGA352', '7', 1, '', '2021-07-27 12:37:52', '1'),
(4, '', 'Confirm Branch Manager', 'BMGA612 has been approved', 'BMGA612 has been approved', 'RMGA352', '7', 1, '', '2021-07-27 12:40:35', '1'),
(5, '', 'Delete Branch Manager', 'Deleted Branch Manager from registered list', 'Deleted Branch Manager from registered list', 'RMGA001', '7', 1, '', '2021-07-28 05:57:18', '1'),
(6, '', 'Delete Branch Manager', 'Deleted Branch Manager(BMGA713) from registered list', 'Deleted Branch Manager(BMGA713) from registered list', 'RMGA001', '7', 1, '', '2021-07-28 06:01:12', '1'),
(7, '', 'Add Branch Manager', 'Added New Branch Manager by RMGA003', 'Added New Branch Manager by RMGA003', 'RMGA003', '7', 1, '', '2021-07-28 06:02:25', '1'),
(8, '', 'Delete Branch Manager', 'Deleted Branch Manager from pending list', 'Deleted Branch Manager from pending list', 'RMGA003', '7', 1, '', '2021-07-28 06:02:34', '1'),
(9, 'BMGA612', 'Edit Branch Manager', 'Updated Branch Manager Details from registered list', 'Updated Branch Manager Details from registered list', 'undefined', '7', 1, '', '2021-07-28 07:01:53', '1'),
(10, 'BMGA814', 'Edit Branch Manager', 'BMGA814 Details has been updated from registered list', 'BMGA814 Details has been updated from registered list', 'undefined', '7', 1, '', '2021-07-28 07:04:16', '1'),
(11, '', 'Add Branch Manager', 'Added New Branch Manager by RMGA003', 'Added New Branch Manager by RMGA003', 'RMGA003', '7', 1, '', '2021-07-28 07:08:47', '1'),
(12, '11', 'Edit Branch Manager', '11 Details has been updated from pending list', '11 Details has been updated from pending list', 'undefined', '7', 1, '', '2021-07-28 07:09:08', '1'),
(13, '11', 'Edit Branch Manager', 'Updated Branch Manager Details from pending list', 'Updated Branch Manager Details from pending list', 'undefined', '7', 1, '', '2021-07-28 07:11:24', '1'),
(14, 'BMGA096', 'Edit Branch Manager', 'BMGA096 Details has been updated from registered list', 'BMGA096 Details has been updated from registered list', 'undefined', '7', 1, '', '2021-07-28 07:11:48', '1'),
(15, '', 'Delete Branch Manager', 'Deleted Branch Manager from pending list', 'Deleted Branch Manager from pending list', 'RMGA003', '7', 1, '', '2021-07-28 07:12:18', '1'),
(16, '', 'Add Regional Manager', 'Added New Regional Manager', 'Added New Regional Manager', '1', '1', 1, '', '2021-07-28 07:19:11', '1'),
(17, '', 'Add Regional Manager', 'Added New Regional Manager', 'Added New Regional Manager', '1', '1', 1, '', '2021-07-28 07:25:15', '1'),
(18, 'RMGA860', 'Confirm Regional Manager', 'RMGA860 has been approved', 'RMGA860 has been approved', '1', '1', 1, '', '2021-07-28 07:25:26', '1'),
(19, '', 'Delete Regional Manager', 'Deleted Regional Manager(RMGA352) from registered list', 'Deleted Regional Manager(RMGA352) from registered list', '1', '1', 1, '', '2021-07-28 07:31:22', '1'),
(20, '', 'Delete Regional Manager', 'Deleted Regional Manager(RMGA003) from registered list', 'Deleted Regional Manager(RMGA003) from registered list', '1', '1', 1, '', '2021-07-28 09:40:07', '1'),
(21, 'RMAS003', 'Edit Regional Manager', 'RMAS003 Details has been updated from registered list', 'RMAS003 Details has been updated from registered list', '1', '1', 1, '', '2021-07-28 09:44:39', '1'),
(22, '', 'Add Regional Manager', 'Added New Regional Manager', 'Added New Regional Manager', '1', '1', 1, '', '2021-07-28 09:46:17', '1'),
(23, '10', 'Edit Regional Manager', 'Updated Regional Manager Details from pending list', 'Updated Regional Manager Details from pending list', '1', '1', 1, '', '2021-07-28 09:46:34', '1'),
(24, 'RMGA859', 'Confirm Regional Manager', 'RMGA859 has been approved', 'RMGA859 has been approved', '1', '1', 1, '', '2021-07-28 09:47:05', '1'),
(25, '', 'Add Sales Manager', 'Added New Sales Manager by BMGA814', 'Added New Sales Manager by BMGA814', 'BMGA814', '6', 1, '', '2021-07-28 09:52:09', '1'),
(26, 'SMGA694', 'Confirm Sales Manager', 'SMGA694 has been approved', 'SMGA694 has been approved', 'BMGA814', '6', 1, '', '2021-07-28 09:58:43', '1'),
(27, '', 'Delete Sales Manager', 'Deleted Sales Manager(SMGA910) from registered list', 'Deleted Sales Manager(SMGA910) from registered list', 'BMGA096', '6', 1, '', '2021-07-28 10:24:48', '1'),
(28, '', 'Add Sales Manager', 'Added New Sales Manager by BMGA612', 'Added New Sales Manager by BMGA612', 'BMGA612', '6', 1, '', '2021-07-28 10:33:46', '1'),
(29, '', 'Delete Sales Manager', 'Deleted Sales Manager from pending list', 'Deleted Sales Manager from pending list', 'BMGA612', '6', 1, '', '2021-07-28 10:33:50', '1'),
(30, 'SMGA206', 'Edit Sales Manager', 'SMGA206 Details has been updated from registered list', 'SMGA206 Details has been updated from registered list', 'BMGA096', '6', 1, '', '2021-07-28 10:56:29', '1'),
(31, '', 'Add Sales Manager', 'Added New Sales Manager by BMGA612', 'Added New Sales Manager by BMGA612', 'BMGA612', '6', 1, '', '2021-07-28 10:57:26', '1'),
(32, '10', 'Edit Sales Manager', 'Updated Branch Manager Details from pending list', 'Updated Branch Manager Details from pending list', 'BMGA612', '6', 1, '', '2021-07-28 10:57:34', '1'),
(33, 'F21001', 'Edit Franchisee', 'F21001 Details has been updated from registered list', 'F21001 Details has been updated from registered list', 'SMGA206', '5', 1, '', '2021-07-28 11:36:38', '1'),
(34, '', 'Delete Franchisee', 'Deleted Franchisee(F21001) from registered list', 'Deleted Franchisee(F21001) from registered list', 'SMGA206', '5', 1, '', '2021-07-28 11:36:53', '1'),
(35, '', 'Add Franchisee', 'Added New Franchisee by SMGA206', 'Added New Franchisee by SMGA206', 'SMGA206', '5', 1, '', '2021-07-28 11:37:56', '1'),
(36, '2', 'Edit Franchisee', 'Updated Franchisee Details from pending list', 'Updated Franchisee Details from pending list', 'SMGA206', '5', 1, '', '2021-07-28 11:38:18', '1'),
(37, 'F21002', 'Confirm Franchisee', 'F21002 has been approved', 'F21002 has been approved', 'SMGA206', '5', 1, '', '2021-07-28 11:38:40', '1'),
(38, '', 'Add Travel Agent', 'Added new Travel Agent by F21002', 'Added new Travel Agent by F21002', 'F21002', '4', 1, '', '2021-07-28 12:42:02', '1'),
(39, '1', 'Edit Travel Agent', 'Updated Travel Agent details from pending list', 'Updated Travel Agent details from pending list', 'F21002', '4', 1, '', '2021-07-28 12:42:24', '1'),
(40, 'TA21001', 'Confirm Travel Agent', 'TA21001 has been approved', 'TA21001 has been approved', 'F21002', '4', 1, '', '2021-07-28 12:42:39', '1'),
(41, 'TA21001', 'Edit Travel Agent', 'TA21001 Details has been updated from registered list', 'TA21001 Details has been updated from registered list', 'F21002', '4', 1, '', '2021-07-28 12:42:58', '1'),
(42, '', 'Delete Franchisee', 'Deleted Franchisee(TA21001) from registered list', 'Deleted Franchisee(TA21001) from registered list', 'F21002', '4', 1, '', '2021-07-28 12:43:14', '1'),
(43, '', 'Add Franchisee', 'Added new Franchisee by SMGA470', 'Added new Franchisee by SMGA470', 'SMGA470', '5', 1, '', '2021-07-29 05:27:59', '1'),
(44, '3', 'Edit Franchisee', 'Updated Franchisee details from pending list', 'Updated Franchisee details from pending list', 'SMGA470', '5', 1, '', '2021-07-29 05:28:46', '1'),
(45, 'F21002', 'Edit Franchisee', 'F21002 Details has been updated from registered list', 'F21002 Details has been updated from registered list', 'SMGA206', '5', 1, '', '2021-07-29 05:30:19', '1'),
(46, '3', 'Edit Franchisee', 'Updated Franchisee details from pending list', 'Updated Franchisee details from pending list', 'SMGA470', '5', 1, '', '2021-07-29 05:30:30', '1'),
(47, '', 'Add Travel Agent', 'Added new Travel Agent by F21002', 'Added new Travel Agent by F21002', 'F21002', '4', 1, '', '2021-07-29 05:34:38', '1'),
(48, '2', 'Edit Travel Agent', 'Updated Travel Agent details from pending list', 'Updated Travel Agent details from pending list', 'F21002', '4', 1, '', '2021-07-29 05:34:58', '1'),
(49, 'TA21002', 'Confirm Travel Agent', 'TA21002 has been approved', 'TA21002 has been approved', 'F21002', '4', 1, '', '2021-07-29 05:35:09', '1'),
(50, 'TA21002', 'Edit Travel Agent', 'TA21002 Details has been updated from registered list', 'TA21002 Details has been updated from registered list', 'F21002', '4', 1, '', '2021-07-29 05:35:30', '1'),
(51, '', 'Add Customer', 'Added new customer through B2C', 'Added new customer through B2C', '', '1', 1, '', '2021-07-29 05:45:52', '1'),
(52, '', 'Add Customer', 'Added new customer by TA21002', 'Added new customer by TA21002', 'TA21002', '3', 1, '', '2021-07-29 05:47:04', '1'),
(53, 'CU2100001', 'Confirm Customer', 'CU2100001 has been approved', 'CU2100001 has been approved', '1', '1', 1, '', '2021-07-29 06:00:28', '1'),
(54, 'CU2100002', 'Confirm Customer', 'CU2100002 has been approved', 'CU2100002 has been approved', 'TA21002', '3', 1, '', '2021-07-29 06:00:42', '1'),
(55, '', 'Delete Customer', 'Deleted Customer(CU2100001) from registered list', 'Deleted Customer(CU2100001) from registered list', '', '3', 1, '', '2021-07-29 06:14:35', '1'),
(56, '', 'Delete Customer', 'Deleted Customer(CU2100002) from registered list', 'Deleted Customer(CU2100002) from registered list', 'TA21002', '3', 1, '', '2021-07-29 06:15:34', '1'),
(57, '', 'Delete Customer', 'Deleted Customer(CU2100001) from registered list', 'Deleted Customer(CU2100001) from registered list', '', '3', 1, '', '2021-07-29 06:19:11', '1'),
(58, '', 'Delete Customer', 'Deleted Customer(CU2100002) from registered list', 'Deleted Customer(CU2100002) from registered list', 'TA21002', '3', 1, '', '2021-07-29 06:19:56', '1'),
(59, '', 'Add Customer', 'Added new customer through B2C', 'Added new customer through B2C', '', '1', 1, '', '2021-07-29 06:20:51', '1'),
(60, '', 'Add Customer', 'Added new customer by TA21002', 'Added new customer by TA21002', 'TA21002', '3', 1, '', '2021-07-29 06:21:48', '1'),
(61, 'CU2100003', 'Confirm Customer', 'CU2100003 has been approved', 'CU2100003 has been approved', 'TA21002', '3', 1, '', '2021-07-29 06:21:54', '1'),
(62, 'CU2100004', 'Confirm Customer', 'CU2100004 has been approved', 'CU2100004 has been approved', '1', '1', 1, '', '2021-07-29 06:22:07', '1'),
(63, '', 'Delete Customer', 'Deleted Customer(CU2100004) from registered list', 'Deleted Customer(CU2100004) from registered list', '', '3', 1, '', '2021-07-29 06:22:13', '1'),
(64, '', 'Delete Customer', 'Deleted Customer(CU2100003) from registered list', 'Deleted Customer(CU2100003) from registered list', 'TA21002', '3', 1, '', '2021-07-29 06:22:24', '1'),
(65, '', 'Add Customer', 'Added new customer through B2C', 'Added new customer through B2C', '', '1', 1, '', '2021-07-29 09:46:55', '1'),
(66, '5', 'Edit Customer', 'Updated Customer details from pending list', 'Updated Customer details from pending list', '', '3', 1, '', '2021-07-29 09:47:07', '1'),
(67, 'CU2100005', 'Confirm Customer', 'CU2100005 has been approved', 'CU2100005 has been approved', '1', '1', 1, '', '2021-07-29 09:47:19', '1'),
(68, 'CU2100005', 'Edit Customer', 'CU2100005 Details has been updated from registered list', 'CU2100005 Details has been updated from registered list', '', '3', 1, '', '2021-07-29 09:47:28', '1'),
(69, '', 'Add Customer', 'Added new customer by TA21002', 'Added new customer by TA21002', 'TA21002', '3', 1, '', '2021-07-29 09:48:28', '1'),
(70, '6', 'Edit Customer', 'Updated Customer details from pending list', 'Updated Customer details from pending list', 'TA21002', '3', 1, '', '2021-07-29 09:48:38', '1'),
(71, 'CU2100006', 'Confirm Customer', 'CU2100006 has been approved', 'CU2100006 has been approved', 'TA21002', '3', 1, '', '2021-07-29 09:48:58', '1'),
(72, 'CU2100006', 'Edit Customer', 'CU2100006 Details has been updated from registered list', 'CU2100006 Details has been updated from registered list', 'TA21002', '3', 1, '', '2021-07-29 09:49:08', '1'),
(73, '', 'Add Branch Manager', 'Added New Branch Manager by You', '', 'RMGA001', '7', 7, 'add', '2021-07-29 11:16:09', '1'),
(74, 'BMGA653', 'Confirm Branch Manager', 'BMGA653 has been approved', 'BMGA653 has been approved', 'RMGA001', '7', 1, '', '2021-07-29 11:29:35', '1'),
(75, '', 'Delete Branch Manager', 'You have deleted Branch Manager with id BMGA653', '', 'RMGA001', '7', 7, 'delete', '2021-07-29 11:30:30', '1'),
(76, 'BMGA096', 'Edit Branch Manager', 'BMGA096 details has been updated', '', 'RMGA001', '7', 7, 'update', '2021-07-29 11:47:29', '1'),
(77, '', 'Delete Sales Manager', 'You have deleted Sales Manager with ID SMGA694', '', 'BMGA814', '6', 6, 'delete', '2021-07-29 12:20:02', '1'),
(78, '', 'Add Sales Manager', 'Added New Sales Manager by You', '', 'BMGA814', '6', 6, 'add', '2021-07-29 12:32:03', '1'),
(79, 'SMGA205', 'Edit Sales Manager', 'SMGA205 details has been updated', '', 'BMGA814', '6', 6, 'update', '2021-07-29 12:40:59', '1'),
(80, 'SMGA470', 'Edit Sales Manager', 'SMGA470 details has been updated', '', 'BMGA814', '6', 6, 'update', '2021-07-29 12:41:18', '1'),
(81, '', 'Delete Sales Manager', 'You have deleted Sales Manager with ID SMGA470', '', 'BMGA814', '6', 6, 'delete', '2021-07-29 12:41:43', '1'),
(82, 'SMGA205', 'Edit Sales Manager', 'SMGA205 details has been updated', '', 'BMGA814', '6', 6, 'update', '2021-07-30 04:43:20', '1'),
(83, 'F21002', 'Edit Franchisee', 'F21002 details has been updated', '', 'SMGA206', '5', 5, 'update', '2021-07-30 05:01:52', '1'),
(84, '', 'Delete Franchisee', 'You have deleted Franchisee with ID F21002', '', 'SMGA206', '5', 5, 'delete', '2021-07-30 05:02:04', '1'),
(85, '', 'Add Franchisee', 'Added New Franchisee by You', '', 'SMGA206', '5', 5, 'add', '2021-07-30 05:03:00', '1'),
(86, 'F21003', 'Confirm Franchisee', 'F21003 has been approved', 'F21003 has been approved', 'SMGA206', '5', 1, '', '2021-07-30 05:03:19', '1'),
(87, 'F21003', 'Edit Franchisee', 'F21003 details has been updated', '', 'SMGA206', '5', 5, 'update', '2021-07-30 05:03:37', '1'),
(88, '', 'Add Travel Agent', 'Added New Travel Agent by You', '', 'F21003', '4', 4, 'add', '2021-07-30 05:18:47', '1'),
(89, 'TA21003', 'Confirm Travel Agent', 'TA21003 has been approved', 'TA21003 has been approved', 'F21003', '4', 1, '', '2021-07-30 05:19:05', '1'),
(90, 'TA21003', 'Edit Travel Agent', 'TA21003 details has been updated', '', 'F21003', '4', 4, 'update', '2021-07-30 05:19:14', '1'),
(91, '', 'Delete Travel Agent', 'You have deleted Travel Agent with ID ', '', 'F21003', '4', 4, 'delete', '2021-07-30 05:19:25', '1'),
(92, '', 'Delete Travel Agent', 'You have deleted Travel Agent with ID ', '', 'F21003', '4', 4, 'delete', '2021-07-30 05:19:39', '1'),
(93, '', 'Delete Travel Agent', 'You have deleted Travel Agent with ID TA21003', '', 'F21003', '4', 4, 'delete', '2021-07-30 05:21:03', '1'),
(94, 'CU2100006', 'Edit Customer', 'CU2100006 details has been updated', '', 'TA21002', '3', 3, 'update', '2021-07-30 06:21:43', '1'),
(95, '', 'Delete Customer', 'You have deleted Customer with ID CU2100006', '', 'TA21002', '3', 3, 'delete', '2021-07-30 06:23:37', '1'),
(96, '', 'Add Customer', 'Added New Customer by You', '', 'TA21002', '3', 3, 'add', '2021-07-30 06:25:27', '1'),
(97, 'CU2100007', 'Confirm Customer', 'CU2100007 has been approved', 'CU2100007 has been approved', 'TA21002', '3', 1, '', '2021-07-30 06:25:58', '1'),
(98, 'CU2100007', 'Edit Customer', 'CU2100007 details has been updated', '', 'TA21002', '3', 3, 'update', '2021-07-30 06:26:47', '1'),
(99, '', 'Change Password', 'You have change your password', '', 'TA21002', '3', 3, 'update', '2021-07-30 07:08:50', '1'),
(100, '', 'Update Profile Details', 'You have updated your profile details', '', 'TA21002', '3', 3, 'update', '2021-07-30 07:15:11', '1'),
(101, '', 'Update Profile Details', 'You have updated your profile details', '', 'TA21002', '3', 3, 'update', '2021-07-30 07:16:50', '1'),
(102, '', 'Update Profile Details', 'You have updated your profile details', '', 'TA21002', '3', 3, 'update', '2021-07-30 07:20:35', '1'),
(103, '', 'Update Profile Details', 'You have updated your profile details', '', 'CU2100007', '2', 2, 'update', '2021-07-30 07:25:51', '1'),
(104, '', 'Add Customer', 'Added new customer by TA21002', 'Added new customer by TA21002', 'TA21002', '3', 1, '', '2021-07-30 07:36:43', '1'),
(105, 'CU2100008', 'Confirm Customer', 'CU2100008 has been approved', 'CU2100008 has been approved', 'TA21002', '3', 1, '', '2021-07-30 07:36:56', '1'),
(106, 'TA21002', 'Edit Travel Agent', 'TA21002 Details has been updated from registered list', 'TA21002 Details has been updated from registered list', 'F21002', '4', 1, '', '2021-08-02 10:05:26', '1'),
(107, '', 'Add Travel Agent', 'Added new Travel Agent by F21003', 'Added new Travel Agent by F21003', 'F21003', '4', 1, '', '2021-08-02 10:08:28', '1'),
(108, 'TA21004', 'Confirm Travel Agent', 'TA21004 has been approved', 'TA21004 has been approved', 'F21003', '4', 1, '', '2021-08-02 10:08:32', '1'),
(109, '', 'Add Travel Agent', 'Added new Travel Agent by F21003', 'Added new Travel Agent by F21003', 'F21003', '4', 1, '', '2021-08-02 10:09:31', '1'),
(110, 'F21003', 'Edit Franchisee', 'F21003 Details has been updated from registered list', 'F21003 Details has been updated from registered list', 'SMGA206', '5', 1, '', '2021-08-02 10:13:08', '1'),
(111, 'SMGA206', 'Edit Sales Manager', 'SMGA206 Details has been updated from registered list', 'SMGA206 Details has been updated from registered list', 'BMGA096', '6', 1, '', '2021-08-02 10:19:38', '1'),
(112, 'CU2100007', 'Edit Customer', 'CU2100007 Details has been updated from registered list', 'CU2100007 Details has been updated from registered list', 'TA21002', '3', 1, '', '2021-08-03 09:44:00', '1'),
(113, '5', 'Edit Travel Agent', 'Updated Travel Agent details from pending list', 'Updated Travel Agent details from pending list', 'F21003', '4', 1, '', '2021-08-03 10:01:33', '1'),
(114, 'TA21005', 'Confirm Travel Agent', 'TA21005 has been approved', 'TA21005 has been approved', 'F21003', '4', 1, '', '2021-08-03 10:02:33', '1'),
(115, '', 'Delete Travel Agent', 'Deleted Travel Agent(TA21005) from registered list', 'Deleted Travel Agent(TA21005) from registered list', 'F21003', '4', 1, '', '2021-08-03 10:04:18', '1'),
(116, '', 'Update Profile Details', 'You have updated your profile details', '', 'BMGA612', '6', 6, 'update', '2021-08-04 07:54:17', '1'),
(117, '', 'Update Profile Details', 'You have updated your profile details', '', 'TA21004', '3', 3, 'update', '2021-08-04 09:54:09', '1'),
(118, '9', 'Edit Customer', 'Updated Customer details from pending list', 'Updated Customer details from pending list', '', '3', 1, '', '2021-08-05 07:13:50', '1'),
(119, 'RMGA841', 'Edit Regional Manager', 'RMGA841 Details has been updated from registered list', 'RMGA841 Details has been updated from registered list', '1', '1', 1, '', '2021-08-05 07:14:11', '1'),
(120, 'RMGA352', 'Edit Regional Manager', 'RMGA352 Details has been updated from registered list', 'RMGA352 Details has been updated from registered list', '1', '1', 1, '', '2021-08-05 07:18:57', '1'),
(121, 'RMGA859', 'Edit Regional Manager', 'RMGA859 Details has been updated from registered list', 'RMGA859 Details has been updated from registered list', '1', '1', 1, '', '2021-08-05 09:14:48', '1'),
(122, '', 'Add Franchisee', 'Added new Franchisee by SMGA205', 'Added new Franchisee by SMGA205', 'SMGA205', '5', 1, '', '2021-08-05 09:16:24', '1'),
(123, 'TA21002', 'Edit Travel Agent', 'TA21002 Details has been updated from registered list', 'TA21002 Details has been updated from registered list', 'F21002', '4', 1, '', '2021-08-05 09:20:21', '1'),
(124, '9', 'Edit Customer', 'Updated Customer details from pending list', 'Updated Customer details from pending list', '', '3', 1, '', '2021-08-05 09:21:23', '1'),
(125, 'BMGA095', 'Confirm Branch Manager', 'BMGA095 has been approved', 'BMGA095 has been approved', 'RMGA001', '7', 1, '', '2021-08-05 09:54:46', '1'),
(126, '12', 'Edit Branch Manager', 'Updated Branch Manager Details from pending list', 'Updated Branch Manager Details from pending list', 'RMGA001', '7', 1, '', '2021-08-05 09:54:59', '1'),
(127, '', 'Delete Branch Manager', 'Deleted Branch Manager(BMGA096) from registered list', 'Deleted Branch Manager(BMGA096) from registered list', 'RMGA001', '7', 1, '', '2021-08-05 10:12:10', '1'),
(128, '12', 'Edit Branch Manager', 'Updated Branch Manager Details from pending list', 'Updated Branch Manager Details from pending list', 'RMGA001', '7', 1, '', '2021-08-05 10:12:18', '1'),
(129, 'CU2100008', 'Edit Customer', 'CU2100008 Details has been updated from registered list', 'CU2100008 Details has been updated from registered list', 'TA21002', '3', 1, '', '2021-08-05 10:13:10', '1');

-- --------------------------------------------------------

--
-- Table structure for table `regional_manager`
--

CREATE TABLE `regional_manager` (
  `id` int(11) NOT NULL,
  `regional_manager_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `head_office` varchar(99) NOT NULL,
  `zone` varchar(99) NOT NULL,
  `region` varchar(99) NOT NULL,
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
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-registered 2-pending 3-removed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regional_manager`
--

INSERT INTO `regional_manager` (`id`, `regional_manager_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `head_office`, `zone`, `region`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `registrant`, `reference_no`, `register_by`, `user_type`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'RMGA001', 'savio', 'MIRANDA', 'saviomanblue@gmail.com', '91', '8208286425', 'panjim', 'India', 'GOA', '2000-07-07', '21', 'male', '1', '6', '4', '403 521', 'fdgdfgdfgdfgdfgd', 'profile_pic/220720210846565c1lDgi.jpg', '', '', '', '', '', '', '', '', 7, '2021-07-22 06:49:38', '', 1),
(2, 'RMKL002', 'uuhuh', 'lklk', 'saviomaggugnblue@gmail.com', '91', '0828286425', 'panjim', 'India', 'gvgh', '2001-07-09', '20', 'male', '1', '12', 'fghf', '765432', 'fdgdfgdfgdfgdfgd', 'profile_pic/2207202108484530100.jpg', '', '', '', '', '', '', '', '', 7, '2021-07-22 06:49:43', '', 1),
(3, 'RMGA003', 'hghg', 'gkgk', 'saviomanvhvblue@gmail.com', '91', '0820828645', 'panjim', 'India', 'hjgg', '1998-07-15', '23', 'male', '1', '6', '8', '403 518', 'fdgsdfsdfsdfsdfsf', 'profile_pic/220720210849335c1lDgi.jpg', '', '', '', '', '', '', '', '', 7, '2021-07-28 09:40:07', '2021-07-28 15:10:07', 3),
(4, 'RMAS003', 'fyfjf ok', 'hghgq', 'nbnb@gamil.com', '91', '0820826425', 'panjim', 'India', 'hghjg', '1998-07-14', '23', 'male', '1', '3', 'City not available', '765456', 'fdgsdfsdfsdfsdfsf', 'profile_pic/220720210851545c1lDgi.jpg', '', '', '', '', '', '', '', '', 7, '2021-07-28 09:44:39', '', 1),
(5, 'BMGA485', 'ghgfhgfhf', 'gfhghfgh', 'fghf@gmail.com', '91', '0820828647', 'fghgfhf', 'hgfh', 'fghfgh', '2001-07-13', '20', 'male', '1', '6', '11', '403 808', 'fhghfhggfhgfh', 'profile_pic/22072021132953at2.jpg', '', '', '', '', '', '', '', '', 7, '2021-07-22 11:34:51', '2021-07-22 17:04:51', 3),
(6, 'RMGA352', 'tony', 'miranda', 'tony@gmail.com', '91', '0820828643', 'India', 'gfdgfgfg', 'fdgdfgdfg', '1992-07-08', '29', 'male', '1', '6', '13', '403 202', 'fdgsdfsdfsdfsdfsf', 'profile_pic/26072021131440at3.jpg', '', '', '', '', '', '', '', '', 7, '2021-07-28 07:31:21', '2021-07-28 13:01:21', 3),
(7, 'RMGA841', 'fdgfgfd', 'fdgdfg', 'dfgdfgdf@ggg.com', '91', '7654345654', 'gfhghgf', 'fghghfg', 'gfhgfhgfhg', '2000-07-24', '21', 'male', '1', '6', '6', '403 601', 'ghfhgfhfgh', 'profile_pic/28072021091845at3.jpg', '', '', '', '', '', '', '', '', 7, '2021-07-28 07:23:40', '', 1),
(8, '', 'fdgfgfd', 'fdgdfg', 'dfgdfgdf@ggg.com', '91', '7654345654', 'gfhghgf', 'fghghfg', 'gfhgfhgfhg', '2000-07-24', '21', 'male', '1', '6', '6', '403 601', 'ghfhgfhfgh', 'profile_pic/28072021091845at3.jpg', '', '', '', '', '', '', '', '', 7, '2021-07-28 07:19:19', '2021-07-28 12:49:19', 0),
(9, 'RMGA860', 'hgjghjgj', 'jkghkjgkjg', 'jkjklj@gmail.com', '91', '7867564534', 'jjlhjhhj', 'klhjhhkhh', 'jfjgfgff', '1996-07-14', '25', 'male', '1', '6', '13', '403 202', 'bkjgbkgkghg', 'profile_pic/28072021092513at3.jpg', '', '', '', '', '', '', '', '', 7, '2021-07-28 07:25:25', '', 1),
(10, 'RMGA859', 'cbbcvb ok', 'cvbcvbcvb', 'vcbcvb@gmail.com', '91', '8765654354', 'gfhgfhgfhgfh', 'ghgfhghg', 'hgfhfgh', '2001-07-13', '20', 'female', '1', '6', '12', '403 201', 'ghgfhgfhgfh', 'profile_pic/28072021114615at2.jpg', '', '', '', '', '', '', '', '', 7, '2021-07-28 09:47:05', '', 1);

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
  `head_office` varchar(99) NOT NULL,
  `zone` varchar(99) NOT NULL,
  `region` varchar(99) NOT NULL,
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
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-registered 2-pending 3-removed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_manager`
--

INSERT INTO `sales_manager` (`id`, `sales_manager_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `head_office`, `zone`, `region`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `registrant`, `reference_no`, `register_by`, `user_type`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'SMGA205', 'savio', 'fgjfjgf', 'saviomanblue@gmail.com', '91', '0820928642', 'panjim', 'India', 'Goa', '2001-07-09', '21', 'male', '1', '6', '10', '403 701', 'fdgsdfsdfsdfsdfsf', 'profile_pic/22072021135104author.jpg', 'kyc/23072021142141at3.jpg', '', '', '', '', 'savio MIRANDA', 'BMGA814', '6', 5, '2021-07-23 12:21:43', '', 1),
(2, 'SMGA910', 'gfbhgfhg', 'fghfgh', 'fghg@gmail.com', '91', '0820828642', 'gfhfgh', 'fdgdgdf', 'dfgfgf', '2000-07-19', '21', 'male', '1', '6', '12', '403 201', 'fdgsdfsdfsdfsdfsf', 'profile_pic/22072021134023at3.jpg', '', '', '', '', '', 'sdfdsfdsf dsfdsfsdf', 'BMGA096', '6', 5, '2021-07-28 10:24:48', '2021-07-28 15:54:48', 3),
(3, 'SMGA205', 'savio', 'fgjfjgf', 'saviomanblue@gmail.com', '91', '0820928642', 'panjim', 'India', 'Goa', '2001-07-09', '20', 'male', '1', '6', '10', '403 701', 'fdgsdfsdfsdfsdfsf', 'profile_pic/22072021135104author.jpg', 'kyc/23072021142141at3.jpg', '', '', '', '', 'sdfdsfdsf dsfdsfsdf', 'BMGA096', '6', 5, '2021-07-23 12:21:43', '2021-07-23 10:04:03', 3),
(4, 'SMGA206', 'tony ok', 'sdfsdff', 'sdfsdf@gmail.com', '91', '0820586425', 'sdfdfsdf', 'sdfdsfsdf', 'sdfsdfsd', '1996-07-14', '25', 'male', '1', '6', '11', '403 808', 'sdfdfsdfsdfsd', 'profile_pic/22072021141347author.jpg', '', '', '', '', '', 'sdfdsfdsf dsfdsfsdf', 'BMGA096', '6', 5, '2021-08-02 10:19:38', '', 1),
(5, 'SMGA246', 'kmjhkhjk', 'hjkhjkjh', 'khjkhj@gmail.com', '91', '0820828632', 'panjim', 'dsff', 'Goa', '1999-07-06', '22', 'male', '1', '6', '15', '403 716', 'fdgsdfsdfsdfsdfsf', 'profile_pic/22072021143935at3.jpg', '', '', '', '', '', 'sdfdsfdsf dsfdsfsdf', 'BMGA096', '6', 5, '2021-07-23 04:34:28', '2021-07-23 10:04:28', 3),
(6, 'SMGA756', 'gfgfjfj', 'ghgfhgfhfg', 'fhfh@gmail.com', '91', '3245328765', 'India', 'Panjim', 'Goa', '1989-07-15', '32', 'female', '1', '6', '15', '403 716', 'nbghnghjghjhjghj', 'profile_pic/23072021131123at2.jpg', '', '', '', '', '', 'savio MIRANDA', 'BMGA814', '6', 5, '2021-07-23 12:24:10', '2021-07-23 17:51:59', 3),
(7, 'SMGA470', 'tony', 'miranda', 'tonye@gmail.com', '91', '0708286425', 'India', 'Panjim', 'Goa', '2000-07-07', '21', 'male', '1', '6', '12', '403 201', 'ghfhgfhf', 'profile_pic/26072021130908at3.jpg', '', '', '', '', '', 'savio Miranda', 'BMGA814', '6', 5, '2021-07-29 12:41:43', '2021-07-29 18:11:43', 3),
(8, 'SMGA694', 'dfgdfgfg', 'gdfgdfg', 'dfgdfgdf@ggg.com', '91', '9876787643', 'sdfsdfsdf', 'sdfdfsdfs', 'sfsdfsdf', '2000-07-14', '21', 'male', '1', '6', '13', '403 202', 'fsdffsdfsdfsdf', 'profile_pic/28072021115206at3.jpg', '', '', '', '', '', 'savio Miranda', 'BMGA814', '6', 5, '2021-07-29 12:20:02', '2021-07-29 17:50:02', 3),
(9, '', 'ghhg', 'hfghgfh', 'gfhgfh@gmail.com', '91', '8976545654', 'gfhgfhfghgfh', 'fghghgfh', 'fghgfhgf', '1994-07-13', '27', 'male', '1', '6', '8', '403 518', 'hghgfhgfhfgh', 'profile_pic/28072021123345at3.jpg', '', '', '', '', '', 'fdgdfgdf ok gdfgdfgd', 'BMGA612', '6', 5, '2021-07-28 10:33:50', '2021-07-28 16:03:50', 0),
(10, '', 'dgdfgfd ok', 'dfgdfgdf', 'dfgdfgdfff@ggg.com', '91', '8790873423', 'dfgdfg', 'dfdf', 'fdgdfg', '1999-06-30', '22', 'male', '1', '6', '11', '403 808', 'dfgdfgdfg', 'profile_pic/28072021125719at3.jpg', '', '', '', '', '', 'fdgdfgdf ok gdfgdfgd', 'BMGA612', '6', 5, '2021-07-28 10:57:34', '', 2),
(11, '', 'bgfhgfh', 'gfhgfh', 'sadfsfviomanblue@gmail.com', '91', '0820828625', 'sdfsdfsd', 'dsfsdf', 'sdfdsfsd', '1999-07-28', '22', 'male', '1', '6', '12', '403 201', 'dfdsfdsfsdfsdfsdfsdfsd', 'profile_pic/29072021143201at3.jpg', '', '', '', '', '', 'savio Miranda', 'BMGA814', '6', 5, '2021-07-29 12:32:03', '', 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `sub_category_name` varchar(299) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(299) NOT NULL,
  `category_id` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1-present 2-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `sub_category_name`, `description`, `picture`, `category_id`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'fgfdgdfg', 'fgfdgfdgdfg', 'subcategory/090820211301175c1lDgi.jpg', 1, '2021-08-09 11:02:37', '', 1),
(2, 'dsfdsfdsf', 'gdfgdfgdfgfg', 'subcategory/0908202113034620525386_1964954860185193_3693311684249777947_n.jpg', 2, '2021-08-09 11:03:51', '', 1);

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
(1, 'TA21001', 'savio no', 'MIRANDA', 'saviomanblue@gmail.com', '91', '0820828625', '2000-07-29', '21', 'female', '1', '6', '7', '403 524', 'sdfsdfdsfsdf', 'profile_pic/28072021144200at3.jpg', '', '', '', '', '', 'gdfdgfdg ok dfgdfgd', 'F21002', '4', 3, '2021-07-28 12:42:02', '2021-07-28 18:13:14', 0),
(2, 'TA21002', 'ghhgfh ok', 'ghgfhgfh', 'gfhgfh@gmail.com', '91', '9089876756', '2000-07-14', '21', 'female', '1', '6', '10', '403 701', 'n nghgjjgjhj', 'profile_pic/29072021073437at3.jpg', '', '', '', '', '', 'gdfdgfdg dfgdfgd', 'F21002', '4', 3, '2021-07-29 05:34:38', '', 1),
(3, 'TA21003', 'jjhghgghj', 'nbbjb', 'vgjfgfg@gmail.com', '91', '8978675609', '2000-07-15', '21', 'male', '1', '6', '12', '403 201', 'jhjhhjhjkhjkhkh', 'profile_pic/30072021071845at3.jpg', '', '', '', '', '', 'dsgfdsf sdfsdfsd', 'F21003', '4', 3, '2021-07-30 05:18:47', '2021-07-30 10:51:03', 0),
(4, 'TA21004', 'gdgdfgdg', 'dgfg', 'gddg@gmail.com', '91', '0820828645', '2000-08-11', '20', 'male', '1', '6', '9', '403 503', 'vhhjvhvvhjv', 'profile_pic/02082021120826at3.jpg', '', '', '', '', '', 'dsgfdsf sdfsdfsd', 'F21003', '4', 3, '2021-08-02 10:08:28', '', 1),
(5, 'TA21005', 'savio', 'MIRANDA', 'saviosmanblussse@gmail.com', '91', '0820886425', '1999-08-11', '21', 'male', '1', '6', '11', '403 808', 'fdgsdfsdfsdfsdfsf', 'profile_pic/02082021120918at3.jpg', '', '', '', '', '', 'dsgfdsf sdfsdfsd', 'F21003', '4', 3, '2021-08-02 10:09:31', '2021-08-03 15:34:18', 0);

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
(2, 'Customer', 1),
(3, 'Travel Agent', 1),
(4, 'Franchisee', 1),
(5, 'Sales Manager', 1),
(6, 'Branch Manager', 1),
(7, 'Regional Manager', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch_manager`
--
ALTER TABLE `branch_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regional_manager`
--
ALTER TABLE `regional_manager`
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
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
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
-- AUTO_INCREMENT for table `branch_manager`
--
ALTER TABLE `branch_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `franchisee`
--
ALTER TABLE `franchisee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `regional_manager`
--
ALTER TABLE `regional_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sales_manager`
--
ALTER TABLE `sales_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `travel_agent`
--
ALTER TABLE `travel_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
