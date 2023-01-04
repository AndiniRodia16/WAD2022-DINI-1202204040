-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2023 pada 13.57
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
-- Database: `wad_modul4remed_dini`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik_dini_table`
--

CREATE TABLE `elektronik_dini_table` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` int(15) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_barang` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `elektronik_dini_table`
--

INSERT INTO `elektronik_dini_table` (`id_barang`, `nama_barang`, `harga_barang`, `kategori`, `deskripsi`, `foto_barang`, `metode_pembayaran`) VALUES
(1, 'Panasonic CU-XC9PKJ', 4900000, 'AC', 'Panasonic menawarkan beragam tipe air conditioning (AC) untuk solusi udara ruangan yang bersih dan nyaman dengan efisiensi energi yang ramah lingkungan. Terkoneksi dengan Aplikasi Panasonic Comfort Cloud yang memberikan kemudahan mengoperasikan air conditioner meskipun sedang beraktivitas di luar rumah.', 'Panasonic CU-XC9PKJ-Panasonic CU-XC5PKJ.JPG', 'transfer'),
(2, 'Miyako MCM-18BH B', 300000, 'Rice Cooker', 'Miyako MCM-18BHB Rice Cooker adalah salah satu peralatan yang digunakan untuk memasak nasi dengan kapasitas sebesar 1.8 Liter. Selain memasak nasi Rice Cooker Miyako ini juga dapat difungsikan sebagai tempat menghangatkan dan mengukus makanan dengan daya sebesar 395 watt, Terbuat dari material plastik berkualitas.', 'Miyako MCM-18BH B-Miyako MCM-18BHB.jpg', 'cod'),
(3, 'PHILIPS HR-2116 Kaca', 570000, 'Blender', 'Philips HR2116 ini bisa membantu membuat jus atau makanan lunak lainnya. Dirancang dengan daya listrik hingga 600W, blender satu ini memiliki kapasitas 2l. Material blender ini terbuat dari Kaca dengan bobot blender mencapai 4.27kg. Revolusi Maks sebesar 35000rpm, Tegangan	sebesar 240V, dan Frekuensi sebesar 50Hz', 'PHILIPS HR-2116 Kaca-Blender PHILIPS HR 2116.jpg', 'cod');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_dini`
--

CREATE TABLE `user_dini` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_dini`
--

INSERT INTO `user_dini` (`id`, `email`, `nama`, `no_hp`, `password`) VALUES
(1, 'din@gmail.com', 'dini', '1234', '536464c6582fd9f32ce8ee25ccb973a6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `elektronik_dini_table`
--
ALTER TABLE `elektronik_dini_table`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `user_dini`
--
ALTER TABLE `user_dini`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `elektronik_dini_table`
--
ALTER TABLE `elektronik_dini_table`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_dini`
--
ALTER TABLE `user_dini`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
