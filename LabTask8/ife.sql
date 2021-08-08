-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 10:42 PM
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
(2, '3da8018eda33845263c799cde673b71b', 'Munna Abdullah', 'cmxmunna@gmail.com', 'cmxmunna', '$2y$12$QNlUgxLcJXvYf6FKaVDBZO9Yz5x85vYOrJZyOiyO6PiS.TV.xLhlu', '01627124780', 'Purbachol New Town,\r\nKaliganj, Gazipur,\r\nDhaka, Bangladesh', 'Admin', 'Male', '06/25/1995', '1628454499IMG_7170.jpg'),
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

--
-- Dumping data for table `internetpack`
--

INSERT INTO `internetpack` (`id`, `pack_id`, `name`, `speed`, `usertype`, `conntype`, `time`, `support`, `included`, `image`, `price`, `display`) VALUES
(4, '234234', 'Basic', '10 Mbps', 'Home', 'Cat6 Cable', '24 Hour Unlimited', '24/7 Support', 'Free Router', '10mbps.png', '800 Tk', 'Yes'),
(5, '235235', 'Primary', '30 Mbps', 'Home', 'Fiber Optics', '24 Hour Unlimited', '24/7 Support', 'Real IP', '30mbps.PNG', '1500 TK', 'Yes'),
(6, '634534', 'Dominant', '100 Mbps', 'Home', 'Fiber Optics', '24 Hour Unlimited', '24/7 Support', 'Real IP, IP Telephone, 500 SMS', '100mbps.PNG', '3000 TK', 'No');

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

--
-- Dumping data for table `modinfo`
--

INSERT INTO `modinfo` (`id`, `user_id`, `name`, `email`, `username`, `password`, `phone`, `address`, `usertype`, `gender`, `dob`, `image`) VALUES
(1, '123123123', 'Munna Abdullah', 'cmxmunna@gmail.com', 'munna', '123', '01627124780', 'Purbachol New Town, Kaliganj , Gazipur', 'Admin', 'Male', '06/25/1995', '1627951951Abdullah.jpg'),
(2, '012312312', 'Mihir Islam', 'mihir@gmail.com', 'mihir', '123', '016927124780', 'Dhanmonddi, Kaliganj', 'Student', 'Male', '06/25/1994', 'Mihir.jpg'),
(3, '543534', 'Zafrin Tabassum', 'zafrin@hotmail.com', 'zafrin', 'Zafrin@123', '01500000000', 'Pabna, Bangladesh', 'Home', 'Female', '1998-12-12', 'Zafrin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `subscriber_name` varchar(100) NOT NULL,
  `internet_pack_name` varchar(100) NOT NULL,
  `subscription_month` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `transaction_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `user_id`, `name`, `email`, `username`, `password`, `phone`, `address`, `usertype`, `gender`, `dob`, `image`) VALUES
(5, '0235235', 'Mihir Islam', 'mihir@gmail.com', 'mihir', '$2y$12$CDayPfeqhNhJj5HFcchdkek3GErQBHU6r7Twr4zw6LG4iHlq3fgnK', '016927124780', 'Dhanmonddi, Dhaka 1200.', 'Home', 'Male', '06/25/1994', '1628454203Mihir.jpg'),
(23, '013131', 'Zafrin Tabassum', 'zafrin@hotmail.com', 'zafrin', 'Zafrin@123', '01500000000', 'Pabna, Bangladesh', 'Home', 'Female', '1998-12-12', '1628454227Zafrin.jpg'),
(26, '0424', 'Farhan Naeem Zitu', 'farhannaeemzitu@gmail.com', 'farhan', 'Farhan@123', '01798703826', '134-A, Amir Sarkar Road, Dholadia, Mymen', 'IPTelephony', 'Male', '1998-12-15', '1628454237Farhan.jpg'),
(32, '023', 'Kamrul Hasan', 'kamrul@gmail.com', 'Kamrul', 'Kamrul@111', '01800000000', '80 W 170th St, Apt A8', 'Corporate', 'Male', '1998-12-04', '1628454253IMG20210722195832.jpg'),
(35, 'fe2c3b0a43ad6189cc19d70da2da6828', 'Abdullah Ebnul', 'cmxmunna@gmail.com', 'ebnul', '$2y$12$silRBreblt6.7P/UfsSCCu25Q2oSkkMvJCQuzCHh3vEfpB8Ix0Yey', '01627124780', 'Golan, Ulokhola, Kaliganj, Gazipur', 'Corporate', 'Male', '1998-12-16', '1627773165Mihir.jpg'),
(36, '38e99284c6bc279bf5f6bcdba4d72470', 'Anik Touhidul', 'cmxmunna@gmail.com', 'anik', '$2y$12$c1FJA8fbQkhQG4XPwDk..uMb6H2yGBhPO1L/RhoKykb1UqtNw9ygu', '01627124780', 'Golan, Ulokhola, Kaliganj, Gazipur', 'Home', 'Male', '1998-12-22', '1627773539Abdullah.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `modinfo`
--
ALTER TABLE `modinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
