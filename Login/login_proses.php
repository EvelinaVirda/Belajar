<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' and $password == 'admin') {
	header('location: hal_admin.php');
}
else{
	echo "login gagal";
	header('location: index.php');
}