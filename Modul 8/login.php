<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
mysql_connect('localhost','root','');
mysql_select_db('informatika');
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$submit = $_POST['submit'];
if ($submit){
	$sql = "select * from user where Username = '$Username' and Password = '$Password'";
	$query = mysql_query($sql);
	$row = mysql_fetch_array($query);
	if($row['Username'] !=""){
	// berhasil login
	$_SESSION['Username']=$row['Username'];
	$_SESSION['Status']=$row['Status'];
	?>
	<script language script='Javascript'>
	alert ('anda login sebagai <?php echo $row['Username']; ?>');
	document.location='hasillogin.php';
	</script>
	<?php
	}else {
	//gagal login
	?>
	<script language script='Javascript'>
	alert ('Gagal login');
	document.location='login.php';
	</script>
	<?php
	}
	}
	?>
	<form method='post' action='login.php'>
	<p align='center'>
	Username : <input type='text' name='Username'><br>
	Password : <input type='password' name='Password'><br>
	<input type='submit' name='submit' value='submit'>
	</p>
	</form>
	