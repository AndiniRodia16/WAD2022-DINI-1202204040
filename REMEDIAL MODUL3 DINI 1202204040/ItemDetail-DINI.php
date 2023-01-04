<?php
require 'Koneksi.php';

if (!isset($_SESSION['warna_navbar'])) {
    $_SESSION['warna_navbar'] = 'primary';
}

if (isset($_POST['btn_update'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (strlen($_POST['deskripsi']) < 30) {
            echo "<script>alert('Deskripsi tidak boleh kurang dari 30 karakter')</script>";
            echo "<meta http-equiv='refresh' content='1 url=ItemDetail-DINI.php'>";
        } else {
            $id_barang = $_POST['id_barang'];
            $nama_barang = $_POST['nama_barang'];
            $harga_barang = $_POST['harga_barang'];
            $kategori = $_POST['kategori'];
            $deskripsi = $_POST['deskripsi'];

            $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
            $foto_barang =  $nama_barang . '-' . $_FILES['foto_barang']['name'];
            $x = explode('.', $foto_barang);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto_barang']['tmp_name'];

            if (!empty($foto_barang)) {
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                    move_uploaded_file($file_tmp, 'img/' . $foto_barang);
                    mysqli_query($koneksi, "UPDATE elektronik_dini_table SET foto_barang='$foto_barang' WHERE id_barang = '$id_barang'");
                }
            }

            $metode_pembayaran = $_POST['metode_pembayaran'];

            $query = mysqli_query($koneksi, "UPDATE elektronik_dini_table SET nama_barang='$nama_barang' , harga_barang='$harga_barang' , kategori='$kategori' , deskripsi='$deskripsi' , metode_pembayaran='$metode_pembayaran' WHERE id_barang = '$id_barang'");


            if ($query) {
                echo "<script>alert('Data Berhasil diPerbaharui')</script>";
                echo "<meta http-equiv='refresh' content='1 url=Daftar_Elektronik-DINI.php'>";
            } else {
                echo "<script>alert('Something went wrong, Data Gagal Perbaharui')</script>";
                echo "<meta http-equiv='refresh' content='1 url=ItemDetail-DINI.php'>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> REMEDIAL MODUL 3 WAD_DINI 1202204040 </title>
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
<!-- navbar -->

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
                        <a class="nav-link text-white" aria-current="page" href="MyShowRoom.php">My Car</a>
                    </li>

                </ul>
                <a href="Create.php" class="btn btn-light me-2 btn-sm">Add Car</a>
            </div>
        </div>
    </nav>

    <!-- end navbar -->

    <div class="container my-3">
        <?php
        $id_barang = $_GET['id_barang'];
        $ambil = $koneksi->query("SELECT * FROM elektronik_dini_table WHERE id_barang = '$id_barang'");
        $data = $ambil->fetch_assoc();
        ?>
        <!-- title -->
        <h2 class="fw-bold"> YONG MA </h2>
        <p> Detail Produk <?php echo $data['nama_barang'] ?></p>
        <!-- end title -->

        <!-- form -->
        <div class="row">
            <div class="col">
                <img src="img/<?php echo $data['foto_barang'] ?>" style="width: 500px;" alt="">
            </div>
            <div class="col">
                <form action="ItemDetail-DINI.php?action=edit&id_barang=<?php echo $data['id_barang']; ?>" method="POST" enctype="multipart/form-data">
                    <input name="id_barang" value="<?php echo $data['id_barang']; ?>" hidden />
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label"> Nama Produk </label>
                        <input type="text" name="nama_barang" required class="form-control" value="<?php echo $data['nama_barang'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="harga_barang" class="form-label"> Harga </label>
                        <input type="int" name="harga_barang" required class="form-control" value="<?php echo $data['harga_barang'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label"> Kategori </label>
                        <input type="text" name="kategori" required class="form-control" value="<?php echo $data['kategori'] ?>">
                    </div>
                    <div class="mb-3 ">
                        <label for="deskripsi" class="form-label"> Deskripsi </label>
                        <textarea name="deskripsi" minlength="30" rows="5" class="form-control" placeholder="Deskripsi singkat mengenai produk" required id="deskripsi"><?php echo $data['deskripsi'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto_barang" class="form-label"> Foto </label>
                        <input type="file" name="foto_barang" class="form-control" value="<?php echo $data['foto_barang'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="metode_pembayaran" class="form-label"> Metode Pembayaran </label>
                        <div class="form-check">
                            <input class="form-check-input" value="cod" <?php if ($data['metode_pembayaran'] == "cod") echo 'checked' ?> type="radio" name="metode_pembayaran" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                COD
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="transfer" <?php if ($data['metode_pembayaran'] == "transfer") echo 'checked' ?> type="radio" name="metode_pembayaran" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Transfer Bank
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary fw-light px-4 py-2" name="btn_update" value="edit"> Edit </button>
                </form>
            </div>
        </div>
        <!-- end form -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>