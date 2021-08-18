-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 10:10 AM
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
(2, '3da8018eda33845263c799cde673b71b', 'Munna Abdullah', 'cmxmunna@gmail.com', 'cmxmunna', '$2y$12$VWPy9/NQO2FX.2PnNs2VgeHHrNDv4eZVPoC37O59SY3LJ8qLZj3sC', '01600000000', 'Purbachol New Town,\r\nKaliganj, Gazipur,\r\nDhaka, Bangladesh', 'Admin', 'Male', '06/25/1995', '1629170560Abdullah.jpg'),
(26, 'd3ff451e38187f4252817d1da1c54668', 'Farhan Naeem Zitu', 'farhannaeemxitu@gmail.com', 'farhan', '$2y$12$12Xw1tbh8iftcdmoGZrctebVvri1Xk3W9XXS.89d.Lrc7gsmL7cEO', '01798703826', '134-A, Amir Sarkar Road, Dholadia,\r\nMymensing Sadar', 'Admin', 'Male', '1998-12-02', '1629183975Farhan.jpg');

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
(11, 'b00a9bcae4782bfb0799d3f21e4606c0', 'Home Basic', '20 Mbps', 'Home', 'Cat6 Cable', '24 Hour Unlimited', '24/7 Support', '100 Mbps YouTube', '162918194420.png', '850', 'Yes'),
(12, '789a0df56fbdbbaf7a149860f4dff89f', 'Gaming Master', '40 Mbps', 'Home', 'Fiber Optics', '24 Hour Unlimited', '24/7 Support', 'Real IP', '162918207940.png', '1000', 'Yes'),
(13, '72c129d303d46a64b268a91ef783a20a', 'Office Starter Package', '80 Mbps', 'Corporate', 'Fiber Optics', 'Day Time Only', 'Office Time Support', 'Real IP, IP Telephone', '162918232180.png', '7000', 'Yes'),
(14, 'cd2e5872bdd102fd44580a6df837c2b1', 'Super Duper Gaming', '50 Mbps', 'Home', 'Fiber Optics', '24 Hour Unlimited', '24/7 Support', 'Real IP', '162918294450.png', '2000', 'Yes'),
(15, 'e6e4c2c3df4647be231aa6c4466e584c', 'Hosting Server', '1 Gbps', 'Host&Develope', 'Fiber Optics', '24 Hour Unlimited', '24/7 Support', 'Real IP, IP Telephone', '1629183052100.png', '50000', 'Yes'),
(16, '5a360458c2560d014aac34566fe9b0ed', 'Facebook', '20 Mbps', 'Home', 'Cat6 Cable', '24 Hour Unlimited', 'N/A', 'N/A', '162918310420.png', '500', 'Yes'),
(17, '7865595543669861a7cf3350d515ffac', '4K YouTube', '40 Mbps', 'Home', 'Cat6 Cable', '24 Hour Unlimited', 'N/A', 'N/A', '162918316540.png', '700', 'Yes'),
(18, 'c22252746d0e0808794d2dc19a09e583', 'Streamer Package ', '90 Mbps', 'Home', 'Fiber Optics', '24 Hour Unlimited', '24/7 Support', 'Real IP', '162918325690.png', '10000', 'Yes'),
(19, 'cdffc315861319eb92fac9a57d3db299', 'PUBG Pro', '40 Mbps', 'Home', 'Fiber Optics', '24 Hour Unlimited', '24/7 Support', 'Real IP', '162918332640.png', '2500', 'Yes'),
(20, '29ef5c9ce5dbc4fd4aa374e583316925', 'Student Package', '20 Mbps', 'Student', 'Cat6 Cable', '24 Hour Unlimited', '24/7 Support', 'N/A', '162918338820.png', '200', 'Yes'),
(21, 'f62b0567317fb84957d3f1b4f89a7d3f', 'Student Pro', '40 Mbps', 'Student', 'Cat6 Cable', '24 Hour Unlimited', '24/7 Support', 'N/A', '162918342840.png', '450', 'Yes'),
(22, '345cff555464d6dd7c5d2057e90018d1', 'Wifi Everywhere', '40 Mbps', 'Wireless', 'Wireless', '24 Hour Unlimited', 'N/A', 'N/A', '162918353140.png', '400', 'Yes'),
(23, '2fc2cf2862f9a90f3f11a9ddd3ccd9f0', 'Mobile Wifi', '20 Mbps', 'Wireless', 'Wireless', '24 Hour Unlimited', 'N/A', 'N/A', '162918358520.png', '500', 'Yes'),
(24, 'ab0a6214b250fbabc008b49837460f36', 'Wireless Hotspot', '80 Mbps', 'Wireless', 'Wireless', '24 Hour Unlimited', 'N/A', 'N/A', '162918364380.png', '1200', 'Yes'),
(25, '6adde1437e508d973b5183cb1b3ad47f', 'Online Class', '50 Mbps', 'Student', 'Cat6 Cable', 'Day Time Only', 'Office Time Support', 'N/A', '162918372950.png', '1500', 'Yes'),
(26, '281a49279702d168a459ab816bdc7698', 'Home Quarantine ', '50 Mbps', 'Home', 'Cat6 Cable', '24 Hour Unlimited', 'N/A', 'N/A', '162918378950.png', '2000', 'Yes'),
(27, 'e552e23fb1942beb949dc35a0f3aef31', 'Home Gold Package', '60 Mbps', 'Home', 'Fiber Optics', '24 Hour Unlimited', '24/7 Support', 'N/A', '162918384060.png', '2500', 'Yes');

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
(6, '387317e2e6f0776d57234391459eb4f7', 'KAMRUL HASAN', 'kamrul@gmail.com', 'kamrul', '$2y$12$M.pAq3K7bqbHiA9s.hvtbOpDhINQdNTKH55vg9kJ5sZo1P2bbpufO', '0160000000000', 'Sherpur, Bogula', 'Moderator', 'Male', '1998-12-22', '1629222388100.png');

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
(97, 'Sultana', 'd2b956a3c3f17a75321288c3247bcaa7', 'Home', '789a0df56fbdbbaf7a149860f4dff89f', 'Gaming Master', 'Aug 2021', '1000 TK', 'BKASH', '11', 'BKASH58691613844600', 'Requsted for Cancel Subscription', '17/08/21 09:06'),
(98, 'Sultana', 'd2b956a3c3f17a75321288c3247bcaa7', 'Home', '789a0df56fbdbbaf7a149860f4dff89f', 'Gaming Master', 'Aug 2021', '1000 TK', 'BKASH', '0167978789', 'BKASH58691615465725', 'Success', '17/08/21 09:07'),
(99, 'Zafrin Tabassum', '18395c57201cce5951a9293813410622', 'Home', 'e552e23fb1942beb949dc35a0f3aef31', 'Home Gold Package', 'Aug 2021', '2500 TK', 'BKASH', '01728173849', 'BKASH58692426532575', 'Success', '17/08/21 03:22'),
(100, 'Mihir Islam', 'dc0a2f5f9910d1256dc595329f4d513e', 'Home', '789a0df56fbdbbaf7a149860f4dff89f', 'Gaming Master', 'Aug 2021', '1000 TK', 'BKASH', '01627124780', 'BKASH58694571893375', 'Activation Locked', '18/08/21 09:55'),
(101, 'Mihir Islam', 'dc0a2f5f9910d1256dc595329f4d513e', 'Home', 'c22252746d0e0808794d2dc19a09e583', 'Streamer Package ', 'Aug 2021', '10000 TK', 'NAGAD', '01627124780', 'NAGAD58694572397725', 'Success', '18/08/21 09:55'),
(102, 'Mihir Islam', 'dc0a2f5f9910d1256dc595329f4d513e', 'Home', 'e552e23fb1942beb949dc35a0f3aef31', 'Home Gold Package', 'Aug 2021', '2500 TK', 'ROCKET', '01627124780', 'ROCKET58694573010150', 'Success', '18/08/21 09:55'),
(103, 'Mihir Islam', 'dc0a2f5f9910d1256dc595329f4d513e', 'Home', 'cdffc315861319eb92fac9a57d3db299', 'PUBG Pro', 'Aug 2021', '2500 TK', 'BKASH', '01700000000', 'BKASH58694574343075', 'Success', '18/08/21 09:56'),
(104, 'Shinnosuke Nohara', 'aaf03e4102597fd6d161708c8b4127b4', 'Student', 'f62b0567317fb84957d3f1b4f89a7d3f', 'Student Pro', 'Aug 2021', '450 TK', 'ROCKET', '01627124780', 'ROCKET58694575351775', 'Success', '18/08/21 09:57'),
(105, 'Shinnosuke Nohara', 'aaf03e4102597fd6d161708c8b4127b4', 'Student', '6adde1437e508d973b5183cb1b3ad47f', 'Online Class', 'Aug 2021', '1500 TK', 'BKASH', '01600000000', 'BKASH58694575964200', 'Success', '18/08/21 09:57'),
(106, 'Shinnosuke Nohara', 'aaf03e4102597fd6d161708c8b4127b4', 'Student', '29ef5c9ce5dbc4fd4aa374e583316925', 'Student Package', 'Aug 2021', '200 TK', 'NAGAD', '01700000000', 'NAGAD58694576540600', 'Success', '18/08/21 09:57'),
(107, 'Naruto 1', '19e26c94eaddc37c8fa14c5f540a7021', 'Corporate', '72c129d303d46a64b268a91ef783a20a', 'Office Starter Package', 'Aug 2021', '7000 TK', 'NAGAD', '018000000000', 'NAGAD58694577657375', 'Success', '18/08/21 09:58'),
(108, 'Naruto 1', '19e26c94eaddc37c8fa14c5f540a7021', 'Corporate', '72c129d303d46a64b268a91ef783a20a', 'Office Starter Package', 'Aug 2021', '7000 TK', 'BKASH', '01627124780', 'BKASH58694577981600', 'Success', '18/08/21 09:58'),
(109, 'Abdullah Ebnul', '6eb6aab481cb928c95bf68f7b8414622', 'Student', '6adde1437e508d973b5183cb1b3ad47f', 'Online Class', 'Aug 2021', '1500 TK', 'NAGAD', '019000000000000', 'NAGAD58694579206450', 'Success', '18/08/21 09:58');

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
(43, '18395c57201cce5951a9293813410622', 'Zafrin Tabassum', 'zafrin.tabassum181@gmail.com', 'zafrin', '$2y$12$xiRJ9kCaBUvxa3FoHtC64uGaPKt3Kx1H39fty7Ad8mkIZV4CUvKp6', '01627000000', 'Pabna, Bangladesh', 'Home', 'Female', '1998-12-29', '1629272044beautiful_girl_cartoon_character_design_by_longdigital_dbnzhza-pre.jpg'),
(44, 'd2b956a3c3f17a75321288c3247bcaa7', 'Sultana', 'liana@gmail.com', 'liana', '$2y$12$DngEhGEL6fVbCAgvKA7m3e0YB88H1CL1UQxgupShHDAUIFNQhElNW', '016271247800', 'Banani', 'Home', 'Female', '1998-12-23', '1629272062aaaa.jpg'),
(45, 'dc0a2f5f9910d1256dc595329f4d513e', 'Mihir Islam', 'mihir@gmail.com', 'mihir', '$2y$12$FlIlGJCotP.za/WsTNZq8uYEogzzn8bjuoBHhdvJPWyIbSJpbIVJ6', '017000000000', 'Dhanmonddi , Dhaka', 'Home', 'Male', '1998-12-16', '1629272134download (1).jpg'),
(46, 'aaf03e4102597fd6d161708c8b4127b4', 'Shinnosuke Nohara', 'shinnosuke@gmail.com', 'shinnosuke', '$2y$12$kERKfDCDpbXLpWNIWQqEYex0hbxiCDD/LI/VQftHVwI5y13Mvw2f6', '017000000000', 'Dhaka', 'Student', 'Male', '1998-12-30', '1629272274490-49041an-hd.png'),
(47, '19e26c94eaddc37c8fa14c5f540a7021', 'Naruto 1', 'naruto@gmail.com', 'naruto1', '$2y$12$PazGTXc5xvLFjH48R7VCTeiblsrHGf9qbCIDt5LS9l2rpOLdmoMee', '01627124780', 'Gazipur', 'Corporate', 'Male', '1998-12-07', '1629273167tenor.png'),
(48, '6eb6aab481cb928c95bf68f7b8414622', 'Abdullah Ebnul', 'ebnul@gmail.com', 'ebnul', '$2y$12$NUE70leG/h4ECfocpPNKs.VjsFBe/4W3hkr.BQjwqCSl7l4/rlXtm', '017000000000', 'Dhaka', 'Student', 'Male', '1998-11-30', '1629273222invite-to-download-o1rx41.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `modinfo`
--
ALTER TABLE `modinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
