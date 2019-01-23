<?php 
session_start();
//koneksi database
$koneksi = new mysqli("localhost","root","","tokoabon"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- Bulma Version 0.7.2-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
	<link rel="stylesheet" type="text/css" href="./style_1.css">
</head>
<body>

	<nav class="level columns">
		<div class="level-item has-text-centered column ">
			<img src="./logo.png" alt="" class="logo">
		</div>



		<div class="level-item has-text-centered column">
			<form>
				<input class="search" type="text" placeholder="Cari..." required>	
				<input class="btn" type="submit" value="Cari">		
			</form>
		</div>
		<p class="mlebuu">
			<a href="login.php" class="masuk">Masuk</a>
			<a href="daftar.php" class="daftar">Daftar</a>
      <div class="troli image is-48x48">
        <img src="./cartt.png" class=""> 
      </div>
    </p>
  </nav>






  <div class="columns">
    <p class="moto column has-text-centered">*Kelezatan Abon Tiada Tara</p>
    <p class="column"></p>
    <div class=" column"><p class="green has-text-centered">Telp : 0281-895440</p></div>
  </div>

  <section id="category">
   <div class="columns">
    <div class=" column orange is-2">
     <p>ALL CATEGORY</p>
   </div>

   <div class="column black">
     <a href="index.php">Home</a>
     <a href="product.php">Product</a>
     <a href="about.php">About</a>
     <a href="contact.php">Contact</a>
   </div>
 </div>

 <div class="columns bawah">
  <div class="column is-2">
   <ul>
    <li><a href="product.php">Abon</a><br>
      <hr size="2px" width="75%"><br></li>
      <li><a href="product.php">Bumbu Pecel</a><br>
       <hr size="2px" width="75%"><br></li>
       <li><a href="product.php">Keripik</a><br></li>
     </ul>
   </div>
   <div class="column is-7">
     <img src="./sample.jpg" alt="" class="is-5by3">
   </div>

   <div class="column is-3">
    <div class="coba_1">
      <div class="coba"><a href="product.php" class="klik2 ">View More</a></div>
      <img src="./kripik.jpg" alt="" class="gmbr1 ">
    </div>
    
    <p class="jarak"></p>
    <div class="coba_1">
      <div class="coba"><a href="product.php" class="klik2 ">View More</a></div>
      <img src="./kripik.jpg" alt="" class="gmbr1 ">
    </div>
  </div>
</div>
</div>
</section>

<section class="columns sec3">
  <div class="column has-text-centered">
   <img src="./logoabon.png" alt="" class="logo3">
 </div>
 <div class="column about">
   <h1>About Us Food Restaurant</h1>
   <br>
   <p>Cap KOKI merupakan foodstartup dari Purbalingga yang bergerak di  bidang kuliner terutama makanan siap saji dengan produk unggulan  abon sapi. Berawal dari mencoba membuat menu olahan daging sapi  yang cocok untuk anak balita, Ibu Hj. Pujiati pada tahun 1968 mulai  memproduksi abon sapi dan terus berkembang sampai saat ini.</p>
   <br>
   <p>Mengangkat kearifan lokal Purbalingga yang kaya akan hasil pertanian  dan peternakan. Cap KOKI memproduksi olahan hasil peternakan dan  pertanian berkualitas tinggi dari petani & peternak lokal Purbalingga  yang dipelihara secara organik. Bahan baku yang segar berpadu dengan  bumbu rempah alami pilihan menciptakan perpaduan sensansi kerenyahan  dan keunikan rasa gurih, pedas dan manis. Cap KOKI Purbalingga memiliki  produk unggulan yaitu Abon Sapi dan Abon Kepala. </p>
   <br>
   <a href="about.php" class="tentang" >View More</a>
 </div>
</section>

<section class="sec4">
  <div>
    <center><h2>Our Product</h2>
      <hr size="2px" width="75%">
    </center>
    <div class="menu">
      <center>
        <a href="product.php">Abon</a>
        <label>//</label>
        <a href="product.php">Bumbu Pecel</a>
        <label>//</label>
        <a href="product.php">Kripik</a>
      </center>
    </div>
  </div>
  <div class="pesan">
    <div class="columns is-multiline">
      <?php $ambil = $koneksi->query("SELECT * FROM produk");?>
      <?php while($perproduk = $ambil->fetch_assoc()){ ?>
      <div class="column is-one-quarter">
        <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="admin/foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="Placeholder image">
                  </figure>
                </div>
          <div class="muncul card-content">
            <div class="media">
              <div class="media-content has-text-centered">
                <p class="title is-6"><?php echo $perproduk['nama_produk']; ?></p>
              </div>
            </div>

            <div class="muncul content has-text-centered">
              <label>Rp.<?php echo number_format($perproduk['harga_produk']); ?></label>
              <div class="hilang">
                <a href="cart.php?id=<?php echo $perproduk['id_produk']; ?>" class="daftar">Add To Cart <img src="./" alt=""></a>
                <a href="penjualan.php"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<section class="sec6">
 <div class="columns">
  <div class="column ">
   <img src="./logo.png" alt="" class="logof"><br>
   <span>Informasi Tentang Kami   :
   </span>
   <p>Jl. MT Haryono No. 20 Purbalingga Jawa Tengah</p>
   <p> 081331156650 / 085774129028</p>
   <p>widyatmoko1973@gmail.com</p>
 </div>
 <div class="column has-text-centered">
   <h1>FOLLOW US :</h1>
 </div>
</div>
</section>
</body>
</html>