<?php
include('Koneksi.php');

if (!isset($_SESSION["warna_navbar"])) {
  $_SESSION['warna_navbar'] = 'primary';
}

$id = $_GET["id_barang"];
$img = $_GET["img"];

//jalankan query DELETE untuk menghapus data
if (!file_exists('img/' . $img)) {
  if (mkdir($img, 0777, false)) {
  }
} else {
  unlink('img/' . $img);
}
$query = "DELETE FROM elektronik_dini_table WHERE id_barang='$id' ";
$hasil_query = mysqli_query($koneksi, $query);

//periksa query, apakah ada kesalahan
if (!$hasil_query) {
  die("Gagal menghapus data: " . mysqli_errno($koneksi) .
    " - " . mysqli_error($koneksi));
} else {
  echo "<script>alert('Data berhasil dihapus.');window.location='Daftar_Elektronik-DINI.php';</script>";
}
