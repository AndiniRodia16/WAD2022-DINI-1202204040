<?php
require './config/Koneksi.php';

session_start();

if (!isset($_SESSION["loggedin"])) {
    header("location: index.php");
    exit;
}

if (isset($_POST['btn_update'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (strlen($_POST['deskripsi']) < 30) {
            echo "<script>alert('Deskripsi tidak boleh kurang dari 30 karakter')</script>";
            echo "<meta http-equiv='refresh' content='1 url=ItemDetail-DINI.php'>";
        } else {
            $id_mobil = $_POST['id_mobil'];
            $nama_mobil = $_POST['nama_mobil'];
            $pemilik_mobil = $_POST['pemilik_mobil'];
            $merk_mobil = $_POST['merk_mobil'];
            $tanggal_beli = $_POST['tanggal_beli'];
            $deskripsi = $_POST['deskripsi'];

            $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
            $foto_mobil =  $nama_mobil . '-' . $_FILES['foto_mobil']['name'];
            $x = explode('.', $foto_mobil);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto_mobil']['tmp_name'];

            if (!empty($foto_mobil)) {
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                    move_uploaded_file($file_tmp, 'img/' . $foto_mobil);
                    mysqli_query($koneksi, "UPDATE showroom_dini_table SET foto_mobil='$foto_mobil' WHERE id_mobil = '$id_mobil'");
                }
            }

            $status_pembayaran = $_POST['status_pembayaran'];

            $query = mysqli_query($koneksi, "UPDATE showroom_dini_table SET nama_mobil='$nama_mobil' , pemilik_mobil='$pemilik_mobil' , merk_mobil='$merk_mobil' , tanggal_beli='$tanggal_beli' , deskripsi='$deskripsi' , status_pembayaran='$status_pembayaran' WHERE id_mobil = '$id_mobil'");


            if ($query) {
                echo "<script>alert('Data Berhasil diPerbaharui')</script>";
                echo "<meta http-equiv='refresh' content='1 url=MyShowRoom-DINI.php'>";
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
    <title>MODUL 4 WAD_DINI 1202204040 </title>
    <?php include_once('./component/style.php') ?>


</head>
<!-- navbar -->

<body>
    <?php include('./component/navbar.php'); ?>

    <!-- end navbar -->

    <div class="container my-3">
        <?php
        $id_mobil = $_GET['id_mobil'];
        $ambil = $koneksi->query("SELECT * FROM showroom_dini_table WHERE id_mobil = '$id_mobil'");
        $data = $ambil->fetch_assoc();
        ?>
        <!-- title -->
        <h2 class="fw-bold"> BMW I4 </h2>
        <p> Detail Mobil <?php echo $data['nama_mobil'] ?></p>
        <!-- end title -->

        <!-- form -->
        <div class="row">
            <div class="col">
                <img src="img/<?php echo $data['foto_mobil'] ?>" style="width: 500px;" alt="">
            </div>
            <div class="col">
                <form action="ItemDetail-DINI.php?action=edit&id_mobil=<?php echo $data['id_mobil']; ?>" method="POST" enctype="multipart/form-data">
                    <input name="id_mobil" value="<?php echo $data['id_mobil']; ?>" hidden />
                    <div class="mb-3">
                        <label for="nama_mobil" class="form-label"> Nama Mobil</label>
                        <input type="text" name="nama_mobil" required class="form-control" value="<?php echo $data['nama_mobil'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="pemilik_mobil" class="form-label"> Nama Pemilik </label>
                        <input type="text" name="pemilik_mobil" required class="form-control" value="<?php echo $data['pemilik_mobil'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="merk_mobil" class="form-label"> Merk </label>
                        <input type="text" name="merk_mobil" required class="form-control" value="<?php echo $data['merk_mobil'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_beli" class="form-label"> Tanggal Beli </label>
                        <input type="date" name="tanggal_beli" required class="form-control" value="<?php echo $data['tanggal_beli'] ?>">
                    </div>
                    <div class="mb-3 ">
                        <label for="deskripsi" class="form-label"> Deskripsi </label>
                        <textarea name="deskripsi" minlength="30" rows="5" class="form-control" placeholder="Deskripsi singkat mengenai kendaraan anda" required id="deskripsi"><?php echo $data['deskripsi'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto_mobil" class="form-label"> Foto </label>
                        <input type="file" name="foto_mobil" class="form-control" value="<?php echo $data['foto_mobil'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="status_pembayaran" class="form-label"> Status Pembayaran </label>
                        <div class="form-check">
                            <input class="form-check-input" value="lunas" <?php if ($data['status_pembayaran'] == "lunas") echo 'checked' ?> type="radio" name="status_pembayaran" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Lunas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="belum lunas" <?php if ($data['status_pembayaran'] == "belum_lunas") echo 'checked' ?> type="radio" name="status_pembayaran" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Belum lunas
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary fw-light px-4 py-2" name="btn_update" value="edit"> Edit </button>
                </form>
            </div>
        </div>
        <!-- end form -->
    </div>
    <?php include_once('./component/script.php') ?>
</body>

</html>