<?php
session_start();  
$koneksi = new mysqli("localhost","root","","tokoabon");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="./login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- Bulma Version 0.7.2-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
</head>
<body>
	<section class="sec1">
		<center>
			<div class="image image is-128x128">
				<img src="./Logo.png" alt="">
			</div>
			<h2>Masuk akun Anda sekarang</h2>

		</center>

		<center>
			<form method="POST" class="yuh">	
				<input class="imel" type="text" name="email" placeholder="E-mail"><br>
				<input class="pass" type="password" name="password" placeholder="Password"><br>
				<input type="submit" name="masuk" value="Masuk" class="mlebu">
			</form>
		</center>
		<?php 
		if (isset($_POST['masuk'])) 
         {
          $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan =
            '$_POST[email]' AND password_pelanggan = '$_POST[password]'");
          $akunyangcocok = $ambil->num_rows;
          var_dump($akunyangcocok);
          if ($akunyangcocok==1) 
          {
            $_SESSION['pelanggan'] = $ambil->fetch_assoc();
            echo "<div>Login Sukses</div>";
            echo "<meta http-equiv='refresh' content='1;url=index.php'";
          }
          else
          {
            echo "<div>Login Gagal</div>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'";
          }
        }  
		?>

		</section>
	</body>
	</html>