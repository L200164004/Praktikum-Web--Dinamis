<html>
<head>
	<title>Data Mahasiswa</title>
</head>

<?php
$koneksi=mysqli_connect('localhost','root','');
$db=mysqli_select_db($koneksi,'informatika');
?>



<body>
<center>
<h3>Masukkan Data Mahasiswa : </h3>
<table border='0' width='30%'>
<form method='POST' action='form.php'>
<tr>
<td width='25%'>NIM</td>
<td width='5%'>:</td>
<td width='65%'> <input type="text" name="nim" size="12"></td></td>
<tr>
<td width='25%'>Nama</td>
<td width='5%'>:</td>
<td width='65%'><input type="text" name="nama" size="30"></td>
</tr>
<tr>
<td width='25%'>Kelas</td>
<td width='5%'>:</td>
<td width='65%'><input type='radio' value='A' checked name='kelas'>A
<input type='radio' value='B' name='kelas'>B
<input type='radio' value='C' name='kelas'>C
</td>
</tr>
<td width='25%'>Alamat</td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='alamat' size='40'></td></tr>
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
$input = "insert into mahasiswa (nim, nama, kelas, alamat)
values ('$nim','$nama','$kelas','$alamat')";
if ($submit) {
	if($nim == ''){
	echo "<center></br>NIM tidak boleh kosong, diisi dulu </center>";
	}elseif($nama == ''){
	echo "<center></br>Nama tidak boleh kosong, diisi dulu </center>";
	}elseif($alamat == ''){
	echo "<center></br>Alamat tidak boleh kosong, diisi dulu </center>";
	}else{
	mysqli_query($koneksi,$input);
	echo"<center></br>Data berhasil dimasukkan </center>";
	}
}
?>
<center>
<hr>
<h3>Data Mahasiswa</h3>
<table border= '1' width = '50%'>
<tr>
<td align='center' width='20%'><b>NIM</b></td>
<td align='center' width='20%'><b>Nama</b></td>
<td align='center' width='20%'><b>Kelas</b></td>
<td align='center' width='20%'><b>Alamat</b></td>
<td align='center' width='20%'><b>Keterangan</b></td>
</tr>

<?php
$cari = 'select * from mahasiswa order by nim';
$hasil_cari = mysqli_query($koneksi,$cari);
while($data = mysqli_fetch_row($hasil_cari)){
echo "
<tr>
<td width = '20%'>$data[0]</td>
<td width = '20%'>$data[1]</td>
<td width = '20%'>$data[2]</td>
<td width = '20%'>$data[3]</td>
<td width = '20%'>
	<a href='update.php?upd=$data[0]'>Ubah</a>
</td>
</tr>";
}
?>

</table>
</center>
</body>
</html>






