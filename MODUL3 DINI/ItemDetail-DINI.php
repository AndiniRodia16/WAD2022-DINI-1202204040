<<<<<<< HEAD
<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> MODUL 3 WAD_DINI 1202204040 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
        <h2 class="fw-bold"> BMW I4 </h2>
        <p> Detail Mobil <?php echo $data['nama_mobil']?></p>
        <!-- end title -->
        
        <!-- form -->
        <div class="row">
            <div class="col">
                <img src="dbimg/<?php echo $data['foto_mobil']?>" style="width: 512px;" alt="">
            </div>
            <div class="col">
                <form action="config/edit2.php" method="POST" enctype="multipart/form-data">
                    <input name="id_mobil" value="<?php echo $data['id_mobil'];?>" hidden/>
                    <div class="mb-3">
                        <label for="exampleInputNama1" class="form-label"> Nama Mobil</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_mobil']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputNama2" class="form-label"> Nama Pemilik </label>
                        <input type="text" name="pemilik" class="form-control" value="<?php echo $data['pemilik_mobil']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label"> Merk </label>
                        <input type="text" name="merk" class="form-control" value="<?php echo $data['merk_mobil']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPass" class="form-label"> Tanggal Beli </label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal_beli']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Deskripsi </label>
                        <input type="textarea" name="deskripsi" class="form-control" value="<?php echo $data['deskripsi']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Foto </label>
                        <input type="file" name="foto" class="form-control" value="<?php echo $data['foto_mobil']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Status Pembayaran </label>
                        <div class="form-check">
                            <input class="form-check-input" value="lunas" <?php if($data['status_pembayaran'] == "lunas") echo 'checked'?> type="radio" name="status" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Lunas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="belum lunas" <?php if($data['status_pembayaran'] == "belum lunas") echo 'checked'?> type="radio" name="status" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Belum lunas
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"> Edit </button>
                </form>
            </div>
        </div>
    <!-- end form -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

=======
<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> MODUL 3 WAD_DINI 1202204040 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
        <h2 class="fw-bold"> BMW I4 </h2>
        <p> Detail Mobil <?php echo $data['nama_mobil']?></p>
        <!-- end title -->
        
        <!-- form -->
        <div class="row">
            <div class="col">
                <img src="dbimg/<?php echo $data['foto_mobil']?>" style="width: 512px;" alt="">
            </div>
            <div class="col">
                <form action="config/edit2.php" method="POST" enctype="multipart/form-data">
                    <input name="id_mobil" value="<?php echo $data['id_mobil'];?>" hidden/>
                    <div class="mb-3">
                        <label for="exampleInputNama1" class="form-label"> Nama Mobil</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_mobil']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputNama2" class="form-label"> Nama Pemilik </label>
                        <input type="text" name="pemilik" class="form-control" value="<?php echo $data['pemilik_mobil']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label"> Merk </label>
                        <input type="text" name="merk" class="form-control" value="<?php echo $data['merk_mobil']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPass" class="form-label"> Tanggal Beli </label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal_beli']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Deskripsi </label>
                        <input type="textarea" name="deskripsi" class="form-control" value="<?php echo $data['deskripsi']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Foto </label>
                        <input type="file" name="foto" class="form-control" value="<?php echo $data['foto_mobil']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Status Pembayaran </label>
                        <div class="form-check">
                            <input class="form-check-input" value="lunas" <?php if($data['status_pembayaran'] == "lunas") echo 'checked'?> type="radio" name="status" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Lunas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="belum lunas" <?php if($data['status_pembayaran'] == "belum lunas") echo 'checked'?> type="radio" name="status" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Belum lunas
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"> Edit </button>
                </form>
            </div>
        </div>
    <!-- end form -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

>>>>>>> 2200285c302e2c39d4a1ac1cff6fb8864eae0294
