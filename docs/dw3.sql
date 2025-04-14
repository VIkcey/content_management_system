-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2025 at 08:09 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `summary`, `content`, `created`, `category_id`, `member_id`, `image_id`, `published`) VALUES
(13, 'Exploring Tokyo\'s Street Food', 'Dive into the vibrant world of Tokyo\'s street food and hidden culinary gems', 'Dive into the vibrant world of Tokyo\'s street food and hidden culinary gems', '2025-04-14 04:42:43', 5, 5, 42, 1),
(14, 'Sunrise at Angkor Wat', 'Experience the magical sunrise over Cambodia\'s iconic Angkor Wat temple', 'Experience the magical sunrise over Cambodia\'s iconic Angkor Wat temple', '2025-04-14 04:44:46', 5, 5, 41, 1),
(15, 'Hiking Through the Himalayas11', 'A breathtaking trek across the roof of the world, featuring Nepal’s rugged beauty11', 'A breathtaking trek across the roof of the world, featuring Nepal’s rugged beauty11', '2025-04-14 04:46:20', 9, 5, 40, 1);

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
(15, 'A Weekend in Rome', 'Italy', 1, 0, 1, '67fc519602af2-rome.jpg'),
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `file`, `alt`) VALUES
(40, '1744606470_pexels-pixabay-237272.jpg', ''),
(41, '1744606867_pexels-rpnickson-2559941.jpg', ''),
(42, '1744606930_pexels-pixabay-357756.jpg', '');

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
