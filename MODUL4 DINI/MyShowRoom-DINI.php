<?php
require './config/Koneksi.php';

session_start();

if (!isset($_SESSION["loggedin"])) {
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOWROOM - MODUL 4 WAD_DINI 1202204040 </title>
    <?php include_once('./component/style.php') ?>
</head>

<body>
    <?php include('./component/navbar.php'); ?>

    <!-- end navbar -->

    <!-- card -->
    <div class="container p-5">
        <h2 class="fw-bold"> My Show Room </h2>
        <small class="fw-light"> List showroom DINI-1202204040 </small>
        <hr>
        <!-- read -->
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                $sql = "SELECT * FROM showroom_dini_table ORDER BY id_mobil ASC";
                $query = mysqli_query($koneksi, $sql);

                //cek kalau error
                if (!$query) {
                    die("Error" . mysqli_error($koneksi));
                }

                while ($mycar = mysqli_fetch_assoc($query)) {
                ?>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" height="225" width="100%" src="img/<?php echo $mycar['foto_mobil']; ?>" alt="Card image cap">

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $mycar['nama_mobil'] ?></h5>
                                <p class="card-text"><?php echo $mycar['deskripsi'] ?></p>

                                <?php if (isset($_SESSION["loggedin"])) {

                                ?>
                                    <div class="text-center">
                                        <a href="ItemDetail-DINI.php?id_mobil=<?php echo $mycar['id_mobil']; ?>" class="btn btn-primary mt-auto rounded-4">Detail</a>

                                        <a href="Delete-DINI.php?id_mobil=<?php echo $mycar['id_mobil']; ?>&img=<?php echo $mycar['foto_mobil'] ?>" class="btn btn-danger mt-auto rounded-4" href="#" onclick="return confirm('Yakin Hapus?')">Delete</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
    <!-- end card -->
    <?php include_once('./component/script.php'); ?>
</body>

</html>