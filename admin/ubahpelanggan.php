<h2>Ubah Pelnaggan</h2>
<?php  
$ambil = $koneksi->query("SELECT *FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-grup">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_pelanggan']; ?>">
	</div>
	<div class="form-grup">
		<label>Email</label>
		<input type="email" name="email" class="form-control" value="<?php echo $pecah['email_pelanggan']; ?>">
	</div>
	<div class="form-grup">
		<label>Telepon</label>
		<input type="number" name="telepon" class="form-control" value="<?php echo $pecah['telepon_pelanggan']; ?>">
	</div>
	<div class="form-grup">
		<label>Password</label>
		<input type="password" name="password" class="form-control" value="<?php echo $pecah['password_pelanggan'] ?>">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php  
if (isset($_POST['ubah'])) 
{
	$koneksi->query("UPDATE pelanggan SET nama_pelanggan='$_POST[nama]',email_pelanggan='$_POST[email]',telepon_pelanggan='$_POST[telepon]',password_pelanggan='$_POST[password]' WHERE id_pelanggan='$_GET[id]'");
	echo "<script>alert('data pelanggan telah diubah');</script>";
echo "<script>location='index.php?halaman=pelanggan';</script>";
}
?>