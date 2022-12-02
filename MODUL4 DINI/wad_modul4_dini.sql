-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Des 2022 pada 23.02
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_dini`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `showroom_dini_table`
--

CREATE TABLE `showroom_dini_table` (
  `id_mobil` int NOT NULL,
  `nama_mobil` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pemilik_mobil` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `merk_mobil` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto_mobil` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_pembayaran` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `showroom_dini_table`
--

INSERT INTO `showroom_dini_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(18, 'BMW 740Li ', 'Revan', 'BMW', '2025-02-04', 'Kuasai setiap pertunjukan, nikmati setiap momen. BMW Seri 7 Sedan adalah singkatan dari kehadiran yang percaya diri, kinerja luar biasa, dan kenyamanan maksimal. Sebagai BMW 740Li yang ditenagai oleh mesin bensin 8 silinder ', 'BMW 740Li -cosySec .jpg', 'lunas'),
(19, 'BMW Z4', 'Revan', 'BMW', '2025-04-02', 'Luar dalam, desain BMW Z4 Roadster menyampaikan perasaan sporty yang santai dan estetika individu. Fitur canggih dari tampilan dinamis termasuk BMW kidney grille dalam desain mesh, atap yang elegan dan elemen M Shadow Line.', 'BMW Z4-bmw-z4-roadster-gallery-image-design-01_1920.jpg', 'lunas'),
(20, 'BMW 8 Series', 'Revan', 'BMW', '2025-02-25', 'The new BMW 8 Series Gran Coupé models BMW 840i come with the M sport package as standard. Get more sportiness with distinctive features such as: Get more athletics with distinctive features:', 'BMW 8 Series-cq5dam.resized.img.1680.large.time1642510163180.jpg', 'lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_dini`
--

CREATE TABLE `user_dini` (
  `id` bigint NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_dini`
--

INSERT INTO `user_dini` (`id`, `email`, `nama`, `no_hp`, `password`) VALUES
(1, '0', '0', '0', '0'),
(2, '0', '0', '0', '0'),
(3, '0', '0', '0', '0'),
(4, 'rodiaandini16@gmail.com', 'DINI', '082387557335', 'dinn123'),
(6, '', '', '', '$2y$10$nnIUM3hSlPSanS21.Lri8.n0D6tOPc82DugHuSy.91eqsoUQdGqGy'),
(7, 'admin@gmail.com', 'Admin', '0822777222', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `showroom_dini_table`
--
ALTER TABLE `showroom_dini_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `user_dini`
--
ALTER TABLE `user_dini`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `showroom_dini_table`
--
ALTER TABLE `showroom_dini_table`
  MODIFY `id_mobil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_dini`
--
ALTER TABLE `user_dini`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
