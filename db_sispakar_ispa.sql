-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 10, 2026 at 06:23 PM
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
-- Database: `db_sispakar_ispa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nama`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'admin123', '2026-06-10 09:19:29', '2026-06-10 09:19:29');

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
-- Table structure for table `detail_konsultasi`
--

CREATE TABLE `detail_konsultasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konsultasi_id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `cf_user` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_konsultasi`
--

INSERT INTO `detail_konsultasi` (`id`, `konsultasi_id`, `gejala_id`, `cf_user`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0.2, '2026-06-10 00:33:32', '2026-06-10 00:33:32'),
(2, 1, 2, 0.6, '2026-06-10 00:33:33', '2026-06-10 00:33:33'),
(3, 1, 3, 0.2, '2026-06-10 00:33:38', '2026-06-10 00:33:38'),
(4, 1, 4, 0.4, '2026-06-10 00:33:41', '2026-06-10 00:33:41'),
(5, 1, 5, 0.8, '2026-06-10 00:33:42', '2026-06-10 00:33:42'),
(6, 1, 6, 1, '2026-06-10 00:33:44', '2026-06-10 00:33:44'),
(7, 1, 7, 0.2, '2026-06-10 00:33:46', '2026-06-10 00:33:46'),
(8, 1, 8, 0.6, '2026-06-10 00:33:48', '2026-06-10 00:33:48'),
(9, 1, 9, 0.8, '2026-06-10 00:33:50', '2026-06-10 00:33:50'),
(10, 1, 10, 0.2, '2026-06-10 00:33:52', '2026-06-10 00:33:52'),
(11, 1, 11, 0.6, '2026-06-10 00:33:54', '2026-06-10 00:33:54'),
(12, 1, 12, 0.8, '2026-06-10 00:33:56', '2026-06-10 00:33:56'),
(13, 1, 13, 1, '2026-06-10 00:33:57', '2026-06-10 00:33:57'),
(14, 1, 14, 0.2, '2026-06-10 00:34:01', '2026-06-10 00:34:01'),
(15, 1, 15, 0.8, '2026-06-10 00:34:04', '2026-06-10 00:34:04'),
(16, 1, 16, 0.6, '2026-06-10 00:34:08', '2026-06-10 00:34:08'),
(17, 1, 17, 0.2, '2026-06-10 00:34:11', '2026-06-10 00:34:11'),
(18, 1, 18, 0.6, '2026-06-10 00:34:14', '2026-06-10 00:34:14'),
(19, 1, 19, 0.6, '2026-06-10 00:34:17', '2026-06-10 00:34:17'),
(20, 1, 20, 0.8, '2026-06-10 00:34:20', '2026-06-10 00:34:20'),
(21, 1, 21, 0.6, '2026-06-10 00:34:23', '2026-06-10 00:34:23'),
(22, 1, 22, 0.4, '2026-06-10 00:34:27', '2026-06-10 00:34:27'),
(23, 1, 23, 0.6, '2026-06-10 00:34:29', '2026-06-10 00:34:29'),
(24, 1, 24, 0.2, '2026-06-10 00:34:31', '2026-06-10 00:34:31'),
(25, 1, 25, 0.6, '2026-06-10 00:34:33', '2026-06-10 00:34:33'),
(26, 1, 26, 0.8, '2026-06-10 00:34:35', '2026-06-10 00:34:35'),
(27, 1, 30, 0.2, '2026-06-10 00:34:46', '2026-06-10 00:34:46'),
(28, 2, 6, 0.8, '2026-06-10 01:16:38', '2026-06-10 01:16:38'),
(29, 2, 8, 0.6, '2026-06-10 01:16:49', '2026-06-10 01:16:49'),
(30, 2, 14, 0.2, '2026-06-10 01:17:02', '2026-06-10 01:17:02'),
(31, 2, 15, 0.6, '2026-06-10 01:17:04', '2026-06-10 01:17:04'),
(32, 2, 16, 0.6, '2026-06-10 01:17:06', '2026-06-10 01:17:06'),
(33, 2, 17, 0.8, '2026-06-10 01:17:10', '2026-06-10 01:17:10'),
(34, 2, 18, 0.2, '2026-06-10 01:17:12', '2026-06-10 01:17:12'),
(35, 2, 19, 0.6, '2026-06-10 01:17:14', '2026-06-10 01:17:14'),
(36, 2, 25, 0.2, '2026-06-10 01:17:26', '2026-06-10 01:17:26'),
(37, 2, 27, 0.4, '2026-06-10 01:17:31', '2026-06-10 01:17:31'),
(38, 2, 28, 0.2, '2026-06-10 01:17:32', '2026-06-10 01:17:32'),
(39, 2, 29, 0.6, '2026-06-10 01:17:34', '2026-06-10 01:17:34'),
(40, 3, 1, 0.4, '2026-06-10 01:22:16', '2026-06-10 01:22:16'),
(41, 3, 5, 0.8, '2026-06-10 01:22:38', '2026-06-10 01:22:38'),
(42, 3, 6, 1, '2026-06-10 01:22:42', '2026-06-10 01:22:42'),
(43, 3, 8, 0.2, '2026-06-10 01:22:52', '2026-06-10 01:22:52'),
(44, 3, 13, 0.8, '2026-06-10 01:23:17', '2026-06-10 01:23:17'),
(45, 3, 14, 0.6, '2026-06-10 01:23:21', '2026-06-10 01:23:21'),
(46, 4, 4, 1, '2026-06-10 01:36:58', '2026-06-10 01:36:58'),
(47, 4, 5, 0.8, '2026-06-10 01:37:02', '2026-06-10 01:37:02'),
(48, 4, 6, 0.6, '2026-06-10 01:37:09', '2026-06-10 01:37:09'),
(49, 4, 11, 0.6, '2026-06-10 01:37:29', '2026-06-10 01:37:29'),
(50, 4, 13, 0.8, '2026-06-10 01:37:45', '2026-06-10 01:37:45'),
(51, 4, 14, 0.8, '2026-06-10 01:37:50', '2026-06-10 01:37:50'),
(52, 5, 4, 1, '2026-06-10 01:39:50', '2026-06-10 01:39:50'),
(53, 5, 5, 1, '2026-06-10 01:39:55', '2026-06-10 01:39:55'),
(54, 5, 6, 1, '2026-06-10 01:39:59', '2026-06-10 01:39:59'),
(55, 5, 11, 1, '2026-06-10 01:40:18', '2026-06-10 01:40:18'),
(56, 5, 13, 1, '2026-06-10 01:40:27', '2026-06-10 01:40:27'),
(57, 5, 14, 1, '2026-06-10 01:40:30', '2026-06-10 01:40:30'),
(58, 6, 4, 1, '2026-06-10 01:47:55', '2026-06-10 01:47:55'),
(59, 6, 5, 1, '2026-06-10 01:47:59', '2026-06-10 01:47:59'),
(60, 6, 6, 1, '2026-06-10 01:48:03', '2026-06-10 01:48:03'),
(61, 6, 11, 0.6, '2026-06-10 01:48:20', '2026-06-10 01:48:20'),
(62, 6, 13, 1, '2026-06-10 01:48:34', '2026-06-10 01:48:34'),
(63, 6, 14, 0.4, '2026-06-10 01:48:41', '2026-06-10 01:48:41'),
(64, 7, 4, 1, '2026-06-10 01:51:00', '2026-06-10 01:51:00'),
(65, 7, 5, 1, '2026-06-10 01:51:05', '2026-06-10 01:51:05'),
(66, 7, 6, 1, '2026-06-10 01:51:09', '2026-06-10 01:51:09'),
(67, 7, 6, 1, '2026-06-10 01:51:09', '2026-06-10 01:51:09'),
(68, 7, 11, 1, '2026-06-10 01:51:33', '2026-06-10 01:51:33'),
(69, 7, 13, 1, '2026-06-10 01:51:38', '2026-06-10 01:51:38'),
(70, 7, 14, 1, '2026-06-10 01:51:41', '2026-06-10 01:51:41'),
(71, 8, 1, 0.2, '2026-06-10 02:10:51', '2026-06-10 02:10:51'),
(72, 8, 2, 0.4, '2026-06-10 02:10:52', '2026-06-10 02:10:52'),
(73, 8, 4, 0.6, '2026-06-10 02:10:57', '2026-06-10 02:10:57'),
(74, 8, 5, 0.4, '2026-06-10 02:10:59', '2026-06-10 02:10:59'),
(75, 8, 6, 0.6, '2026-06-10 02:11:02', '2026-06-10 02:11:02'),
(76, 8, 7, 0.2, '2026-06-10 02:11:03', '2026-06-10 02:11:03'),
(77, 8, 8, 0.6, '2026-06-10 02:11:05', '2026-06-10 02:11:05'),
(78, 8, 9, 0.4, '2026-06-10 02:11:07', '2026-06-10 02:11:07'),
(79, 8, 10, 0.8, '2026-06-10 02:11:11', '2026-06-10 02:11:11'),
(80, 8, 11, 0.6, '2026-06-10 02:11:14', '2026-06-10 02:11:14'),
(81, 8, 12, 0.4, '2026-06-10 02:11:16', '2026-06-10 02:11:16'),
(82, 8, 14, 0.2, '2026-06-10 02:11:22', '2026-06-10 02:11:22'),
(83, 8, 15, 0.2, '2026-06-10 02:11:25', '2026-06-10 02:11:25'),
(84, 8, 16, 0.6, '2026-06-10 02:11:28', '2026-06-10 02:11:28'),
(85, 8, 17, 0.2, '2026-06-10 02:11:29', '2026-06-10 02:11:29'),
(86, 8, 21, 0.2, '2026-06-10 02:11:39', '2026-06-10 02:11:39'),
(87, 8, 22, 0.4, '2026-06-10 02:11:41', '2026-06-10 02:11:41'),
(88, 8, 26, 0.2, '2026-06-10 02:11:55', '2026-06-10 02:11:55'),
(89, 8, 30, 0.2, '2026-06-10 02:12:05', '2026-06-10 02:12:05'),
(90, 9, 2, 0.2, '2026-06-10 04:11:15', '2026-06-10 04:11:15'),
(91, 9, 3, 0.2, '2026-06-10 04:11:18', '2026-06-10 04:11:18'),
(92, 9, 4, 0.4, '2026-06-10 04:11:22', '2026-06-10 04:11:22'),
(93, 9, 5, 1, '2026-06-10 04:11:27', '2026-06-10 04:11:27'),
(94, 9, 6, 1, '2026-06-10 04:11:29', '2026-06-10 04:11:29'),
(95, 9, 7, 0.6, '2026-06-10 04:11:34', '2026-06-10 04:11:34'),
(96, 9, 9, 0.4, '2026-06-10 04:11:40', '2026-06-10 04:11:40'),
(97, 9, 12, 0.4, '2026-06-10 04:11:49', '2026-06-10 04:11:49'),
(98, 9, 13, 0.4, '2026-06-10 04:11:52', '2026-06-10 04:11:52'),
(99, 9, 14, 0.4, '2026-06-10 04:11:59', '2026-06-10 04:11:59'),
(100, 9, 15, 0.4, '2026-06-10 04:12:03', '2026-06-10 04:12:03'),
(101, 9, 17, 0.2, '2026-06-10 04:12:13', '2026-06-10 04:12:13'),
(102, 9, 25, 0.2, '2026-06-10 04:12:49', '2026-06-10 04:12:49'),
(103, 10, 8, 0.2, '2026-06-10 04:33:01', '2026-06-10 04:33:01'),
(104, 10, 11, 0.2, '2026-06-10 04:33:06', '2026-06-10 04:33:06'),
(105, 10, 12, 0.2, '2026-06-10 04:33:08', '2026-06-10 04:33:08'),
(106, 10, 13, 0.4, '2026-06-10 04:33:10', '2026-06-10 04:33:10'),
(107, 10, 17, 0.2, '2026-06-10 04:33:18', '2026-06-10 04:33:18'),
(108, 10, 19, 0.2, '2026-06-10 04:33:21', '2026-06-10 04:33:21'),
(109, 10, 25, 0.2, '2026-06-10 04:33:38', '2026-06-10 04:33:38'),
(110, 10, 26, 0.2, '2026-06-10 04:33:40', '2026-06-10 04:33:40'),
(111, 10, 30, 0.2, '2026-06-10 04:33:49', '2026-06-10 04:33:49');

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
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_gejala` varchar(255) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `kode_gejala`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(1, 'G001', 'Demam', NULL, NULL),
(2, 'G002', 'Batuk-Batuk', NULL, NULL),
(3, 'G003', 'Hidung Tersumbat / Pilek', NULL, NULL),
(4, 'G004', 'Sakit Kepala/Pusing ', NULL, NULL),
(5, 'G005', 'Sakit Tenggorokan ', NULL, NULL),
(6, 'G006', 'Susah Menelan', NULL, NULL),
(7, 'G007', 'Badan Lemas & Lesu', NULL, NULL),
(8, 'G008', 'Sesak Nafas', NULL, NULL),
(9, 'G009', 'Bersin-Bersin', NULL, NULL),
(10, 'G010', 'Frekuensi Nafas Cepat', NULL, NULL),
(11, 'G011', 'Suara Nafas Kasar', NULL, NULL),
(12, 'G012', 'Nafsu Makan Berkurang', NULL, NULL),
(13, 'G013', 'Suara Serak', NULL, NULL),
(14, 'G014', 'Gelisah', NULL, NULL),
(15, 'G015', 'Susah Tidur', NULL, NULL),
(16, 'G016', 'Nyeri Di Dada', NULL, NULL),
(17, 'G017', 'Berkurangnya Kemampuan Indra Penciuman', NULL, NULL),
(18, 'G018', 'Wajah Terasa Nyeri Atau Tertekan', NULL, NULL),
(19, 'G019', 'Bau Mulut', NULL, NULL),
(20, 'G020', 'Sakit Gigi', NULL, NULL),
(21, 'G021', 'Nyeri Sendi Atau Nyeri Otot', NULL, NULL),
(22, 'G022', 'Berkeringat Dan Menggigil', NULL, NULL),
(23, 'G023', 'Batuk Dengan Dahak Kental Berwarna Hijau,Kuning, Atau Disertai Darah', NULL, NULL),
(24, 'G024', 'Diare', NULL, NULL),
(25, 'G025', 'Mual Atau Muntah', NULL, NULL),
(26, 'G026', 'Nyeri Bahu Dan Punggung', NULL, NULL),
(27, 'G027', 'Hidung Berair', NULL, NULL),
(28, 'G028', 'Nyeri Telinga', NULL, NULL),
(29, 'G029', 'Mata Berair', NULL, NULL),
(30, 'G030', 'Dehidrasi / Kekurangan Cairan', NULL, NULL);

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
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `hasil_diagnosa` varchar(255) DEFAULT NULL,
  `persentase` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `nama_pasien`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `tinggi_badan`, `berat_badan`, `alamat`, `hasil_diagnosa`, `persentase`, `created_at`, `updated_at`) VALUES
(2, 'yayayuk', 'Laki-Laki', 'hutan', '2026-06-10', 178, 89, 'cpa;lja;naldho', 'Epiglotitis', 72.12, '2026-06-10 01:16:07', '2026-06-10 01:17:36'),
(4, 'juyuu', 'Laki-Laki', 'akdhioaal', '2026-06-18', 123, 77, 'lknanlncalcmap;c', 'Faringitis', 78.59, '2026-06-10 01:36:24', '2026-06-10 01:38:16'),
(5, 'hyunji', 'Perempuan', 'nkcslcnssh', '2026-06-10', 123, 23, 'slvmvslvso', 'Faringitis', 84.4, '2026-06-10 01:39:36', '2026-06-10 01:40:56'),
(6, 'hulik', 'Laki-Laki', 'ndkahoa', '2026-06-10', 167, 76, 'clksacsh', 'Faringitis', 84.4, '2026-06-10 01:47:40', '2026-06-10 01:50:20'),
(7, 'naljoq', 'Laki-Laki', 'hakdajod', '2026-06-10', 123, 22, 'kslnaso', 'Faringitis', 84.4, '2026-06-10 01:50:47', '2026-06-10 01:52:11'),
(8, 'huhulp', 'Laki-Laki', 'knaljaodjqp', '2026-06-10', 78, 34, 'alladlnlacjla', 'Bronkiolitis', 75.23, '2026-06-10 02:10:46', '2026-06-10 02:12:06'),
(9, 'hujufufu', 'Laki-Laki', 'klajdow', '2026-06-10', 145, 76, 'jufujhbgbt', 'Faringitis', 83.79, '2026-06-10 04:11:07', '2026-06-10 04:13:04'),
(10, 'zuly', 'Perempuan', 'hutan', '2026-06-10', 80, 19, 'hhhhhhii', 'Epiglotitis', 29.24, '2026-06-10 04:32:36', '2026-06-10 09:21:42');

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
(4, '2026_06_08_060826_create_penyakits_table', 1),
(5, '2026_06_08_060833_create_gejalas_table', 1),
(6, '2026_06_08_060839_create_rules_table', 1),
(7, '2026_06_08_060845_create_konsultasis_table', 1),
(8, '2026_06_08_060851_create_detail_konsultasis_table', 1),
(9, '2026_06_10_075013_create_admins_table', 2),
(10, '2026_06_10_080628_add_is_gejala_inti_to_rules_table', 2),
(11, '2026_06_10_161710_create_admins_table', 3);

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
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_penyakit` varchar(255) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `solusi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode_penyakit`, `nama_penyakit`, `deskripsi`, `solusi`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'Bronkitis', NULL, NULL, NULL, '2026-06-10 03:53:56'),
(2, 'P002', 'Sinusitis', NULL, NULL, NULL, NULL),
(3, 'P003', 'Bronkiolitis', NULL, NULL, NULL, NULL),
(4, 'P004', 'Pneumonia', NULL, NULL, NULL, NULL),
(5, 'P005', 'Faringitis', NULL, NULL, NULL, NULL),
(6, 'P006', 'Epiglotitis', NULL, NULL, NULL, NULL),
(7, 'P007', 'Pleuritis', NULL, NULL, NULL, NULL),
(8, 'P008', 'Common Cold', NULL, NULL, NULL, NULL),
(9, 'P009', 'ILI (Influenza Like Illness) ', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `bobot` double NOT NULL,
  `is_gejala_inti` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `penyakit_id`, `gejala_id`, `bobot`, `is_gejala_inti`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 0.7, 1, NULL, NULL),
