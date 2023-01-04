<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "wad_modul3remed_dini";
    $koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$koneksi){
        echo"<script>alert Gagal Terhubung ke Database</script>";
    }
?>