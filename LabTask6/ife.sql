-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 03:36 PM
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
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `usertype` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `name`, `email`, `username`, `password`, `phone`, `address`, `usertype`, `gender`, `dob`, `image`) VALUES
(2, 'Munna Abdullah', 'cmxmunna@gmail.com', 'cmxmunna', 'qq', '01627124780', 'Purbachol New Town', 'Admin', 'Male', '06/25/1995', 'Munna.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `internetpack`
--

CREATE TABLE `internetpack` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `speed` varchar(10) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `conntype` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  `support` varchar(30) NOT NULL,
  `included` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `display` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internetpack`
--

INSERT INTO `internetpack` (`id`, `name`, `speed`, `usertype`, `conntype`, `time`, `support`, `included`, `image`, `price`, `display`) VALUES
(4, 'Basic', '10 Mbps', 'Home', 'Cat6 Cable', '24 Hour Unlimited', '24/7 Support', 'Free Router', '10mbps.png', '800 Tk', 'Yes'),
(5, 'Primary', '30 Mbps', 'Home', 'Fiber Optics', '24 Hour Unlimited', '24/7 Support', 'Real IP', '30mbps.PNG', '1500 TK', 'Yes'),
(6, 'Dominant', '100 Mbps', 'Home', 'Fiber Optics', '24 Hour Unlimited', '24/7 Support', 'Real IP, IP Telephone, 500 SMS', '100mbps.PNG', '3000 TK', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `usertype` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `username`, `password`, `phone`, `address`, `usertype`, `gender`, `dob`, `image`) VALUES
(1, 'Munna Abdullah', 'cmxmunna@gmail.com', 'cmxmunna', 'qq', '01627124780', 'Purbachol New Town', 'Admin', 'Male', '06/25/1995', '20210314_191124.jpg'),
(5, 'Mihir Islam', 'mihir@gmail.com', 'mihir', '12345', '016927124780', 'Dhanmonddi, Kaliganj', 'Student', 'Male', '06/25/1994', 'Mihir.jpg'),
(23, 'Zafrin Tabassum', 'zafrin@hotmail.com', 'zafrin', 'Zafrin@123', '01500000000', 'Pabna, Bangladesh', 'Home', 'Female', '1998-12-12', 'Zafrin.jpg'),
(24, 'Shihab Munna', 'cmxmunna@gmail.com', 'admin', 'admin', '017000000000', 'Dhaka, Bangladesh', 'Admin', 'Male', '1998-12-09', 'Abdullah.jpg'),
(26, 'Farhan Naeem Zitu', 'farhannaeemzitu@gmail.com', 'farhan', 'Farhan@123', '01798703826', '134-A, Amir Sarkar Road, Dholadia, Mymen', 'Admin', 'Male', '1998-12-15', 'Farhan.jpg'),
(27, 'HOSSAIN SHARON', 'rose@gmail.com', 'sadia', 'Sharon@123', '+8801600000000', 'H- 006, R- 309, Sec- 29, Purbachal New T', 'Student', 'Female', '1998-12-14', 'Sharon.jpg'),
(32, 'Kamrul Hasan', 'kamrul@gmail.com', 'Kamrul', 'Kamrul@111', '01800000000', '80 W 170th St, Apt A8', 'Corporate', 'Male', '1998-12-04', 'IMG_7170.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `internetpack`
--
ALTER TABLE `internetpack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
