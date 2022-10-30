<!DOCTYPE html>
<html lang ="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> MODUL 2 WAD - Sewa Mobil </title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="MODUL2_DINI.php">
</head>
<body>
    <div class="container">
        <h1 class="text center"> YUUUK RENTAL SEKARANG YUUUK! </h1>
        <form action="DINI_mybooking.php" method="GET">
            <div class="nb-3">
                <label for="name" class="form tabel"> Nama </label>
                <input type="text" class="form-control" id="name" name="name" placeholde="NAMA_NIM">
            <div>
            <div class="nb-3">
                <label for="date" class="form tabel"> Tanggal Rental </label>
                <input type="date" class="form-control" id="date" name="date">
            <div>
                ]<div class="nb-3">
                <label for="number" class="form tabel"> Mulai Jam </label>
                <input type="text" class="form-control" id="number" name="mulai">
            <div>
            <div class="nb-3">
                <label for="number" class="form tabel"> Durasi (Hari) </label>
                <input type="text" class="form-control" id="number" name="durasi">
            <div>
            <div class="nb-3">
                <label for="mobil" class="form tabel"> Tipe Mobil </label>
                <select name="mobil" id="" cllass="form-select">
                    <option selected dsable> Pilih Tipe Mobil </option>
                    <option value="innova1"> Toyota Innova Lama </option>
                    <option value="innova2"> Toyota Innova Baru </option>
                    <option value="hr-v"> Honda HR-V </option>
                    <option value="agya"> Toyota Agya </option>
                </select>
            <div>
            <div class="nb-3">
                <label for="number" class="form tabel"> No. HP </label>
                <input type="text" class="form-control" id="number" name="nohp">
            <div>
            <div class="nb-3">
                <label for="servis"> Tambahan Service? </label>
                <div class="form-check">
                    <label class="form=check-label"> Health Protocol / Rp25.000</label>
                    <input type="radio" class="form=check-input" value="health" name="tambahan">
                </div>
                <div class="form-check">
                    <label class="form=check-label"> Supir / Rp100.000</label>
                    <input type="radio" class="form=check-input" value="supir" name="tambahan">
                </div>
                <div class="form-check">
                    <label class="form=check-label"> Full filed / Rp250.000</label>
                    <input type="radio" class="form=check-input" value="full" name="tambahan">
                </div>
            </div>
            <div class="nb-3">
                <div class="d-flex justify-cotent-center">
                    <button href="DINI_mybooking" class="btn btn-primary" type="submit"> Booking </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>