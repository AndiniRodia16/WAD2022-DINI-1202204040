<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "wad_modul4remed_dini";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn){
        echo"<script>alert Gagal Terhubung ke Database</script>";
    }
?>