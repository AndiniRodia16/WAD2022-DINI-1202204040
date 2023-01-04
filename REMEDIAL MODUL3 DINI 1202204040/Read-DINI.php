<?php
include('Koneksi.php');

if (!isset($_SESSION['warna_navbar'])) {
    $_SESSION['warna_navbar'] = 'primary';
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> REMEDIAL MODUL 4 WAD </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/home.css">
</head>

<body>
    <div class="container mt-5" style="width:50%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> # </th>
                    <th scope="col"> Nama Produk </th>
                    <th scope="col"> Harga </th>
                    <th scope="col"> Kategori </th>
                    <th scope="col"> Deskripsi </th>
                    <th scope="col"> Foto </th>
                    <th scope="col"> Metode Pembayaran </th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menggunakan query sql untuk menampilkan database
                $query = mysqli_query($koneksi, "SELECT * FROM showroom_dini_tabel");

                // Mengecek apakah variabel query berjalan
                if ($query) {
                    // Kondisi jika variabel query berjalan
                    // Menampilkan data dengan fungsi mysqli_fetch_assoc()
                    while ($selects = mysqli_fetch_assoc($query)) {
                ?>
                        <tr>
                            <th scope="row"><?= $selects['id_barang'] ?></th>
                            <th><?= $selects['nama_barang'] ?></th>
                            <th><?= $selects['harga_barang'] ?></th>
                            <th><?= $selects['kategori'] ?></th>
                            <th><?= $selects['deskripsi'] ?></th>
                            <th><?= $selects['foto_barang'] ?></th>
                            <th><?= $selects['metode_pembayaran'] ?></th>
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