<?php
$koneksi=mysqli_connect('localhost','root','','informatika');
//$koneksi=mysqli_connect('localhost','root','');
//$db=mysqli_select_db($koneksi,'informatika');

$upd = $_GET['upd'];
$sql = "select * from mahasiswa where nim='$upd'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
?>

<body>
<center>
<h3>Masukkan Data Mahasiswa : </h3>
<table border='0' width='30%'>
<form method='POST' name='update.php' action='<?php $_SERVER['PHP_SELF'];?>'>
<tr>
<td width='25%'>NIM</td>
<td width='5%'>:</td>
<td width='65%'> <input type="text" name="nim" size="12" value='<?php echo $data['NIM']; ?>'></td></td>
<tr>
<td width='25%'>Nama</td>
<td width='5%'>:</td>
<td width='65%'><input type="text" name="nama" size="30" value='<?php echo $data['Nama']; ?>'></td>
</tr>
<tr>
<td width='25%'>Kelas </td>
<td width='5%'>:</td>
<td width='65%'><input type='radio' name='kelas' value='A' <?php if($data['Kelas']=="A"){ ?> <?php echo "checked";?> <?php } ?>>A
<input type='radio' value='B' name='kelas' <?php if($data['Kelas']=="B"){ ?> <?php echo "checked";?> <?php } ?>>B
<input type='radio' value='C' name='kelas' <?php if($data['Kelas']=="C"){ ?> <?php echo "checked";?> <?php } ?>>C
</td>
</tr>
<td width='25%'>Alamat</td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='alamat' size='40'value='<?php echo $data['Alamat']; ?>'></td></tr>
</table>
<input type='submit' value='Masukan' name='submit'>
</form>
</center>

<?php
error_reporting(E_ALL ^ E_NOTICE);
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$alamat = $_POST ['alamat'];
$submit = $_POST ['submit'];
if($submit){
	$sql = "update mahasiswa set NIM='$nim', Nama='$nama', Kelas='$kelas', Alamat='$alamat' where NIM='$upd' ";
	$query = mysqli_query($koneksi,$sql);
	if($query){
		?>
	<script>
		alert("Data Berhasil Diubah");
		document.location='form.php';
	</script>
		<?php
	}
}
?>
