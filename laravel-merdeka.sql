-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 09:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-merdeka`
--

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_15_131951_create_products_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terjual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama_product`, `harga_product`, `stok_product`, `terjual`, `gambar`, `kategory`, `deskripsi_product`, `created_at`, `updated_at`) VALUES
(1, 'sepatu 1', '199999', '20', '2', 'public/images/yewnR6gu6jo8uVf3nSbk7Cizw6e88e7omptWFiBz.jpg', 'pria', 'ini adalah deskripsi sepatu 1', '2022-09-15 22:56:13', '2022-09-15 22:56:13'),
(2, 'CHUCK TAYLOR ALL STAR DESERT', '1199998', '50', '10', 'public/images/PKIj4HHeVBeRIOFpXIv8Aik05r597vPon8ZHciqv.jpg', 'wanita', 'BUNGA GURUN. Mengambil inspirasi dari lanskap gurun, Chucks high-top ini memadukan warna netral lembut dengan motif bunga bermotif gelombang panas', '2022-09-16 06:32:05', '2022-09-16 06:32:05'),
(3, 'Run Star Hike Desert Rave Platform', '1499000', '50', '20', 'public/images/tFnBKdvCNkTlw5iM3IOjl9Wry77DbUCmoJUZIMv4.jpg', 'wanita', 'Run Star Hike yang menjadi favorit penggemar mendapatkan sentuhan yang terinspirasi dari alam, dengan warna-warna bersahaja dan bunga gurun yang bermekaran', '2022-09-16 07:07:33', '2022-09-16 07:07:33'),
(4, 'CHUCK TAYLOR ALL STAR WAVE ULTRA EASY ON', '559000', '90', '12', 'public/images/ZsMaaMZWLgoCSw2hEfHQhRTHBPEu6FrVeryoe1ej.jpg', 'wanita', 'Converse Chuck Taylor All Star Wave Ultra membuat ulang kanvas stretch dinamis menjadi gaya yang benar-benar baru dan mengutamakan kenyamanan.', '2022-09-16 07:08:49', '2022-09-16 07:08:49'),
(5, 'Converse Chuck Taylor All Star Wave Ultra membuat ulang kanvas stretch dinamis menjadi gaya yang benar-benar baru dan mengutamakan kenyamanan.', '1199000', '100', '25', 'public/images/zTtTHV4sYU3wI0ygzG8DcJAje6KhsDfiqLSrhYZ1.jpg', 'wanita', 'Dirancang untuk kebebasan bergerak tertinggi, platform ringan ini siap membawa penampilanmu ke level berikutnya.', '2022-09-16 07:09:59', '2022-09-16 07:09:59'),
(6, 'Chuck 70 Plus Canvas', '499999', '80', '20', 'public/images/IkJlMq7nFsqJxIzXR0iIZ2qIUAMFDuoPA0dA0BuC.jpg', 'pria', 'GAYA YANG TAK TERHENTIKAN. Pembaruan tak terduga pada klasik sepanjang masa, Chuck 70 Plus memadukan fitur ikonik dengan gaya masa depan.', '2022-09-16 07:11:41', '2022-09-16 07:11:41'),
(7, 'Chuck 70 See Beyond', '1299000', '50', '30', 'public/images/UqGeykIw5KnjwFo03dwgOHPlsCC07reij285DfD7.jpg', 'pria', 'Melihat semangat dan sikap budaya rave, Chuck 70 ini mengambil inspirasi tahun 90-an dan kemudian mengarah ke masa depan.', '2022-09-16 07:13:36', '2022-09-16 07:13:36'),
(8, 'Chuck 70 Mule Recycled Canvas', '1199000', '90', '23', 'public/images/EE2C99rcJWBybii8zKJXTRDFhDnOSA9eKt0U2kOa.jpg', 'pria', 'Sepatu premium, slip-on dengan 100% kanvas hewan peliharaan daur ulang atas', '2022-09-16 07:14:46', '2022-09-16 07:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
