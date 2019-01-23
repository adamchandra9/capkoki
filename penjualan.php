<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="./style_p.css">
</head>
<body>
	<div class="kiri">
		<div class="kotak ">
			<div class="atas">
				<p>Data Pembeli</p>
			</div>
			<div class="kotak2">
				<div class="atas2">
					<img src="moko.jpg" alt="" class="propil">
					<label>Akhdan</label>
				</div>	
				<hr size="2px" width="100%" color="#d7d7d7">
				<div class="isi1">
					<?php 
					session_start();

					echo "<pre>";
					print_r($_SESSION['keranjang']);
					echo "</pre>"; 
					?>
				</div>
			</div>
		</div>
		<div class="kotak ">
			<div class="atas">
				<p>Detail Belanja</p>
			</div>
			<div class="kotak2">
				<div class="atas2">
					<img src="moko.jpg" alt="" class="propil">
					<label>Akhdan</label>
				</div>
				<hr size="2px" width="100%" color="#d7d7d7">
				<div class="isi1">
					<div class="ki">
						<img src="./moko.jpg" alt="" height="70px" width="70px">
						<span>Abon Rasa Ayam</span>
						<br>
						<span><input type="text" name=""></span>
					</div>
					<div class="ka">
						<p>Rp.100000000</p>
					</div>
				</div>
				<div class="isi2">
					<div class="">
						<p>Kurir</p>
						<input type="text" name="">
						<p>Catatan</p>
						<textarea name=""></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="kanan">
		<div class="kotak">
			<div class="atas">
				<p>Ringkasan Pembayaran</p>
			</div>
			<div class="">
				<div class="total">
					<p>Total Harga Barang</p>
					<p>Biaya Kirim</p>
				</div>
			</div>
			<div>
				<div class="total2">
					<p>Rp.100000000</p>
					<p>Rp.100000000</p>
				</div>
			</div>
			<hr class="garis" size="2px" width="85%" color="#d7d7d7">
			<div class="bawah">
				<div class="">
					<div class="b2">
						<p>Total Pembayaran</p>
					</div>
				</div>
				<div class="">
					<div class="b1">
						<p>Rp.10000000000</p>
					</div>
				</div>
			</div>
			<br>
			<center>
				<div class="tombol">
					<a href="">Pilih Metode Pembayaran</a>
				</div>
			</center>
			<div class="tombol">
				<a href="index.php">Kembali</a>
			</div>
		</div>
	</div>


</body>
</html>