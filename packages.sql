-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 11:49 AM
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_arabic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `includes` enum('both','workout','diet') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `validity` int(11) NOT NULL,
  `target` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_arabic` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_arabic` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on',
  `workout_days` text COLLATE utf8mb4_unicode_ci,
  `off_days` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(12234) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_accept_subscriptions` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `name_arabic`, `includes`, `sort`, `price`, `validity`, `target`, `target_arabic`, `description`, `description_arabic`, `status`, `workout_days`, `off_days`, `image`, `is_accept_subscriptions`, `created_at`, `updated_at`) VALUES
(1, 'Fitness Freaks', 'النزوات اللياقة البدنية', 'both', 1, 499.00, 30, 'This is for those who like challenges and face them head on like a beast', 'هذا لمن يحبون التحديات ويواجهونها وجهاً لوجه مثل الوحش', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد.\r\n\r\nكان Lorem ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة.\r\n\r\nعلى مر السنين ، سآتي ، التي ستخرج منها برأيك من ميزة التمرين ، بحيث تحفز الجهود بالمنطقة التعليمية وطول العمر.', 'on', '1,2,3,4,5', '6,7', '16009576871.jpg', 1, '2020-08-19 01:02:28', '2020-12-31 06:11:01'),
(2, 'Fitnes Junkie', 'مدمن اللياقة البدنية', 'both', 2, 499.00, 20, 'This is for those who live the gym life, can\'t stand to miss working out for even a day, a structured exercise for every day of the week.', 'هذا مخصص لأولئك الذين يعيشون حياة الصالة الرياضية ، ولا يمكنهم تحمل تفويت التمرين حتى يوم واحد ، وهو تمرين منظم لكل يوم من أيام الأسبوع.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد.\r\n\r\nكان Lorem ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة.\r\n\r\nباستثناء أن السود كيوبيدات ليسوا استثناءً ، فهو مهدئ للروح ، أي أنهم تخلوا عن الواجبات العامة لأولئك المسؤولين عن مشاكلك.', 'on', '1,2,3,4,5,6', '7', '1600959216download.png', 1, '2020-08-19 01:32:34', '2020-12-31 06:10:35'),
(3, 'Fitness Forger', 'فيتنس فورجر', 'workout', 3, 199.00, 15, 'Shaping your body is your first Goal. However time constraints does not allow you to workout to the max, here are some exercises you can do any time of day.', 'تشكيل جسمك هو هدفك الأول. على الرغم من أن ضيق الوقت لا يسمح لك بالتمرين إلى أقصى حد ، فإليك بعض التمارين التي يمكنك القيام بها في أي وقت من اليوم.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Lorem ipsum هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد.\r\n\r\nكان Lorem ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة.\r\n\r\nتريد أن تكون ألمًا في كيوبيداتات سيلوم وقد تم انتقاده في فرار Duis et dolore magna لا ينتج عنه متعة.', 'on', '1,3,5,7', '2,4,6', '1600959300165_Forge-Fitness-adjusted.jpg', 1, '2020-08-19 01:37:15', '2020-12-31 06:09:32'),
(4, 'Center Package', NULL, 'both', 1, 699.00, 22, 'This is for those who like challenges and face them head on like a beast', NULL, 'This is for those who like challenges and face them head on like a beast', NULL, 'on', '3,6', '1,2,4,5,7', NULL, 1, '2021-01-12 02:31:57', '2021-01-12 02:31:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
