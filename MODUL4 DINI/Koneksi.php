<<<<<<< HEAD
<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "wad_modul4_dini";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn){
        echo"<script>alert Gagal Terhubung ke Database</script>";
    }
=======
<?php
$koneksi = new mysqli("localhost","root","","wad_modul4_dini");
>>>>>>> 2200285c302e2c39d4a1ac1cff6fb8864eae0294
?>