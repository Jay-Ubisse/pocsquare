-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 12:31 PM
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
-- Database: `jayubiss_pocsquareocs`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrative_entities`
--

CREATE TABLE `administrative_entities` (
  `entity_id` int(11) NOT NULL,
  `province` varchar(20) NOT NULL,
  `province_numeric_id` varchar(2) NOT NULL,
  `district` varchar(40) NOT NULL,
  `district_id` varchar(3) NOT NULL,
  `administrative_post` varchar(40) NOT NULL,
  `admin_post_id` varchar(3) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `locality_id` varchar(3) NOT NULL,
  `neighborhood` varchar(50) NOT NULL,
  `neighborhood_id` varchar(3) NOT NULL,
  `province_alphabetical_id` varchar(2) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrative_entities`
--

INSERT INTO `administrative_entities` (`entity_id`, `province`, `province_numeric_id`, `district`, `district_id`, `administrative_post`, `admin_post_id`, `locality`, `locality_id`, `neighborhood`, `neighborhood_id`, `province_alphabetical_id`, `code`) VALUES
(10000007, 'Maputo Província', '01', 'Boane', '001', 'Maputo Província posto 1', '001', 'Maputo Província Localidade 1', '001', 'Maputo Província Bairro 1', '001', 'MP', 'MP001 001'),
(10000008, 'Gaza', '02', 'Chibuto', '003', 'Gaza posto 1', '003', 'Gaza Localidade 1', '003', 'Gaza Bairro 1', '003', 'GZ', 'GZ003 003'),
(10000009, 'Inhambane', '03', 'Funhalouro', '005', 'Inhambane posto 1', '005', 'Inhambane Localidade 1', '005', 'Inhambane Bairro 1', '005', 'IN', 'IN005 005'),
(10000010, 'Maputo Província', '01', 'Boane', '001', 'Maputo Província posto 1', '001', 'Maputo Província Localidade 1', '001', 'Maputo Província Bairro 1', '001', 'MP', 'MP001 001'),
(10000011, 'Gaza', '02', 'Bilene', '004', 'Gaza posto 2', '004', 'Gaza Localidade 1', '003', 'Gaza Bairro 1', '003', 'GZ', 'GZ004 003'),
(10000012, 'Gaza', '02', 'Bilene', '004', 'Gaza posto 2', '004', 'Gaza Localidade 2', '004', 'Gaza Bairro 1', '003', 'GZ', 'GZ004 003');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(50) NOT NULL,
  `password` varchar(270) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('ubisse', 'f9069bbef34fd6d4e082c4e110a6a252');

-- --------------------------------------------------------

--
-- Table structure for table `cd_admin_post`
--

CREATE TABLE `cd_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cd_district`
--

CREATE TABLE `cd_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cd_locality`
--

CREATE TABLE `cd_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gz_admin_post`
--

CREATE TABLE `gz_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gz_admin_post`
--

INSERT INTO `gz_admin_post` (`admin_post_id`, `province`, `admin_post_name`) VALUES
(11, 'Gaza', 'GZ Posto 1');

-- --------------------------------------------------------

--
-- Table structure for table `gz_district`
--

CREATE TABLE `gz_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gz_district`
--

INSERT INTO `gz_district` (`district_id`, `province`, `district_name`) VALUES
(2, 'Gaza', 'GZ Distrito 1');

-- --------------------------------------------------------

--
-- Table structure for table `gz_locality`
--

CREATE TABLE `gz_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gz_locality`
--

INSERT INTO `gz_locality` (`locality_id`, `province`, `locality_name`) VALUES
(101, 'Gaza', 'GZ Localidade 1');

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
-- Table structure for table `in_admin_post`
--

CREATE TABLE `in_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `in_district`
--

CREATE TABLE `in_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `in_locality`
--

