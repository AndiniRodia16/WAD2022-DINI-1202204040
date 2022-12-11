-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2022 pada 15.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul5_dini`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_12_11_054049_create_showrooms_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `showrooms`
--

CREATE TABLE `showrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `purchase_date` date NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Lunas','Belum-Lunas') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `showrooms`
--

INSERT INTO `showrooms` (`id`, `user_id`, `name`, `owner`, `brand`, `purchase_date`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 'ALPARD', 'Dewi Mulyani', 'TOYOTA ALPARD', '2023-07-20', 'Toyota Alphard tersedia dalam pilihan mesin Bensin di Indonesia MPV baru dari Toyota hadir dalam 6 varian. Bicara soal spesifikasi mesin Toyota Alphard, ini ditenagai dua pilihan mesin Bensin berkapasitas 3456 cc. Alphard tersedia dengan transmisi CVT and Otomatis tergantung variannya. Alphard adalah MPV 7 seater dengan panjang 4945 mm, lebar 1850 mm, wheelbase 3000 mm. serta ground clearance 160 mm.', 'uploads/1670760988.jpg', 'Lunas', '2022-12-11 05:16:28', '2022-12-11 05:16:28'),
(3, 3, 'Lamborgini', 'Dinn', 'Lamborgini Aventador', '2023-09-25', 'Lamborghini Aventador adalah mobil sport bermesin tengah yang diproduksi oleh pabrikan otomotif Italia Lamborghini. Sesuai dengan tradisi Lamborghini, Aventador diberi nama setelah banteng petarung Spanyol di Zaragoza, Aragón pada tahun 1993. Lamborghini resmi diluncurkan pada tanggal 28 Februari 2011, lima bulan setelah pengenalan pertamanya di Sant Agata Bolognese.', 'uploads/1670761159.jpg', 'Lunas', '2022-12-11 05:19:19', '2022-12-11 05:26:48'),
(4, 3, 'PAJERO SPORT', 'Selvira', 'Mitsubishi Pajero Sport', '2024-01-18', 'Mitsubishi Pajero Sport terbaru varian Dakar, dibenamkan mesin berkapasitas 2.442 cc, 4 silinder, turbocharged yang dapat mengeluarkan tenaga 178 hp pada 3.500 rpm dengan torsi puncak 430 Nm pada 2.500 rpm. Selain itu, Pajero Sport varian Exceed dan GLX dilengkapi mesin dengan kapasitas 2.477 cc, 4 silinder, turbocharged yang bisa mengeluarkan tenaga 134 hp pada 4.000 rpm dan torsi maksimal 324 Nm pada 2.000 rpm.', 'uploads/1670761315.jpg', 'Belum-Lunas', '2022-12-11 05:21:55', '2022-12-11 05:28:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `no_hp`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Rodia Andini', '082387557335', 'rodiaandini@student.telkomuniversity.ac.id', NULL, '$2y$10$j2WR.F4RvQFRd0moS/KfQejFKoVcaG4mmbYWAqnMQFSRmuO2ueFOu', '2022-12-11 05:03:12', '2022-12-11 05:03:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `showrooms`
--
ALTER TABLE `showrooms`
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
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `showrooms`
--
ALTER TABLE `showrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
