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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
