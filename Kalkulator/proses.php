<?php
$num_1 = $_POST['num_1'];
$num_2 = $_POST['num_2'];
$operator = $_POST['operator'];

if ($operator == "+"){
	$num_3 = $num_1 + $num_2 ;
}
elseif ($operator == "-") {
	$num_3 = $num_1 - $num_2 ;
}
elseif ($operator == "*") {
	$num_3 = $num_1 * $num_2 ;
}
elseif ($operator == "/") {
	$num_3 = $num_1 / $num_2 ;
};
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="form_input" action="proses.php" method="POST">
		<input type="text" name="num_1" value="<?php echo($num_1)?>" placeholder="Masukan angka">
		<input type="text" name="operator" value="<?php echo($operator)?>" placeholder="masukan operator">
		<input type="text" name="num_2" value="<?php echo($num_2)?>" placeholder="masukan angka">
		<input type="submit" name="submit" value="hitung">
	</form>
	<?php
		echo "hasil = $num_3";
	?>
</body>
</html>

