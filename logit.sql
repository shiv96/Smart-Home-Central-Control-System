-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 06:16 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_type` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_type`, `name`, `email`, `password`, `status`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'super_admin', 'Admin', 'admin@logit.com', 'YWRtaW4xMjM=', 1, '2018-12-20 17:11:31', 1, '2018-12-20 11:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `sender` varchar(50) NOT NULL,
  `send_date_time` datetime NOT NULL,
  `read_status` int(11) NOT NULL DEFAULT '0',
  `read_datetime` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `worker_id`, `manager_id`, `message`, `sender`, `send_date_time`, `read_status`, `read_datetime`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'hi', 'manager', '2018-12-26 18:17:22', 1, '2018-12-26 12:47:02', '2018-12-26 12:47:02', '2018-12-27 11:03:28'),
(2, 1, 1, 'hi', 'manager', '2018-12-26 18:17:22', 1, '2018-12-26 12:47:02', '2018-12-26 12:47:35', '2018-12-27 11:03:28'),
(3, 1, 1, 'hi', 'manager', '2018-12-26 18:17:22', 1, '2018-12-26 12:47:02', '2018-12-26 12:48:49', '2018-12-27 11:03:28'),
(4, 1, 1, 'hello', 'worker', '2018-12-26 18:19:22', 1, '2018-12-26 12:47:02', '2018-12-26 12:49:37', '2018-12-27 10:57:11'),
(5, 1, 1, 'hello', 'worker', '2018-12-26 18:19:22', 1, '2018-12-26 12:47:03', '2018-12-26 13:01:35', '2018-12-27 10:57:40'),
(6, 1, 2, 'hello', 'worker', '2018-12-26 18:19:22', 0, '0000-00-00 00:00:00', '2018-12-29 13:30:22', '2018-12-29 13:30:22'),
(7, 1, 2, 'hiii', 'manager', '2018-12-26 18:19:22', 1, '2018-12-26 12:47:02', '2018-12-29 13:30:38', '2018-12-29 13:41:38'),
(8, 1, 2, 'Hello', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 07:02:27', '2019-01-01 07:02:27'),
(9, 1, 2, 'demo testing', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 07:02:47', '2019-01-01 07:02:47'),
(10, 1, 2, 'Third', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 07:04:22', '2019-01-01 07:04:22'),
(11, 1, 2, 'fourth', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 07:06:41', '2019-01-01 07:06:41'),
(12, 1, 2, 'fifth', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 07:08:04', '2019-01-01 07:08:04'),
(13, 1, 2, 'fifth', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 08:58:42', '2019-01-01 08:58:42'),
(14, 1, 2, 'sixth', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 09:00:08', '2019-01-01 09:00:08'),
(15, 1, 2, 'sevent', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 09:05:52', '2019-01-01 09:05:52'),
(16, 1, 2, 'eight', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 09:06:53', '2019-01-01 09:06:53'),
(17, 1, 2, 'eight', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 09:07:09', '2019-01-01 09:07:09'),
(18, 1, 2, 'eight', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 09:07:23', '2019-01-01 09:07:23'),
(19, 1, 2, 'eight', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 09:07:26', '2019-01-01 09:07:26'),
(20, 1, 2, 'eight', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 09:09:37', '2019-01-01 09:09:37'),
(21, 1, 2, 'eight', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 09:12:25', '2019-01-01 09:12:25'),
(22, 1, 2, 'nineth', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 09:12:37', '2019-01-01 09:12:37'),
(23, 1, 2, 'nineth', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 09:14:18', '2019-01-01 09:14:18'),
(24, 1, 2, 'ten', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 09:36:12', '2019-01-01 09:36:12'),
(25, 1, 2, 'eleven', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 09:37:45', '2019-01-01 09:37:45'),
(26, 1, 2, 'hellllooo', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 10:24:04', '2019-01-01 10:24:04'),
(27, 1, 2, 'heeeee', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 10:33:52', '2019-01-01 10:33:52'),
(28, 1, 2, 'hihihihih', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 10:55:45', '2019-01-01 10:55:45'),
(29, 1, 2, 'holaaa', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 10:58:00', '2019-01-01 10:58:00'),
(30, 1, 2, 'holaaa', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 10:58:51', '2019-01-01 10:58:51'),
(31, 1, 2, 'hello', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 12:12:53', '2019-01-01 12:12:53'),
(32, 1, 2, 'hows u', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 12:31:43', '2019-01-01 12:31:43'),
(33, 1, 2, 'fine', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 12:47:06', '2019-01-01 12:47:06'),
(34, 1, 2, 'fine', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 12:56:28', '2019-01-01 12:56:28'),
(35, 1, 2, 'fine', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 12:57:40', '2019-01-01 12:57:40'),
(36, 1, 2, 'fine', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 12:59:03', '2019-01-01 12:59:03'),
(37, 1, 2, 'fine', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 12:59:18', '2019-01-01 12:59:18'),
(38, 1, 2, 'fine', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 13:01:53', '2019-01-01 13:01:53'),
(39, 1, 2, 'you', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 13:03:03', '2019-01-01 13:03:03'),
(40, 1, 2, 'you', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 13:06:04', '2019-01-01 13:06:04'),
(41, 1, 2, 'you', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 13:29:44', '2019-01-01 13:29:44'),
(42, 1, 2, 'you', 'manager', '2019-01-01 18:08:22', 0, '0000-00-00 00:00:00', '2019-01-01 13:36:37', '2019-01-01 13:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `subject`, `msg`) VALUES
(8, 'mno', 'mno@gmail.com', 'installation', 'kindly come and check for installation'),
(9, 'shiv', 'shivhansoti18@gmail.com', 'installation', 'kindly come and check for installation'),
(10, 'saloni', 'saloni24298@gmail.com', 'installation', 'kindly come and check for installation'),
(11, 'abc', 'shivhansoti18@gmail.com', 'installation', 'kindly come and check for installation');

-- --------------------------------------------------------

--
-- Table structure for table `front`
--

CREATE TABLE `front` (
  `id` int(255) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `key` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front`
--

INSERT INTO `front` (`id`, `image`, `key`) VALUES
(1, 'home.jpg', 'home'),
(2, 'dr.jpg', 'about'),
(3, 'shiv.jpeg', 'shiv'),
(4, 'ironpool.jpeg', 'saloni'),
(5, 'security.png', 'security'),
(6, 'expertsys.jpg', 'expertsys'),
(7, 'drone.jpg', 'drone'),
(8, 'smartdev.jpg', 'smartdev'),
(9, 'smarthomes.jpg', 'smarthomes'),
(10, 'dl.jpg', 'dl'),
(11, 'ml.jpeg', 'ml'),
(12, 'ironman.jpg', 'robot');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(11) NOT NULL,
  `current_login_status` int(11) NOT NULL DEFAULT '0' COMMENT '1=login, 0=logout',
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `staff_no` varchar(255) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `identity_proof` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `current_login_status`, `name`, `surname`, `staff_no`, `login_id`, `password`, `email`, `profile_pic`, `identity_proof`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Mohit', 'Dobariya', '012d', '123', 'MTIzNDU2', 'mohit@vethics.com', '', '', 1, '2018-12-24 09:40:36', '2018-12-28 07:09:15'),
(2, 1, 'sagar', 'sukhanandi', '123', 'sagar', 'MTIzNDU2', 'sagar@vethics.com', '', '', 1, '2018-12-25 08:50:57', '2018-12-31 09:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `manager_device_token`
--

CREATE TABLE `manager_device_token` (
  `id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `device_type` varchar(50) NOT NULL,
  `device_token` text NOT NULL,
  `device_id` varchar(50) NOT NULL,
  `device_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manager_login_history`
--

CREATE TABLE `manager_login_history` (
  `id` int(11) NOT NULL,
  `manager_id` int(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_login_history`
--

INSERT INTO `manager_login_history` (`id`, `manager_id`, `lat`, `lng`, `location`, `date_time`, `type`, `created_at`, `updated_at`) VALUES
(1, 2, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-25 08:53:49', '2018-12-25 08:53:49'),
(2, 2, '123', '3123', 'w wfwfff fWF', '2018-12-25 18:08:22', 'logout', '2018-12-25 08:56:10', '2018-12-25 08:56:10'),
(3, 2, '123', '3123', 'w wfwfff fWF', '2018-12-25 18:08:22', 'logout', '2018-12-28 04:46:58', '2018-12-28 04:46:58'),
(4, 2, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-29 05:17:23', '2018-12-29 05:17:23'),
(5, 2, '123', '3123', 'w wfwfff fWF', '2018-12-25 18:08:22', 'logout', '2018-12-29 06:02:22', '2018-12-29 06:02:22'),
(6, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 06:05:16', '2018-12-29 06:05:16'),
(7, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 06:05:57', '2018-12-29 06:05:57'),
(8, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 06:06:35', '2018-12-29 06:06:35'),
(9, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 06:51:11', '2018-12-29 06:51:11'),
(10, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 06:51:17', '2018-12-29 06:51:17'),
(11, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 06:56:51', '2018-12-29 06:56:51'),
(12, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 06:56:54', '2018-12-29 06:56:54'),
(13, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 06:58:15', '2018-12-29 06:58:15'),
(14, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 07:00:03', '2018-12-29 07:00:03'),
(15, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 07:01:12', '2018-12-29 07:01:12'),
(16, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 07:20:26', '2018-12-29 07:20:26'),
(17, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 10:39:08', '2018-12-29 10:39:08'),
(18, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 10:40:52', '2018-12-29 10:40:52'),
(19, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 10:43:10', '2018-12-29 10:43:10'),
(20, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 12:34:09', '2018-12-29 12:34:09'),
(21, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 12:34:27', '2018-12-29 12:34:27'),
(22, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 12:46:38', '2018-12-29 12:46:38'),
(23, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 13:07:04', '2018-12-29 13:07:04'),
(24, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 13:08:35', '2018-12-29 13:08:35'),
(25, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 13:10:20', '2018-12-29 13:10:20'),
(26, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 13:10:26', '2018-12-29 13:10:26'),
(27, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 13:18:06', '2018-12-29 13:18:06'),
(28, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 13:18:21', '2018-12-29 13:18:21'),
(29, 2, '23.0117965', '72.5236284', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 13:44:16', '2018-12-29 13:44:16'),
(30, 2, '23.0117965', '72.5236284', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 13:44:17', '2018-12-29 13:44:17'),
(31, 2, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 13:55:15', '2018-12-29 13:55:15'),
(32, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-31 04:40:39', '2018-12-31 04:40:39'),
(33, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 04:40:55', '2018-12-31 04:40:55'),
(34, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-31 04:41:14', '2018-12-31 04:41:14'),
(35, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 04:41:57', '2018-12-31 04:41:57'),
(36, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 04:45:29', '2018-12-31 04:45:29'),
(37, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 05:50:23', '2018-12-31 05:50:23'),
(38, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-31 05:59:07', '2018-12-31 05:59:07'),
(39, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 05:59:36', '2018-12-31 05:59:36'),
(40, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 06:02:33', '2018-12-31 06:02:33'),
(41, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-31 06:44:54', '2018-12-31 06:44:54'),
(42, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 06:48:49', '2018-12-31 06:48:49'),
(43, 2, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-31 06:54:37', '2018-12-31 06:54:37'),
(44, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 08:42:52', '2018-12-31 08:42:52'),
(45, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 08:44:27', '2018-12-31 08:44:27'),
(46, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-31 09:00:14', '2018-12-31 09:00:14'),
(47, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 09:00:39', '2018-12-31 09:00:39'),
(48, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 09:23:02', '2018-12-31 09:23:02'),
(49, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 09:44:58', '2018-12-31 09:44:58'),
(50, 2, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 11:10:43', '2018-12-31 11:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `guid` varchar(100) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mohit`
--

CREATE TABLE `mohit` (
  `name` varchar(255) NOT NULL,
  `var1` varchar(255) NOT NULL,
  `var2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mohit`
--

INSERT INTO `mohit` (`name`, `var1`, `var2`) VALUES
('Mohit', 'D1 ON', 'D1 ON'),
('Mohit', 'BULB ON', 'BULB ON'),
('Mohit', 'BULB ON', 'BULB ON'),
('Mohit', 'BULB OFF', 'BULB OFF');

-- --------------------------------------------------------

--
-- Table structure for table `parth`
--

CREATE TABLE `parth` (
  `name` varchar(100) NOT NULL,
  `var1` varchar(100) NOT NULL,
  `var2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parth`
--

INSERT INTO `parth` (`name`, `var1`, `var2`) VALUES
('parth', 'BULB OFF', 'BULB OFF'),
('parth', 'BULB ON', 'BULB ON'),
('parth', 'BULB OFF', 'BULB OFF'),
('parth', 'BULB OFF', 'BULB OFF'),
('parth', 'BULB OFF', 'BULB OFF'),
('parth', 'FAN ON', 'FAN ON'),
('parth', 'FAN OFF', 'FAN OFF'),
('parth', 'BULB OFF', 'BULB OFF'),
('parth', 'BULB OFF', 'BULB OFF'),
('parth', 'BULB ON', 'BULB ON'),
('parth', 'BULB OFF', 'BULB OFF'),
('parth', 'BULB OFF', 'BULB OFF');

-- --------------------------------------------------------

--
-- Table structure for table `sagar`
--

CREATE TABLE `sagar` (
  `name` varchar(255) NOT NULL,
  `var1` varchar(255) NOT NULL,
  `var2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sagar`
--

INSERT INTO `sagar` (`name`, `var1`, `var2`) VALUES
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'D1 ON', 'D1 ON'),
('sagar', 'D1 OFF', 'D1 OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'FAN ON', 'FAN ON'),
('sagar', 'FAN OFF', 'FAN OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF'),
('sagar', 'BULB ON', 'BULB ON'),
('sagar', 'BULB OFF', 'BULB OFF');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `site_setting_id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`site_setting_id`, `key`, `value`) VALUES
(1, 'logo', 'logo.jpg'),
(2, 'favicon', 'favicon.PNG'),
(3, 'website_title', 'smart homes'),
(4, 'copyright_text', '© Copyright 2018 – Smart homes All Rights Reserved'),
(5, 'email_receiver', 'shivhansoti18@gmail.com'),
(6, 'email_sender', 'shivhansoti18@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_roll_no` varchar(50) NOT NULL,
  `student_class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_roll_no`, `student_class`) VALUES
(1, 'Ehtesham Mehmood', '131', 'BS'),
(2, 'Zaid', '112', 'BS CS'),
(3, 'Farrukh', '1214', 'Telecom'),
(0, '', '', ''),
(0, 'shiv', '33', 'IT-H'),
(0, 'shiv', '33', 'IT-H'),
(0, 'abc', '11', 'lsanl'),
(0, 'abc', '11', 'lsanl');

-- --------------------------------------------------------

--
-- Table structure for table `test_arduino`
--

CREATE TABLE `test_arduino` (
  `var1` varchar(100) NOT NULL,
  `var2` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_arduino`
--

INSERT INTO `test_arduino` (`var1`, `var2`, `user_id`) VALUES
('D1 ON', 'D1 ON', 43),
('D1 OFF', 'D1 OFF', 44),
('D1 ON', 'D1 ON', 45),
('D1 OFF', 'D1 OFF', 46),
('D1 ON', 'D1 ON', 47),
('D1 OFF', 'D1 OFF', 48),
('D1 ON', 'D1 ON', 49),
('D1 OFF', 'D1 OFF', 50),
('D1 ON', 'D1 ON', 51),
('D1 OFF', 'D1 OFF', 52),
('D1 OFF', 'D1 OFF', 53),
('D1 ON', 'D1 ON', 54),
('D1 OFF', 'D1 OFF', 55),
('D1 ON', 'D1 ON', 56),
('D1 ON', 'D1 ON', 57),
('D1 OFF', 'D1 OFF', 58),
('D1 ON', 'D1 ON', 59),
('D1 OFF', 'D1 OFF', 60),
('D1 ON', 'D1 ON', 61),
('D1 OFF', 'D1 OFF', 62),
('D1 ON', 'D1 ON', 63),
('D1 OFF', 'D1 OFF', 64),
('D1 ON', 'D1 ON', 65),
('D1 OFF', 'D1 OFF', 66),
('D1 ON', 'D1 ON', 67),
('D1 OFF', 'D1 OFF', 68),
('D1 ON', 'D1 ON', 69),
('D1 ON', 'D1 ON', 70),
('D1 OFF', 'D1 OFF', 71),
('D1 ON', 'D1 ON', 72),
('D1 OFF', 'D1 OFF', 73),
('D1 ON', 'D1 ON', 74),
('D1 OFF', 'D1 OFF', 75),
('D1 ON', 'D1 ON', 76),
('D1 OFF', 'D1 OFF', 77),
('D1 ON', 'D1 ON', 78),
('D1 OFF', 'D1 OFF', 79),
('D1 ON', 'D1 ON', 80),
('D1 OFF', 'D1 OFF', 81),
('D1 ON', 'D1 ON', 82),
('D1 OFF', 'D1 OFF', 83),
('D1 ON', 'D1 ON', 84),
('D1 OFF', 'D1 OFF', 85),
('D1 ON', 'D1 ON', 86),
('D1 OFF', 'D1 OFF', 87),
('D1 ON', 'D1 ON', 88),
('D1 OFF', 'D1 OFF', 89),
('D1 ON', 'D1 ON', 90),
('D1 OFF', 'D1 OFF', 91),
('D1 ON', 'D1 ON', 92),
('D1 OFF', 'D1 OFF', 93),
('D1 ON', 'D1 ON', 94),
('D1 OFF', 'D1 OFF', 95),
('D1 ON', 'D1 ON', 96),
('D1 ON', 'D1 ON', 97),
('D1 ON', 'D1 ON', 98),
('D1 OFF', 'D1 OFF', 99),
('D1 ON', 'D1 ON', 100),
('D1 OFF', 'D1 OFF', 101),
('D1 ON', 'D1 ON', 102),
('D1 OFF', 'D1 OFF', 103),
('D1 ON', 'D1 ON', 104),
('D1 OFF', 'D1 OFF', 105),
('D1 ON', 'D1 ON', 106),
('D1 OFF', 'D1 OFF', 107),
('D1 ON', 'D1 ON', 108),
('D1 OFF', 'D1 OFF', 109),
('D1 ON', 'D1 ON', 110),
('D1 OFF', 'D1 OFF', 111),
('D1 ON', 'D1 ON', 112),
('D1 ON', 'D1 ON', 113),
('D1 ON', 'D1 ON', 114),
('D1 ON', 'D1 ON', 115),
('D1 ON', 'D1 ON', 116),
('D1 OFF', 'D1 OFF', 117),
('D1 ON', 'D1 ON', 118),
('D1 OFF', 'D1 OFF', 119),
('D1 ON', 'D1 ON', 120),
('D1 OFF', 'D1 OFF', 121),
('D1 ON', 'D1 ON', 122),
('D1 OFF', 'D1 OFF', 123),
('D1 ON', 'D1 ON', 124),
('D1 ON', 'D1 ON', 125),
('D1 OFF', 'D1 OFF', 126),
('D1 ON', 'D1 ON', 127),
('D1 OFF', 'D1 OFF', 128),
('D1 ON', 'D1 ON', 129),
('D1 OFF', 'D1 OFF', 130),
('D1 ON', 'D1 ON', 131),
('D1 OFF', 'D1 OFF', 132),
('D1 ON', 'D1 ON', 133),
('D1 OFF', 'D1 OFF', 134),
('D1 ON', 'D1 ON', 135),
('D1 OFF', 'D1 OFF', 136),
('D1 ON', 'D1 ON', 137),
('D1 OFF', 'D1 OFF', 138),
('D1 ON', 'D1 ON', 139),
('D1 OFF', 'D1 OFF', 140),
('D1 ON', 'D1 ON', 141),
('D1 OFF', 'D1 OFF', 142),
('BULB ON', 'BULB ON', 143),
('BULB ON', 'BULB ON', 144),
('BULB OFF', 'BULB OFF', 145),
('BULB ON', 'BULB ON', 146),
('BULB OFF', 'BULB OFF', 147),
('BULB ON', 'BULB ON', 148),
('BULB ON', 'BULB ON', 149),
('BULB ON', 'BULB ON', 150),
('BULB OFF', 'BULB OFF', 151),
('BULB ON', 'BULB ON', 152),
('BULB OFF', 'BULB OFF', 153),
('BULB ON', 'BULB ON', 154),
('BULB ON', 'BULB ON', 155),
('BULB OFF', 'BULB OFF', 156),
('BULB ON', 'BULB ON', 157),
('BULB ON', 'BULB ON', 158),
('BULB ON', 'BULB ON', 159),
('BULB ON', 'BULB ON', 160),
('BULB ON', 'BULB ON', 161),
('BULB OFF', 'BULB OFF', 162),
('BULB ON', 'BULB ON', 163),
('BULB OFF', 'BULB OFF', 164),
('BULB ON', 'BULB ON', 165),
('BULB ON', 'BULB ON', 166),
('BULB OFF', 'BULB OFF', 167),
('BULB ON', 'BULB ON', 168),
('BULB OFF', 'BULB OFF', 169),
('BULB ON', 'BULB ON', 170),
('BULB OFF', 'BULB OFF', 171),
('BULB ON', 'BULB ON', 172),
('BULB ON', 'BULB ON', 173),
('BULB ON', 'BULB ON', 174),
('BULB OFF', 'BULB OFF', 175),
('BULB ON', 'BULB ON', 176),
('BULB ON', 'BULB ON', 177),
('BULB ON', 'BULB ON', 178),
('BULB OFF', 'BULB OFF', 179),
('BULB ON', 'BULB ON', 180),
('BULB ON', 'BULB ON', 181),
('BULB OFF', 'BULB OFF', 182),
('BULB ON', 'BULB ON', 183),
('BULB ON', 'BULB ON', 184),
('BULB ON', 'BULB ON', 185),
('BULB ON', 'BULB ON', 186),
('BULB OFF', 'BULB OFF', 187),
('BULB ON', 'BULB ON', 188),
('BULB ON', 'BULB ON', 189),
('BULB OFF', 'BULB OFF', 190),
('BULB ON', 'BULB ON', 191),
('BULB OFF', 'BULB OFF', 192),
('BULB ON', 'BULB ON', 193),
('BULB OFF', 'BULB OFF', 194),
('BULB ON', 'BULB ON', 195),
('BULB OFF', 'BULB OFF', 196),
('FAN ON', 'FAN ON', 197),
('BULB OFF', 'BULB OFF', 198),
('FAN ON', 'FAN ON', 199),
('FAN OFF', 'FAN OFF', 200),
('BULB ON', 'BULB ON', 201),
('BULB OFF', 'BULB OFF', 202),
('FAN ON', 'FAN ON', 203),
('FAN OFF', 'FAN OFF', 204),
('BULB ON', 'BULB ON', 205),
('BULB OFF', 'BULB OFF', 206),
('FAN ON', 'FAN ON', 207),
('FAN OFF', 'FAN OFF', 208),
('FAN ON', 'FAN ON', 209),
('FAN OFF', 'FAN OFF', 210),
('BULB ON', 'BULB ON', 211),
('BULB OFF', 'BULB OFF', 212),
('FAN ON', 'FAN ON', 213),
('FAN ON', 'FAN ON', 214),
('FAN ON', 'FAN ON', 215),
('BULB ON', 'BULB ON', 216),
('BULB OFF', 'BULB OFF', 217),
('BULB ON', 'BULB ON', 218),
('BULB OFF', 'BULB OFF', 219),
('FAN ON', 'FAN ON', 220),
('FAN ON', 'FAN ON', 221),
('BULB ON', 'BULB ON', 222),
('FAN ON', 'FAN ON', 223),
('FAN OFF', 'FAN OFF', 224),
('BULB OFF', 'BULB OFF', 225),
('BULB ON', 'BULB ON', 226),
('FAN ON', 'FAN ON', 227),
('FAN OFF', 'FAN OFF', 228),
('BULB OFF', 'BULB OFF', 229),
('BULB ON', 'BULB ON', 230),
('BULB OFF', 'BULB OFF', 231),
('BULB ON', 'BULB ON', 232),
('FAN ON', 'FAN ON', 233),
('FAN OFF', 'FAN OFF', 234),
('BULB OFF', 'BULB OFF', 235),
('BULB ON', 'BULB ON', 236),
('FAN ON', 'FAN ON', 237),
('FAN OFF', 'FAN OFF', 238),
('BULB OFF', 'BULB OFF', 239),
('BULB ON', 'BULB ON', 240),
('BULB OFF', 'BULB OFF', 241),
('BULB ON', 'BULB ON', 242),
('BULB OFF', 'BULB OFF', 243),
('BULB ON', 'BULB ON', 244),
('FAN ON', 'FAN ON', 245),
('BULB OFF', 'BULB OFF', 246),
('FAN OFF', 'FAN OFF', 247),
('FAN ON', 'FAN ON', 248),
('FAN OFF', 'FAN OFF', 249),
('BULB ON', 'BULB ON', 250),
('BULB OFF', 'BULB OFF', 251),
('FAN ON', 'FAN ON', 252),
('FAN OFF', 'FAN OFF', 253),
('FAN ON', 'FAN ON', 254),
('FAN OFF', 'FAN OFF', 255),
('BULB ON', 'BULB ON', 256),
('BULB OFF', 'BULB OFF', 257),
('FAN ON', 'FAN ON', 258),
('FAN OFF', 'FAN OFF', 259),
('BULB ON', 'BULB ON', 260),
('BULB OFF', 'BULB OFF', 261),
('FAN ON', 'FAN ON', 262),
('FAN OFF', 'FAN OFF', 263),
('BULB ON', 'BULB ON', 264),
('BULB OFF', 'BULB OFF', 265),
('FAN ON', 'FAN ON', 266),
('FAN OFF', 'FAN OFF', 267),
('BULB ON', 'BULB ON', 268),
('BULB OFF', 'BULB OFF', 269),
('FAN ON', 'FAN ON', 270),
('FAN OFF', 'FAN OFF', 271),
('BULB ON', 'BULB ON', 272),
('BULB OFF', 'BULB OFF', 273),
('FAN ON', 'FAN ON', 274),
('FAN OFF', 'FAN OFF', 275),
('BULB ON', 'BULB ON', 276),
('FAN ON', 'FAN ON', 277),
('BULB OFF', 'BULB OFF', 278),
('FAN OFF', 'FAN OFF', 279),
('BULB ON', 'BULB ON', 280),
('BULB OFF', 'BULB OFF', 281),
('FAN ON', 'FAN ON', 282),
('BULB ON', 'BULB ON', 283),
('BULB OFF', 'BULB OFF', 284),
('FAN OFF', 'FAN OFF', 285),
('BULB ON', 'BULB ON', 286),
('BULB OFF', 'BULB OFF', 287),
('FAN ON', 'FAN ON', 288),
('FAN OFF', 'FAN OFF', 289),
('BULB ON', 'BULB ON', 290),
('BULB OFF', 'BULB OFF', 291),
('BULB ON', 'BULB ON', 292),
('BULB OFF', 'BULB OFF', 293),
('FAN ON', 'FAN ON', 294),
('BULB ON', 'BULB ON', 295),
('BULB OFF', 'BULB OFF', 296),
('FAN OFF', 'FAN OFF', 297),
('BULB ON', 'BULB ON', 298),
('BULB OFF', 'BULB OFF', 299),
('FAN ON', 'FAN ON', 300),
('FAN OFF', 'FAN OFF', 301),
('BULB ON', 'BULB ON', 302),
('BULB OFF', 'BULB OFF', 303),
('BULB ON', 'BULB ON', 304),
('BULB OFF', 'BULB OFF', 305),
('BULB ON', 'BULB ON', 306),
('BULB OFF', 'BULB OFF', 307),
('FAN ON', 'FAN ON', 308),
('BULB ON', 'BULB ON', 309),
('BULB ON', 'BULB ON', 310),
('BULB OFF', 'BULB OFF', 311),
('FAN OFF', 'FAN OFF', 312),
('BULB ON', 'BULB ON', 313),
('BULB OFF', 'BULB OFF', 314),
('FAN ON', 'FAN ON', 315),
('FAN OFF', 'FAN OFF', 316),
('BULB ON', 'BULB ON', 317),
('BULB ON', 'BULB ON', 318),
('FAN ON', 'FAN ON', 319),
('BULB ON', 'BULB ON', 320),
('BULB OFF', 'BULB OFF', 321),
('FAN OFF', 'FAN OFF', 322),
('BULB ON', 'BULB ON', 323),
('BULB OFF', 'BULB OFF', 324),
('BULB ON', 'BULB ON', 325),
('BULB OFF', 'BULB OFF', 326),
('BULB ON', 'BULB ON', 327),
('BULB OFF', 'BULB OFF', 328),
('BULB ON', 'BULB ON', 329),
('BULB OFF', 'BULB OFF', 330),
('BULB ON', 'BULB ON', 331),
('BULB OFF', 'BULB OFF', 332),
('BULB ON', 'BULB ON', 333),
('BULB OFF', 'BULB OFF', 334),
('BULB ON', 'BULB ON', 335),
('BULB OFF', 'BULB OFF', 336),
('BULB ON', 'BULB ON', 337),
('BULB OFF', 'BULB OFF', 338),
('BULB ON', 'BULB ON', 339),
('BULB OFF', 'BULB OFF', 340),
('BULB ON', 'BULB ON', 341),
('BULB OFF', 'BULB OFF', 342),
('BULB ON', 'BULB ON', 343),
('BULB OFF', 'BULB OFF', 344),
('BULB ON', 'BULB ON', 345),
('BULB OFF', 'BULB OFF', 346),
('BULB ON', 'BULB ON', 347),
('BULB OFF', 'BULB OFF', 348),
('BULB ON', 'BULB ON', 349),
('BULB OFF', 'BULB OFF', 350),
('BULB ON', 'BULB ON', 351),
('BULB OFF', 'BULB OFF', 352),
('BULB ON', 'BULB ON', 353),
('BULB OFF', 'BULB OFF', 354),
('BULB OFF', 'BULB OFF', 355),
('BULB ON', 'BULB ON', 356),
('BULB ON', 'BULB ON', 357),
('BULB OFF', 'BULB OFF', 358),
('BULB ON', 'BULB ON', 359),
('BULB OFF', 'BULB OFF', 360),
('BULB ON', 'BULB ON', 361),
('BULB OFF', 'BULB OFF', 362),
('BULB ON', 'BULB ON', 363),
('BULB ON', 'BULB ON', 364),
('BULB OFF', 'BULB OFF', 365),
('BULB ON', 'BULB ON', 366),
('BULB OFF', 'BULB OFF', 367),
('BULB ON', 'BULB ON', 368),
('BULB OFF', 'BULB OFF', 369),
('BULB ON', 'BULB ON', 370),
('BULB OFF', 'BULB OFF', 371),
('BULB ON', 'BULB ON', 372),
('BULB OFF', 'BULB OFF', 373),
('BULB ON', 'BULB ON', 374),
('BULB OFF', 'BULB OFF', 375),
('BULB ON', 'BULB ON', 376),
('BULB OFF', 'BULB OFF', 377),
('FAN ON', 'FAN ON', 378),
('FAN OFF', 'FAN OFF', 379),
('BULB ON', 'BULB ON', 380),
('BULB OFF', 'BULB OFF', 381),
('FAN ON', 'FAN ON', 382),
('FAN OFF', 'FAN OFF', 383),
('FAN ON', 'FAN ON', 384),
('FAN OFF', 'FAN OFF', 385),
('FAN ON', 'FAN ON', 386),
('FAN OFF', 'FAN OFF', 387),
('FAN ON', 'FAN ON', 388),
('FAN OFF', 'FAN OFF', 389),
('FAN ON', 'FAN ON', 390),
('FAN OFF', 'FAN OFF', 391),
('BULB ON', 'BULB ON', 392),
('BULB OFF', 'BULB OFF', 393),
('BULB ON', 'BULB ON', 394),
('BULB OFF', 'BULB OFF', 395),
('FAN ON', 'FAN ON', 396),
('FAN OFF', 'FAN OFF', 397),
('BULB ON', 'BULB ON', 398),
('BULB OFF', 'BULB OFF', 399),
('BULB ON', 'BULB ON', 400),
('BULB OFF', 'BULB OFF', 401),
('BULB ON', 'BULB ON', 402),
('BULB OFF', 'BULB OFF', 403),
('FAN ON', 'FAN ON', 404),
('FAN OFF', 'FAN OFF', 405),
('FAN ON', 'FAN ON', 406),
('FAN OFF', 'FAN OFF', 407),
('BULB ON', 'BULB ON', 408),
('BULB OFF', 'BULB OFF', 409),
('FAN ON', 'FAN ON', 410),
('FAN OFF', 'FAN OFF', 411),
('FAN ON', 'FAN ON', 412),
('FAN OFF', 'FAN OFF', 413),
('BULB ON', 'BULB ON', 414),
('FAN ON', 'FAN ON', 415),
('FAN OFF', 'FAN OFF', 416),
('BULB OFF', 'BULB OFF', 417),
('FAN ON', 'FAN ON', 418),
('FAN OFF', 'FAN OFF', 419),
('BULB ON', 'BULB ON', 420),
('BULB OFF', 'BULB OFF', 421),
('FAN ON', 'FAN ON', 422),
('FAN OFF', 'FAN OFF', 423),
('BULB ON', 'BULB ON', 424),
('FAN ON', 'FAN ON', 425),
('BULB OFF', 'BULB OFF', 426),
('FAN OFF', 'FAN OFF', 427),
('BULB ON', 'BULB ON', 428),
('FAN ON', 'FAN ON', 429),
('BULB OFF', 'BULB OFF', 430),
('FAN OFF', 'FAN OFF', 431),
('BULB ON', 'BULB ON', 432),
('BULB OFF', 'BULB OFF', 433),
('FAN OFF', 'FAN OFF', 434),
('FAN ON', 'FAN ON', 435),
('FAN OFF', 'FAN OFF', 436),
('BULB ON', 'BULB ON', 437),
('FAN ON', 'FAN ON', 438),
('BULB OFF', 'BULB OFF', 439),
('FAN OFF', 'FAN OFF', 440),
('BULB ON', 'BULB ON', 441),
('FAN ON', 'FAN ON', 442),
('BULB OFF', 'BULB OFF', 443),
('FAN OFF', 'FAN OFF', 444),
('BULB ON', 'BULB ON', 445),
('FAN ON', 'FAN ON', 446),
('BULB OFF', 'BULB OFF', 447),
('FAN OFF', 'FAN OFF', 448),
('BULB ON', 'BULB ON', 449),
('FAN ON', 'FAN ON', 450),
('BULB OFF', 'BULB OFF', 451),
('FAN OFF', 'FAN OFF', 452),
('BULB ON', 'BULB ON', 453),
('FAN ON', 'FAN ON', 454),
('BULB OFF', 'BULB OFF', 455),
('FAN OFF', 'FAN OFF', 456),
('BULB ON', 'BULB ON', 457),
('FAN ON', 'FAN ON', 458),
('BULB ON', 'BULB ON', 459),
('FAN ON', 'FAN ON', 460),
('FAN OFF', 'FAN OFF', 461),
('BULB OFF', 'BULB OFF', 462),
('BULB ON', 'BULB ON', 463),
('FAN ON', 'FAN ON', 464),
('BULB OFF', 'BULB OFF', 465),
('FAN OFF', 'FAN OFF', 466),
('BULB ON', 'BULB ON', 467),
('FAN ON', 'FAN ON', 468),
('BULB ON', 'BULB ON', 469),
('FAN ON', 'FAN ON', 470),
('BULB OFF', 'BULB OFF', 471),
('FAN OFF', 'FAN OFF', 472),
('BULB ON', 'BULB ON', 473),
('FAN ON', 'FAN ON', 474),
('BULB ON', 'BULB ON', 475),
('FAN ON', 'FAN ON', 476),
('BULB OFF', 'BULB OFF', 477),
('FAN OFF', 'FAN OFF', 478),
('BULB ON', 'BULB ON', 479),
('BULB OFF', 'BULB OFF', 480),
('BULB ON', 'BULB ON', 481),
('BULB OFF', 'BULB OFF', 482),
('BULB ON', 'BULB ON', 483),
('BULB OFF', 'BULB OFF', 484),
('BULB ON', 'BULB ON', 485),
('BULB ON', 'BULB ON', 486),
('BULB OFF', 'BULB OFF', 487),
('BULB ON', 'BULB ON', 488),
('BULB OFF', 'BULB OFF', 489),
('BULB ON', 'BULB ON', 490),
('BULB OFF', 'BULB OFF', 491),
('BULB ON', 'BULB ON', 492),
('BULB OFF', 'BULB OFF', 493),
('BULB ON', 'BULB ON', 494),
('BULB OFF', 'BULB OFF', 495),
('BULB ON', 'BULB ON', 496),
('BULB OFF', 'BULB OFF', 497),
('BULB ON', 'BULB ON', 498),
('BULB OFF', 'BULB OFF', 499),
('BULB ON', 'BULB ON', 500),
('BULB OFF', 'BULB OFF', 501),
('BULB OFF', 'BULB OFF', 502),
('FAN ON', 'FAN ON', 503),
('FAN OFF', 'FAN OFF', 504),
('BULB ON', 'BULB ON', 505),
('BULB OFF', 'BULB OFF', 506),
('BULB ON', 'BULB ON', 507),
('BULB ON', 'BULB ON', 508),
('BULB OFF', 'BULB OFF', 509),
('BULB OFF', 'BULB OFF', 510),
('BULB ON', 'BULB ON', 511),
('BULB OFF', 'BULB OFF', 512),
('BULB ON', 'BULB ON', 513),
('BULB OFF', 'BULB OFF', 514),
('BULB ON', 'BULB ON', 515),
('BULB OFF', 'BULB OFF', 516),
('BULB ON', 'BULB ON', 517),
('BULB OFF', 'BULB OFF', 518),
('BULB ON', 'BULB ON', 519),
('BULB OFF', 'BULB OFF', 520),
('BULB ON', 'BULB ON', 521),
('BULB OFF', 'BULB OFF', 522),
('BULB OFF', 'BULB OFF', 523),
('BULB OFF', 'BULB OFF', 524),
('BULB OFF', 'BULB OFF', 525),
('BULB ON', 'BULB ON', 526),
('BULB OFF', 'BULB OFF', 527),
('BULB OFF', 'BULB OFF', 528),
('BULB OFF', 'BULB OFF', 529),
('FAN ON', 'FAN ON', 530),
('FAN OFF', 'FAN OFF', 531),
('BULB OFF', 'BULB OFF', 532),
('BULB OFF', 'BULB OFF', 533),
('BULB ON', 'BULB ON', 534),
('BULB OFF', 'BULB OFF', 535),
('BULB OFF', 'BULB OFF', 536),
('BULB ON', 'BULB ON', 537),
('BULB OFF', 'BULB OFF', 538),
('BULB ON', 'BULB ON', 539),
('BULB OFF', 'BULB OFF', 540),
('BULB ON', 'BULB ON', 541),
('BULB OFF', 'BULB OFF', 542),
('BULB ON', 'BULB ON', 543),
('BULB OFF', 'BULB OFF', 544),
('BULB ON', 'BULB ON', 545),
('BULB ON', 'BULB ON', 546),
('BULB OFF', 'BULB OFF', 547),
('BULB ON', 'BULB ON', 548),
('BULB OFF', 'BULB OFF', 549),
('BULB ON', 'BULB ON', 550),
('BULB OFF', 'BULB OFF', 551),
('FAN ON', 'FAN ON', 552),
('FAN OFF', 'FAN OFF', 553),
('BULB ON', 'BULB ON', 554),
('BULB OFF', 'BULB OFF', 555),
('BULB ON', 'BULB ON', 556),
('BULB OFF', 'BULB OFF', 557);

-- --------------------------------------------------------

--
-- Table structure for table `usercomp`
--

CREATE TABLE `usercomp` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercomp`
--

INSERT INTO `usercomp` (`name`, `email`, `msg`) VALUES
('shiv', 'shivhansoti18@gmail.com', 'bulb not working'),
('shiv', 'shivhansoti18@gmail.com', 'bulb not working'),
('shiv', 'shivhansoti18@gmail.com', 'bulb not working'),
('shiv', 'shivhansoti18@gmail.com', 'bulb not working'),
('shiv', 'shivhansoti18@gmail.com', 'bulb not working'),
('shiv', ' saloni24298@gmail.com', 'please reactivate plan'),
('shiv', ' saloni24298@gmail.com', 'pleaase reactivate plan'),
('shiv', 'shivhansoti18@gmail.com', 'please activate device'),
('shiv', 'shivhansoti18@gmail.com', 'dshkjhfnwekf'),
('shiv', 'shivhansoti18@gmail.com', 'nskdjbkfsrbfek'),
('shiv', 'shivhansoti18@gmail.com', 'nskdjbkfsrbfek'),
('shiv', 'shivhansoti18@gmail.com', 'hey there i need an appointment'),
('shiv', 'shivhansoti18@gmail.com', 'hey there i need an appointment'),
('wystqvty', 'bysdvbdyg', 'bygsvdyg'),
('wystqvty', 'bysdvbdyg', 'bygsvdyg'),
('edjkfwb', 'jkdbsaqwj', 'ksdnb k'),
('shiv', 'shivhansoti18@gmail.com', 'jdbhswefvhhgvhhgavujf'),
('sagar', 'shivhansoti18@gmail.com', 'hey hi how are you?');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `connection` int(100) NOT NULL,
  `on` varchar(100) NOT NULL,
  `off` varchar(100) NOT NULL,
  `disable_button` varchar(100) NOT NULL,
  `dp` varchar(100) NOT NULL,
  `device` varchar(255) NOT NULL,
  `status1` varchar(100) NOT NULL,
  `device1_on` varchar(100) NOT NULL,
  `device1_off` varchar(100) NOT NULL,
  `status2` varchar(100) NOT NULL,
  `device2_on` varchar(100) NOT NULL,
  `device2_off` varchar(100) NOT NULL,
  `duration` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `name`, `address`, `ip`, `connection`, `on`, `off`, `disable_button`, `dp`, `device`, `status1`, `device1_on`, `device1_off`, `status2`, `device2_on`, `device2_off`, `duration`, `date`) VALUES
(1, 'Mohit', 'abc,12 dkskdndndkawa, ew;kok23455', '192.168.0.21', 0, '1', '0', 'disabled', 'dr.jpg', '4', 'BULB OFF', 'bulbon.gif', 'bulboff.jpg', 'FAN OFF', 'fanon1.gif', 'fanoff1.PNG', 3, '2019-02-25 06:56:57'),
(2, 'sagar', 'abc,12 dkskdndndkawa, ew;kok23455', '192.168.0.21', 0, '1', '0', 'disabled', 'bg1.gif', '4', 'BULB OFF', 'bulbon.gif', 'bulboff.jpg', 'FAN OFF', 'fanon1.gif', 'fanoff1.PNG', 4, '2019-02-25 07:02:30'),
(3, 'vishal', 'abc,12 dkskdndndkawa, ew;kok23455', '192.168.0.21', 0, '1', '0', 'disabled', 'ironman', '2', 'BULB OFF', 'bulbon.gif', 'bulboff.jpg', 'FAN OFF', 'fanon1.gif', 'fanoff1.PNG', 1, '2019-02-25 06:57:06'),
(4, 'parth', 'abc,12 dkskdndndkawa, ew;kok23455', '192.168.0.21', 0, '1', '0', 'disabled', 'ironman', '4', 'BULB OFF', 'bulbon.gif', 'bulboff.jpg', 'FAN OFF', 'fanon1.gif', 'fanoff1.PNG', 4, '2019-02-25 06:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `login_status`) VALUES
(1, 'mohit', 'mohit', 0),
(2, 'sagar', 'sagar1', 0),
(3, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_msg`
--

CREATE TABLE `user_msg` (
  `name` varchar(10000) NOT NULL,
  `msg` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_msg`
--

INSERT INTO `user_msg` (`name`, `msg`) VALUES
('shiv', 'hey'),
('shiv', 'hello'),
('sagar', 'hi'),
('sagar', 'hello'),
('sagar', 'hi there\r\n'),
('sagar', 'hi \r\nhey there'),
('sagar', 'hey'),
('sagar', 'hello'),
('sagar', 'hello'),
('sagar', 'hello'),
('sagar', 'beskhbwf'),
('sagar', 'beskhbwf'),
('sagar', 'nas'),
('sagar', 'dnefk'),
('sagar', 'dnjbcjks'),
('sagar', 'dnskn'),
('sagar', 'heyyyyyyyy'),
('sagar', 'nskdnk'),
('sagar', 'msa ,d'),
('sagar', 'mlkmlkfde,'),
('sagar', 'sd  c');

-- --------------------------------------------------------

--
-- Table structure for table `vishal`
--

CREATE TABLE `vishal` (
  `name` varchar(100) NOT NULL,
  `var1` varchar(100) NOT NULL,
  `var2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `current_login_status` int(11) NOT NULL DEFAULT '0' COMMENT '1=login, 0=logout',
  `last_location` varchar(255) NOT NULL,
  `last_lat` varchar(255) NOT NULL,
  `last_lng` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `staff_no` varchar(255) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `identity_proof` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(100) NOT NULL,
  `connection` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`worker_id`, `manager_id`, `current_login_status`, `last_location`, `last_lat`, `last_lng`, `name`, `surname`, `staff_no`, `login_id`, `email`, `profile_pic`, `identity_proof`, `status`, `created_at`, `updated_at`, `ip`, `connection`) VALUES
(1, 1, 1, 'w wfwfff fWF', '123', '3123', 'Mohit', 'Dobariya', '3fs56', '75s6', 'mohit@vethics.com', 'a418ea261218095307.png', '', 1, '2018-12-24 09:41:06', '2019-02-25 05:26:26', '192.168.0.21', 1),
(2, 2, 0, '', '', '', 'sagar', 'sukhanandi', '123', 'sagar123', 'sagar@vethics.com', '1875e6261218095157.png', '88eda3261218095157.jpg', 1, '2018-12-26 09:51:57', '2019-02-15 05:22:18', '192.168.0.21\r\n', 1),
(3, 1, 0, '', '', '', 'vishal', 'usdadiya', '123456', 'vishal123', 'vishal@vethics.com', 'f1678e261218095231.png', 'b116f4261218095231.png', 1, '2018-12-26 09:52:31', '2019-02-25 05:26:34', '192.168.0.21', 1),
(4, 2, 0, '', '', '', 'parth', 'sukhanandi', 'parth12', 'parth12', 'parth@vethics.com', 'c1b4bc261218095259.png', '07d292261218095259.png', 1, '2018-12-26 09:52:59', '2019-02-25 05:26:42', '192.168.0.21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `worker_device_token`
--

CREATE TABLE `worker_device_token` (
  `id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `device_type` varchar(50) NOT NULL,
  `device_token` text NOT NULL,
  `device_id` varchar(50) NOT NULL,
  `device_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker_device_token`
--

INSERT INTO `worker_device_token` (`id`, `worker_id`, `device_type`, `device_token`, `device_id`, `device_name`, `status`, `datetime`) VALUES
(32, 1, 'android', 'fg7rB6bCNo0:APA91bFLX5kd6Gn2G2md_AMpRFeEVbHaacQ7Ef_AYHZ30oTfn7Z-dy8XXEVbzwJWtrcydiSfohbGfqb64Y6A2u4CM4wIS7uwv7z2Fw1Ns-d21URFYj06Aeo2GWyKu4KAy4Q4Cnv0lgS3', '123', '', 1, '2019-01-01 13:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `worker_login_history`
--

CREATE TABLE `worker_login_history` (
  `id` int(11) NOT NULL,
  `worker_id` int(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_login_history`
--

INSERT INTO `worker_login_history` (`id`, `worker_id`, `lat`, `lng`, `location`, `date_time`, `type`, `created_at`, `updated_at`) VALUES
(26, 1, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-25 04:52:57', '2018-12-25 04:52:57'),
(27, 1, '123', '3123', 'w wfwfff fWF', '2018-12-26 18:08:22', 'logout', '2018-12-26 10:15:10', '2018-12-26 10:15:10'),
(28, 1, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-26 10:16:19', '2018-12-26 10:16:19'),
(29, 1, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-26 10:42:21', '2018-12-26 10:42:21'),
(30, 1, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-26 10:42:35', '2018-12-26 10:42:35'),
(31, 1, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-26 12:46:01', '2018-12-26 12:46:01'),
(32, 1, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-26 12:56:54', '2018-12-26 12:56:54'),
(33, 1, '123', '3123', '1174 E 59th Pl, Los Angeles, CA 90001, USA', '2018-12-24 18:08:22', 'login', '2018-12-26 12:59:27', '2018-12-26 12:59:27'),
(34, 1, '33.985805', '-118.25411166666666', '1174 E 59th Pl, Los Angeles, CA 90001, USA\n', '0000-00-00 00:00:00', 'login', '2018-12-26 13:16:25', '2018-12-26 13:16:25'),
(35, 1, '33.985805', '-118.25411166666666', '1174 E 59th Pl, Los Angeles, CA 90001, USA\n', '0000-00-00 00:00:00', 'login', '2018-12-26 13:29:31', '2018-12-26 13:29:31'),
(36, 1, '33.985805', '-118.25411166666666', '1174 E 59th Pl, Los Angeles, CA 90001, USA\n', '0000-00-00 00:00:00', 'login', '2018-12-26 13:39:59', '2018-12-26 13:39:59'),
(37, 1, '33.985805', '-118.25411166666666', '1174 E 59th Pl, Los Angeles, CA 90001, USA\n', '0000-00-00 00:00:00', 'login', '2018-12-26 13:45:01', '2018-12-26 13:45:01'),
(38, 1, '123', '3123', 'w wfwfff fWF', '2018-12-26 18:08:22', 'logout', '2018-12-27 04:41:10', '2018-12-27 04:41:10'),
(39, 1, '123', '3123', 'w wfwfff fWF', '2018-12-26 18:08:22', 'logout', '2018-12-27 04:52:58', '2018-12-27 04:52:58'),
(40, 1, '123', '3123', 'w wfwfff fWF', '2018-12-26 18:08:22', 'logout', '2018-12-27 05:25:15', '2018-12-27 05:25:15'),
(41, 1, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-27 12:04:28', '2018-12-27 12:04:28'),
(42, 1, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-27 12:12:38', '2018-12-27 12:12:38'),
(43, 1, '123', '3123', 'w wfwfff fWF', '2018-12-26 18:08:22', 'logout', '2018-12-27 12:12:51', '2018-12-27 12:12:51'),
(44, 1, '33.985805', '-118.25411166666666', '1174 E 59th Pl, Los Angeles, CA 90001, USA\n', '0000-00-00 00:00:00', 'login', '2018-12-27 13:15:47', '2018-12-27 13:15:47'),
(45, 1, '33.985805', '-118.25411166666666', '1174 E 59th Pl, Los Angeles, CA 90001, USA\n', '0000-00-00 00:00:00', 'logout', '2018-12-27 13:19:42', '2018-12-27 13:19:42'),
(46, 1, '33.985805', '-118.25411166666666', '1174 E 59th Pl, Los Angeles, CA 90001, USA\n', '0000-00-00 00:00:00', 'login', '2018-12-27 13:31:15', '2018-12-27 13:31:15'),
(47, 1, '33.985805', '-118.25411166666666', '1174 E 59th Pl, Los Angeles, CA 90001, USA\n', '0000-00-00 00:00:00', 'logout', '2018-12-27 13:31:35', '2018-12-27 13:31:35'),
(48, 1, '33.985805', '-118.25411166666666', '1174 E 59th Pl, Los Angeles, CA 90001, USA\n', '0000-00-00 00:00:00', 'login', '2018-12-27 13:33:11', '2018-12-27 13:33:11'),
(49, 1, '33.985805', '-118.25411166666666', '1174 E 59th Pl, Los Angeles, CA 90001, USA\n', '0000-00-00 00:00:00', 'logout', '2018-12-27 13:33:17', '2018-12-27 13:33:17'),
(50, 1, '33.985805', '-118.25411166666666', '1174 E 59th Pl, Los Angeles, CA 90001, USA\n', '0000-00-00 00:00:00', 'login', '2018-12-27 13:43:31', '2018-12-27 13:43:31'),
(51, 1, '23.0118009', '72.5236261', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-28 12:38:33', '2018-12-28 12:38:33'),
(52, 1, '23.0118009', '72.5236261', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-28 12:41:57', '2018-12-28 12:41:57'),
(53, 1, '23.0118009', '72.5236261', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-28 12:44:26', '2018-12-28 12:44:26'),
(54, 1, '23.0118039', '72.5236282', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-28 12:54:43', '2018-12-28 12:54:43'),
(55, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-28 13:11:22', '2018-12-28 13:11:22'),
(56, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'logout', '2018-12-28 13:11:34', '2018-12-28 13:11:34'),
(57, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-28 13:20:11', '2018-12-28 13:20:11'),
(58, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'logout', '2018-12-28 13:20:30', '2018-12-28 13:20:30'),
(59, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-28 13:30:28', '2018-12-28 13:30:28'),
(60, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'logout', '2018-12-28 13:30:51', '2018-12-28 13:30:51'),
(61, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-28 13:35:36', '2018-12-28 13:35:36'),
(62, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'logout', '2018-12-28 13:35:59', '2018-12-28 13:35:59'),
(63, 1, '23.0117973', '72.5236122', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 05:09:11', '2018-12-29 05:09:11'),
(64, 1, '23.0117973', '72.5236122', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 05:09:40', '2018-12-29 05:09:40'),
(65, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 06:40:01', '2018-12-29 06:40:01'),
(66, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 06:47:05', '2018-12-29 06:47:05'),
(67, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 06:47:07', '2018-12-29 06:47:07'),
(68, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 06:47:19', '2018-12-29 06:47:19'),
(69, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 06:50:46', '2018-12-29 06:50:46'),
(70, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 06:50:49', '2018-12-29 06:50:49'),
(71, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 06:50:50', '2018-12-29 06:50:50'),
(72, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 06:54:53', '2018-12-29 06:54:53'),
(73, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 06:55:01', '2018-12-29 06:55:01'),
(74, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 06:55:10', '2018-12-29 06:55:10'),
(75, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 07:00:30', '2018-12-29 07:00:30'),
(76, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 07:00:55', '2018-12-29 07:00:55'),
(77, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-29 08:42:57', '2018-12-29 08:42:57'),
(78, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'logout', '2018-12-29 08:43:02', '2018-12-29 08:43:02'),
(79, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-29 08:43:26', '2018-12-29 08:43:26'),
(80, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-29 11:11:46', '2018-12-29 11:11:46'),
(81, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'logout', '2018-12-29 11:12:15', '2018-12-29 11:12:15'),
(82, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-29 11:13:39', '2018-12-29 11:13:39'),
(83, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'logout', '2018-12-29 11:14:47', '2018-12-29 11:14:47'),
(84, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-29 11:19:04', '2018-12-29 11:19:04'),
(85, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'logout', '2018-12-29 11:19:54', '2018-12-29 11:19:54'),
(86, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-29 11:20:06', '2018-12-29 11:20:06'),
(87, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'logout', '2018-12-29 11:20:25', '2018-12-29 11:20:25'),
(88, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-29 11:20:43', '2018-12-29 11:20:43'),
(89, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'logout', '2018-12-29 11:21:29', '2018-12-29 11:21:29'),
(90, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-29 11:24:29', '2018-12-29 11:24:29'),
(91, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'logout', '2018-12-29 11:24:47', '2018-12-29 11:24:47'),
(92, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 12:33:11', '2018-12-29 12:33:11'),
(93, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 12:33:51', '2018-12-29 12:33:51'),
(94, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 12:46:02', '2018-12-29 12:46:02'),
(95, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 12:46:08', '2018-12-29 12:46:08'),
(96, 1, '23.0117709', '72.5235891', 'E-308, Titanium City center office,, Near Sachin Tower,, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 12:56:51', '2018-12-29 12:56:51'),
(97, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 13:05:20', '2018-12-29 13:05:20'),
(98, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-29 13:18:31', '2018-12-29 13:18:31'),
(99, 1, '23.0117992', '72.5236129', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-29 13:18:39', '2018-12-29 13:18:39'),
(100, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'login', '2018-12-29 15:50:04', '2018-12-29 15:50:04'),
(101, 1, '23.0118039', '72.5236282', 'Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India', '0000-00-00 00:00:00', 'logout', '2018-12-29 15:50:06', '2018-12-29 15:50:06'),
(102, 1, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 04:41:21', '2018-12-31 04:41:21'),
(103, 1, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-31 04:41:24', '2018-12-31 04:41:24'),
(104, 1, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-31 05:53:48', '2018-12-31 05:53:48'),
(105, 1, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 05:59:17', '2018-12-31 05:59:17'),
(106, 1, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-31 05:59:24', '2018-12-31 05:59:24'),
(107, 1, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2018-12-31 07:06:08', '2018-12-31 07:06:08'),
(108, 1, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 10:29:26', '2018-12-31 10:29:26'),
(109, 1, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-31 10:31:27', '2018-12-31 10:31:27'),
(110, 1, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'login', '2018-12-31 11:12:34', '2018-12-31 11:12:34'),
(111, 1, '23.0117969', '72.5236079', 'A-1003, Titanium City Center, Near Sachin Tower, Anand nagar Road, Satellite, Jodhpur, Ahmedabad, Gujarat 380015, India\n', '0000-00-00 00:00:00', 'logout', '2018-12-31 11:35:17', '2018-12-31 11:35:17'),
(112, 1, '123', '3123', 'w wfwfff fWF', '2018-12-24 18:08:22', 'login', '2019-01-01 06:54:29', '2019-01-01 06:54:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`manager_id`),
  ADD KEY `company_id` (`worker_id`),
  ADD KEY `worker_id` (`worker_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `front`
--
ALTER TABLE `front`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `manager_device_token`
--
ALTER TABLE `manager_device_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`manager_id`),
  ADD KEY `worker_id` (`manager_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `manager_login_history`
--
ALTER TABLE `manager_login_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `worker_id` (`manager_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`site_setting_id`);

--
-- Indexes for table `test_arduino`
--
ALTER TABLE `test_arduino`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `worker_device_token`
--
ALTER TABLE `worker_device_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`worker_id`),
  ADD KEY `worker_id` (`worker_id`);

--
-- Indexes for table `worker_login_history`
--
ALTER TABLE `worker_login_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `worker_id` (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `front`
--
ALTER TABLE `front`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manager_device_token`
--
ALTER TABLE `manager_device_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manager_login_history`
--
ALTER TABLE `manager_login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `site_setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `test_arduino`
--
ALTER TABLE `test_arduino`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=558;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `worker_device_token`
--
ALTER TABLE `worker_device_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `worker_login_history`
--
ALTER TABLE `worker_login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manager_device_token`
--
ALTER TABLE `manager_device_token`
  ADD CONSTRAINT `manager_device_token_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manager_login_history`
--
ALTER TABLE `manager_login_history`
  ADD CONSTRAINT `manager_login_history_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `worker_device_token`
--
ALTER TABLE `worker_device_token`
  ADD CONSTRAINT `worker_device_token_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `worker_login_history`
--
ALTER TABLE `worker_login_history`
  ADD CONSTRAINT `worker_login_history_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
