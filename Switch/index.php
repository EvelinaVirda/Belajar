<!DOCTYPE html>
<html>
<head>
	<title>Belajar Switch</title>
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
	</table>
	<br>
	<form method="post">
		<input type="number" name="menu" placeholder="Masukan Pilihan Paket">
		<input type="submit" value="submit">
	</form>

	<?php

	switch (@$_POST['menu']) {
		case '1':
			# code...
			header('location:paket1.php');
			break;

		case '2':
			# code...
			header('location:paket2.php');
			break;
		
		default:
			# code...
			echo "Masukan Pilihan Paket";
			break;
	}

?>
</body>
</html>

