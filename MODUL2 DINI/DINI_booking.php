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
                    <a class="nav-link" href="DINI_home.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""> Booking <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
        $method_selected = '';
        $image_selected = '';
        $car1 = isset($_POST['card1']);
        $car2 = isset($_POST['card2']);
        $car3 = isset($_POST['card3']);
        $img_src = [
            "agya.jpg",
			"hrv.png",
            "innova.png"
        ];

        // Booking Car
        if ($car1) {
            $method_selected = '
                <select class="custom-select" name="tipemobil" disabled>
                <option value="agya"> Toyota Agya </option>
                <input type="hidden" name="tipemobil" value="agya">
                </select>';
            $image_selected = $img_src[0];
        } else if ($car2){
            $method_selected = '
                <select class="custom-select" name="tipemobil" disabled>
                <option value="hrv"> Honda HR-V </option>
                <input type="hidden" name="tipemobil" value="hrv">
                </select>';
            $image_selected = $img_src[1];
        }else if ($car3){
            $method_selected = '
                <select class="custom-select" name="tipemobil" disabled>
                <option value="innova"> Toyota Innova </option>
                <input type="hidden" name="tipemobil" value="innova">
                </select>';
            $image_selected = $img_src[2];
        //The other method
        }else {
            $method_selected = '
                <select class="custom-select" name="tipemobil">
                <option value="agya"> Toyota Agya </option>
                <option value="hrv"> Honda HR-V </option>
                <option value="innova"> Toyota Innova </option>
                </select>';
            $image_selected = $img_src[0];
        }
    ?>

    <br>

	<br>
	<br>
    <div class="container-fluid">
        <center><h3> YUUUK RENTAL SEKARANG YUUUK! </h3></center><br>

        <div class="row justify-content-center align-content-center">
        <!-- Left -->
        <div class="col-md-4">
            <img src="hrv.png" class="image-preview" alt=" Preview Car" width="350" height="250">
        </div>
        
        <!-- Right -->   
        <div class="col-md-6"> 
        <form action="DINI_mybooking.php" method="POST">
            <div class="form-goup">
                Nama 
                <input type="text" class="form-control" name="name" value="DINI_1202204040">
            </div>
            <div class="form-group">
                Tanggal Rental
                <input type="date" class="form-control" name="date">
            </div>
            <div class="form-group">
                Mulai Jam
                <input type="time" class="form-control" name="mulai">
            </div>
            <div class="form-group">
                Durasi (Hari)
                <input type="number" class="form-control" name="durasi" aria-describedby="dur_info">
            </div>
            <div class="form-group">
                Tipe Mobil
                <?=$method_selected?>
            </div>
            <div class="form-group">
                No. HP </label>
                <input type="number" class="form-control" name="nohp">
                <br>
            <div class="form-group">
                Tambahan Service
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="health" name="tambahan[]"
                        id="tambah_1">
                    Health Protocol / Rp50.000 
                    <br>
                    <input type="checkbox" class="form-check-input" value="supir" name="tambahan[]"
                        id="tambah_2">
                    Supir / Rp150.000 
                    <br>
                    <input type="checkbox" class="form-check-input" value="full" name="tambahan[]"
                        id="tambah_3">
                    Full filed / Rp300.000
                    <br>
                </div>
            </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success btn-block" value="Book"></input>
            </div>
        </form>
        </div>
        </div>
    </div>
    <br>
    <center><?php echo "Created by DINI_1202204040"; ?></center>
</body>
</html>