-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 20, 2024 lúc 12:02 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lazada_app`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banks`
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
-- Đang đổ dữ liệu cho bảng `banks`
--

INSERT INTO `banks` (`id`, `ngan_hang`, `ho_ten`, `tai_khoan`, `created_at`, `updated_at`) VALUES
(1, 'Vietcombank', 'Minh Khang', '0123401234', '2024-06-19 03:48:47', '2024-06-19 03:48:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hangs`
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
-- Đang đổ dữ liệu cho bảng `don_hangs`
--

INSERT INTO `don_hangs` (`id`, `ma_dh`, `status`, `don_hang_maus_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'KPFB8Rv27H', 1, 1, 1, '2024-06-18 20:10:33', '2024-06-18 20:40:00'),
(2, 'JPU4zhZcqw', 0, 4, 1, '2024-06-18 20:40:54', '2024-06-18 20:41:08'),
(3, 'jlKd38HAeY', 0, NULL, 1, '2024-06-18 20:43:54', '2024-06-18 20:43:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang_maus`
--

CREATE TABLE `don_hang_maus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `hinh_san_pham` varchar(255) NOT NULL,
  `tong_gia` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang_maus`
--

INSERT INTO `don_hang_maus` (`id`, `ten_san_pham`, `hinh_san_pham`, `tong_gia`, `created_at`, `updated_at`) VALUES
(1, 'Sản Phẩm 1', 'https://down-vn.img.susercontent.com/file/vn-11134258-7r98o-lwh4xn4v5zh7d2', 10000.00, '2024-06-19 02:21:48', '2024-06-19 02:21:48'),
(2, 'Sản Phẩm 2', 'https://down-vn.img.susercontent.com/file/vn-11134258-7r98o-lwh4xn4v5zh7d2', 20000.00, '2024-06-19 02:21:48', '2024-06-19 02:21:48'),
(3, 'Sản Phẩm 3', 'https://down-vn.img.susercontent.com/file/vn-11134258-7r98o-lwh4xn4v5zh7d2', 30000.00, '2024-06-19 02:21:48', '2024-06-19 02:21:48'),
(4, 'Sản Phẩm 4', 'https://down-vn.img.susercontent.com/file/vn-11134258-7r98o-lwh4xn4v5zh7d2', 40000.00, '2024-06-19 02:21:48', '2024-06-19 02:21:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
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
-- Cấu trúc bảng cho bảng `nap_tiens`
--

CREATE TABLE `nap_tiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ma_nap` varchar(255) NOT NULL,
  `loai_nap` tinyint(4) NOT NULL,
  `phuong_thuc_thanh_toan` tinyint(4) NOT NULL,
  `so_tien_truoc` decimal(10,2) NOT NULL,
  `so_tien_nap` decimal(10,2) NOT NULL,
  `so_tien_sau` decimal(10,2) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nap_tiens`
--

INSERT INTO `nap_tiens` (`id`, `user_id`, `ma_nap`, `loai_nap`, `phuong_thuc_thanh_toan`, `so_tien_truoc`, `so_tien_nap`, `so_tien_sau`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'IkBD5aVJnL', 1, 0, 40000.00, 100000.00, 140000.00, 1, '2024-06-18 20:49:50', '2024-06-18 21:01:46'),
(2, 2, 'IkBD5aVJbL', 1, 0, 40000.00, 100000.00, 140000.00, 1, '2024-06-18 20:49:50', '2024-06-18 21:03:17'),
(3, 2, 'IkBD5aVJvL', 1, 0, 40000.00, 100000.00, 140000.00, 1, '2024-06-18 20:49:50', '2024-06-18 21:04:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `rut_tiens`
--

CREATE TABLE `rut_tiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `so_tien_truoc` decimal(10,2) NOT NULL,
  `so_tien_rut` decimal(10,2) NOT NULL,
  `so_tien_sau` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL,
  `tai_khoan_rut_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rut_tiens`
--

INSERT INTO `rut_tiens` (`id`, `user_id`, `so_tien_truoc`, `so_tien_rut`, `so_tien_sau`, `status`, `tai_khoan_rut_id`, `created_at`, `updated_at`) VALUES
(3, 1, 118000.00, 20000.00, 98000.00, 1, 1, '2024-06-18 21:45:14', '2024-06-19 00:18:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan_ruts`
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
-- Đang đổ dữ liệu cho bảng `tai_khoan_ruts`
--

INSERT INTO `tai_khoan_ruts` (`id`, `user_id`, `kieu_tai_khoan`, `ten_ngan_hang`, `tai_khoan`, `chu_tai_khoan`, `so_dien_thoai`, `created_at`, `updated_at`) VALUES
(1, 1, 'BANK', 'Vietcombank', '4567890', 'Minh Khang', '0866411902', '2024-06-19 04:46:18', '2024-06-19 00:41:33'),
(2, 2, 'BANK', 'Vietcombank', '123123123', 'Minh Khang', '0866411902', '2024-06-19 04:46:18', '2024-06-19 04:46:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
  `sodu` double(8,2) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `phone`, `pass_rut_tien`, `name`, `email`, `email_verified_at`, `password`, `level`, `status`, `aff_code`, `sodu`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '0866411902', '123123', 'Minh Khang', NULL, NULL, '$2y$12$3DbLpapRtbRb1NO0zv0FsOi5ZzQ0Ru.4i6iXi.36GSOjva/LYZI1m', 1024, 1, '0866411902', 98000.00, NULL, '2024-06-18 19:23:41', '2024-06-18 21:45:14'),
(2, '0123455678', '123123', 'Minh Khang 2', NULL, NULL, '$2y$12$3DbLpapRtbRb1NO0zv0FsOi5ZzQ0Ru.4i6iXi.36GSOjva/LYZI1m', 1, 1, '0866411902', 240000.00, NULL, '2024-06-18 19:23:41', '2024-06-18 21:04:03'),
(3, '0123123123', '123123', 'Minh Khang 3', NULL, NULL, '$2y$12$3DbLpapRtbRb1NO0zv0FsOi5ZzQ0Ru.4i6iXi.36GSOjva/LYZI1m', 1, 1, '0866411902', 40000.00, NULL, '2024-06-18 19:23:41', '2024-06-18 19:57:37'),
(4, '0975177836', '123123', NULL, NULL, NULL, '$2y$12$ubdyJPvYlLBOQO.UvJ6ek.tSTdcoDWwtzhYUbnykttDgPIvbVQ5.y', 1, 1, '0975177836', 30000.00, NULL, '2024-06-19 21:06:13', '2024-06-19 21:06:13');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don_hangs`
--
ALTER TABLE `don_hangs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don_hang_maus`
--
ALTER TABLE `don_hang_maus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nap_tiens`
--
ALTER TABLE `nap_tiens`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `rut_tiens`
--
ALTER TABLE `rut_tiens`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tai_khoan_ruts`
--
ALTER TABLE `tai_khoan_ruts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `don_hangs`
--
ALTER TABLE `don_hangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `don_hang_maus`
--
ALTER TABLE `don_hang_maus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `nap_tiens`
--
ALTER TABLE `nap_tiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `rut_tiens`
--
ALTER TABLE `rut_tiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tai_khoan_ruts`
--
ALTER TABLE `tai_khoan_ruts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
