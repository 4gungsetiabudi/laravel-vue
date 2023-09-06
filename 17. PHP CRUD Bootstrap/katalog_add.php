<html>
<head>
	<title>Tambah Katalog</title>
</head>

<?php
	include_once("connect.php");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
?>
 
<body>
	<a href="katalog.php">Kembali Ke Halaman Katalog</a> <br/><br/>
 
	<form action="katalog_add.php" method="post" name="form1">
		<table width="28%" border="0">
			<tr> 
				<td>ID Katalog</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<td>Nama Katalog</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	
	<?php
	 
		// Periksa Jika formulir dikirimkan, masukkan data formulir ke tabel pengguna.
		if(isset($_POST['Submit'])) {
			$id_katalog = $_POST['id'];
			$nama = $_POST['nama'];

			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `katalog` (`id_katalog`,`nama`) VALUES ('$id_katalog','$nama');");
			
			header("Location:katalog.php");
		}
	?>
</body>
</html>