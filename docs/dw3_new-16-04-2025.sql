-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2025 at 02:49 PM
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
-- Database: `dw3_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(22, 'Sydney Opera House at Sunset', 'Sydney Opera House at Sunset', 'The ideal time to visit the Sydney Opera House is during the non-peak season of September and October, as the weather is mild and the crowd is relatively less. Crowds are lesser in November as well but the weather may be a little chilly. The holiday season starts in December and the crowds are much larger at this time.', '2025-04-15 01:01:20', 9, 5, 49, 1),
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
(48, 'Exploring Sacred Valley Wonders', 'Exploring Sacred Valley Wonders', 'Exploring Sacred Valley Wonders', '2025-04-15 02:17:05', 16, 5, 75, 1),
(49, 'Sanssouci—Fredrick the Great’s Palace', 'The Palace of Sanssouci, located in Potsdam, Germany, was the summer retreat of Fredrick the Great to get away from the pomp and ceremony of Berlin, the capital of Prussia.', 'Fredrick the Great was the monarch of Prussia from 1740 until 1786.  He is known as both a capable monarch, but more so as a brilliant military leader.  His extensive battlefield experience and writings gained him fame as an influential military theory and doctrine figure during his reign and afterward.  His favorite topics were strategy, tactics, mobility and logistics.\r\n\r\nHe also believed in enlightened absolutism—trying to distinguish his rule from ordinary royal rulers to rule for the well-being of his subjects.  Among his accomplishments were modernizing the civil service in Prussia, reforming the judicial system, and allowing freedom of the press and literature.\r\n\r\nWhen Fredrick came to the throne at 28 in 1740, Prussia was the 12th largest country in Europe, but had the 4th largest army (France, Russia and Austria were larger) and a staggering 86% of Prussia’s budget was devoted to funding his army.  Fredrick doubled the size of his army and fought a series of battles known as the Silesian Wars (there were 3) against Austria.  \r\n\r\nHis soldiers were highly disciplined and won several decisive battles against Austria.  The result of these conflicts gained control of the territory of Silesia and the Saxon capital of Dresden and he annexed these lands into his Kingdom of Prussia.  After 1745, Fredrick became known as “the Great” due to his success against the larger Austrian army.  So influential was Fredrick in military theory, often as a result to personally leading his men in battle and using his 2 favorite tactics of speed of march and speed of fire, that his writings (all were written in French) became the model for other national armies such as Russia and France.  His structure of military organization; the strict training regimens he demanded of his leaders and soldiers; and the autonomy he gave his commanders were the standard for the best armies of the world in the late 1700s and became the model used later by the German General Staff for WW I and WW II.\r\n\r\nFredrick the Great was ambitious, ruthless, a confident military genius who often defeated larger armies he fought and served as an enlightened monarch in an era when the various rulers of Europe vied for power and wealth.  He doubled the size of his kingdom and eventually lost half of his army during the constant wars he either started or was drawn into to defend his kingdom and war territory gains.\r\n\r\nHis legacy is enduring yet controversial.\r\n\r\nSanssouci\r\n\r\nThe exteriors of the Sanssouci Palace are quite contrasting.\r\n\r\nOn the North side of the exterior of Sanssouci Palace, there is a double row of 88 Corinthian collonades in a half circle.  Here are 3 photos of the north exterior, which is majestic and commanding and designed to impress visitors to his palace:', '2025-04-16 05:28:30', 6, 7, 77, 1),
(50, 'New York', 'A breathtaking trek across the roof of the world, featuring Nepal’s rugged beauty', 'A breathtaking trek across the roof of the world, featuring Nepal’s rugged beauty', '2025-04-16 14:12:31', 6, 5, 78, 1),
(51, 'Germany', 'A breathtaking trek across the roof of the world, featuring Nepal’s rugged beauty', 'A breathtaking trek across the roof of the world, featuring Nepal’s rugged beauty', '2025-04-16 14:25:11', 13, 10, 79, 1),
(52, 'Sweden', 'A breathtaking trek across the roof of the world, featuring Nepal’s rugged beauty', 'A breathtaking trek across the roof of the world, featuring Nepal’s rugged beauty', '2025-04-16 14:25:47', 13, 10, 80, 1),
(53, 'Spain', 'A breathtaking trek across the roof of the world, featuring Nepal’s rugged beauty', 'A breathtaking trek across the roof of the world, featuring Nepal’s rugged beauty', '2025-04-16 14:27:38', 13, 10, 81, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navigation` tinyint(1) NOT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `is_popular` tinyint(1) DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `navigation`, `is_featured`, `is_popular`, `image`) VALUES
(5, 'Asia', 'Temples, street food & ancient wonders', 1, 1, 0, '67fc4fdd6940c-asia.jpg'),
(6, 'Europe', 'Historic cities & stunning architecture', 1, 1, 1, '67fc500908a0d-europe.jpg'),
(7, 'Americas', 'Mountains, deserts & coastlines', 1, 1, 0, '67fc501d56b74-americas.jpg'),
(8, 'Africa', 'Safaris, deserts & ancient civilizations', 1, 1, 1, '67ffa2b174d6a-pexels-photo-1531660.jpeg'),
(9, 'Australia', 'Outback adventures & stunning reefs', 1, 0, 0, '67fc504a39635-australia.jpg'),
(10, 'Antarctica', 'Icebergs, penguins & untouched wilderness', 1, 0, 0, '67fc505d19bec-antarctica.jpg'),
(11, 'Middle East', 'Desert landscapes & rich heritage', 1, 0, 0, '67fc50b8e9c68-middle-east.jpg'),
(12, 'Caribbean', 'Island vibes & turquoise waters', 1, 0, 0, '67fc50cfa003b-caribbean.jpg'),
(13, 'Pacific Islands', 'Tropical paradises & coral atolls', 1, 1, 0, '67fc516eda4b4-pacific.jpeg'),
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
  `file` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(75, '67fdc1a148ed7-pexels-photo-2387873.jpeg', ''),
