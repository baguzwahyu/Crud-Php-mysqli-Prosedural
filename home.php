<?php  
  include 'database/koneksi.php';
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
	<table border="2px">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php  

			  // Hapus
			  if (isset($_GET['delete'])) {
  				$delete = $_GET["delete"];

  				$qDelSiswa = "DELETE FROM siswa WHERE id = $delete";
  				$deleteSiswa = mysqli_query($openServer, $qDelSiswa);
  				header('location:home.php');

  			  }

  			  // Tampil
			  $selectSiswa = "SELECT * FROM siswa"; //menampilkan data dari database
			  $openSiswa = mysqli_query($openServer, $selectSiswa);

			  while ($row = mysqli_fetch_array($openSiswa)) { //Digunakan untuk mengubah tabel menjadi array

			?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><?php echo $row['telepon']; ?></td>
				<td>
					<a href="?delete=<?php echo $row['id']; ?>">Delete</a>
					<a href="edit.php?edit=<?php echo $row['id']; ?>">Edit</a>
				</td>
			</tr>
			<?php  
			  }
			?>
		</tbody>
	</table>
	<a href="http://localhost/prosedural/index.php">Tambah Siswa</a>
</body>
</html>