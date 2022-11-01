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
        $no_book = rand();
        $name = $_POST['name'];
        $checkin = $_POST['date']." " . $_POST['mulai'];
        $checkin_dsply = '';
        $durasi = $_POST['durasi'];
        $checkout = '';
        $tipemobil = $_POST['tipemobil'];
        $hp = $_POST['nohp'];
        $tambahan = $_POST['tambahan'];
        $tambahan_dsply = 'no service';
        $total = 0;
        
        if(!empty($checkin)){
            $checkin_dsply = date('d/m/Y H:i:s', strtotime($checkin));     
            $checkout = date('d/m/Y H:i:s', strtotime($checkin) + 60 * 60 * $_POST['durasi']);
        }

    //Total 
    if($tipemobil == 'agya'){
        $total = $durasi*200000;
    } else if($tipemobil == 'hrv'){
        $total = $durasi*350000;
    } else if($tipemobil == 'innova'){
        $total = $durasi*250000;
    }

    //Tambahan
    if (isset($_POST['tambahan'])){
        foreach ($_POST['tambahan'] as $tambahan){
            if ($tambahan == 'health') $total += 50000;
            if ($tambahan == 'supir') $total += 150000;
            if ($tambahan == 'full') $total += 300000;
        }
    }

    if(!empty($tambahan)){
        $tambahan_dsply = '';
        foreach($tambahan as $tmb){
            $tambahan_dsply == "<li> $tmb </li>";
            $tmb++;
        }
    }
    ?>

    <br>
    <div class="container">
        <center><h1 class="text-center"> Terima Kasih <?php echo $name ?> Sudah Booking </h1></center>
        <center><h2 class="text-center"> Silahkan Periksa Detail Reservasi <?php echo $name ?> </h2></center>
        <table class="table" width="1000">
            <thead>
                <tr align ="left">
                    <th scope="col"> No. Booking </th>
                    <th scope="col"> Nama </th>
                    <th scope="col"> Check-in </th>
                    <th scope="col"> Check-out </th>
                    <th scope="col"> Tipe Mobil </th>
                    <th scope="col"> No.HP </th>
                    <th scope="col"> Tambahan Service </th>
                    <th scope="col"> Total </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $no_book?></td>
                    <td><?= $name ?></td>
                    <td><?= $checkin_dsply ?></td>
                    <td><?= $checkout ?></td>
                    <td><?= $tipemobil ?></td>
                    <td><?= $hp ?></td>
                    <td>
                        <ul>
                            <?= $tambahan_dsply ?>
                        </ul>
                    </td>
                    <td>Rp. <?= $total ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="nb-3">
            <div class="d-flex justify-content-center">
                <center><a href="DINI_booking.php" class="btn btn-outline-primary w-100"> Kembali </a></center>
            </div>
        </div>
    </div>
    <br>
    <center><?php echo "Created by DINI_1202204040"; ?></center>
</body>
</html>