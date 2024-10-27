-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 08:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pvfound`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `event_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `event_date`, `created_at`, `updated_at`) VALUES
(1, 'hjk', 'kkhjk', '2024-10-17', '2024-10-14 06:29:44', '2024-10-14 06:29:44'),
(2, 'sdfsd', 'dfgdf', '2024-10-12', '2024-10-14 06:40:42', '2024-10-14 06:40:42'),
(3, 'sdfsd', 'dfgfd', '2024-10-15', '2024-10-14 06:42:42', '2024-10-14 06:42:42'),
(4, 'gdfg', 'cvcx', '0000-00-00', '2024-10-26 15:05:47', '2024-10-26 15:05:47'),
(5, 'gdfg', 'cvcx', '0000-00-00', '2024-10-26 15:06:17', '2024-10-26 15:06:17'),
(6, 'lkj', 'kjlkj', '0000-00-00', '2024-10-26 15:06:24', '2024-10-26 15:06:24'),
(7, 'lkjklj', 'lkjklj', '0000-00-00', '2024-10-26 15:08:15', '2024-10-26 15:08:15'),
(12, 'hello', 'hello world', '0000-00-00', '2024-10-27 11:06:21', '2024-10-27 11:06:21'),
(13, 'hello', 'hello world', '0000-00-00', '2024-10-27 11:06:23', '2024-10-27 11:06:23'),
(14, 'hello', 'hello world', '0000-00-00', '2024-10-27 11:06:23', '2024-10-27 11:06:23'),
(15, 'hello', 'hello world', '0000-00-00', '2024-10-27 11:06:23', '2024-10-27 11:06:23'),
(16, 'hello', 'hello world', '0000-00-00', '2024-10-27 11:06:24', '2024-10-27 11:06:24'),
(17, 'hello', 'hello world', '0000-00-00', '2024-10-27 11:06:24', '2024-10-27 11:06:24'),
(18, 'hello', 'hello world', '0000-00-00', '2024-10-27 11:06:24', '2024-10-27 11:06:24'),
(19, 'hello', 'hello world', '0000-00-00', '2024-10-27 11:06:25', '2024-10-27 11:06:25'),
(20, 'hello', 'hello world', '0000-00-00', '2024-10-27 11:06:25', '2024-10-27 11:06:25'),
(21, 'hello', 'hello world', '0000-00-00', '2024-10-27 11:06:25', '2024-10-27 11:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `description`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'testing1', 'testing1', 'gallery/1728462664_17.jpg', '2024-10-08 09:25:26', '2024-10-09 08:31:04'),
(2, 'dfsd', 'dfsd', 'images/galleries/1728534628_24.jpg', '2024-10-10 04:30:29', '2024-10-10 04:30:29'),
(3, 'gdf', 'fgdf', 'images/galleries/1728534642_13.jpg', '2024-10-10 04:30:42', '2024-10-10 04:30:42'),
(4, 'lk;', 'lklk', 'images/galleries/1728534655_05.jpg', '2024-10-10 04:30:55', '2024-10-10 04:30:55'),
(5, 'jkljl', 'lk;lkjlk', 'images/galleries/1728534683_16.jpg', '2024-10-10 04:31:23', '2024-10-10 04:31:23'),
(6, 'lkjlk', 'ljlkj', 'images/galleries/1728534694_14.jpg', '2024-10-10 04:31:34', '2024-10-10 04:31:34'),
(7, 'kjlkjl', 'jlkjl', 'images/galleries/1728534706_22.jpg', '2024-10-10 04:31:46', '2024-10-10 04:31:46'),
(8, 'lk;lk', 'klkl;', 'images/galleries/1728534718_17.jpg', '2024-10-10 04:31:58', '2024-10-10 04:31:58'),
(9, 'llkl;', 'lklk;l', 'images/galleries/1728534749_15.jpg', '2024-10-10 04:32:29', '2024-10-10 04:32:29'),
(10, 'jhjhkj', 'jhkjhkj', 'images/galleries/1728534763_23.jpg', '2024-10-10 04:32:43', '2024-10-10 04:32:43'),
(11, 'lkjklj', 'lkjkljsdas', 'images/galleries/1728534774_14.jpg', '2024-10-10 04:32:54', '2024-10-26 15:21:09'),
(12, 'mnbmn', 'mbnmnb', 'images/galleries/1728534786_28.jpg', '2024-10-10 04:33:06', '2024-10-10 04:33:06'),
(28, 'hello', 'fd', '19.jpg', '2024-10-26 11:01:53', '2024-10-26 11:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `description`, `image_path`, `created_at`, `updated_at`) VALUES
(2, 'vsfs', 'sdfs', 'uploads/02.jpg', NULL, NULL),
(3, 'sfsd', 'sdfsd', 'uploads/03.jpg', NULL, NULL),
(4, 'sdfsd', 'dsfs', 'uploads/05.jpg', NULL, NULL),
(5, 'xsdfs', 'dfsd', 'uploads/06.jpg', NULL, NULL),
(6, 'dlsudi', 'iuidofu', 'uploads/', NULL, NULL),
(7, 'mnm', ',mnm,', 'uploads/15.jpg', NULL, NULL),
(8, 'kjlk', 'lkjlkj', 'uploads/gallery04.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_approved` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `address`, `email`, `phone`, `image`, `is_approved`, `created_at`, `updated_at`) VALUES
(19, 'Rakesh Kumar Singh', 'A-1 -  9/10 L.S.C Market Jahangir Puri', 'rakeshdelhi.singh@gmail.com', '09312945741', 'default-avatar.png', 0, '0000-00-00 00:00:00', '2024-10-27 12:27:01'),
(24, 'Rakesh Kumar Singh', 'A-1 -  9/10 L.S.C Market Jahangir Puri', 'rakeshdelhi.singh@gmail.com', '09312945741', 'zaffar.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Rakesh Kumar Singh', 'A-1 -  9/10 L.S.C Market Jahangir Puri', 'nicewebtechnologies@gmail.com', '09312945741', 'default-avatar.png', 0, '0000-00-00 00:00:00', '2024-10-27 12:43:39'),
(29, 'Member Name', 'A-1 -  9/10 L.S.C Market Jahangir Puri', 'nicewebtechnologies@gmail.com', '09312945741', 'default-avatar.png', 1, '0000-00-00 00:00:00', '2024-10-27 12:41:48'),
(31, 'Member Name', 'A-1 -  9/10 L.S.C Market Jahangir Puri', 'nicewebtechnologies@gmail.com', '09312945741', 'default-avatar.png', 1, '2024-10-25 11:26:37', '2024-10-27 12:41:12'),
(32, 'ssf6', 'A-1 - 9/10 L.S.C Market Jahangir Puri', 'abc@gmail.com', '09312945741', 'default-avatar.png', 1, '2024-10-25 13:47:30', '2024-10-27 12:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_02_134249_create_members_table', 2),
(5, '2024_10_03_182928_add_is_approved_to_members_table', 3),
(6, '2024_10_08_082957_create_gallery_table', 4),
(7, '2024_10_08_092013_create_galleries_table', 5),
(8, '2024_10_12_003001_create_events_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FWoBo9DDeuI7QBPJWrStH3HLpZPrkzhK2IltnFIo', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTFlubHhlQXh0elNCZVZnYlhpMVhpZWwzQVc0ZzZYVjNKb21DeHFubSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1729496057);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Rakesh Kumar Singh', 'rakeshdelhi.singh@gmail.com', '$2y$10$lMONFVfWl0L28SvforNOYuhsvqI.0O9U2TapH.5TAbbE7nZwlw0s6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rakesh Kumar Singh', 'rakeshdelhi.singh@gmail.com', NULL, '$2y$12$8Ekh5k0OeCaWEVZgaVpgvuvFQjv.MAg/L3WEnDwYPrx1AM8LKSf7.', NULL, '2024-09-28 21:31:46', '2024-09-28 21:31:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
