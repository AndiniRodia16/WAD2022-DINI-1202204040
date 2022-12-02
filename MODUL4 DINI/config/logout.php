<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['loggedin']);
session_destroy();
header("Location:../index.php");
