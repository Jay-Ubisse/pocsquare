-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 09:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pocsquare`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrative_entities`
--

CREATE TABLE `administrative_entities` (
  `entity_id` int(11) NOT NULL,
  `province` varchar(20) NOT NULL,
  `province_numeric_id` int(2) NOT NULL,
  `district` varchar(40) NOT NULL,
  `district_numeric_id` int(3) NOT NULL,
  `administrative_post` varchar(40) NOT NULL,
  `admin_post_id` int(3) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `locality_id` int(3) NOT NULL,
  `neighborhood` varchar(50) NOT NULL,
  `neighborhood_id` int(3) NOT NULL,
  `provice_alphabetical_id` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `heritage_entities`
--

CREATE TABLE `heritage_entities` (
  `entity_id` int(11) NOT NULL,
  `property_type` varchar(10) NOT NULL,
  `floor` varchar(20) NOT NULL,
  `side` varchar(10) NOT NULL,
  `door_number` int(6) NOT NULL,
  `track_number` int(6) NOT NULL,
  `track_type` varchar(10) NOT NULL,
  `stalemate` varchar(20) NOT NULL,
  `viaduct` varchar(30) NOT NULL,
  `roundabout` varchar(20) NOT NULL,
  `crossings` varchar(30) NOT NULL,
  `bridges` varchar(30) NOT NULL,
  `squares` varchar(30) NOT NULL,
  `length` double NOT NULL,
  `width` double NOT NULL,
  `occupancy` varchar(20) NOT NULL,
  `affectation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `local_entities`
--

CREATE TABLE `local_entities` (
  `entity_id` int(11) NOT NULL,
  `cell` varchar(50) NOT NULL,
  `cell_id` int(3) NOT NULL,
  `circle` varchar(50) NOT NULL,
  `circle_id` int(3) NOT NULL,
  `village` varchar(50) NOT NULL,
  `village_id` int(3) NOT NULL,
  `township` varchar(50) NOT NULL,
  `township_id` int(11) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `zone_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrative_entities`
--
ALTER TABLE `administrative_entities`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `local_entities`
--
ALTER TABLE `local_entities`
  ADD KEY `entity_relashionship` (`entity_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrative_entities`
--
ALTER TABLE `administrative_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `local_entities`
--
ALTER TABLE `local_entities`
  ADD CONSTRAINT `entity_relashionship` FOREIGN KEY (`entity_id`) REFERENCES `administrative_entities` (`entity_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
