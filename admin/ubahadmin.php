<h2>Ubah Pelnaggan</h2>
<?php  
$ambil = $koneksi->query("SELECT *FROM admin WHERE id_admin ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-grup">
		<label>Username</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['username']; ?>">
	</div>
	<div class="form-grup">
		<label>Password</label>
		<input type="password" name="password" class="form-control" value="<?php echo $pecah['password'] ?>">
	</div>
	<div class="form-grup">
		<label>Nama Lengkap</label>
		<input type="text" name="namalengkap" class="form-control" value="<?php echo $pecah['nama_lengkap'] ?>">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php  
if (isset($_POST['ubah'])) 
{
	$koneksi->query("UPDATE admin SET username='$_POST[username]',password_pelanggan='$_POST[password]',nama_lengkap='$_POST[namalengkap]' WHERE id_admin='$_GET[id]'");
	echo "<script>alert('data admin telah diubah');</script>";
	echo "<script>location='index.php?halaman=admin';</script>";
}
?>