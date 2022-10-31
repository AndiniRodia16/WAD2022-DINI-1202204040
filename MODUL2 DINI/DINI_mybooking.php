<!DOCTYPE html>
<html lang ="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> MODUL 2 WAD - Sewa Mobil </title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="MODUL2_DINI.php">
</head>
<body>
<?php
    $nama = isset($_GET['name']) ? $_GET['name'] : '';
    $dates = isset($_GET['date']) ? $_GET['date'] : '';
    $start = isset($_GET['mulai']) ? $_GET['mulai'] : '';
    $durasi = isset($_GET['durasi']) ? $_GET['durasi'] : '';
    $mobil = isset($_GET['mobil']) ? $_GET['mobil'] : '';
    $nohp = isset($_GET['nohp']) ? $_GET['nohp'] : '';
    $tambahan = isset($_GET['tambahan']) ? $_GET['tambahan'] : '';
    
    $total = isset($_GET['tambahan']) ? $_GET['tambahan'] : '';
?>
<div class="container">
    <h1 class="text-center"> Terima Kasih Sudah Booking </h1>
    <h2 class="text-center"> Silahkan Periksa Detail Reservasi Anda </h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"> # </th>
                <th scope="col"> Nama </th>
                <th scope="col"> Tanggal Rental </th>
                <th scope="col"> Mulai Jam </th>
                <th scope="col"> Durasi (Hari) </th>
                <th scope="col"> Tipe Mobil </th>
                <th scope="col"> No HP </th>
                <th scope="col"> Tambahan Service? </th>
                <th scope="col"> Total </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"> 1 </th>
                <td><?php echo $name ?></td>
                <td><?php echo $date ?></td>
                <td><?php echo $mulai ?></td>
                <td><?php echo $durasi ?></td>
                <td><?php echo $mobil ?></td>
                <td><?php echo $nohp ?></td>
                <td><?php echo $tambahan ?></td>
                <td><?php echo $total ?></td>
            </tr>
        </tbody>
    </table>
    <div class="nb-3">
        <div class="d-flex justify-content-center">
            <a href="DINI_booking.php" class="btn btn-outline-primary w-50"> Kembali </a>
        </div>
    </div>
</div>
</body>
</html>