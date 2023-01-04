<?php
session_start();

include('./config/Koneksi.php'); #untuk koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_err = $password_err = $register_err = $nama_err = $password_confirmation_err = $no_hp_err = "";
    #untuk menampung value dari form ke variabel
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = md5($_POST['password']);

    if ($_POST["password"] === $_POST["password_confirmation"]) {
        #untuk memasukkan data ke database
        $sql = "INSERT INTO user_dini (email, nama, no_hp, password) VALUES ('$email','$nama','$no_hp','$password')";
        $sql_cek = "SELECT email FROM user_dini WHERE email = '$email'";
        $cek = $koneksi->query($sql_cek);

        #untuk mengecek data pada database, jika data sudah masuk maka berhasil registrasi
        if (mysqli_query($koneksi, $sql)) {
            header("location:login_DINI.php");
        } else {
            $register_err = "Registrasi Gagal ";
            header("location:register_DINI.php");
        }

        if ($cek->num_rows > 0) {

            #untuk mengecek email, jika email sudah terpakai maka gagal register
            if ($email == $email_cek) {
                $email_err = 'Email has already been registered';
                header("location:register_DINI.php");
            }
        }

        $koneksi->close();
    } else {
        $password_err = "Password don't match";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER - REMEDIAL MODUL 4 WAD_DINI 1202204040 </title>
    <?php include_once('./component/style.php') ?>

</head>

<body>

    <!-- jumbotron -->
    <div class="container">
        <div class="row vh-100 align-items-center">
            <!-- COLOM 1 -->
            <div class="col">
                <img src="./img/elektronik.jpg" style="width: 500px" alt="">
            </div>

            <!-- COLOM 2 -->
            <div class="col">
                <h4> Register </h4>
                <br>
                <?php
                if (!empty($register_err)) {
                    echo '<div class="alert alert-danger">' . $register_err . '</div>';
                }
                ?>
                <form action="register_DINI.php" method="POST">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" required name="email" class="form-control <?php if (!empty($register_err)) {
                                                                                            echo 'is-invalid';
                                                                                        }  ?>">
                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" required name="nama" class="form-control <?php if (!empty($register_err)) {
                                                                                        echo 'is-invalid';
                                                                                    }  ?>">
                        <span class="invalid-feedback"><?php echo $nama_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Nomor Handphone</label>
                        <input type="text" required name="no_hp" class="form-control <?php if (!empty($register_err)) {
                                                                                            echo 'is-invalid';
                                                                                        }  ?>">
                        <span class="invalid-feedback"><?php echo $no_hp_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Kata Sandi</label>
                        <input type="password" required name="password" class="form-control <?php if (!empty($register_err)) {
                                                                                                echo 'is-invalid';
                                                                                            }  ?>">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Kata Sandi</label>
                        <input type="password" required name="password_confirmation" class="form-control <?php if (!empty($register_err)) {
                                                                                                                echo 'is-invalid';
                                                                                                            }  ?>">
                        <span class="invalid-feedback"><?php echo $password_confirmation_err; ?></span>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="register"> Daftar </button>
                    </div>
                    <p> Anda sudah punya akun? <a href="login_DINI.php"> Login</a> </p>
                </form>
            </div>
        </div>
    </div>
    <?php include_once('./component/script.php'); ?>
</body>

</html>