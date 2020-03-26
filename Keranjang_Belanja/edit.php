<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$id = $_GET['no'];

		$sql = mysqli_query($connect, "SELECT * FROM barang WHERE no = '".$id."'");
		$data = mysqli_fetch_array($sql);
	?>
	<form action="proses_edit.php?no=<?php echo $id; ?>" method="post">
		<input type="text" name="barang" value="<?php echo $data['barang']; ?>">
		<input type="number" name="harga_barang" value="<?php echo $data['harga']; ?>">
		<input type="number" name="jumlah_barang" value="<?php echo $data['jumlah']; ?>">
		<input type="submit" value="submit">
	</form>
</body>
</html>