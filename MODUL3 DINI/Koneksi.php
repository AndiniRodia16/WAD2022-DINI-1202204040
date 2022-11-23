<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "modul3";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>