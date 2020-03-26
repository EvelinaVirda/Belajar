<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Paket</th>
			<th>Makanan </th>
			<th>Minuman </th>
			<th>Harga </th>
		</tr>
		<tr>
			<td>Paket 1 </td>
			<td>Nasi Goreng </td>
			<td>Es Teh </td>
			<td>15000</td>
		</tr>
		<tr>
			<td>Paket 2</td>
			<td>Mi Rebus </td>
			<td>Sprit </td>
			<td>10000</td>
		</tr>
	</table><br>
	<form method="post">
		<input type="number" name="jumlah_pesanan" placeholder="jumlah pesanan">
		<input type="submit" value="submit">
	</form>
	<?php

	 	$jumlah = ((@$_POST['jumlah_pesanan']));

		$total = $jumlah * 15000;

		echo "total pesanan anda $total";
	?>
	<a href="index.php">kembali</a>
</body>
</html>