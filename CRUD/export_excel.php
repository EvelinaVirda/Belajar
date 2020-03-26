<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
		<?php
			include 'koneksi.php';
			$sql = "SELECT * FROM pesan";
			$query = mysqli_query($connect, $sql);
		?>
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Pegawai.xls");
	?>
	<center><table border="1">

		<tr>
			<th>Nama </th>
			<th>No Telp </th>
			<th>Pesan </th>
		</tr>
		<?php
			while ($result = mysqli_fetch_array($query))
			{
				?>
					<tr>
						<td><?php echo $result['nama']; ?></td>
						<td><?php echo $result['no_telp']; ?></td>
						<td><?php echo $result['pesan']; ?></td>
					</tr>
				<?php
			}
		?>
	</table></center>
</body>
</html>