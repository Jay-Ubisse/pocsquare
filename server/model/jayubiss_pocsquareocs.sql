-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 07:53 PM
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
-- Table structure for table `administrative_posts`
--

CREATE TABLE `administrative_posts` (
  `administrative_post_id` int(11) NOT NULL,
  `province` varchar(20) NOT NULL,
  `administrative_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrative_posts`
--

INSERT INTO `administrative_posts` (`administrative_post_id`, `province`, `administrative_post`) VALUES
(10, 'Cabo Delgado', 'Ancuabe'),
(11, 'Maputo Cidade', 'Distrito Urbano de KaMpfumo'),
(12, 'Gaza', 'Pafuri'),
(13, 'Maputo Cidade', 'posto 10');

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
-- Table structure for table `cd_locality`
--

CREATE TABLE `cd_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cd_locality`
--

INSERT INTO `cd_locality` (`locality_id`, `province`, `locality_name`) VALUES
(100, 'Cabo Delgado', 'uuu');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `district_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `province`, `district_name`) VALUES
(13, 'Maputo Província', 'Boane'),
(16, 'Gaza', 'Bilene'),
(17, 'Gaza', 'Chibuto'),
(18, 'Maputo Província', 'Namaancha'),
(19, 'Maputo Cidade', 'KaMaxakene'),
(20, 'Maputo Cidade', 'KaMubukwana'),
(21, 'Inhambane', 'Funhalouro'),
(22, 'Manica', 'Gondola'),
(23, 'Sofala', 'Caia'),
(24, 'Tete', 'Changara'),
(25, 'Nampula', 'Angoche'),
(26, 'Zambézia', 'Derre'),
(27, 'Cabo Delgado', 'Balama');

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
(100, 'Gaza', 'rrr');

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
-- Table structure for table `in_locality`
--

CREATE TABLE `in_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `in_locality`
--

INSERT INTO `in_locality` (`locality_id`, `province`, `locality_name`) VALUES
(100, 'Inhambane', '0'),
(101, 'Inhambane', '0'),
(102, 'Inhambane', 'kkk');

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
-- Table structure for table `mc_locality`
--

CREATE TABLE `mc_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_locality`
--

INSERT INTO `mc_locality` (`locality_id`, `province`, `locality_name`) VALUES
(100, 'Maputo Cidade', 'localidade 001'),
(101, 'Maputo Cidade', 'localidade 002'),
(102, 'Maputo Cidade', 'localidade 001'),
(103, 'Maputo Cidade', 'localidadde 002'),
(104, 'Maputo Cidade', 'fff'),
(105, 'Maputo Cidade', 'zzz'),
(106, 'Maputo Cidade', 'qqq'),
(107, 'Maputo Cidade', 'xxx');

-- --------------------------------------------------------

--
-- Table structure for table `mn_locality`
--

CREATE TABLE `mn_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mn_locality`
--

INSERT INTO `mn_locality` (`locality_id`, `province`, `locality_name`) VALUES
(100, 'Manica', 'xxx');

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
(100, 'Maputo Província', 'bb');

-- --------------------------------------------------------

--
-- Table structure for table `np_locality`
--

CREATE TABLE `np_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `np_locality`
--

INSERT INTO `np_locality` (`locality_id`, `province`, `locality_name`) VALUES
(100, 'Nampula', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `ns_locality`
--

CREATE TABLE `ns_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_locality`
--

INSERT INTO `ns_locality` (`locality_id`, `province`, `locality_name`) VALUES
(100, 'Niassa', 'ggg');

-- --------------------------------------------------------

--
-- Table structure for table `sf_locality`
--

CREATE TABLE `sf_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sf_locality`
--

INSERT INTO `sf_locality` (`locality_id`, `province`, `locality_name`) VALUES
(100, 'Sofala', 'www');

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
-- Table structure for table `tt_locality`
--

CREATE TABLE `tt_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tt_locality`
--

INSERT INTO `tt_locality` (`locality_id`, `province`, `locality_name`) VALUES
(100, 'Tete', 'qqq');

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
-- Dumping data for table `zb_locality`
--

INSERT INTO `zb_locality` (`locality_id`, `province`, `locality_name`) VALUES
(100, '0', '0'),
(101, '0', '0'),
(102, 'Zambézia', 'sss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrative_entities`
--
ALTER TABLE `administrative_entities`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `administrative_posts`
--
ALTER TABLE `administrative_posts`
  ADD PRIMARY KEY (`administrative_post_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cd_locality`
--
ALTER TABLE `cd_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `gz_locality`
--
ALTER TABLE `gz_locality`
  ADD PRIMARY KEY (`locality_id`);

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
-- Indexes for table `mc_locality`
--
ALTER TABLE `mc_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `mn_locality`
--
ALTER TABLE `mn_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `mp_locality`
--
ALTER TABLE `mp_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `np_locality`
--
ALTER TABLE `np_locality`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `ns_locality`
--
ALTER TABLE `ns_locality`
  ADD PRIMARY KEY (`locality_id`);

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
-- Indexes for table `tt_locality`
--
ALTER TABLE `tt_locality`
  ADD PRIMARY KEY (`locality_id`);

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
-- AUTO_INCREMENT for table `administrative_posts`
--
ALTER TABLE `administrative_posts`
  MODIFY `administrative_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cd_locality`
--
ALTER TABLE `cd_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `district_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `gz_locality`
--
ALTER TABLE `gz_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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
-- AUTO_INCREMENT for table `mc_locality`
--
ALTER TABLE `mc_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `mn_locality`
--
ALTER TABLE `mn_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mp_locality`
--
ALTER TABLE `mp_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `np_locality`
--
ALTER TABLE `np_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `ns_locality`
--
ALTER TABLE `ns_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `sf_locality`
--
ALTER TABLE `sf_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tt_locality`
--
ALTER TABLE `tt_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `zb_locality`
--
ALTER TABLE `zb_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
