<?php
include('Koneksi.php');

if (isset($_POST['btn_simpan'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (strlen($_POST['deskripsi']) < 30) {
            echo "<script>alert('Deskripsi tidak boleh kurang dari 30 karakter!')</script>";
            echo "<meta http-equiv='refresh' content='1 url=Tambah-DINI.php'>";
        } else {
            $nama_barang = $_POST['nama_barang'];
            $harga_barang = $_POST['harga_barang'];
            $kategori = $_POST['kategori'];
            $deskripsi = $_POST['deskripsi'];

            $ekstensi_diperbolehkan    = array('png' , 'jpg' , 'jpeg');
            $foto_barang =  $nama_barang . '-' . $_FILES['foto_barang']['name'];
            $x = explode('.', $foto_barang);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto_barang']['tmp_name'];

            if (!empty($foto_barang)) {
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                    move_uploaded_file($file_tmp, 'img/' . $foto_barang);
                }
            } else {
                $foto_barang = 'elektronik.jpg';
            }


            $metode_pembayaran = $_POST['metode_pembayaran'];
            $query = mysqli_query($koneksi, "INSERT INTO elektronik_dini_table(nama_barang, harga_barang, kategori, deskripsi, foto_barang, metode_pembayaran) VALUES('$nama_barang' , '$harga_barang' , '$kategori' , '$deskripsi' , '$foto_barang' , '$metode_pembayaran')");

            if ($query) {
                echo "<script>alert('Data Berhasil ditambahkan')</script>";
                echo "<meta http-equiv='refresh' content='1 url=Daftar_Elektronik-DINI.php'>";
            } else {
                echo "<script>alert('Something went wrong, Data Gagal ditambahkan')</script>";
                echo "<meta http-equiv='refresh' content='1 url=Tambah-DINI.php'>";
            }
        }
    }
}

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
    <title> REMED MODUL 3 WAD_DINI 1202204040 </title>
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
                        <a class="nav-link text-white" aria-current="page" href="Daftar_Elektronik-DINI.php">My Car</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <!-- title -->
        <h2 class="fw-bold"> Tambah Produk </h2>
        <p> Tambahkan produk disini </p>
        <!-- end title -->
        <hr />
        <!-- form -->
        <div class="container mt-10" style="width:100%">
            <form action="Tambah-DINI.php?action=submit" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama_barang" class="form-label"> Nama Produk </label>
                    <input type="text" name="nama_barang" class="form-control" required placeholder="PHILIPS HD-3128/33" id="nama_barang">
                </div>
                <div class="mb-3">
                    <label for="harga_barang" class="form-label"> Harga </label>
                    <input type="int" name="harga barang" class="form-control" required placeholder="600000" id="harga_barang">
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label"> Kategori </label>
                    <input type="text" name="kategori" class="form-control" required placeholder="Rice Cooker" id="kategori">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label"> Deskripsi </label>
                    <textarea name="deskripsi" minlength="30" rows="5" class="form-control" placeholder="Deskripsi singkat mengenai produk" required id="deskripsi"></textarea>
                </div>
                <div class="mb-3">
                    <label for="foto_barang" class="form-label"> Foto </label>
                    <input type="file" name="foto_barang" class="form-control" required id="foto_barang">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Metode Pembayaran </label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input value="cod" id="ipt-cod" class="form-check-input" required type="radio" name="metode_pembayaran">
                        <label class="form-check-label" for="ipt-cod">
                            COD
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input value="transfer" id="ipt-transfer" class="form-check-input" required type="radio" name="metode_pembayaran">
                        <label class="form-check-label" for="ipt-transfer">
                            Transfer Bank
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary fw-light px-4 py-2" name="btn_simpan" value="submit"> Selesai </button>
            </form>
        </div>
        <!-- end form -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>