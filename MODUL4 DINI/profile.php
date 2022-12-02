<?php
include_once('./config/Koneksi.php');

session_start();

if (!isset($_SESSION["loggedin"])) {
    header("location: index.php");
    exit;
}

$user = "SELECT * FROM user_dini WHERE email = '" . $_SESSION['email'] . "'";

$result = mysqli_query($koneksi, $user);
error_reporting(0);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "UPDATE user_dini SET nama = '" . $_POST['nama'] . "', no_hp = '" . $_POST['no_hp'] . "' WHERE email = '" . $_SESSION['email'] . "'";

    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "<script>alert('Data Berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='1 url=profile.php'>";
    } else {
        echo "<script>alert('Something went wrong, Data Gagal dibuah')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    }

    if (isset($_POST['password']) && $_POST['password'] != '') {
        if ($_POST['password'] === $_POST['cpassword']) {
            $update = mysqli_query($koneksi, "UPDATE user_dini SET password = '" . md5($_POST['password']) . "' WHERE email = '" . $_SESSION['email'] . "'");

            if ($update) {
                echo "<script>alert('Data Berhasil diubah')</script>";
                echo "<meta http-equiv='refresh' content='1 url=profile.php'>";
            } else {
                echo "<script>alert('Something went wrong, Data Gagal dibuah')</script>";
                echo "<meta http-equiv='refresh' content='1 url=index.php'>";
            }
        }
    }

    $_SESSION['warna_navbar'] = $_POST['warna_navbar'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - MODUL 4 WAD_DINI 1202204040</title>
    <?php include_once('./component/style.php') ?>
</head>

<body>
    <?php include('./component/navbar.php'); ?>
    <div class="container mt-3">
        <!-- title -->
        <h2 class="fw-bold text-center"> Profile </h2>
        <!-- end title -->
        <hr />
        <!-- form -->
        <div class="container mt-10" width="100%">
            <form action="profile.php" method="POST">
                <?php while ($user = mysqli_fetch_array($result)) {

                ?>
                    <div class="form-group row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="email" value="<?php echo $user['email'] ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" required name="nama" class="form-control" value="<?php echo $user['nama'] ?>" id="nama" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Handphone</label>
                        <div class="col-sm-10">
                            <input type="text" required name="no_hp" class="form-control" value="<?php echo $user['no_hp'] ?>" id="no_hp" placeholder="No Handphone">
                        </div>
                    </div>
                    <hr>

                <?php }; ?>
                <div class="form-group row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="cpassword" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-10 ">
                        <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Konfirmasi Password">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="warna_navbar" class="col-sm-2 col-form-label">Warna Navbar</label>
                    <div class="col-sm-10 ">
                        <select name="warna_navbar" id="warna_navbar" class="form-control">
                            <option value="primary" <?php echo $_SESSION['warna_navbar'] == 'primary' ? 'selected' : '' ?>>Blue</option>
                            <option value="danger" <?php echo $_SESSION['warna_navbar'] == 'danger' ? 'selected' : '' ?>>Merah</option>
                            <option value="dark" <?php echo $_SESSION['warna_navbar'] == 'dark' ? 'selected' : '' ?>>Dark</option>
                            <option value="secondary" <?php echo $_SESSION['warna_navbar'] == 'secondary' ? 'selected' : '' ?>>White</option>
                            <option value="success" <?php echo $_SESSION['warna_navbar'] == 'success' ? 'selected' : '' ?>>Green</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify">
                    <div class="col-md-6"></div>
                    <div class="col-md-4 ">
                        <button type="submit" class="btn btn-primary center-block" name="btn_simpan" value="submit"> Update </button>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </form>
        </div>
        <!-- end form -->
    </div>
    <?php include_once('./component/script.php'); ?>

</body>

</html>