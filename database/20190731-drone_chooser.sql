-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jul 2019 pada 19.20
-- Versi Server: 5.5.39-log
-- PHP Version: 5.4.31

SET FOREIGN_KEY_CHECKS=0;
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
-- Struktur dari tabel `admins`
--

DROP TABLE IF EXISTS `admins`;
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
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', NULL, '2019-07-25 17:00:00', '2019-07-25 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ampere_motors`
--

DROP TABLE IF EXISTS `ampere_motors`;
CREATE TABLE IF NOT EXISTS `ampere_motors` (
`id` int(10) unsigned NOT NULL,
  `motor_id` int(10) unsigned NOT NULL,
  `prop_pitch_id` int(10) unsigned NOT NULL,
  `ampere` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `ampere_motors`
--

INSERT INTO `ampere_motors` (`id`, `motor_id`, `prop_pitch_id`, `ampere`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 20, '2019-07-30 12:18:36', '2019-07-30 12:07:46', '2019-07-30 12:07:46'),
(2, 4, 2, 25, '2019-07-30 12:18:36', '2019-07-30 12:07:46', '2019-07-30 12:07:46'),
(3, 4, 4, 30, '2019-07-30 12:18:36', '2019-07-30 12:07:46', '2019-07-30 12:07:46'),
(4, 4, 3, 28, '2019-07-30 12:18:36', '2019-07-30 12:07:46', '2019-07-30 12:07:46'),
(5, 4, 1, 20, NULL, '2019-07-30 12:18:36', '2019-07-30 12:18:36'),
(6, 4, 2, 25, NULL, '2019-07-30 12:18:36', '2019-07-30 12:18:36'),
(7, 4, 4, 30, NULL, '2019-07-30 12:18:36', '2019-07-30 12:18:36'),
(8, 4, 3, 28, NULL, '2019-07-30 12:18:36', '2019-07-30 12:18:36'),
(9, 4, 5, 32, NULL, '2019-07-30 12:18:37', '2019-07-30 12:18:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `battery_sizes`
--

DROP TABLE IF EXISTS `battery_sizes`;
CREATE TABLE IF NOT EXISTS `battery_sizes` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `battery_sizes`
--

INSERT INTO `battery_sizes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '4', NULL, '2019-07-26 05:56:56', '2019-07-26 05:56:56'),
(2, '6', NULL, '2019-07-26 05:57:02', '2019-07-26 05:57:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cam_sizes`
--

DROP TABLE IF EXISTS `cam_sizes`;
CREATE TABLE IF NOT EXISTS `cam_sizes` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `cam_sizes`
--

INSERT INTO `cam_sizes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Full size', NULL, '2019-07-26 06:47:05', '2019-07-26 06:47:23'),
(2, 'Mini Size', NULL, '2019-07-26 06:47:16', '2019-07-26 06:47:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `escs`
--

DROP TABLE IF EXISTS `escs`;
CREATE TABLE IF NOT EXISTS `escs` (
`id` int(10) unsigned NOT NULL,
  `esc_software_id` int(10) unsigned NOT NULL,
  `start_battery_size_id` int(10) unsigned NOT NULL,
  `end_battery_size_id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere_rating` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `escs`
--

INSERT INTO `escs` (`id`, `esc_software_id`, `start_battery_size_id`, `end_battery_size_id`, `name`, `ampere_rating`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'KISS ESC Race Editio', 24, NULL, '2019-07-30 06:26:18', '2019-07-30 06:26:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `esc_softwares`
--

DROP TABLE IF EXISTS `esc_softwares`;
CREATE TABLE IF NOT EXISTS `esc_softwares` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `esc_softwares`
--

INSERT INTO `esc_softwares` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'KISS ESC', NULL, '2019-07-26 06:53:53', '2019-07-26 06:53:53'),
(2, 'FlightOne ESC', NULL, '2019-07-26 06:54:02', '2019-07-26 06:55:24'),
(3, 'BlHeli_32', NULL, '2019-07-26 06:55:35', '2019-07-26 06:55:35'),
(4, 'BlHeli_s', NULL, '2019-07-26 06:55:42', '2019-07-26 06:55:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fcs`
--

DROP TABLE IF EXISTS `fcs`;
CREATE TABLE IF NOT EXISTS `fcs` (
`id` int(10) unsigned NOT NULL,
  `fc_software_id` int(10) unsigned NOT NULL,
  `esc_software_id` int(10) unsigned NOT NULL,
  `fc_mount_option_id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `fcs`
--

INSERT INTO `fcs` (`id`, `fc_software_id`, `esc_software_id`, `fc_mount_option_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'KISS V1', NULL, '2019-07-30 05:06:34', '2019-07-30 05:06:55'),
(2, 3, 3, 1, 'Airbot Fireworks V2', '2019-07-30 05:07:59', '2019-07-30 05:07:28', '2019-07-30 05:07:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fc_mount_options`
--

DROP TABLE IF EXISTS `fc_mount_options`;
CREATE TABLE IF NOT EXISTS `fc_mount_options` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `fc_mount_options`
--

INSERT INTO `fc_mount_options` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '30mm x 30m', NULL, '2019-07-29 00:10:40', '2019-07-29 00:10:40'),
(2, '20mm x 20m', NULL, '2019-07-29 00:10:54', '2019-07-29 00:10:54'),
(3, '25mm x 25m', '2019-07-29 00:11:27', '2019-07-29 00:11:05', '2019-07-29 00:11:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fc_softwares`
--

DROP TABLE IF EXISTS `fc_softwares`;
CREATE TABLE IF NOT EXISTS `fc_softwares` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `fc_softwares`
--

INSERT INTO `fc_softwares` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'KISS', NULL, '2019-07-26 07:04:16', '2019-07-26 07:04:16'),
(2, 'Flight1', NULL, '2019-07-26 07:04:24', '2019-07-26 07:04:24'),
(3, 'Betaflight', NULL, '2019-07-26 07:04:31', '2019-07-26 07:04:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fpv_cams`
--

DROP TABLE IF EXISTS `fpv_cams`;
CREATE TABLE IF NOT EXISTS `fpv_cams` (
`id` int(10) unsigned NOT NULL,
  `cam_size_id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `fpv_cams`
--

INSERT INTO `fpv_cams` (`id`, `cam_size_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Foxeer Arrow V3', NULL, '2019-07-29 07:04:41', '2019-07-29 07:28:21'),
(2, 2, 'Runcam Swift Mini V2', NULL, '2019-07-29 07:28:40', '2019-07-29 07:28:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `frames`
--

DROP TABLE IF EXISTS `frames`;
CREATE TABLE IF NOT EXISTS `frames` (
`id` int(10) unsigned NOT NULL,
  `prop_size_id` int(10) unsigned NOT NULL,
  `motor_size_id` int(10) unsigned NOT NULL,
  `fc_mount_option_id` int(10) unsigned NOT NULL,
  `cam_size_id` int(10) unsigned NOT NULL,
  `frame_type_id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `purpouse` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery_mount` int(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `frames`
--

INSERT INTO `frames` (`id`, `prop_size_id`, `motor_size_id`, `fc_mount_option_id`, `cam_size_id`, `frame_type_id`, `name`, `size`, `weight`, `purpouse`, `battery_mount`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 1, 1, 'Alien 225mm', 225, 95, '2', 1, NULL, '2019-07-30 07:10:57', '2019-07-30 07:10:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `frame_types`
--

DROP TABLE IF EXISTS `frame_types`;
CREATE TABLE IF NOT EXISTS `frame_types` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `frame_types`
--

INSERT INTO `frame_types` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pure X', NULL, '2019-07-29 05:56:16', '2019-07-29 05:56:17'),
(2, 'Stretched X', NULL, '2019-07-29 05:56:27', '2019-07-29 05:57:07'),
(3, 'H Frame', '2019-07-29 05:56:49', '2019-07-29 05:56:41', '2019-07-29 05:56:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
`id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `migrations`
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
-- Struktur dari tabel `motors`
--

DROP TABLE IF EXISTS `motors`;
CREATE TABLE IF NOT EXISTS `motors` (
`id` int(10) unsigned NOT NULL,
  `motor_size_id` int(10) unsigned NOT NULL,
  `motor_kv_id` int(10) unsigned NOT NULL,
  `battery_size_id` int(10) unsigned NOT NULL,
  `prop_size_id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `motors`
--

INSERT INTO `motors` (`id`, `motor_size_id`, `motor_kv_id`, `battery_size_id`, `prop_size_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 1, 'Emax Eco 2207-2400kv', NULL, '2019-07-30 06:23:13', '2019-07-30 06:23:13'),
(2, 2, 2, 1, 1, 'Emax Eco 2207-2600kv', NULL, '2019-07-30 06:32:35', '2019-07-30 06:34:44'),
(3, 2, 3, 2, 1, 'Emax Eco 2207-1900kv', '2019-07-30 12:07:56', '2019-07-30 12:06:53', '2019-07-30 12:06:53'),
(4, 2, 3, 2, 1, 'Emax Eco 2207-1900kv', NULL, '2019-07-30 12:07:45', '2019-07-30 12:18:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor_kvs`
--

DROP TABLE IF EXISTS `motor_kvs`;
CREATE TABLE IF NOT EXISTS `motor_kvs` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `motor_kvs`
--

INSERT INTO `motor_kvs` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2400', NULL, '2019-07-26 05:04:54', '2019-07-26 05:57:13'),
(2, '2600', NULL, '2019-07-26 05:57:17', '2019-07-26 05:57:17'),
(3, '1900', NULL, '2019-07-30 12:05:23', '2019-07-30 12:05:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor_sizes`
--

DROP TABLE IF EXISTS `motor_sizes`;
CREATE TABLE IF NOT EXISTS `motor_sizes` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `motor_sizes`
--

INSERT INTO `motor_sizes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2206', NULL, '2019-07-26 05:28:19', '2019-07-26 05:29:10'),
(2, '2207', NULL, '2019-07-30 05:51:01', '2019-07-30 05:51:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor_varians`
--

DROP TABLE IF EXISTS `motor_varians`;
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
-- Struktur dari tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `props`
--

DROP TABLE IF EXISTS `props`;
CREATE TABLE IF NOT EXISTS `props` (
`id` int(10) unsigned NOT NULL,
  `prop_size_id` int(10) unsigned NOT NULL,
  `prop_pitch_id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `props`
--

INSERT INTO `props` (`id`, `prop_size_id`, `prop_pitch_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Ethix S3', NULL, '2019-07-30 06:28:24', '2019-07-30 06:28:24'),
(2, 1, 2, 'Dal Cyclone 5040', NULL, '2019-07-30 06:28:33', '2019-07-30 06:28:33'),
(3, 1, 4, 'Dal Cyclone 5045', NULL, '2019-07-30 06:28:44', '2019-07-30 06:28:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prop_pitchs`
--

DROP TABLE IF EXISTS `prop_pitchs`;
CREATE TABLE IF NOT EXISTS `prop_pitchs` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `prop_pitchs`
--

INSERT INTO `prop_pitchs` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '31', NULL, '2019-07-28 23:07:47', '2019-07-28 23:07:47'),
(2, '40', NULL, '2019-07-28 23:07:52', '2019-07-28 23:07:52'),
(3, '43', NULL, '2019-07-28 23:07:56', '2019-07-28 23:07:56'),
(4, '45', NULL, '2019-07-28 23:08:01', '2019-07-28 23:08:01'),
(5, '48', NULL, '2019-07-28 17:00:00', '2019-07-28 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prop_sizes`
--

DROP TABLE IF EXISTS `prop_sizes`;
CREATE TABLE IF NOT EXISTS `prop_sizes` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `prop_sizes`
--

INSERT INTO `prop_sizes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '5', NULL, '2019-07-28 23:01:45', '2019-07-28 23:01:45'),
(2, '6', NULL, '2019-07-28 23:01:55', '2019-07-28 23:01:55'),
(3, '5.1', '2019-07-28 23:03:27', '2019-07-28 23:02:00', '2019-07-28 23:03:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `vtxs`
--

DROP TABLE IF EXISTS `vtxs`;
CREATE TABLE IF NOT EXISTS `vtxs` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `power_output` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `vtxs`
--

INSERT INTO `vtxs` (`id`, `name`, `power_output`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'TBS Unify Race', 25, NULL, '2019-07-29 06:32:34', '2019-07-29 06:32:34'),
(2, 'TBS Unify Pro', 600, NULL, '2019-07-29 06:33:06', '2019-07-29 06:33:21');

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
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `battery_sizes`
--
ALTER TABLE `battery_sizes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cam_sizes`
--
ALTER TABLE `cam_sizes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `escs`
--
ALTER TABLE `escs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `esc_softwares`
--
ALTER TABLE `esc_softwares`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fcs`
--
ALTER TABLE `fcs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `frames`
--
ALTER TABLE `frames`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `motor_kvs`
--
ALTER TABLE `motor_kvs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `motor_sizes`
--
ALTER TABLE `motor_sizes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `motor_varians`
--
ALTER TABLE `motor_varians`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `props`
--
ALTER TABLE `props`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vtxs`
--
ALTER TABLE `vtxs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ampere_motors`
--
ALTER TABLE `ampere_motors`
ADD CONSTRAINT `ampere_motors_motor_id_foreign` FOREIGN KEY (`motor_id`) REFERENCES `motors` (`id`),
ADD CONSTRAINT `ampere_motors_prop_pitch_id_foreign` FOREIGN KEY (`prop_pitch_id`) REFERENCES `prop_pitchs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `escs`
--
ALTER TABLE `escs`
ADD CONSTRAINT `escs_end_battery_size_id_foreign` FOREIGN KEY (`end_battery_size_id`) REFERENCES `battery_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `escs_esc_software_id_foreign` FOREIGN KEY (`esc_software_id`) REFERENCES `esc_softwares` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `escs_start_battery_size_id_foreign` FOREIGN KEY (`start_battery_size_id`) REFERENCES `battery_sizes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fcs`
--
ALTER TABLE `fcs`
ADD CONSTRAINT `fcs_esc_software_id_foreign` FOREIGN KEY (`esc_software_id`) REFERENCES `esc_softwares` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `fcs_fc_mount_option_id_foreign` FOREIGN KEY (`fc_mount_option_id`) REFERENCES `fc_mount_options` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `fcs_fc_software_id_foreign` FOREIGN KEY (`fc_software_id`) REFERENCES `fc_softwares` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fpv_cams`
--
ALTER TABLE `fpv_cams`
ADD CONSTRAINT `fpv_cams_cam_size_id_foreign` FOREIGN KEY (`cam_size_id`) REFERENCES `cam_sizes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `frames`
--
ALTER TABLE `frames`
ADD CONSTRAINT `frames_cam_size_id_foreign` FOREIGN KEY (`cam_size_id`) REFERENCES `cam_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `frames_fc_mount_option_id_foreign` FOREIGN KEY (`fc_mount_option_id`) REFERENCES `fc_mount_options` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `frames_frame_type_id_foreign` FOREIGN KEY (`frame_type_id`) REFERENCES `frame_types` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `frames_motor_size_id_foreign` FOREIGN KEY (`motor_size_id`) REFERENCES `motor_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `frames_prop_size_id_foreign` FOREIGN KEY (`prop_size_id`) REFERENCES `prop_sizes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `motors`
--
ALTER TABLE `motors`
ADD CONSTRAINT `motors_battery_size_id_foreign` FOREIGN KEY (`battery_size_id`) REFERENCES `battery_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `motors_motor_kv_id_foreign` FOREIGN KEY (`motor_kv_id`) REFERENCES `motor_kvs` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `motors_motor_size_id_foreign` FOREIGN KEY (`motor_size_id`) REFERENCES `motor_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `motors_prop_size_id_foreign` FOREIGN KEY (`prop_size_id`) REFERENCES `prop_sizes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `motor_varians`
--
ALTER TABLE `motor_varians`
ADD CONSTRAINT `motor_varians_end_battery_size_id_foreign` FOREIGN KEY (`end_battery_size_id`) REFERENCES `battery_sizes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `motor_varians_motor_id_foreign` FOREIGN KEY (`motor_id`) REFERENCES `motors` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `motor_varians_motor_kv_id_foreign` FOREIGN KEY (`motor_kv_id`) REFERENCES `motor_kvs` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `motor_varians_start_battery_size_id_foreign` FOREIGN KEY (`start_battery_size_id`) REFERENCES `battery_sizes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `props`
--
ALTER TABLE `props`
ADD CONSTRAINT `props_prop_pitch_id_foreign` FOREIGN KEY (`prop_pitch_id`) REFERENCES `prop_pitchs` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `props_prop_size_id_foreign` FOREIGN KEY (`prop_size_id`) REFERENCES `prop_sizes` (`id`) ON DELETE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;