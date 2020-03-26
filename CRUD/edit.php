<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include 'koneksi.php';
		$id = $_GET["id"];
		$sql = 'SELECT * FROM pesan where id = "'.$id.'"';
		$query = mysqli_query($connect, $sql);
		$result = mysqli_fetch_array($query);
	?>
	<center>
	<form action="edit_proses.php?id=<?php echo $id ?>" method="POST">
		<input type="text" name="nama" value="<?php echo $result['nama'] ?>" placeholder="nama"><br>
		<input type="text" name="no_telp" value="<?php echo $result['no_telp'] ?>" placeholder="no telp"><br>
		<input type="text" name="pesan" value="<?php echo $result['pesan'] ?>" placeholder="pesan"><br>
		<input type="submit" name="submit" value="kirim">
	</form>
	</center>
</body>
</html>