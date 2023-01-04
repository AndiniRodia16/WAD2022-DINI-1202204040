<?php
require './config/Koneksi.php';
session_start();

if (!isset($_SESSION['warna_navbar'])) {
    $_SESSION['warna_navbar'] = 'primary';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TST SHOP - REMED MODUL 4 WAD_DINI 1202204040 </title>
    <?php include_once('./component/style.php') ?>


</head>

<body>
    <!-- navbar -->
    <?php include('./component/navbar.php'); ?>
    <!-- end navbar -->

    <!-- jumbotron -->
    <?php
    $id = explode('/', $_SERVER['REQUEST_URI']);
    $url = end($id);

    if ($url == '' || $url == 'index.php') {
        include('./home.php');
    }
    ?>
    <?php include_once('./component/script.php') ?>

</body>

</html>