CREATE TABLE `in_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `local_entities`
--

CREATE TABLE `local_entities` (
  `entity_id` int(11) NOT NULL,
  `cell` varchar(50) NOT NULL,
  `cell_id` varchar(3) NOT NULL,
  `circle` varchar(50) NOT NULL,
  `circle_id` varchar(3) NOT NULL,
  `village` varchar(50) NOT NULL,
  `village_id` varchar(3) NOT NULL,
  `township` varchar(50) NOT NULL,
  `township_id` varchar(3) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `zone_id` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `local_entities`
--

INSERT INTO `local_entities` (`entity_id`, `cell`, `cell_id`, `circle`, `circle_id`, `village`, `village_id`, `township`, `township_id`, `zone`, `zone_id`) VALUES
(10000007, 'Maputo Província Célula 1', '001', 'Maputo Província Circulo 1', '001', 'Maputo Província Vila 1', '001', 'Maputo Província Povoação 1', '001', 'Maputo Província Zona 1', '001'),
(10000008, 'Gaza Célula 1', '003', 'Gaza Circulo 1', '003', 'Gaza Vila 1', '003', 'Gaza Povoação 1', '003', 'Gaza Zona 1', '003'),
(10000009, 'Inhambane Célula 1', '005', 'Inhambane Circulo 1', '005', 'Inhambane Vila 1', '005', 'Inhambane Povoação 1', '005', 'Inhambane Zona 1', '005'),
(10000010, 'Maputo Província Célula 1', '001', 'Maputo Província Circulo 1', '001', 'Maputo Província Vila 1', '001', 'Maputo Província Povoação 1', '001', 'Maputo Província Zona 1', '001'),
(10000011, 'Gaza Célula 1', '003', 'Gaza Circulo 1', '003', 'Gaza Vila 2', '004', 'Gaza Povoação 1', '003', 'Gaza Zona 1', '003'),
(10000012, 'Gaza Célula 1', '003', 'Gaza Circulo 1', '003', 'Gaza Vila 2', '004', 'Gaza Povoação 1', '003', 'Gaza Zona 1', '003');

-- --------------------------------------------------------

--
-- Table structure for table `mc_admin_post`
--

CREATE TABLE `mc_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_admin_post`
--

INSERT INTO `mc_admin_post` (`admin_post_id`, `province`, `admin_post_name`) VALUES
(13, 'Maputo Cidade', 'MC Posto 1');

-- --------------------------------------------------------

--
-- Table structure for table `mc_district`
--

CREATE TABLE `mc_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_district`
--

INSERT INTO `mc_district` (`district_id`, `province`, `district_name`) VALUES
(12, 'Maputo Cidade', 'MC Distrito 1');

-- --------------------------------------------------------

--
-- Table structure for table `mc_locality`
--

CREATE TABLE `mc_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mn_admin_post`
--

CREATE TABLE `mn_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mn_district`
--

CREATE TABLE `mn_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mn_locality`
--

CREATE TABLE `mn_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mp_admin_post`
--

CREATE TABLE `mp_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mp_district`
--

CREATE TABLE `mp_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mp_locality`
--

CREATE TABLE `mp_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mp_locality`
--

INSERT INTO `mp_locality` (`locality_id`, `province`, `locality_name`) VALUES
(101, 'Maputo Província', 'MP Localidade 1');

-- --------------------------------------------------------

--
-- Table structure for table `np_admin_post`
--

CREATE TABLE `np_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `np_district`
--

CREATE TABLE `np_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `np_locality`
--

CREATE TABLE `np_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ns_admin_post`
--

CREATE TABLE `ns_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ns_district`
--

CREATE TABLE `ns_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ns_locality`
--

CREATE TABLE `ns_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sf_admin_post`
--

CREATE TABLE `sf_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sf_district`
--

CREATE TABLE `sf_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sf_locality`
--

CREATE TABLE `sf_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `username` varchar(50) NOT NULL,
  `password` varchar(270) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`username`, `password`) VALUES
('supervisor', 'f9069bbef34fd6d4e082c4e110a6a252');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `username` varchar(50) NOT NULL,
  `password` varchar(270) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`username`, `password`) VALUES
('tecnico', 'f9069bbef34fd6d4e082c4e110a6a252');

-- --------------------------------------------------------

--
-- Table structure for table `tt_admin_post`
--

CREATE TABLE `tt_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tt_district`
--

CREATE TABLE `tt_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tt_locality`
--

CREATE TABLE `tt_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `zb_admin_post`
--

CREATE TABLE `zb_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `zb_district`
--

