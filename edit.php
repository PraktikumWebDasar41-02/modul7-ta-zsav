<?php
include 'koneksi.php';
$nim = $_GET['data'];
$mahasiswa=mysqli_query($db, "SELECT * FROM data WHERE nim ='$nim'");
$row = mysqli_fetch_array($mahasiswa);
$fakultas = array('Ilmu Terapan','Teknik Elektro','Industri Kreatif','Ekonomi Bisnis');
function active_radio_button($value,$input){
	$result = $value==$input?'checked':'';
	return $result;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
</head>
<body>
	<form method="post">
		<center>
		<table >
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Tanggal lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td><select name="jk">
					<option value="laki-laki">Laki-laki</option>
					<option value="perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Program studi</td>
				<td>:</td>
				<td><select name="prodi">
					<option value="Manajemen Informatika">Manajemen Informatika</option>
					<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
					<option value="Teknik Elektro">Teknik Elektro</option>
					<option value="Administrasi Bisnis">Administrasi Bisnis</option>
					<option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
					</select>
			</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><input type="radio" name="fakultas" value="Ilmu Terapan">Ilmu Terapan</td>
					<tr>
					<td></td>
					<td></td>
					<td><input type="radio" name="fakultas" value="Teknik Elektro">Teknik Elektro</td>
					</tr>
					<tr>
					<td></td>
					<td></td>
					<td><input type="radio" name="fakultas" value="Industri Kreatif">Industri Kreatif</td>
					</tr>
					<tr>
					<td></td>
					<td></td>
					<td><input type="radio" name="fakultas" value="Ekonomi Bisnis">Ekonomi Bisnis</td>
					</tr>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>Moto hidup</td>
				<td>:</td>
				<td><input type="textarea" name="moto" width="20" height="20"></td>
			</tr>
			<tr>
				<td><a href="tampil.php">Cek data</a></td>
				<td colspan="2" align="right"><input type="submit" name="submit"></td>
			</tr>
		</table>
		</center>
	</form>
</body>
</html>
