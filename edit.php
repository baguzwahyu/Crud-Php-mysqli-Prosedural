<?php
  include "database/koneksi.php";
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
	<?php 

	  // Menjalankan Tombol Update
	  if (isset($_POST['update'])) {
	  	$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telepon = $_POST['telepon'];

		$qEditSiswa = "UPDATE `siswa` SET `nama` = '$nama', `alamat` = '$alamat', `telepon` = '$telepon' WHERE id = '$id'";
		$updateSiswa = mysqli_query($openServer, $qEditSiswa);

		header('location:home.php');
	  }

	  // Menampilkan Isi ke dalam form input
	  if (isset($_GET['edit'])) {
		$edit = $_GET['edit'];

		$qSelectSiswa = "SELECT * FROM siswa WHERE id = '$edit'";
		$openSiswa = mysqli_query($openServer, $qSelectSiswa);

		while ($rows = mysqli_fetch_array($openSiswa)) {
	?>
	<form action="edit.php" method="post">
		<label>Nama</label>
		<input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
		<input type="text" name="nama" value="<?php echo $rows['nama']; ?>">
		<br>
		<label>Alamat</label>
		<input type="text" name="alamat" value="<?php echo $rows['alamat']; ?>">
		<br>
		<label>Telepon</label>
		<input type="text" name="telepon" value="<?php echo $rows['telepon']; ?>">
		<br>
		<input type="submit" name="update" value="Update">
	</form>
	<?php  
	  }
		}
	?>
	
</body>
</html>