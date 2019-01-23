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
	<link rel="stylesheet" type="text/css" href="./product.css">
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
        <p class="level-item has-text-centered column">
            <a href="login.php" class="masuk">Masuk</a>
            <a href="daftar.php" class="daftar">Daftar</a>
        </p>
    </nav>
    <div class="columns">
        <p class="moto column has-text-centered">*Kelezatan Abon Tiada Tara</p>
        <p class="column"></p>
        <div class=" column"><p class="green has-text-centered">Telp : 0281-895440</p></div>
    </div>

    
    <div class="navv" >
       <div class="cat">
        <p></p>  
    </div>
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="product.php">Product</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </div>
</div> 

<div class="garis">
    <p>Product</p>
</div>

<section class="sec4">
    <div>
      <h2>Our Product</h2>
      <p>Beberapa produk yang kami sediakan untuk Anda :</p>
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




</section>
</body>
</html>