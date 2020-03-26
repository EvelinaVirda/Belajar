<!DOCTYPE html>
<html>
<head>
	<title>belajar skala</title>
</head>
<body>
	<h>Skala Presentase</h>
		<form action="skala_proses.php" method="POST">
			<input type="number" name="angka" placeholder="masukan angka">
			<input type="submit" value="submit">
		</form>
		<br>
		<?php 
			$angka = $_POST['angka'];
		?>
		<meter value="<?php echo "$angka" ?>" max="100"></meter>
</body>
</html>