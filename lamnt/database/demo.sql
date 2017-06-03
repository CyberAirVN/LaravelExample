-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 03, 2017 lúc 04:09 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_05_18_120036_table_sanpham', 1),
(4, '2017_05_19_060923_create_table_sanpham', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ma_sp`, `ten_sp`, `mo_ta_sp`, `so_luong_sp`, `hinh_sp`, `created_at`, `updated_at`) VALUES
(10, '1', '1', '1', '1', 'mS3f_5-ae-sieu-nhan-2017.jpg', '2017-05-22 23:50:08', '2017-05-22 23:50:08'),
(11, '2', '2', '2', '2', 'Q2zO_101-1.jpg', '2017-05-23 01:36:10', '2017-05-23 01:36:10'),
(13, '4', '4', '4', '4', '6JtX_5-ae-sieu-nhan-2017.jpg', '2017-05-23 01:58:52', '2017-05-24 17:49:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphams`
--

CREATE TABLE `sanphams` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lam', 'lam@gmail.com', '$2y$10$5BkJZLTgqpzo.xExRHN8.O1FsrJmVShklaheox/nMix2hnY4SXgG.', NULL, NULL, NULL),
(2, 'lam', 'lam@gmail.com', '$2y$10$tRwG6oEncZjD8h3ZTKkvl.0U45CEZh8NBtE/vF5O5x.nsYZMhjk7C', NULL, NULL, NULL),
(3, 'lamnguyen', 'lamnguyen@gmail.com', '123456', NULL, '2017-05-18 09:38:27', '2017-05-18 09:38:27'),
(4, 'lam1', 'lam1@gmail.com', '$2y$10$cvU9QSCT2XmQJDBIVZSS3eSZ.rHtfycT4XTBGqdIiB7MC41JuYxSO', NULL, '2017-05-18 09:39:43', '2017-05-18 09:39:43'),
(5, 'lam2', 'lam2@gmail.com', '$2y$10$asoNiaP27M0NAhFARzn6p.lndp9ZmhRyHOh9.ewpdM3CeQlQEMspe', NULL, '2017-05-18 19:38:47', '2017-05-18 19:38:47'),
(6, 'Super User', 'lam2@gmail.com', '$2y$10$xhwMyrEmoRwEWO0Ch5aB0e5BGEC.hik05lepcS3D6oSP2zbujIqga', 'CdvY7AriTNpo0utGYOcDdDi6Bs5PnuEl3VXDLyak7QjPxmopuf3sJrZ7HC7D', '2017-05-18 22:09:02', '2017-05-18 22:09:02'),
(7, 'hieu', 'hieu@gmail.com', '$2y$10$oQ/wFymTf8GDMkIRPvSbXum5Qm2CFUqqC6CBeCkqSbByKNOaV4ntS', NULL, '2017-05-18 22:58:24', '2017-05-18 22:58:24'),
(8, 'lamnguyen1', 'lamnguyen260895@gmail.com', '$2y$10$SkR0a7SuKtzcnzgeSHnNy.by35DHNrwkQICnw7TOX5wO5Mj/PyBtq', 'sYJ1RQxGAbyiTsr1U6uRXw2tc8OyjDU0623SxbyI6sCi0SuL3sE35qAUjwzt', '2017-05-23 21:28:19', '2017-05-23 21:28:19'),
(9, 'lamnguyen2', 'lamnguyen260895@gmail.com', '$2y$10$TmGWot2HhJV6Gh2HP61.GO9d/tz0VxzYjD1JxUSR2CsqWzj/b2Vrm', NULL, '2017-05-23 21:41:31', '2017-05-23 21:41:31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
