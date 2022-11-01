<!DOCTYPE html>
<html lang ="en" dir="ltr">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MODUL 2 WAD - Sewa Mobil </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/home.css">
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="DINI_booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>
	
	<?php
        $img_src = [
            "agya.jpg",
			"hrv.png",
            "innova.png"
        ];
    ?>
	
	<br>

	<br>
	<br>
	<div class="container-fluid">
		<center><h2> WELCOME TO TST RENT </h2></center>
        <center><p>Find your best deal, here!</p></center>
		<center><table width="100%"> 
		<form action="DINI_booking.php" method="POST">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-auto">
                    <div class="card">
						<img src="agya.jpg" class="card-img-top" alt=" " width="350" height="250">
                        <div class="card-body text-center">
                        <h5 class="card-title text-left"><b> Toyota Agya</b></h5>
						<p class="text-left"> Rp. 200000/hari </p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item text-primary"> 5 Kursi </li>
							<li class="list-group-item text-primary"> Manual </li>
						</ul>
					</div>
					<div class="card-footer">
						<center><button name="card1" class="btn btn-primary">Book Now</button></center>
					</div>
                </div>

                <div class="col-md-auto">
                    <div class="card">
						<img src="hrv.png" class="card-img-top" alt=" " width="350" height="250">
                        <div class="card-body text-center">
                        <h5 class="card-title text-left"><b> Honda HR-V </b></h5>
						<p class="text-left"> Rp. 350000/hari </p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item text-primary"> 5 Kursi</li>
							<li class="list-group-item text-primary"> Matic </li>
						</ul>
					</div>
					<div class="card-footer">
						<center><button name="card2" class="btn btn-primary">Book Now</button><center>
                    </div>
                </div>

                <div class="col-md-auto">
                    <div class="card">
						<img src="innova.png" class="card-img-top" alt=" " width="300" height="250">
                        <div class="card-body text-center">
                        <h5 class="card-title text-left"><b> Toyota Innova </b></h5>
						<p class="text-left"> Rp. 250000/hari </p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item text-primary"> 7 kursi </li>
							<li class="list-group-item text-primary"> Manual </li>
						</ul>
					</div>
					<div class="card-footer">
						<center><button name="card3" class="btn btn-primary">Book Now</button></center>
                    </div>
                </div>
            </div>
        </form>
	</div>
	<br>
	<center><?php echo "Created by DINI_1202204040"; ?></center>
</body>
</html>