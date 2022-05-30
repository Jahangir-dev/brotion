-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 10:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biddingmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `province_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `user_id`, `name`, `province_id`, `created_at`, `updated_at`) VALUES
(10, '6', 'Kharj Governorate', '6', '2022-02-21 08:11:18', '2022-02-21 08:11:18'),
(11, '6', 'Duwaidmi Governorate', '6', '2022-02-21 08:12:01', '2022-02-21 08:12:01'),
(12, '6', 'Majma\'ah Governorate', '6', '2022-02-21 08:12:13', '2022-02-21 08:12:13'),
(13, '6', 'Quwai\'iyah Governorate', '6', '2022-02-21 08:12:37', '2022-02-21 08:12:37'),
(14, '6', 'Wadi ad-Dawasir Governorate', '6', '2022-02-21 08:12:47', '2022-02-21 08:12:47'),
(15, '6', '\'Afif Governorate', '6', '2022-02-21 08:12:57', '2022-02-21 08:12:57'),
(16, '6', 'Zulfi Governorate', '6', '2022-02-21 08:13:07', '2022-02-21 08:13:07'),
(17, '6', 'Dir\'iyah Governorate', '6', '2022-02-21 08:13:20', '2022-02-21 08:13:20'),
(18, '6', 'Aflaj Governorate', '6', '2022-02-21 08:13:30', '2022-02-21 08:13:30'),
(19, '6', 'Hawtat Bani Tamim Governorate', '6', '2022-02-21 08:13:40', '2022-02-21 08:13:40'),
(20, '6', 'Muzahmiyah Governorate', '6', '2022-02-21 08:13:53', '2022-02-21 08:13:53'),
(21, '6', 'Sulayyil Governorate', '6', '2022-02-21 08:14:08', '2022-02-21 08:14:08'),
(23, '6', 'Shaqra\' Governorate', '6', '2022-02-21 08:15:41', '2022-02-21 08:15:41'),
(24, '6', 'Rumah Governorate', '6', '2022-02-21 08:16:57', '2022-02-21 08:16:57'),
(25, '6', 'Dhurma Governorate', '6', '2022-02-21 08:18:35', '2022-02-21 08:18:35'),
(26, '6', 'Thadij Governorate', '6', '2022-02-21 08:19:23', '2022-02-21 08:19:23'),
(27, '6', 'Hariq Governorate', '6', '2022-02-21 08:19:36', '2022-02-21 08:19:36'),
(28, '6', 'Huraymila Governorate', '6', '2022-02-21 08:19:47', '2022-02-21 08:19:47'),
(29, '6', 'Ghat Governorate', '6', '2022-02-21 08:20:01', '2022-02-21 08:20:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
