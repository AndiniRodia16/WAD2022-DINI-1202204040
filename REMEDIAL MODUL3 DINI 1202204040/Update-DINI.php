<DOCTYPE html>
    <html lang="eng">

    <head>
        <meta>
        <title> EDIT REMEDIAL MODUL 3 WAD_DINI 1202204040 </title>
        <link>
    </head>
    <?php
    include('Koneksi.php');
    $id = 1;
    $query = new mysqli($connect, "SELECT * FROM elektronik_dini_table WHERE id = '$id'");
    ?>

    <body>
        <div class="container mt-5" style="width:500px">
            <?php
            if ($query) {
                while ($data = mysqli_fetch_assoc($query)) { ?>
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">
                                Nama Produk
                            </label>
                            <input type="text" class="form-control" placeholder="BMW I4" name="nama_mobil" value="<?= $data['nama_mobil'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">
                                Harga
                            </label>
                            <input type="int" class="form-control" placeholder="DINI - 1202204040" name="pemilik_mobil" value="<?= $data['pemilik_mobil'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">
                                Kategori
                            </label>
                            <input type="text" class="form-control" placeholder="BMW" name="merk_mobil" value="<?= $data['merk_mobil'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">
                                Deskripsi
                            </label>
                            <input type="text" class="form-control" placeholder="deskripsi tentang produk" name="deskripsi" value="<?= $data['deskripsi'] ?>">
                        </div>
                        <?php // <div class="mb-3"><label for ="exampleFormControlInput1" class="form-label">Foto </label><input type="text" class="form-control" placeholder="apa aja deh" name="deskripsi" value="<?=$data['deskripsi']
                        ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">
                Foto
            </label>
            <?php 
            ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">
                Metode Pembayaran
            </label>
            <?php 
            ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="SIMPAN" name="edit">
        </form>
<?php }
            }
            if (isset($_POST['edit'])) {
                $id = $id;
                $nama_barang = $_POST['nama_barang'];
                $harga_barang = $_POST['harga_barang'];
                $kategori = $_POST['kategori'];
                $deskripsi = $_POST['deskripsi'];
                mysqli_query($connect, "UPDATE elektronik_dini_table set nama_barang='$nama_barang' , harga_barang='$harga_barang' , kategori='$kategori' , deskripsi='$deskripsi' WHERE id='$id'");
                header("Location : Read-DINI.php");
            }
?>
</div>
    </body>

    </html>