<<<<<<< HEAD
<?php
include 'config.php';
$id = $_GET["id_mobil"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM showroom_dini_tabel WHERE id_mobil='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../MyShowRoom-DINI.php';</script>";
    }
=======
<?php
include 'config.php';
$id = $_GET["id_mobil"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM showroom_dini_tabel WHERE id_mobil='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../MyShowRoom-DINI.php';</script>";
    }
>>>>>>> 2200285c302e2c39d4a1ac1cff6fb8864eae0294
?>