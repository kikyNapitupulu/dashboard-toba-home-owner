-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2020 pada 14.14
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tobahome_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_visitor` int(255) NOT NULL,
  `id_homestay` int(255) NOT NULL,
  `order_date` datetime NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id`, `id_visitor`, `id_homestay`, `order_date`, `total`, `created_at`, `updated_at`) VALUES
('1', 4, 1, '2020-05-01 00:00:00', '300.000', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `homestay_id` int(20) NOT NULL,
  `facility_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `facilities`
--

INSERT INTO `facilities` (`id`, `homestay_id`, `facility_name`, `img`, `desc`, `updated_at`, `created_at`) VALUES
(1, 2, 'Internet', 'wifi.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-05-31 07:57:42', '2020-05-22 12:23:57'),
(3, 2, 'Parking', 'park.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-05-31 08:02:03', '2020-05-22 12:24:07'),
(5, 1, 'Bathroom', 'service-7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-05-31 08:00:16', '2020-05-22 15:38:45'),
(6, 1, 'Restaurant', 'photo2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-05-31 15:39:37', '2020-05-31 07:46:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `homestay`
--

CREATE TABLE `homestay` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_visitor` int(20) NOT NULL,
  `header_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(191) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_room` int(20) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `homestay`
--

INSERT INTO `homestay` (`id`, `id_visitor`, `header_image`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `name`, `price`, `status`, `contact`, `email`, `address`, `rating`, `review`, `total_room`, `description`, `created_at`, `updated_at`) VALUES
(1, 17, 'room-5.jpg', 'room-b3.jpg', 'room-b2.jpg', 'room-6.jpg', 'room-4.jpg', 'photo2.png', 'room-b3.jpg', 'OYO 1095 RAP Hotel', '200.000', 'Available', '0852-6108-7299', 'oyorap@oyo.com', 'Jl. Siborong Borong - Parapat No.57, Pardede Onan, Balige, Kabupaten Toba Samosir,22312, 22312 Balige, Indonesia', 4, 'Contoh Review', 12, 'Terletak di Balige, OYO 1095 RAP Hotel menawarkan teras. Semua kamar memiliki TV satelit layar datar dan kamar mandi pribadi. Menampilkan pemandangan danau, kamar-kamar yang ber-AC dilengkapi dengan meja kerja dan WiFi gratis. Semua kamar menyediakan lemari pakaian. Resepsionis di OYO 1095 RAP Hotel dapat memberikan saran mengenai area ini.', NULL, '2020-05-23 14:49:54'),
(2, 2, 'room-4.jpg', 'room-b3.jpg', 'room-5.jpg', 'room-6.jpg', 'room-5.jpg', 'room-4.jpg', 'room-b2.jpg', 'Pondok Berata Dapdap', '250.000', 'Available', '0852-6108-7299', 'berata@berata.com', 'JL Sibolahotang SAS Balige Kec. Balige Kab. Toba Samosir Pantai Lumban Bulbul Balige, 22312 Balige, Indonesia', 5, '', 8, 'Pondok Berata Dapdap terletak di Balige.\r\nSemua unit memiliki dapur kecil lengkap agar Anda dapat menyiapkan makanan sendiri. Beberapa unit menyediakan teras dan/atau balkon dengan pemandangan gunung.\r\nSarapan Asia tersedia setiap pagi di B&B ini.\r\n\r\nPondok Berata Dapdap dilengkapi dengan fasilitas barbekyu.\r\nTerdapat juga area pantai pribadi dan lounge bersama di B&B ini.\r\nB&B ini berjarak 65 km dari Parapat.', '2020-05-22 15:01:55', '2020-05-23 14:52:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_19_204332_create_facilities_table', 1),
(4, '2020_05_20_014621_create_room_table', 1),
(5, '2020_05_20_183419_create_profil_table', 1),
(6, '2020_05_20_211215_create_homestay_table', 1),
(7, '2020_05_21_182532_create_rating_table', 1),
(8, '2020_05_22_180922_create_review_table', 1),
(9, '2020_05_23_054613_create_booking_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `role`, `front_name`, `last_name`, `gender`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Owner', 'Owner', 'A', 'F', 'owner@gmail.com', 'Porsea', '852', NULL, NULL),
(2, 'Visitor', 'Kiky', 'Napitupulu', 'F', 'kiky@gmail.com', 'Porsea', '085261087299', NULL, '2020-05-23 06:39:57'),
(4, 'Visitor', 'Mika', 'Manurung', 'F', 'mika@gmail.com', 'Porsea', '0821147483647', NULL, '2020-05-27 07:50:48'),
(17, 'Visitor', 'Yeni', 'Panjaitan', 'F', 'yeni@gmail.com', 'Balige', '085261087299', '2020-05-23 00:35:28', '2020-05-23 06:40:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homestay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moderated_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id`, `name`, `review`, `rating`, `homestay`, `room`, `status`, `moderated_at`, `created_at`, `updated_at`) VALUES
(2, 'Kiky', 'Pemandangan alam yg sangat bagus, cocok untuk liburan, bisa bermain air di pinggir danau', '5', 'OYO 1095 RAP Hotel', 'Queen Room', '2', '2020-05-24 20:01:28', NULL, '2020-05-24 13:01:28'),
(3, 'Yeni Panjaitan', '----------', '1', 'Pondok Berata Dapdap', 'Kamar Standard Double', '2', '0000-00-00 00:00:00', NULL, NULL),
(4, 'Kiky', 'Pemandangan alam yg sangat bagus, cocok untuk liburan, bisa bermain air di pinggir danau', '5', 'Pondok Berata Dapdap', 'Queen Room', '1', '0000-00-00 00:00:00', NULL, '2020-05-23 14:52:38'),
(5, 'Krista ', '----------', '2', 'Pondok Berata Dapdap', 'Kamar Standard Double', '0', '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `homestay_id` int(20) NOT NULL,
  `room_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `room`
--

INSERT INTO `room` (`id`, `homestay_id`, `room_type`, `capacity`, `room_size`, `bed_type`, `price`, `img`, `desc`, `created_at`, `updated_at`) VALUES
(1, 2, 'Twin Room', '3', '16', 'King Size Bed', '200.000', 'room-b1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-05-22 12:22:17', '2020-05-31 08:15:48'),
(2, 2, 'Kamar Standard Double', '2', '16', 'Double Bed', '200.000', 'gallery-4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-05-22 15:20:44', '2020-05-31 08:16:08'),
(3, 1, 'Kamar Standard', '2', '16', 'Standard Bed', '100.000', 'room-b2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-05-22 15:23:48', '2020-05-31 08:16:19'),
(5, 0, 'Family Room', '6', '20', 'Double Bed', '500.000', 'about-p3.jpg', '', '2020-05-31 08:17:05', '2020-05-31 08:17:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Owner', 'Owner', 'Owner A', 'owner@gmail.com', NULL, '$2y$10$OH9LnibhWJYNCK99rZrD3euy7/vMIfVUJcrtpiJCY7NspNa5SM.tS', 'lIntjwvAcwWzMYfDagm1Qs9AHtj9EnliflqH22hhrZFQMLKdEn1f6oi65Xul', '2020-05-22 12:21:29', '2020-05-22 12:21:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `homestay`
--
ALTER TABLE `homestay`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `homestay`
--
ALTER TABLE `homestay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
