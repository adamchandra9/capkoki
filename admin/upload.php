<?php
//koneksi database
	$koneksi = new mysqli("localhost","root","","tokoabon"); 
	if (isset($_POST['save'])) 
	{
		$name = $_FILES['image']['name'];
		$sementara = $_FILES['image']['tmp_name'];
		$lokasi = "foto_produk/";
		$hasil = move_uploaded_file($sementara, 'foto_produk/'.$name);
		$koneksi->query("INSERT INTO produk
			(nama_produk,harga_produk,berat_produk,foto_produk,deskrpisi_produk)
			VALUES ('$_POST[nama]','$_POST[harga]','$_POST[berat]','$name','$_POST[deskripsi]')");
		if ($hasil) {
			echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
		}
		else {
			echo "gagal upload gambar";
		}
		
	}
?>