(2, 1, 8, 0.8, 1, NULL, NULL),
(3, 1, 23, 0.8, 1, NULL, NULL),
(4, 1, 1, 0.4, 0, NULL, NULL),
(5, 1, 16, 0.5, 0, NULL, NULL),
(6, 2, 17, 0.8, 1, NULL, NULL),
(7, 2, 18, 0.8, 1, NULL, NULL),
(8, 2, 3, 0.7, 1, NULL, NULL),
(9, 2, 4, 0.5, 0, NULL, NULL),
(10, 2, 19, 0.4, 0, NULL, NULL),
(11, 3, 8, 0.8, 1, NULL, NULL),
(12, 3, 10, 0.7, 1, NULL, NULL),
(13, 3, 11, 0.7, 1, NULL, NULL),
(14, 3, 2, 0.5, 0, NULL, NULL),
(15, 3, 14, 0.4, 0, NULL, NULL),
(16, 4, 8, 0.9, 1, NULL, NULL),
(17, 4, 10, 0.8, 1, NULL, NULL),
(18, 4, 23, 0.8, 1, NULL, NULL),
(19, 4, 1, 0.5, 0, NULL, NULL),
(20, 4, 16, 0.5, 0, NULL, NULL),
(21, 5, 5, 0.9, 1, NULL, NULL),
(22, 5, 6, 0.8, 1, NULL, NULL),
(23, 5, 13, 0.7, 1, NULL, NULL),
(24, 5, 15, 0.4, 0, NULL, NULL),
(25, 6, 6, 0.9, 1, NULL, NULL),
(26, 6, 8, 0.9, 1, NULL, NULL),
(27, 6, 13, 0.8, 1, NULL, NULL),
(28, 6, 5, 0.6, 0, NULL, NULL),
(29, 7, 16, 0.9, 1, NULL, NULL),
(30, 7, 26, 0.8, 1, NULL, NULL),
(31, 7, 22, 0.7, 1, NULL, NULL),
(32, 7, 21, 0.5, 0, NULL, NULL),
(33, 8, 27, 0.8, 1, NULL, NULL),
(34, 8, 9, 0.7, 1, NULL, NULL),
(35, 8, 3, 0.6, 1, NULL, NULL),
(36, 8, 29, 0.4, 0, NULL, NULL),
(37, 9, 21, 0.8, 1, NULL, NULL),
(38, 9, 22, 0.8, 1, NULL, NULL),
(39, 9, 1, 0.7, 1, NULL, NULL),
(40, 9, 24, 0.5, 0, NULL, NULL),
(41, 9, 25, 0.5, 0, NULL, NULL),
(42, 9, 30, 0.4, 0, NULL, NULL),
(43, 1, 2, 0.7, 1, '2026-06-10 14:47:06', '2026-06-10 14:47:06');

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
('uUrXKxsHuA5Qd3zbvG57MfatVvDPSgyX3Gdga1wC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZFdWU0IzeFVoOWE1aTFEUGZ3am1hR01lS3pXZlZmOEV5OEJud1dQVSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJhZG1pbl9pZCI7aToxO3M6MTA6ImFkbWluX25hbWEiO3M6MTM6IkFkbWluaXN0cmF0b3IiO30=', 1781108507);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `detail_konsultasi`
--
ALTER TABLE `detail_konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
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
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
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
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rules_penyakit_id_foreign` (`penyakit_id`),
  ADD KEY `rules_gejala_id_foreign` (`gejala_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_konsultasi`
--
ALTER TABLE `detail_konsultasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejala` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rules_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
