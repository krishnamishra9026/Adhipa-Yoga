-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2021 at 06:23 PM
-- Server version: 5.7.33
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `najimfit_backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscriptions`
--

CREATE TABLE `newsletter_subscriptions` (
  `id` int(11) NOT NULL,
  `email` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter_subscriptions`
--

INSERT INTO `newsletter_subscriptions` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'er.krishna.mishra@gmail.com', 0, '2021-01-25 12:34:23', '0000-00-00 00:00:00'),
(2, 'er.krishna.mishra@gmail.com', 1, '2021-01-25 12:59:57', '0000-00-00 00:00:00'),
(3, 'hh876543hh@gmail.com', 0, '2021-01-25 15:34:53', '0000-00-00 00:00:00'),
(4, 'hh876543hh@gmail.com', 0, '2021-01-25 15:35:20', '0000-00-00 00:00:00'),
(5, 'er.krishna.mishra@gmail.com', 0, '2021-01-29 09:42:47', '0000-00-00 00:00:00'),
(6, 'er.krishna.mishra@gmail.com', 0, '2021-01-29 11:37:58', '0000-00-00 00:00:00'),
(7, 'Bessbebo23@gmail.com', 0, '2021-01-29 19:35:42', '0000-00-00 00:00:00'),
(8, 'mmmignon@aol.com', 0, '2021-02-06 09:24:32', '0000-00-00 00:00:00'),
(9, 'test@gmail.com', 0, '2021-02-07 00:36:23', '0000-00-00 00:00:00'),
(10, 'vj.hashem@gmail.com', 0, '2021-02-07 00:36:38', '0000-00-00 00:00:00'),
(11, 'mjdjtriplet@aol.com', 0, '2021-02-08 19:04:55', '0000-00-00 00:00:00'),
(12, 'ali@inagrab.com', 0, '2021-02-21 12:16:20', '0000-00-00 00:00:00'),
(13, 'reem2020ka@gmail.com', 0, '2021-02-22 23:06:48', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
