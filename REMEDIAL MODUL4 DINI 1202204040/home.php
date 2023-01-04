<?php
$id = explode('/', $_SERVER['REQUEST_URI']);
$url = end($id);

if ($url == 'home.php') {
    header('location:index.php');
}

?>
<div class="container">
    <div class="row vh-100 align-items-center">
        <!-- COLOM 1 -->
        <div class="col">
            <h1><strong>Selamat Datang Di Toko Dinn Elektronik </strong></h1>
            <br>
            <p> Disini menjual alat elektronik, dan yang pastinya 100% asli. </p>
            <!-- btn -->
            <strong><a href="Daftar_Elektronik-DINI.php" class="btn btn-primary fw-light px-4 py-2"> Elektronik </a></strong>
            <!-- end btn -->
            <div class="d-flex justify-content-start">
                <div class="row mt-5">
                    <div class="col">
                        <p> DINI_1202204040 </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- COLOM 2 -->
        <div class="col">
            <img src="./img/elektronik.jpg" style="width: 500px" alt="">
        </div>
    </div>
</div>