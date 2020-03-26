<!DOCTYPE html>
<html>
<head>
	<title>klonisasi</title>
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.4.1.js">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#inputbox1").keyup(function(){
				var klonisasi=$(this).val();
				$("#inputbox2").val(klonisasi);
			});
		});
	</script>
</head>
<body>
	<form>
		<input type="text" id="inputbox1">
		<input type="text" id="inputbox2">
		<input type="submit" value="submit">
	</form>
</body>
</html>