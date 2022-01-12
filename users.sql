-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 11:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(25) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `age` varchar(10) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `area_code` varchar(10) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `maritail_status` varchar(25) NOT NULL,
  `areaof_working` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `created_on` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `company`, `age`, `dob`, `email`, `area_code`, `phone`, `maritail_status`, `areaof_working`, `file`, `type`, `size`, `address`, `gender`, `created_on`) VALUES
(9, 'mary', 'divya', 'bosco', '20', '2021-08-19', 'divakarmahadev1999@gmail.com', '91', '3300981876', 'Unmarried', 'devoloping', '11.jpg', 'image/jpeg', '419.20703125', 'garividi-535101 kondapalem, vizia na garam', 'Female', '2021-08-17 17:19:38'),
(10, 'Gauthami4', 'S Kamble', 'bosco edit', '20', '2021-08-19', 'gauthamikamble2000@gmail.com', '993', '0365160765', 'Unmarried', 'devoloping edit', '', '', '0', 'B/102,Chandresh shakhti co.op hsg.Society Nallasopara(East)', 'Male', '2021-08-17 17:28:56'),
(11, 'alex', 'anand', 'bosco', '18', '2021-08-20', 'gauthamikamble2000@gmail.com', '993', '0365160876099', 'Unmarried', 'devoloping', '24.jpg', 'image/jpeg', '346.67578125', 'B/102,Chandresh shakhti co.op hsg.Society Nallasopara(East)', 'Male', '2021-08-18 05:59:47'),
(12, 'arul', 'raj', 'bosco', '30', '2021-08-22', 'abc@gmail.com', '90', '109288737733', 'Unmarried', 'devoloping', 'pic-(2).jpg', 'image/jpeg', '309.83203125', 'garividi-535101 kondapalem, vizia na garam', 'Male', '2021-08-18 06:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'ancy', '', 'gauthamikamble2000@gmail.com', 'ancy'),
(2, 'ancy', '', 'gauthamikamble2000@gmail.com', 'ancy'),
(3, 'ancy', '', 'gauthamikamble2000@gmail.com', 'ancy'),
(4, 'ancy', '', 'gauthamikamble2000@gmail.com', 'ancy'),
(5, 'ancy', '', 'gauthamikamble2000@gmail.com', 'ancy'),
(6, 'ancy', '', 'gauthamikamble2000@gmail.com', 'ancy'),
(7, 'ancy', '', 'gauthamikamble2000@gmail.com', 'ancy'),
(8, 'ancy', 'priya', 'ancypriya23082000@gmail.com', 'ancy'),
(9, 'ancy', 'priya', 'ancypriya23082000@gmail.com', 'ancy'),
(10, 'ancy', 'priya', 'ancypriya23082000@gmail.com', 'ancy'),
(11, 'ancy', 'priya', 'ancypriya23082000@gmail.com', 'ancy'),
(12, 'vincy', 'ancy', 'dbcyelagiri@gmail.com', 'alex'),
(13, 'josy', 'josy', 'dbcyelagiri@gmail.com', 'josy'),
(14, 'ancy', 'alex', 'ancypriya23082000@gmail.com', 'ancy'),
(15, 'ancy', 'alex', 'ancypriya23082000@gmail.com', 'ancy'),
(16, 'ancy', 'alex', 'ancypriya23082000@gmail.com', 'ancy'),
(17, 'ancy', 'alex', 'ancypriya23082000@gmail.com', 'ancy'),
(18, 'ancy', 'alex', 'ancypriya23082000@gmail.com', 'ancy'),
(19, 'Gauthami', 'S Kamble', 'dbcyelagiri@gmail.com', '123456789'),
(20, 'vincy', 'vincy', 'vincy@gmail.com', 'vincy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
