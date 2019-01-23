<h2>Data Admin</h2>

<table class="table table-boardere">
	<thead>
		<th>No</th>
		<th>Username</th>
		<th>Password</th>
		<th>Nama Lengkap</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM admin"); ?>
		<?php while ($pecah=$ambil->fetch_assoc()) {
		?>
		<tr>
			<td><?php echo $nomor ?></td>
			<td><?php echo $pecah['username']; ?></td>
			<td><?php echo $pecah['password'] ; ?></td>
			<td><?php echo $pecah['nama_lengkap']; ?></td>
			<td>
				<a href="index.php?halaman=hapusadmin&id=<?php echo $pecah['id_admin'] ?>" class = "btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="registeration.php" class ="btn btn-primary">Daftar Admin</a>