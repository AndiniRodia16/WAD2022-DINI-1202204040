<?php
include'Koneksi.php';
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
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php">My Car</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- end navbar -->

    <div class="container mt-3">

        <!-- title -->
        <center><h2 class="fw-bold"> Tambah mobil </h2></center>
        <center><p> Tambah Mobil Baru Anda Ke List Show Room </p></center>
        <!-- end title -->
        
        <!-- form -->
        <div class="container mt-5" style="width:50%">
            <form action="MyShowRoom-DINI.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Nama Mobil </label>
                    <input type="text" name="nama" class="form-control" value="BMW I4">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Nama Pemilik </label>
                    <input type="text" name="pemilik" class="form-control" value="DINI_1202204040">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Merk </label>
                    <input type="text" name="merk" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Tanggal Beli </label>
                    <input type="date" name="tanggal_beli" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextArea1" class="form-label"> Deskripsi </label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Foto </label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Status Pembayaran </label>
                    <div class="form-check">
                        <input value="lunas" class="form-check-input" type="radio"  name="status">
                        <label  class="form-check-label" for="flexRadioDefault1">
                            Lunas
                        </label>
                    </div>
                    <div class="form-check">
                        <input value="belum lunas" class="form-check-input" type="radio" name="status">
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