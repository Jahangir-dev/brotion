-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 09:49 AM
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
-- Database: `brotion`
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
(29, '6', 'Ghat Governorate', '6', '2022-02-21 08:20:01', '2022-02-21 08:20:01'),
(30, '6', 'Riyadh City', '6', '2022-03-01 16:32:21', '2022-03-01 16:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `details`, `created_at`, `updated_at`) VALUES
(4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-02-23 19:52:49', '2022-02-23 19:52:49');

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
-- Table structure for table `footer_setting`
--

CREATE TABLE `footer_setting` (
  `id` int(11) NOT NULL,
  `label1` text NOT NULL,
  `label2` text NOT NULL,
  `label3` text NOT NULL,
  `label4` text NOT NULL,
  `label5` text NOT NULL,
  `label6` text NOT NULL,
  `label7` text NOT NULL,
  `label8` text NOT NULL,
  `label9` text NOT NULL,
  `label10` text NOT NULL,
  `label11` text NOT NULL,
  `label12` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_setting`
--

INSERT INTO `footer_setting` (`id`, `label1`, `label2`, `label3`, `label4`, `label5`, `label6`, `label7`, `label8`, `label9`, `label10`, `label11`, `label12`, `created_at`, `updated_at`) VALUES
(4, 'Opportunity', 'Made in Saudi Arabia', 'Increased', 'Trader', 'Opportunity', 'Made in Saudi Arabia', 'Increased', 'Trader', 'Opportunity', 'Made in Saudi Arabia', 'Increased', 'Trader', '2022-02-26 06:51:05', '2022-05-11 11:53:18');

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
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2022_01_27_080658_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opp_category`
--

CREATE TABLE `opp_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opp_category`
--

INSERT INTO `opp_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Fire Fighting', '2022-02-28 14:42:28', '2022-03-06 11:42:26'),
(5, 'Stationery', '2022-02-28 15:31:31', '2022-03-06 11:44:50'),
(6, 'Electronics', '2022-03-01 16:30:54', '2022-03-06 11:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `opp_count`
--

CREATE TABLE `opp_count` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `opp_id` varchar(255) NOT NULL,
  `click_count` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opp_count`
--

INSERT INTO `opp_count` (`id`, `user_id`, `opp_id`, `click_count`, `created_at`, `updated_at`) VALUES
(7, '22', '6', '1', '2022-03-01 20:02:23', '2022-03-01 20:02:23'),
(8, '23', '6', '1', '2022-03-01 20:13:12', '2022-03-01 20:13:12'),
(9, '23', '7', '1', '2022-03-01 23:00:43', '2022-03-01 23:00:43'),
(10, '22', '7', '1', '2022-03-01 23:05:44', '2022-03-01 23:05:44'),
(11, '21', '7', '1', '2022-03-03 03:07:21', '2022-03-03 03:07:21'),
(12, '21', '8', '1', '2022-03-03 03:13:12', '2022-03-03 03:13:12'),
(13, '26', '9', '1', '2022-03-04 18:34:54', '2022-03-04 18:34:54'),
(14, '24', '8', '1', '2022-03-04 19:03:52', '2022-03-04 19:03:52'),
(15, '22', '9', '1', '2022-03-10 19:34:05', '2022-03-10 19:34:05'),
(16, '24', '9', '1', '2022-03-11 15:15:29', '2022-03-11 15:15:29'),
(17, '24', '7', '1', '2022-03-11 15:17:35', '2022-03-11 15:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `opp_not_required`
--

CREATE TABLE `opp_not_required` (
  `id` int(11) NOT NULL,
  `opp_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `not_required` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opp_not_required`
--

INSERT INTO `opp_not_required` (`id`, `opp_id`, `user_id`, `not_required`, `created_at`, `updated_at`) VALUES
(2, '6', '24', '1', '2022-03-04 19:02:07', '2022-03-04 19:02:07'),
(3, '7', '22', '1', '2022-03-10 19:22:44', '2022-03-10 19:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `opp_title`
--

CREATE TABLE `opp_title` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `opp_title` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opp_title`
--

INSERT INTO `opp_title` (`id`, `user_id`, `opp_title`, `created_at`, `updated_at`) VALUES
(8, '6', 'television', '2022-02-28 14:41:41', '2022-02-28 15:30:00'),
(9, '6', 'Furniture', '2022-02-28 14:42:00', '2022-02-28 14:42:00'),
(10, '6', 'Test Jaber', '2022-03-01 16:29:24', '2022-03-01 16:29:24');

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
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(6, '6', 'Riyadh', '2022-02-21 07:54:58', '2022-02-21 07:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'web',
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `guard_name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'web', '{\"admin\":true}', '2021-11-23 05:41:53', '2021-11-23 05:41:53'),
(2, 'User', 'user', 'web', '{\"user\":true}', '2021-11-23 05:41:53', '2021-11-23 05:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(12, 6, 1, NULL, NULL),
(31, 9, 2, NULL, NULL),
(32, 10, 2, NULL, NULL),
(33, 11, 2, NULL, NULL),
(34, 12, 2, NULL, NULL),
(35, 13, 2, NULL, NULL),
(36, 14, 2, NULL, NULL),
(37, 15, 2, NULL, NULL),
(38, 16, 2, NULL, NULL),
(39, 17, 2, NULL, NULL),
(40, 18, 2, NULL, NULL),
(41, 19, 2, NULL, NULL),
(42, 20, 2, NULL, NULL),
(43, 21, 2, NULL, NULL),
(44, 22, 2, NULL, NULL),
(45, 23, 2, NULL, NULL),
(46, 24, 2, NULL, NULL),
(47, 25, 2, NULL, NULL),
(48, 26, 2, NULL, NULL),
(49, 27, 2, NULL, NULL),
(50, 28, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jbR5LSf1R5VEnprXV3CEuD1IpnEKurNWKJEx8S1j', 21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoic2JGTVZGVHBidjZscmk2b2JMWXZCZE5jakd5RmpVU1BjMk5BNlA0SyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly9sb2NhbGhvc3QvYnJvdGlvbi9wdWJsaWMvY29uZy1iaWQtYXBwcm92ZWQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMTtzOjU6ImFsZXJ0IjthOjA6e31zOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGV6aVczVTBQdmFScjNwQ2M1UGpYNnU1VW95aFdtempHaGpSOWVTRW81ME9nVDNGdlpPdTcuIjt9', 1652372127);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `role`, `login_status`, `token`, `name`, `email`, `phone`, `address`, `gender`, `account_type`, `region`, `city`, `personal_info`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(6, 'admin', '1', '4186cd91e31db2d3d1e66ec05a303038', 'Admin', 'admin@gmail.com', '03156015430', 'Gulberg Green Islamabad', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$E2CYRj.FHl1y0DmTzZJqmOu42GRRSaaJlAz7eVxnQp7Utpu9IKazm', NULL, NULL, NULL, NULL, 'http://127.0.0.1:8000/images/images/164328140474481.png', NULL, NULL),
(20, 'user', '0', '9933a4f2ecefff23027e5598fe3f16c3', 'Jaber', 'amari@mail.net.sa', '98654321', '6565', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$4DcyK8aH5qjZUJKbdhBhhOxqUpYCOTMwiiysIpfuUf3DNP5HdEABC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-06 11:51:24'),
(21, 'user', '1', '4b148d7496383bd64c799fa864d9d712', 'Muhammad Asad Iqbal', 'asad.gudgk@gmail.com', '10', 'Arif Saeed Colony Jampur', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$eziW3U0PvaRr3pCc5PjX6u5UoyhWmzjGhjR9eSEo50OgT3FvZOu7.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-27 03:54:35'),
(22, 'user', '1', '7ea5d0890b77be76f685130395a26777', 'jaber', 'alamarij@gmail.com', '98654321', 'FDFDS', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$zkW.Nas7kbkmeSH86PpnKOMri4mlMsmcO3SkpRsShhvYkR5Ieio8.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 19:57:19'),
(23, 'user', '1', '5aafb6a5da181448a5a73d54085200b6', 'Saad', 'saudi2@hotmail.co.uk', '9865', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$LOnpwgffrJ9RtfV63Nxh9uu4HO0H9IitQ3/KOKYdCDq1Il6ePvfC.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 20:10:47'),
(24, 'user', '1', '7cc10d83a81cf1152db13d549060e6af', 'Hisham Alsaif', 'alsaifhh@gmail.com', '0567859077', 'Qatif', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kC1eVhnHBWjbmTVBwcBv3u/ZKeZFo5AgkyZ5gJEhbxm7I9AFrUx6q', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 23:24:55'),
(25, 'user', '0', '7a60414822abcc55f676b763e5920ca3', 'Fadi', 'fabdulwahab@outlook.com', '0549998198', 'Riyadh', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$yDxH6N27sbwJEkWzPHADaOBFdadRh6CPPS/pRtwh9cTm3DMKnwx2a', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'user', '1', '56be53e54685be67226628d257393e43', 'Fadi2', 'almanhaj1@gmail.com', '0549998198', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$lGsx7telIu5dvqi0CKaSQucpTulcjqKO1NTagERnudCcCwqI/gj2K', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 18:32:27'),
(27, 'user', '1', '971346561d35d42c72e449ed1caf7e44', 'qaar', 'qamarnazir56@gmail.com', '43223', 'wewewerwe', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$7p8LNyS3Jjxheh7cSf/BW.RNr0fNvxPUlMy1ferA53/mT4uSXcPzC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-19 16:35:06'),
(28, 'user', '1', '0ab05736cec68399b3d8383919a49648', 'muhammad faizan', 'fazzy093@gmail.com', '03158318347', 'abcd', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$mU6jwn0cSqjXcahM8L0yyO29wfxsPAUhnjRjc45Hh7G8b4jStPIPS', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `landline_number` text DEFAULT NULL,
  `building_number` text DEFAULT NULL,
  `street_name` text DEFAULT NULL,
  `district_name` text DEFAULT NULL,
  `zip_code` text DEFAULT NULL,
  `city_name` text DEFAULT NULL,
  `company_logo` text DEFAULT NULL,
  `commerical_registration` text DEFAULT NULL,
  `vat_certification` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `user_id`, `company_name`, `position`, `landline_number`, `building_number`, `street_name`, `district_name`, `zip_code`, `city_name`, `company_logo`, `commerical_registration`, `vat_certification`, `created_at`, `updated_at`) VALUES
(14, '20', 'LEMAN', 'GM', '6565', '6565', '6565', '6565', '6565', '6565', 'https://brotions.com/public/images/images/1644210393749.jpg', 'https://brotions.com/public/images/images/Certificate-2.pdf', 'https://brotions.com/public/images/images/Certificate-2.pdf', '2022-03-01 12:43:46', NULL),
(15, '21', 'Kreashion Software House', '10', '10', '10', 'Arif Saeed Colony Jampur', '10', '32201', 'D.G KHAN', 'http://brotions.com/public/images/images/image001.jpg', 'http://brotions.com/public/images/images/brotions client suggestion.docx', 'http://brotions.com/public/images/images/brotions client suggestion.docx', '2022-03-01 12:49:06', NULL),
(16, '22', 'LEMAN2', 'GM', '565421', '986', '6565', '6565', '6565', '6565', 'https://brotions.com/public/images/images/Untitled-1.jpg', 'https://brotions.com/public/images/images/Certificate-2.pdf', 'https://brotions.com/public/images/images/Certificate-2.pdf', '2022-03-01 12:55:54', NULL),
(17, '23', 'SAUDI2', 'GM', '6565', '6565', '6565', '6565', '6565', '6565', 'https://brotions.com/public/images/images/1639558817053.jpg', 'https://brotions.com/public/images/images/Certificate-2.pdf', 'https://brotions.com/public/images/images/Certificate-2.pdf', '2022-03-01 13:05:11', NULL),
(18, '24', 'CleanAir Arabia', 'Manager', NULL, NULL, NULL, NULL, NULL, NULL, 'http://www.brotions.com/public/images/images/1280px-Test-Logo.svg.png', '', '', '2022-03-01 16:23:15', NULL),
(19, '25', 'PwC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://brotions.com/public/images/images/mh-logo-full_6 (1).png', '', '', '2022-03-04 11:12:46', NULL),
(20, '26', 'PwC', NULL, NULL, NULL, 'Riyadh - Qurtuba - Abdullah bin Markhan', NULL, '13245', 'Riyadh', 'https://www.brotions.com/public/images/images/2_Ahmad_PassPort.jpg', '', '', '2022-03-04 11:30:36', NULL),
(21, '27', 'acs', 'sasdas', '3423', '3232', '23423', '23423', '3334', 'edffweqrwqr', 'https://brotions.com/public/images/images/5570418.png', 'https://brotions.com/public/images/images/qamar nazir 3-17-2022.docx', 'https://brotions.com/public/images/images/qamar nazir 3-17-2022.docx', '2022-03-19 09:33:39', NULL),
(22, '28', 'Kareshion', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://127.0.0.1:8000/images/images/fihri sceen shots.png', '', '', '2022-04-05 19:55:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_opportunity`
--

CREATE TABLE `user_opportunity` (
  `id` int(11) NOT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `opp_type` varchar(255) DEFAULT NULL,
  `opp_title` varchar(255) DEFAULT NULL,
  `internal_reference` varchar(255) DEFAULT NULL,
  `due_date_radio` varchar(255) DEFAULT NULL,
  `bid_limit_radio` varchar(255) DEFAULT NULL,
  `urgent_opp_radio` varchar(255) DEFAULT NULL,
  `due_date` varchar(255) DEFAULT NULL,
  `bid_limit` varchar(255) DEFAULT NULL,
  `day_to_deliver` varchar(255) DEFAULT NULL,
  `payment_days` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `delivery_city` varchar(255) DEFAULT NULL,
  `instruction` text DEFAULT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `bidder_location` varchar(255) DEFAULT NULL,
  `province_id` varchar(255) DEFAULT NULL,
  `city_id` varchar(255) DEFAULT NULL,
  `fav_language` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_opportunity`
--

INSERT INTO `user_opportunity` (`id`, `current_address`, `opp_type`, `opp_title`, `internal_reference`, `due_date_radio`, `bid_limit_radio`, `urgent_opp_radio`, `due_date`, `bid_limit`, `day_to_deliver`, `payment_days`, `address`, `delivery_city`, `instruction`, `categories`, `bidder_location`, `province_id`, `city_id`, `fav_language`, `created_at`, `updated_at`, `user_id`) VALUES
(6, 'FDFDS', 'BigValue', '8', '9865', NULL, NULL, NULL, '2022-03-31', NULL, NULL, NULL, 'Another Address*', 'Delivery City*', 'Instruction', '4', 'Bidders Location*', '6', '10', 'combined', '2022-03-01 20:01:50', '2022-03-01 20:01:50', '22'),
(7, 'FDFDS', 'SmallValue', '8', '98654', '0', '0', '1', '2022-12-12', NULL, '30', '30', 'Another adress', 'Delivery city', 'I need delivery to HQ', '4', 'Dammam', '6', '10', 'combined', '2022-03-01 22:59:17', '2022-03-10 19:10:36', '22'),
(9, 'Qatif', 'SmallValue', '8', 'Test_H_01', '0', '0', '1', '2022-03-17', NULL, '10', '30', 'Qatif', 'Qatif', 'call me before the shipping date', '4', 'Anywhere', NULL, NULL, 'combined', '2022-03-04 18:25:23', '2022-03-04 18:25:23', '24');

-- --------------------------------------------------------

--
-- Table structure for table `user_opportunity_detail`
--

CREATE TABLE `user_opportunity_detail` (
  `id` int(11) NOT NULL,
  `opp_id` varchar(255) NOT NULL,
  `user_id` text NOT NULL,
  `item` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_opportunity_detail`
--

INSERT INTO `user_opportunity_detail` (`id`, `opp_id`, `user_id`, `item`, `description`, `quantity`, `created_at`, `updated_at`) VALUES
(6, '6', '22', 'Laptop', '27\"', '3', '2022-03-01 20:01:50', '2022-03-01 20:01:50'),
(7, '7', '22', 'Laptop', '27\"', '5', '2022-03-01 22:59:17', '2022-03-01 22:59:17'),
(8, '8', '21', 'pespi', 'nill', '10', '2022-03-03 03:12:21', '2022-03-03 03:12:21'),
(9, '9', '24', '40 Inc Smart TV', 'Smart TV', '50', '2022-03-04 18:25:23', '2022-03-04 18:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_opportunity_documents`
--

CREATE TABLE `user_opportunity_documents` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `opp_id` varchar(255) NOT NULL,
  `bidding_user_id` varchar(255) NOT NULL,
  `document_1` text NOT NULL,
  `document_name_1` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_opportunity_documents`
--

INSERT INTO `user_opportunity_documents` (`id`, `user_id`, `price`, `category_id`, `status`, `opp_id`, `bidding_user_id`, `document_1`, `document_name_1`, `created_at`, `updated_at`) VALUES
(4, '22', '10', '4', '1', '6', '23', 'a:1:{i:0;s:59:\"https://brotions.com/public/images/images/Certificate-2.pdf\";}', 'a:1:{i:0;s:17:\"Certificate-2.pdf\";}', '2022-03-01 20:13:24', '2022-03-01 23:06:28'),
(5, '24', '1000', '4', '1', '9', '26', 'a:1:{i:0;s:66:\"https://www.brotions.com/public/images/images/2_Ahmad_PassPort.jpg\";}', 'a:1:{i:0;s:20:\"2_Ahmad_PassPort.jpg\";}', '2022-03-04 18:41:08', '2022-03-04 18:43:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_setting`
--
ALTER TABLE `footer_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opp_category`
--
ALTER TABLE `opp_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opp_count`
--
ALTER TABLE `opp_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opp_not_required`
--
ALTER TABLE `opp_not_required`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opp_title`
--
ALTER TABLE `opp_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`(191),`tokenable_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_opportunity`
--
ALTER TABLE `user_opportunity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_opportunity_detail`
--
ALTER TABLE `user_opportunity_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_opportunity_documents`
--
ALTER TABLE `user_opportunity_documents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer_setting`
--
ALTER TABLE `footer_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `opp_category`
--
ALTER TABLE `opp_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `opp_count`
--
ALTER TABLE `opp_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `opp_not_required`
--
ALTER TABLE `opp_not_required`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `opp_title`
--
ALTER TABLE `opp_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_opportunity`
--
ALTER TABLE `user_opportunity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_opportunity_detail`
--
ALTER TABLE `user_opportunity_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_opportunity_documents`
--
ALTER TABLE `user_opportunity_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
