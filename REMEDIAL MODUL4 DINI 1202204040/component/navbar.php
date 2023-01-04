<nav class="navbar navbar-expand-lg navbar-light bg-<?php echo $_SESSION['warna_navbar'] ?>">
    <div class="container">
        <a class="navbar-brand text-white" href="index.php"> Home </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['email'])) {
                    ?>
                        <a class="navbar-brand text-white" href="Daftar_Elektronik-DINI.php"> Elektronik </a> <?php } ?>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                </li>
            </ul>
            <?php
            if (!isset($_SESSION['email'])) {
                echo "<a class='navbar-brand text-white' href='Login_DINI.php'> Login </a> <?php } ?> 
                        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                            <span class='navbar-toggler-icon'></span>
                        </button>";
            } else {
            ?>
                <a href="Tambah-DINI.php" class="btn btn-light me-2 btn-sm"> Tambah Data </a>
                <div class="dropdown ">
                    <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION["nama"] ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="./config/logout.php">Logout</a></li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</nav>