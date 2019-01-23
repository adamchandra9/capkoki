<?php  
session_destroy();
$koneksi = new mysqli("localhost","root","","tokoabon");
echo "<script>alert('anda telah logout');</script>";
echo "<script>location='login.php';</script>";
?>