(76, '67ff3ffe043da-europe.jpg', ''),
(77, '1744808038_europe.jpg', ''),
(78, '67ffbacf7c0e0-pexels-photo-532263.jpeg', ''),
(79, '67ffbdc7d2fab-pexels-photo-532263.jpeg', ''),
(80, '67ffbdeba48e0-pexels-photo-27406.jpg', ''),
(81, '67ffbe5aacf39-pexels-photo-17883736.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int NOT NULL AUTO_INCREMENT,
  `forename` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picture` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `forename`, `surname`, `email`, `password`, `joined`, `picture`) VALUES
(1, 'Ivy', 'Stone', 'ivy@eg.link', '$2y$10$X1EJuYOiDN7s1qV/g39RM.d7uML0oO9eUFLA0LyCk6uliuRFM6anq', '2021-01-26 17:04:23', 'ivy.jpg'),
(2, 'Luke', 'Wood', 'luke@eg.link', 'saq8-2f2k-3nv7-fa4k', '2021-01-26 17:15:18', NULL),
(3, 'Emiko', 'Ito', 'emi@eg.link', 'sk3r-vd92-3vn1-exm2', '2021-02-12 15:53:47', 'emi.jpg'),
(4, 'Kaka', 'Kaka', 'kaka@gmail.com', '$2y$10$kEtHQnvk/Jx.CgAM.YFS8ORA5LAj2Ff4yxLVwh4ESNMndh4Fk/ozS', '2025-03-29 13:22:21', NULL),
(5, 'John one', 'Deo two', 'johndeo@gmail.com', '$2y$10$6TAOM9fwM/jpue20fSs0X.ifA0Lvdx6MFv9WNTuNbCFrdLpBMYfz6', '2025-03-29 13:57:42', 'picture_67ffb7acdd23d.jpeg'),
(6, 'Jack', 'Rose', 'jackrose@gmail.com', '$2y$10$EhCxSWJMbICjoBwGydKXM.egdOuaTneaUlqZZaE5aYPlGi6vOVjMi', '2025-04-08 00:04:32', 'picture_67ffa10a572a9.jpeg'),
(7, 'riddhi', 'r', 'riddhi@gmail.com', '$2y$10$6TAOM9fwM/jpue20fSs0X.ifA0Lvdx6MFv9WNTuNbCFrdLpBMYfz6', '2025-04-16 03:46:15', 'picture_67ffa3c6422ba.jpg'),
(8, 'samriddhi', 'S', 'abc@gmail.com', '$2y$10$/ek.zoiiNJQ3VpvZlt0hq.aBfi.IRwyYSoKaSN3XCBc7Xymbku4JG', '2025-04-16 12:08:57', NULL),
(9, 'simran', 'kaur', 'simran@gmial.com', '$2y$10$VaivU9tLrASNS6zAoL646er93nTA5I47M4wD0/Z78Y9JUQWPljy9C', '2025-04-16 12:11:09', NULL),
(10, 'Lucas', 'Lucas', 'lucas@gmail.com', '$2y$10$JdinAJSfxytYnY9SgxkQmulcG4oJMpIx/ARPnQNPBOu/whHY7IwRG', '2025-04-16 14:22:29', 'picture_67ffbd9de6a93.jpeg');

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
