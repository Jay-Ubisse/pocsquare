-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 09:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `cd_admin_post`
--

CREATE TABLE `cd_admin_post` (
  `id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_district`
--

CREATE TABLE `cd_district` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cd_district`
--

UPDATE `cd_district` SET `id` = 10,`province` = 'Cabo Delgado',`district` = 'CD Distrito 1' WHERE `cd_district`.`id` = 10;

-- --------------------------------------------------------

--
-- Table structure for table `cd_neighborhood`
--

CREATE TABLE `cd_neighborhood` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gz_admin_post`
--

CREATE TABLE `gz_admin_post` (
  `id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gz_district`
--

CREATE TABLE `gz_district` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gz_district`
--

UPDATE `gz_district` SET `id` = 10,`province` = 'Gaza',`district` = 'GZ Distrito 1' WHERE `gz_district`.`id` = 10;

-- --------------------------------------------------------

--
-- Table structure for table `gz_neighborhood`
--

CREATE TABLE `gz_neighborhood` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_admin_post`
--

CREATE TABLE `in_admin_post` (
  `id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_district`
--

CREATE TABLE `in_district` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `in_district`
--

UPDATE `in_district` SET `id` = 10,`province` = 'Inhambane',`district` = 'IN Distrito 1' WHERE `in_district`.`id` = 10;

-- --------------------------------------------------------

--
-- Table structure for table `in_neighborhood`
--

CREATE TABLE `in_neighborhood` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mc_admin_post`
--

CREATE TABLE `mc_admin_post` (
  `id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mc_district`
--

CREATE TABLE `mc_district` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mc_neighborhood`
--

CREATE TABLE `mc_neighborhood` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_admin_post`
--

CREATE TABLE `mn_admin_post` (
  `id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_district`
--

CREATE TABLE `mn_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mn_district`
--

UPDATE `mn_district` SET `district_id` = 10,`province` = 'Manica',`district` = 'MN Distrito 1' WHERE `mn_district`.`district_id` = 10;

-- --------------------------------------------------------

--
-- Table structure for table `mn_neighborhood`
--

CREATE TABLE `mn_neighborhood` (
  `id` int(3) NOT NULL,
  `province` int(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL,
  `neighborhood` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_admin_post`
--

CREATE TABLE `mp_admin_post` (
  `id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_district`
--

CREATE TABLE `mp_district` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_neighborhood`
--

CREATE TABLE `mp_neighborhood` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_admin_post`
--

CREATE TABLE `np_admin_post` (
  `id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_district`
--

CREATE TABLE `np_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `np_district`
--

UPDATE `np_district` SET `district_id` = 10,`province` = 'Nampula',`district` = 'NP Distrito 1' WHERE `np_district`.`district_id` = 10;

-- --------------------------------------------------------

--
-- Table structure for table `np_neighborhood`
--

CREATE TABLE `np_neighborhood` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_admin_post`
--

CREATE TABLE `ns_admin_post` (
  `id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_district`
--

CREATE TABLE `ns_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ns_district`
--

UPDATE `ns_district` SET `district_id` = 10,`province` = 'Niassa',`district` = 'NS Distrito 1' WHERE `ns_district`.`district_id` = 10;

-- --------------------------------------------------------

--
-- Table structure for table `ns_neighborhood`
--

CREATE TABLE `ns_neighborhood` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_admin_post`
--

CREATE TABLE `sf_admin_post` (
  `id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_district`
--

CREATE TABLE `sf_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sf_district`
--

UPDATE `sf_district` SET `district_id` = 10,`province` = 'Sofala',`district` = 'SF DIstrito 1' WHERE `sf_district`.`district_id` = 10;

-- --------------------------------------------------------

--
-- Table structure for table `sf_neighborhood`
--

CREATE TABLE `sf_neighborhood` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_admin_post`
--

CREATE TABLE `tt_admin_post` (
  `id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_district`
--

CREATE TABLE `tt_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tt_district`
--

UPDATE `tt_district` SET `district_id` = 10,`province` = 'Tete',`district` = 'TT Distrito 1' WHERE `tt_district`.`district_id` = 10;

-- --------------------------------------------------------

--
-- Table structure for table `tt_neighborhood`
--

CREATE TABLE `tt_neighborhood` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_admin_post`
--

CREATE TABLE `zb_admin_post` (
  `id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_district`
--

CREATE TABLE `zb_district` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zb_district`
--

UPDATE `zb_district` SET `id` = 10,`province` = 'Zambézia',`district` = 'ZB Distrito 1' WHERE `zb_district`.`id` = 10;

-- --------------------------------------------------------

--
-- Table structure for table `zb_neighborhood`
--

CREATE TABLE `zb_neighborhood` (
  `id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cd_admin_post`
--
ALTER TABLE `cd_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_district`
--
ALTER TABLE `cd_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_neighborhood`
--
ALTER TABLE `cd_neighborhood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gz_admin_post`
--
ALTER TABLE `gz_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gz_district`
--
ALTER TABLE `gz_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gz_neighborhood`
--
ALTER TABLE `gz_neighborhood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_admin_post`
--
ALTER TABLE `in_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_district`
--
ALTER TABLE `in_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_neighborhood`
--
ALTER TABLE `in_neighborhood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_admin_post`
--
ALTER TABLE `mc_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_district`
--
ALTER TABLE `mc_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_neighborhood`
--
ALTER TABLE `mc_neighborhood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mn_admin_post`
--
ALTER TABLE `mn_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mn_district`
--
ALTER TABLE `mn_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `mn_neighborhood`
--
ALTER TABLE `mn_neighborhood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_admin_post`
--
ALTER TABLE `mp_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_district`
--
ALTER TABLE `mp_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_neighborhood`
--
ALTER TABLE `mp_neighborhood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `np_admin_post`
--
ALTER TABLE `np_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `np_district`
--
ALTER TABLE `np_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `np_neighborhood`
--
ALTER TABLE `np_neighborhood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_admin_post`
--
ALTER TABLE `ns_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_district`
--
ALTER TABLE `ns_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `ns_neighborhood`
--
ALTER TABLE `ns_neighborhood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sf_admin_post`
--
ALTER TABLE `sf_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sf_district`
--
ALTER TABLE `sf_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `sf_neighborhood`
--
ALTER TABLE `sf_neighborhood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_admin_post`
--
ALTER TABLE `tt_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_district`
--
ALTER TABLE `tt_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tt_neighborhood`
--
ALTER TABLE `tt_neighborhood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zb_admin_post`
--
ALTER TABLE `zb_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zb_district`
--
ALTER TABLE `zb_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zb_neighborhood`
--
ALTER TABLE `zb_neighborhood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cd_admin_post`
--
ALTER TABLE `cd_admin_post`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cd_district`
--
ALTER TABLE `cd_district`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cd_neighborhood`
--
ALTER TABLE `cd_neighborhood`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `gz_admin_post`
--
ALTER TABLE `gz_admin_post`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gz_district`
--
ALTER TABLE `gz_district`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gz_neighborhood`
--
ALTER TABLE `gz_neighborhood`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `in_admin_post`
--
ALTER TABLE `in_admin_post`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `in_district`
--
ALTER TABLE `in_district`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `in_neighborhood`
--
ALTER TABLE `in_neighborhood`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `mc_admin_post`
--
ALTER TABLE `mc_admin_post`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mc_district`
--
ALTER TABLE `mc_district`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `mc_neighborhood`
--
ALTER TABLE `mc_neighborhood`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `mn_admin_post`
--
ALTER TABLE `mn_admin_post`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mn_district`
--
ALTER TABLE `mn_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mn_neighborhood`
--
ALTER TABLE `mn_neighborhood`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `mp_admin_post`
--
ALTER TABLE `mp_admin_post`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mp_district`
--
ALTER TABLE `mp_district`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mp_neighborhood`
--
ALTER TABLE `mp_neighborhood`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `np_admin_post`
--
ALTER TABLE `np_admin_post`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `np_district`
--
ALTER TABLE `np_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `np_neighborhood`
--
ALTER TABLE `np_neighborhood`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `ns_admin_post`
--
ALTER TABLE `ns_admin_post`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ns_district`
--
ALTER TABLE `ns_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ns_neighborhood`
--
ALTER TABLE `ns_neighborhood`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `sf_admin_post`
--
ALTER TABLE `sf_admin_post`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sf_district`
--
ALTER TABLE `sf_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sf_neighborhood`
--
ALTER TABLE `sf_neighborhood`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tt_admin_post`
--
ALTER TABLE `tt_admin_post`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tt_district`
--
ALTER TABLE `tt_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tt_neighborhood`
--
ALTER TABLE `tt_neighborhood`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `zb_admin_post`
--
ALTER TABLE `zb_admin_post`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `zb_district`
--
ALTER TABLE `zb_district`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `zb_neighborhood`
--
ALTER TABLE `zb_neighborhood`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
