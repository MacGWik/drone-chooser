-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 02:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drone_chooser`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', NULL, '2019-07-25 17:00:00', '2019-07-25 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ampere_motors`
--

CREATE TABLE `ampere_motors` (
  `id` int(10) UNSIGNED NOT NULL,
  `motor_varian_id` int(10) UNSIGNED NOT NULL,
  `battery_size_id` int(10) UNSIGNED NOT NULL,
  `prop_pitch_id` int(10) UNSIGNED NOT NULL,
  `ampere` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `battery_sizes`
--

CREATE TABLE `battery_sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `battery_sizes`
--

INSERT INTO `battery_sizes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '4S', NULL, '2019-07-26 05:56:56', '2019-07-26 05:56:56'),
(2, '6S', NULL, '2019-07-26 05:57:02', '2019-07-26 05:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `cam_sizes`
--

CREATE TABLE `cam_sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cam_sizes`
--

INSERT INTO `cam_sizes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Full size', NULL, '2019-07-26 06:47:05', '2019-07-26 06:47:23'),
(2, 'Mini Size', NULL, '2019-07-26 06:47:16', '2019-07-26 06:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `escs`
--

CREATE TABLE `escs` (
  `id` int(10) UNSIGNED NOT NULL,
  `esc_software_id` int(10) UNSIGNED NOT NULL,
  `start_battery_size_id` int(10) UNSIGNED NOT NULL,
  `end_battery_size_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere_rating` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `esc_softwares`
--

CREATE TABLE `esc_softwares` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `esc_softwares`
--

INSERT INTO `esc_softwares` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'KISS ESC', NULL, '2019-07-26 06:53:53', '2019-07-26 06:53:53'),
(2, 'FlightOne ESC', NULL, '2019-07-26 06:54:02', '2019-07-26 06:55:24'),
(3, 'BlHeli_32', NULL, '2019-07-26 06:55:35', '2019-07-26 06:55:35'),
(4, 'BlHeli_s', NULL, '2019-07-26 06:55:42', '2019-07-26 06:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `fcs`
--

CREATE TABLE `fcs` (
  `id` int(10) UNSIGNED NOT NULL,
  `fc_software_id` int(10) UNSIGNED NOT NULL,
  `esc_software_id` int(10) UNSIGNED NOT NULL,
  `fc_mount_option_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fc_mount_options`
--

CREATE TABLE `fc_mount_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fc_softwares`
--

CREATE TABLE `fc_softwares` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fc_softwares`
--

INSERT INTO `fc_softwares` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'KISS', NULL, '2019-07-26 07:04:16', '2019-07-26 07:04:16'),
(2, 'Flight1', NULL, '2019-07-26 07:04:24', '2019-07-26 07:04:24'),
(3, 'Betaflight', NULL, '2019-07-26 07:04:31', '2019-07-26 07:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `fpv_cams`
--

CREATE TABLE `fpv_cams` (
  `id` int(10) UNSIGNED NOT NULL,
  `cam_size_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frames`
--

CREATE TABLE `frames` (
  `id` int(10) UNSIGNED NOT NULL,
  `prop_size_id` int(10) UNSIGNED NOT NULL,
  `motor_size_id` int(10) UNSIGNED NOT NULL,
  `fc_mount_option_id` int(10) UNSIGNED NOT NULL,
  `cam_size_id` int(10) UNSIGNED NOT NULL,
  `frame_type_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `purpouse` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frame_types`
--

CREATE TABLE `frame_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `motors` (
  `id` int(10) UNSIGNED NOT NULL,
  `motor_size_id` int(10) UNSIGNED NOT NULL,
  `prop_size_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `motor_kvs`
--

CREATE TABLE `motor_kvs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motor_kvs`
--

INSERT INTO `motor_kvs` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2400', NULL, '2019-07-26 05:04:54', '2019-07-26 05:57:13'),
(2, '2600', NULL, '2019-07-26 05:57:17', '2019-07-26 05:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `motor_sizes`
--

CREATE TABLE `motor_sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motor_sizes`
--

INSERT INTO `motor_sizes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2206', NULL, '2019-07-26 05:28:19', '2019-07-26 05:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `motor_varians`
--

CREATE TABLE `motor_varians` (
  `id` int(10) UNSIGNED NOT NULL,
  `motor_id` int(10) UNSIGNED NOT NULL,
  `motor_kv_id` int(10) UNSIGNED NOT NULL,
  `start_battery_size_id` int(10) UNSIGNED NOT NULL,
  `end_battery_size_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `props`
--

CREATE TABLE `props` (
  `id` int(10) UNSIGNED NOT NULL,
  `prop_size_id` int(10) UNSIGNED NOT NULL,
  `prop_pitch_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prop_pitchs`
--

CREATE TABLE `prop_pitchs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prop_sizes`
--

CREATE TABLE `prop_sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vtxs`
--

CREATE TABLE `vtxs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `power_output` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `ampere_motors`
--
ALTER TABLE `ampere_motors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ampere_motors_motor_varian_id_foreign` (`motor_varian_id`),
  ADD KEY `ampere_motors_battery_size_id_foreign` (`battery_size_id`),
  ADD KEY `ampere_motors_prop_pitch_id_foreign` (`prop_pitch_id`);

--
-- Indexes for table `battery_sizes`
--
ALTER TABLE `battery_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cam_sizes`
--
ALTER TABLE `cam_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `escs`
--
ALTER TABLE `escs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escs_esc_software_id_foreign` (`esc_software_id`),
  ADD KEY `escs_start_battery_size_id_foreign` (`start_battery_size_id`),
  ADD KEY `escs_end_battery_size_id_foreign` (`end_battery_size_id`);

--
-- Indexes for table `esc_softwares`
--
ALTER TABLE `esc_softwares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fcs`
--
ALTER TABLE `fcs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fcs_fc_software_id_foreign` (`fc_software_id`),
  ADD KEY `fcs_esc_software_id_foreign` (`esc_software_id`),
  ADD KEY `fcs_fc_mount_option_id_foreign` (`fc_mount_option_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fpv_cams_cam_size_id_foreign` (`cam_size_id`);

--
-- Indexes for table `frames`
--
ALTER TABLE `frames`
  ADD PRIMARY KEY (`id`),
  ADD KEY `frames_prop_size_id_foreign` (`prop_size_id`),
  ADD KEY `frames_motor_size_id_foreign` (`motor_size_id`),
  ADD KEY `frames_fc_mount_option_id_foreign` (`fc_mount_option_id`),
  ADD KEY `frames_cam_size_id_foreign` (`cam_size_id`),
  ADD KEY `frames_frame_type_id_foreign` (`frame_type_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `motors_motor_size_id_foreign` (`motor_size_id`),
  ADD KEY `motors_prop_size_id_foreign` (`prop_size_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `motor_varians_motor_id_foreign` (`motor_id`),
  ADD KEY `motor_varians_motor_kv_id_foreign` (`motor_kv_id`),
  ADD KEY `motor_varians_start_battery_size_id_foreign` (`start_battery_size_id`),
  ADD KEY `motor_varians_end_battery_size_id_foreign` (`end_battery_size_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `props`
--
ALTER TABLE `props`
  ADD PRIMARY KEY (`id`),
  ADD KEY `props_prop_size_id_foreign` (`prop_size_id`),
  ADD KEY `props_prop_pitch_id_foreign` (`prop_pitch_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ampere_motors`
--
ALTER TABLE `ampere_motors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `battery_sizes`
--
ALTER TABLE `battery_sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cam_sizes`
--
ALTER TABLE `cam_sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `escs`
--
ALTER TABLE `escs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `esc_softwares`
--
ALTER TABLE `esc_softwares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fcs`
--
ALTER TABLE `fcs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fc_mount_options`
--
ALTER TABLE `fc_mount_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fc_softwares`
--
ALTER TABLE `fc_softwares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fpv_cams`
--
ALTER TABLE `fpv_cams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `frames`
--
ALTER TABLE `frames`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `frame_types`
--
ALTER TABLE `frame_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `motor_kvs`
--
ALTER TABLE `motor_kvs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `motor_sizes`
--
ALTER TABLE `motor_sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `motor_varians`
--
ALTER TABLE `motor_varians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `props`
--
ALTER TABLE `props`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prop_pitchs`
--
ALTER TABLE `prop_pitchs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prop_sizes`
--
ALTER TABLE `prop_sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vtxs`
--
ALTER TABLE `vtxs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ampere_motors`
--
ALTER TABLE `ampere_motors`
  ADD CONSTRAINT `ampere_motors_battery_size_id_foreign` FOREIGN KEY (`battery_size_id`) REFERENCES `battery_sizes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ampere_motors_motor_varian_id_foreign` FOREIGN KEY (`motor_varian_id`) REFERENCES `motor_varians` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ampere_motors_prop_pitch_id_foreign` FOREIGN KEY (`prop_pitch_id`) REFERENCES `prop_pitchs` (`id`) ON DELETE CASCADE;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
