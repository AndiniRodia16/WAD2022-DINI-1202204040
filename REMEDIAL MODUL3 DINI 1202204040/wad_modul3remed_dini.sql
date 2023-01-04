-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2023 pada 15.25
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
-- Database: `wad_modul3remed_dini`
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
(7, 'Panasonic CU-XC9PKJ', 4900000, 'AC', 'Panasonic menawarkan beragam tipe air conditioning (AC) untuk solusi udara ruangan yang bersih dan nyaman dengan efisiensi energi yang ramah lingkungan. Terkoneksi dengan Aplikasi Panasonic Comfort Cloud yang memberikan kemudahan mengoperasikan air conditioner meskipun sedang beraktivitas di luar rumah.', 'Panasonic CU-XC9PKJ-Panasonic CU-XC5PKJ.JPG', 'transfer'),
(8, 'PHILIPS HD-3128/33', 600000, 'Rice Cooker', 'Memasak setiap butir beras dengan sempurna menggunakan Panci ProCeramic terbaik yang tahan lama, ProCeramic Pot berpegangan besar, memiliki kapasitas sebesar 2 liter, Pelapis ProCeramic canggih 3x lebih keras, Sistem pemanas Smart 3D memasak nasi secara merata, Fungsi tetap hangat otomatis selama 48 jam.', 'PHILIPS HD-3128/33-Rice-Cooker-PHILIPS-HD-3128.jpg', 'transfer'),
(9, 'VYBA PF-1510', 230000, 'Kipas Angin', 'Kipas angin VYBA NCE PF 1510 : Tipe kipas meja dan dinding, rangka terbuat dari Besi, dengan 3 baling yang dirancang agar hembusan angin lebih kencang serta dilengkapi 3 pengatur kecepatan, bekerja pada tegangan AC220V / 50 HZ dengan daya 35 Watt dengan spesifikasi 10\" inchi / 25cm.', 'VYBA PF-1510-VYBA PF-1510.jpg', 'cod');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `elektronik_dini_table`
--
ALTER TABLE `elektronik_dini_table`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `elektronik_dini_table`
--
ALTER TABLE `elektronik_dini_table`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
