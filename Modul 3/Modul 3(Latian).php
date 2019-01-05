<html> 
	<head>
		<title>Latihan</title> 
	</head> 
	<body> 
		<H1>Program Penjumlahan</H1> 
		<form method='POST' action=''> 
		<p>Bilangan A : <input type='integer' name='1' size='10'></p> 
		<p>Bilangan B : <input type='integer' name='2' size='10'></p> 
		<p><input type='submit' value='Jumlah' name='submit'></p> 
		</form> 
		<?php 
		error_reporting (E_ALL ^ E_NOTICE); 
		$submit = $_POST['submit'];  

		echo "<br>Nilai A adalah: $_POST[1]";
		echo "<br>Nilai B adalah: $_POST[2]";
		if($submit){ 
			$jumlah=$_POST[1]+$_POST[2];
			echo"</br>Penjumlahan dari A $nama dan B $email adalah $jumlah"; 
		}
		?> 
	</body> 
</html>