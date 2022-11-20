<?php
    include('config.php');
    $nama_mobil = $_POST['nama_mobil'];
    $pemilik_mobil = $_POST['pemilik_mobil'];
    $merk_mobil = $_POST['merk_mobil'];
    $tanggal_beli = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto_mobil = $_POST['foto_mobil'];
    $status_pembayaran = $_POST['status_pembayaran'];
    $query = mysqli_query($connect, "INSERT INTO showroom_dini_tabel(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES('$nama_mobil' , '$pemilik_mobil' , '$merk_mobil' , '$tanggal_beli' , '$deskripsi' , '$foto_mobil' , '$status_pembayaran')");

    if($query) {
        echo "<script>alert('Data telah ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    } else {
        echo "<script>alert('Data gagal ditambahkan')</script>"; 
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    }
?>

<?
require_once 'config/insert.php';
?>
<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  MODUL 3 WAD_DINI 1202204040 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="MyShowRoom-DINI.php">My Car</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>

    <!-- end navbar -->

    <div class="container my-3">

        <!-- title -->
        <h2 class="fw-bold">Tambah mobil</h2>
        <p>Tambah Mobil Baru Anda Ke List Show Room</p>
        <!-- end title -->
        
        <!-- form -->
        <div class="row">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold"> Nama Mobil </label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="BMW I4">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold"> Nama Pemilik </label>
                    <input type="text" name="pemilik" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold"> Merk </label>
                    <input type="text" name="merk" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold"> Tanggal Beli </label>
                    <input type="date" name="tanggal_beli" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold"> Deskripsi </label>
                    <textarea name="deskripsi" class="form-control" id="exampleInputPassword1"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold"> Foto </label>
                    <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold"> Status Pembayaran </label>
                    <div class="form-check">
                        <input value="lunas" class="form-check-input" type="radio"  name="status" id="flexRadioDefault1">
                        <label  class="form-check-label" for="flexRadioDefault1">
                            Lunas
                        </label>
                    </div>
                    <div class="form-check">
                        <input value="belum lunas" class="form-check-input" type="radio" name="status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Belum lunas
                        </label>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary px-4">Submit</button>
            </form>
        </div>
    <!-- end form -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>