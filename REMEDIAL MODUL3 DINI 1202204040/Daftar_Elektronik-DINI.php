<?php
require 'Koneksi.php';

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
    <title> DAFTAR ELEKTRONIK - REMEDIAL MODUL 4 WAD_DINI 1202204040 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {

            background: #555;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="Daftar_Elektronik-DINI.php">Elektronik </a>
                    </li>

                </ul>
                <a href="Tambah-DINI.php" class="btn btn-light me-2 btn-sm"> Tambah Data </a>
            </div>
        </div>
    </nav>

    <!-- end navbar -->

    <!-- card -->
    <div class="container p-5">
        <h2 class="fw-bold"> Daftar Elektronik </h2>
        <small class="fw-light"> List elektronik yang ada pada toko Dinn Elektronik </small>
        <hr>
        <!-- read -->
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                $sql = "SELECT * FROM elektronik_dini_table ORDER BY id_barang ASC";
                $query = mysqli_query($koneksi, $sql);

                //cek kalau error
                if (!$query) {
                    die("Error" . mysqli_error($koneksi));
                }

                while ($elektronik = mysqli_fetch_assoc($query)) {
                ?>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" height="225" width="100%" src="img/<?php echo $elektronik['foto_barang']; ?>" alt="Card image cap">

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $elektronik['nama_barang'] ?></h5>
                                <p class="card-text"><?php echo $elektronik['deskripsi'] ?></p>
                                
                                <div class="text-center">
                                    <a href="ItemDetail-DINI.php?id_barang=<?php echo $elektronik['id_barang']; ?>" class="btn btn-primary mt-auto rounded-4">Detail</a>
                                    
                                    <a href="Hapus-DINI.php?id_barang=<?php echo $elektronik['id_barang']; ?>&img=<?php echo $elektronik['foto_barang'] ?>" class="btn btn-danger mt-auto rounded-4" href="#" onclick="return confirm('Yakin Hapus?')">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
    <!-- end card -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>