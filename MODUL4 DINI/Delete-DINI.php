<?php
include('./config/Koneksi.php');

session_start();

if (!isset($_SESSION["loggedin"])) {
  echo "<script>alert('Anda harus login terlebih dahulu')</script>";
  exit;
}

$id = $_GET["id_mobil"];
$img = $_GET["img"];

//jalankan query DELETE untuk menghapus data
if (!file_exists('img/' . $img)) {
  if (mkdir($img, 0777, false)) {
  }
} else {
  unlink('img/' . $img);
}
$query = "DELETE FROM showroom_dini_table WHERE id_mobil='$id' ";
$hasil_query = mysqli_query($koneksi, $query);

//periksa query, apakah ada kesalahan
if (!$hasil_query) {
  die("Gagal menghapus data: " . mysqli_errno($koneksi) .
    " - " . mysqli_error($koneksi));
} else {
  echo "<script>alert('Data berhasil dihapus.');window.location='MyShowRoom-DINI.php';</script>";
}
