<?php
require_once './config/Koneksi.php';

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}


$email = $password = "";
$email_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = md5($_POST["password"]);
    }

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {


        $user = mysqli_query($koneksi, "SELECT * FROM user_dini where email='$email' and password='$password'");
        $chek = mysqli_num_rows($user);
        if ($chek > 0) {
            header("location:index.php");
            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $email;
            $_SESSION["nama"] = $user->fetch_object()->nama;
        } else {
            $login_err = 'Email or Password is invalid';
        }
    }

    // Close connection
    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - MODUL 4 WAD_DINI 1202204040 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body class="wrapper">

    <!-- jumbotron -->
    <div class="container">

        <div class="row vh-100 align-items-center">
            <!-- COLOM 1 -->
            <div class="col">
                <img src="img/pajero.jpg" style="width: 500px" alt="">
            </div>

            <!-- COLOM 2 -->
            <div class="col">
                <h4> Login </h4>
                <br>

                <?php
                if (!empty($login_err)) {
                    echo '<div class="alert alert-danger">' . $login_err . '</div>';
                }
                ?>
                <form action="login_DINI.php" method="POST">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control <?php if (!empty($login_err)) {
                                                                                    echo 'is-invalid';
                                                                                }  ?>" value="<?php echo $email; ?>">
                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control <?php if (!empty($password_err)) {
                                                                                        echo 'is-invalid';
                                                                                    }  ?>">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" value="remember">
                        Remember Me
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Login"></input>
                    </div>
                    <p> Anda belum punya akun? <a href="register_DINI.php"> Daftar</a> </p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>