-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 07:03 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `drone_chooser`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', NULL, '2019-07-25 17:00:00', '2019-07-25 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ampere_motors`
--

CREATE TABLE IF NOT EXISTS `ampere_motors` (
`id` int(10) unsigned NOT NULL,
  `motor_id` int(10) unsigned NOT NULL,
  `prop_pitch_id` int(10) unsigned NOT NULL,
  `ampere` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=60 ;

--
-- Dumping data for table `ampere_motors`
--

INSERT INTO `ampere_motors` (`id`, `motor_id`, `prop_pitch_id`, `ampere`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 20, '2019-08-10 10:34:54', '2019-07-30 12:07:46', '2019-07-30 12:07:46'),
(2, 4, 2, 25, '2019-08-10 10:34:54', '2019-07-30 12:07:46', '2019-07-30 12:07:46'),
(3, 4, 4, 30, '2019-08-10 10:34:54', '2019-07-30 12:07:46', '2019-07-30 12:07:46'),
(4, 4, 3, 28, '2019-08-10 10:34:54', '2019-07-30 12:07:46', '2019-07-30 12:07:46'),
(5, 4, 1, 20, '2019-08-10 10:34:54', '2019-07-30 12:18:36', '2019-07-30 12:18:36'),
(6, 4, 2, 25, '2019-08-10 10:34:54', '2019-07-30 12:18:36', '2019-07-30 12:18:36'),
(7, 4, 4, 30, '2019-08-10 10:34:54', '2019-07-30 12:18:36', '2019-07-30 12:18:36'),
(8, 4, 3, 28, '2019-08-10 10:34:54', '2019-07-30 12:18:36', '2019-07-30 12:18:36'),
(9, 4, 5, 32, '2019-08-10 10:34:54', '2019-07-30 12:18:37', '2019-07-30 12:18:37'),
(10, 5, 2, 27, NULL, '2019-08-10 08:11:24', '2019-08-10 08:11:24'),
(11, 5, 3, 33, NULL, '2019-08-10 08:11:24', '2019-08-10 08:11:24'),
(12, 5, 4, 47, NULL, '2019-08-10 08:11:24', '2019-08-10 08:11:24'),
(13, 1, 2, 36, NULL, '2019-08-10 08:14:56', '2019-08-10 08:14:56'),
(14, 1, 3, 40, NULL, '2019-08-10 08:14:56', '2019-08-10 08:14:56'),
(15, 1, 5, 45, NULL, '2019-08-10 08:14:56', '2019-08-10 08:14:56'),
(16, 2, 2, 32, '2019-08-10 10:35:12', '2019-08-10 08:18:56', '2019-08-10 08:18:56'),
(17, 2, 3, 37, '2019-08-10 10:35:12', '2019-08-10 08:18:56', '2019-08-10 08:18:56'),
(18, 2, 4, 39, '2019-08-10 10:35:12', '2019-08-10 08:18:56', '2019-08-10 08:18:56'),
(19, 4, 4, 29, '2019-08-10 10:34:54', '2019-08-10 08:22:58', '2019-08-10 08:22:58'),
(20, 4, 3, 28, '2019-08-10 10:34:54', '2019-08-10 08:22:58', '2019-08-10 08:22:58'),
(21, 4, 2, 27, '2019-08-10 10:34:54', '2019-08-10 08:22:58', '2019-08-10 08:22:58'),
(22, 6, 3, 28, '2019-08-10 10:33:27', '2019-08-10 09:17:15', '2019-08-10 09:17:15'),
(23, 6, 4, 30, '2019-08-10 10:33:27', '2019-08-10 09:17:15', '2019-08-10 09:17:15'),
(24, 6, 5, 33, '2019-08-10 10:33:27', '2019-08-10 09:17:15', '2019-08-10 09:17:15'),
(25, 7, 3, 24, NULL, '2019-08-10 09:20:22', '2019-08-10 09:20:22'),
(26, 7, 4, 26, NULL, '2019-08-10 09:20:22', '2019-08-10 09:20:22'),
(27, 7, 5, 28, NULL, '2019-08-10 09:20:22', '2019-08-10 09:20:22'),
(28, 8, 3, 35, '2019-08-10 10:34:30', '2019-08-10 09:22:30', '2019-08-10 09:22:30'),
(29, 8, 4, 38, '2019-08-10 10:34:30', '2019-08-10 09:22:30', '2019-08-10 09:22:30'),
(30, 9, 2, 34, NULL, '2019-08-10 09:31:48', '2019-08-10 09:31:48'),
(31, 9, 4, 40, NULL, '2019-08-10 09:31:48', '2019-08-10 09:31:48'),
(32, 10, 2, 42, NULL, '2019-08-10 09:33:37', '2019-08-10 09:33:37'),
(33, 10, 3, 48, NULL, '2019-08-10 09:33:37', '2019-08-10 09:33:37'),
(34, 11, 2, 35, NULL, '2019-08-10 09:37:18', '2019-08-10 09:37:18'),
(35, 11, 3, 41, NULL, '2019-08-10 09:37:18', '2019-08-10 09:37:18'),
(36, 11, 4, 45, NULL, '2019-08-10 09:37:18', '2019-08-10 09:37:18'),
(37, 12, 2, 36, NULL, '2019-08-10 09:38:32', '2019-08-10 09:38:32'),
(38, 12, 3, 44, NULL, '2019-08-10 09:38:32', '2019-08-10 09:38:32'),
(39, 12, 4, 47, NULL, '2019-08-10 09:38:32', '2019-08-10 09:38:32'),
(40, 13, 2, 34, NULL, '2019-08-10 09:49:11', '2019-08-10 09:49:11'),
(41, 13, 3, 40, NULL, '2019-08-10 09:49:11', '2019-08-10 09:49:11'),
(42, 13, 4, 43, NULL, '2019-08-10 09:49:11', '2019-08-10 09:49:11'),
(43, 13, 5, 44, NULL, '2019-08-10 09:49:11', '2019-08-10 09:49:11'),
(44, 14, 3, 38, NULL, '2019-08-10 09:50:46', '2019-08-10 09:50:46'),
(45, 14, 5, 44, NULL, '2019-08-10 09:50:46', '2019-08-10 09:50:46'),
(46, 15, 3, 38, '2019-08-10 10:13:08', '2019-08-10 10:06:48', '2019-08-10 10:06:48'),
(47, 15, 5, 44, '2019-08-10 10:13:08', '2019-08-10 10:06:48', '2019-08-10 10:06:48'),
(48, 15, 3, 36, NULL, '2019-08-10 10:13:09', '2019-08-10 10:13:09'),
(49, 6, 3, 28, NULL, '2019-08-10 10:33:27', '2019-08-10 10:33:27'),
(50, 6, 4, 30, NULL, '2019-08-10 10:33:27', '2019-08-10 10:33:27'),
(51, 6, 5, 33, NULL, '2019-08-10 10:33:27', '2019-08-10 10:33:27'),
(52, 8, 3, 35, NULL, '2019-08-10 10:34:30', '2019-08-10 10:34:30'),
(53, 8, 4, 38, NULL, '2019-08-10 10:34:30', '2019-08-10 10:34:30'),
(54, 4, 4, 29, NULL, '2019-08-10 10:34:54', '2019-08-10 10:34:54'),
(55, 4, 3, 28, NULL, '2019-08-10 10:34:54', '2019-08-10 10:34:54'),
(56, 4, 2, 27, NULL, '2019-08-10 10:34:54', '2019-08-10 10:34:54'),
(57, 2, 2, 32, NULL, '2019-08-10 10:35:12', '2019-08-10 10:35:12'),
(58, 2, 3, 37, NULL, '2019-08-10 10:35:12', '2019-08-10 10:35:12'),
(59, 2, 4, 39, NULL, '2019-08-10 10:35:12', '2019-08-10 10:35:12');

-- --------------------------------------------------------

--
-- Stand-in structure for view `ampere_motors_prop_pitchs`
--
CREATE TABLE IF NOT EXISTS `ampere_motors_prop_pitchs` (
`id` int(10) unsigned
,`motor_id` int(10) unsigned
,`prop_pitch_id` int(10) unsigned
,`ampere` int(11)
,`deleted_at` timestamp
,`created_at` timestamp
,`updated_at` timestamp
,`prop_pitch_name` varchar(20)
);
-- --------------------------------------------------------

--
-- Table structure for table `battery_sizes`
--

CREATE TABLE IF NOT EXISTS `battery_sizes` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `battery_sizes`
--

INSERT INTO `battery_sizes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '4', NULL, '2019-07-26 05:56:56', '2019-07-26 05:56:56'),
(2, '6', NULL, '2019-07-26 05:57:02', '2019-07-26 05:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `builds`
--

CREATE TABLE IF NOT EXISTS `builds` (
`id` int(10) unsigned NOT NULL,
  `frame_id` int(10) unsigned NOT NULL,
  `motor_id` int(10) unsigned NOT NULL,
  `prop_id` int(10) unsigned NOT NULL,
  `fpv_cam_id` int(10) unsigned NOT NULL,
  `fc_id` int(10) unsigned NOT NULL,
  `esc_id` int(10) unsigned NOT NULL,
  `battery_size_id` int(10) unsigned NOT NULL,
  `vtx_id` int(10) unsigned NOT NULL,
  `name` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cam_sizes`
--

CREATE TABLE IF NOT EXISTS `cam_sizes` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cam_sizes`
--

INSERT INTO `cam_sizes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Full size', NULL, '2019-07-26 06:47:05', '2019-07-26 06:47:23'),
(2, 'Mini Size', NULL, '2019-07-26 06:47:16', '2019-07-26 06:47:16'),
(3, 'Micro Size', NULL, '2019-07-31 23:28:15', '2019-07-31 23:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `escs`
--

CREATE TABLE IF NOT EXISTS `escs` (
`id` int(10) unsigned NOT NULL,
  `esc_software_id` int(10) unsigned NOT NULL,
  `start_battery_size_id` int(10) unsigned NOT NULL,
  `end_battery_size_id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere_rating` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `escs`
--

INSERT INTO `escs` (`id`, `esc_software_id`, `start_battery_size_id`, `end_battery_size_id`, `name`, `ampere_rating`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'KISS 24A Race Edition', 30, NULL, '2019-07-30 06:26:18', '2019-08-10 11:43:58'),
(2, 1, 1, 2, 'KISS 32A ESC', 45, NULL, '2019-08-10 06:40:37', '2019-08-10 11:44:07'),
(3, 2, 1, 2, 'Raceflight Bolt32 50A Skitzo', 50, NULL, '2019-08-10 07:04:52', '2019-08-10 07:04:52'),
(4, 2, 1, 2, 'AfterBurner 4 In 1 ESC 50A', 50, NULL, '2019-08-10 07:30:42', '2019-08-10 07:30:42'),
(5, 3, 1, 2, 'Airbot Furling32 35A', 35, NULL, '2019-08-10 07:32:48', '2019-08-10 07:36:06'),
(6, 3, 1, 2, 'Airbot Ori32 25A', 25, NULL, '2019-08-10 07:36:56', '2019-08-10 07:36:56'),
(7, 3, 1, 2, 'Furling32 4in1ESC', 45, NULL, '2019-08-10 11:42:54', '2019-08-10 11:42:54');

-- --------------------------------------------------------

--
-- Stand-in structure for view `escs_battery_sizes`
--
CREATE TABLE IF NOT EXISTS `escs_battery_sizes` (
`id` int(10) unsigned
,`esc_software_id` int(10) unsigned
,`start_battery_size_id` int(10) unsigned
,`end_battery_size_id` int(10) unsigned
,`name` varchar(50)
,`ampere_rating` int(11)
,`deleted_at` timestamp
,`created_at` timestamp
,`updated_at` timestamp
,`battery_size_name_start` varchar(4)
,`battery_size_name_end` varchar(4)
);
-- --------------------------------------------------------

--
-- Table structure for table `esc_softwares`
--

CREATE TABLE IF NOT EXISTS `esc_softwares` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `esc_softwares`
--

INSERT INTO `esc_softwares` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'KISS ESC', NULL, '2019-07-26 06:53:53', '2019-07-26 06:53:53'),
(2, 'FlightOne ESC', NULL, '2019-07-26 06:54:02', '2019-07-26 06:55:24'),
(3, 'BlHeli_32', NULL, '2019-07-26 06:55:35', '2019-07-26 06:55:35'),
(4, 'BlHeli_s', '2019-08-10 06:33:56', '2019-07-26 06:55:42', '2019-07-26 06:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `fcs`
--

CREATE TABLE IF NOT EXISTS `fcs` (
`id` int(10) unsigned NOT NULL,
  `fc_software_id` int(10) unsigned NOT NULL,
  `esc_software_id` int(10) unsigned NOT NULL,
  `fc_mount_option_id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fcs`
--

INSERT INTO `fcs` (`id`, `fc_software_id`, `esc_software_id`, `fc_mount_option_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'KISS V1', NULL, '2019-07-30 05:06:34', '2019-07-30 05:06:55'),
(2, 3, 3, 1, 'Airbot Fireworks V2', '2019-07-30 05:07:59', '2019-07-30 05:07:28', '2019-07-30 05:07:28'),
(3, 1, 1, 1, 'KISS V2 FC', NULL, '2019-08-10 07:49:59', '2019-08-10 07:49:59'),
(4, 3, 3, 1, 'Omnibus F4 Fireworks V2', NULL, '2019-08-10 07:50:54', '2019-08-10 07:51:02'),
(5, 3, 3, 1, 'OMNIBUS AIO F4 V6', NULL, '2019-08-10 07:52:01', '2019-08-10 07:52:01'),
(6, 2, 2, 1, 'Skitzo Revolt V2', NULL, '2019-08-10 07:52:57', '2019-08-10 07:52:57'),
(7, 2, 2, 2, 'Millivolt V2', NULL, '2019-08-10 07:53:49', '2019-08-10 07:53:49'),
(8, 2, 2, 2, 'MillivoltOSD', NULL, '2019-08-10 07:54:05', '2019-08-10 07:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `fc_mount_options`
--

CREATE TABLE IF NOT EXISTS `fc_mount_options` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fc_mount_options`
--

INSERT INTO `fc_mount_options` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '30mm x 30mm', NULL, '2019-07-29 00:10:40', '2019-07-31 23:15:40'),
(2, '20mm x 20mm', NULL, '2019-07-29 00:10:54', '2019-07-31 23:15:49'),
(3, '25mm x 25m', '2019-07-29 00:11:27', '2019-07-29 00:11:05', '2019-07-29 00:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `fc_softwares`
--

CREATE TABLE IF NOT EXISTS `fc_softwares` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fc_softwares`
--

INSERT INTO `fc_softwares` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'KISS', NULL, '2019-07-26 07:04:16', '2019-07-26 07:04:16'),
(2, 'FlightOne', NULL, '2019-07-26 07:04:24', '2019-08-10 07:49:26'),
(3, 'Betaflight', NULL, '2019-07-26 07:04:31', '2019-07-26 07:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `fpv_cams`
--

CREATE TABLE IF NOT EXISTS `fpv_cams` (
`id` int(10) unsigned NOT NULL,
  `cam_size_id` int(10) unsigned NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fpv_cams`
--

INSERT INTO `fpv_cams` (`id`, `cam_size_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Foxeer Arrow V3', NULL, '2019-07-29 07:04:41', '2019-07-29 07:28:21'),
(2, 2, 'Runcam Swift Mini V2', NULL, '2019-07-29 07:28:40', '2019-07-29 07:28:40'),
(3, 3, 'Foxeer Micro Arrow Pro', NULL, '2019-08-10 06:31:57', '2019-08-10 06:33:35'),
(4, 2, 'Foxeer Mini Arrow Pro', NULL, '2019-08-10 06:32:24', '2019-08-10 06:33:14'),
(5, 1, 'Runcam Swift V3', NULL, '2019-08-10 06:32:40', '2019-08-10 06:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `frames`
--

CREATE TABLE IF NOT EXISTS `frames` (
`id` int(10) unsigned NOT NULL,
  `prop_size_id` int(10) unsigned NOT NULL,
  `motor_size_id` int(10) unsigned NOT NULL,
  `fc_mount_option_id` int(10) unsigned NOT NULL,
  `cam_size_id` int(10) unsigned NOT NULL,
  `frame_type_id` int(10) unsigned NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `purpouse` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery_mount` int(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `frames`
--

INSERT INTO `frames` (`id`, `prop_size_id`, `motor_size_id`, `fc_mount_option_id`, `cam_size_id`, `frame_type_id`, `name`, `size`, `weight`, `purpouse`, `battery_mount`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 1, 1, 'Alien 225mm', 225, 95, '2', 1, NULL, '2019-07-30 07:10:57', '2019-07-30 07:10:57'),
(2, 1, 3, 1, 1, 1, 'TruX-R', 230, 90, '1', 2, NULL, '2019-07-31 23:16:37', '2019-08-10 10:37:37'),
(3, 1, 2, 1, 2, 1, 'Vigilante', 230, 100, '2', 1, NULL, '2019-07-31 23:17:38', '2019-07-31 23:17:38'),
(4, 1, 2, 2, 3, 2, 'Acrobot Saga', 230, 80, '1', 2, NULL, '2019-07-31 23:21:45', '2019-07-31 23:29:14'),
(5, 1, 2, 1, 1, 1, 'ACROBOT Zenith SX V-Arm', 225, 110, '1', 2, NULL, '2019-07-31 23:24:09', '2019-07-31 23:24:09'),
(6, 1, 2, 2, 3, 2, 'ACROBOT blitZ', 230, 65, '1', 2, NULL, '2019-07-31 23:25:23', '2019-07-31 23:29:23'),
(7, 1, 3, 1, 3, 1, 'ACROBOT TruX v4', 230, 90, '2', 1, NULL, '2019-07-31 23:26:47', '2019-08-10 10:35:49'),
(8, 1, 3, 1, 3, 2, 'ALPHASQUAD Seeker', 218, 71, '1', 1, NULL, '2019-07-31 23:28:03', '2019-08-10 10:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `frame_types`
--

CREATE TABLE IF NOT EXISTS `frame_types` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `frame_types`
--

INSERT INTO `frame_types` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pure X', NULL, '2019-07-29 05:56:16', '2019-07-29 05:56:17'),
(2, 'Stretched X', NULL, '2019-07-29 05:56:27', '2019-07-29 05:57:07'),
(3, 'H Frame', '2019-07-29 05:56:49', '2019-07-29 05:56:41', '2019-07-29 05:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
`id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_15_100625_create_motor_sizes_table', 1),
(4, '2019_07_15_100750_create_motor_kvs_table', 1),
(5, '2019_07_15_104128_create_battery_sizes_table', 1),
(6, '2019_07_15_104154_create_frame_types_table', 1),
(7, '2019_07_15_104319_create_cam_sizes_table', 1),
(8, '2019_07_15_104340_create_prop_sizes_table', 1),
(9, '2019_07_15_104401_create_prop_pitchs_table', 1),
(10, '2019_07_15_104437_create_fc_mount_options_table', 1),
(11, '2019_07_15_104459_create_fc_softwares_table', 1),
(12, '2019_07_15_104510_create_esc_softwares_table', 1),
(13, '2019_07_15_104516_create_fcs_table', 1),
(14, '2019_07_15_105115_create_escs_table', 1),
(15, '2019_07_15_105213_create_frames_table', 1),
(16, '2019_07_15_114952_create_props_table', 1),
(17, '2019_07_15_115046_create_fpv_cams_table', 1),
(18, '2019_07_15_115139_create_vtxs_table', 1),
(19, '2019_07_15_115521_create_motors_table', 1),
(20, '2019_07_15_120111_create_motor_varians_table', 2),
(21, '2019_07_15_120113_create_ampere_motors_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `motors`
--

CREATE TABLE IF NOT EXISTS `motors` (
`id` int(10) unsigned NOT NULL,
  `motor_size_id` int(10) unsigned NOT NULL,
  `motor_kv_id` int(10) unsigned NOT NULL,
  `battery_size_id` int(10) unsigned NOT NULL,
  `prop_size_id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=16 ;

--
-- Dumping data for table `motors`
--

INSERT INTO `motors` (`id`, `motor_size_id`, `motor_kv_id`, `battery_size_id`, `prop_size_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 8, 1, 1, 'Brother Hobby Returner R3 2207-2500kv', NULL, '2019-07-30 06:23:13', '2019-08-10 08:14:56'),
(2, 2, 1, 1, 1, 'Lumenier &quot;JohnnyFPV&quot; 2207 2400kv', NULL, '2019-07-30 06:32:35', '2019-08-10 10:35:12'),
(3, 2, 3, 2, 1, 'Emax Eco 2207-1900kv', '2019-07-30 12:07:56', '2019-07-30 12:06:53', '2019-07-30 12:06:53'),
(4, 2, 7, 2, 1, 'Brother Hobby Returner R3 2207-1600KV', NULL, '2019-07-30 12:07:45', '2019-08-10 10:34:54'),
(5, 3, 1, 1, 1, 'Emax Eco 2306-2400kv', NULL, '2019-08-10 08:11:24', '2019-08-10 08:11:24'),
(6, 3, 5, 2, 1, 'Emax RSII 2306 1800kv', NULL, '2019-08-10 09:17:15', '2019-08-10 10:33:27'),
(7, 3, 7, 2, 1, 'T-Motor F40 Pro II 1600KV', NULL, '2019-08-10 09:20:22', '2019-08-10 09:20:22'),
(8, 2, 6, 2, 1, 'T-Motor F60 ProII 1700KV', NULL, '2019-08-10 09:22:30', '2019-08-10 10:34:29'),
(9, 2, 9, 1, 1, 'iFlight Force IF2207 2700kv', NULL, '2019-08-10 09:31:47', '2019-08-10 09:31:47'),
(10, 2, 9, 1, 1, 'T-Motor &quot;Blackbird&quot; 2207 2700kv', NULL, '2019-08-10 09:33:37', '2019-08-10 09:33:37'),
(11, 3, 2, 1, 1, 'T-Motor F40III 2306 2600kv', NULL, '2019-08-10 09:37:18', '2019-08-10 09:37:18'),
(12, 3, 9, 1, 1, 'TBS Masterpilot 2700kv', NULL, '2019-08-10 09:38:32', '2019-08-10 09:38:32'),
(13, 3, 8, 1, 1, 'AMAXInno 2306 2500kv', NULL, '2019-08-10 09:49:11', '2019-08-10 09:49:11'),
(14, 2, 5, 2, 1, 'Sunnysky Edge Racing 2207-1800KV', NULL, '2019-08-10 09:50:46', '2019-08-10 09:50:46'),
(15, 2, 5, 2, 1, 'AMAXinno 2207 1800kv', NULL, '2019-08-10 10:06:47', '2019-08-10 10:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `motor_kvs`
--

CREATE TABLE IF NOT EXISTS `motor_kvs` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `motor_kvs`
--

INSERT INTO `motor_kvs` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2400', NULL, '2019-07-26 05:04:54', '2019-07-26 05:57:13'),
(2, '2600', NULL, '2019-07-26 05:57:17', '2019-07-26 05:57:17'),
(3, '1900', NULL, '2019-07-30 12:05:23', '2019-07-30 12:05:23'),
(4, '2300', NULL, '2019-08-10 07:56:50', '2019-08-10 07:56:50'),
(5, '1800', NULL, '2019-08-10 07:56:57', '2019-08-10 07:56:57'),
(6, '1700', NULL, '2019-08-10 07:57:05', '2019-08-10 07:57:05'),
(7, '1600', NULL, '2019-08-10 07:59:00', '2019-08-10 07:59:00'),
(8, '2500', NULL, '2019-08-10 08:13:14', '2019-08-10 08:13:14'),
(9, '2700', NULL, '2019-08-10 09:27:32', '2019-08-10 09:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `motor_sizes`
--

CREATE TABLE IF NOT EXISTS `motor_sizes` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `motor_sizes`
--

INSERT INTO `motor_sizes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2206', '2019-08-10 08:01:49', '2019-07-26 05:28:19', '2019-07-26 05:29:10'),
(2, '2207', NULL, '2019-07-30 05:51:01', '2019-07-30 05:51:01'),
(3, '2306', NULL, '2019-08-10 08:01:41', '2019-08-10 08:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `motor_varians`
--

CREATE TABLE IF NOT EXISTS `motor_varians` (
`id` int(10) unsigned NOT NULL,
  `motor_id` int(10) unsigned NOT NULL,
  `motor_kv_id` int(10) unsigned NOT NULL,
  `start_battery_size_id` int(10) unsigned NOT NULL,
  `end_battery_size_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `props`
--

CREATE TABLE IF NOT EXISTS `props` (
`id` int(10) unsigned NOT NULL,
  `prop_size_id` int(10) unsigned NOT NULL,
  `prop_pitch_id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `props`
--

INSERT INTO `props` (`id`, `prop_size_id`, `prop_pitch_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Ethix S3', NULL, '2019-07-30 06:28:24', '2019-07-30 06:28:24'),
(2, 1, 2, 'Dal Cyclone 5040', '2019-08-10 09:17:36', '2019-07-30 06:28:33', '2019-07-30 06:28:33'),
(3, 1, 4, 'Dal Cyclone 5045', '2019-08-10 09:17:31', '2019-07-30 06:28:44', '2019-07-30 06:28:44'),
(4, 1, 2, 'HQ v1s 5x4x3', NULL, '2019-08-10 07:55:24', '2019-08-10 09:23:48'),
(5, 1, 3, 'HQ v1s 5x4.3x3', NULL, '2019-08-10 07:55:43', '2019-08-10 09:23:28'),
(6, 1, 4, 'HQ v1s 5x4.5x3', NULL, '2019-08-10 07:56:04', '2019-08-10 09:23:13'),
(7, 1, 5, 'HQ v1s 5x4.8x3', NULL, '2019-08-10 07:56:20', '2019-08-10 09:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `prop_pitchs`
--

CREATE TABLE IF NOT EXISTS `prop_pitchs` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `prop_pitchs`
--

INSERT INTO `prop_pitchs` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '31', '2019-08-10 10:45:36', '2019-07-28 23:07:47', '2019-07-28 23:07:47'),
(2, '40', NULL, '2019-07-28 23:07:52', '2019-07-28 23:07:52'),
(3, '43', NULL, '2019-07-28 23:07:56', '2019-07-28 23:07:56'),
(4, '45', NULL, '2019-07-28 23:08:01', '2019-07-28 23:08:01'),
(5, '48', NULL, '2019-07-28 17:00:00', '2019-07-28 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `prop_sizes`
--

CREATE TABLE IF NOT EXISTS `prop_sizes` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prop_sizes`
--

INSERT INTO `prop_sizes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '5', NULL, '2019-07-28 23:01:45', '2019-07-28 23:01:45'),
(2, '6', NULL, '2019-07-28 23:01:55', '2019-07-28 23:01:55'),
(3, '5.1', '2019-07-28 23:03:27', '2019-07-28 23:02:00', '2019-07-28 23:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'M Argus Chopin Gyver', 'arguspolim@gmail.com', 'fca9340b3ae1325ea9077b3a72874cb1', NULL, '2019-07-31 23:04:55', '2019-07-31 23:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_builds`
--

CREATE TABLE IF NOT EXISTS `user_builds` (
`id` int(10) NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `build_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vtxs`
--

CREATE TABLE IF NOT EXISTS `vtxs` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `power_output` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vtxs`
--

INSERT INTO `vtxs` (`id`, `name`, `power_output`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'TBS Unify Race', 25, NULL, '2019-07-29 06:32:34', '2019-07-29 06:32:34'),
(2, 'TBS Unify Pro', 600, NULL, '2019-07-29 06:33:06', '2019-07-29 06:33:21');

-- --------------------------------------------------------

--
-- Structure for view `ampere_motors_prop_pitchs`
--
DROP TABLE IF EXISTS `ampere_motors_prop_pitchs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ampere_motors_prop_pitchs` AS select `a`.`id` AS `id`,`a`.`motor_id` AS `motor_id`,`a`.`prop_pitch_id` AS `prop_pitch_id`,`a`.`ampere` AS `ampere`,`a`.`deleted_at` AS `deleted_at`,`a`.`created_at` AS `created_at`,`a`.`updated_at` AS `updated_at`,`b`.`name` AS `prop_pitch_name` from (`ampere_motors` `a` left join `prop_pitchs` `b` on((`a`.`prop_pitch_id` = `b`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `escs_battery_sizes`
--
DROP TABLE IF EXISTS `escs_battery_sizes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `escs_battery_sizes` AS select `a`.`id` AS `id`,`a`.`esc_software_id` AS `esc_software_id`,`a`.`start_battery_size_id` AS `start_battery_size_id`,`a`.`end_battery_size_id` AS `end_battery_size_id`,`a`.`name` AS `name`,`a`.`ampere_rating` AS `ampere_rating`,`a`.`deleted_at` AS `deleted_at`,`a`.`created_at` AS `created_at`,`a`.`updated_at` AS `updated_at`,`b`.`name` AS `battery_size_name_start`,`c`.`name` AS `battery_size_name_end` from ((`escs` `a` left join `battery_sizes` `b` on((`a`.`start_battery_size_id` = `b`.`id`))) left join `battery_sizes` `c` on((`a`.`end_battery_size_id` = `c`.`id`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `ampere_motors`
--
ALTER TABLE `ampere_motors`
 ADD PRIMARY KEY (`id`), ADD KEY `ampere_motors_motor_varian_id_foreign` (`motor_id`), ADD KEY `ampere_motors_prop_pitch_id_foreign` (`prop_pitch_id`);

--
-- Indexes for table `battery_sizes`
--
ALTER TABLE `battery_sizes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `builds`
--
ALTER TABLE `builds`
 ADD PRIMARY KEY (`id`), ADD KEY `builds_battery_size_id_foreign` (`battery_size_id`), ADD KEY `builds_frame_id_foreign` (`frame_id`), ADD KEY `builds_motor_id_foreign` (`motor_id`), ADD KEY `builds_prop_id_foreign` (`prop_id`), ADD KEY `builds_vtx_id_foreign` (`vtx_id`), ADD KEY `builds_esc_id_foreign` (`esc_id`), ADD KEY `builds_fc_id_foreign` (`fc_id`), ADD KEY `builds_fpv_cam_id_foreign` (`fpv_cam_id`);

--
-- Indexes for table `cam_sizes`
--
ALTER TABLE `cam_sizes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `escs`
--
ALTER TABLE `escs`
 ADD PRIMARY KEY (`id`), ADD KEY `escs_esc_software_id_foreign` (`esc_software_id`), ADD KEY `escs_start_battery_size_id_foreign` (`start_battery_size_id`), ADD KEY `escs_end_battery_size_id_foreign` (`end_battery_size_id`);

--
-- Indexes for table `esc_softwares`
--
ALTER TABLE `esc_softwares`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fcs`
--
ALTER TABLE `fcs`
 ADD PRIMARY KEY (`id`), ADD KEY `fcs_fc_software_id_foreign` (`fc_software_id`), ADD KEY `fcs_esc_software_id_foreign` (`esc_software_id`), ADD KEY `fcs_fc_mount_option_id_foreign` (`fc_mount_option_id`);

--
-- Indexes for table `fc_mount_options`
--
ALTER TABLE `fc_mount_options`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fc_softwares`
--
ALTER TABLE `fc_softwares`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fpv_cams`
--
ALTER TABLE `fpv_cams`
 ADD PRIMARY KEY (`id`), ADD KEY `fpv_cams_cam_size_id_foreign` (`cam_size_id`);

--
-- Indexes for table `frames`
--
ALTER TABLE `frames`
 ADD PRIMARY KEY (`id`), ADD KEY `frames_prop_size_id_foreign` (`prop_size_id`), ADD KEY `frames_motor_size_id_foreign` (`motor_size_id`), ADD KEY `frames_fc_mount_option_id_foreign` (`fc_mount_option_id`), ADD KEY `frames_cam_size_id_foreign` (`cam_size_id`), ADD KEY `frames_frame_type_id_foreign` (`frame_type_id`);

--
-- Indexes for table `frame_types`
--
ALTER TABLE `frame_types`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motors`
--
ALTER TABLE `motors`
 ADD PRIMARY KEY (`id`), ADD KEY `motors_motor_size_id_foreign` (`motor_size_id`), ADD KEY `motors_prop_size_id_foreign` (`prop_size_id`), ADD KEY `motors_motor_kv_id_foreign` (`motor_kv_id`) USING BTREE, ADD KEY `motors_battery_size_id_foreign` (`battery_size_id`) USING BTREE;

--
-- Indexes for table `motor_kvs`
--
ALTER TABLE `motor_kvs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor_sizes`
--
ALTER TABLE `motor_sizes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor_varians`
--
ALTER TABLE `motor_varians`
 ADD PRIMARY KEY (`id`), ADD KEY `motor_varians_motor_id_foreign` (`motor_id`), ADD KEY `motor_varians_motor_kv_id_foreign` (`motor_kv_id`), ADD KEY `motor_varians_start_battery_size_id_foreign` (`start_battery_size_id`), ADD KEY `motor_varians_end_battery_size_id_foreign` (`end_battery_size_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `props`
--
ALTER TABLE `props`
 ADD PRIMARY KEY (`id`), ADD KEY `props_prop_size_id_foreign` (`prop_size_id`), ADD KEY `props_prop_pitch_id_foreign` (`prop_pitch_id`);

--
-- Indexes for table `prop_pitchs`
--
ALTER TABLE `prop_pitchs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prop_sizes`
--
ALTER TABLE `prop_sizes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_builds`
--
ALTER TABLE `user_builds`
 ADD PRIMARY KEY (`id`), ADD KEY `user_builds_user_id_foreign` (`user_id`), ADD KEY `user_builds_build_id_foreign` (`build_id`);

--
-- Indexes for table `vtxs`
--
ALTER TABLE `vtxs`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ampere_motors`
--
ALTER TABLE `ampere_motors`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `battery_sizes`
--
ALTER TABLE `battery_sizes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `builds`
--
ALTER TABLE `builds`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cam_sizes`
--
ALTER TABLE `cam_sizes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `escs`
--
ALTER TABLE `escs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `esc_softwares`
--
ALTER TABLE `esc_softwares`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fcs`
--
ALTER TABLE `fcs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fc_mount_options`
--
ALTER TABLE `fc_mount_options`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fc_softwares`
--
ALTER TABLE `fc_softwares`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fpv_cams`
--
ALTER TABLE `fpv_cams`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `frames`
--
ALTER TABLE `frames`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `frame_types`
--
ALTER TABLE `frame_types`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `motor_kvs`
--
ALTER TABLE `motor_kvs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `motor_sizes`
--
ALTER TABLE `motor_sizes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `motor_varians`
--
ALTER TABLE `motor_varians`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `props`
--
ALTER TABLE `props`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `prop_pitchs`
--
ALTER TABLE `prop_pitchs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prop_sizes`
--
ALTER TABLE `prop_sizes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_builds`
--
ALTER TABLE `user_builds`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vtxs`
--
ALTER TABLE `vtxs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ampere_motors`
--
ALTER TABLE `ampere_motors`
ADD CONSTRAINT `ampere_motors_motor_id_foreign` FOREIGN KEY (`motor_id`) REFERENCES `motors` (`id`),
ADD CONSTRAINT `ampere_motors_prop_pitch_id_foreign` FOREIGN KEY (`prop_pitch_id`) REFERENCES `prop_pitchs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `builds`
--
ALTER TABLE `builds`
ADD CONSTRAINT `builds_battery_size_id_foreign` FOREIGN KEY (`battery_size_id`) REFERENCES `battery_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `builds_esc_id_foreign` FOREIGN KEY (`esc_id`) REFERENCES `escs` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `builds_fc_id_foreign` FOREIGN KEY (`fc_id`) REFERENCES `fcs` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `builds_fpv_cam_id_foreign` FOREIGN KEY (`fpv_cam_id`) REFERENCES `fpv_cams` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `builds_frame_id_foreign` FOREIGN KEY (`frame_id`) REFERENCES `frames` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `builds_motor_id_foreign` FOREIGN KEY (`motor_id`) REFERENCES `motors` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `builds_prop_id_foreign` FOREIGN KEY (`prop_id`) REFERENCES `props` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `builds_vtx_id_foreign` FOREIGN KEY (`vtx_id`) REFERENCES `vtxs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `escs`
--
ALTER TABLE `escs`
ADD CONSTRAINT `escs_end_battery_size_id_foreign` FOREIGN KEY (`end_battery_size_id`) REFERENCES `battery_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `escs_esc_software_id_foreign` FOREIGN KEY (`esc_software_id`) REFERENCES `esc_softwares` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `escs_start_battery_size_id_foreign` FOREIGN KEY (`start_battery_size_id`) REFERENCES `battery_sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fcs`
--
ALTER TABLE `fcs`
ADD CONSTRAINT `fcs_esc_software_id_foreign` FOREIGN KEY (`esc_software_id`) REFERENCES `esc_softwares` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `fcs_fc_mount_option_id_foreign` FOREIGN KEY (`fc_mount_option_id`) REFERENCES `fc_mount_options` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `fcs_fc_software_id_foreign` FOREIGN KEY (`fc_software_id`) REFERENCES `fc_softwares` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fpv_cams`
--
ALTER TABLE `fpv_cams`
ADD CONSTRAINT `fpv_cams_cam_size_id_foreign` FOREIGN KEY (`cam_size_id`) REFERENCES `cam_sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `frames`
--
ALTER TABLE `frames`
ADD CONSTRAINT `frames_cam_size_id_foreign` FOREIGN KEY (`cam_size_id`) REFERENCES `cam_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `frames_fc_mount_option_id_foreign` FOREIGN KEY (`fc_mount_option_id`) REFERENCES `fc_mount_options` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `frames_frame_type_id_foreign` FOREIGN KEY (`frame_type_id`) REFERENCES `frame_types` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `frames_motor_size_id_foreign` FOREIGN KEY (`motor_size_id`) REFERENCES `motor_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `frames_prop_size_id_foreign` FOREIGN KEY (`prop_size_id`) REFERENCES `prop_sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `motors`
--
ALTER TABLE `motors`
ADD CONSTRAINT `motors_battery_size_id_foreign` FOREIGN KEY (`battery_size_id`) REFERENCES `battery_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `motors_motor_kv_id_foreign` FOREIGN KEY (`motor_kv_id`) REFERENCES `motor_kvs` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `motors_motor_size_id_foreign` FOREIGN KEY (`motor_size_id`) REFERENCES `motor_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `motors_prop_size_id_foreign` FOREIGN KEY (`prop_size_id`) REFERENCES `prop_sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `motor_varians`
--
ALTER TABLE `motor_varians`
ADD CONSTRAINT `motor_varians_end_battery_size_id_foreign` FOREIGN KEY (`end_battery_size_id`) REFERENCES `battery_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `motor_varians_motor_id_foreign` FOREIGN KEY (`motor_id`) REFERENCES `motors` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `motor_varians_motor_kv_id_foreign` FOREIGN KEY (`motor_kv_id`) REFERENCES `motor_kvs` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `motor_varians_start_battery_size_id_foreign` FOREIGN KEY (`start_battery_size_id`) REFERENCES `battery_sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `props`
--
ALTER TABLE `props`
ADD CONSTRAINT `props_prop_pitch_id_foreign` FOREIGN KEY (`prop_pitch_id`) REFERENCES `prop_pitchs` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `props_prop_size_id_foreign` FOREIGN KEY (`prop_size_id`) REFERENCES `prop_sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_builds`
--
ALTER TABLE `user_builds`
ADD CONSTRAINT `user_builds_build_id_foreign` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `user_builds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
