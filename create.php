<?php

//menghubngkan ke koneksi.php

include('koneksi.php');

//memproses data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];
	
	//perintah sql untuk menambahkan data ke table tanpa menyertakan nisn
	$sql = "INSERT INTO siswa (nama, jurusan, alamat) values ('$nama', '$jurusan', '$alamat')";
	mysqli_query($koneksi, $sql);
	
	//riderect ke halaman read.php setelah data berhasil ditambahkan ditambahkan
	header("Location: read.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		*{
			font-family: Sans-Serif;
		}
		label, input{
			display: block;
		}
	</style>
</head>
<body>
	<h2>Tamabah Data Siswa</h2>
	<form action="" method="post">
		<label for="nama">nama :</label>
		<input type="text" id="nama" name="nama" required>
		
		<label for="jurusan">jurusan :</label>
		<input type="text" id="jurusan" name="jurusan" required>
		
		<label for="alamat">alamat :</label>
		<input type="text" id="alamat" name="alamat" required>
		<br>
		<input type="submit" value="Tambah">
	</form>
	<br><br>
	<a href="read.php">Kembali</a>
</body>
</html>