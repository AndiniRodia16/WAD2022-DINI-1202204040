<<<<<<< HEAD
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "modul3";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

=======
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "modul3";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

>>>>>>> 2200285c302e2c39d4a1ac1cff6fb8864eae0294
?>