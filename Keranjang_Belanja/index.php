<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>

	<form action="proses_input.php" method="post">
		<input type="text" name="barang" placeholder="nama barang">
		<input type="number" name="harga_barang" placeholder="harga_barang">
		<input type="number" name="jumlah_barang" placeholder="jumlah barang">
		<input type="submit" value="submit">
	</form>
	<table border="1">
					<tr>
						<th>aksi</th>
						<th>no</th>
						<th>nama barang</th>
						<th>harga barang</th>
						<th>jumlah barang</th>
						<th>total</th>
						
					</tr>
	<?php 
		

		$sql = "SELECT * FROM barang";
		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				?>	
				
					<tr>
						<td><?php echo '<a href="proses_hapus.php?no='.$row["no"].'"</a>' ;?>hapus
						    <?php echo '<a href="edit.php?no='.$row["no"].'"</a>' ;?>edit</td>
						<td><?php echo $row ['no']; ?></td>
						<td><?php echo $row ['barang']; ?></td>
						<td><?php echo $row ['harga']; ?></td>
						<td><?php echo $row ['jumlah']; ?></td>
				<?php
					$harga = $row['harga'];
					$jumlah = $row['jumlah'];
					
					$total = $harga * $jumlah;
					mysqli_query($connect, "INSERT INTO keranjang VALUES (null, '$total')");
					
					echo '<td>'.$total.'</td></tr>';


			}
		}

	?>
</table>

<?php
	if (empty($row2 = mysqli_num_rows($result))) {
		$row2 = 1;
	}else{
 echo "jumlah jenis barang : $row2"; }?> 

<br>

<?php 

$sql2 = mysqli_query($connect, "SELECT SUM(total_harga) AS total_bayar from keranjang");
$row3 = mysqli_fetch_array($sql2);
$total_bayar = $row3 ['total_bayar'] / $row2;
#echo $row3 ['total_bayar']; ?> 
<br>
<?php
#echo "total yang harus anda bayar adalah $total_bayar";
echo "total yang harus anda bayar adalah ". $row3 ['total_bayar']; 
?>
<form action="hitung.php" method="GET">
	<input type="submit" name="hapus" value="Hitung">
</form>
</body>
</html>