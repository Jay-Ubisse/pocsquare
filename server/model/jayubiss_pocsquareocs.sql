-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 09:24 AM
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
  `province_alphabetical_id` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrative_entities`
--

INSERT INTO `administrative_entities` (`entity_id`, `province`, `province_numeric_id`, `district`, `district_id`, `administrative_post`, `admin_post_id`, `locality`, `locality_id`, `neighborhood`, `neighborhood_id`, `province_alphabetical_id`) VALUES
(100013, 'Maputo Cidade', '01', 'MC Distrito 1', '10', 'MC Posto 1', '10', ' ', '0', 'MC Bairro 1', '100', 'MC');

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
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_cell`
--

CREATE TABLE `cd_cell` (
  `cell_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `cell_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_circle`
--

CREATE TABLE `cd_circle` (
  `circle_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `circle_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_district`
--

CREATE TABLE `cd_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_locality`
--

CREATE TABLE `cd_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_neighborhood`
--

CREATE TABLE `cd_neighborhood` (
  `neighborhood_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `neighborhood_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_township`
--

CREATE TABLE `cd_township` (
  `township_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_village`
--

CREATE TABLE `cd_village` (
  `village_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cd_zone`
--

CREATE TABLE `cd_zone` (
  `zone_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zone_name` varchar(50) NOT NULL
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

--
-- Dumping data for table `complementary_entities`
--

INSERT INTO `complementary_entities` (`entity_id`, `contact_number`, `email`, `website`) VALUES
(100010, 848839501, 'joaquimubisse@gmail.com', 'https://www.jay-ubisse.com');

-- --------------------------------------------------------

--
-- Table structure for table `espacial_entities`
--

CREATE TABLE `espacial_entities` (
  `entity_id` int(11) NOT NULL,
  `latitude` decimal(10,0) NOT NULL,
  `latitude_dms` varchar(20) NOT NULL,
  `longitude` decimal(10,0) NOT NULL,
  `longitude_dms` varchar(20) NOT NULL,
  `sea_rise` varchar(20) NOT NULL,
  `via_lat_start` varchar(20) NOT NULL,
  `via_lat_end` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `espacial_entities`
--

INSERT INTO `espacial_entities` (`entity_id`, `latitude`, `latitude_dms`, `longitude`, `longitude_dms`, `sea_rise`, `via_lat_start`, `via_lat_end`) VALUES
(100010, 10, '4.343', 9, '4.48994', '4.40404', '3.666', '4.67');

-- --------------------------------------------------------

--
-- Table structure for table `gz_admin_post`
--

CREATE TABLE `gz_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gz_admin_post`
--

INSERT INTO `gz_admin_post` (`admin_post_id`, `province`, `admin_post_name`) VALUES
(10, 'Gaza', 'GZ Posto 1');

-- --------------------------------------------------------

--
-- Table structure for table `gz_cell`
--

CREATE TABLE `gz_cell` (
  `cell_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `cell_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gz_cell`
--

INSERT INTO `gz_cell` (`cell_id`, `province`, `cell_name`) VALUES
(100, 'Gaza', 'GZ Celula 1');

-- --------------------------------------------------------

--
-- Table structure for table `gz_circle`
--

CREATE TABLE `gz_circle` (
  `circle_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `circle_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gz_circle`
--

INSERT INTO `gz_circle` (`circle_id`, `province`, `circle_name`) VALUES
(100, 'Gaza', 'GZ Circulo 1');

-- --------------------------------------------------------

--
-- Table structure for table `gz_district`
--

CREATE TABLE `gz_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gz_district`
--

INSERT INTO `gz_district` (`district_id`, `province`, `district_name`) VALUES
(10, 'Gaza', 'GZ Distrito 1');

-- --------------------------------------------------------

--
-- Table structure for table `gz_locality`
--

CREATE TABLE `gz_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gz_locality`
--

INSERT INTO `gz_locality` (`locality_id`, `province`, `locality_name`) VALUES
(100, 'Gaza', 'GZ Localidade 1');

-- --------------------------------------------------------

--
-- Table structure for table `gz_neighborhood`
--

CREATE TABLE `gz_neighborhood` (
  `neighborhood_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `neighborhood_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gz_township`
--

CREATE TABLE `gz_township` (
  `township_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `township_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gz_township`
--

INSERT INTO `gz_township` (`township_id`, `province`, `township_name`) VALUES
(100, 'Gaza', 'GZ Povoacao 1');

-- --------------------------------------------------------

--
-- Table structure for table `gz_village`
--

CREATE TABLE `gz_village` (
  `village_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gz_village`
--

INSERT INTO `gz_village` (`village_id`, `province`, `village_name`) VALUES
(100, 'Gaza', 'GZ Vila 1');

-- --------------------------------------------------------

--
-- Table structure for table `gz_zone`
--

CREATE TABLE `gz_zone` (
  `zone_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zone_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gz_zone`
--

INSERT INTO `gz_zone` (`zone_id`, `province`, `zone_name`) VALUES
(100, 'Gaza', 'GZ Zona 1');

-- --------------------------------------------------------

--
-- Table structure for table `heritage_entities`
--

CREATE TABLE `heritage_entities` (
  `entity_id` int(11) NOT NULL,
  `property_type` varchar(20) NOT NULL,
  `floor` varchar(20) NOT NULL,
  `side` varchar(10) NOT NULL,
  `door_number` int(6) NOT NULL,
  `road_name` varchar(50) NOT NULL,
  `road_type` varchar(10) NOT NULL,
  `stalemate` varchar(20) NOT NULL,
  `viaduct` varchar(30) NOT NULL,
  `block` char(4) NOT NULL,
  `roundabout` varchar(20) NOT NULL,
  `lane` varchar(30) NOT NULL,
  `wide` varchar(30) NOT NULL,
  `bridges` varchar(30) NOT NULL,
  `plaza` varchar(30) NOT NULL,
  `length` double NOT NULL,
  `width` double NOT NULL,
  `occupancy` varchar(20) NOT NULL,
  `affectation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `heritage_entities`
--

INSERT INTO `heritage_entities` (`entity_id`, `property_type`, `floor`, `side`, `door_number`, `road_name`, `road_type`, `stalemate`, `viaduct`, `block`, `roundabout`, `lane`, `wide`, `bridges`, `plaza`, `length`, `width`, `occupancy`, `affectation`) VALUES
(100007, 'Casa Geminada', 'R/C', 'lado a', 543, 'AV.Karl Max', 'Avenida', 'imasse a', ' viaduto a', '1009', 'rotunda a', 'travessa a', 'largo a', 'ponte a', 'praca 1', 3000, 9000, 'ocupacao a', 'afetacao a');

-- --------------------------------------------------------

--
-- Table structure for table `in_admin_post`
--

CREATE TABLE `in_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_cell`
--

CREATE TABLE `in_cell` (
  `cell_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `cell_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_circle`
--

CREATE TABLE `in_circle` (
  `circle_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `circle_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_district`
--

CREATE TABLE `in_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_locality`
--

CREATE TABLE `in_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_neighborhood`
--

CREATE TABLE `in_neighborhood` (
  `neighborhood_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `neighborhood_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_township`
--

CREATE TABLE `in_township` (
  `township_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `township_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_village`
--

CREATE TABLE `in_village` (
  `village_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_zone`
--

CREATE TABLE `in_zone` (
  `village_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village_name` text NOT NULL
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

--
-- Dumping data for table `local_entities`
--

INSERT INTO `local_entities` (`entity_id`, `cell`, `cell_id`, `circle`, `circle_id`, `village`, `village_id`, `township`, `township_id`, `zone`, `zone_id`) VALUES
(100008, 'MC Celula 1', '100', 'MC Circulo 1', '100', 'MC Vila 1', '100', 'MC Povoacao 1', '100', 'MC Zona 1', '100');

-- --------------------------------------------------------

--
-- Table structure for table `main_address_info`
--

CREATE TABLE `main_address_info` (
  `entity_id` int(11) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `road_name` varchar(50) NOT NULL,
  `floor` varchar(15) NOT NULL,
  `door_number` int(5) NOT NULL,
  `city_block` int(5) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `phone_number` int(9) NOT NULL,
  `responsible` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_address_info`
--

INSERT INTO `main_address_info` (`entity_id`, `province`, `district`, `neighborhood`, `locality`, `road_name`, `floor`, `door_number`, `city_block`, `cep`, `email`, `website`, `phone_number`, `responsible`) VALUES
(100007, 'Maputo Cidade', 'MC Distrito 1', 'MC Bairro 1', ' ', 'AV.Karl Max', 'R/C', 543, 34, 'MC100 1009A', 'joaquimubisse@gmail.com', 'https://www.jay-ubisse.com', 848839501, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mc_admin_post`
--

CREATE TABLE `mc_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mc_admin_post`
--

INSERT INTO `mc_admin_post` (`admin_post_id`, `province`, `admin_post_name`) VALUES
(10, 'Maputo Cidade', 'MC Posto 1'),
(11, 'Maputo Cidade', 'MP Posto 1');

-- --------------------------------------------------------

--
-- Table structure for table `mc_cell`
--

CREATE TABLE `mc_cell` (
  `cell_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `cell_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mc_cell`
--

INSERT INTO `mc_cell` (`cell_id`, `province`, `cell_name`) VALUES
(100, 'Maputo Cidade', 'MC Celula 1');

-- --------------------------------------------------------

--
-- Table structure for table `mc_circle`
--

CREATE TABLE `mc_circle` (
  `circle_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `circle_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mc_circle`
--

INSERT INTO `mc_circle` (`circle_id`, `province`, `circle_name`) VALUES
(100, 'Maputo Cidade', 'MC Circulo 1');

-- --------------------------------------------------------

--
-- Table structure for table `mc_district`
--

CREATE TABLE `mc_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mc_district`
--

INSERT INTO `mc_district` (`district_id`, `province`, `district_name`) VALUES
(10, 'Maputo Cidade', 'MC Distrito 1');

-- --------------------------------------------------------

--
-- Table structure for table `mc_locality`
--

CREATE TABLE `mc_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mc_neighborhood`
--

CREATE TABLE `mc_neighborhood` (
  `neighborhood_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `neighborhood_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mc_neighborhood`
--

INSERT INTO `mc_neighborhood` (`neighborhood_id`, `province`, `neighborhood_name`) VALUES
(100, 'Maputo Cidade', 'MC Bairro 1');

-- --------------------------------------------------------

--
-- Table structure for table `mc_township`
--

CREATE TABLE `mc_township` (
  `township_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `township_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mc_township`
--

INSERT INTO `mc_township` (`township_id`, `province`, `township_name`) VALUES
(100, 'Maputo Cidade', 'MC Povoacao 1');

-- --------------------------------------------------------

--
-- Table structure for table `mc_village`
--

CREATE TABLE `mc_village` (
  `village_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mc_village`
--

INSERT INTO `mc_village` (`village_id`, `province`, `village_name`) VALUES
(100, 'Maputo Cidade', 'MC Vila 1');

-- --------------------------------------------------------

--
-- Table structure for table `mc_zone`
--

CREATE TABLE `mc_zone` (
  `zone_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zone_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mc_zone`
--

INSERT INTO `mc_zone` (`zone_id`, `province`, `zone_name`) VALUES
(100, 'Maputo Cidade', 'MC Zona 1');

-- --------------------------------------------------------

--
-- Table structure for table `mn_admin_post`
--

CREATE TABLE `mn_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_cell`
--

CREATE TABLE `mn_cell` (
  `cell_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `cell_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_circle`
--

CREATE TABLE `mn_circle` (
  `circle_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `circle_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_district`
--

CREATE TABLE `mn_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_locality`
--

CREATE TABLE `mn_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mn_locality`
--

INSERT INTO `mn_locality` (`locality_id`, `province`, `locality_name`) VALUES
(100, 'Manica', 'MN Localidade 1');

-- --------------------------------------------------------

--
-- Table structure for table `mn_neighborhood`
--

CREATE TABLE `mn_neighborhood` (
  `neighborhood_id` int(3) NOT NULL,
  `province` int(20) NOT NULL,
  `neighborhood_name` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_township`
--

CREATE TABLE `mn_township` (
  `township_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `township_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_village`
--

CREATE TABLE `mn_village` (
  `village_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mn_zone`
--

CREATE TABLE `mn_zone` (
  `zone_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zone_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_admin_post`
--

CREATE TABLE `mp_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mp_admin_post`
--

INSERT INTO `mp_admin_post` (`admin_post_id`, `province`, `admin_post_name`) VALUES
(10, 'Maputo Província', 'MP Posto 1');

-- --------------------------------------------------------

--
-- Table structure for table `mp_cell`
--

CREATE TABLE `mp_cell` (
  `cell_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `cell_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mp_cell`
--

INSERT INTO `mp_cell` (`cell_id`, `province`, `cell_name`) VALUES
(100, 'Maputo Província', 'MP Celula 1');

-- --------------------------------------------------------

--
-- Table structure for table `mp_circle`
--

CREATE TABLE `mp_circle` (
  `circle_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `circle_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mp_circle`
--

INSERT INTO `mp_circle` (`circle_id`, `province`, `circle_name`) VALUES
(100, 'Maputo Província', 'MP Circulo 1');

-- --------------------------------------------------------

--
-- Table structure for table `mp_district`
--

CREATE TABLE `mp_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mp_district`
--

INSERT INTO `mp_district` (`district_id`, `province`, `district_name`) VALUES
(10, 'Maputo Província', 'MP Districto 1'),
(11, 'Maputo Província', 'MP Distrito 2');

-- --------------------------------------------------------

--
-- Table structure for table `mp_locality`
--

CREATE TABLE `mp_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mp_locality`
--

INSERT INTO `mp_locality` (`locality_id`, `province`, `locality_name`) VALUES
(100, 'Maputo Província', 'MP Localidade 1');

-- --------------------------------------------------------

--
-- Table structure for table `mp_neighborhood`
--

CREATE TABLE `mp_neighborhood` (
  `neighborhood_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `neighborhood_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_township`
--

CREATE TABLE `mp_township` (
  `township_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `township_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mp_township`
--

INSERT INTO `mp_township` (`township_id`, `province`, `township_name`) VALUES
(100, 'Maputo Província', 'MP Povoacao 1');

-- --------------------------------------------------------

--
-- Table structure for table `mp_village`
--

CREATE TABLE `mp_village` (
  `village_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mp_village`
--

INSERT INTO `mp_village` (`village_id`, `province`, `village_name`) VALUES
(100, 'Maputo Província', 'MP Vila 1');

-- --------------------------------------------------------

--
-- Table structure for table `mp_zone`
--

CREATE TABLE `mp_zone` (
  `zone_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zone_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mp_zone`
--

INSERT INTO `mp_zone` (`zone_id`, `province`, `zone_name`) VALUES
(100, 'Maputo Província', 'MP Zona 1');

-- --------------------------------------------------------

--
-- Table structure for table `np_admin_post`
--

CREATE TABLE `np_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_cell`
--

CREATE TABLE `np_cell` (
  `cell_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `cell_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_circle`
--

CREATE TABLE `np_circle` (
  `circle_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `circle_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_district`
--

CREATE TABLE `np_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_locality`
--

CREATE TABLE `np_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_neighborhood`
--

CREATE TABLE `np_neighborhood` (
  `neighborhood_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `neighborhood_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_township`
--

CREATE TABLE `np_township` (
  `township_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `township_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_village`
--

CREATE TABLE `np_village` (
  `village_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_zone`
--

CREATE TABLE `np_zone` (
  `zone_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zone_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_admin_post`
--

CREATE TABLE `ns_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_cell`
--

CREATE TABLE `ns_cell` (
  `cell_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `cell_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_circle`
--

CREATE TABLE `ns_circle` (
  `circle_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `circle_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_district`
--

CREATE TABLE `ns_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_locality`
--

CREATE TABLE `ns_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_neighborhood`
--

CREATE TABLE `ns_neighborhood` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_township`
--

CREATE TABLE `ns_township` (
  `township_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `township_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_village`
--

CREATE TABLE `ns_village` (
  `village_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ns_zone`
--

CREATE TABLE `ns_zone` (
  `zone_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zone_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postal_entities`
--

CREATE TABLE `postal_entities` (
  `entity_id` int(11) NOT NULL,
  `city_block` int(3) NOT NULL,
  `lateral` char(1) NOT NULL,
  `entry` char(1) NOT NULL,
  `mailbox` varchar(30) NOT NULL,
  `post_office` varchar(30) NOT NULL,
  `postal_code` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postal_entities`
--

INSERT INTO `postal_entities` (`entity_id`, `city_block`, `lateral`, `entry`, `mailbox`, `post_office`, `postal_code`) VALUES
(100010, 34, 'A', 'A', 'Caixa Postal a', 'Estacao a', 'MC100 1009A');

-- --------------------------------------------------------

--
-- Table structure for table `registration_info`
--

CREATE TABLE `registration_info` (
  `entity_id` int(11) NOT NULL,
  `registration_date` date NOT NULL,
  `edition_date` date DEFAULT NULL,
  `user_role` varchar(10) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_info`
--

INSERT INTO `registration_info` (`entity_id`, `registration_date`, `edition_date`, `user_role`, `user_id`) VALUES
(100010, '2018-04-23', NULL, 'Administra', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sf_admin_post`
--

CREATE TABLE `sf_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_cell`
--

CREATE TABLE `sf_cell` (
  `cell_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `cell_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_circle`
--

CREATE TABLE `sf_circle` (
  `circle_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `circle_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_district`
--

CREATE TABLE `sf_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_locality`
--

CREATE TABLE `sf_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_neighborhood`
--

CREATE TABLE `sf_neighborhood` (
  `neighborhood_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `neighborhood_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_township`
--

CREATE TABLE `sf_township` (
  `township_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `township_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_village`
--

CREATE TABLE `sf_village` (
  `village_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf_zone`
--

CREATE TABLE `sf_zone` (
  `zone_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zone_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `username` varchar(50) NOT NULL,
  `password` varchar(270) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`username`, `password`) VALUES
('supervisor', 'c3630306d12f1c1056badb39aa74fe7f');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `username` varchar(50) NOT NULL,
  `password` varchar(270) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`username`, `password`) VALUES
('tecnico', 'c3630306d12f1c1056badb39aa74fe7f');

-- --------------------------------------------------------

--
-- Table structure for table `tt_admin_post`
--

CREATE TABLE `tt_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_cell`
--

CREATE TABLE `tt_cell` (
  `cell_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `cell_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_circle`
--

CREATE TABLE `tt_circle` (
  `circle_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `circle_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_district`
--

CREATE TABLE `tt_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_locality`
--

CREATE TABLE `tt_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_neighborhood`
--

CREATE TABLE `tt_neighborhood` (
  `neighborhood_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `neighborhood_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_township`
--

CREATE TABLE `tt_township` (
  `township_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `township_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_village`
--

CREATE TABLE `tt_village` (
  `village_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_zone`
--

CREATE TABLE `tt_zone` (
  `zone_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zone_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_admin_post`
--

CREATE TABLE `zb_admin_post` (
  `admin_post_id` int(2) NOT NULL,
  `province` varchar(20) NOT NULL,
  `admin_post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_cell`
--

CREATE TABLE `zb_cell` (
  `cell_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `cell_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_circle`
--

CREATE TABLE `zb_circle` (
  `circle_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `circle_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_district`
--

CREATE TABLE `zb_district` (
  `district_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_locality`
--

CREATE TABLE `zb_locality` (
  `locality_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `locality_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_neighborhood`
--

CREATE TABLE `zb_neighborhood` (
  `neighborhood_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `neighborhood_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_township`
--

CREATE TABLE `zb_township` (
  `township_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `township_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_village`
--

CREATE TABLE `zb_village` (
  `village_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `village_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zb_zone`
--

CREATE TABLE `zb_zone` (
  `zone_id` int(3) NOT NULL,
  `province` varchar(20) NOT NULL,
  `zone_name` varchar(50) NOT NULL
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
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `cd_cell`
--
ALTER TABLE `cd_cell`
  ADD PRIMARY KEY (`cell_id`);

--
-- Indexes for table `cd_circle`
--
ALTER TABLE `cd_circle`
  ADD PRIMARY KEY (`circle_id`);

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
-- Indexes for table `cd_neighborhood`
--
ALTER TABLE `cd_neighborhood`
  ADD PRIMARY KEY (`neighborhood_id`);

--
-- Indexes for table `cd_township`
--
ALTER TABLE `cd_township`
  ADD PRIMARY KEY (`township_id`);

--
-- Indexes for table `cd_village`
--
ALTER TABLE `cd_village`
  ADD PRIMARY KEY (`village_id`);

--
-- Indexes for table `cd_zone`
--
ALTER TABLE `cd_zone`
  ADD PRIMARY KEY (`zone_id`);

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
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `gz_cell`
--
ALTER TABLE `gz_cell`
  ADD PRIMARY KEY (`cell_id`);

--
-- Indexes for table `gz_circle`
--
ALTER TABLE `gz_circle`
  ADD PRIMARY KEY (`circle_id`);

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
-- Indexes for table `gz_neighborhood`
--
ALTER TABLE `gz_neighborhood`
  ADD PRIMARY KEY (`neighborhood_id`);

--
-- Indexes for table `gz_township`
--
ALTER TABLE `gz_township`
  ADD PRIMARY KEY (`township_id`);

--
-- Indexes for table `gz_village`
--
ALTER TABLE `gz_village`
  ADD PRIMARY KEY (`village_id`);

--
-- Indexes for table `gz_zone`
--
ALTER TABLE `gz_zone`
  ADD PRIMARY KEY (`zone_id`);

--
-- Indexes for table `heritage_entities`
--
ALTER TABLE `heritage_entities`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `in_admin_post`
--
ALTER TABLE `in_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `in_cell`
--
ALTER TABLE `in_cell`
  ADD PRIMARY KEY (`cell_id`);

--
-- Indexes for table `in_circle`
--
ALTER TABLE `in_circle`
  ADD PRIMARY KEY (`circle_id`);

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
-- Indexes for table `in_neighborhood`
--
ALTER TABLE `in_neighborhood`
  ADD PRIMARY KEY (`neighborhood_id`);

--
-- Indexes for table `in_township`
--
ALTER TABLE `in_township`
  ADD PRIMARY KEY (`township_id`);

--
-- Indexes for table `in_village`
--
ALTER TABLE `in_village`
  ADD PRIMARY KEY (`village_id`);

--
-- Indexes for table `in_zone`
--
ALTER TABLE `in_zone`
  ADD PRIMARY KEY (`village_id`);

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
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `mc_cell`
--
ALTER TABLE `mc_cell`
  ADD PRIMARY KEY (`cell_id`);

--
-- Indexes for table `mc_circle`
--
ALTER TABLE `mc_circle`
  ADD PRIMARY KEY (`circle_id`);

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
-- Indexes for table `mc_neighborhood`
--
ALTER TABLE `mc_neighborhood`
  ADD PRIMARY KEY (`neighborhood_id`);

--
-- Indexes for table `mc_township`
--
ALTER TABLE `mc_township`
  ADD PRIMARY KEY (`township_id`);

--
-- Indexes for table `mc_village`
--
ALTER TABLE `mc_village`
  ADD PRIMARY KEY (`village_id`);

--
-- Indexes for table `mc_zone`
--
ALTER TABLE `mc_zone`
  ADD PRIMARY KEY (`zone_id`);

--
-- Indexes for table `mn_admin_post`
--
ALTER TABLE `mn_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `mn_cell`
--
ALTER TABLE `mn_cell`
  ADD PRIMARY KEY (`cell_id`);

--
-- Indexes for table `mn_circle`
--
ALTER TABLE `mn_circle`
  ADD PRIMARY KEY (`circle_id`);

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
-- Indexes for table `mn_neighborhood`
--
ALTER TABLE `mn_neighborhood`
  ADD PRIMARY KEY (`neighborhood_id`);

--
-- Indexes for table `mn_township`
--
ALTER TABLE `mn_township`
  ADD PRIMARY KEY (`township_id`);

--
-- Indexes for table `mn_village`
--
ALTER TABLE `mn_village`
  ADD PRIMARY KEY (`village_id`);

--
-- Indexes for table `mn_zone`
--
ALTER TABLE `mn_zone`
  ADD PRIMARY KEY (`zone_id`);

--
-- Indexes for table `mp_admin_post`
--
ALTER TABLE `mp_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `mp_cell`
--
ALTER TABLE `mp_cell`
  ADD PRIMARY KEY (`cell_id`);

--
-- Indexes for table `mp_circle`
--
ALTER TABLE `mp_circle`
  ADD PRIMARY KEY (`circle_id`);

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
-- Indexes for table `mp_neighborhood`
--
ALTER TABLE `mp_neighborhood`
  ADD PRIMARY KEY (`neighborhood_id`);

--
-- Indexes for table `mp_township`
--
ALTER TABLE `mp_township`
  ADD PRIMARY KEY (`township_id`);

--
-- Indexes for table `mp_village`
--
ALTER TABLE `mp_village`
  ADD PRIMARY KEY (`village_id`);

--
-- Indexes for table `mp_zone`
--
ALTER TABLE `mp_zone`
  ADD PRIMARY KEY (`zone_id`);

--
-- Indexes for table `np_admin_post`
--
ALTER TABLE `np_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `np_cell`
--
ALTER TABLE `np_cell`
  ADD PRIMARY KEY (`cell_id`);

--
-- Indexes for table `np_circle`
--
ALTER TABLE `np_circle`
  ADD PRIMARY KEY (`circle_id`);

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
-- Indexes for table `np_neighborhood`
--
ALTER TABLE `np_neighborhood`
  ADD PRIMARY KEY (`neighborhood_id`);

--
-- Indexes for table `np_township`
--
ALTER TABLE `np_township`
  ADD PRIMARY KEY (`township_id`);

--
-- Indexes for table `np_village`
--
ALTER TABLE `np_village`
  ADD PRIMARY KEY (`village_id`);

--
-- Indexes for table `np_zone`
--
ALTER TABLE `np_zone`
  ADD PRIMARY KEY (`zone_id`);

--
-- Indexes for table `ns_admin_post`
--
ALTER TABLE `ns_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `ns_cell`
--
ALTER TABLE `ns_cell`
  ADD PRIMARY KEY (`cell_id`);

--
-- Indexes for table `ns_circle`
--
ALTER TABLE `ns_circle`
  ADD PRIMARY KEY (`circle_id`);

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
-- Indexes for table `ns_neighborhood`
--
ALTER TABLE `ns_neighborhood`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `ns_township`
--
ALTER TABLE `ns_township`
  ADD PRIMARY KEY (`township_id`);

--
-- Indexes for table `ns_village`
--
ALTER TABLE `ns_village`
  ADD PRIMARY KEY (`village_id`);

--
-- Indexes for table `ns_zone`
--
ALTER TABLE `ns_zone`
  ADD PRIMARY KEY (`zone_id`);

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
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `sf_cell`
--
ALTER TABLE `sf_cell`
  ADD PRIMARY KEY (`cell_id`);

--
-- Indexes for table `sf_circle`
--
ALTER TABLE `sf_circle`
  ADD PRIMARY KEY (`circle_id`);

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
-- Indexes for table `sf_neighborhood`
--
ALTER TABLE `sf_neighborhood`
  ADD PRIMARY KEY (`neighborhood_id`);

--
-- Indexes for table `sf_township`
--
ALTER TABLE `sf_township`
  ADD PRIMARY KEY (`township_id`);

--
-- Indexes for table `sf_village`
--
ALTER TABLE `sf_village`
  ADD PRIMARY KEY (`village_id`);

--
-- Indexes for table `sf_zone`
--
ALTER TABLE `sf_zone`
  ADD PRIMARY KEY (`zone_id`);

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
-- Indexes for table `tt_cell`
--
ALTER TABLE `tt_cell`
  ADD PRIMARY KEY (`cell_id`);

--
-- Indexes for table `tt_circle`
--
ALTER TABLE `tt_circle`
  ADD PRIMARY KEY (`circle_id`);

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
-- Indexes for table `tt_neighborhood`
--
ALTER TABLE `tt_neighborhood`
  ADD PRIMARY KEY (`neighborhood_id`);

--
-- Indexes for table `tt_township`
--
ALTER TABLE `tt_township`
  ADD PRIMARY KEY (`township_id`);

--
-- Indexes for table `tt_village`
--
ALTER TABLE `tt_village`
  ADD PRIMARY KEY (`village_id`);

--
-- Indexes for table `tt_zone`
--
ALTER TABLE `tt_zone`
  ADD PRIMARY KEY (`zone_id`);

--
-- Indexes for table `zb_admin_post`
--
ALTER TABLE `zb_admin_post`
  ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `zb_cell`
--
ALTER TABLE `zb_cell`
  ADD PRIMARY KEY (`cell_id`);

--
-- Indexes for table `zb_circle`
--
ALTER TABLE `zb_circle`
  ADD PRIMARY KEY (`circle_id`);

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
-- Indexes for table `zb_neighborhood`
--
ALTER TABLE `zb_neighborhood`
  ADD PRIMARY KEY (`neighborhood_id`);

--
-- Indexes for table `zb_township`
--
ALTER TABLE `zb_township`
  ADD PRIMARY KEY (`township_id`);

--
-- Indexes for table `zb_village`
--
ALTER TABLE `zb_village`
  ADD PRIMARY KEY (`village_id`);

--
-- Indexes for table `zb_zone`
--
ALTER TABLE `zb_zone`
  ADD PRIMARY KEY (`zone_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrative_entities`
--
ALTER TABLE `administrative_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100014;

--
-- AUTO_INCREMENT for table `cd_admin_post`
--
ALTER TABLE `cd_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cd_cell`
--
ALTER TABLE `cd_cell`
  MODIFY `cell_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `cd_circle`
--
ALTER TABLE `cd_circle`
  MODIFY `circle_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `cd_district`
--
ALTER TABLE `cd_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cd_locality`
--
ALTER TABLE `cd_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `cd_neighborhood`
--
ALTER TABLE `cd_neighborhood`
  MODIFY `neighborhood_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `cd_township`
--
ALTER TABLE `cd_township`
  MODIFY `township_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `cd_village`
--
ALTER TABLE `cd_village`
  MODIFY `village_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `cd_zone`
--
ALTER TABLE `cd_zone`
  MODIFY `zone_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `complementary_entities`
--
ALTER TABLE `complementary_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100011;

--
-- AUTO_INCREMENT for table `espacial_entities`
--
ALTER TABLE `espacial_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100011;

--
-- AUTO_INCREMENT for table `gz_admin_post`
--
ALTER TABLE `gz_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gz_cell`
--
ALTER TABLE `gz_cell`
  MODIFY `cell_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `gz_circle`
--
ALTER TABLE `gz_circle`
  MODIFY `circle_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `gz_district`
--
ALTER TABLE `gz_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gz_locality`
--
ALTER TABLE `gz_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `gz_neighborhood`
--
ALTER TABLE `gz_neighborhood`
  MODIFY `neighborhood_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `gz_township`
--
ALTER TABLE `gz_township`
  MODIFY `township_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `gz_village`
--
ALTER TABLE `gz_village`
  MODIFY `village_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `gz_zone`
--
ALTER TABLE `gz_zone`
  MODIFY `zone_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `heritage_entities`
--
ALTER TABLE `heritage_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100008;

--
-- AUTO_INCREMENT for table `in_admin_post`
--
ALTER TABLE `in_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `in_cell`
--
ALTER TABLE `in_cell`
  MODIFY `cell_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `in_circle`
--
ALTER TABLE `in_circle`
  MODIFY `circle_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `in_district`
--
ALTER TABLE `in_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `in_locality`
--
ALTER TABLE `in_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `in_neighborhood`
--
ALTER TABLE `in_neighborhood`
  MODIFY `neighborhood_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `in_township`
--
ALTER TABLE `in_township`
  MODIFY `township_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `in_village`
--
ALTER TABLE `in_village`
  MODIFY `village_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `in_zone`
--
ALTER TABLE `in_zone`
  MODIFY `village_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `local_entities`
--
ALTER TABLE `local_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100009;

--
-- AUTO_INCREMENT for table `main_address_info`
--
ALTER TABLE `main_address_info`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100008;

--
-- AUTO_INCREMENT for table `mc_admin_post`
--
ALTER TABLE `mc_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mc_cell`
--
ALTER TABLE `mc_cell`
  MODIFY `cell_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mc_circle`
--
ALTER TABLE `mc_circle`
  MODIFY `circle_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mc_district`
--
ALTER TABLE `mc_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mc_locality`
--
ALTER TABLE `mc_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `mc_neighborhood`
--
ALTER TABLE `mc_neighborhood`
  MODIFY `neighborhood_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mc_township`
--
ALTER TABLE `mc_township`
  MODIFY `township_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mc_village`
--
ALTER TABLE `mc_village`
  MODIFY `village_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mc_zone`
--
ALTER TABLE `mc_zone`
  MODIFY `zone_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mn_admin_post`
--
ALTER TABLE `mn_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mn_cell`
--
ALTER TABLE `mn_cell`
  MODIFY `cell_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `mn_circle`
--
ALTER TABLE `mn_circle`
  MODIFY `circle_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `mn_district`
--
ALTER TABLE `mn_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mn_locality`
--
ALTER TABLE `mn_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mn_neighborhood`
--
ALTER TABLE `mn_neighborhood`
  MODIFY `neighborhood_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `mn_township`
--
ALTER TABLE `mn_township`
  MODIFY `township_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `mn_village`
--
ALTER TABLE `mn_village`
  MODIFY `village_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `mn_zone`
--
ALTER TABLE `mn_zone`
  MODIFY `zone_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `mp_admin_post`
--
ALTER TABLE `mp_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mp_cell`
--
ALTER TABLE `mp_cell`
  MODIFY `cell_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mp_circle`
--
ALTER TABLE `mp_circle`
  MODIFY `circle_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mp_district`
--
ALTER TABLE `mp_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mp_locality`
--
ALTER TABLE `mp_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mp_neighborhood`
--
ALTER TABLE `mp_neighborhood`
  MODIFY `neighborhood_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `mp_township`
--
ALTER TABLE `mp_township`
  MODIFY `township_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mp_village`
--
ALTER TABLE `mp_village`
  MODIFY `village_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `mp_zone`
--
ALTER TABLE `mp_zone`
  MODIFY `zone_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `np_admin_post`
--
ALTER TABLE `np_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `np_cell`
--
ALTER TABLE `np_cell`
  MODIFY `cell_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `np_circle`
--
ALTER TABLE `np_circle`
  MODIFY `circle_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `np_district`
--
ALTER TABLE `np_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `np_locality`
--
ALTER TABLE `np_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `np_neighborhood`
--
ALTER TABLE `np_neighborhood`
  MODIFY `neighborhood_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `np_township`
--
ALTER TABLE `np_township`
  MODIFY `township_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `np_village`
--
ALTER TABLE `np_village`
  MODIFY `village_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `np_zone`
--
ALTER TABLE `np_zone`
  MODIFY `zone_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `ns_admin_post`
--
ALTER TABLE `ns_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ns_cell`
--
ALTER TABLE `ns_cell`
  MODIFY `cell_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `ns_circle`
--
ALTER TABLE `ns_circle`
  MODIFY `circle_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `ns_district`
--
ALTER TABLE `ns_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ns_locality`
--
ALTER TABLE `ns_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `ns_neighborhood`
--
ALTER TABLE `ns_neighborhood`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `ns_township`
--
ALTER TABLE `ns_township`
  MODIFY `township_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `ns_village`
--
ALTER TABLE `ns_village`
  MODIFY `village_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `ns_zone`
--
ALTER TABLE `ns_zone`
  MODIFY `zone_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `postal_entities`
--
ALTER TABLE `postal_entities`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100011;

--
-- AUTO_INCREMENT for table `registration_info`
--
ALTER TABLE `registration_info`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100011;

--
-- AUTO_INCREMENT for table `sf_admin_post`
--
ALTER TABLE `sf_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sf_cell`
--
ALTER TABLE `sf_cell`
  MODIFY `cell_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `sf_circle`
--
ALTER TABLE `sf_circle`
  MODIFY `circle_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `sf_district`
--
ALTER TABLE `sf_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sf_locality`
--
ALTER TABLE `sf_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `sf_neighborhood`
--
ALTER TABLE `sf_neighborhood`
  MODIFY `neighborhood_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `sf_township`
--
ALTER TABLE `sf_township`
  MODIFY `township_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `sf_village`
--
ALTER TABLE `sf_village`
  MODIFY `village_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `sf_zone`
--
ALTER TABLE `sf_zone`
  MODIFY `zone_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tt_admin_post`
--
ALTER TABLE `tt_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tt_cell`
--
ALTER TABLE `tt_cell`
  MODIFY `cell_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tt_circle`
--
ALTER TABLE `tt_circle`
  MODIFY `circle_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tt_district`
--
ALTER TABLE `tt_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tt_locality`
--
ALTER TABLE `tt_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tt_neighborhood`
--
ALTER TABLE `tt_neighborhood`
  MODIFY `neighborhood_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tt_township`
--
ALTER TABLE `tt_township`
  MODIFY `township_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tt_village`
--
ALTER TABLE `tt_village`
  MODIFY `village_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tt_zone`
--
ALTER TABLE `tt_zone`
  MODIFY `zone_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `zb_admin_post`
--
ALTER TABLE `zb_admin_post`
  MODIFY `admin_post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `zb_cell`
--
ALTER TABLE `zb_cell`
  MODIFY `cell_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `zb_circle`
--
ALTER TABLE `zb_circle`
  MODIFY `circle_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `zb_district`
--
ALTER TABLE `zb_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `zb_locality`
--
ALTER TABLE `zb_locality`
  MODIFY `locality_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `zb_neighborhood`
--
ALTER TABLE `zb_neighborhood`
  MODIFY `neighborhood_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `zb_township`
--
ALTER TABLE `zb_township`
  MODIFY `township_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `zb_village`
--
ALTER TABLE `zb_village`
  MODIFY `village_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `zb_zone`
--
ALTER TABLE `zb_zone`
  MODIFY `zone_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
