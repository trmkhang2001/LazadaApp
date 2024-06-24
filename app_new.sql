-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 03:08 AM
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
-- Database: `app_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ngan_hang` varchar(255) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `tai_khoan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `ngan_hang`, `ho_ten`, `tai_khoan`, `created_at`, `updated_at`) VALUES
(1, '0123456789', 'O MOI TUAN', 'MB BANK', '2024-06-19 03:48:47', '2024-06-23 10:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `don_hangs`
--

CREATE TABLE `don_hangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_dh` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `don_hang_maus_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `don_hangs`
--

INSERT INTO `don_hangs` (`id`, `ma_dh`, `status`, `don_hang_maus_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'KPFB8Rv27H', 1, 1, 1, '2024-06-18 20:10:33', '2024-06-18 20:40:00'),
(2, 'JPU4zhZcqw', 1, 4, 1, '2024-06-18 20:40:54', '2024-06-20 21:14:12'),
(3, 'jlKd38HAeY', 1, 1, 1, '2024-06-18 20:43:54', '2024-06-20 21:26:48'),
(4, 'XWDLQctIBn', 1, 1, 4, '2024-06-20 03:07:07', '2024-06-21 21:20:57'),
(5, '5i4AVPKAlr', 1, 1, 4, '2024-06-20 03:12:32', '2024-06-21 21:25:53'),
(6, 'Gl9Ha0UYf0', 1, 1, 1, '2024-06-20 21:12:05', '2024-06-20 21:13:18'),
(7, 'C4EN38YfzT', 1, 2, 1, '2024-06-20 21:26:53', '2024-06-21 21:35:15'),
(8, 'Dz5lDDwDI2', 1, 1, 1, '2024-06-21 21:19:21', '2024-06-21 21:35:17'),
(9, 'plFpJ5ji5X', 1, 2, 4, '2024-06-21 21:24:18', '2024-06-21 21:37:31'),
(10, 'tSLZ3oA4xR', 1, 2, 1, '2024-06-21 21:35:53', '2024-06-21 21:37:34'),
(11, 'qcUEAe4xc3', 1, 2, 4, '2024-06-21 21:38:15', '2024-06-22 09:58:34'),
(12, '9ZOzbIa1XG', 1, 2, 1, '2024-06-22 09:50:28', '2024-06-22 09:51:14'),
(14, 'TnLzpeExPH', 1, 2, 1, '2024-06-22 10:00:10', '2024-06-22 10:23:21'),
(15, 'BP8dLP7Yzs', 1, 4, 4, '2024-06-22 10:01:51', '2024-06-23 09:24:50'),
(16, 'SxeYLEw0uW', 1, 3, 1, '2024-06-22 10:23:28', '2024-06-22 11:00:59'),
(17, 'wwb11qOT9V', 1, 4, 1, '2024-06-22 11:01:03', '2024-06-22 11:20:42'),
(18, 'TFlXLlzcdA', 1, 4, 1, '2024-06-22 11:20:47', '2024-06-22 11:24:57'),
(19, 'cTucgon132', 1, 4, 1, '2024-06-22 11:25:04', '2024-06-22 11:28:11'),
(20, '9sM4wlxCp0', -1, 4, 1, '2024-06-22 11:28:16', '2024-06-23 09:29:14'),
(21, 'XWSiutqIkk', -1, 3, 5, '2024-06-23 05:32:31', '2024-06-23 09:29:10'),
(22, 'PngU7DWFIg', 1, 4, 4, '2024-06-23 09:32:17', '2024-06-23 09:33:01'),
(23, 'Lk38mGn6qU', 1, 3, 4, '2024-06-23 09:33:48', '2024-06-23 09:34:40'),
(24, '4PI5JnoZZT', 1, 3, 4, '2024-06-23 10:21:03', '2024-06-23 10:22:06'),
(25, '4IhdzMk4T4', 1, 4, 4, '2024-06-23 10:22:59', '2024-06-23 10:32:06'),
(26, 'Hp9rMaRRd1', -1, 4, 4, '2024-06-23 10:32:23', '2024-06-23 10:32:57'),
(27, 'No5cbyp7Jq', 1, 4, 4, '2024-06-23 10:33:14', '2024-06-23 10:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang_maus`
--

CREATE TABLE `don_hang_maus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `hinh_san_pham` varchar(255) NOT NULL,
  `tong_gia` decimal(16,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `don_hang_maus`
--

INSERT INTO `don_hang_maus` (`id`, `ten_san_pham`, `hinh_san_pham`, `tong_gia`, `created_at`, `updated_at`) VALUES
(1, 'Sản Phẩm 1', 'https://down-vn.img.susercontent.com/file/vn-11134258-7r98o-lwh4xn4v5zh7d2', 10000.00, '2024-06-19 02:21:48', '2024-06-19 02:21:48'),
(2, 'Sản Phẩm 2', 'https://down-vn.img.susercontent.com/file/vn-11134258-7r98o-lwh4xn4v5zh7d2', 20000.00, '2024-06-19 02:21:48', '2024-06-19 02:21:48'),
(3, 'Sản Phẩm 3', 'https://down-vn.img.susercontent.com/file/vn-11134258-7r98o-lwh4xn4v5zh7d2', 30000.00, '2024-06-19 02:21:48', '2024-06-19 02:21:48'),
(4, 'Sản Phẩm 4', 'https://down-vn.img.susercontent.com/file/vn-11134258-7r98o-lwh4xn4v5zh7d2', 2000000.00, '2024-06-19 02:21:48', '2024-06-19 02:21:48');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_29_025652_add_level_status_to_users_table', 1),
(6, '2024_06_06_073924_create_don_hangs_table', 1),
(7, '2024_06_06_073928_create_don_hang_maus_table', 1),
(8, '2024_06_06_074016_create_nap_tiens_table', 1),
(9, '2024_06_06_075817_create_tai_khoan_ruts_table', 1),
(10, '2024_06_06_080124_create_rut_tiens_table', 1),
(11, '2024_06_10_152650_add_id_user_to_nap_tiens_table', 1),
(12, '2024_06_17_110118_create_banks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nap_tiens`
--

CREATE TABLE `nap_tiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ma_nap` varchar(255) NOT NULL,
  `loai_nap` tinyint(4) NOT NULL,
  `phuong_thuc_thanh_toan` tinyint(4) NOT NULL,
  `so_tien_truoc` decimal(16,2) NOT NULL,
  `so_tien_nap` decimal(16,2) NOT NULL,
  `so_tien_sau` decimal(16,2) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nap_tiens`
--

INSERT INTO `nap_tiens` (`id`, `user_id`, `ma_nap`, `loai_nap`, `phuong_thuc_thanh_toan`, `so_tien_truoc`, `so_tien_nap`, `so_tien_sau`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'IkBD5aVJnL', 1, 0, 40000.00, 100000.00, 140000.00, 1, '2024-06-18 20:49:50', '2024-06-18 21:01:46'),
(2, 2, 'IkBD5aVJbL', 1, 0, 40000.00, 100000.00, 140000.00, 1, '2024-06-18 20:49:50', '2024-06-18 21:03:17'),
(3, 2, 'IkBD5aVJvL', 1, 0, 40000.00, 100000.00, 140000.00, 1, '2024-06-18 20:49:50', '2024-06-18 21:04:03'),
(4, 1, 'TtoxsHUi0g', 1, 0, 98000.00, 120000.00, 218000.00, 0, '2024-06-20 20:10:39', '2024-06-20 20:10:39'),
(8, 1, 'qo4yt3TSWg', 1, 0, 322000.00, 100000.00, 422000.00, 0, '2024-06-20 20:20:11', '2024-06-20 20:20:11'),
(9, 1, 'OgDI6mSSUz', 1, 0, 322000.00, 100000.00, 422000.00, 0, '2024-06-20 20:20:44', '2024-06-20 20:20:44'),
(10, 1, 'wGPpR2ojKB', 1, 0, 322000.00, 111111.00, 433111.00, 0, '2024-06-20 20:22:54', '2024-06-20 20:22:54'),
(11, 1, 'bp0xLgJSRA', 1, 0, 322000.00, 111111.00, 433111.00, 0, '2024-06-20 20:23:37', '2024-06-20 20:23:37'),
(12, 1, 'BrokZNIweX', 1, 0, 322000.00, 11111.00, 333111.00, 0, '2024-06-20 20:23:52', '2024-06-20 20:23:52'),
(13, 1, 'HfGzUqyWyn', 1, 0, 322000.00, 111.00, 322111.00, 0, '2024-06-20 20:24:12', '2024-06-20 20:24:12'),
(14, 1, 'NjaGMzsWmI', 1, 0, 322000.00, 1111.00, 323111.00, 0, '2024-06-20 20:24:51', '2024-06-20 20:24:51'),
(15, 1, 'O0YpH8ZSk4', 1, 0, 322000.00, 11111.00, 333111.00, 0, '2024-06-20 20:26:12', '2024-06-20 20:26:12'),
(16, 1, 'OE2qliCg5x', 1, 0, 322000.00, 100000.00, 422000.00, 0, '2024-06-20 20:26:50', '2024-06-20 20:26:50'),
(17, 1, 'LlYzGx7Xc2', 1, 0, 322000.00, 1111.00, 323111.00, 0, '2024-06-20 20:27:08', '2024-06-20 20:27:08'),
(18, 1, 'vqc7yVXfte', 1, 0, 322000.00, 100000.00, 422000.00, 0, '2024-06-20 20:27:30', '2024-06-20 20:27:30'),
(19, 1, 'xVUN0yCUx5', 1, 0, 322000.00, 111.00, 322111.00, 0, '2024-06-20 20:29:24', '2024-06-20 20:29:24'),
(20, 1, 'yTk9xCn4Hi', 1, 0, 322000.00, 1111.00, 323111.00, 0, '2024-06-20 20:30:17', '2024-06-20 20:30:17'),
(21, 1, 'UgKghmKbxr', 1, 0, 322000.00, 11111.00, 333111.00, 0, '2024-06-20 20:31:25', '2024-06-20 20:31:25'),
(22, 1, 'OAnO0msDAs', 1, 0, 322000.00, 1111.00, 323111.00, 0, '2024-06-20 20:32:19', '2024-06-20 20:32:19'),
(23, 1, 'NGZ9TESI35', 1, 0, 322000.00, 111111.00, 433111.00, 0, '2024-06-20 20:34:11', '2024-06-20 20:34:11'),
(24, 1, 'tcpRmlIcXH', 1, 0, 322000.00, 111111.00, 433111.00, 0, '2024-06-20 20:35:24', '2024-06-20 20:35:24'),
(25, 1, 'SWqjjvRdvV', 1, 0, 322000.00, 1111.00, 323111.00, 0, '2024-06-20 20:35:47', '2024-06-20 20:35:47'),
(26, 1, 'dVwz0OX1AE', 1, 0, 322000.00, 11111.00, 333111.00, 0, '2024-06-20 20:36:41', '2024-06-20 20:36:41'),
(27, 1, 'nDcCzX6M7L', 1, 0, 322000.00, 1111.00, 323111.00, 0, '2024-06-20 20:37:03', '2024-06-20 20:37:03'),
(28, 1, 'B2DSG8Cc06', 1, 0, 322000.00, 1111.00, 323111.00, 0, '2024-06-20 20:37:21', '2024-06-20 20:37:21'),
(29, 1, 'MUULhgL5io', 1, 0, 322000.00, 100000.00, 422000.00, 0, '2024-06-20 20:37:58', '2024-06-20 20:37:58'),
(30, 1, 'BHEhpTzIfu', 1, 0, 322000.00, 20000.00, 342000.00, 0, '2024-06-20 20:39:56', '2024-06-20 20:39:56'),
(31, 1, 'IO6QyylIFK', 1, 0, 278000.00, 20000.00, 298000.00, 0, '2024-06-22 10:07:30', '2024-06-22 10:07:30'),
(32, 1, 'KFvIsjdkz2', 1, 0, 278000.00, 1000000.00, 1278000.00, 0, '2024-06-22 10:07:35', '2024-06-22 10:07:35'),
(33, 1, 'KLAgeHLysc', 1, 0, 278000.00, 1000000.00, 1278000.00, 0, '2024-06-22 10:07:48', '2024-06-22 10:07:48'),
(34, 1, 'Zznj6T1Llp', 1, 0, 278000.00, 10000.00, 288000.00, 0, '2024-06-22 10:10:16', '2024-06-22 10:10:16'),
(35, 1, 'O0JeVsMACt', 1, 0, 278000.00, 20000.00, 298000.00, 0, '2024-06-22 10:10:43', '2024-06-22 10:10:43'),
(36, 1, 'kQbPmGyXA2', 1, 0, 278000.00, 10000.00, 288000.00, 0, '2024-06-22 10:11:05', '2024-06-22 10:11:05'),
(37, 1, 'XYVNCNo7Yu', 1, 0, 278000.00, 100000.00, 378000.00, 0, '2024-06-22 10:11:22', '2024-06-22 10:11:22'),
(38, 1, 'OjYjxyeYF8', 1, 0, 278000.00, 10000.00, 288000.00, 0, '2024-06-22 10:12:01', '2024-06-22 10:12:01'),
(39, 4, 'wLs9tDKHty', 1, 0, 1018000.00, 100000.00, 1118000.00, 0, '2024-06-22 10:17:52', '2024-06-22 10:17:52'),
(40, 1, '71Xd37RkL3', 1, 0, 278000.00, 100000.00, 378000.00, 0, '2024-06-22 10:18:15', '2024-06-22 10:18:15'),
(41, 1, 'mIHP09r18A', 1, 0, 278000.00, 11111.00, 289111.00, 0, '2024-06-22 10:18:36', '2024-06-22 10:18:36'),
(42, 1, 'zi3shi3Uni', 1, 0, 278000.00, 11111.00, 289111.00, 0, '2024-06-22 10:18:48', '2024-06-22 10:18:48'),
(43, 1, 'KEcTnxB1u3', 1, 0, 278000.00, 10000.00, 288000.00, 0, '2024-06-22 10:19:09', '2024-06-22 10:19:09'),
(44, 1, '00US7ICjUH', 1, 0, 278000.00, 11111.00, 289111.00, 0, '2024-06-22 10:19:46', '2024-06-22 10:19:46'),
(45, 1, 'CQPLbhwPWK', 1, 0, 278000.00, 1111.00, 279111.00, 0, '2024-06-22 10:19:55', '2024-06-22 10:19:55'),
(46, 1, 'o9870EFBbr', 1, 0, 278000.00, 11111.00, 289111.00, 0, '2024-06-22 10:20:08', '2024-06-22 10:20:08'),
(47, 1, 'h6BdQoRF5p', 1, 0, 278000.00, 111111.00, 389111.00, 0, '2024-06-22 10:20:58', '2024-06-22 10:20:58'),
(48, 1, 'WhHWjwJzC8', 1, 0, 278000.00, 11.00, 278011.00, 0, '2024-06-22 10:21:39', '2024-06-22 10:21:39'),
(49, 1, 'JCGieVbmPO', 1, 0, 278000.00, 11111.00, 289111.00, 0, '2024-06-22 10:21:54', '2024-06-22 10:21:54'),
(50, 4, 'Is5ZNz4JHf', 1, 0, 1018000.00, 100000.00, 1118000.00, 0, '2024-06-22 10:22:53', '2024-06-22 10:22:53'),
(51, 1, 'hd0feHzS30', 1, 0, 302000.00, 11111.00, 313111.00, 0, '2024-06-22 10:28:42', '2024-06-22 10:28:42'),
(52, 4, 'w3dP3SZrpT', 1, 0, 1018000.00, 100000.00, 1118000.00, 0, '2024-06-22 10:29:03', '2024-06-22 10:29:03'),
(53, 4, 'qU2zGYa1Uo', 1, 0, 1018000.00, 10000.00, 1028000.00, 0, '2024-06-22 10:31:14', '2024-06-22 10:31:14'),
(54, 4, 'dcg2GH1k8o', 1, 0, 1018000.00, 100000.00, 1118000.00, 0, '2024-06-22 10:31:27', '2024-06-22 10:31:27'),
(55, 4, 'hZq3NOFmHl', 1, 0, 1018000.00, 100000.00, 1118000.00, 0, '2024-06-22 10:31:50', '2024-06-22 10:31:50'),
(56, 4, 'pL5laWXk6T', 1, 0, 1018000.00, 10000000.00, 11018000.00, 0, '2024-06-22 10:33:21', '2024-06-22 10:33:21'),
(57, 4, 'kSDRvOi107', 1, 0, 1018000.00, 10000000.00, 11018000.00, 1, '2024-06-22 10:33:22', '2024-06-22 10:42:44'),
(58, 4, 'lUrquezpJA', 1, 0, 11018000.00, 1000000.00, 12018000.00, 0, '2024-06-22 21:27:55', '2024-06-22 21:27:55'),
(59, 4, 'CLjZ5I71EJ', 1, 0, 11018000.00, 10000.00, 11028000.00, 1, '2024-06-22 21:32:25', '2024-06-23 10:17:07'),
(60, 4, 'DeoubfrFqj', 1, 0, 5018000.00, 10000.00, 5028000.00, 1, '2024-06-22 21:41:00', '2024-06-23 10:17:02'),
(61, 4, '6tWOD722Mv', 1, 0, 5018000.00, 10000.00, 5028000.00, 1, '2024-06-22 21:41:01', '2024-06-23 10:16:58'),
(62, 1, 'PNf0fgGFRv', 1, 0, 10001508000.00, 100000.00, 10001608000.00, 1, '2024-06-22 21:43:01', '2024-06-23 09:25:20'),
(63, 4, 'O02Xix7Pem', 1, 0, 5018000.00, 100000.00, 5118000.00, 1, '2024-06-23 05:07:14', '2024-06-23 10:16:55'),
(64, 4, 'xo93epV4Qm', 1, 0, 5018000.00, 100000.00, 5118000.00, 1, '2024-06-23 05:08:49', '2024-06-23 09:25:16'),
(65, 5, 'bPrvVP8Kgc', 1, 0, 30000.00, 10000.00, 40000.00, 1, '2024-06-23 05:29:45', '2024-06-23 09:25:12'),
(66, 7, '08WYNPiVIA', 1, 0, 30000.00, 10000000.00, 10030000.00, 1, '2024-06-23 09:41:27', '2024-06-23 09:42:12'),
(67, 4, 'gDMesljI3n', 1, 0, 8054000.00, 1000000.00, 9054000.00, 0, '2024-06-23 10:20:27', '2024-06-23 10:20:27'),
(68, 7, 'VUzaAgmTLx', 1, 0, 10000.00, 100000.00, 110000.00, 0, '2024-06-23 10:50:44', '2024-06-23 10:50:44');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rut_tiens`
--

CREATE TABLE `rut_tiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `so_tien_truoc` decimal(16,2) NOT NULL,
  `so_tien_rut` decimal(16,2) NOT NULL,
  `so_tien_sau` decimal(16,2) NOT NULL,
  `status` int(11) NOT NULL,
  `tai_khoan_rut_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rut_tiens`
--

INSERT INTO `rut_tiens` (`id`, `user_id`, `so_tien_truoc`, `so_tien_rut`, `so_tien_sau`, `status`, `tai_khoan_rut_id`, `created_at`, `updated_at`) VALUES
(7, 5, 30000.00, 10000.00, 20000.00, -1, 8, '2024-06-23 05:37:39', '2024-06-23 09:36:28'),
(8, 7, 10030000.00, 10000000.00, 30000.00, 1, 9, '2024-06-23 09:45:21', '2024-06-23 09:46:12'),
(9, 4, 8060000.00, 2000000.00, 6060000.00, 0, 5, '2024-06-23 10:24:24', '2024-06-23 10:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan_ruts`
--

CREATE TABLE `tai_khoan_ruts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kieu_tai_khoan` varchar(255) NOT NULL,
  `ten_ngan_hang` varchar(255) NOT NULL,
  `tai_khoan` varchar(255) NOT NULL,
  `chu_tai_khoan` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tai_khoan_ruts`
--

INSERT INTO `tai_khoan_ruts` (`id`, `user_id`, `kieu_tai_khoan`, `ten_ngan_hang`, `tai_khoan`, `chu_tai_khoan`, `so_dien_thoai`, `created_at`, `updated_at`) VALUES
(2, 2, 'BANK', 'Vietcombank', '123123123', 'Minh Khang', '0866411902', '2024-06-19 04:46:18', '2024-06-19 04:46:18'),
(5, 4, 'BANK', 'BIDV', '097749287483', 'Nguyên mai thắng', '09758882', '2024-06-21 21:27:10', '2024-06-21 21:27:10'),
(6, 4, 'BANK', 'BIDV', '097749287483', 'Nguyên mai thắng', '09758882', '2024-06-21 21:27:11', '2024-06-21 21:27:11'),
(7, 1, 'BANK', 'BIDV', '12345678', 'Minh Khang', '0866411902', '2024-06-22 09:48:56', '2024-06-22 09:49:33'),
(8, 5, 'BANK', 'TPBANK', '0876817489292', 'Do hùng vương', '098765551773', '2024-06-23 05:37:09', '2024-06-23 05:37:09'),
(9, 7, 'BANK', 'BANKCOMMB', '0974728848393', 'Trinh thị hà', '097772774', '2024-06-23 09:44:38', '2024-06-23 09:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass_rut_tien` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `aff_code` varchar(255) NOT NULL,
  `sodu` decimal(18,2) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone`, `pass_rut_tien`, `name`, `email`, `email_verified_at`, `password`, `level`, `status`, `aff_code`, `sodu`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '0866411902', '123456', 'Minh Khang', NULL, NULL, '$2y$12$0podpYip.7oHfyVS5xwIsuOQzCaHTkQxQTZNQ/fRqL7VMSOin0CwK', 1024, 1, '0866411902', 10001608000.00, NULL, '2024-06-18 19:23:41', '2024-06-23 09:25:20'),
(2, '0123455678', '123123', 'Minh Khang 2', NULL, NULL, '$2y$12$3DbLpapRtbRb1NO0zv0FsOi5ZzQ0Ru.4i6iXi.36GSOjva/LYZI1m', 1000, 1, '0866411902', 10240000.00, NULL, '2024-06-18 19:23:41', '2024-06-23 10:40:39'),
(3, '0123123123', '123123', 'Minh Khang 3', NULL, NULL, '$2y$12$3DbLpapRtbRb1NO0zv0FsOi5ZzQ0Ru.4i6iXi.36GSOjva/LYZI1m', 1, 1, '0866411902', 40000.00, NULL, '2024-06-18 19:23:41', '2024-06-18 19:57:37'),
(4, '0975177836', '123123', NULL, NULL, NULL, '$2y$12$ubdyJPvYlLBOQO.UvJ6ek.tSTdcoDWwtzhYUbnykttDgPIvbVQ5.y', 1024, 1, '0975177836', 6860000.00, NULL, '2024-06-19 21:06:13', '2024-06-23 10:34:26'),
(5, '0915909033', '123123', NULL, NULL, NULL, '$2y$12$Bi9qMxt8zm9rrNigLzTtbuRUaHcTM9YPUeBgCgRJIRUeODeK6WzPa', 1, 1, '0915909033', 30000.00, NULL, '2024-06-23 05:28:58', '2024-06-23 09:25:12'),
(6, '0123456', '123123', NULL, NULL, NULL, '$2y$12$UL.dUK4E/yYOA06bacZWNOsl9t.5XNys7KxenowhwywQnQlIO2yuG', 1, 1, '0123456', 30000.00, NULL, '2024-06-23 09:37:29', '2024-06-23 09:37:29'),
(7, '0963159593', '123123', NULL, NULL, NULL, '$2y$12$GNsT2oOttj30WqXtfBMhYOThkaFaL0a4NyRU/QsRzAJM6U/B8yIk.', 1, 1, '0963159593', 10000.00, NULL, '2024-06-23 09:38:06', '2024-06-23 10:39:26'),
(8, '0935713289', '123456', NULL, NULL, NULL, '$2y$12$jWOI/iAeyQeCDlvTLLsKuuGPrAvLd5AJh6K9iJj4aXHOFQICA4gnu', 1, 1, '0935713289', 30000.00, NULL, '2024-06-23 10:02:32', '2024-06-23 10:02:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `don_hangs`
--
ALTER TABLE `don_hangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `don_hang_maus`
--
ALTER TABLE `don_hang_maus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nap_tiens`
--
ALTER TABLE `nap_tiens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rut_tiens`
--
ALTER TABLE `rut_tiens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tai_khoan_ruts`
--
ALTER TABLE `tai_khoan_ruts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `don_hangs`
--
ALTER TABLE `don_hangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `don_hang_maus`
--
ALTER TABLE `don_hang_maus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nap_tiens`
--
ALTER TABLE `nap_tiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rut_tiens`
--
ALTER TABLE `rut_tiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tai_khoan_ruts`
--
ALTER TABLE `tai_khoan_ruts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
