<?php
include "1.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<tr>
			<td>Nama</td>
			<TD><input type="text" name="nama"><br></TD>
		</tr>
		<TR>
			<td>NIM</td>
			<td><input type="text" name="nim"><br></td>
		</TR>
		<tr>
			<td>tanggal lahir</td>
			<td><input type="date" name="tgl_lahir"><br></td>
		</tr>
		<tr>
			<td>Jenis kelamin</td>
			<td><select name="jk">
				<option value="jkp">Pria</option>
				<option value="jkw">wanita</option>
				</select><br></td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>
				<select name="ps">
					<option value="MI">Manajemen Informatika</option>
					<option value="IF">Informatika</option>
					<option value="DKV">DKV</option>
				</select><br>
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><input type="radio" name="fakultas">FIT</td>
			<td><input type="radio" name="fakultas">FKB</td>
			<td><input type="radio" name="fakultas">FEB</td><br>
		</tr>
		<tr>
			<td>Asal</td>
			<td><input type="text" name="asal"></td><br>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td><input type="text" name="moto_hidup"><br></td>
		</tr>
		<tr>
			<td><input type="submit" name="kirim"><a href="tabel.php">view</a></td>
		</tr>
	</form>
</body>
</html>
<?php
include "1.php";
if (isset($_POST['kirim'])) {
	$nama = $_POST['nama'];
	if (is_numeric($_POST['nim'])) {
	$nim = $_POST['nim'];
	}
	$tgl_Lahir = $_POST['tgl_lahir'];
	$jeniskelamin = $_POST['jk'];
	$Program = $_POST['ps'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto_hidup = $_POST['moto_hidup'];
if (isset($nim)) {
$que =mysqli_query($con,"INSERT INTO `data`(`Nama`,`nim`,`Tanggal_lahir`,`Jenis_kelamin`,`Program_studi`,`Fakultas`,`Asal`,`Moto_hidup`)VALUES('$nama','$nim','$tgl_lahir','$jk','$ps','$fakultas','$asal','$moto_hidup')");
	
	if ($que) {
		echo "<h2>berhasil</h2>";
	}
	else{
		echo "gagal";
	}
}
}