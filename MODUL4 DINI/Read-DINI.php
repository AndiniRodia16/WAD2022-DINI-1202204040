<?php
    include('Koneksi.php');
?>
<!DOCTYPE html>
<html lang ="en" dir="ltr">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MODUL 3 WAD </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/home.css">
</head>
<body>
    <div class="container mt-5" style="width:50%">
    <table class="table">
        <thead>
            <tr>
                <th scope="col"> # </th>
                <th scope="col"> Nama Mobil </th>
                <th scope="col"> Nama Pemilik </th>
                <th scope="col"> Merk </th>
                <th scope="col"> Tanggal Beli </th>
                <th scope="col"> Deskripsi </th>
                <th scope="col"> Foto </th>
                <th scope="col"> Status Pembayaran </th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Menggunakan query sql untuk menampilkan database
                $query = mysqli_query($koneksi, "SELECT * FROM showroom_dini_tabel");

                // Mengecek apakah variabel query berjalan
                if($query){
                    // Kondisi jika variabel query berjalan
                    // Menampilkan data dengan fungsi mysqli_fetch_assoc()
                    while($selects = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <th scope="row"><?= $selects['id_mobil']?></th>
                <th><?= $selects['nama_mobil']?></th>
                <th><?= $selects['pemilik_mobil']?></th>
                <th><?= $selects['merk_mobil']?></th>
                <th><?= $selects['tanggal_beli']?></th>
                <th><?= $selects['deskripsi']?></th>
                <th><?= $selects['foto_mobil']?></th>
                <th><?= $selects['status_pembayaran']?></th>
            </tr>
            <?php
                    }
                }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>