-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 01:37 PM
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
(1, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '63.jpg', '2024-10-08 09:25:26', '2024-10-27 17:12:51'),
(2, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '98.jpg', '2024-10-10 04:30:29', '2024-10-27 17:12:20'),
(3, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, di', '79.jpg', '2024-10-10 04:30:42', '2024-10-27 17:11:41'),
(4, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, di', '77.jpg', '2024-10-10 04:30:55', '2024-10-27 17:11:13'),
(5, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, di', '40.jpg', '2024-10-10 04:31:23', '2024-10-27 17:10:51'),
(6, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, di', '31.jpg', '2024-10-10 04:31:34', '2024-10-27 17:10:32'),
(7, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, di', '34.jpg', '2024-10-10 04:31:46', '2024-10-27 17:10:11'),
(8, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, di', '33.jpg', '2024-10-10 04:31:58', '2024-10-27 17:09:44'),
(9, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, di', '30.jpg', '2024-10-10 04:32:29', '2024-10-27 17:09:19'),
(10, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, di', '26.jpg', '2024-10-10 04:32:43', '2024-10-27 17:08:59'),
(11, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, di', '17.jpg', '2024-10-10 04:32:54', '2024-10-27 17:08:36'),
(12, 'Pasmanada Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, di', '15.jpg', '2024-10-10 04:33:06', '2024-10-27 17:13:34'),
(28, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '19.jpg', '2024-10-26 11:01:53', '2024-10-27 17:01:35'),
(38, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '01.jpg', '2024-10-27 17:14:46', '2024-10-27 17:14:46'),
(39, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '02.jpg', '2024-10-27 17:14:57', '2024-10-27 17:14:57'),
(40, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '08.jpg', '2024-10-27 17:15:05', '2024-10-27 17:15:05'),
(41, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '28.jpg', '2024-10-27 17:15:12', '2024-10-27 17:15:12'),
(42, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '10.jpg', '2024-10-27 17:15:18', '2024-10-27 17:15:18'),
(43, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '23.jpg', '2024-10-27 17:15:25', '2024-10-27 17:15:25'),
(44, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '12.jpg', '2024-10-27 17:15:33', '2024-10-27 17:15:33'),
(45, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '13.jpg', '2024-10-27 17:15:38', '2024-10-27 17:15:38'),
(46, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '11.jpg', '2024-10-27 17:15:45', '2024-10-27 17:15:45'),
(47, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus sapien id massa volutpat, dictum sodales diam pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet est ac libero feugiat molestie. Nam egestas odio sed nibh convallis interdum. Morbi nibh felis, vehicula sit amet rutrum at, luctus sit amet felis. Pellentesque et lorem at dolor condimentum sollicitudin. Etiam eleifend maximus erat, eget dignissim sem ullamcorper eget. Curabitur eget leo felis. Ut viverra, justo quis consequat lobortis, urna sem iaculis ante, at dignissim urna felis id nisl. Pellentesque tristique lacus lorem, ac placerat quam scelerisque quis. Suspendisse vehicula vulputate sem, at maximus orci dignissim', '20.jpg', '2024-10-27 17:15:51', '2024-10-27 17:15:51'),
(48, 'Pasmanda Vikas', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '08.jpg', '2024-10-27 17:25:46', '2024-10-27 17:25:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
