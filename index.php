<?php  
	include 'database/koneksi.php'; //untuk menghubungkan koneksi ke database

	if (isset($_POST['simpan'])) {
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telepon = $_POST['telepon'];

		$qSiswa = "INSERT INTO `siswa`(`nama`, `alamat`, `telepon`) VALUES('$nama', '$alamat', '$telepon')"; //untuk mengisi nilai dr hasil inputan

		$insertSiswa = mysqli_query($openServer, $qSiswa); //untuk menjalankan perintah

		header('location:home.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="index.php" method="post">
		<label>Nama</label>
		<input type="text" name="nama">
		<br>
		<label>Alamat</label>
		<input type="text" name="alamat">
		<br>
		<label>Telepon</label>
		<input type="text" name="telepon">
		<br>
		<input type="submit" name="simpan" value="Save">
	</form>
	
</body>
</html>