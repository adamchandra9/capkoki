<h2>Profil</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama Lengkap</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil = $koneksi->query("SELECT * FROM admin WHERE id_admin ='$_GET[id]'"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $pecah['id_admin']; ?></td>
			<td><?php echo $pecah['username']; ?></td>
			<td><?php echo $pecah['password']; ?></td>
			<td><?php echo $pecah['nama_lengkap']; ?></td>
			<td><a href="index.php?halaman=ubahadmin&id=<?php echo $pecah['id_admin'] ?>" class="btn btn-warning">Ubah</a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>