<?php session_start(); ?>

<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Register - MODUL 4 WAD_DINI 1202204040 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <?php include('Koneksi.php'); ?>
  
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
                <h4> Register </h4>
                <br>
                <form action="home.php" method="POST">
                <div class="form-goup">
                    Email
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    Nama
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    Nomor Handphone
                    <input type="number" class="form-control" name="no_hp">
                </div>
                <div class="form-group">
                    Kata Sandi
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    Konfirmasi Kata Sandi
                    <input type="password" class="form-control" name="password">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Daftar"></input>
                </div>
                <p> Anda sudah punya akun? <a href="login_DINI.php"> Login</a> </p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

<?php include('Koneksi.php'); #untuk koneksi ke database

#untuk menampung value dari form ke variabel
$email = $_POST['email'];
$nama = $_POST['username'];
$nohp = $_POST['nohp'];
$password = $_POST['password'];

#untuk memasukkan data ke database
$sql = "INSERT INTO login(email, username, nohp, password) VALUES ('$email','$username','$nohp','$password')";
$sql_cek = "SELECT email FROM login WHERE email = '$email'";
$cek = $koneksi -> query($sql_cek);

#untuk mengecek data pada database, jika data sudah masuk maka berhasil registrasi
if(mysqqli_query($koneksi, $sql)){
    session_start();
    $_SESSION['register'] = 'berhasil';
    header("location:login_DINI.php");
} else{
    header("location:register_DINI.php");
}

if($cek -> num_rows > 0){
    session_start();

    while($row = $cek ->fetch_assoc()){
        $email = $_POST['email'];
        $email_cek = $row['email'];
        $username = $row['username'];
        $id = $row['id'];
    }

    #untuk mengecek email, jika email sudah terpakai maka gagal register
    if($email == $email_cek){
        $_SESSION['register'] = 'gagal';
        header("location:register_DINI.php");
    }
}

$koneksi -> close();

?>