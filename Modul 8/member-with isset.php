<php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
echo " anda berhasil login sebagai ".$_SESSION['username']." dan anda 
terdaftar sebagai ".$_SESSION['status'];
?>
<center>
<H1> Selamat anda masuk halaman Member</H1>
<br>
Silahkan log out dengan klik link<a href='logout1.php'> DI SINI</a>
</center>

<?php
if(!isset($_SESSION['nama'])){
	header("location:login.php")
	;
}