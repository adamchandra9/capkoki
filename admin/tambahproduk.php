
<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data" action="upload.php">
	<div class="from-grup">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="from-grup">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="from-grup">
		<label>Berat (Gr)</label>
		<input type="number" class="form-control" name="berat">
	</div>
	<div class="form-grup">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<div class="from-grup">
		<label>Foto</label>
		<input type="file" class="form-control" name="image">
	</div>
	<button class="btn btn-primary" name="save" >Simpan</button>
</form>
