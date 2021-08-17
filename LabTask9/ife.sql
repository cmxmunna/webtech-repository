-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 03:13 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ife`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `usertype` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `user_id`, `name`, `email`, `username`, `password`, `phone`, `address`, `usertype`, `gender`, `dob`, `image`) VALUES
(2, '3da8018eda33845263c799cde673b71b', 'Munna Abdullah', 'cmxmunna@gmail.com', 'cmxmunna', '$2y$12$xAar1orxM/TFdfhEBk1A3eUkcGwzV24k6dfNN1h1Px17vSHwgurBq', '01600000000', 'Purbachol New Town,\r\nKaliganj, Gazipur,\r\nDhaka, Bangladesh', 'Admin', 'Male', '06/25/1995', '1628547110Abdullah.jpg'),
(26, 'd3ff451e38187f4252817d1da1c54668', 'Farhan Naeem Zitu', 'farhannaeemxitu@gmail.com', 'farhan', '$2y$12$ZHdMdyTAawI.PmLDZ5pAP.GPZGH3F3DYVGgZ96orR3fZAx1CD5o6S', '01798703826', '134-A, Amir Sarkar Road, Dholadia,\r\nMymensing Sadar', 'Admin', 'Male', '1998-12-02', '1628454515Farhan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `internetpack`
--

CREATE TABLE `internetpack` (
  `id` int(11) NOT NULL,
  `pack_id` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `speed` varchar(10) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `conntype` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  `support` varchar(30) NOT NULL,
  `included` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `display` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `modinfo`
--

CREATE TABLE `modinfo` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `usertype` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `subscriber_name` varchar(100) NOT NULL,
  `subscriber_id` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `subscription_pack_id` varchar(100) NOT NULL,
  `subscription_pack_name` varchar(100) NOT NULL,
  `subscription_month` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `transaction_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `subscriber_name`, `subscriber_id`, `usertype`, `subscription_pack_id`, `subscription_pack_name`, `subscription_month`, `amount`, `payment_method`, `phone_number`, `transaction_id`, `status`, `transaction_time`) VALUES
(95, 'Mihir Islam', '0235235', 'Home', '234234', 'Basic', 'Aug 2021', '800 TK', 'BKASH', '01627124780', 'BKASH58689531923825', 'Activation Expired', '16/08/21 07:03'),
(96, 'Mihir Islam', '0235235', 'Home', '70ba9a3e23815cbfe1dfd79d4e203ba4', 'Super Duper Gaming', 'Aug 2021', '2000 TK', 'BKASH', '01627124780', 'BKASH58689714210325', 'Success', '16/08/21 08:27');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `usertype` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internetpack`
--
ALTER TABLE `internetpack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modinfo`
--
ALTER TABLE `modinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `internetpack`
--
ALTER TABLE `internetpack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `modinfo`
--
ALTER TABLE `modinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
