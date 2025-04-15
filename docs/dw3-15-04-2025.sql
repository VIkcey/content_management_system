-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2025 at 12:17 PM
-- Server version: 8.2.0
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dw3`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int NOT NULL,
  `member_id` int NOT NULL,
  `image_id` int DEFAULT NULL,
  `published` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  KEY `category_id` (`category_id`),
  KEY `author_id` (`member_id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `summary`, `content`, `created`, `category_id`, `member_id`, `image_id`, `published`) VALUES
(13, 'Exploring Tokyo\'s Street Food', 'Dive into the vibrant world of Tokyo\'s street food and hidden culinary gems', 'Dive into the vibrant world of Tokyo\'s street food and hidden culinary gems', '2025-04-14 04:42:43', 5, 5, 42, 1),
(14, 'Sunrise at Angkor Wat', 'Experience the magical sunrise over Cambodia\'s iconic Angkor Wat temple', 'Experience the magical sunrise over Cambodia\'s iconic Angkor Wat temple', '2025-04-14 04:44:46', 5, 5, 41, 1),
(15, 'Hiking Through the Himalayas11', 'A breathtaking trek across the roof of the world, featuring Nepal’s rugged beauty11', 'A breathtaking trek across the roof of the world, featuring Nepal’s rugged beauty11', '2025-04-14 04:46:20', 5, 5, 40, 1),
(16, 'Road Trip Across the USA', 'Road Trip Across the USA', 'Road Trip Across the USA', '2025-04-15 00:46:17', 7, 5, 43, 1),
(17, 'Cultural Gems of Guatemala', 'Cultural Gems of Guatemala', 'Cultural Gems of Guatemala', '2025-04-15 00:47:11', 7, 5, 44, 1),
(18, 'Exploring Patagonia\'s Wild Beauty', 'Exploring Patagonia\'s Wild Beauty', 'Exploring Patagonia\'s Wild Beauty', '2025-04-15 00:48:17', 7, 5, 45, 1),
(19, 'Safari Adventure in Kenya', 'Safari Adventure in Kenya', 'Safari Adventure in Kenya', '2025-04-15 00:53:35', 8, 5, 46, 1),
(20, 'Exploring the Markets of Marrakech', 'Exploring the Markets of Marrakech', 'Exploring the Markets of Marrakech', '2025-04-15 00:54:12', 8, 5, 47, 1),
(21, 'Journey to Table Mountain, South Africa', 'Journey to Table Mountain, South Africa', 'Journey to Table Mountain, South Africa', '2025-04-15 00:55:42', 8, 5, 48, 1),
(22, 'Sydney Opera House at Sunset', 'Sydney Opera House at Sunset', 'Sydney Opera House at Sunset', '2025-04-15 01:01:20', 9, 5, 49, 1),
(23, 'Exploring the Great Barrier Reef', 'Exploring the Great Barrier Reef', 'Exploring the Great Barrier Reef', '2025-04-15 01:02:50', 9, 5, 50, 1),
(24, 'Hiking in the Australian Outback', 'Hiking in the Australian Outback', 'Hiking in the Australian Outback', '2025-04-15 01:03:47', 9, 5, 51, 1),
(25, 'Glaciers and Icebergs of Antarctica', 'Glaciers and Icebergs of Antarctica', 'Glaciers and Icebergs of Antarctica', '2025-04-15 01:06:48', 10, 5, 52, 1),
(26, 'Penguin Colonies Up Close', 'Penguin Colonies Up Close', 'Penguin Colonies Up Close', '2025-04-15 01:07:27', 10, 5, 53, 1),
(27, 'Scientific Expeditions to the South Pole', 'Scientific Expeditions to the South Pole', 'Scientific Expeditions to the South Pole', '2025-04-15 01:11:16', 10, 5, 54, 1),
(28, 'Discovering Ancient Petra, Jordan', 'Discovering Ancient Petra, Jordan', 'Discovering Ancient Petra, Jordan', '2025-04-15 01:15:21', 11, 5, 55, 1),
(29, 'Skylines and Souks of Dubai', 'Skylines and Souks of Dubai', 'Skylines and Souks of Dubai', '2025-04-15 01:16:15', 11, 5, 56, 1),
(30, 'The Spiritual Atmosphere of Jerusalem', 'The Spiritual Atmosphere of Jerusalem', 'The Spiritual Atmosphere of Jerusalem', '2025-04-15 01:17:36', 11, 5, 57, 1),
(31, 'Relaxing on the Beaches of Barbados', 'Relaxing on the Beaches of Barbados', 'Relaxing on the Beaches of Barbados', '2025-04-15 01:24:28', 12, 5, 58, 1),
(32, 'Colorful Streets of Old Havana', 'Colorful Streets of Old Havana', 'Colorful Streets of Old Havana', '2025-04-15 01:27:19', 12, 5, 59, 1),
(33, 'Snorkeling Adventures in the Bahamas', 'Snorkeling Adventures in the Bahamas', 'Snorkeling Adventures in the Bahamas', '2025-04-15 01:28:19', 12, 5, 60, 1),
(34, 'Island Hopping in Fiji', 'Island Hopping in Fiji', 'Island Hopping in Fiji', '2025-04-15 01:35:27', 13, 5, 61, 1),
(35, 'Exploring the Beauty of Bora Bora', 'Exploring the Beauty of Bora Bora', 'Exploring the Beauty of Bora Bora', '2025-04-15 01:37:47', 13, 5, 62, 1),
(36, 'Wildlife and Nature of New Zealand', 'Wildlife and Nature of New Zealand', 'Wildlife and Nature of New Zealand', '2025-04-15 01:45:04', 13, 5, 63, 1),
(37, 'Wandering Through Parisian Streets', 'Wandering Through Parisian Streets', 'Wandering Through Parisian Streets', '2025-04-15 01:50:44', 6, 5, 64, 1),
(38, 'Adventures in the Swiss Alps', 'Adventures in the Swiss Alps', 'Adventures in the Swiss Alps', '2025-04-15 01:51:27', 6, 5, 65, 1),
(39, 'Venetian Canals and Culture', 'Venetian Canals and Culture', 'Venetian Canals and Culture', '2025-04-15 01:53:32', 6, 5, 66, 1),
(40, 'Hidden Beaches of Bali: Crystal Bay', 'Hidden Beaches of Bali: Crystal Bay', 'Hidden Beaches of Bali: Crystal Bay', '2025-04-15 01:59:23', 14, 5, 67, 1),
(41, 'Exploring Balangan Beach', 'Exploring Balangan Beach', 'Exploring Balangan Beach', '2025-04-15 02:00:02', 14, 5, 68, 1),
(42, 'Dreamland Beach Escapes', 'Dreamland Beach Escapes', 'Dreamland Beach Escapes', '2025-04-15 02:01:16', 14, 5, 69, 1),
(43, 'Sunrise at the Colosseum', 'Sunrise at the Colosseum', 'Sunrise at the Colosseum', '2025-04-15 02:08:27', 15, 5, 70, 1),
(44, 'Strolling Through Trastevere', 'Strolling Through Trastevere', 'Strolling Through Trastevere', '2025-04-15 02:09:23', 15, 5, 71, 1),
(45, 'The Charm of Roman Cafés', 'The Charm of Roman Cafés', 'The Charm of Roman Cafés', '2025-04-15 02:10:23', 15, 5, 72, 1),
(46, 'Journey to Machu Picchu', 'Journey to Machu Picchu', 'Journey to Machu Picchu', '2025-04-15 02:12:52', 16, 5, 73, 1),
(47, 'Andes Mountain Trekking Experience', 'Andes Mountain Trekking Experience', 'Andes Mountain Trekking Experience', '2025-04-15 02:13:23', 16, 5, 74, 1),
(48, 'Exploring Sacred Valley Wonders', 'Exploring Sacred Valley Wonders', 'Exploring Sacred Valley Wonders', '2025-04-15 02:17:05', 16, 5, 75, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `navigation` tinyint(1) NOT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `is_popular` tinyint(1) DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `navigation`, `is_featured`, `is_popular`, `image`) VALUES
(5, 'Asia', 'Temples, street food & ancient wonders', 1, 1, 0, '67fc4fdd6940c-asia.jpg'),
(6, 'Europe', 'Historic cities & stunning architecture', 1, 1, 1, '67fc500908a0d-europe.jpg'),
(7, 'Americas', 'Mountains, deserts & coastlines', 1, 1, 0, '67fc501d56b74-americas.jpg'),
(8, 'Africa', 'Safaris, deserts & ancient civilizations', 1, 0, 0, '67fc502cb7065-africa.png'),
(9, 'Australia', 'Outback adventures & stunning reefs', 1, 0, 0, '67fc504a39635-australia.jpg'),
(10, 'Antarctica', 'Icebergs, penguins & untouched wilderness', 1, 0, 0, '67fc505d19bec-antarctica.jpg'),
(11, 'Middle East', 'Desert landscapes & rich heritage', 1, 0, 0, '67fc50b8e9c68-middle-east.jpg'),
(12, 'Caribbean', 'Island vibes & turquoise waters', 1, 0, 0, '67fc50cfa003b-caribbean.jpg'),
(13, 'Pacific Islands', 'Tropical paradises & coral atolls', 1, 0, 0, '67fc516eda4b4-pacific.jpeg'),
(14, 'Hidden Beaches of Bali', 'Indonesia', 1, 0, 1, '67fc517f9078b-bali.jpg'),
(15, 'A Weekend in Rome', 'Italy', 1, 1, 1, '67fc519602af2-rome.jpg'),
(16, 'Hiking the Inca Trail', 'Peru', 1, 0, 1, '67fc51d0cdd78-Top-10-Trekking-Places-of-Himalayas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `file`, `alt`) VALUES
(40, '1744606470_pexels-pixabay-237272.jpg', ''),
(41, '1744606867_pexels-rpnickson-2559941.jpg', ''),
(42, '1744606930_pexels-pixabay-357756.jpg', ''),
(43, '67fdac5921ae6-pexels-photo-2422256.jpeg', ''),
(44, '67fdac8f91f4c-pexels-photo-573299.jpeg', ''),
(45, '67fdacd178b52-pexels-photo-237273.jpeg', ''),
(46, '67fdae0f6bfd1-amazing-animal-beautiful-beautifull.jpg', ''),
(47, '67fdae344aeb6-pexels-photo-1761279.jpeg', ''),
(48, '67fdae8e2b726-pexels-photo-167684.jpeg', ''),
(49, '67fdafe0cb10f-pexels-photo-2193300.jpeg', ''),
(50, '67fdb03a88023-pexels-photo-27406.jpg', ''),
(51, '67fdb073c6ff4-pexels-photo-267049.jpeg', ''),
(52, '67fdb12891e60-pexels-photo-1820049.jpeg', ''),
(53, '67fdb14f89303-pexels-photo-2265876.jpeg', ''),
(54, '67fdb2345dec7-pexels-photo-2440299.jpeg', ''),
(55, '67fdb3295058c-pexels-photo-17883736.jpeg', ''),
(56, '67fdb35fcfa88-pexels-photo-1309644.jpeg', ''),
(57, '67fdb3b0c02d1-pexels-photo-1603650.jpeg', ''),
(58, '67fdb54c99b5a-pexels-photo-1371360.jpeg', ''),
(59, '67fdb5f7302d4-pexels-photo-752525.jpeg', ''),
(60, '67fdb633a1783-pexels-photo-457882.jpeg', ''),
(61, '67fdb7df69bb9-pexels-photo-457882.jpeg', ''),
(62, '67fdb86b39b5c-pexels-photo-2556713.jpeg', ''),
(63, '67fdba204e40e-pexels-photo-18915002.jpeg', ''),
(64, '67fdbb74a25d0-pexels-photo-532263.jpeg', ''),
(65, '67fdbb9f510d9-pexels-photo-753626.jpeg', ''),
(66, '67fdbc1cea081-pexels-photo-221457.jpeg', ''),
(67, '67fdbd7b2acce-pexels-photo-753626.jpeg', ''),
(68, '67fdbda2bdd45-pexels-photo-132037.jpeg', ''),
(69, '67fdbdec71c94-pexels-photo-2365894.jpeg', ''),
(70, '67fdbf9b8e00f-pexels-photo-338515.jpeg', ''),
(71, '67fdbfd399e0d-pexels-photo-531602.jpeg', ''),
(72, '67fdc00f6e6c9-pexels-photo-1797162.jpeg', ''),
(73, '67fdc0a40592b-pexels-photo-1531660.jpeg', ''),
(74, '67fdc0c38546e-pexels-photo-325807.jpeg', ''),
(75, '67fdc1a148ed7-pexels-photo-2387873.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int NOT NULL AUTO_INCREMENT,
  `forename` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picture` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `forename`, `surname`, `email`, `password`, `joined`, `picture`) VALUES
(1, 'Ivy', 'Stone', 'ivy@eg.link', '$2y$10$X1EJuYOiDN7s1qV/g39RM.d7uML0oO9eUFLA0LyCk6uliuRFM6anq', '2021-01-26 17:04:23', 'ivy.jpg'),
(2, 'Luke', 'Wood', 'luke@eg.link', 'saq8-2f2k-3nv7-fa4k', '2021-01-26 17:15:18', NULL),
(3, 'Emiko', 'Ito', 'emi@eg.link', 'sk3r-vd92-3vn1-exm2', '2021-02-12 15:53:47', 'emi.jpg'),
(4, 'Kaka', 'Kaka', 'kaka@gmail.com', '$2y$10$kEtHQnvk/Jx.CgAM.YFS8ORA5LAj2Ff4yxLVwh4ESNMndh4Fk/ozS', '2025-03-29 13:22:21', NULL),
(5, 'kaka133', 'kaka133', 'kaka1@gmail.com33', '$2y$10$FG8MhtibqDaBJ/T2ZKQxNOtF.doaf6HngMx/4L3O0W0UyOBu3LmgO', '2025-03-29 13:57:42', NULL),
(6, 'Jack211', 'Rose211', 'jackrose@gmail.com', '$2y$10$EhCxSWJMbICjoBwGydKXM.egdOuaTneaUlqZZaE5aYPlGi6vOVjMi', '2025-04-08 00:04:32', 'picture_67f593c2ea1f9.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `category_exists` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `image_exists` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `member_exists` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
