-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2023 at 06:36 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travian`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
CREATE TABLE IF NOT EXISTS `batches` (
  `id` int NOT NULL AUTO_INCREMENT,
  `batch_num` int NOT NULL,
  `order_id` int NOT NULL,
  `batch_end` time NOT NULL,
  `batch_total` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

DROP TABLE IF EXISTS `buyers`;
CREATE TABLE IF NOT EXISTS `buyers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `buyer_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `buyer_name`) VALUES
(1, 'محمود');

-- --------------------------------------------------------

--
-- Table structure for table `buyers_fake_name`
--

DROP TABLE IF EXISTS `buyers_fake_name`;
CREATE TABLE IF NOT EXISTS `buyers_fake_name` (
  `id` int NOT NULL AUTO_INCREMENT,
  `buyer_id` int NOT NULL,
  `fake_name` varchar(100) NOT NULL,
  `server_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `server_id` (`server_id`),
  KEY `buyer_id` (`buyer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `buyers_fake_name`
--

INSERT INTO `buyers_fake_name` (`id`, `buyer_id`, `fake_name`, `server_id`) VALUES
(1, 1, 'سيد', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `buyer_id` int NOT NULL,
  `server_id` int NOT NULL,
  `order_num` int NOT NULL,
  `quantity` int NOT NULL,
  `quantity_price` int NOT NULL,
  `curr` varchar(50) NOT NULL,
  `price_by_foreign` int NOT NULL,
  `price_by_pound` int NOT NULL,
  `payment_id` int NOT NULL,
  `order_status` int NOT NULL,
  `left_quantity` int NOT NULL,
  `exchange_rate` int NOT NULL,
  `player_money` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `buyer_id` (`buyer_id`),
  UNIQUE KEY `server_id` (`server_id`),
  UNIQUE KEY `payment_id` (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `player_id` int NOT NULL,
  `buyer_id` int NOT NULL,
  `total_pay` int NOT NULL,
  `payment_date` date NOT NULL,
  `payment_time` time NOT NULL,
  `payment_num` int NOT NULL,
  `payment_status` int NOT NULL,
  `tax` int NOT NULL,
  `total_after_tax` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `player_id` (`player_id`),
  UNIQUE KEY `buyer_id` (`buyer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `id` int NOT NULL AUTO_INCREMENT,
  `player_name` varchar(100) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(100) NOT NULL,
  `orders_total` int DEFAULT NULL,
  `payments_total` int DEFAULT NULL,
  `rank` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `player_name`, `email`, `password`, `orders_total`, `payments_total`, `rank`, `created_at`, `updated_at`) VALUES
(1, 'fathy', 'mohamed@gmail.com', '$2y$10$HawplWQxAk7dbYrhB04Z6OZ5CiVmMilpMJvFPF.iay/J/NZv3iJh.', 0, 0, 0, NULL, '2023-10-08 15:10:08'),
(5, 'mohamed', 'mohamed1@gmail.com', '$2y$10$IMtYWG2JzYPPsE57KRxYsu.0yUCHbuTiC41c///Esoyek0GbHPLU6', NULL, NULL, NULL, '2023-10-08 14:32:23', '2023-10-08 14:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `player_in_batch`
--

DROP TABLE IF EXISTS `player_in_batch`;
CREATE TABLE IF NOT EXISTS `player_in_batch` (
  `id` int NOT NULL AUTO_INCREMENT,
  `player_fake_name` int NOT NULL,
  `player_id` int NOT NULL,
  `batch_id` int NOT NULL,
  `sends_per_players` int NOT NULL,
  `total_sends_per_player` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `batch_id` (`batch_id`),
  KEY `player_id` (`player_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

DROP TABLE IF EXISTS `servers`;
CREATE TABLE IF NOT EXISTS `servers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `server_name` varchar(100) NOT NULL,
  `server_start_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`id`, `server_name`, `server_start_date`) VALUES
(1, 'سيرفر 1', '2023-09-20');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batches`
--
ALTER TABLE `batches`
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `buyers_fake_name`
--
ALTER TABLE `buyers_fake_name`
  ADD CONSTRAINT `buyer_id` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`id`),
  ADD CONSTRAINT `server_id` FOREIGN KEY (`server_id`) REFERENCES `servers` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `buyer_id2` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`id`),
  ADD CONSTRAINT `payment_id2` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `server_id2` FOREIGN KEY (`server_id`) REFERENCES `servers` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `buyer_id1` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`id`),
  ADD CONSTRAINT `player_id1` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`);

--
-- Constraints for table `player_in_batch`
--
ALTER TABLE `player_in_batch`
  ADD CONSTRAINT `batch_id` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`),
  ADD CONSTRAINT `player_id` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
