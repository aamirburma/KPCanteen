-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 10:44 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2021_06_09_125852_create_tbl_test_table', 2),
(7, '2021_06_09_151716_create_tbl_menu_cat_table', 3),
(8, '2021_06_09_153751_create_tbl_tests_table', 4),
(9, '2021_06_09_154951_create_tbl_menucategorys_table', 5),
(10, '2021_06_09_161320_add_status_to_tbl_menucategorys', 6),
(11, '2021_06_10_104411_create_tbl_restmenus_table', 7),
(12, '2021_06_10_104730_create_tbl_restmenus_table', 8),
(13, '2021_06_10_145124_create_tbl_credits_table', 9),
(14, '2021_06_10_150902_create_tbl_credits_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0-Block, 1-Running ',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `phone`, `photo`, `password`, `status`, `timestamp`) VALUES
(1, 'burmaaamir@gmail.com', '8511552229', 'none.png', '12345', 1, '2021-05-31 10:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_credits`
--

CREATE TABLE `tbl_credits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` int(11) NOT NULL,
  `creditamount` decimal(8,2) NOT NULL,
  `mac` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdby` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_credits`
--

INSERT INTO `tbl_credits` (`id`, `uid`, `creditamount`, `mac`, `ip`, `createdby`, `created_at`, `updated_at`) VALUES
(1, 7, '500.00', '00-50-56-C0-00-08', '127.0.0.1', 'burmaaamir@gmail.com', '2021-06-11 05:46:09', '2021-06-11 05:46:09'),
(2, 7, '500.00', '00-50-56-C0-00-08', '127.0.0.1', 'burmaaamir@gmail.com', '2021-06-11 05:46:39', '2021-06-11 05:46:39'),
(3, 7, '600.00', '00-50-56-C0-00-08', '127.0.0.1', 'burmaaamir@gmail.com', '2021-06-11 05:47:00', '2021-06-11 05:47:00'),
(4, 7, '500.00', '00-50-56-C0-00-08', '127.0.0.1', 'burmaaamir@gmail.com', '2021-06-11 07:08:42', '2021-06-11 07:08:42'),
(5, 9, '500.00', '00-50-56-C0-00-08', '127.0.0.1', 'burmaaamir@gmail.com', '2021-06-11 07:09:25', '2021-06-11 07:09:25'),
(6, 9, '600.00', '00-50-56-C0-00-08', '127.0.0.1', 'burmaaamir@gmail.com', '2021-06-11 07:09:39', '2021-06-11 07:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menucategorys`
--

CREATE TABLE `tbl_menucategorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_menucategorys`
--

INSERT INTO `tbl_menucategorys` (`id`, `category`, `image`, `ip`, `mac`, `admin`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Pasta', '1623258805.jpg', '127.0.0.1', '00-50-56-C0-00-08', 'burmaaamir@gmail.com', '2021-06-09 11:43:25', '2021-06-10 02:59:13', 2),
(2, 'Noodels', '1623303875.jpg', '127.0.0.1', '00-50-56-C0-00-08', 'burmaaamir@gmail.com', '2021-06-10 00:14:35', '2021-06-10 02:59:36', 2),
(3, 'BreakFast2', '1623313562.png', '127.0.0.1', '00-50-56-C0-00-08', 'burmaaamir@gmail.com', '2021-06-10 00:24:50', '2021-06-10 02:56:02', 1),
(4, 'Pasta & Noodles', '1623327101.png', '127.0.0.1', '00-50-56-C0-00-08', 'burmaaamir@gmail.com', '2021-06-10 06:41:41', '2021-06-10 06:41:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restmenus`
--

CREATE TABLE `tbl_restmenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `itemid` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'food.png',
  `description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '0-veg, 1-nonveg',
  `status` tinyint(4) NOT NULL COMMENT '0-not available, 1-available, 2 - Delete',
  `cid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_restmenus`
--

INSERT INTO `tbl_restmenus` (`id`, `itemid`, `name`, `photo`, `description`, `price`, `type`, `status`, `cid`, `created_at`, `updated_at`) VALUES
(1, '1500/KP/1', 'Margarita Pizza 2.0', '1623331556.png', 'Carrot, Capsicum', '50.00', 0, 1, 4, '2021-06-10 07:11:24', '2021-06-10 08:01:16'),
(2, '1500KP', 'Pasta', 'food.png', NULL, '50.00', 0, 2, 4, '2021-06-10 07:13:36', '2021-06-10 08:01:03'),
(3, '1500KP', 'Cake', 'food.png', 'Milk', '20.00', 1, 0, 4, '2021-06-10 07:21:37', '2021-06-10 07:21:37'),
(4, '1500KP', 'Pizza', '1623329671.jpg', 'Capsicum, Tomato, Onion', '50.00', 0, 2, 4, '2021-06-10 07:24:31', '2021-06-10 08:00:58'),
(5, '1500KP', 'Aamirsohel Burma', '1623329997.jpg', 'Mikm', '5000.00', 1, 1, 4, '2021-06-10 07:29:57', '2021-06-10 07:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tests`
--

CREATE TABLE `tbl_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `empno` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `photo` varchar(50) NOT NULL DEFAULT 'none.png',
  `password` varchar(15) DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `otptime` timestamp NULL DEFAULT current_timestamp(),
  `nootp` smallint(6) NOT NULL DEFAULT 0,
  `status` smallint(6) NOT NULL DEFAULT 2 COMMENT '(0-block, 1-running, 2-not updated [Default])',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `insert_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `balance` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `empno`, `name`, `phone`, `email`, `photo`, `password`, `otp`, `otptime`, `nootp`, `status`, `timestamp`, `insert_at`, `update_at`, `balance`) VALUES
(5, 1550, 'Burma Aamirsohel', '8511552229', '', '', NULL, NULL, '2021-06-07 16:58:07', 0, 3, '2021-06-07 16:58:07', '2021-06-07 11:28:07', NULL, 0),
(6, 1550, 'Burma Aamirsohel', '8511552229', '', '', NULL, NULL, '2021-06-07 16:58:32', 0, 3, '2021-06-07 16:58:32', '2021-06-07 11:28:32', NULL, 0),
(7, 1234, 'Burma Aamirsohel', '9909284996', 'burmaaamir@gmail.com', 'none.png', NULL, NULL, '2021-06-07 16:59:39', 0, 1, '2021-06-07 16:59:39', '2021-06-07 11:29:39', NULL, 1600),
(8, 1234, 'Burma Aamirsohel', '7383902917', '', 'none.png', NULL, NULL, '2021-06-07 17:01:14', 0, 1, '2021-06-07 17:01:14', '2021-06-07 11:31:14', NULL, 0),
(9, 2011, 'Satish Kanani', '9900221010', 'gtempggl@gmail.com', '1623233706.jpg', NULL, NULL, '2021-06-09 10:15:06', 0, 0, '2021-06-09 10:15:06', '2021-06-09 04:45:06', NULL, 1100),
(10, 2011, 'Satish Kanani', '9900221010', 'gtempggl@gmail.com', 'none.png', NULL, NULL, '2021-06-09 11:12:47', 0, 0, '2021-06-09 11:12:47', '2021-06-09 05:42:47', NULL, 0),
(11, 1112, 'Burma Aamirsohel', '9909284996', 'burmaaamir@gmail.com', 'none.png', NULL, NULL, '2021-06-09 12:11:22', 0, 3, '2021-06-09 12:11:22', '2021-06-09 06:41:22', '2021-06-09 07:17:34', 0),
(12, 1112, 'Aamirsohel Saiyedadmed', '9909284996', 'burmaaamir@gmail.com', '1623256992.jpg', NULL, NULL, '2021-06-09 12:11:39', 0, 3, '2021-06-09 12:11:39', '2021-06-09 06:41:39', '2021-06-09 11:13:12', 0),
(13, 111, 'Burma Aamir', '9909284996', 'burmaaamir@gmail.com', 'none.png', NULL, NULL, '2021-06-09 12:12:50', 0, 3, '2021-06-09 12:12:50', '2021-06-09 06:42:50', NULL, 0),
(14, 2011, 'Satish Kanani', '8511223366', 'gtempggl@gmail.com', '1623256981.jpg', NULL, NULL, '2021-06-09 16:43:01', 0, 1, '2021-06-09 16:43:01', '2021-06-09 11:13:01', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_credits`
--
ALTER TABLE `tbl_credits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_credits_uid_foreign` (`uid`);

--
-- Indexes for table `tbl_menucategorys`
--
ALTER TABLE `tbl_menucategorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_restmenus`
--
ALTER TABLE `tbl_restmenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_restmenus_cid_foreign` (`cid`);

--
-- Indexes for table `tbl_tests`
--
ALTER TABLE `tbl_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_credits`
--
ALTER TABLE `tbl_credits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_menucategorys`
--
ALTER TABLE `tbl_menucategorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_restmenus`
--
ALTER TABLE `tbl_restmenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_tests`
--
ALTER TABLE `tbl_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_credits`
--
ALTER TABLE `tbl_credits`
  ADD CONSTRAINT `tbl_credits_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_restmenus`
--
ALTER TABLE `tbl_restmenus`
  ADD CONSTRAINT `tbl_restmenus_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `tbl_menucategorys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
