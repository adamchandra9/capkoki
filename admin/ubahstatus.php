<h2>Ubah Detail</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan");
$pecah = $ambil->fetch_assoc();
?>

<form method="post" enctype="mulitipart/from-data">
	<div class="from-grup">
		<label>Nama Pelnaggan</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_pelanggan'] ?>" disabled>
	</div>
	<div class="from-grup">
		<label>Tanggal</label>
		<input type="date" nama="tanggal" class="form-control" value="<?php echo $pecah['tanggal_pembelian']?>" disabled>
	</div>
	<div class="from-grup">
		<label>Status</label>
		<input type="text" name="status" class="form-control" value="<?php echo $pecah['status_pembelian'] ?>">
	</div>
	<div class="from-grup">
		<label>Total</label>
		<input type="number" name="total" class="form-control" value="<?php echo $pecah['total_pembelian'] ?>" disabled>
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php  
if (isset($_POST['ubah'])) 
{
	$koneksi->query("UPDATE pembelian SET status_pembelian='$_POST[status]'WHERE id_pembelian='$_GET[id]'");
	echo "<script>alert('data telah diubah');</script>";
echo "<script>location='index.php?halaman=pembelian';</script>";
}
?>