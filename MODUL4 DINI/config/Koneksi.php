<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wad_modul4_dini";
$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$koneksi) {
    echo "<script>alert('Gagal Terhubung ke Database')</script>";
}
