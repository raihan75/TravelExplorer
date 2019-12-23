-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 06:08 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `address` text,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disctrict`
--

CREATE TABLE `disctrict` (
  `id` int(11) NOT NULL,
  `dist_name` varchar(50) NOT NULL,
  `div_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `div_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `heritage`
--

CREATE TABLE `heritage` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `div_id` int(11) DEFAULT NULL,
  `dist_id` int(11) DEFAULT NULL,
  `address` text,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `special_package` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `from_dist` varchar(50) DEFAULT NULL,
  `to_heritage` varchar(200) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `dept_loc` varchar(200) DEFAULT NULL,
  `description` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `heritage_name` varchar(200) DEFAULT NULL,
  `ratings` int(11) DEFAULT NULL,
  `comments` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `special_package`
--

CREATE TABLE `special_package` (
  `id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `package_type` varchar(100) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `max_member` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `disctrict`
--
ALTER TABLE `disctrict`
  ADD PRIMARY KEY (`dist_name`),
  ADD KEY `div_id` (`div_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`div_name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `heritage`
--
ALTER TABLE `heritage`
  ADD PRIMARY KEY (`name`),
  ADD KEY `dist_id` (`dist_id`),
  ADD KEY `div_id` (`div_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `special_package` (`special_package`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_dist` (`from_dist`),
  ADD KEY `to_heritage` (`to_heritage`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `heritage_name` (`heritage_name`);

--
-- Indexes for table `special_package`
--
ALTER TABLE `special_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disctrict`
--
ALTER TABLE `disctrict`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `heritage`
--
ALTER TABLE `heritage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `special_package`
--
ALTER TABLE `special_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `disctrict`
--
ALTER TABLE `disctrict`
  ADD CONSTRAINT `disctrict_ibfk_1` FOREIGN KEY (`div_id`) REFERENCES `division` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `heritage`
--
ALTER TABLE `heritage`
  ADD CONSTRAINT `heritage_ibfk_1` FOREIGN KEY (`dist_id`) REFERENCES `disctrict` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `heritage_ibfk_2` FOREIGN KEY (`div_id`) REFERENCES `division` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`email`) REFERENCES `client` (`email`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `package` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`special_package`) REFERENCES `special_package` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`from_dist`) REFERENCES `disctrict` (`dist_name`) ON DELETE SET NULL,
  ADD CONSTRAINT `package_ibfk_2` FOREIGN KEY (`to_heritage`) REFERENCES `heritage` (`name`) ON DELETE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`email`) REFERENCES `client` (`email`) ON DELETE SET NULL,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`heritage_name`) REFERENCES `heritage` (`name`) ON DELETE CASCADE;

--
-- Constraints for table `special_package`
--
ALTER TABLE `special_package`
  ADD CONSTRAINT `special_package_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `package` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
