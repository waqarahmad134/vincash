-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2023 at 05:14 AM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vincashc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_emails`
--

CREATE TABLE `admin_emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_emails`
--

INSERT INTO `admin_emails` (`id`, `admin_email`, `created_at`, `updated_at`) VALUES
(10, 'billy@vincash.ca', '2022-06-16 18:58:15', '2022-07-29 21:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dealer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `city`, `payment_method`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(1, 'Tufail', 'Khan', 'sigidevelopers@gmail.com', 'asfa', 'Lahore', NULL, 7, '2022-05-16 10:11:54', '2022-05-16 10:11:54'),
(2, 'Nadeem', 'saif', 'sigidevelopers@gmail.com', '+92.03472299343', 'Lahore', NULL, 11, '2022-05-16 10:14:19', '2022-05-16 10:14:19'),
(3, 'Waqar', 'Gondal', 'sigidevelopers@gmail.com', '+92.03472299343', 'Lahore', NULL, 11, '2022-05-16 10:40:00', '2022-05-16 10:40:00'),
(4, 'Arslan', 'Khan', 'sigidevelopers@gmail.com', '03129312436', 'Lahore', NULL, 11, '2022-05-16 10:45:10', '2022-05-16 10:45:10'),
(5, 'Taimoor', 'Khan', 'sigidevelopers@gmail.com', '3214216183', 'Lahore', NULL, 6, '2022-05-17 04:45:11', '2022-05-17 04:45:11'),
(6, 'Uzair', 'Ayaz', 'sigidevelopers@gmail.com', '03129312436', 'Lahore', NULL, 12, '2022-05-17 09:22:39', '2022-05-17 09:22:39'),
(7, 'Zeeshan', 'Nawawz', 'zeeshannawaz393@gmail.com', '031233435354', 'Lahore', NULL, 13, '2022-05-17 09:52:41', '2022-05-17 09:52:41'),
(8, 'tam', 'saf', 'sigidevelopers@gmail.com', '+92.03472299343', 'Lahore', NULL, 12, '2022-05-18 05:47:54', '2022-05-18 05:47:54'),
(9, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'Lahore', NULL, 12, '2022-05-18 06:03:29', '2022-05-18 06:03:29'),
(10, 'tam', 'saf', 'sigidevelopers@gmail.com', '+92.03472299343', 'Lahore', NULL, 12, '2022-05-18 06:04:22', '2022-05-18 06:04:22'),
(11, 'tam', 'saf', 'sigidevelopers@gmail.com', '+92.03472299343', 'Lahore', NULL, 12, '2022-05-18 07:03:07', '2022-05-18 07:03:07'),
(12, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'Lahore', NULL, 12, '2022-05-18 07:06:51', '2022-05-18 07:06:51'),
(13, 'tam', 'saf', 'sigidevelopers@gmail.com', '+92.03472299343', 'Lahore', NULL, 11, '2022-05-18 07:49:59', '2022-05-18 07:49:59'),
(14, 'ali', 'aj', 'z@gmail.com', '123456789', 'Lahore', NULL, 17, '2022-05-22 17:06:39', '2022-05-22 17:06:39'),
(15, 'Shah', 'sd', 'zee@gmail.com', '123456', 'Lahore', NULL, 18, '2022-05-22 18:15:27', '2022-05-22 18:15:27'),
(16, 'fshe', 'sfhe', 'skelh@gmail.com', 'ehsl', 'Lahore', NULL, 19, '2022-05-22 19:55:24', '2022-05-22 19:55:24'),
(17, 'tam', 'saf', 'sigidevelopers@gmail.com', 'asfa', 'Lahore', NULL, 21, '2022-05-24 05:31:07', '2022-05-24 05:31:07'),
(18, 'tam', 'saf', 'sigidevelopers@gmail.com', 'asfa', 'Lahore', NULL, 21, '2022-05-24 05:31:35', '2022-05-24 05:31:35'),
(19, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'Lahore', NULL, 21, '2022-05-24 05:32:01', '2022-05-24 05:32:01'),
(20, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'Lahore', NULL, 21, '2022-05-24 05:32:29', '2022-05-24 05:32:29'),
(21, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'Lahore', NULL, 22, '2022-05-24 05:48:16', '2022-05-24 05:48:16'),
(22, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'ghh', NULL, 27, '2022-05-26 07:10:46', '2022-05-26 07:10:46'),
(23, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'ghh', NULL, 27, '2022-05-26 07:11:12', '2022-05-26 07:11:12'),
(24, 'sa', 'sa', 'as@gmail', 'sa', 'sa', NULL, 28, '2022-05-26 07:30:48', '2022-05-26 07:30:48'),
(25, 'tam', 'saf', 'sigidevelopers@gmail.com', '3434', 'ghh', NULL, 27, '2022-05-26 07:38:31', '2022-05-26 07:38:31'),
(26, '21', '12', '12@gmail', '12', '12', NULL, 28, '2022-05-26 11:45:07', '2022-05-26 11:45:07'),
(27, 'zxzx', 'zzxzxz', 'zxzx@gmail.com', 'zxzx', 'zxzxzx', 'Quickpay', 30, '2022-05-27 10:40:17', '2022-05-27 10:40:17'),
(28, 'zxzx', 'zzxzxz', 'zxzx@gmail.com', 'zxzx', 'zxzxzx', 'Quickpay', 30, '2022-05-27 10:43:06', '2022-05-27 10:43:06'),
(29, 'zxzx', 'zzxzxz', 'zxzx@gmail.com', 'zxzx', 'zxzxzx', 'Quickpay', 30, '2022-05-27 10:43:51', '2022-05-27 10:43:51'),
(30, 'zxzx', 'zzxzxz', 'zxzx@gmail.com', 'zxzx', 'zxzxzx', 'Quickpay', 30, '2022-05-27 10:44:27', '2022-05-27 10:44:27'),
(31, 'zxzx', 'zzxzxz', 'zxzx@gmail.com', 'zxzx', 'zxzxzx', 'Quickpay', 30, '2022-05-27 10:45:38', '2022-05-27 10:45:38'),
(32, 'zxzx', 'zzxzxz', 'zxzx@gmail.com', 'zxzx', 'zxzxzx', 'Quickpay', 30, '2022-05-27 10:49:07', '2022-05-27 10:49:07'),
(33, 'zxzx', 'zzxzxz', 'zxzx@gmail.com', 'zxzx', 'zxzxzx', 'Quickpay', 30, '2022-05-27 10:49:31', '2022-05-27 10:49:31'),
(34, 'zxzx', 'zzxzxz', 'zxzx@gmail.com', 'zxzx', 'zxzxzx', 'Quickpay', 30, '2022-05-27 10:51:58', '2022-05-27 10:51:58'),
(35, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'Quickpay', 30, '2022-05-27 10:52:41', '2022-05-27 10:52:41'),
(36, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'Quickpay', 30, '2022-05-27 10:54:00', '2022-05-27 10:54:00'),
(37, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'Quickpay', 30, '2022-05-27 10:55:23', '2022-05-27 10:55:23'),
(38, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'Quickpay', 30, '2022-05-27 10:58:08', '2022-05-27 10:58:08'),
(39, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'Quickpay', 71, '2022-05-27 11:00:38', '2022-05-27 11:00:38'),
(40, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'Quickpay', 30, '2022-05-27 11:00:51', '2022-05-27 11:00:51'),
(41, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'ghh', 'BankDraft', 31, '2022-05-27 11:10:10', '2022-05-27 11:10:10'),
(42, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'ghh', 'BankDraft', 31, '2022-05-27 11:11:45', '2022-05-27 11:11:45'),
(43, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'ghh', 'BankDraft', 32, '2022-05-27 11:14:55', '2022-05-27 11:14:55'),
(44, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'ghh', 'BankDraft', 32, '2022-05-27 11:16:03', '2022-05-27 11:16:03'),
(45, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'ghh', 'BankDraft', 32, '2022-05-27 11:18:59', '2022-05-27 11:18:59'),
(46, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'ghh', 'BankDraft', 32, '2022-05-27 11:28:09', '2022-05-27 11:28:09'),
(47, 'waqar', 'ahmad', 'qw@gmail.com', '13213213561', 'qw', 'Quickpay', 33, '2022-05-27 11:51:04', '2022-05-27 11:51:04'),
(48, 'abc', 'def', 'jkl@mnop.com', '7801234567', NULL, 'BankDraft', 35, '2022-05-27 16:35:25', '2022-05-27 16:35:25'),
(49, 'a', 'bb', 'cc@dd.com', '1234567890', 'edd', 'BankDraft', 35, '2022-05-31 05:49:49', '2022-05-31 05:49:49'),
(50, 'scsc', 'scs', 'scsc@gmail.com', 'csc', 'scsc', 'BankDraft', 36, '2022-05-31 07:38:53', '2022-05-31 07:38:53'),
(51, 'scsc', 'scs', 'scsc@gmail.com', 'csc', 'scsc', 'BankDraft', 36, '2022-05-31 07:40:43', '2022-05-31 07:40:43'),
(52, 'scsc', 'scs', 'scsc@gmail.com', 'csc', 'scsc', 'BankDraft', 36, '2022-05-31 07:40:54', '2022-05-31 07:40:54'),
(53, 'scsc', 'scs', 'scsc@gmail.com', 'csc', 'scsc', 'BankDraft', 36, '2022-05-31 07:41:00', '2022-05-31 07:41:00'),
(54, 'scsc', 'scs', 'scsc@gmail.com', 'csc', 'scsc', 'BankDraft', 36, '2022-05-31 07:44:41', '2022-05-31 07:44:41'),
(55, 'waqar', 'ahmad', 'qx@gmail.com', '13213213561', 'qw', 'Quickpay', 37, '2022-05-31 09:22:03', '2022-05-31 09:22:03'),
(56, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'ghh', 'Quickpay', 38, '2022-06-06 05:07:53', '2022-06-06 05:07:53'),
(57, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'ghh', 'Quickpay', 38, '2022-06-06 05:32:41', '2022-06-06 05:32:41'),
(58, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'ghh', 'Quickpay', 38, '2022-06-06 05:32:58', '2022-06-06 05:32:58'),
(59, 'tam', 'saf', 'sigidevelopers@gmail.com', '03129312436', 'ghh', 'Quickpay', 38, '2022-06-06 05:33:18', '2022-06-06 05:33:18'),
(60, 'nbvn', 'bvnbvn', 'nbvnbv@gmail.com', 'bvn', 'bvnbv', 'BankDraft', 39, '2022-06-06 13:22:19', '2022-06-06 13:22:19'),
(61, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'BankDraft', 39, '2022-06-06 13:24:48', '2022-06-06 13:24:48'),
(62, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'BankDraft', 39, '2022-06-06 13:28:49', '2022-06-06 13:28:49'),
(63, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'BankDraft', 39, '2022-06-06 13:30:45', '2022-06-06 13:30:45'),
(64, 'waqar', 'ahmad', 'qx@gmail.com', '13213213561', 'qw', 'Quickpay', 40, '2022-06-06 13:31:36', '2022-06-06 13:31:36'),
(65, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'Quickpay', 42, '2022-06-06 13:58:09', '2022-06-06 13:58:09'),
(66, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'Quickpay', 42, '2022-06-06 13:59:43', '2022-06-06 13:59:43'),
(67, 'nabeel', 'jessani', 'info@vincash.ca', '7809537842', 'Edmonton', 'BankDraft', 35, '2022-06-07 00:07:17', '2022-06-07 00:07:17'),
(68, 'nabeel', 'jessani', 'Jessani.nabeel@gmail.com', '7809537842', 'Edmonton', 'BankDraft', 35, '2022-06-07 00:07:48', '2022-06-07 00:07:48'),
(69, 'sad', 'aa', 'qvaaaa@gmail.com', '13213213561', 'qw', 'BankDraft', 28, '2022-06-13 20:34:35', '2022-06-13 20:34:35'),
(70, 'sad', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'Quickpay', 43, '2022-06-15 20:00:06', '2022-06-15 20:00:06'),
(71, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'Quickpay', 44, '2022-06-15 20:01:23', '2022-06-15 20:01:23'),
(72, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'Quickpay', 44, '2022-06-15 20:03:29', '2022-06-15 20:03:29'),
(73, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'Quickpay', 44, '2022-06-15 20:03:56', '2022-06-15 20:03:56'),
(74, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'BankDraft', 44, '2022-06-15 20:04:07', '2022-06-15 20:04:07'),
(75, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'BankDraft', 44, '2022-06-15 20:04:37', '2022-06-15 20:04:37'),
(76, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'BankDraft', 44, '2022-06-15 20:06:47', '2022-06-15 20:06:47'),
(77, 'waqar', 'ahmad', 'qz@gmail.com', '13213213561', 'qw', 'Quickpay', 45, '2022-06-15 20:07:03', '2022-06-15 20:07:03'),
(78, 'waqar', 'ahmad', 'qz@gmail.com', '13213213561', 'qw', 'Quickpay', 45, '2022-06-15 20:09:03', '2022-06-15 20:09:03'),
(79, 'waqar', 'ahmad', 'qz@gmail.com', '13213213561', 'qw', 'Quickpay', 45, '2022-06-15 20:09:24', '2022-06-15 20:09:24'),
(80, 'waqar', 'ahmad', 'qz@gmail.com', '13213213561', 'qw', 'Quickpay', 45, '2022-06-15 20:09:31', '2022-06-15 20:09:31'),
(81, 'waqar', 'ahmad', 'qz@gmail.com', '13213213561', 'qw', 'Quickpay', 45, '2022-06-15 20:12:24', '2022-06-15 20:12:24'),
(82, 'waqar', 'ahmad', 'qz@gmail.com', '13213213561', 'qw', 'Quickpay', 45, '2022-06-15 20:12:38', '2022-06-15 20:12:38'),
(83, 'waqar', 'ahmad', 'qz@gmail.com', '13213213561', 'qw', 'Quickpay', 45, '2022-06-15 20:13:55', '2022-06-15 20:13:55'),
(84, 'waqar', 'ahmad', 'qz@gmail.com', '13213213561', 'qw', 'Quickpay', 45, '2022-06-15 20:14:14', '2022-06-15 20:14:14'),
(85, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', 'BankDraft', 46, '2022-06-16 17:29:52', '2022-06-16 17:29:52'),
(86, 'waqar', 'ahmad', 'qz@gmail.com', '13213213561', 'qw', 'BankDraft', 47, '2022-06-16 17:31:52', '2022-06-16 17:31:52'),
(87, 'waqar', 'ahmad', 'qw@gmail.com', '13213213561', 'qw', 'BankDraft', 48, '2022-06-16 17:33:19', '2022-06-16 17:33:19'),
(88, 'waqar', 'ahmad', 'qx@gmail.com', '13213213561', 'qw', 'BankDraft', 50, '2022-06-16 18:54:50', '2022-06-16 18:54:50'),
(89, 'zfyu', 'dgffjg', 'fdfdg@gmail.com', '098764467887', 'abc', 'BankDraft', 52, '2022-06-17 12:26:27', '2022-06-17 12:26:27'),
(90, 'fasd', 'fadsf', 'dsfasd@gmail.com', 'fasdf', 'fadsf', 'BankDraft', 53, '2022-06-17 14:27:15', '2022-06-17 14:27:15'),
(91, 'fasd', 'fadsf', 'dsfasd@gmail.com', 'fasdf', 'fadsf', 'BankDraft', 53, '2022-06-17 14:27:35', '2022-06-17 14:27:35'),
(92, 'fasd', 'fadsf', 'dsfasd@gmail.com', 'fasdf', 'fadsf', 'BankDraft', 53, '2022-06-17 14:27:59', '2022-06-17 14:27:59'),
(93, 'waqar', 'ahmad', 'qasas@gmail.com', '13213213561', 'qw', 'BankDraft', 55, '2022-06-17 14:29:09', '2022-06-17 14:29:09'),
(94, 'gad', 'adsf', 'fasfdsf@fkadsflja.com', 'gfkadjfkl', 'fjadklsfj', 'BankDraft', 56, '2022-06-17 18:52:50', '2022-06-17 18:52:50'),
(95, 'fasdfa', 'fasdf', 'fasdf@fads.co', 'asdf', 'asdfad', 'BankDraft', 57, '2022-06-17 18:53:56', '2022-06-17 18:53:56'),
(96, 'waqar', 'ahmad', 'qx@gmail.com', '13213213561', 'qw', 'BankDraft', 58, '2022-06-17 18:54:42', '2022-06-17 18:54:42'),
(97, 'waqar', 'aa', 'qv@gmail.com', '13213213561', 'qw', 'BankDraft', 59, '2022-06-17 19:00:42', '2022-06-17 19:00:42'),
(98, 'fadsf', 'asdfa', 'adfsasd@fadsf.co', 'fasdfa', 'fadsf', 'BankDraft', 60, '2022-06-17 19:07:26', '2022-06-17 19:07:26'),
(99, 'larry', 'george', 'cpg481@icloud.com', '7806677233', 'halifax', 'BankDraft', 61, '2022-06-17 21:07:48', '2022-06-17 21:07:48'),
(100, 'larry', 'george', 'cpg481@icloud.com', '7806677233', 'halifax', 'BankDraft', 61, '2022-06-17 21:20:37', '2022-06-17 21:20:37'),
(101, 'johnny', 'george', 'cpg481@icloud.com', '17806677233', 'surrey', 'Quickpay', 61, '2022-06-17 21:22:12', '2022-06-17 21:22:12'),
(102, 'guy', 'boudreau', 'cpg481@icloud.com', '17806677233', 'surrey', 'BankDraft', 62, '2022-06-17 21:59:50', '2022-06-17 21:59:50'),
(103, 'waqar', 'ahmad', 'qx@gmail.com', '13213213561', 'qw', 'BankDraft', 63, '2022-06-20 18:12:35', '2022-06-20 18:12:35'),
(104, 'bruce', 'sanford', 'tackvest@yahoo.ca', '5064712359', 'oromocto', 'BankDraft', 64, '2022-07-08 22:19:17', '2022-07-08 22:19:17'),
(105, 'Sandra', 'Lyins', 'Lyons.sandra18874@gmail.com', '647-525-8478', 'Ridgeway', 'BankDraft', 68, '2022-07-19 02:08:41', '2022-07-19 02:08:41'),
(106, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'BankDraft', 70, '2022-07-27 18:07:10', '2022-07-27 18:07:10'),
(107, 'Hamza', 'Ali', 'hamzaali@gmail.com', '12345556565', 'Lahore', 'Quickpay', 70, '2022-07-27 18:12:42', '2022-07-27 18:12:42'),
(108, 'Hamza', 'Ali', 'hamzaali@gmail.com', '12345556565', 'Lahore', 'Quickpay', 70, '2022-07-27 18:14:41', '2022-07-27 18:14:41'),
(109, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'Quickpay', 70, '2022-07-27 18:19:57', '2022-07-27 18:19:57'),
(110, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'Quickpay', 70, '2022-07-27 18:20:37', '2022-07-27 18:20:37'),
(111, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'Quickpay', 70, '2022-07-27 18:21:06', '2022-07-27 18:21:06'),
(112, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'Quickpay', 70, '2022-07-27 18:21:41', '2022-07-27 18:21:41'),
(113, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'Quickpay', 70, '2022-07-27 18:22:14', '2022-07-27 18:22:14'),
(115, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', 'Quickpay', 72, '2022-07-27 18:49:16', '2022-07-27 18:49:16'),
(116, 'waqar', 'ahmad', 'qx@gmail.com', '13213213561', 'qw', NULL, 76, '2022-07-28 12:05:01', '2022-07-28 12:05:01'),
(117, 'waqar', 'ahmad', 'qx@gmail.com', '13213213561', 'qw', NULL, 77, '2022-07-28 12:05:42', '2022-07-28 12:05:42'),
(118, 'tam', 'saf', 'sigidevelopers@gmail.com', '13213213561', 'ghh', NULL, 78, '2022-07-28 12:07:31', '2022-07-28 12:07:31'),
(119, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 79, '2022-07-28 12:10:15', '2022-07-28 12:10:15'),
(120, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 80, '2022-07-28 12:11:40', '2022-07-28 12:11:40'),
(121, 'tam', 'saf', 'sigidevelopers@gmail.com', '13213213561', 'ghh', NULL, 81, '2022-07-28 12:15:30', '2022-07-28 12:15:30'),
(122, 'waqar', 'aa', 'waqarahmad134@yahoo.com', '03244704649', 'lahore', NULL, 82, '2022-07-28 12:17:46', '2022-07-28 12:17:46'),
(123, 'waqar', 'ahmad', 'qx@gmail.com', '13213213561', 'qw', NULL, 83, '2022-07-28 12:21:45', '2022-07-28 12:21:45'),
(124, 'Hamza', 'Ali', 'hamzaali@gmail.com', '12345556565', 'Lahore', NULL, 84, '2022-07-28 12:22:40', '2022-07-28 12:22:40'),
(125, 'Hamza', 'Ali', 'hamzaali@gmail.com', '12345556565', 'Lahore', NULL, 85, '2022-07-28 12:23:01', '2022-07-28 12:23:01'),
(126, 'waqar', 'ahmad', 'qwe@gmail.com', '13213213561', 'qw', NULL, 86, '2022-07-28 12:24:53', '2022-07-28 12:24:53'),
(127, 'Hamza', 'Ali', 'hamzaali@gmail.com', '12345556565', 'Lahore', NULL, 87, '2022-07-28 12:25:45', '2022-07-28 12:25:45'),
(128, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 88, '2022-07-28 12:53:57', '2022-07-28 12:53:57'),
(129, 'waqar', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', NULL, 89, '2022-07-28 12:57:54', '2022-07-28 12:57:54'),
(130, 'john', 'henry', 'cpg481@icloud.com', '780-667-7233', 'edonton', NULL, 90, '2022-07-28 13:15:04', '2022-07-28 13:15:04'),
(131, 'waqar', 'ahmad', 'sigidevelopers@gmail.com', '13213213561', 'qw', NULL, 91, '2022-07-28 14:01:30', '2022-07-28 14:01:30'),
(132, '23', 'ahmad', 'qc@gmail.com', '13213213561', 'qw', NULL, 92, '2022-07-28 14:07:14', '2022-07-28 14:07:14'),
(133, 'waqar', 'ahmad', 'arselgta5@gmail.com', '13213213561', 'qw', NULL, 93, '2022-07-28 14:11:19', '2022-07-28 14:11:19'),
(134, 'waqar', 'ahmad', 'arselgta5@gmail.com', '13213213561', 'qw', NULL, 94, '2022-07-28 14:20:42', '2022-07-28 14:20:42'),
(135, 'waqar', 'ahmad', 'arselgta5@gmail.com', '13213213561', 'qw', NULL, 95, '2022-07-28 14:21:53', '2022-07-28 14:21:53'),
(136, 'waqar', 'ahmad', 'arselgta5@gmail.com', '13213213561', 'qw', NULL, 96, '2022-07-28 14:23:06', '2022-07-28 14:23:06'),
(137, 'waqar', 'ahmad', 'arselgta5@gmail.com', '13213213561', 'qw', NULL, 97, '2022-07-28 14:23:47', '2022-07-28 14:23:47'),
(138, 'waqar', 'ahmad', 'arselgta5@gmail.com', '13213213561', 'qw', NULL, 98, '2022-07-28 14:25:04', '2022-07-28 14:25:04'),
(139, 'waqar', 'ahmad', 'arselgta5@gmail.com', '13213213561', 'qw', NULL, 99, '2022-07-28 14:25:12', '2022-07-28 14:25:12'),
(140, 'waqar', 'ahmad', 'arselgta5@gmail.com', '13213213561', 'qw', NULL, 100, '2022-07-28 14:25:17', '2022-07-28 14:25:17'),
(141, 'waqar', 'ahmad', 'arselgta5@gmail.com', '13213213561', 'qw', NULL, 101, '2022-07-28 14:26:16', '2022-07-28 14:26:16'),
(142, 'waqar', 'ahmad', 'arselgta5@gmail.com', '13213213561', 'qw', NULL, 102, '2022-07-28 14:27:59', '2022-07-28 14:27:59'),
(143, 'waqar', 'ahmad', 'arselgta5@gmail.com', '13213213561', 'qw', NULL, 103, '2022-07-28 14:28:53', '2022-07-28 14:28:53'),
(144, 'waqar', 'ahmad', 'arselgta5@gmail.com', '13213213561', 'qw', NULL, 104, '2022-07-28 14:29:55', '2022-07-28 14:29:55'),
(145, '56', 'ahmad', 'qwe@gmail.com', '13213213561', 'qw', NULL, 105, '2022-07-28 16:15:25', '2022-07-28 16:15:25'),
(146, '56', 'ahmad', 'qwe@gmail.com', '13213213561', 'qw', NULL, 106, '2022-07-28 16:22:22', '2022-07-28 16:22:22'),
(147, '56', 'ahmad', 'qwe@gmail.com', '13213213561', 'qw', NULL, 107, '2022-07-28 16:23:49', '2022-07-28 16:23:49'),
(148, '4554545', '54554', 'arsel@gmail.com', '45544545', '4545', NULL, 108, '2022-07-28 17:09:28', '2022-07-28 17:09:28'),
(149, '4554545', '54554', 'arsel@gmail.com', '45544545', '4545', NULL, 109, '2022-07-28 17:11:00', '2022-07-28 17:11:00'),
(150, '4554545', '54554', 'arsel@gmail.com', '45544545', '4545', NULL, 110, '2022-07-28 17:11:37', '2022-07-28 17:11:37'),
(151, '4554545', '54554', 'arsel@gmail.com', '45544545', '4545', NULL, 111, '2022-07-28 17:13:13', '2022-07-28 17:13:13'),
(152, '4554545', '54554', 'arsel@gmail.com', '45544545', '4545', NULL, 112, '2022-07-28 17:14:08', '2022-07-28 17:14:08'),
(153, '4554545', '54554', 'arsel@gmail.com', '45544545', '4545', NULL, 113, '2022-07-28 17:14:34', '2022-07-28 17:14:34'),
(154, '4554545', '54554', 'arsel@gmail.com', '45544545', '4545', NULL, 114, '2022-07-28 17:15:57', '2022-07-28 17:15:57'),
(155, '4554545', '54554', 'arsel@gmail.com', '45544545', '4545', NULL, 115, '2022-07-28 17:16:25', '2022-07-28 17:16:25'),
(156, '4554545', '54554', 'arsel@gmail.com', '45544545', '4545', NULL, 116, '2022-07-28 17:16:53', '2022-07-28 17:16:53'),
(157, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 117, '2022-07-28 17:54:59', '2022-07-28 17:54:59'),
(158, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 118, '2022-07-28 17:56:04', '2022-07-28 17:56:04'),
(159, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 119, '2022-07-28 17:56:28', '2022-07-28 17:56:28'),
(160, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 120, '2022-07-28 17:58:32', '2022-07-28 17:58:32'),
(161, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 121, '2022-07-28 17:58:43', '2022-07-28 17:58:43'),
(162, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 122, '2022-07-28 18:00:20', '2022-07-28 18:00:20'),
(163, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 123, '2022-07-28 18:00:49', '2022-07-28 18:00:49'),
(164, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 124, '2022-07-28 18:00:59', '2022-07-28 18:00:59'),
(165, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 125, '2022-07-28 18:03:26', '2022-07-28 18:03:26'),
(166, 'waqar', 'ahmad', 'q@gmail.com', '13213213561', 'qw', NULL, 126, '2022-07-28 18:03:39', '2022-07-28 18:03:39'),
(167, 'jhgjhk', 'bvbjjhj', 'gyuyiuy@gmail.com', '0765665', 'canada', NULL, 127, '2022-07-28 18:56:43', '2022-07-28 18:56:43'),
(168, 'christopher', 'george', 'cpg481@icloud.com', '7806677233', 'edmonton', 'BankDraft', 74, '2022-07-29 20:54:57', '2022-07-29 20:54:57'),
(169, 'Chrishtopher', 'george', 'cpg481@icloud.com', '7806677233', 'edmonton', 'BankDraft', 74, '2022-07-29 21:05:05', '2022-07-29 21:05:05'),
(170, 'christopher', 'george', 'cpg481@icloud.com', '7806677233', 'edmonton', 'BankDraft', 74, '2022-07-30 05:17:06', '2022-07-30 05:17:06'),
(171, 'billy', 'the man', 'cpg481@icloud.com', '7806677233', 'edmonton', NULL, 128, '2022-07-31 07:37:10', '2022-07-31 07:37:10'),
(172, 'billy', 'the man', 'cpg481@icloud.com', '7806677233', 'Edmonton', 'BankDraft', 128, '2022-07-31 07:38:34', '2022-07-31 07:38:34'),
(173, 'chris', 'george', 'cpg481@icloud.com', '7807907322', 'edmonton', NULL, 129, '2022-07-31 07:41:15', '2022-07-31 07:41:15'),
(174, 'vghsghjh', 'fhdhgdh', 'hhadhdghdgh', 'hdeafhhdghdg', 'hhdasghngfhgh', NULL, 130, '2022-07-31 07:42:44', '2022-07-31 07:42:44'),
(175, 'waqar', 'ahmad', 'waqarahmad134@gmail.com', '13213213561', 'qw', NULL, 132, '2022-08-02 16:32:59', '2022-08-02 16:32:59'),
(176, 'dsa', 'dsa', 'dsa', 'ads', 'ads', NULL, 133, '2022-08-02 16:45:56', '2022-08-02 16:45:56'),
(177, 'billy', 'John', 'info@vincash.ca', '7806677233', 'Edmonton', 'BankDraft', 128, '2022-08-04 19:55:50', '2022-08-04 19:55:50'),
(178, 'tam', 'saf', 'sigidevelopers@gmail.com', '13213213561', 'ghh', NULL, 134, '2022-08-04 20:00:39', '2022-08-04 20:00:39'),
(179, 'christopher', 'rock', 'info@vincash.ca', '780-667-7233', 'edmonton', NULL, 135, '2022-08-04 20:01:11', '2022-08-04 20:01:11'),
(180, 'Billy', 'the man', 'cpg481@icloud.com', '7806677233', 'Edmonton', NULL, 136, '2022-08-04 20:02:26', '2022-08-04 20:02:26'),
(181, 'hfd', 'fhd', 'hfd', 'fdh', 'fdh', NULL, 137, '2022-08-04 20:11:09', '2022-08-04 20:11:09'),
(182, 'billy', 'the man', 'cpg481@icloud.com', '7806677233', 'Edmonton', NULL, 138, '2022-08-04 20:14:02', '2022-08-04 20:14:02'),
(183, 'Kyle', 'Koehl', 'Kylebkoehl@gmail.com', '8673351799', 'Watson lake', NULL, 139, '2022-08-06 10:45:00', '2022-08-06 10:45:00'),
(184, 'Jason', 'Last', 'Last.f.jason@gmail.com', '819-664-7235', 'Gatineau', NULL, 140, '2022-08-09 05:21:41', '2022-08-09 05:21:41'),
(185, 'Marvin', 'sotto', 'marvin.sotto1985@gmail.com', '(780) 953-2515', 'Edmonton', NULL, 141, '2022-08-11 02:25:28', '2022-08-11 02:25:28'),
(186, 'Shane', 'Delisle', 'Shane.delisle1@gmail.com', '7059236050', 'Espanola', NULL, 142, '2022-08-12 08:26:14', '2022-08-12 08:26:14'),
(187, 'Sabrina', 'Legault', 'legaultsab@hotmail.com', '5148238114', 'Saint-Lazare', NULL, 143, '2022-08-12 10:30:54', '2022-08-12 10:30:54'),
(188, 'Sabrina', 'Legault', 'legaultsab@hotmail.com', '5148238114', 'Saint-Lazare', NULL, 144, '2022-08-12 10:30:55', '2022-08-12 10:30:55'),
(189, 'Amanda', 'Parrott', 'a.n.parrott@hotmail.com', '+1 7095472424', 'Clarenville', NULL, 145, '2022-08-13 05:05:02', '2022-08-13 05:05:02'),
(190, 'Marvin', 'Hairston', 'Hairston@live.ca', '5068759941', 'Barhurst', NULL, 146, '2022-08-14 20:04:22', '2022-08-14 20:04:22'),
(191, 'Tufail', 'Khan', 'tufailkhan5093@gmail.com', '03129312436', 'Attari Saroba', NULL, 147, '2022-10-16 04:21:42', '2022-10-16 04:21:42'),
(192, 'Caroline', 'Howell', 'carolineghowell@gmail.com', '2544958780', 'Waco', NULL, 148, '2022-11-17 08:39:28', '2022-11-17 08:39:28'),
(193, 'Morgan', 'Howell', 'LLhowell99@gmail.com', '2544958780', 'Waco', NULL, 149, '2022-11-17 09:21:05', '2022-11-17 09:21:05'),
(194, 'LaBeth', 'Pearce', 'Pearce.labeth@yahoo. Com', '8173570350', 'Alvarado', NULL, 150, '2023-04-19 22:13:42', '2023-04-19 22:13:42'),
(195, 'LaBeth', 'Pearce', 'Pearce.labeth@yahoo. Com', '8173570350', 'Alvarado', NULL, 151, '2023-04-19 22:13:58', '2023-04-19 22:13:58'),
(196, 'LaBeth', 'Pearce', 'Pearce.labeth@yahoo. Com', '8173570350', 'Alvarado', NULL, 152, '2023-04-19 22:14:15', '2023-04-19 22:14:15'),
(197, 'Shahaid', 'suhoo', 'shahaidsuhoo@final.com', '03410795753', 'kabirwala', NULL, 153, '2023-08-10 14:40:47', '2023-08-10 14:40:47'),
(198, 'Shahaid', 'suhoo', 'shahaidsuhoo@final.com', '03410795753', 'kabirwala', NULL, 154, '2023-08-10 14:40:49', '2023-08-10 14:40:49'),
(199, 'Shahaid', 'suhoo', 'shahaidsuhoo@final.com', '03410795753', 'kabirwala', NULL, 155, '2023-08-10 14:40:49', '2023-08-10 14:40:49'),
(200, 'iqraa', 'nawaz', 'iqranawaz0442@gmail.com', '032117766883', 'Lahore', NULL, 156, '2023-11-15 17:31:22', '2023-11-15 17:31:22'),
(201, 'iqraa', 'nawaz', 'iqranawaz0442@gmail.com', '032117766883', 'Lahore', NULL, 157, '2023-11-15 17:37:17', '2023-11-15 17:37:17'),
(202, 'Sigi', 'Technologies', 'sigidevelopers@gmail.com', '+923129312436', 'Lahore', NULL, 158, '2023-11-15 18:20:50', '2023-11-15 18:20:50'),
(203, 'Sigi', 'Technologies', 'sigidevelopers@gmail.com', '+92325468744', 'Lahore', 'BankDraft', 158, '2023-11-17 14:50:37', '2023-11-17 14:50:37'),
(204, 'Sigi', 'Technologies', 'sigidevelopers@gmail.com', '+92325468744', 'Lahore', 'BankDraft', 158, '2023-11-17 14:51:56', '2023-11-17 14:51:56'),
(205, 'Sigi', 'Technologies', 'sigidevelopers@gmail.com', '+92325468744', 'Lahore', 'BankDraft', 157, '2023-11-20 15:00:42', '2023-11-20 15:00:42'),
(206, 'Sigi', 'Technologies', 'sigidevelopers@gmail.com', '+92325468744', 'Lahore', 'BankDraft', 158, '2023-11-20 18:10:35', '2023-11-20 18:10:35'),
(207, 'Sigi', 'Technologies', 'sigidevelopers@gmail.com', '+92325468744', 'Lahore', NULL, 159, '2023-11-20 18:54:30', '2023-11-20 18:54:30'),
(208, 'Sigi', 'Technologies', 'sigidevelopers@gmail.com', '+92325468744', 'Lahore', 'Quickpay', 159, '2023-11-20 18:57:17', '2023-11-20 18:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `dealer_vehicles`
--

CREATE TABLE `dealer_vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vehicle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dealer_vehicles`
--

INSERT INTO `dealer_vehicles` (`id`, `dealer_id`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(244, 6, 7, '2022-06-09 17:24:21', '2022-06-09 17:24:21'),
(245, 7, 7, '2022-06-09 17:24:21', '2022-06-09 17:24:21'),
(256, 7, 6, '2022-06-10 11:46:24', '2022-06-10 11:46:24'),
(257, 14, 6, '2022-06-10 11:46:24', '2022-06-10 11:46:24'),
(258, 16, 6, '2022-06-10 11:46:24', '2022-06-10 11:46:24');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'How do I cash my payment from VinCash?', 'You can cash our bank drafts at your nearest financial institution with no hold. You’ll also get the receipt and the teller\'s copy of the draft, so you don’t have to spend time explaining anything to your bank’s representative. If you don’t like drafts, try our QuickPay option for faster cash.', 1, '2022-05-17 05:28:50', '2022-05-19 10:34:22'),
(13, 'Does VinCash buy bikes/ATV’s/RV’s?', 'Yes! If it rolls on tires or tracks, bring it on. We’ve bought many commercial trucks, busses, food trucks, trailers, heavy machinery, heavy equipment, ambulances, limos, bikes, ATVs, and RVs in the past—and we want more of them. Note that we may take a little longer to evaluate these vehicles, so hold tight while we come up with the best cash offer for you.', 1, '2022-05-19 11:54:16', '2022-05-19 11:54:16'),
(14, 'Will you buy my car with hail damage, dents, or other bodywork needs?', 'Yes! As long as you are honest and up-front with us about the condition of your vehicle, we are fine with buying your car in any condition. Make sure to disclose all the necessary details about your vehicle with pictures and descriptions to reduce the likelihood of being misquoted.', 1, '2022-05-19 11:57:07', '2022-05-19 11:57:07'),
(15, 'Will you buy my salvage title car?', 'YES. All salvage-titled vehicles have, at one point, suffered damage equal to at least 50% of the vehicle’s value, impacting both the buyer and the seller. Submit your VIN today so we can give you our best cash offer.', 1, '2022-05-19 11:57:20', '2022-05-19 11:57:20'),
(16, 'Will you buy my car that doesn’t run or is making weird sounds?', 'Yes. Provided you share all the necessary details about your vehicle, we are happy to make offers on mechanically-compromised cars.', 1, '2022-05-19 11:57:33', '2022-05-19 11:57:33'),
(17, 'Are your offers negotiable?', 'Yes. We know you want the best deal, and we want that too! While our buying team makes every effort to get an accurate value for your car, we’re always open for negotiations if you’re not happy with our first offer.', 0, '2022-05-19 11:57:48', '2022-07-28 18:57:10'),
(18, 'Who inspects my car before you pick it up? Do I have to drive it to your location?', 'Our transporter will inspect your vehicle, match it to the description you have provided, and exchange the documentation for payment. You don’t have to come to us; we’ll come to you.', 1, '2022-05-19 11:57:57', '2022-05-19 11:57:57'),
(19, 'Can I sell you a leased car?', 'Yes, we buy leased cars as long as you provide us with the correct information. Be sure you provide us with all the information about your leaseholder (bank, credit union, or the car’s finance company) and the current payoff amount.', 1, '2022-05-19 11:58:05', '2022-05-19 11:58:05'),
(20, 'What if I owe more than your purchase offer but still want to sell?', 'Don’t fret; this isn’t uncommon. The difference between our purchase offer and the amount owed is called negative equity. We offer a variety of simple options in this scenario. Submit your VIN today and have a representative walk you through your options.', 1, '2022-05-19 11:58:13', '2022-05-19 11:58:13'),
(21, 'What happens to all of the cars you purchase?', 'We redistribute them to dealers and other markets at a small margin.  We’ve even ship vehicles around the globe!', 1, '2022-05-19 11:58:26', '2022-05-19 11:58:26'),
(22, 'How long will it be until my bank receives the payoff?', 'We will fund your payoff immediately — we want the lien cleared as badly as you want the vehicle paid off! It can take a few days for your bank to process the payoff, which is why we quote a 10-day payoff for your financial institution. We cannot sell your vehicle until the lien is cleared.', 1, '2022-05-19 11:58:36', '2022-05-19 11:58:36'),
(23, 'I lost my registration — can I still sell you my vehicle?', 'YES. Contact one of our representatives and we will walk you through the next steps.', 1, '2022-05-19 11:58:50', '2022-05-19 11:58:50'),
(24, 'A family member’s name is on the registration. Can I still sell it to you?', 'YES. Get in touch with one of our representatives so we can walk through the next steps.', 1, '2022-05-19 11:59:08', '2022-05-19 11:59:08'),
(25, 'Do you guys pay in cash?', 'Cash is outdated! And, it is simply impractical to carry that much cash or keep it at our office. Besides, we also avoid cash for your safety and the safety of our drivers and office staff. Instead, check out our QuickPay option.', 1, '2022-05-19 11:59:30', '2022-05-19 11:59:30'),
(26, 'test fawa', 'sfhiiiiiiiiiikl', 0, '2022-05-22 21:30:31', '2022-05-22 21:31:17'),
(27, 'Will you buy my car with hail damage, dents, or other bodywork needs?', 'as', 0, '2022-06-06 14:05:46', '2022-06-06 14:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `memos`
--

CREATE TABLE `memos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `full_name`, `email`, `phone`, `zip`, `message`, `created_at`, `updated_at`) VALUES
(6, 'Tufail Khan', 'tufailkhan@gmail.com', '03244643817', '55150', 'This is my first message', '2022-05-16 09:48:51', '2022-05-16 09:48:51'),
(10, 'tam saf', 'sigidevelopers@gmail.com', '03129312436', '55150', 'sdfds', '2022-05-19 05:48:08', '2022-05-19 05:48:08'),
(11, 'tam saf', 'sigidevelopers@gmail.com', 'asfa', '55150', 'sdfsd', '2022-05-19 05:50:29', '2022-05-19 05:50:29'),
(12, 'waqar ahmad', 'q@gmail.com', '13213213561', 'qw', 'asdadsasdasdsad', '2022-05-19 07:10:49', '2022-05-19 07:10:49'),
(13, 'waqar ahmad', 'q@gmail.com', '13213213561', 'qw', 'sasasasa', '2022-05-19 07:10:57', '2022-05-19 07:10:57'),
(14, 'waqar ahmad', 'q@gmail.com', '13213213561', 'qw', 'sasasasa', '2022-05-19 07:10:57', '2022-05-19 07:10:57'),
(15, 'waqar ahmad', 'q@gmail.com', '13213213561', 'qw', 'sasasasa', '2022-05-19 07:10:57', '2022-05-19 07:10:57'),
(66, 'waqar ahmad', 'qasas@gmail.com', '13213213561', 'qw', NULL, '2022-05-19 12:44:06', '2022-05-19 12:44:06'),
(67, 'waqar ahmad', 'qasas@gmail.com', '13213213561', 'qw', NULL, '2022-05-19 12:44:24', '2022-05-19 12:44:24'),
(68, 'sa', 'sa', 'sa', 'sa', NULL, '2022-05-19 12:44:32', '2022-05-19 12:44:32'),
(69, 'waqar aa', 'qv@gmail.com', '13213213561', 'qw', NULL, '2022-05-19 12:55:54', '2022-05-19 12:55:54'),
(70, 'waqar ahmad', 'qz@gmail.com', '13213213561', 'qw', 'as', '2022-05-19 12:58:26', '2022-05-19 12:58:26'),
(71, 'tam saf', 'sigidevelopers@gmail.com', '3214216183', '55150', 'fgdfg', '2022-05-20 07:38:57', '2022-05-20 07:38:57'),
(72, 'tam saf', 'sigidevelopers@gmail.com', 'asfa', '55150', 'fgfgddg', '2022-05-20 11:45:08', '2022-05-20 11:45:08'),
(73, 'tam saf', 'sigidevelopers@gmail.com', '03129312436', '55150', 'sdfsdf', '2022-05-24 09:48:14', '2022-05-24 09:48:14'),
(74, 'tam saf', 'sigidevelopers@gmail.com', '3214216183sdfdsf', '55150', 'werwrer', '2022-05-24 09:49:03', '2022-05-24 09:49:03'),
(75, 'tam saf', 'sigidevelopers@gmail.com', '03244643817', '55150', 'sdsdf', '2022-05-24 09:49:25', '2022-05-24 09:49:25'),
(76, 'tam saf', 'sigidevelopers@gmail.com', '03129312436', '55150', 'sdf', '2022-05-24 09:50:28', '2022-05-24 09:50:28'),
(77, 'tam saf', 'sigidevelopers@gmail.com', '3214216183', '55150', 'sdfdsf', '2022-05-24 09:50:42', '2022-05-24 09:50:42'),
(78, 'Waqar Ahmad', 'waqar4704649@gmail.com', '03054464854', '346000', 'This is Waqar Chawan', '2022-05-25 04:35:22', '2022-05-25 04:35:22'),
(79, 'waqar ahmad', 'q@gmail.com', '13213213561', 'qw', 'as', '2022-06-06 13:21:13', '2022-06-06 13:21:13'),
(80, 'waqar ahmad', 'q@gmail.com', '13213213561', 'qw', 'as', '2022-06-06 13:21:35', '2022-06-06 13:21:35'),
(81, 'christopher george', 'cpg481@icloud.com', '7806677233', 't5k0b4', 'ljfehgwkrgwrfkgrfhg', '2022-06-17 21:29:09', '2022-06-17 21:29:09'),
(82, 'tam saf', 'sigidevelopers@gmail.com', '13213213561', '55150', 'dfasfd', '2022-07-27 18:52:19', '2022-07-27 18:52:19'),
(83, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 'Hi there', '2023-11-15 17:42:11', '2023-11-15 17:42:11'),
(84, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 'Hi there', '2023-11-15 17:42:22', '2023-11-15 17:42:22'),
(85, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 'Hi there', '2023-11-15 17:42:42', '2023-11-15 17:42:42'),
(86, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 'Hi there', '2023-11-15 17:43:07', '2023-11-15 17:43:07'),
(87, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 'as', '2023-11-20 12:10:30', '2023-11-20 12:10:30'),
(88, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 'sf', '2023-11-20 12:11:09', '2023-11-20 12:11:09'),
(89, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 's', '2023-11-20 14:27:11', '2023-11-20 14:27:11'),
(90, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 'asdad', '2023-11-20 14:28:18', '2023-11-20 14:28:18'),
(91, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 'ss', '2023-11-20 14:29:21', '2023-11-20 14:29:21'),
(92, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 'sszxxz', '2023-11-20 14:30:55', '2023-11-20 14:30:55'),
(93, 'Sigi Technologies', 'sigidevelopers1231@gmail.com', 'as', '54000', 'asd', '2023-11-20 14:33:02', '2023-11-20 14:33:02'),
(94, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 'ssxxxx', '2023-11-20 14:33:45', '2023-11-20 14:33:45'),
(95, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 'asd', '2023-11-20 14:42:33', '2023-11-20 14:42:33'),
(96, 'Sigi Technologies', 'sigidevelopers@gmail.com', '+92325468744', '54000', 'bb', '2023-11-20 18:17:22', '2023-11-20 18:17:22'),
(97, 'iqra', 'iqranawaz0442@gmail.com', '032183387733', '5400', 'hello sbshssssssssssssssssssssssnnnnnnnnnnnnnnnnnnnnnnnnnnnfffffffffffffffffffffffffffffffffffffffffffffffffffiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiieeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeexxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '2023-11-20 18:39:18', '2023-11-20 18:39:18');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_13_060850_create_vehicles_table', 1),
(7, '2014_10_12_000000_create_users_table', 3),
(8, '2022_05_13_113134_create_messages_table', 4),
(9, '2022_05_16_054428_create_settings_table', 5),
(10, '2022_05_13_065037_create_contacts_table', 6),
(11, '2022_05_16_102515_create_vehicle_options_table', 7),
(12, '2022_05_17_051534_create_faqs_table', 8),
(13, '2022_05_17_102408_create_dealer_vehicles_table', 9),
(14, '2022_05_18_051632_create_vehicle_images_table', 10),
(15, '2022_05_23_054549_create_cards_table', 11),
(16, '2022_05_24_115916_create_sold_vehicles_table', 12),
(17, '2022_06_06_052250_create_admin_emails_table', 13),
(18, '2022_06_09_073728_create_time_stamps_table', 14),
(20, '2022_06_09_110014_create_memos_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', 'ELQ1BoAN8LyAU0myv9stVf4hDIuaXMdwLNd72sjfDmx2LUKyHphTgAoDQlV2cTYJ', '2022-06-09 12:53:17'),
('admin@gmail.com', 'MNE8kFKJQZQhPIIhBVzaCE7m1C4r58mHivM5Tjgf0eVWLQv80M0S5AD4rITnO0Iy', '2022-06-09 12:53:42'),
('sigidevelopers@gmail.com', 'qLQwgGdzRvlQXbraoJ5JVsD6ibWrrY0nxC8TK53VV7jzVkcLQaaN1Z62Zxcpxgq5', '2022-06-09 12:55:00'),
('admin@vincash.com', 'MrCkTiVmYb4HiSu2RUoyStJnDvsJn2tlXzP9252diEvs5N9al1lXV5pat0mo5Hg4', '2023-08-02 22:14:51'),
('admin@vincash.com', 'Uy0iPgUK2Y50Rb0rRdkuLkV7URj4AmwhSKyehWvNIcoFTS8IYzTHgzMBRAsgAxJF', '2023-08-09 23:42:44'),
('admin@gmail.com', 'ZrLc9VPC8kBaau1ryTfOjQorol8JXkFnsiozgGr0k8H0oQ5LfsP038xaHyCerOtr', '2023-11-15 18:39:38'),
('admin@caicosgrab.com', 'g7ZNsyAtG1WdMjc9IXsKT1FUcXszNVfCq2innWfuRYnazpgZRV3znrPfZZlq7754', '2023-11-17 13:39:14'),
('dealer@gmail.com', 'G0hwHE0uRkzMGJRyfU281x9jPV3ypGxTaNk9M7csD5Okvanq086Nqs2dA1A8jRBL', '2023-11-17 13:45:37'),
('dealer@gmail.com', '8ZkSff3daxwYPDdzklhKOHLQnQRp3NLhbp2aMToKunfdZM0g7koz67LIA9ADqK8Q', '2023-11-17 13:47:06'),
('dealer@gmail.com', 'nxqwKcAgPOB2FXNeNSJWaNLzzSPRbUTlB1EH6Inv8Wt1gWESZ5Zvq6aFqGwQuVO8', '2023-11-17 14:04:32'),
('sigidevelopers@gmail.com', 'dimaWGHkt6mGJGGGYYCcTEZCRFF3bIflej3EB83alGGdQIDyl3LCAYsGa0Zd7kpK', '2023-11-17 14:21:31'),
('sigidevelopers@gmail.com', 'yu2pmyq6XhvMyxwFa9iAeW7qUW5XdVkNsy6aazKoyyLef1turqg9YymvKO0zRK17', '2023-11-17 14:23:53'),
('sigidevelopers@gmail.com', 'Ik9V2V7Etx4M2WJemjUFRusZkG0Jm6FCaMdKgTV3VaMM1befjAVT2aysaV9sjAWB', '2023-11-17 14:24:04'),
('sigidevelopers@gmail.com', '3yrIhuHf3Fj5ul4lFfnns18QfCFhtgPtTreagie0VJ7Qxr6StD8nBrzk7IfCrAWM', '2023-11-17 14:26:28'),
('sigidevelopers@gmail.com', 'hq2Fu0qFcH8x4cmhQ03y9E9RQxt4s6RnPnX0xOtiyvnIWqNylDfN4upmHU5prTYX', '2023-11-17 14:47:20'),
('sigidevelopers@gmail.com', 'HaiXy8zKoy7cmUTfeBoS0vMnvAtQTBxA7dSzTubVGmMSWjHGdvAznEpA24wxjqsj', '2023-11-17 18:02:12'),
('sigidevelopers@gmail.com', 'M5iBJJo2C91GYv0YgwJgNYnQD464hJDv18V01lfiUfI2rNgZx5qUx3BucQNxlJSV', '2023-11-17 18:05:26'),
('sigidevelopers@gmail.com', 'DtBK59ol1b3mUbeqZ9oeryBPlsXHzGMsTQLhtSIcbDHPwtgFswFOl06b6mALBFpU', '2023-11-17 18:06:40'),
('sigidevelopers@gmail.com', 'BANkkCyaPpqVWYU6PNV3lAXyVwC3uVwNwLeUOm91qi5gYJ5UX3fa1IoefhioUxsL', '2023-11-17 18:07:32'),
('sigidevelopers@gmail.com', 'xI2RYymeviJksbNhABfofvF57WdGXJJePdGuFoQCxBae07u3eCPBz2FdaS8DS52E', '2023-11-17 18:08:55'),
('sigidevelopers@gmail.com', 'UG0OsI9YfCtzpGWAckAXAEyd4nTipeoEKV1JsJjwYNCkwOJoTwpEv5yQtHmPslIN', '2023-11-17 18:10:10'),
('sigidevelopers@gmail.com', 'OgeJyDnvyMMlKlmoRxydBYaVrdwiaPLjv3siUg4aTTTtiuyExh8WF1VCj8LxerFg', '2023-11-17 18:11:04'),
('sigidevelopers@gmail.com', 'BWWkd3cguu92bu3YJG8iQv8XMpLnRdpRDVOWpP4VKtPlVzmaUuHwiG7BYX0roYTs', '2023-11-17 18:11:53'),
('sigidevelopers@gmail.com', 'LEbI88v8DQSFa96dWJ8FOCyDRcie5yqZgeUKlBxZOiX5CpQ570Vh9aiJhYEwBjnS', '2023-11-17 18:13:26'),
('sigidevelopers@gmail.com', 'yin1HC0o7afAZSwWAkmDtJc4w1VxrLpG0xlCZlHNt5dPzDDrZBx8tKmKqMaVoN9z', '2023-11-17 18:22:48'),
('sigidevelopers@gmail.com', 'Hl4q1O24dwqzRpQidqzH0nvqPRAZuLdXLVij4Vc04mLbjUOG3nrYLEOmxFS4ffrc', '2023-11-17 18:24:31'),
('sigidevelopers@gmail.com', 'bw9lBdnsv69J469Ms7HPxshuSw427yK6X3VXaiq8fGkVqOEz5zcmB147lDsqcDVU', '2023-11-20 14:50:54'),
('sigidevelopers@gmail.com', 'tMuF9S411W0hKHUhlNjqhuweApiLHxVrye2WgX9AcOpVzguVZx0pm9eRpUBKPlpd', '2023-11-20 18:26:56');

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'about_us', '<h6><span style=\"color: rgb(29, 28, 29); font-family: Slack-Lato, Slack-Fractions, appleLogo, sans-serif; font-size: 15px; font-variant-ligatures: common-ligatures; font-weight: 400;\">Hi we’re VINCash — Canada’s premium car buyer. We are a team of experts who have decades of experience in finding the highest value for anything with wheels. We shop multiple markets across the globe and have built a valuation tool designed to scan this complex marketplace and find the best value for you. Have you got a new or used Car?&nbsp; Truck?&nbsp; Van?&nbsp; SUV?&nbsp; Motorcycle?&nbsp; Quad?&nbsp; Fifth Wheel?&nbsp; RV?&nbsp; Trailer?&nbsp; you want to sell? Well, you’re in luck! We buy these new or used, offering the best prices possible guaranteed. You can simply list the details for us, set a pick-up time that works for you, and receive a cash offer within 60 seconds.</span><span class=\"c-mrkdwn__br\" data-stringify-type=\"paragraph-break\" style=\"box-sizing: inherit; display: block; height: 8px; color: rgb(29, 28, 29); font-family: Slack-Lato, Slack-Fractions, appleLogo, sans-serif; font-size: 15px; font-variant-ligatures: common-ligatures; font-weight: 400;\"></span><span style=\"color: rgb(29, 28, 29); font-family: Slack-Lato, Slack-Fractions, appleLogo, sans-serif; font-size: 15px; font-variant-ligatures: common-ligatures; font-weight: 400;\">With VINCash, there’s no more selling your car to the public or the car dealers. You can take more control of the process! Just sit back, relax, and get ready to get paid!</span></h6><h6><br></h6>', '2022-05-16 05:56:37', '2022-06-06 14:10:33'),
(2, 'title', '<h1 class=\"font-72 weight-700 aos-init aos-animate\" data-aos=\"fade-down\" style=\"font-weight: 700; font-size: 62px; pointer-events: auto; transition-duration: 0.4s; transition-timing-function: ease; transform: none; opacity: 1; transition-property: opacity, transform, -webkit-transform; color: rgb(33, 37, 41);\"><font face=\"Helvetica\">Sell your car for</font></h1><h1 class=\"font-72 weight-700 aos-init aos-animate\" data-aos=\"fade-down\" style=\"font-weight: 700; font-size: 62px; pointer-events: auto; transition-duration: 0.4s; transition-timing-function: ease; transform: none; opacity: 1; transition-property: opacity, transform, -webkit-transform; color: rgb(33, 37, 41);\"><font face=\"Helvetica\">cash with</font></h1><h1 class=\"font-72 weight-700 aos-init aos-animate\" data-aos=\"fade-down\" style=\"font-weight: 700; font-size: 62px; font-family: Lato, sans-serif; pointer-events: auto; transition-duration: 0.4s; transition-timing-function: ease; transform: none; opacity: 1; transition-property: opacity, transform, -webkit-transform; color: rgb(33, 37, 41);\"><span class=\"color-blue\" style=\"color: rgb(0, 163, 237);\">VIN</span>Cash</h1><div><br></div>', '2022-05-16 06:02:37', '2022-05-18 10:35:08'),
(3, 'footer', '<span style=\"font-family: Lato, sans-serif; font-size: 16px; text-align: center;\"><font color=\"#9c9c94\">©️ 2022 VinCash . ALL RIGHTS RESERVED.</font></span>', '2022-05-16 06:07:10', '2022-05-16 12:33:49'),
(4, 'logo', '1653367549.png', '2022-05-16 06:27:19', '2022-05-24 04:45:50'),
(5, 'phone', '1-780-953-7842', '2021-12-29 13:10:33', '2022-06-16 23:07:07'),
(6, 'footer_logo', 'Footer-Logo1652945991.png', '2022-05-19 07:39:16', '2022-05-19 07:39:51'),
(7, 'about_us_footer', '<p><span style=\"color: rgb(156, 156, 148); font-family: Lato, sans-serif; font-size: 24px;\">Sell us your new or used car with a hassle free process giving you a quick 60 second offer. No more selling to the public or dealer trade. Get paid for selling your vehicle with&nbsp;</span><span style=\"color: rgb(156, 156, 148); font-family: Lato, sans-serif; font-size: 24px;\">Sell us your new or used car with a hassle free process giving you a quick 60 second offer. No more selling to the public or dealer trade. Get paid for selling your vehicle with no pressure.</span><br></p>', '2022-05-20 10:46:57', '2022-05-22 18:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `sold_vehicles`
--

CREATE TABLE `sold_vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dealer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sold_vehicles`
--

INSERT INTO `sold_vehicles` (`id`, `payment_method`, `vehicle_id`, `dealer_id`, `created_at`, `updated_at`) VALUES
(21, 'Credit Card', 71, 6, '2022-07-27 18:47:47', '2022-07-27 18:47:47'),
(22, 'Credit Card', 148, 19, '2023-11-15 18:56:33', '2023-11-15 18:56:33'),
(23, 'Credit Card', 159, 19, '2023-11-20 18:59:10', '2023-11-20 18:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `time_stamps`
--

CREATE TABLE `time_stamps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assign_dealer` datetime DEFAULT NULL,
  `buy_vehicle` datetime DEFAULT NULL,
  `vehicle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_stamps`
--

INSERT INTO `time_stamps` (`id`, `assign_dealer`, `buy_vehicle`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(1, '2022-06-09 07:56:17', NULL, 19, '2022-06-09 14:54:47', '2022-06-09 14:56:17'),
(2, '2022-06-09 07:55:53', '2022-06-09 09:41:18', 21, '2022-06-09 14:55:53', '2022-06-09 16:41:18'),
(3, '2022-06-09 09:14:30', '2022-06-09 09:24:26', 18, '2022-06-09 16:08:07', '2022-06-09 16:24:26'),
(5, NULL, '2022-06-09 09:24:56', 12, '2022-06-09 16:24:56', '2022-06-09 16:24:56'),
(6, '2022-06-10 04:46:24', '2022-06-09 12:55:26', 6, '2022-06-09 17:10:38', '2022-06-10 11:46:24'),
(7, '2022-06-09 10:24:01', '2022-06-09 10:24:48', 13, '2022-06-09 17:24:01', '2022-06-09 17:24:48'),
(8, '2022-06-09 10:24:21', NULL, 7, '2022-06-09 17:24:21', '2022-06-09 17:24:21'),
(9, '2022-07-27 11:47:03', '2022-07-27 11:47:47', 71, '2022-07-27 18:47:03', '2022-07-27 18:47:47'),
(10, '2023-11-15 11:55:49', '2023-11-15 11:56:33', 148, '2023-11-15 18:55:49', '2023-11-15 18:56:33'),
(11, '2023-11-20 11:58:44', '2023-11-20 11:59:10', 159, '2023-11-20 18:58:44', '2023-11-20 18:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealer_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `device_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `dealer_company`, `city`, `state`, `postal_code`, `phone`, `email`, `user_type`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `device_token`) VALUES
(1, 'admin', 'Khan', 'vikitech', 'ghh', 'utah', '55150', '+92.03472299343', 'admin@gmail.com', 'admin', 1, NULL, '$2y$10$s2Vj/dovghAHj8F62LmjR.GBxC79PqLJc00smYCCYIt3KGM6ImOtO', NULL, '2022-05-13 11:07:49', '2023-11-15 17:15:55', 'dRQaMDnxrHtkB6nR9EV7sE:APA91bHhVjh8ih5iNabl_nmT5R6P_UgX-cYB-afqy73W9KN2ZBRK74Au17W9UgqiLB9rCCUTXkkw9hVMvnuxcsRPbqb_-jmtLYPutymvcU_XgHUqg3geM656YTH3dS2-idFoELM8FXQQ'),
(6, 'Taimooor', 'Sabir', 'vikitech', 'ghh', 'utah', '55150', '+92.03472299343', 'dealer@gmail.com', 'dealer', 1, NULL, '$2y$10$iFZMPXATxWY9mRmNpUzLYeNIZX/sWlbZFtzGLFtdiOmV28NsdsbJ.', NULL, '2022-05-17 10:14:55', '2023-11-15 18:50:34', 'dRQaMDnxrHtkB6nR9EV7sE:APA91bHhVjh8ih5iNabl_nmT5R6P_UgX-cYB-afqy73W9KN2ZBRK74Au17W9UgqiLB9rCCUTXkkw9hVMvnuxcsRPbqb_-jmtLYPutymvcU_XgHUqg3geM656YTH3dS2-idFoELM8FXQQ'),
(7, 'Nadeem', 'Khani', 'vikitech', 'ghh', 'utah', '55150', '+92.034722993433', 'sigidevelopers@gmail.com', 'dealer', 1, NULL, '$2y$10$AXYSQiN1pnELokNErurcy.xSUw5DNFX0Ze4Zts9LyqQMrRBiIA0i2', NULL, '2022-05-17 10:17:45', '2023-11-20 18:28:07', 'dRQaMDnxrHtkB6nR9EV7sE:APA91bHhVjh8ih5iNabl_nmT5R6P_UgX-cYB-afqy73W9KN2ZBRK74Au17W9UgqiLB9rCCUTXkkw9hVMvnuxcsRPbqb_-jmtLYPutymvcU_XgHUqg3geM656YTH3dS2-idFoELM8FXQQ'),
(8, 'Tufail', 'Khan', 'vikitech', 'ghh', 'utah', '55150', '+92.034722993433', 'sigidevelopers34sf5@gmail.com', 'dealer', 0, NULL, '$2y$10$ccWZw5ldOt11WhSM86TG2Oo1KrZGXrfc32z3vPqWiIhR502WiTYQ.', NULL, '2022-05-17 10:17:53', '2022-07-28 18:45:22', NULL),
(9, 'vincash', 'admin', NULL, 'ghh', NULL, '55150', '3214216183', 'admin@vincash.com', 'admin', 1, NULL, '$2y$10$MLuceVDt1NGnweJpSp8rWuzA2Ur1oZ2vSvLpwNkHNTGCo318qGeZW', NULL, '2022-05-19 06:08:45', '2022-08-04 20:25:56', NULL),
(10, 'q@gmail.com', 'sa', NULL, 'qw', NULL, 'qw', '13213213561', 'aaaaar@domain.com', 'dealer', 0, NULL, '$2y$10$CMOcjHhtTjUXxLYCWj9O6.7wMrY3qR8KWZ2LwrNFgUsAmYE44Lu1G', NULL, '2022-05-19 07:16:02', '2022-05-23 08:55:46', NULL),
(11, 'waqar', 'ahmad', 'aaaa', 'qw', 'ass', 'qw', '13213213561', 'q@gmail.com', 'dealer', 0, NULL, '$2y$10$VKTc7zNnx4rvgAG0ZlyhSe23CAjUtOG7WoF56IDw7lqAm/YsccT6u', NULL, '2022-05-19 07:17:48', '2022-06-09 11:38:23', NULL),
(12, 'sigidevelopers@gmail.com', 'sdfs', 'Sigi techonology', 'ghh', NULL, '55150', '3214216183', 'user22@domain.com', 'dealer', 0, NULL, '$2y$10$xB7cLQJCPuAO9wIJAbSUNOFWpsBEo/.41I/Gx1o4cwiTZJvvwpHEG', NULL, '2022-05-19 07:25:04', '2022-07-28 18:47:11', NULL),
(13, '11111q@gmail.com', '111111', '111', 'qw', NULL, 'qw', '13213213561', '11121212121@domain.com', 'dealer', 0, NULL, '$2y$10$mUx8Jm1NoCIVoUbEH4RwkeoXHgSsFrRgAJexUbl6mELYs2hH/wHi2', NULL, '2022-05-19 10:10:12', '2022-05-25 09:17:45', NULL),
(14, 'ze', 'na', NULL, 'lahore', NULL, '5200', '03024280958', 'zz@gmail.com', 'dealer', 0, NULL, '$2y$10$hBaAPRTI1Ui6S7cfgJNSiORuYqrdsxMY9lFW3emV6kWabBUY73mgK', NULL, '2022-05-22 17:22:29', '2022-07-28 18:51:51', NULL),
(15, 'Nabeel', 'Jes', 'xyxaa', 'lahrow', NULL, '4790', '123409', 'abcd@gmail.com', 'dealer', 0, NULL, '$2y$10$MGboAZN9CFhADnhvr7U04uxO3ZNtKFWVrLKAiR.oTO54Lf2/j0QuS', NULL, '2022-05-22 18:07:49', '2022-05-23 11:20:14', NULL),
(16, 'n', 'j', 'JH', 'edmonton', NULL, '90210', '7804444444', 'jh@gmail.com', 'dealer', 1, NULL, '$2y$10$gFU0XqYqgX9G9xO8rHfKQO0srxwzAtzxrR6MutZC4Rdcx6mRoSEI6', NULL, '2022-05-24 04:26:11', '2022-05-24 04:26:11', NULL),
(17, 'sigidevelopers@gmail.com', 'saf', 'vikitech', 'ghh', NULL, '678', '03129312436', 'admin1@gmail.com', 'dealer', 0, NULL, '$2y$10$sSadpt5qaReaCb7hywkrfujDvxlcEtlPafKrr6NzGFi8XemcX13J6', NULL, '2022-05-24 07:57:44', '2022-07-28 18:38:06', NULL),
(18, 'Billy', 'John', 'Ford', 'edmonton', NULL, 't5k0b4', '7807807800', 'dealer@vincash.ca', 'dealer', 0, NULL, '$2y$10$2pwR0dZ70mgjLDS9GYbtSej0QTaHApPf.Wli2yTdunTDoMj/95s1G', NULL, '2022-06-09 11:32:49', '2022-06-09 11:57:54', NULL),
(19, 'iqra', 'nawaz', NULL, 'Lahore', NULL, '54000', '032118877766', 'iqra@gmail.com', 'dealer', 1, NULL, '$2y$10$iNvtEwmzEEI2wCT8Nk5ihecTRhD0PoywxCpTePYWqfNQTDNmQoSdq', NULL, '2023-11-15 18:44:52', '2023-11-15 18:51:49', 'dRQaMDnxrHtkB6nR9EV7sE:APA91bHhVjh8ih5iNabl_nmT5R6P_UgX-cYB-afqy73W9KN2ZBRK74Au17W9UgqiLB9rCCUTXkkw9hVMvnuxcsRPbqb_-jmtLYPutymvcU_XgHUqg3geM656YTH3dS2-idFoELM8FXQQ'),
(20, 'Arslan', 'Arslan', 'Sigi Tech', 'Lahore', 'punjab', '54000', '032224477773333333', 'arsel@gmail.com', 'dealer', 1, NULL, '$2y$10$zMvaRixLd674UV2HS5D3NeHi7M7/IjulAKpcwB.MLCGHVwQ.dsw0y', NULL, '2023-11-20 18:43:32', '2023-11-20 18:46:34', 'dRQaMDnxrHtkB6nR9EV7sE:APA91bHhVjh8ih5iNabl_nmT5R6P_UgX-cYB-afqy73W9KN2ZBRK74Au17W9UgqiLB9rCCUTXkkw9hVMvnuxcsRPbqb_-jmtLYPutymvcU_XgHUqg3geM656YTH3dS2-idFoELM8FXQQ');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vin_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `make` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `km` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `est_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `replacing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vec_exterior_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_off_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lease_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `repair_cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `damage_history` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `sold` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `vin_number`, `vehicle_type`, `make`, `model`, `year`, `trim`, `km`, `postal_code`, `est_price`, `demand_price`, `replacing`, `vec_exterior_color`, `pay_off_bank`, `lease_company`, `repair_cost`, `damage_history`, `image`, `status`, `sold`, `created_at`, `updated_at`) VALUES
(71, 'adsf', 'car', 'Honda', 'y20', '2016', 'New', 'adf', 'asdf', '2540000', '6700099', 'no', 'Black', 'HBL', 'Sigi Techonology', NULL, 'Minor Damage', NULL, 0, 1, '2022-07-27 18:43:22', '2022-07-27 19:08:30'),
(72, 'qweqwe', 'car', 'Honda', 'y200', '2016', 'New', '213213', 'adsaf', NULL, NULL, 'no', 'white', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-27 18:49:00', '2022-07-28 18:37:49'),
(73, 's4365426543', 'car', 'sa', 'sa', 'sa', 'sa', '345', '435765', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-07-27 19:21:50', '2022-07-28 18:42:31'),
(74, '5ux53dp03n9l86442', 'SUV', 'BMW', 'X3', '2022', 'msport', '5000', 't5k0b4', NULL, NULL, 'no', 'white', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-27 20:35:19', '2022-07-30 05:17:06'),
(75, '654654654', 'car', 'as', 'asas', 'as', 'as', '654654', '654', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-07-28 11:42:20', '2022-07-28 18:47:16'),
(76, 'retret', 'car', 'Honda', 'y20', '2016', '2211', NULL, 'qw', '2540000', '333', 'yes', NULL, 'HBL', 'vikitech', '33400', 'Accident History', NULL, 0, 0, '2022-07-28 12:05:01', '2022-07-28 18:53:00'),
(77, 'retret', 'car', 'Honda', 'y20', '2016', '2211', NULL, 'qw', NULL, NULL, 'yes', NULL, 'HBL', 'vikitech', '33400', 'Accident History', NULL, 0, 0, '2022-07-28 12:05:42', '2022-07-29 21:03:12'),
(78, 'asdfasdf', 'car', 'Honda', 'y20', '2016', 'New', NULL, '55150', NULL, NULL, 'yes', NULL, 'HBL', 'vikitech', '33400', 'Minor Damage', NULL, 0, 0, '2022-07-28 12:07:31', '2022-07-29 21:05:29'),
(79, 'adfas', 'car', 'Honda', 'y20', '2016', '2211', NULL, 'qw', NULL, NULL, 'yes', 'white', 'HBL', 'vikitech', '5555', 'No Previous Accidents', NULL, 0, 0, '2022-07-28 12:10:15', '2022-07-28 13:12:48'),
(80, 'asdfsf', 'car', 'Honda', 'y20', '2016', 'New', NULL, 'qw', NULL, NULL, 'no', 'Black', 'HBL', 'vikitech', '11111', 'No Previous Accidents', NULL, 0, 0, '2022-07-28 12:11:40', '2022-07-29 21:05:35'),
(81, 'sdafasds', 'car', 'Honda', 'y20', '2016', 'New', 'asdadsf', '55150', '2540000', '6520000', 'no', 'white', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 12:15:30', '2022-07-28 13:12:27'),
(82, '465654654', 'car', 'aaa', 'asd', 'aa', 'assv', '44', '45645', '5000', '4000', 'no', 'red', NULL, NULL, NULL, 'Prevoius Airbag Deployed (Repaired)', NULL, 0, 0, '2022-07-28 12:17:46', '2022-07-29 21:05:41'),
(83, 'retretsaf', 'car', 'Honda', 'y20', '2016', 'New', 'asdfasdf', 'qw', NULL, NULL, 'no', 'Black', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 12:21:45', '2022-07-29 21:05:45'),
(84, 'sdfgfdsg', 'car', 'Honda', 'y20', '2016', 'New', 'sdfgdsfgdfsg', '54700', '2540000', '6700099', 'no', 'zxz', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 12:22:40', '2022-07-29 21:05:50'),
(85, 'sdfgfdsg', 'car', 'Honda', 'y20', '2016', 'New', 'sdfgdsfgdfsg', '54700', '2540000', '6700099', 'no', 'zxz', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 12:23:01', '2022-07-29 21:05:55'),
(86, 'asfasfdsafasd', 'car', 'Honda', 'y20', '2016', 'New', 'safsafdafs', 'qw', NULL, NULL, 'no', 'white', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 12:24:53', '2022-07-29 21:05:59'),
(87, 'asdfdasf', 'car', 'Honda', 'y20', '2016', 'New', 'sadffas', '54700', NULL, NULL, 'no', 'white', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 12:25:45', '2022-07-28 13:12:21'),
(88, 'sadfasdffasfd', 'car', 'Honda', 'y20', '2023', 'New', 'asfda', 'qw', NULL, NULL, 'no', 'Black', NULL, NULL, NULL, 'Minor Damage', NULL, 0, 0, '2022-07-28 12:53:57', '2022-07-29 21:06:04'),
(89, '132132132', 'car', '123', '132', '123', '132', '123', '132', NULL, NULL, 'no', '123', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-28 12:57:54', '2022-07-29 21:06:32'),
(90, 'hsgfjnfhjfhjgfhjfhj', 'car', 'bmw', 'x3', '2022`', 'msport', '5000', 't5k0b5', NULL, NULL, 'no', 'black', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 13:15:04', '2022-07-28 13:16:25'),
(91, '432525243', 'car', '43', '435', '3345', '435', '23', '234', NULL, NULL, 'no', '354', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-28 14:01:30', '2022-07-29 21:06:38'),
(92, '234324', 'car', 'sadsa324', '32432', '32432', '4324', '33454324', '3453', NULL, NULL, 'no', '234', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:07:14', '2022-07-29 21:06:43'),
(93, '324325', 'car', '435435345', '5435', '534543', '43543', '43543543', '543543543', NULL, NULL, 'no', '4353', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:11:19', '2022-07-29 21:06:47'),
(94, '321321321321', 'car', '321', '23213', '2131', '213213', '32132132112321', '321321', NULL, NULL, 'no', '11', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:20:42', '2022-07-29 21:06:52'),
(95, '321321321321', 'car', '321', '23213', '2131', '213213', '32132132112321', '321321', NULL, NULL, 'no', '11', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:21:53', '2022-07-29 21:06:58'),
(96, '321321321321', 'car', '321', '23213', '2131', '213213', '32132132112321', '321321', NULL, NULL, 'no', '11', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:23:06', '2022-07-29 21:07:03'),
(97, '321321321321', 'car', '321', '23213', '2131', '213213', '32132132112321', '321321', NULL, NULL, 'no', '11', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:23:47', '2022-07-29 21:07:08'),
(98, '321321321321', 'car', '321', '23213', '2131', '213213', '32132132112321', '321321', NULL, NULL, 'no', '11', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:25:04', '2022-07-29 21:07:13'),
(99, '321321321321', 'car', '321', '23213', '2131', '213213', '32132132112321', '321321', NULL, NULL, 'no', '11', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:25:12', '2022-07-29 21:07:32'),
(100, '321321321321', 'car', '321', '23213', '2131', '213213', '32132132112321', '321321', NULL, NULL, 'no', '11', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:25:17', '2022-07-29 21:07:36'),
(101, '321321321321', 'car', '321', '23213', '2131', '213213', '32132132112321', '321321', NULL, NULL, 'no', '11', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:26:16', '2022-07-29 21:07:40'),
(102, '321321321321', 'car', '321', '23213', '2131', '213213', '32132132112321', '321321', NULL, NULL, 'no', '11', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:27:59', '2022-07-29 21:07:44'),
(103, '321321321321', 'car', '321', '23213', '2131', '213213', '32132132112321', '321321', NULL, NULL, 'no', '11', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:28:53', '2022-07-29 21:07:48'),
(104, '321321321321', 'car', '321', '23213', '2131', '213213', '32132132112321', '321321', NULL, NULL, 'no', '11', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 14:29:55', '2022-07-29 21:07:53'),
(105, '432554325432', 'car', '654', '6756756', '7567', '5675675', '54327567657', '543', NULL, NULL, 'no', '567567567657', NULL, NULL, NULL, 'Prevoius Airbag Deployed (Repaired)', NULL, 0, 0, '2022-07-28 16:15:25', '2022-07-29 21:07:59'),
(106, '432554325432', 'car', '654', '6756756', '7567', '5675675', '54327567657', '543', NULL, NULL, 'no', '567567567657', NULL, NULL, NULL, 'Prevoius Airbag Deployed (Repaired)', NULL, 0, 0, '2022-07-28 16:22:22', '2022-07-29 21:08:03'),
(107, '432554325432', 'car', '654', '6756756', '7567', '5675675', '54327567657', '543', NULL, NULL, 'no', '567567567657', NULL, NULL, NULL, 'Prevoius Airbag Deployed (Repaired)', NULL, 0, 0, '2022-07-28 16:23:49', '2022-07-29 21:08:07'),
(108, '33434334343443343343434', 'truck', '34343434343434', '433434', '3434343434', '43434343434343433', '343434343434', '3434343434343', NULL, NULL, 'no', '43434', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 17:09:28', '2022-07-29 21:08:12'),
(109, '33434334343443343343434', 'truck', '34343434343434', '433434', '3434343434', '43434343434343433', '343434343434', '3434343434343', NULL, NULL, 'no', '43434', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 17:11:00', '2022-07-29 21:08:15'),
(110, '33434334343443343343434', 'truck', '34343434343434', '433434', '3434343434', '43434343434343433', '343434343434', '3434343434343', NULL, NULL, 'no', '43434', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 17:11:37', '2022-07-29 21:08:20'),
(111, '33434334343443343343434', 'truck', '34343434343434', '433434', '3434343434', '43434343434343433', '343434343434', '3434343434343', NULL, NULL, 'no', '43434', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 17:13:13', '2022-07-29 21:08:24'),
(112, '33434334343443343343434', 'truck', '34343434343434', '433434', '3434343434', '43434343434343433', '343434343434', '3434343434343', NULL, NULL, 'no', '43434', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 17:14:08', '2022-07-29 21:08:29'),
(113, '33434334343443343343434', 'truck', '34343434343434', '433434', '3434343434', '43434343434343433', '343434343434', '3434343434343', NULL, NULL, 'no', '43434', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 17:14:34', '2022-07-29 21:08:33'),
(114, '33434334343443343343434', 'truck', '34343434343434', '433434', '3434343434', '43434343434343433', '343434343434', '3434343434343', NULL, NULL, 'no', '43434', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 17:15:57', '2022-07-29 21:08:37'),
(115, '33434334343443343343434', 'truck', '34343434343434', '433434', '3434343434', '43434343434343433', '343434343434', '3434343434343', NULL, NULL, 'no', '43434', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 17:16:25', '2022-07-29 21:08:41'),
(116, '33434334343443343343434', 'truck', '34343434343434', '433434', '3434343434', '43434343434343433', '343434343434', '3434343434343', NULL, NULL, 'no', '43434', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-28 17:16:53', '2022-07-29 21:08:46'),
(117, '4324321432', 'car', '321', '3242', '2342', '24332', '324', '324', NULL, NULL, 'no', '234', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-28 17:54:59', '2022-07-29 21:08:49'),
(118, '4324321432', 'car', '321', '3242', '2342', '24332', '324', '324', NULL, NULL, 'no', '234', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-28 17:56:03', '2022-07-29 21:08:54'),
(119, '4324321432', 'car', '321', '3242', '2342', '24332', '324', '324', NULL, NULL, 'no', '234', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-28 17:56:28', '2022-07-29 21:09:04'),
(120, '4324321432', 'car', '321', '3242', '2342', '24332', '324', '324', NULL, NULL, 'no', '234', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-28 17:58:32', '2022-07-29 21:09:09'),
(121, '4324321432', 'car', '321', '3242', '2342', '24332', '324', '324', NULL, NULL, 'no', '234', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-28 17:58:43', '2022-07-29 21:09:18'),
(122, '4324321432', 'car', '321', '3242', '2342', '24332', '324', '324', NULL, NULL, 'no', '234', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-28 18:00:20', '2022-07-29 21:09:22'),
(123, '4324321432', 'car', '321', '3242', '2342', '24332', '324', '324', NULL, NULL, 'no', '234', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-28 18:00:49', '2022-07-29 21:09:26'),
(124, '4324321432', 'car', '321', '3242', '2342', '24332', '324', '324', NULL, NULL, 'no', '234', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-28 18:00:59', '2022-07-29 21:09:30'),
(125, '4324321432', 'car', '321', '3242', '2342', '24332', '324', '324', NULL, NULL, 'no', '234', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-28 18:03:26', '2022-07-29 21:09:34'),
(126, '4324321432', 'car', '321', '3242', '2342', '24332', '324', '324', NULL, NULL, 'no', '234', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-07-28 18:03:39', '2022-07-29 21:09:37'),
(127, '1jhgui22u222544', 'car', 'asjkjshkja', 'abamaj', 'as mama,mas', 'sa n nsm', '25', '4256', NULL, NULL, 'no', 'asmdan', NULL, NULL, NULL, 'Minor Damage', NULL, 0, 0, '2022-07-28 18:56:43', '2022-07-31 12:49:33'),
(128, 'gjryjyjkhgkgjkghk', 'car', 'bmw', 'x3', '2022', 'm sport', '5000', 't5k0b4', NULL, NULL, 'no', 'purple', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-31 07:37:10', '2022-08-04 19:55:50'),
(129, '2561646444646464', 'car', 'bmw', 'x3', '2022', 'msport', '57500', 't5k0b4', NULL, NULL, 'no', 'red', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-31 07:41:15', '2022-07-31 12:49:39'),
(130, 'wegdfh4hgf6hg6h565h', 'car', 'bmw', 'x3', '2022', 'msport', '57500', 't5k0b4', NULL, NULL, 'no', 'red', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-07-31 07:42:44', '2022-08-04 20:16:44'),
(131, '1FMCU0D72CKA11286', 'car', 'FORD', 'ESCAPE', '2012', 'XLS', '134987 KM', 'N3V 1E3', NULL, NULL, 'no', 'BLUE', NULL, NULL, '500.00', 'Minor Damage', NULL, 0, 0, '2022-07-31 21:30:14', '2023-11-15 18:53:00'),
(132, '21432432532', 'car', '435', '345', '435', '345', '543543543', '5435', NULL, NULL, 'no', '435', NULL, NULL, NULL, 'Accident History', NULL, 0, 0, '2022-08-02 16:32:59', '2022-08-04 20:16:52'),
(133, '11111212121212', 'car', 'sad', 'dsa', 'dsa', 'dsa', '45645', '546', NULL, NULL, 'no', 'dsa', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-08-02 16:45:56', '2022-08-04 20:17:00'),
(134, 'sadfasdff', 'car', 'asdfdsa', 'y20', '2016', 'asdf', '2222222', '55150', NULL, NULL, 'no', '324', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-08-04 20:00:38', '2022-08-04 20:17:51'),
(135, 'adfhadfghdhdhdg', 'car', 'bmw', 'x3', '2022', 'msport', '5000', 't5k0b4', NULL, NULL, 'no', 'purple', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-08-04 20:01:11', '2022-08-04 20:17:56'),
(136, 'gjryjyjkhgkgjkghkhh', 'car', 'bmw', '335i', '2022', 'm sport', '5000', 't5k0b4', NULL, NULL, 'no', 'yellow', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-08-04 20:02:26', '2022-08-04 20:18:09'),
(137, 'retretgcchg', 'car', 'gs', 'gd', 'd', 'dg', '2222222', 'asdf', NULL, NULL, 'yes', 'dg', NULL, 'hfd', 'gds', 'No Previous Accidents', NULL, 0, 0, '2022-08-04 20:11:09', '2022-08-04 20:18:15'),
(138, 'gjryjyjkhgkgjkghkjjjhhh', 'car', 'lexus', '335i', '2022', 'm sport', '5000', 't5k0b4', NULL, NULL, 'no', 'green', NULL, NULL, NULL, 'No Previous Accidents', NULL, 0, 0, '2022-08-04 20:14:02', '2022-08-04 20:18:18'),
(139, '2G1FT1EW0A9193383', 'car', 'Chevrolet', 'Camaro', '2010', 'Ss', '60000', 'Y0A1C0', NULL, NULL, 'no', 'Silver', NULL, NULL, NULL, 'No Previous Accidents', NULL, 1, 0, '2022-08-06 10:45:00', '2022-08-06 10:45:00'),
(140, '1FTFW1EG8JFA81834', 'truck', 'Ford', 'F150', '2018', 'Xlt', '87000', 'J8l2n2', NULL, NULL, 'no', 'Black', 'Ford', NULL, NULL, 'No Previous Accidents', NULL, 1, 0, '2022-08-09 05:21:41', '2022-08-09 05:21:41'),
(141, '4JGDF7DE5GA706105', 'SUV', 'Mercedes', 'Gl550', '2016', 'N/a', '102000', 'T6W 4E8', NULL, NULL, 'no', 'White', '23800', NULL, NULL, 'Minor Damage', NULL, 1, 0, '2022-08-11 02:25:28', '2022-08-11 02:25:28'),
(142, '3FMTK3SU1NMA07791', 'car', 'Ford', 'Mustang Mach-E', '2022', 'Premium Extended Range AWD', '26523', 'P5E1N1', NULL, NULL, 'no', 'Blue', 'Ford credit', NULL, NULL, 'No Previous Accidents', NULL, 1, 0, '2022-08-12 08:26:14', '2022-08-12 08:26:14'),
(143, '5NPDH4AE2BH038931', 'car', 'Hyundai', 'Elantra', '2011', 'GLS', '205000', 'J7T 3B5', NULL, NULL, 'no', 'Black', NULL, NULL, '1000', 'Minor Damage', NULL, 1, 0, '2022-08-12 10:30:54', '2022-08-12 10:30:54'),
(144, '5NPDH4AE2BH038931', 'car', 'Hyundai', 'Elantra', '2011', 'GLS', '205000', 'J7T 3B5', NULL, NULL, 'no', 'Black', NULL, NULL, '1000', 'Minor Damage', NULL, 1, 0, '2022-08-12 10:30:55', '2022-08-12 10:30:55'),
(145, '1Fm5K8DH4KGA65843', 'SUV', 'Ford', 'Explorer', '2019', 'Xlt', '73000', 'A5A3A1', NULL, NULL, 'yes', 'Black', NULL, NULL, NULL, 'No Previous Accidents', NULL, 1, 0, '2022-08-13 05:05:02', '2022-08-13 05:05:02'),
(146, '3N1AB8CV2LY293451', 'car', 'Nissan', 'Sentra', '2020', 'Sv', '13000', 'E2a3j4', NULL, NULL, 'no', 'Grey', '24000', NULL, NULL, 'Minor Damage', NULL, 1, 0, '2022-08-14 20:04:22', '2022-08-14 20:04:22'),
(147, '234243', 'car', 'HOnda', 'Civic', '2020', 'no', '233333', '23424', NULL, NULL, 'no', 'Black', NULL, NULL, NULL, 'Accident History', NULL, 1, 0, '2022-10-16 04:21:42', '2022-10-16 04:21:42'),
(148, '5UXKR2C58FOH36423', 'car', 'BMW', 'X5', '2015', 'tan', '98400', '76710', '10000', '8000', 'no', 'white', NULL, NULL, '1000', 'No Previous Accidents', NULL, 1, 1, '2022-11-17 08:39:28', '2023-11-15 18:56:33'),
(149, '1C4BJWEG6FL708615', 'car', 'Jeep', 'Wrangler', '2015', 'tan', '74000', '76710', NULL, NULL, 'no', 'white', NULL, NULL, NULL, 'Minor Damage', NULL, 1, 0, '2022-11-17 09:21:05', '2022-11-17 09:21:05'),
(150, '1G1FB3dx8k0136546', 'car', 'Chevy', 'Camaro', '2019', 'Lt', '81867', '76009', NULL, NULL, 'no', 'White', NULL, NULL, NULL, 'Accident History', NULL, 1, 0, '2023-04-19 22:13:42', '2023-04-19 22:13:42'),
(151, '1G1FB3dx8k0136546', 'car', 'Chevy', 'Camaro', '2019', 'Lt', '81867', '76009', NULL, NULL, 'no', 'White', NULL, NULL, NULL, 'Accident History', NULL, 1, 0, '2023-04-19 22:13:58', '2023-04-19 22:13:58'),
(152, '1G1FB3dx8k0136546', 'car', 'Chevy', 'Camaro', '2019', 'Lt', '81867', '76009', NULL, NULL, 'no', 'White', NULL, NULL, NULL, 'Accident History', NULL, 1, 0, '2023-04-19 22:14:15', '2023-04-19 22:14:15'),
(153, '45454545454545456', 'car', 'Sffgh', '8i', '2022', 'tygh', 'Efxfgy', '45459045', NULL, NULL, 'yes', 'blu', '45556', 'Shoes', NULL, 'Minor Damage', NULL, 1, 0, '2023-08-10 14:40:47', '2023-08-10 14:40:47'),
(154, '45454545454545456', 'car', 'Sffgh', '8i', '2022', 'tygh', 'Efxfgy', '45459045', NULL, NULL, 'yes', 'blu', '45556', 'Shoes', NULL, 'Minor Damage', NULL, 1, 0, '2023-08-10 14:40:49', '2023-08-10 14:40:49'),
(155, '45454545454545456', 'car', 'Sffgh', '8i', '2022', 'tygh', 'Efxfgy', '45459045', NULL, NULL, 'yes', 'blu', '45556', 'Shoes', NULL, 'Minor Damage', NULL, 1, 0, '2023-08-10 14:40:49', '2023-08-10 14:40:49'),
(156, '123457775522222222', 'car', '100', '1200', '2000', '100', '20', '54000', NULL, NULL, 'yes', 'white', '1000', 'dggdgdnnnjj', '1000', 'Accident History', NULL, 1, 0, '2023-11-15 17:31:22', '2023-11-15 17:31:22'),
(157, '123457775522222222', 'car', '100', '1200', '2000', '100', '20', '54000', NULL, NULL, 'no', 'whiteR', NULL, NULL, NULL, 'No Previous Accidents', NULL, 1, 0, '2023-11-15 17:37:17', '2023-11-20 15:00:42'),
(158, '1234567876555555555555555', 'car', '22222222222222', '1200', '21211', '100', '40', '54000', NULL, NULL, 'yes', 'white', NULL, '100', NULL, 'Minor Damage', NULL, 1, 0, '2023-11-15 18:20:50', '2023-11-20 18:10:35'),
(159, '1010101101011011010', 'car', '22222222222222', 'sjsjsjjs', '2000', '100', '100', '54000', '3000', '123123123', 'no', 'red', NULL, NULL, NULL, 'No Previous Accidents', NULL, 1, 1, '2023-11-20 18:54:30', '2023-11-20 18:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_images`
--

CREATE TABLE `vehicle_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_images`
--

INSERT INTO `vehicle_images` (`id`, `image`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(21, 'VehicleImage-10388.png', 11, '2022-05-18 07:49:59', '2022-05-18 07:49:59'),
(22, 'VehicleImage-67750.png', 11, '2022-05-18 07:49:59', '2022-05-18 07:49:59'),
(23, 'VehicleImage-10415.jpeg', 11, '2022-05-18 07:49:59', '2022-05-18 07:49:59'),
(24, 'VehicleImage-22901.png', 11, '2022-05-18 07:49:59', '2022-05-18 07:49:59'),
(25, 'VehicleImage-25815.PNG', 17, '2022-05-22 17:06:39', '2022-05-22 17:06:39'),
(26, 'VehicleImage-38403.PNG', 17, '2022-05-22 17:06:39', '2022-05-22 17:06:39'),
(27, 'VehicleImage-88616.PNG', 17, '2022-05-22 17:06:39', '2022-05-22 17:06:39'),
(28, 'VehicleImage-11352.PNG', 18, '2022-05-22 18:15:27', '2022-05-22 18:15:27'),
(29, 'VehicleImage-43579.PNG', 18, '2022-05-22 18:15:27', '2022-05-22 18:15:27'),
(30, 'VehicleImage-65469.PNG', 18, '2022-05-22 18:15:27', '2022-05-22 18:15:27'),
(31, 'VehicleImage-29366.png', 21, '2022-05-24 05:31:07', '2022-05-24 05:31:07'),
(32, 'VehicleImage-96573.png', 21, '2022-05-24 05:31:35', '2022-05-24 05:31:35'),
(33, 'VehicleImage-27659.png', 21, '2022-05-24 05:32:01', '2022-05-24 05:32:01'),
(34, 'VehicleImage-94474.png', 21, '2022-05-24 05:32:29', '2022-05-24 05:32:29'),
(35, 'VehicleImage-70692.png', 22, '2022-05-24 05:48:16', '2022-05-24 05:48:16'),
(36, 'VehicleImage-28833.png', 27, '2022-05-26 07:10:46', '2022-05-26 07:10:46'),
(37, 'VehicleImage-18743.png', 27, '2022-05-26 07:11:12', '2022-05-26 07:11:12'),
(38, 'VehicleImage-6024.png', 27, '2022-05-26 07:38:31', '2022-05-26 07:38:31'),
(39, 'VehicleImage-54242.jpg', 52, '2022-06-17 12:26:27', '2022-06-17 12:26:27'),
(40, 'VehicleImage-65598.PNG', 61, '2022-06-17 21:07:48', '2022-06-17 21:07:48'),
(41, 'VehicleImage-39554.PNG', 61, '2022-06-17 21:20:37', '2022-06-17 21:20:37'),
(42, 'VehicleImage-6609.PNG', 61, '2022-06-17 21:22:12', '2022-06-17 21:22:12'),
(43, 'VehicleImage-26330.png', 70, '2022-07-27 18:07:10', '2022-07-27 18:07:10'),
(44, 'VehicleImage-72549.png', 70, '2022-07-27 18:12:42', '2022-07-27 18:12:42'),
(45, 'VehicleImage-67401.png', 70, '2022-07-27 18:14:41', '2022-07-27 18:14:41'),
(46, 'VehicleImage-25120.png', 70, '2022-07-27 18:19:57', '2022-07-27 18:19:57'),
(47, 'VehicleImage-47187.png', 70, '2022-07-27 18:20:37', '2022-07-27 18:20:37'),
(48, 'VehicleImage-45578.png', 70, '2022-07-27 18:21:06', '2022-07-27 18:21:06'),
(49, 'VehicleImage-27438.png', 70, '2022-07-27 18:21:41', '2022-07-27 18:21:41'),
(50, 'VehicleImage-12196.png', 70, '2022-07-27 18:22:14', '2022-07-27 18:22:14'),
(51, 'VehicleImage-60554.png', 71, '2022-07-27 18:43:55', '2022-07-27 18:43:55'),
(52, 'VehicleImage-73161.png', 72, '2022-07-27 18:49:16', '2022-07-27 18:49:16'),
(53, 'VehicleImage-27312.png', 88, '2022-07-28 12:53:57', '2022-07-28 12:53:57'),
(54, 'VehicleImage-36085.webp', 89, '2022-07-28 12:57:54', '2022-07-28 12:57:54'),
(55, 'VehicleImage-51173.webp', 89, '2022-07-28 12:57:54', '2022-07-28 12:57:54'),
(56, 'VehicleImage-23034.jpg', 89, '2022-07-28 12:57:54', '2022-07-28 12:57:54'),
(57, 'VehicleImage-59564.png', 89, '2022-07-28 12:57:54', '2022-07-28 12:57:54'),
(58, 'VehicleImage-55829.jpg', 91, '2022-07-28 14:01:30', '2022-07-28 14:01:30'),
(59, 'VehicleImage-19814.png', 91, '2022-07-28 14:01:30', '2022-07-28 14:01:30'),
(60, 'VehicleImage-69712.png', 91, '2022-07-28 14:01:30', '2022-07-28 14:01:30'),
(61, 'VehicleImage-86732.png', 91, '2022-07-28 14:01:30', '2022-07-28 14:01:30'),
(62, 'VehicleImage-70002.png', 91, '2022-07-28 14:01:30', '2022-07-28 14:01:30'),
(63, 'VehicleImage-65120.jpg', 92, '2022-07-28 14:07:14', '2022-07-28 14:07:14'),
(64, 'VehicleImage-19886.jpg', 93, '2022-07-28 14:11:19', '2022-07-28 14:11:19'),
(65, 'VehicleImage-12855.png', 94, '2022-07-28 14:20:42', '2022-07-28 14:20:42'),
(66, 'VehicleImage-36614.png', 95, '2022-07-28 14:21:53', '2022-07-28 14:21:53'),
(67, 'VehicleImage-82512.png', 96, '2022-07-28 14:23:06', '2022-07-28 14:23:06'),
(68, 'VehicleImage-30226.png', 97, '2022-07-28 14:23:47', '2022-07-28 14:23:47'),
(69, 'VehicleImage-60378.png', 98, '2022-07-28 14:25:04', '2022-07-28 14:25:04'),
(70, 'VehicleImage-19572.png', 99, '2022-07-28 14:25:12', '2022-07-28 14:25:12'),
(71, 'VehicleImage-14127.png', 100, '2022-07-28 14:25:17', '2022-07-28 14:25:17'),
(72, 'VehicleImage-36142.png', 101, '2022-07-28 14:26:16', '2022-07-28 14:26:16'),
(73, 'VehicleImage-57073.png', 102, '2022-07-28 14:27:59', '2022-07-28 14:27:59'),
(74, 'VehicleImage-41726.png', 103, '2022-07-28 14:28:53', '2022-07-28 14:28:53'),
(75, 'VehicleImage-89579.png', 104, '2022-07-28 14:29:55', '2022-07-28 14:29:55'),
(76, 'VehicleImage-46684.jpg', 105, '2022-07-28 16:15:25', '2022-07-28 16:15:25'),
(77, 'VehicleImage-57898.jpg', 106, '2022-07-28 16:22:22', '2022-07-28 16:22:22'),
(78, 'VehicleImage-95103.jpg', 107, '2022-07-28 16:23:49', '2022-07-28 16:23:49'),
(79, 'VehicleImage-11618.jpeg', 127, '2022-07-28 18:56:43', '2022-07-28 18:56:43'),
(80, 'VehicleImage-32805.png', 74, '2022-07-29 21:05:05', '2022-07-29 21:05:05'),
(81, 'VehicleImage-98293.png', 74, '2022-07-30 05:17:06', '2022-07-30 05:17:06'),
(82, 'VehicleImage-54276.png', 128, '2022-07-31 07:37:10', '2022-07-31 07:37:10'),
(83, 'VehicleImage-46941.png', 128, '2022-07-31 07:38:34', '2022-07-31 07:38:34'),
(84, 'VehicleImage-27235.png', 129, '2022-07-31 07:41:15', '2022-07-31 07:41:15'),
(85, 'VehicleImage-74087.png', 130, '2022-07-31 07:42:44', '2022-07-31 07:42:44'),
(86, 'VehicleImage-28356.jpeg', 132, '2022-08-02 16:33:00', '2022-08-02 16:33:00'),
(87, 'VehicleImage-24128.png', 132, '2022-08-02 16:33:00', '2022-08-02 16:33:00'),
(88, 'VehicleImage-78525.png', 132, '2022-08-02 16:33:00', '2022-08-02 16:33:00'),
(89, 'VehicleImage-75427.png', 135, '2022-08-04 20:01:11', '2022-08-04 20:01:11'),
(90, 'VehicleImage-22485.png', 136, '2022-08-04 20:02:26', '2022-08-04 20:02:26'),
(91, 'VehicleImage-28597.png', 138, '2022-08-04 20:14:02', '2022-08-04 20:14:02'),
(92, 'VehicleImage-96760.png', 140, '2022-08-09 05:21:42', '2022-08-09 05:21:42'),
(93, 'VehicleImage-52645.png', 140, '2022-08-09 05:21:43', '2022-08-09 05:21:43'),
(94, 'VehicleImage-68793.png', 140, '2022-08-09 05:21:45', '2022-08-09 05:21:45'),
(95, 'VehicleImage-50114.jpg', 147, '2022-10-16 04:21:42', '2022-10-16 04:21:42'),
(96, 'VehicleImage-19757.jpg', 150, '2023-04-19 22:13:44', '2023-04-19 22:13:44'),
(97, 'VehicleImage-33541.jpg', 151, '2023-04-19 22:13:59', '2023-04-19 22:13:59'),
(98, 'VehicleImage-29073.jpg', 152, '2023-04-19 22:14:16', '2023-04-19 22:14:16'),
(99, 'VehicleImage-95269.png', 156, '2023-11-15 17:31:22', '2023-11-15 17:31:22'),
(100, 'VehicleImage-50869.png', 157, '2023-11-15 17:37:17', '2023-11-15 17:37:17'),
(101, 'VehicleImage-33821.png', 158, '2023-11-15 18:20:50', '2023-11-15 18:20:50'),
(102, 'VehicleImage-92767.png', 158, '2023-11-17 14:50:37', '2023-11-17 14:50:37'),
(103, 'VehicleImage-32802.jpg', 158, '2023-11-17 14:51:56', '2023-11-17 14:51:56'),
(104, 'VehicleImage-92965.png', 157, '2023-11-20 15:00:42', '2023-11-20 15:00:42'),
(105, 'VehicleImage-75558.png', 158, '2023-11-20 18:10:35', '2023-11-20 18:10:35'),
(106, 'VehicleImage-90609.png', 159, '2023-11-20 18:54:30', '2023-11-20 18:54:30'),
(107, 'VehicleImage-70943.jpg', 159, '2023-11-20 18:57:17', '2023-11-20 18:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_options`
--

CREATE TABLE `vehicle_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_options`
--

INSERT INTO `vehicle_options` (`id`, `option`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(10, '20” ALLOY WHEELS', 6, '2022-05-17 04:45:11', '2022-05-17 04:45:11'),
(11, '3.5 TURBO DIELSEL', 6, '2022-05-17 04:45:11', '2022-05-17 04:45:11'),
(12, '3.6 ECO BOOST', 6, '2022-05-17 04:45:11', '2022-05-17 04:45:11'),
(13, '4 WHEELS DRIVE', 6, '2022-05-17 04:45:11', '2022-05-17 04:45:11'),
(17, '20” ALLOY WHEELS', 13, '2022-05-17 09:52:41', '2022-05-17 09:52:41'),
(18, '3.5 TURBO DIELSEL', 13, '2022-05-17 09:52:41', '2022-05-17 09:52:41'),
(19, '3.6 ECO BOOST', 13, '2022-05-17 09:52:41', '2022-05-17 09:52:41'),
(41, '20” ALLOY WHEELS', 12, '2022-05-18 07:06:51', '2022-05-18 07:06:51'),
(42, '3.5 TURBO DIELSEL', 12, '2022-05-18 07:06:51', '2022-05-18 07:06:51'),
(43, '3.6 ECO BOOST', 12, '2022-05-18 07:06:51', '2022-05-18 07:06:51'),
(44, '20” ALLOY WHEELS', 11, '2022-05-18 07:49:59', '2022-05-18 07:49:59'),
(45, '3.5 TURBO DIELSEL', 11, '2022-05-18 07:49:59', '2022-05-18 07:49:59'),
(46, '3.6 ECO BOOST', 11, '2022-05-18 07:49:59', '2022-05-18 07:49:59'),
(47, '20” ALLOY WHEELS', 17, '2022-05-22 17:06:39', '2022-05-22 17:06:39'),
(48, '3.5 TURBO DIELSEL', 17, '2022-05-22 17:06:39', '2022-05-22 17:06:39'),
(49, '3.6 ECO BOOST', 17, '2022-05-22 17:06:39', '2022-05-22 17:06:39'),
(50, '20” ALLOY WHEELS', 18, '2022-05-22 18:15:27', '2022-05-22 18:15:27'),
(51, '20” ALLOY WHEELS', 19, '2022-05-22 19:55:24', '2022-05-22 19:55:24'),
(57, '20” ALLOY WHEELS', 21, '2022-05-24 05:32:29', '2022-05-24 05:32:29'),
(58, '20” ALLOY WHEELS', 22, '2022-05-24 05:48:16', '2022-05-24 05:48:16'),
(59, '3.5 TURBO DIELSEL', 22, '2022-05-24 05:48:16', '2022-05-24 05:48:16'),
(60, '3.6 ECO BOOST', 22, '2022-05-24 05:48:16', '2022-05-24 05:48:16'),
(66, '20” ALLOY WHEELS', 27, '2022-05-26 07:38:31', '2022-05-26 07:38:31'),
(82, '20” ALLOY WHEELS', 30, '2022-05-27 11:00:51', '2022-05-27 11:00:51'),
(84, '20” ALLOY WHEELS', 31, '2022-05-27 11:11:45', '2022-05-27 11:11:45'),
(88, '20” ALLOY WHEELS', 32, '2022-05-27 11:28:09', '2022-05-27 11:28:09'),
(89, '20” ALLOY WHEELS', 33, '2022-05-27 11:51:04', '2022-05-27 11:51:04'),
(97, '20” ALLOY WHEELS', 36, '2022-05-31 07:44:41', '2022-05-31 07:44:41'),
(98, '20” ALLOY WHEELS', 37, '2022-05-31 09:22:03', '2022-05-31 09:22:03'),
(99, '3.5 TURBO DIELSEL', 37, '2022-05-31 09:22:03', '2022-05-31 09:22:03'),
(100, '3.6 ECO BOOST', 37, '2022-05-31 09:22:03', '2022-05-31 09:22:03'),
(101, '4 WHEELS DRIVE', 37, '2022-05-31 09:22:03', '2022-05-31 09:22:03'),
(111, '20” ALLOY WHEELS', 38, '2022-06-06 05:33:18', '2022-06-06 05:33:18'),
(112, '3.5 TURBO DIELSEL', 38, '2022-06-06 05:33:18', '2022-06-06 05:33:18'),
(113, '3.6 ECO BOOST', 38, '2022-06-06 05:33:18', '2022-06-06 05:33:18'),
(125, '20” ALLOY WHEELS', 39, '2022-06-06 13:30:45', '2022-06-06 13:30:45'),
(126, '3.5 TURBO DIELSEL', 39, '2022-06-06 13:30:45', '2022-06-06 13:30:45'),
(127, '3.6 ECO BOOST', 39, '2022-06-06 13:30:45', '2022-06-06 13:30:45'),
(128, '4 WHEELS DRIVE', 39, '2022-06-06 13:30:45', '2022-06-06 13:30:45'),
(129, '20” ALLOY WHEELS', 40, '2022-06-06 13:31:36', '2022-06-06 13:31:36'),
(130, '3.5 TURBO DIELSEL', 40, '2022-06-06 13:31:36', '2022-06-06 13:31:36'),
(131, '3.6 ECO BOOST', 40, '2022-06-06 13:31:36', '2022-06-06 13:31:36'),
(136, '20” ALLOY WHEELS', 42, '2022-06-06 13:59:43', '2022-06-06 13:59:43'),
(137, '3.5 TURBO DIELSEL', 42, '2022-06-06 13:59:43', '2022-06-06 13:59:43'),
(138, '3.6 ECO BOOST', 42, '2022-06-06 13:59:43', '2022-06-06 13:59:43'),
(139, '4 WHEELS DRIVE', 42, '2022-06-06 13:59:43', '2022-06-06 13:59:43'),
(141, '20” ALLOY WHEELS', 35, '2022-06-07 00:07:48', '2022-06-07 00:07:48'),
(142, '20” ALLOY WHEELS', 28, '2022-06-13 20:34:35', '2022-06-13 20:34:35'),
(143, '20” ALLOY WHEELS', 43, '2022-06-15 20:00:06', '2022-06-15 20:00:06'),
(149, '20” ALLOY WHEELS', 44, '2022-06-15 20:06:47', '2022-06-15 20:06:47'),
(157, '20” ALLOY WHEELS', 45, '2022-06-15 20:14:14', '2022-06-15 20:14:14'),
(158, '20” ALLOY WHEELS', 46, '2022-06-16 17:29:52', '2022-06-16 17:29:52'),
(159, '20” ALLOY WHEELS', 47, '2022-06-16 17:31:52', '2022-06-16 17:31:52'),
(160, '20” ALLOY WHEELS', 48, '2022-06-16 17:33:19', '2022-06-16 17:33:19'),
(161, '20” ALLOY WHEELS', 50, '2022-06-16 18:54:50', '2022-06-16 18:54:50'),
(162, '20” ALLOY WHEELS', 52, '2022-06-17 12:26:27', '2022-06-17 12:26:27'),
(165, '20” ALLOY WHEELS', 53, '2022-06-17 14:27:59', '2022-06-17 14:27:59'),
(166, '20” ALLOY WHEELS', 55, '2022-06-17 14:29:09', '2022-06-17 14:29:09'),
(167, '20” ALLOY WHEELS', 56, '2022-06-17 18:52:50', '2022-06-17 18:52:50'),
(168, '20” ALLOY WHEELS', 57, '2022-06-17 18:53:56', '2022-06-17 18:53:56'),
(169, '20” ALLOY WHEELS', 58, '2022-06-17 18:54:42', '2022-06-17 18:54:42'),
(170, '20” ALLOY WHEELS', 59, '2022-06-17 19:00:42', '2022-06-17 19:00:42'),
(171, '20” ALLOY WHEELS', 60, '2022-06-17 19:07:26', '2022-06-17 19:07:26'),
(178, '20” ALLOY WHEELS', 61, '2022-06-17 21:22:12', '2022-06-17 21:22:12'),
(179, '3.5 TURBO DIELSEL', 61, '2022-06-17 21:22:12', '2022-06-17 21:22:12'),
(180, '4 WHEELS DRIVE', 61, '2022-06-17 21:22:12', '2022-06-17 21:22:12'),
(181, '20” ALLOY WHEELS', 62, '2022-06-17 21:59:50', '2022-06-17 21:59:50'),
(182, '20” ALLOY WHEELS', 63, '2022-06-20 18:12:35', '2022-06-20 18:12:35'),
(183, '20” ALLOY WHEELS', 64, '2022-07-08 22:19:17', '2022-07-08 22:19:17'),
(184, '20” ALLOY WHEELS', 68, '2022-07-19 02:08:41', '2022-07-19 02:08:41'),
(198, '20” ALLOY WHEELS', 70, '2022-07-27 18:22:14', '2022-07-27 18:22:14'),
(199, '3.6 ECO BOOST', 70, '2022-07-27 18:22:14', '2022-07-27 18:22:14'),
(200, '20” ALLOY WHEELS', 71, '2022-07-27 18:43:55', '2022-07-27 18:43:55'),
(201, '3.5 TURBO DIELSEL', 71, '2022-07-27 18:43:55', '2022-07-27 18:43:55'),
(202, '3.6 ECO BOOST', 71, '2022-07-27 18:43:55', '2022-07-27 18:43:55'),
(203, '20” ALLOY WHEELS', 72, '2022-07-27 18:49:16', '2022-07-27 18:49:16'),
(204, '3.5 TURBO DIELSEL', 72, '2022-07-27 18:49:16', '2022-07-27 18:49:16'),
(205, '3.6 ECO BOOST', 72, '2022-07-27 18:49:16', '2022-07-27 18:49:16'),
(206, '4 WHEELS DRIVE', 72, '2022-07-27 18:49:16', '2022-07-27 18:49:16'),
(207, '20” ALLOY WHEELS', 76, '2022-07-28 12:05:01', '2022-07-28 12:05:01'),
(208, '3.5 TURBO DIELSEL', 76, '2022-07-28 12:05:01', '2022-07-28 12:05:01'),
(209, '3.6 ECO BOOST', 76, '2022-07-28 12:05:01', '2022-07-28 12:05:01'),
(210, '20” ALLOY WHEELS', 77, '2022-07-28 12:05:42', '2022-07-28 12:05:42'),
(211, '3.5 TURBO DIELSEL', 77, '2022-07-28 12:05:42', '2022-07-28 12:05:42'),
(212, '3.6 ECO BOOST', 77, '2022-07-28 12:05:42', '2022-07-28 12:05:42'),
(213, '20” ALLOY WHEELS', 78, '2022-07-28 12:07:31', '2022-07-28 12:07:31'),
(214, '3.5 TURBO DIELSEL', 78, '2022-07-28 12:07:31', '2022-07-28 12:07:31'),
(215, '3.6 ECO BOOST', 78, '2022-07-28 12:07:31', '2022-07-28 12:07:31'),
(216, '4 WHEELS DRIVE', 78, '2022-07-28 12:07:31', '2022-07-28 12:07:31'),
(217, '20” ALLOY WHEELS', 79, '2022-07-28 12:10:15', '2022-07-28 12:10:15'),
(218, '20” ALLOY WHEELS', 80, '2022-07-28 12:11:40', '2022-07-28 12:11:40'),
(219, '3.5 TURBO DIELSEL', 80, '2022-07-28 12:11:40', '2022-07-28 12:11:40'),
(220, '20” ALLOY WHEELS', 81, '2022-07-28 12:15:30', '2022-07-28 12:15:30'),
(221, '3.5 TURBO DIELSEL', 81, '2022-07-28 12:15:30', '2022-07-28 12:15:30'),
(222, '20” ALLOY WHEELS', 82, '2022-07-28 12:17:46', '2022-07-28 12:17:46'),
(223, '3.5 TURBO DIELSEL', 82, '2022-07-28 12:17:46', '2022-07-28 12:17:46'),
(224, '3.6 ECO BOOST', 82, '2022-07-28 12:17:46', '2022-07-28 12:17:46'),
(225, '4 WHEELS DRIVE', 82, '2022-07-28 12:17:46', '2022-07-28 12:17:46'),
(226, '20” ALLOY WHEELS', 83, '2022-07-28 12:21:45', '2022-07-28 12:21:45'),
(227, '3.5 TURBO DIELSEL', 83, '2022-07-28 12:21:45', '2022-07-28 12:21:45'),
(228, '3.6 ECO BOOST', 83, '2022-07-28 12:21:45', '2022-07-28 12:21:45'),
(229, '20” ALLOY WHEELS', 84, '2022-07-28 12:22:40', '2022-07-28 12:22:40'),
(230, '20” ALLOY WHEELS', 85, '2022-07-28 12:23:01', '2022-07-28 12:23:01'),
(231, '20” ALLOY WHEELS', 86, '2022-07-28 12:24:53', '2022-07-28 12:24:53'),
(232, '20” ALLOY WHEELS', 87, '2022-07-28 12:25:45', '2022-07-28 12:25:45'),
(233, '20” ALLOY WHEELS', 88, '2022-07-28 12:53:57', '2022-07-28 12:53:57'),
(234, '3.5 TURBO DIELSEL', 88, '2022-07-28 12:53:57', '2022-07-28 12:53:57'),
(235, '3.6 ECO BOOST', 88, '2022-07-28 12:53:57', '2022-07-28 12:53:57'),
(236, '20” ALLOY WHEELS', 89, '2022-07-28 12:57:54', '2022-07-28 12:57:54'),
(237, '3.5 TURBO DIELSEL', 89, '2022-07-28 12:57:54', '2022-07-28 12:57:54'),
(238, '20” ALLOY WHEELS', 90, '2022-07-28 13:15:04', '2022-07-28 13:15:04'),
(239, '20” ALLOY WHEELS', 91, '2022-07-28 14:01:30', '2022-07-28 14:01:30'),
(240, '3.5 TURBO DIELSEL', 91, '2022-07-28 14:01:30', '2022-07-28 14:01:30'),
(241, '3.6 ECO BOOST', 91, '2022-07-28 14:01:30', '2022-07-28 14:01:30'),
(242, '4 WHEELS DRIVE', 91, '2022-07-28 14:01:30', '2022-07-28 14:01:30'),
(243, '20” ALLOY WHEELS', 92, '2022-07-28 14:07:14', '2022-07-28 14:07:14'),
(244, '3.5 TURBO DIELSEL', 92, '2022-07-28 14:07:14', '2022-07-28 14:07:14'),
(245, '20” ALLOY WHEELS', 93, '2022-07-28 14:11:19', '2022-07-28 14:11:19'),
(246, '3.5 TURBO DIELSEL', 93, '2022-07-28 14:11:19', '2022-07-28 14:11:19'),
(247, '3.6 ECO BOOST', 93, '2022-07-28 14:11:19', '2022-07-28 14:11:19'),
(248, '20” ALLOY WHEELS', 94, '2022-07-28 14:20:42', '2022-07-28 14:20:42'),
(249, '3.5 TURBO DIELSEL', 94, '2022-07-28 14:20:42', '2022-07-28 14:20:42'),
(250, '20” ALLOY WHEELS', 95, '2022-07-28 14:21:53', '2022-07-28 14:21:53'),
(251, '3.5 TURBO DIELSEL', 95, '2022-07-28 14:21:53', '2022-07-28 14:21:53'),
(252, '20” ALLOY WHEELS', 96, '2022-07-28 14:23:06', '2022-07-28 14:23:06'),
(253, '3.5 TURBO DIELSEL', 96, '2022-07-28 14:23:06', '2022-07-28 14:23:06'),
(254, '20” ALLOY WHEELS', 97, '2022-07-28 14:23:47', '2022-07-28 14:23:47'),
(255, '3.5 TURBO DIELSEL', 97, '2022-07-28 14:23:47', '2022-07-28 14:23:47'),
(256, '20” ALLOY WHEELS', 98, '2022-07-28 14:25:04', '2022-07-28 14:25:04'),
(257, '3.5 TURBO DIELSEL', 98, '2022-07-28 14:25:04', '2022-07-28 14:25:04'),
(258, '20” ALLOY WHEELS', 99, '2022-07-28 14:25:12', '2022-07-28 14:25:12'),
(259, '3.5 TURBO DIELSEL', 99, '2022-07-28 14:25:12', '2022-07-28 14:25:12'),
(260, '20” ALLOY WHEELS', 100, '2022-07-28 14:25:17', '2022-07-28 14:25:17'),
(261, '3.5 TURBO DIELSEL', 100, '2022-07-28 14:25:17', '2022-07-28 14:25:17'),
(262, '20” ALLOY WHEELS', 101, '2022-07-28 14:26:16', '2022-07-28 14:26:16'),
(263, '3.5 TURBO DIELSEL', 101, '2022-07-28 14:26:16', '2022-07-28 14:26:16'),
(264, '20” ALLOY WHEELS', 102, '2022-07-28 14:27:59', '2022-07-28 14:27:59'),
(265, '3.5 TURBO DIELSEL', 102, '2022-07-28 14:27:59', '2022-07-28 14:27:59'),
(266, '20” ALLOY WHEELS', 103, '2022-07-28 14:28:53', '2022-07-28 14:28:53'),
(267, '3.5 TURBO DIELSEL', 103, '2022-07-28 14:28:53', '2022-07-28 14:28:53'),
(268, '20” ALLOY WHEELS', 104, '2022-07-28 14:29:55', '2022-07-28 14:29:55'),
(269, '3.5 TURBO DIELSEL', 104, '2022-07-28 14:29:55', '2022-07-28 14:29:55'),
(270, '20” ALLOY WHEELS', 105, '2022-07-28 16:15:25', '2022-07-28 16:15:25'),
(271, '3.5 TURBO DIELSEL', 105, '2022-07-28 16:15:25', '2022-07-28 16:15:25'),
(272, '3.6 ECO BOOST', 105, '2022-07-28 16:15:25', '2022-07-28 16:15:25'),
(273, '20” ALLOY WHEELS', 106, '2022-07-28 16:22:22', '2022-07-28 16:22:22'),
(274, '3.5 TURBO DIELSEL', 106, '2022-07-28 16:22:22', '2022-07-28 16:22:22'),
(275, '3.6 ECO BOOST', 106, '2022-07-28 16:22:22', '2022-07-28 16:22:22'),
(276, '20” ALLOY WHEELS', 107, '2022-07-28 16:23:49', '2022-07-28 16:23:49'),
(277, '3.5 TURBO DIELSEL', 107, '2022-07-28 16:23:49', '2022-07-28 16:23:49'),
(278, '3.6 ECO BOOST', 107, '2022-07-28 16:23:49', '2022-07-28 16:23:49'),
(279, '20” ALLOY WHEELS', 108, '2022-07-28 17:09:28', '2022-07-28 17:09:28'),
(280, '20” ALLOY WHEELS', 109, '2022-07-28 17:11:00', '2022-07-28 17:11:00'),
(281, '20” ALLOY WHEELS', 110, '2022-07-28 17:11:37', '2022-07-28 17:11:37'),
(282, '20” ALLOY WHEELS', 111, '2022-07-28 17:13:13', '2022-07-28 17:13:13'),
(283, '20” ALLOY WHEELS', 112, '2022-07-28 17:14:08', '2022-07-28 17:14:08'),
(284, '20” ALLOY WHEELS', 113, '2022-07-28 17:14:34', '2022-07-28 17:14:34'),
(285, '20” ALLOY WHEELS', 114, '2022-07-28 17:15:57', '2022-07-28 17:15:57'),
(286, '20” ALLOY WHEELS', 115, '2022-07-28 17:16:25', '2022-07-28 17:16:25'),
(287, '20” ALLOY WHEELS', 116, '2022-07-28 17:16:53', '2022-07-28 17:16:53'),
(288, '20” ALLOY WHEELS', 117, '2022-07-28 17:54:59', '2022-07-28 17:54:59'),
(289, '3.5 TURBO DIELSEL', 117, '2022-07-28 17:54:59', '2022-07-28 17:54:59'),
(290, '3.6 ECO BOOST', 117, '2022-07-28 17:54:59', '2022-07-28 17:54:59'),
(291, '4 WHEELS DRIVE', 117, '2022-07-28 17:54:59', '2022-07-28 17:54:59'),
(292, '20” ALLOY WHEELS', 118, '2022-07-28 17:56:04', '2022-07-28 17:56:04'),
(293, '3.5 TURBO DIELSEL', 118, '2022-07-28 17:56:04', '2022-07-28 17:56:04'),
(294, '3.6 ECO BOOST', 118, '2022-07-28 17:56:04', '2022-07-28 17:56:04'),
(295, '4 WHEELS DRIVE', 118, '2022-07-28 17:56:04', '2022-07-28 17:56:04'),
(296, '20” ALLOY WHEELS', 119, '2022-07-28 17:56:28', '2022-07-28 17:56:28'),
(297, '3.5 TURBO DIELSEL', 119, '2022-07-28 17:56:28', '2022-07-28 17:56:28'),
(298, '3.6 ECO BOOST', 119, '2022-07-28 17:56:28', '2022-07-28 17:56:28'),
(299, '4 WHEELS DRIVE', 119, '2022-07-28 17:56:28', '2022-07-28 17:56:28'),
(300, '20” ALLOY WHEELS', 120, '2022-07-28 17:58:32', '2022-07-28 17:58:32'),
(301, '3.5 TURBO DIELSEL', 120, '2022-07-28 17:58:32', '2022-07-28 17:58:32'),
(302, '3.6 ECO BOOST', 120, '2022-07-28 17:58:32', '2022-07-28 17:58:32'),
(303, '4 WHEELS DRIVE', 120, '2022-07-28 17:58:32', '2022-07-28 17:58:32'),
(304, '20” ALLOY WHEELS', 121, '2022-07-28 17:58:43', '2022-07-28 17:58:43'),
(305, '3.5 TURBO DIELSEL', 121, '2022-07-28 17:58:43', '2022-07-28 17:58:43'),
(306, '3.6 ECO BOOST', 121, '2022-07-28 17:58:43', '2022-07-28 17:58:43'),
(307, '4 WHEELS DRIVE', 121, '2022-07-28 17:58:43', '2022-07-28 17:58:43'),
(308, '20” ALLOY WHEELS', 122, '2022-07-28 18:00:20', '2022-07-28 18:00:20'),
(309, '3.5 TURBO DIELSEL', 122, '2022-07-28 18:00:20', '2022-07-28 18:00:20'),
(310, '3.6 ECO BOOST', 122, '2022-07-28 18:00:20', '2022-07-28 18:00:20'),
(311, '4 WHEELS DRIVE', 122, '2022-07-28 18:00:20', '2022-07-28 18:00:20'),
(312, '20” ALLOY WHEELS', 123, '2022-07-28 18:00:49', '2022-07-28 18:00:49'),
(313, '3.5 TURBO DIELSEL', 123, '2022-07-28 18:00:49', '2022-07-28 18:00:49'),
(314, '3.6 ECO BOOST', 123, '2022-07-28 18:00:49', '2022-07-28 18:00:49'),
(315, '4 WHEELS DRIVE', 123, '2022-07-28 18:00:49', '2022-07-28 18:00:49'),
(316, '20” ALLOY WHEELS', 124, '2022-07-28 18:00:59', '2022-07-28 18:00:59'),
(317, '3.5 TURBO DIELSEL', 124, '2022-07-28 18:00:59', '2022-07-28 18:00:59'),
(318, '3.6 ECO BOOST', 124, '2022-07-28 18:00:59', '2022-07-28 18:00:59'),
(319, '4 WHEELS DRIVE', 124, '2022-07-28 18:00:59', '2022-07-28 18:00:59'),
(320, '20” ALLOY WHEELS', 125, '2022-07-28 18:03:26', '2022-07-28 18:03:26'),
(321, '3.5 TURBO DIELSEL', 125, '2022-07-28 18:03:26', '2022-07-28 18:03:26'),
(322, '3.6 ECO BOOST', 125, '2022-07-28 18:03:26', '2022-07-28 18:03:26'),
(323, '4 WHEELS DRIVE', 125, '2022-07-28 18:03:26', '2022-07-28 18:03:26'),
(324, '20” ALLOY WHEELS', 126, '2022-07-28 18:03:39', '2022-07-28 18:03:39'),
(325, '3.5 TURBO DIELSEL', 126, '2022-07-28 18:03:39', '2022-07-28 18:03:39'),
(326, '3.6 ECO BOOST', 126, '2022-07-28 18:03:39', '2022-07-28 18:03:39'),
(327, '4 WHEELS DRIVE', 126, '2022-07-28 18:03:39', '2022-07-28 18:03:39'),
(328, '20” ALLOY WHEELS', 127, '2022-07-28 18:56:43', '2022-07-28 18:56:43'),
(329, '3.6 ECO BOOST', 127, '2022-07-28 18:56:43', '2022-07-28 18:56:43'),
(335, '20” ALLOY WHEELS', 74, '2022-07-30 05:17:06', '2022-07-30 05:17:06'),
(336, '3.5 TURBO DIELSEL', 74, '2022-07-30 05:17:06', '2022-07-30 05:17:06'),
(337, '3.6 ECO BOOST', 74, '2022-07-30 05:17:06', '2022-07-30 05:17:06'),
(338, '4 WHEELS DRIVE', 74, '2022-07-30 05:17:06', '2022-07-30 05:17:06'),
(347, '20” ALLOY WHEELS', 129, '2022-07-31 07:41:15', '2022-07-31 07:41:15'),
(348, '3.5 TURBO DIELSEL', 129, '2022-07-31 07:41:15', '2022-07-31 07:41:15'),
(349, '3.6 ECO BOOST', 129, '2022-07-31 07:41:15', '2022-07-31 07:41:15'),
(350, '4 WHEELS DRIVE', 129, '2022-07-31 07:41:15', '2022-07-31 07:41:15'),
(351, '20” ALLOY WHEELS', 130, '2022-07-31 07:42:44', '2022-07-31 07:42:44'),
(352, '3.5 TURBO DIELSEL', 130, '2022-07-31 07:42:44', '2022-07-31 07:42:44'),
(353, '3.6 ECO BOOST', 130, '2022-07-31 07:42:44', '2022-07-31 07:42:44'),
(354, '4 WHEELS DRIVE', 130, '2022-07-31 07:42:44', '2022-07-31 07:42:44'),
(355, '20” ALLOY WHEELS', 132, '2022-08-02 16:32:59', '2022-08-02 16:32:59'),
(356, '3.5 TURBO DIELSEL', 132, '2022-08-02 16:32:59', '2022-08-02 16:32:59'),
(357, '3.6 ECO BOOST', 132, '2022-08-02 16:32:59', '2022-08-02 16:32:59'),
(358, '4 WHEELS DRIVE', 132, '2022-08-02 16:32:59', '2022-08-02 16:32:59'),
(359, '20” ALLOY WHEELS', 133, '2022-08-02 16:45:56', '2022-08-02 16:45:56'),
(360, '20” ALLOY WHEELS', 128, '2022-08-04 19:55:50', '2022-08-04 19:55:50'),
(361, '20” ALLOY WHEELS', 134, '2022-08-04 20:00:39', '2022-08-04 20:00:39'),
(362, '20” ALLOY WHEELS', 135, '2022-08-04 20:01:11', '2022-08-04 20:01:11'),
(363, '3.5 TURBO DIELSEL', 135, '2022-08-04 20:01:11', '2022-08-04 20:01:11'),
(364, '3.6 ECO BOOST', 135, '2022-08-04 20:01:11', '2022-08-04 20:01:11'),
(365, '4 WHEELS DRIVE', 135, '2022-08-04 20:01:11', '2022-08-04 20:01:11'),
(366, '20” ALLOY WHEELS', 136, '2022-08-04 20:02:26', '2022-08-04 20:02:26'),
(367, '3.5 TURBO DIELSEL', 136, '2022-08-04 20:02:26', '2022-08-04 20:02:26'),
(368, '3.6 ECO BOOST', 136, '2022-08-04 20:02:26', '2022-08-04 20:02:26'),
(369, '4 WHEELS DRIVE', 136, '2022-08-04 20:02:26', '2022-08-04 20:02:26'),
(370, '20” ALLOY WHEELS', 137, '2022-08-04 20:11:09', '2022-08-04 20:11:09'),
(371, '20” ALLOY WHEELS', 138, '2022-08-04 20:14:02', '2022-08-04 20:14:02'),
(372, '3.5 TURBO DIELSEL', 138, '2022-08-04 20:14:02', '2022-08-04 20:14:02'),
(373, '3.6 ECO BOOST', 138, '2022-08-04 20:14:02', '2022-08-04 20:14:02'),
(374, '4 WHEELS DRIVE', 138, '2022-08-04 20:14:02', '2022-08-04 20:14:02'),
(375, '20” ALLOY WHEELS', 139, '2022-08-06 10:45:00', '2022-08-06 10:45:00'),
(376, '3.5 TURBO DIELSEL', 139, '2022-08-06 10:45:00', '2022-08-06 10:45:00'),
(377, '20” ALLOY WHEELS', 140, '2022-08-09 05:21:41', '2022-08-09 05:21:41'),
(378, '3.6 ECO BOOST', 140, '2022-08-09 05:21:41', '2022-08-09 05:21:41'),
(379, '4 WHEELS DRIVE', 140, '2022-08-09 05:21:41', '2022-08-09 05:21:41'),
(380, '20” ALLOY WHEELS', 141, '2022-08-11 02:25:28', '2022-08-11 02:25:28'),
(381, '3.5 TURBO DIELSEL', 141, '2022-08-11 02:25:28', '2022-08-11 02:25:28'),
(382, '3.6 ECO BOOST', 141, '2022-08-11 02:25:28', '2022-08-11 02:25:28'),
(383, '4 WHEELS DRIVE', 141, '2022-08-11 02:25:28', '2022-08-11 02:25:28'),
(384, '20” ALLOY WHEELS', 142, '2022-08-12 08:26:14', '2022-08-12 08:26:14'),
(385, '3.5 TURBO DIELSEL', 142, '2022-08-12 08:26:14', '2022-08-12 08:26:14'),
(386, '3.6 ECO BOOST', 142, '2022-08-12 08:26:14', '2022-08-12 08:26:14'),
(387, '4 WHEELS DRIVE', 142, '2022-08-12 08:26:14', '2022-08-12 08:26:14'),
(388, '20” ALLOY WHEELS', 143, '2022-08-12 10:30:54', '2022-08-12 10:30:54'),
(389, '20” ALLOY WHEELS', 144, '2022-08-12 10:30:55', '2022-08-12 10:30:55'),
(390, '20” ALLOY WHEELS', 145, '2022-08-13 05:05:02', '2022-08-13 05:05:02'),
(391, '3.5 TURBO DIELSEL', 145, '2022-08-13 05:05:02', '2022-08-13 05:05:02'),
(392, '3.6 ECO BOOST', 145, '2022-08-13 05:05:02', '2022-08-13 05:05:02'),
(393, '20” ALLOY WHEELS', 146, '2022-08-14 20:04:22', '2022-08-14 20:04:22'),
(394, '20” ALLOY WHEELS', 147, '2022-10-16 04:21:42', '2022-10-16 04:21:42'),
(395, '3.5 TURBO DIELSEL', 147, '2022-10-16 04:21:42', '2022-10-16 04:21:42'),
(396, '3.6 ECO BOOST', 147, '2022-10-16 04:21:42', '2022-10-16 04:21:42'),
(397, '4 WHEELS DRIVE', 147, '2022-10-16 04:21:42', '2022-10-16 04:21:42'),
(398, '20” ALLOY WHEELS', 148, '2022-11-17 08:39:28', '2022-11-17 08:39:28'),
(399, '3.5 TURBO DIELSEL', 148, '2022-11-17 08:39:28', '2022-11-17 08:39:28'),
(400, '3.6 ECO BOOST', 148, '2022-11-17 08:39:28', '2022-11-17 08:39:28'),
(401, '4 WHEELS DRIVE', 148, '2022-11-17 08:39:28', '2022-11-17 08:39:28'),
(402, '20” ALLOY WHEELS', 149, '2022-11-17 09:21:05', '2022-11-17 09:21:05'),
(403, '3.5 TURBO DIELSEL', 149, '2022-11-17 09:21:05', '2022-11-17 09:21:05'),
(404, '3.6 ECO BOOST', 149, '2022-11-17 09:21:05', '2022-11-17 09:21:05'),
(405, '4 WHEELS DRIVE', 149, '2022-11-17 09:21:05', '2022-11-17 09:21:05'),
(406, '20” ALLOY WHEELS', 150, '2023-04-19 22:13:42', '2023-04-19 22:13:42'),
(407, '4 WHEELS DRIVE', 150, '2023-04-19 22:13:42', '2023-04-19 22:13:42'),
(408, '20” ALLOY WHEELS', 151, '2023-04-19 22:13:58', '2023-04-19 22:13:58'),
(409, '4 WHEELS DRIVE', 151, '2023-04-19 22:13:58', '2023-04-19 22:13:58'),
(410, '20” ALLOY WHEELS', 152, '2023-04-19 22:14:15', '2023-04-19 22:14:15'),
(411, '4 WHEELS DRIVE', 152, '2023-04-19 22:14:15', '2023-04-19 22:14:15'),
(412, '20” ALLOY WHEELS', 153, '2023-08-10 14:40:47', '2023-08-10 14:40:47'),
(413, '3.5 TURBO DIELSEL', 153, '2023-08-10 14:40:47', '2023-08-10 14:40:47'),
(414, '20” ALLOY WHEELS', 154, '2023-08-10 14:40:49', '2023-08-10 14:40:49'),
(415, '3.5 TURBO DIELSEL', 154, '2023-08-10 14:40:49', '2023-08-10 14:40:49'),
(416, '20” ALLOY WHEELS', 155, '2023-08-10 14:40:49', '2023-08-10 14:40:49'),
(417, '3.5 TURBO DIELSEL', 155, '2023-08-10 14:40:49', '2023-08-10 14:40:49'),
(418, '20” ALLOY WHEELS', 156, '2023-11-15 17:31:22', '2023-11-15 17:31:22'),
(419, '3.6 ECO BOOST', 156, '2023-11-15 17:31:22', '2023-11-15 17:31:22'),
(428, '20” ALLOY WHEELS', 157, '2023-11-20 15:00:42', '2023-11-20 15:00:42'),
(429, '20” ALLOY WHEELS', 158, '2023-11-20 18:10:35', '2023-11-20 18:10:35'),
(430, '3.5 TURBO DIELSEL', 158, '2023-11-20 18:10:35', '2023-11-20 18:10:35'),
(432, '20” ALLOY WHEELS', 159, '2023-11-20 18:57:17', '2023-11-20 18:57:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_emails`
--
ALTER TABLE `admin_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cards_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `cards_dealer_id_foreign` (`dealer_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `dealer_vehicles`
--
ALTER TABLE `dealer_vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dealer_vehicles_dealer_id_foreign` (`dealer_id`),
  ADD KEY `dealer_vehicles_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memos`
--
ALTER TABLE `memos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `memos_dealer_id_foreign` (`dealer_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold_vehicles`
--
ALTER TABLE `sold_vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sold_vehicles_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `sold_vehicles_dealer_id_foreign` (`dealer_id`);

--
-- Indexes for table `time_stamps`
--
ALTER TABLE `time_stamps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `time_stamps_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_images`
--
ALTER TABLE `vehicle_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_images_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `vehicle_options`
--
ALTER TABLE `vehicle_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_options_vehicle_id_foreign` (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_emails`
--
ALTER TABLE `admin_emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `dealer_vehicles`
--
ALTER TABLE `dealer_vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `memos`
--
ALTER TABLE `memos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sold_vehicles`
--
ALTER TABLE `sold_vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `time_stamps`
--
ALTER TABLE `time_stamps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `vehicle_images`
--
ALTER TABLE `vehicle_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `vehicle_options`
--
ALTER TABLE `vehicle_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=433;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_dealer_id_foreign` FOREIGN KEY (`dealer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cards_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `memos`
--
ALTER TABLE `memos`
  ADD CONSTRAINT `memos_dealer_id_foreign` FOREIGN KEY (`dealer_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sold_vehicles`
--
ALTER TABLE `sold_vehicles`
  ADD CONSTRAINT `sold_vehicles_dealer_id_foreign` FOREIGN KEY (`dealer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sold_vehicles_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `time_stamps`
--
ALTER TABLE `time_stamps`
  ADD CONSTRAINT `time_stamps_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