CREATE TABLE `zb_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `zb_locality`
--

CREATE TABLE `zb_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
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
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cd_admin_post`
--
ALTER TABLE `cd_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `cd_district`
--
ALTER TABLE `cd_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `cd_locality`
--
ALTER TABLE `cd_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `gz_admin_post`
--
ALTER TABLE `gz_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `gz_district`
--
ALTER TABLE `gz_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `gz_locality`
--
ALTER TABLE `gz_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `in_admin_post`
--
ALTER TABLE `in_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `in_district`
--
ALTER TABLE `in_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `in_locality`
--
ALTER TABLE `in_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `local_entities`
--
ALTER TABLE `local_entities`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `mc_admin_post`
--
ALTER TABLE `mc_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `mc_district`
--
ALTER TABLE `mc_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `mc_locality`
--
ALTER TABLE `mc_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `mn_admin_post`
--
ALTER TABLE `mn_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `mn_district`
--
ALTER TABLE `mn_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `mn_locality`
--
ALTER TABLE `mn_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `mp_admin_post`
--
ALTER TABLE `mp_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `mp_district`
--
ALTER TABLE `mp_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `mp_locality`
--
ALTER TABLE `mp_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `np_admin_post`
--
ALTER TABLE `np_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `np_district`
--
ALTER TABLE `np_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `np_locality`
--
ALTER TABLE `np_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `ns_admin_post`
--
ALTER TABLE `ns_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `ns_district`
--
ALTER TABLE `ns_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `ns_locality`
--
ALTER TABLE `ns_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `sf_admin_post`
--
ALTER TABLE `sf_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `sf_district`
--
ALTER TABLE `sf_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `sf_locality`
--
ALTER TABLE `sf_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tt_admin_post`
--
ALTER TABLE `tt_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `tt_district`
--
ALTER TABLE `tt_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tt_locality`
--
ALTER TABLE `tt_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `zb_admin_post`
--
ALTER TABLE `zb_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `zb_district`
--
ALTER TABLE `zb_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `zb_locality`
--
ALTER TABLE `zb_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrative_entities`
--
ALTER TABLE `administrative_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000013;

--
-- AUTO_INCREMENT for table `cd_admin_post`
--
ALTER TABLE `cd_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cd_district`
--
ALTER TABLE `cd_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cd_locality`
--
ALTER TABLE `cd_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `gz_admin_post`
--
ALTER TABLE `gz_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gz_district`
--
ALTER TABLE `gz_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gz_locality`
--
ALTER TABLE `gz_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `in_admin_post`
--
ALTER TABLE `in_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `in_district`
--
ALTER TABLE `in_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `in_locality`
--
ALTER TABLE `in_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `local_entities`
--
ALTER TABLE `local_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000013;

--
-- AUTO_INCREMENT for table `mc_admin_post`
--
ALTER TABLE `mc_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mc_district`
--
ALTER TABLE `mc_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mc_locality`
--
ALTER TABLE `mc_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `mn_admin_post`
--
ALTER TABLE `mn_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mn_district`
--
ALTER TABLE `mn_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mn_locality`
--
ALTER TABLE `mn_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mp_admin_post`
--
ALTER TABLE `mp_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mp_locality`
--
ALTER TABLE `mp_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `np_admin_post`
--
ALTER TABLE `np_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `np_district`
--
ALTER TABLE `np_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `np_locality`
--
ALTER TABLE `np_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `ns_admin_post`
--
ALTER TABLE `ns_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ns_district`
--
ALTER TABLE `ns_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ns_locality`
--
ALTER TABLE `ns_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `sf_admin_post`
--
ALTER TABLE `sf_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sf_district`
--
ALTER TABLE `sf_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sf_locality`
--
ALTER TABLE `sf_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tt_admin_post`
--
ALTER TABLE `tt_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tt_district`
--
ALTER TABLE `tt_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tt_locality`
--
ALTER TABLE `tt_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `zb_admin_post`
--
ALTER TABLE `zb_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `zb_district`
--
ALTER TABLE `zb_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `zb_locality`
--
ALTER TABLE `zb_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
