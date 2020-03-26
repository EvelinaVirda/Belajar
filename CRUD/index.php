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
		
	<a href="export_excel.php">EXPORT TO EXCEL</a>
	<center><table border="1">
		<a href="tambah_data.php">Tambah Data</a>
		<tr>
			<th>Nama </th>
			<th>No Telp </th>
			<th>Pesan </th>
			<th>aksi </th>
		</tr>
		<?php
			while ($result = mysqli_fetch_array($query))
			{
				?>
					<tr>
						<td><?php echo $result['nama']; ?></td>
						<td><?php echo $result['no_telp']; ?></td>
						<td><?php echo $result['pesan']; ?></td>
						<td><?php echo "<a href='edit.php?id=".$result['id']."'> Edit </a>" ?></td>
						<td><?php echo "<a href='hapus.php?id=".$result['id']."'> Hapus </a>" ?></td>
					</tr>
				<?php
			}
		?>
	</table></center>
</body>
</html>