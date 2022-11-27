<DOCTYPE html>
<html lang="eng">
<head>
    <meta>
    <title> MODUL 3 - EDIT </title>
    <link>
</head>
<?php
    include('config.php');
    $id = 1;
    $query = mysql($connect,"SELECT *FROM show_dini_table WHERE id = '$id'");
?>
<body>
    <div class="container mt-5" style="width:500px">
    <?php
    if($query){
        while($data = mysqli_fetch_assoc($query)) { ?>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for ="exampleFormControlInput1" class="form-label">
                    Nama Mobil
                </label>
                <input type="text" class="form-control" placeholder="BMW I4" name="nama_mobil" value="<?=$data['nama_mobil']?>">
            </div>
            <div class="mb-3">
                <label for ="exampleFormControlInput1" class="form-label">
                    Nama Pemilik
                </label>
                <input type="text" class="form-control" placeholder="DINI - 1202204040" name="pemilik_mobil" value="<?=$data['pemilik_mobil']?>">
            </div>
            <div class="mb-3">
                <label for ="exampleFormControlInput1" class="form-label">
                    Merk
                </label>
                <input type="text" class="form-control" placeholder="BMW" name="merk_mobil" value="<?=$data['merk_mobil']?>">
            </div>
            <div class="mb-3">
                <label for ="exampleFormControlInput1" class="form-label">
                    Tanggal Beli
                </label>
                <input type="text" class="form-control" placeholder="11/12/2022" name="tanggal_beli" value="<?=$data['tanggal_beli']?>">
            </div>
            <div class="mb-3">
                <label for ="exampleFormControlInput1" class="form-label">
                    Deskripsi
                </label>
                <input type="text" class="form-control" placeholder="apa aja deh" name="deskripsi" value="<?=$data['deskripsi']?>">
            </div>
            <?php // <div class="mb-3"><label for ="exampleFormControlInput1" class="form-label">Foto </label><input type="text" class="form-control" placeholder="apa aja deh" name="deskripsi" value="<?=$data['deskripsi']?>"></div>
            <div class="mb-3">
                <label for ="exampleFormControlInput1" class="form-label">
                    Foto
                </label>
                <?php // <input type="text" class="form-control" placeholder="apa aja deh" name="deskripsi" value="<?=$data['deskripsi']?>">
            </div>
            <div class="mb-3">
                <label for ="exampleFormControlInput1" class="form-label">
                    Status Pembayaran
                </label>
                <?php // <input type="text" class="form-control" placeholder="apa aja deh" name="deskripsi" value="<?=$data['deskripsi']?>">
            </div>
            <input type="submit" class="btn btn-primary" value="SIMPAN" name="edit">
        </form>
    <?php }
    }
    if(isset($_POST['edit'])){
        $id = $id;
        $nama_mobil = $_POST['nama_mobil'];
        $pemilik_mobil = $_POST['pemilik_mobil'];
        $merk_mobil = $_POST['merk_mobil'];
        $tanggal_beli = $_POST['tanggal_beli'];
        $deskripsi = $_POST['deskripsi'];
        mysqli_query($connect, "UPDATE show_dini_table set nama_mobil='$nama_mobil' , pemilik_mobil='$pemilik_mobil' , merk_mobil='$merk_mobil' , tanggal_beli='$tanggal_beli' , deskripsi='$deskripsi' WHERE id='$id'");
        header("Location : Read-DINI.php");
    }
    ?>
    </div>
</body>
</html>