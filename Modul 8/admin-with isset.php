<php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
?>
<center>
<H1><font color='blue'> Selamat anda masuk halaman Administrator</font></H1>
<br>
Silahkan log out dengan klik link<a href='logout1.php'> DI SINI</a>
</center>

<?php
if(!isset($_SESSION['nama'])){
	header("location:tugas_login.php")
	;
}