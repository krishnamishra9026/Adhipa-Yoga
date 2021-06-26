-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2021 at 12:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `content`) VALUES
(1, 'About us content ............11');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 13, 'ffh f f fj jfj', '2021-03-23 14:09:34', '2021-03-23 14:09:34'),
(2, 14, 'sdg', '2021-03-24 12:54:54', '2021-03-24 12:54:54'),
(3, 15, 'Sonam Mishra', '2021-03-24 13:07:00', '2021-03-24 13:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) NOT NULL,
  `title` varchar(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(111) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `name`, `description`, `image`, `created_at`, `updated_at`, `status`) VALUES
(2, 'Blog 1', 'Name 1', 'Blog 2 Discription1', NULL, '2021-04-03 17:40:15', '2021-04-03 12:10:15', 'off'),
(4, 'Blog 2', 'Blog name 2', 'Blog name 2 Description', '1616919463kaylee-garrett-GaprWyIw66o-unsplash@2x.png', '2021-03-28 08:17:43', '2021-03-28 02:47:43', 'off'),
(5, 'Blog 2', 'Blog name 2', 'Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet.', NULL, '2021-04-03 17:26:21', '2021-04-03 11:56:21', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) NOT NULL,
  `title` varchar(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(111) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title`, `name`, `description`, `image`, `image2`, `image3`, `image4`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Ho We Are ?', 'WHAT WE DO', 'Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may seem like \"simply standing,\" but there is a ton going on.', '16174727161.jpg', '16175227352.jpg', '16175231163.jpg', '16175227354.jpg', '2021-04-04 08:27:53', '2021-04-04 02:57:53', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `desc` text DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `phone_no` varchar(55) NOT NULL,
  `say_hello` varchar(55) NOT NULL,
  `open_timting` varchar(150) NOT NULL,
  `image` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `insta` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `title`, `name`, `desc`, `address`, `phone_no`, `say_hello`, `open_timting`, `image`, `image2`, `image3`, `facebook`, `twitter`, `insta`, `created_at`, `updated_at`) VALUES
(1, 'GET IN TOUCH', 'Contact us', 'Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may', 'Central Park New York, USA', '(513) 352-3209', 'hello@foxeyoga.com', 'Monday - Saturday\r\n10:00 am - 22:00 pm', '1618759618600x600-1.jpg', '1618759618600x600-2.jpg', '1618759802600x600-3.jpg', '22', 'ee', 'ee', NULL, '2021-04-18 10:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `image_popup` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(121) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `description`, `image`, `image_popup`, `created_at`, `updated_at`, `status`) VALUES
(2, 'Gallery 2', NULL, '1612079457carousel3.jpg', '1612079457carousel3.jpg', '2021-01-31 02:20:57', '2021-01-31 02:20:57', 'off'),
(3, 'Imge 15', NULL, '161631019615.jpg', '161631019715.jpg', '2021-03-21 01:33:17', '2021-03-21 01:33:17', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int(10) UNSIGNED NOT NULL,
  `weekday` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `weekday`, `start_time`, `end_time`, `created_at`, `updated_at`, `deleted_at`, `teacher_id`, `class_id`) VALUES
(1, 3, '08:30:00', '10:30:00', '2021-04-10 06:25:10', '2021-04-10 06:32:17', NULL, 3, 1),
(2, 5, '06:00:00', '13:00:00', '2021-04-30 12:12:34', '2021-04-30 12:12:34', NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `main_services`
--

CREATE TABLE `main_services` (
  `id` int(11) NOT NULL,
  `class` enum('Beginer','Advanced','Private') NOT NULL,
  `heading` varchar(250) NOT NULL,
  `desc` text DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_services`
--

INSERT INTO `main_services` (`id`, `class`, `heading`, `desc`, `img`, `status`, `updated_at`) VALUES
(1, 'Beginer', 'The Most Important Yoga Posesfor Beginners Classes', 'Mountain Pose is the base for all standing poses it gives\r\nyou a sense of how to ground in to your feet and feel the earth below you. Mountain pose may seem like \"simply standing,\" but there is a ton going on.', '16186874582.jpg', 1, '2021-04-17 13:54:18'),
(2, 'Advanced', 'Get ready to flow, breathe and sweat it out', 'Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may seem like \"simply standing,\" but there is a ton going on. Hello world', '16186873741.jpg', 1, '2021-04-18 03:37:49'),
(3, 'Private', 'Private Yoga Classes specially designed for your.', 'Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may seem like \"simply standing,\" but there is a ton going on.', '16186874823.jpg', 1, '2021-04-17 13:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_04_15_191331679173_create_1555355612601_permissions_table', 1),
(3, '2019_04_15_191331731390_create_1555355612581_roles_table', 1),
(4, '2019_04_15_191331779537_create_1555355612782_users_table', 1),
(5, '2019_04_15_191332603432_create_1555355612603_permission_role_pivot_table', 1),
(6, '2019_04_15_191332791021_create_1555355612790_role_user_pivot_table', 1),
(7, '2019_04_15_191441675085_create_1555355681975_products_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_02_13_000004_create_lessons_table', 2),
(10, '2020_02_13_000005_create_school_classes_table', 2),
(11, '2020_02_13_000008_add_relationship_fields_to_lessons_table', 2),
(12, '2020_02_13_000009_add_relationship_fields_to_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscriptions`
--

CREATE TABLE `newsletter_subscriptions` (
  `id` int(11) NOT NULL,
  `email` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter_subscriptions`
--

INSERT INTO `newsletter_subscriptions` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'er.krishna.mishra@gmail.com', 0, NULL, NULL),
(2, 'er.krishna.mishra@gmail.com', 0, NULL, NULL),
(3, 'er.krishna.mishra@gmail.com', 0, NULL, NULL),
(4, 'shashank.123.shukla@gmail.com', 0, NULL, NULL),
(5, 'er.krishna.mishra@gmail.com', 0, NULL, NULL);

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
  `workout_days` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(12234) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_accept_subscriptions` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `no_of_classes`, `sort`, `price`, `validity`, `description`, `status`, `workout_days`, `image`, `is_accept_subscriptions`, `created_at`, `updated_at`) VALUES
(1, 'Teaching a Yoga Class Phase I', 28, 1, 26.00, 30, 'Teaching a Yoga Class Phase I', 'on', '1,3,4', '1617390690Rectangle 374.png', 1, '2020-08-19 01:02:28', '2021-04-03 05:26:35'),
(6, 'Teaching a Yoga Class Phase I', 28, 1, 26.00, 30, 'Teaching a Yoga Class Phase I', 'on', '1,3,5', '1617390690Rectangle 374.png', 1, '2020-08-19 01:02:28', '2021-04-02 13:41:31'),
(7, 'Teaching a Yoga Class Phase I', 28, 1, 26.00, 30, 'Teaching a Yoga Class Phase I', 'on', '1,3,5', '1617390690Rectangle 374.png', 1, '2020-08-19 01:02:28', '2021-04-02 13:41:31'),
(8, 'aFAFAF', 3, 2, 550.00, 55, 'gasg', 'on', '3,4', NULL, 1, '2021-05-01 02:06:31', '2021-05-01 02:06:31'),
(9, 'aFAFAF', 3, 2, 550.00, 55, 'gasg', 'on', '3,4', NULL, 1, '2021-05-01 02:07:31', '2021-05-01 02:07:31'),
(10, 'aFAFAF', 3, 2, 550.00, 55, 'gasg', 'on', '3,4', NULL, 1, '2021-05-01 02:08:19', '2021-05-01 02:08:19'),
(11, 'aFAFAF', 3, 2, 550.00, 55, 'gasg', 'on', '3,4', NULL, 1, '2021-05-01 02:09:38', '2021-05-01 02:09:38'),
(12, 'aFAFAF', 3, 2, 550.00, 55, 'gasg', 'on', '3,4', NULL, 1, '2021-05-01 02:10:48', '2021-05-01 02:10:48'),
(13, 'aFAFAF', 3, 2, 550.00, 55, 'gasg', 'on', '3,4', NULL, 1, '2021-05-01 02:10:54', '2021-05-01 02:10:54'),
(14, 'aFAFAF', 3, 2, 550.00, 55, 'gasg', 'on', '3,4', NULL, 1, '2021-05-01 02:11:04', '2021-05-01 02:11:04'),
(15, 'aFAFAF', 3, 2, 550.00, 55, 'gasg', 'on', '3,4', NULL, 1, '2021-05-01 02:12:22', '2021-05-01 02:12:22'),
(16, 'aFAFAF', 3, 2, 550.00, 55, 'gasg', 'on', '3,4', NULL, 1, '2021-05-01 02:12:42', '2021-05-01 02:12:42'),
(17, 'aFAFAF', 3, 2, 550.00, 55, 'gasg', 'on', '3,4', NULL, 1, '2021-05-01 02:12:52', '2021-05-01 02:12:52'),
(18, 'aFAFAF', 3, 2, 550.00, 55, 'gasg', 'on', '3,4', NULL, 1, '2021-05-01 02:13:00', '2021-05-01 02:13:00'),
(19, 'aFAFAF', 3, 2, 550.00, 55, 'gasg', 'on', '3,4', NULL, 1, '2021-05-01 02:13:13', '2021-05-01 02:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `package_timings`
--

CREATE TABLE `package_timings` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `startTime` time DEFAULT NULL,
  `endTime` time DEFAULT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_timings`
--

INSERT INTO `package_timings` (`id`, `package_id`, `startTime`, `endTime`, `link`) VALUES
(1, 19, '00:00:01', '00:00:01', 'https://getdatepicker.com/4/Options/'),
(2, 19, '00:00:02', '00:00:03', 'https://getdatepicker.com/4/Options/'),
(9, 13, '00:00:02', '00:00:02', 'https://stackoverflow.com/questions/40122633/if-else-condition-in-blade-file-laravel-5-3'),
(10, 13, '00:00:01', '00:00:03', 'https://stackoverflow.com/questions/40122633/if-else-condition-in-blade-file-laravel-5-3'),
(27, 18, '02:00:00', '02:00:00', 'https://laracasts.com/discuss/channels/eloquent/non-static-method-illuminatedatabaseeloquentmodelupdate-should-not-be-called-statically'),
(28, 18, '03:00:00', '02:00:00', 'https://laracasts.com/discuss/channels/eloquent/non-static-method-illuminatedatabaseeloquentmodelupdate-should-not-be-called-statically');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(2, 'permission_create', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(3, 'permission_edit', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(4, 'permission_show', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(5, 'permission_delete', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(6, 'permission_access', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(7, 'role_create', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(8, 'role_edit', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(9, 'role_show', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(10, 'role_delete', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(11, 'role_access', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(12, 'user_create', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(13, 'user_edit', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(14, 'user_show', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(15, 'user_delete', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(16, 'user_access', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(17, 'product_create', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(18, 'product_edit', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(19, 'product_show', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(20, 'product_delete', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(21, 'product_access', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21);

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `content`) VALUES
(1, 'Privacy Policy Content.....11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '2019-04-15 13:43:32', '2019-04-15 13:43:32', NULL),
(2, 'User', '2019-04-15 13:43:32', '2019-04-15 13:43:32', NULL),
(3, 'Trainer', '2021-01-26 10:32:20', '2021-01-26 10:32:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 3),
(3, 3),
(15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `school_classes`
--

CREATE TABLE `school_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_classes`
--

INSERT INTO `school_classes` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Beginner', '2021-04-10 06:23:36', '2021-04-10 06:23:36', NULL),
(2, 'Amar Ujala', '2021-04-30 12:11:38', '2021-04-30 12:11:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(191) DEFAULT NULL,
  `site_title` varchar(191) DEFAULT NULL,
  `site_description` varchar(191) DEFAULT NULL,
  `contact_name` varchar(191) DEFAULT NULL,
  `mobile` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `state` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `what_we_do` text DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_title`, `site_description`, `contact_name`, `mobile`, `email`, `country`, `state`, `city`, `what_we_do`, `address`) VALUES
(1, 'Yoga11', 'Daily Yoga', 'Daily Yoga Site', 'Krishna Mishra', '(513) 352-3209', 'hello@foxeyoga.com', 'India', 'Delhi', 'Barabanki', NULL, 'Central Park New York, USA');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `content`) VALUES
(1, 'Terms & Conditions content ....11');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `image_popup` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(121) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `name`, `description`, `image`, `image_popup`, `created_at`, `updated_at`, `status`) VALUES
(2, 'Business Manager', 'Melissa Wagner', '\"Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earthbelow you.\"', '16168718006.jpg', '16168718016.jpg', '2021-03-27 19:03:21', '2021-03-27 13:33:21', 'off'),
(4, 'Php Developer', 'Krishna Mishra', 'A PHP developer is responsible for writing server-side web application logic. PHP developers usually develop back-end components, connect the application with the other (often third-party) web services, and support the front-end developers by integrating their work with the application.', '16168720545.jpg', '16168720545.jpg', '2021-03-27 13:37:34', '2021-03-27 13:37:34', 'off'),
(5, 'Graphics Designer', 'Laxman Mishra', 'Lara J Designs is the Best of the Best! I have used them for many projects and am always impressed. My business cards are continually complimented and my internet sales have dramatically increased since switching to a Lara J Designs created website. Their talent and professionalism is only surpassed by their kindness. Kudos to Lara J Designs!', '16169171788.jpg', '16169171788.jpg', '2021-03-28 02:09:38', '2021-03-28 02:09:38', 'off'),
(6, 'Business Manager', 'Melissa Wagner', '\"Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earthbelow you.\"', '16168718006.jpg', '16168718016.jpg', '2021-03-27 19:03:21', '2021-03-27 13:33:21', 'off'),
(7, 'Php Developer', 'Krishna Mishra', 'A PHP developer is responsible for writing server-side web application logic. PHP developers usually develop back-end components, connect the application with the other (often third-party) web services, and support the front-end developers by integrating their work with the application.', '16168720545.jpg', '16168720545.jpg', '2021-03-27 13:37:34', '2021-03-27 13:37:34', 'off'),
(8, 'Graphics Designer', 'Laxman Mishra', 'Lara J Designs is the Best of the Best! I have used them for many projects and am always impressed. My business cards are continually complimented and my internet sales have dramatically increased since switching to a Lara J Designs created website. Their talent and professionalism is only surpassed by their kindness. Kudos to Lara J Designs!', '16169171788.jpg', '16169171788.jpg', '2021-03-28 02:09:38', '2021-03-28 02:09:38', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `class_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `class_id`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$imU.Hdz7VauIT3LIMCMbsOXvaaTQg6luVqkhfkBcsUd.SJW2XSRKO', NULL, '2019-04-15 13:43:32', '2019-04-15 13:43:32', NULL, NULL),
(2, 'Krishna Mishra', 'Krishna@gmail.com', NULL, '$2y$10$Nlck1b9xNtLLuiIGOOWKhu8wQb1tPadIfya1EeTQosAU05jpA/HCy', NULL, '2021-01-26 10:31:57', '2021-01-26 10:31:57', NULL, NULL),
(3, 'Trainer1', 'trainer1@gmail.com', NULL, '$2y$10$bXlKyLDOGo65XTppKh09cujUoUjhyBCZDlzkPptipR6umdWu.u.ju', NULL, '2021-01-27 13:26:37', '2021-01-27 13:26:37', NULL, NULL),
(4, 'KRISHNA MISHRA', 'er.krishna.mishra@gmail.com', NULL, '$2y$10$/KbiaX6lYpdVEX4byArtL.nZb2H3H6TMJ9GHkok2LMBTrUQ7shJoa', NULL, '2021-03-23 13:40:08', '2021-03-23 13:40:08', NULL, NULL),
(13, 'Laxman Mishra', 'laxmanmishrabbk@gmail.com', NULL, '$2y$10$dpATZGla6g/q1va0LeWK2eaiK6/MoVDv4pA5w7p/YNGEs9oe0dACa', NULL, '2021-03-23 14:09:34', '2021-03-23 14:09:34', NULL, NULL),
(14, 'KRISHNA MISHRA', 'er.krishna.mishra1@gmail.com', NULL, '$2y$10$PO.SbVDOWijtQTHCqxjz8.q3rBpYBEe7OmIO.IVqdQ5ATebsLjjna', NULL, '2021-03-24 12:54:54', '2021-03-24 12:54:54', NULL, NULL),
(15, 'Sonam Mishra', 'sonam@gmail.com', NULL, '$2y$10$lwV9EtJY/k9sBeAefN9zX.WiFXHTB7e2BpBCIxUoetj83FpBRPZJG', NULL, '2021-03-24 13:07:00', '2021-03-24 13:07:00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_fk_1001496` (`teacher_id`),
  ADD KEY `class_fk_1001508` (`class_id`);

--
-- Indexes for table `main_services`
--
ALTER TABLE `main_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_timings`
--
ALTER TABLE `package_timings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `school_classes`
--
ALTER TABLE `school_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_fk_1001550` (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_services`
--
ALTER TABLE `main_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `package_timings`
--
ALTER TABLE `package_timings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school_classes`
--
ALTER TABLE `school_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `class_fk_1001508` FOREIGN KEY (`class_id`) REFERENCES `school_classes` (`id`),
  ADD CONSTRAINT `teacher_fk_1001496` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `class_fk_1001550` FOREIGN KEY (`class_id`) REFERENCES `school_classes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `bookings` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `package_timing_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(55) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `package_details` text,
  `transaction_id` varchar(255) DEFAULT NULL,
  `currency_code` varchar(55) DEFAULT NULL,
  `payment_status` varchar(55) DEFAULT NULL,
  `invoice_id` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
