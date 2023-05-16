-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 09:59 PM
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
-- Table structure for table `administrative_entities`
--

CREATE TABLE `administrative_entities` (
  `entity_id` int(11) NOT NULL,
  `province` varchar(20) DEFAULT NULL,
  `province_numeric_id` varchar(2) DEFAULT NULL,
  `district` varchar(40) DEFAULT NULL,
  `district_id` varchar(3) DEFAULT NULL,
  `administrative_post` varchar(40) DEFAULT NULL,
  `admin_post_id` varchar(3) DEFAULT NULL,
  `locality` varchar(50) DEFAULT NULL,
  `locality_id` varchar(3) DEFAULT NULL,
  `neighborhood` varchar(50) DEFAULT NULL,
  `neighborhood_id` varchar(3) DEFAULT NULL,
  `province_alphabetical_id` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(50) NOT NULL,
  `password` varchar(270) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('admin', 'c3630306d12f1c1056badb39aa74fe7f');

-- --------------------------------------------------------

--
-- Table structure for table `cd_admin_post`
--

CREATE TABLE `cd_admin_post` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_cell`
--

CREATE TABLE `cd_cell` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_circle`
--

CREATE TABLE `cd_circle` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `circle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_district`
--

CREATE TABLE `cd_district` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_neighborhood_locality`
--

CREATE TABLE `cd_neighborhood_locality` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_township`
--

CREATE TABLE `cd_township` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `township` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_village`
--

CREATE TABLE `cd_village` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_zone`
--

CREATE TABLE `cd_zone` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complementary_entities`
--

CREATE TABLE `complementary_entities` (
  `entity_id` int(11) NOT NULL,
  `contact_number` int(9) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `espacial_entities`
--

CREATE TABLE `espacial_entities` (
  `entity_id` int(11) NOT NULL,
  `latitude` decimal(10,0) DEFAULT NULL,
  `latitude_dms` varchar(20) DEFAULT NULL,
  `longitude` decimal(10,0) DEFAULT NULL,
  `longitude_dms` varchar(20) DEFAULT NULL,
  `sea_rise` varchar(20) DEFAULT NULL,
  `via_lat_start` varchar(20) DEFAULT NULL,
  `via_lat_end` varchar(20) DEFAULT NULL
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
-- Table structure for table `gz_cell`
--

CREATE TABLE `gz_cell` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gz_circle`
--

CREATE TABLE `gz_circle` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `circle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gz_district`
--

CREATE TABLE `gz_district` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gz_neighborhood_locality`
--

CREATE TABLE `gz_neighborhood_locality` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gz_township`
--

CREATE TABLE `gz_township` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `township` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gz_village`
--

CREATE TABLE `gz_village` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gz_zone`
--

CREATE TABLE `gz_zone` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heritage_entities`
--

CREATE TABLE `heritage_entities` (
  `entity_id` int(11) NOT NULL,
  `property_type` varchar(20) DEFAULT NULL,
  `floor` varchar(20) DEFAULT NULL,
  `side` varchar(10) DEFAULT NULL,
  `door_number` int(6) DEFAULT NULL,
  `road_name` varchar(50) DEFAULT NULL,
  `road_type` varchar(10) DEFAULT NULL,
  `stalemate` varchar(20) DEFAULT NULL,
  `viaduct` varchar(30) DEFAULT NULL,
  `block` char(4) DEFAULT NULL,
  `roundabout` varchar(20) DEFAULT NULL,
  `lane` varchar(30) DEFAULT NULL,
  `wide` varchar(30) DEFAULT NULL,
  `bridges` varchar(30) DEFAULT NULL,
  `plaza` varchar(30) DEFAULT NULL,
  `length` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `occupancy` varchar(20) DEFAULT NULL,
  `affectation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_admin_post`
--

CREATE TABLE `in_admin_post` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_cell`
--

CREATE TABLE `in_cell` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_circle`
--

CREATE TABLE `in_circle` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `circle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_district`
--

CREATE TABLE `in_district` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_neighborhood_locality`
--

CREATE TABLE `in_neighborhood_locality` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_township`
--

CREATE TABLE `in_township` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `township` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_village`
--

CREATE TABLE `in_village` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_zone`
--

CREATE TABLE `in_zone` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_address_info`
--

CREATE TABLE `main_address_info` (
  `entity_id` int(11) NOT NULL,
  `province` varchar(20) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `neighborhood` varchar(50) DEFAULT NULL,
  `locality` varchar(50) DEFAULT NULL,
  `road_name` varchar(50) DEFAULT NULL,
  `floor` varchar(15) DEFAULT NULL,
  `door_number` int(5) DEFAULT NULL,
  `city_block` int(5) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `phone_number` int(9) DEFAULT NULL,
  `responsible` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mc_admin_post`
--

CREATE TABLE `mc_admin_post` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mc_cell`
--

CREATE TABLE `mc_cell` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mc_circle`
--

CREATE TABLE `mc_circle` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `circle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mc_district`
--

CREATE TABLE `mc_district` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mc_neighborhood_locality`
--

CREATE TABLE `mc_neighborhood_locality` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mc_township`
--

CREATE TABLE `mc_township` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `township` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mc_village`
--

CREATE TABLE `mc_village` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mc_zone`
--

CREATE TABLE `mc_zone` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_admin_post`
--

CREATE TABLE `mn_admin_post` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_cell`
--

CREATE TABLE `mn_cell` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_circle`
--

CREATE TABLE `mn_circle` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `circle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_district`
--

CREATE TABLE `mn_district` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_neighborhood_locality`
--

CREATE TABLE `mn_neighborhood_locality` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_township`
--

CREATE TABLE `mn_township` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `township` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_village`
--

CREATE TABLE `mn_village` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_zone`
--

CREATE TABLE `mn_zone` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_admin_post`
--

CREATE TABLE `mp_admin_post` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_cell`
--

CREATE TABLE `mp_cell` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_circle`
--

CREATE TABLE `mp_circle` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `circle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_district`
--

CREATE TABLE `mp_district` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_neighborhood_locality`
--

CREATE TABLE `mp_neighborhood_locality` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_township`
--

CREATE TABLE `mp_township` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `township` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_village`
--

CREATE TABLE `mp_village` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_zone`
--

CREATE TABLE `mp_zone` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_admin_post`
--

CREATE TABLE `np_admin_post` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `admin_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_cell`
--

CREATE TABLE `np_cell` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_circle`
--

CREATE TABLE `np_circle` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `circle` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_district`
--

CREATE TABLE `np_district` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_neighborhood_locality`
--

CREATE TABLE `np_neighborhood_locality` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_township`
--

CREATE TABLE `np_township` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `township` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_village`
--

CREATE TABLE `np_village` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_zone`
--

CREATE TABLE `np_zone` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_admin_post`
--

CREATE TABLE `ns_admin_post` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_cell`
--

CREATE TABLE `ns_cell` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `cell` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_circle`
--

CREATE TABLE `ns_circle` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `circle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_district`
--

CREATE TABLE `ns_district` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_neighborhood_locality`
--

CREATE TABLE `ns_neighborhood_locality` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_township`
--

CREATE TABLE `ns_township` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `township` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_village`
--

CREATE TABLE `ns_village` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `village` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_zone`
--

CREATE TABLE `ns_zone` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postal_entities`
--

CREATE TABLE `postal_entities` (
  `entity_id` int(11) NOT NULL,
  `city_block` int(3) DEFAULT NULL,
  `lateral` char(1) DEFAULT NULL,
  `entry` char(1) DEFAULT NULL,
  `mailbox` varchar(30) DEFAULT NULL,
  `post_office` varchar(30) DEFAULT NULL,
  `postal_code` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration_info`
--

CREATE TABLE `registration_info` (
  `entity_id` int(11) NOT NULL,
  `registration_date` date DEFAULT NULL,
  `edition_date` date DEFAULT NULL,
  `user_role` varchar(10) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_admin_post`
--

CREATE TABLE `sf_admin_post` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_cell`
--

CREATE TABLE `sf_cell` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_circle`
--

CREATE TABLE `sf_circle` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `circle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_district`
--

CREATE TABLE `sf_district` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_neighborhood_locality`
--

CREATE TABLE `sf_neighborhood_locality` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_township`
--

CREATE TABLE `sf_township` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `township` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_village`
--

CREATE TABLE `sf_village` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_zone`
--

CREATE TABLE `sf_zone` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `username` varchar(50) NOT NULL,
  `password` varchar(270) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `username` varchar(50) NOT NULL,
  `password` varchar(270) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teste`
--

CREATE TABLE `teste` (
  `provincia` varchar(50) NOT NULL,
  `distrito` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_admin_post`
--

CREATE TABLE `tt_admin_post` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_cell`
--

CREATE TABLE `tt_cell` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_circle`
--

CREATE TABLE `tt_circle` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `circle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_district`
--

CREATE TABLE `tt_district` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_neighborhood_locality`
--

CREATE TABLE `tt_neighborhood_locality` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_township`
--

CREATE TABLE `tt_township` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `township` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_village`
--

CREATE TABLE `tt_village` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_zone`
--

CREATE TABLE `tt_zone` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_admin_post`
--

CREATE TABLE `zb_admin_post` (
  `id` varchar(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_cell`
--

CREATE TABLE `zb_cell` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_circle`
--

CREATE TABLE `zb_circle` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `circle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_district`
--

CREATE TABLE `zb_district` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_neighborhood_locality`
--

CREATE TABLE `zb_neighborhood_locality` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_township`
--

CREATE TABLE `zb_township` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `township` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_village`
--

CREATE TABLE `zb_village` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_zone`
--

CREATE TABLE `zb_zone` (
  `id` varchar(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `admin_post` varchar(50) DEFAULT NULL,
  `neighborhood_locality` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_cell`
--
ALTER TABLE `cd_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_circle`
--
ALTER TABLE `cd_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_district`
--
ALTER TABLE `cd_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_neighborhood_locality`
--
ALTER TABLE `cd_neighborhood_locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_township`
--
ALTER TABLE `cd_township`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_village`
--
ALTER TABLE `cd_village`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_zone`
--
ALTER TABLE `cd_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complementary_entities`
--
ALTER TABLE `complementary_entities`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `espacial_entities`
--
ALTER TABLE `espacial_entities`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `gz_admin_post`
--
ALTER TABLE `gz_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gz_cell`
--
ALTER TABLE `gz_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gz_circle`
--
ALTER TABLE `gz_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gz_district`
--
ALTER TABLE `gz_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gz_neighborhood_locality`
--
ALTER TABLE `gz_neighborhood_locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gz_township`
--
ALTER TABLE `gz_township`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gz_village`
--
ALTER TABLE `gz_village`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gz_zone`
--
ALTER TABLE `gz_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heritage_entities`
--
ALTER TABLE `heritage_entities`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `in_admin_post`
--
ALTER TABLE `in_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_cell`
--
ALTER TABLE `in_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_circle`
--
ALTER TABLE `in_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_district`
--
ALTER TABLE `in_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_neighborhood_locality`
--
ALTER TABLE `in_neighborhood_locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_township`
--
ALTER TABLE `in_township`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_village`
--
ALTER TABLE `in_village`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_zone`
--
ALTER TABLE `in_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_entities`
--
ALTER TABLE `local_entities`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `main_address_info`
--
ALTER TABLE `main_address_info`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `mc_admin_post`
--
ALTER TABLE `mc_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_cell`
--
ALTER TABLE `mc_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_circle`
--
ALTER TABLE `mc_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_district`
--
ALTER TABLE `mc_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_neighborhood_locality`
--
ALTER TABLE `mc_neighborhood_locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_township`
--
ALTER TABLE `mc_township`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_village`
--
ALTER TABLE `mc_village`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_zone`
--
ALTER TABLE `mc_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mn_admin_post`
--
ALTER TABLE `mn_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mn_cell`
--
ALTER TABLE `mn_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mn_circle`
--
ALTER TABLE `mn_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mn_district`
--
ALTER TABLE `mn_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mn_neighborhood_locality`
--
ALTER TABLE `mn_neighborhood_locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mn_township`
--
ALTER TABLE `mn_township`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mn_village`
--
ALTER TABLE `mn_village`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mn_zone`
--
ALTER TABLE `mn_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_admin_post`
--
ALTER TABLE `mp_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_cell`
--
ALTER TABLE `mp_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_circle`
--
ALTER TABLE `mp_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_district`
--
ALTER TABLE `mp_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_neighborhood_locality`
--
ALTER TABLE `mp_neighborhood_locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_township`
--
ALTER TABLE `mp_township`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_village`
--
ALTER TABLE `mp_village`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_zone`
--
ALTER TABLE `mp_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `np_admin_post`
--
ALTER TABLE `np_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `np_cell`
--
ALTER TABLE `np_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `np_circle`
--
ALTER TABLE `np_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `np_district`
--
ALTER TABLE `np_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `np_neighborhood_locality`
--
ALTER TABLE `np_neighborhood_locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `np_township`
--
ALTER TABLE `np_township`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `np_village`
--
ALTER TABLE `np_village`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `np_zone`
--
ALTER TABLE `np_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_admin_post`
--
ALTER TABLE `ns_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_cell`
--
ALTER TABLE `ns_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_circle`
--
ALTER TABLE `ns_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_district`
--
ALTER TABLE `ns_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_neighborhood_locality`
--
ALTER TABLE `ns_neighborhood_locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_township`
--
ALTER TABLE `ns_township`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_village`
--
ALTER TABLE `ns_village`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_zone`
--
ALTER TABLE `ns_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postal_entities`
--
ALTER TABLE `postal_entities`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `registration_info`
--
ALTER TABLE `registration_info`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `sf_admin_post`
--
ALTER TABLE `sf_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sf_cell`
--
ALTER TABLE `sf_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sf_circle`
--
ALTER TABLE `sf_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sf_district`
--
ALTER TABLE `sf_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sf_neighborhood_locality`
--
ALTER TABLE `sf_neighborhood_locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sf_township`
--
ALTER TABLE `sf_township`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sf_village`
--
ALTER TABLE `sf_village`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sf_zone`
--
ALTER TABLE `sf_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tt_admin_post`
--
ALTER TABLE `tt_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_cell`
--
ALTER TABLE `tt_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_circle`
--
ALTER TABLE `tt_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_district`
--
ALTER TABLE `tt_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_neighborhood_locality`
--
ALTER TABLE `tt_neighborhood_locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_township`
--
ALTER TABLE `tt_township`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_village`
--
ALTER TABLE `tt_village`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_zone`
--
ALTER TABLE `tt_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zb_admin_post`
--
ALTER TABLE `zb_admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zb_cell`
--
ALTER TABLE `zb_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zb_circle`
--
ALTER TABLE `zb_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zb_district`
--
ALTER TABLE `zb_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zb_neighborhood_locality`
--
ALTER TABLE `zb_neighborhood_locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zb_township`
--
ALTER TABLE `zb_township`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zb_village`
--
ALTER TABLE `zb_village`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zb_zone`
--
ALTER TABLE `zb_zone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrative_entities`
--
ALTER TABLE `administrative_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complementary_entities`
--
ALTER TABLE `complementary_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `espacial_entities`
--
ALTER TABLE `espacial_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heritage_entities`
--
ALTER TABLE `heritage_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `local_entities`
--
ALTER TABLE `local_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_address_info`
--
ALTER TABLE `main_address_info`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postal_entities`
--
ALTER TABLE `postal_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_info`
--
ALTER TABLE `registration_info`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
