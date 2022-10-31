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
    <table width="100%"> 
        <th> 
            <tr><img src="innova_lama.png" width="300" height="150"></tr>
        </th>
        <th> 
            <tr><img src="hrv.png" width="250" height="150"></tr>
        </th>
        <th> 
            <tr><img src="innova_baru.png"></tr>
        </th>
    </table>
</body>
</html>
<?php
session_start();
include "koneksi.php";
?>
<?php include 'menu2.php';?>
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(data/images/pp.jpg);">
	<h2 class="l-text2 t-center">
		Shop
	</h2>
</section>
<section class="instagram p-t-20">
	<div class="sec-title p-b-52 p-l-15 p-r-15">
		<h3 class="m-text5 t-center">
			Produk Yang Ada Di Database Kami !!
		</h3><br>
		<div class="row">
			<?php $ambil = $koneksi->query("SELECT * FROM produk  ORDER BY RAND()");?>
			<?php while ($produk = $ambil->fetch_assoc()){ ?>
				<div class="col-xs-3 col-md-3">
					<div class="thumbnail">
						<div class="hov-img-zoom">
						<a href="detail.php?id=<?php echo $produk['id_produk'];?>"><img width="400"  class="img-responsive" src="foto_produk/<?php echo $produk['foto_produk'];?>" alt=""></a>
						</div>
						<div class="caption" align="center">
							<a href="detail.php?id=<?php echo $produk['id_produk'];?>" style="color: black;"><h3><?php echo $produk['nama_produk'];?></h3></a>
							<h4><b>Rp.<?php echo number_format($produk['harga_produk']);?></b></h4>
							<a href="beli.php?id=<?php echo $produk['id_produk'];?>" class="btn btn-primary">Beli</a>
							<a href="detail.php?id=<?php echo $produk['id_produk'];?>" class="btn btn-default">Detail</a>
						</div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</section>


<?php include 'footer.php'; ?>