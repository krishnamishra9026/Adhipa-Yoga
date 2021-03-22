-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 08:25 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_classes` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `validity` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on',
  `workout_days` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(12234) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_accept_subscriptions` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `no_of_classes`, `sort`, `price`, `validity`, `description`, `status`, `workout_days`, `image`, `is_accept_subscriptions`, `created_at`, `updated_at`) VALUES
(1, 'Fitness Freaks', 5, 1, 499.00, 30, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'on', '1,2,3,4,5', '16009576871.jpg', 1, '2020-08-19 01:02:28', '2021-03-22 13:38:19'),
(2, 'Fitnes Junkie', 0, 2, 499.00, 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'on', '1,2,3,4,5,6', '1600959216download.png', 1, '2020-08-19 01:32:34', '2021-01-24 09:35:54'),
(3, 'Fitness Forger', 0, 3, 199.00, 15, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'on', '1,3,5,7', '1600959300165_Forge-Fitness-adjusted.jpg', 1, '2020-08-19 01:37:15', '2020-12-31 06:09:32'),
(4, 'Center Package', 0, 1, 699.00, 22, 'This is for those who like challenges and face them head on like a beast', 'on', '3,6', NULL, 1, '2021-01-12 02:31:57', '2021-01-12 02:31:57'),
(5, 'Teaching a Yoga', 28, 2, 25.00, 100, 'Class Phase I', 'on', '1,3,5', '1616441073Rectangle 374-1@2x.png', 1, '2021-03-22 13:50:22', '2021-03-22 13:54:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
