-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 12:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quentity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `phone`, `address`, `product_title`, `quentity`, `price`, `created_at`, `updated_at`) VALUES
(25, 'user', '01750918981', 'tongi', 'T-shirt', '2', '680', '2021-09-26 01:59:10', '2021-09-26 01:59:10'),
(26, 'user', '01750918981', 'tongi', 'Shirt', '1', '560', '2021-09-26 02:00:23', '2021-09-26 02:00:23'),
(28, 'user', '01750918981', 'tongi', 'T-Shirt', '3', '690', '2021-09-26 02:00:59', '2021-09-26 02:00:59');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_19_124231_create_sessions_table', 1),
(7, '2021_09_22_164946_create_products_table', 2),
(8, '2021_09_24_083951_create_carts_table', 3),
(9, '2021_09_25_171948_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quentity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `product_title`, `quentity`, `price`, `status`, `created_at`, `updated_at`) VALUES
(17, 'user', '01750918981', 'tongi', 'T-Shirt', '1', '230', 'Delivered', '2021-09-25 14:04:50', '2021-09-26 00:42:06'),
(18, 'user', '01750918981', 'tongi', 'T-shirt', '1', '340', ' Not Delivered ', '2021-09-25 14:04:50', '2021-09-25 14:04:50'),
(19, 'user', '01750918981', 'tongi', 'Shirt', '1', '340', ' Not Delivered ', '2021-09-25 14:04:50', '2021-09-25 14:04:50'),
(20, 'user', '01750918981', 'tongi', 'Shirt', '1', '340', 'Delivered', '2021-09-25 14:22:43', '2021-09-26 00:45:12'),
(21, 'customer', '01719363275', 'Rajshahi', 'pant', '1', '1000', ' Not Delivered ', '2021-09-26 02:04:08', '2021-09-26 02:04:08'),
(22, 'customer', '01719363275', 'Rajshahi', 'troser', '1', '550', ' Not Delivered ', '2021-09-26 02:04:08', '2021-09-26 02:04:08'),
(23, 'customer', '01719363275', 'Rajshahi', 'troser', '2', '2080', ' Not Delivered ', '2021-09-26 02:04:08', '2021-09-26 02:04:08'),
(24, 'customer', '01719363275', 'Rajshahi', 'pant', '2', '1560', ' Not Delivered ', '2021-09-26 02:04:08', '2021-09-26 02:04:08');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quentity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `quentity`, `image`, `created_at`, `updated_at`) VALUES
(2, 'T-shirt', '340', 'New t-shirt', '9', '1632343636.jpg', '2021-09-22 14:47:16', '2021-09-22 14:47:16'),
(3, 'pant', '1000', 'New pant', '2', '1632399995.jpg', '2021-09-22 14:55:04', '2021-09-23 06:26:35'),
(5, 'Shirt', '340', 'New Shirt', '3', '1632372361.jpg', '2021-09-22 22:46:01', '2021-09-22 22:46:01'),
(7, 'Shirt', '230', 'New Shirt', '5', '1632372418.jpg', '2021-09-22 22:46:58', '2021-09-22 22:46:58'),
(8, 'Shirt', '560', 'New Shirt', '7', '1632372455.jpg', '2021-09-22 22:47:35', '2021-09-22 22:47:35'),
(9, 'T-Shirt', '230', 'New t-shirt', '10', '1632372480.jpg', '2021-09-22 22:48:00', '2021-09-22 22:48:00'),
(10, 'T-Shirt', '320', 'New t-shirt', '10', '1632398745.jpg', '2021-09-23 06:05:45', '2021-09-23 06:05:45'),
(11, 'troser', '550', 'new troser', '3', '1632401689.jpg', '2021-09-23 06:54:49', '2021-09-23 06:54:49'),
(12, 'troser', '450', 'new troser', '4', '1632401726.jpg', '2021-09-23 06:55:26', '2021-09-23 06:55:26'),
(13, 'troser', '750', 'new troser', '5', '1632401760.jpg', '2021-09-23 06:56:00', '2021-09-23 06:56:00'),
(14, 'troser', '1040', 'new troser', '7', '1632401802.jpg', '2021-09-23 06:56:42', '2021-09-23 06:56:42'),
(15, 'pant', '1060', 'New pant', '2', '1632402261.jpg', '2021-09-23 07:04:21', '2021-09-23 07:04:21'),
(16, 'pant', '2380', 'New pant', '12', '1632402305.jpg', '2021-09-23 07:05:05', '2021-09-23 07:05:05'),
(17, 'pant', '550', 'New pant', '750', '1632402381.jpg', '2021-09-23 07:06:21', '2021-09-23 07:06:21'),
(18, 'pant', '1070', 'New pant', '10', '1632566427.jpg', '2021-09-25 04:40:27', '2021-09-25 04:40:27'),
(19, 'pant', '780', 'New pant', '10', '1632574609.jpg', '2021-09-25 06:56:49', '2021-09-25 06:56:49'),
(20, 'pant', '780', 'New pant', '10', '1632574610.jpg', '2021-09-25 06:56:50', '2021-09-25 06:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '0', '01750918981', 'tongi', NULL, '$2y$10$rMZDR7luMfsxBFMwig386uGOVSic41X4gpCvkh7/SJnRauEfqos2e', NULL, NULL, NULL, NULL, NULL, '2021-09-19 23:01:00', '2021-09-19 23:01:00'),
(2, 'admin', 'admin@gmail.com', '1', '01770517109', 'charag ali', NULL, '$2y$10$.qpBfBnsECZBM1Ep/bNw7.ldt9aMt.3rN8IT.3Qzp.qRPu6mRK.rC', NULL, NULL, NULL, NULL, NULL, '2021-09-19 23:04:32', '2021-09-19 23:04:32'),
(3, 'customer', 'customer@gmail.con', '0', '01719363275', 'Rajshahi', NULL, '$2y$10$4W87SLlqZ7ekF8mq6n7AY.mctfgBdq.Ue.zEOO3gnegNjY/l1v2mq', NULL, NULL, NULL, NULL, NULL, '2021-09-25 14:01:14', '2021-09-25 14:01:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
