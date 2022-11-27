<?php
if (!isset($_SESSION)){
    session_start();
}
require 'Koneksi.php';
?>

<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Register - MODUL 4 WAD_DINI 1202204040 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <?php if (isset($_SESSION['message'])) : ?>
    <div class="alert alert-succes alert-dismissible fade show fade in" role="alert">
        <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
        unset($_SESSION['message']);
  endif; ?>
  <body>

    <!-- end navbar -->
    <!-- jumbotron -->
    <div class="container p-5">
        <div class="row vh-100 align-items-center">
            <!-- COLOM 1 -->
            <div class="col">
                <img src="img/pajero.jpg" style="width: 500px" alt="">
            </div>

            <!-- COLOM 2 -->
            <div class="col">
                <h4> Login </h4>
                <br>
                <form action="home.php" method="POST">
                <div class="form-goup">
                    Email
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    Kata Sandi
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="remember">
                    Remember Me
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Login"></input>
                </div>
                <p> Anda belum punya akun? <a href="register_DINI.php"> Daftar</a> </p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if (!isset($_SESSION)) {
    session_start();
}
require 'Koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$dt_username = "SELECT * FROM login WHERE username='$username'";
$executeQuery = mysqli_query($koneksi, $dt_usernamr);

if (mysqli_num_rows($executeQuery) == 1) {
    $result = mysqli_fetch_assoc($executeQuery);

    if(password_verify($password, $result['password'])){
        $_SESSION['username'] = $result['usernamr'];
        $_SESSION['message'] = 'Anda berhasil login !';
        header('location:login_DINI.php');
        exit();
    } else{
        $_SESSION['message-error'] = 'Password Anda salah, Silahkan coba login lagi !';
        header('location:home.php');
        exit();
    }
}
$_SESSION['message-error'] = 'Anda Gagal login !';
header('location:home.php');
exit();