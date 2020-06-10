<?php

$username = $_POST['username'];
$password = $_POST['password'];


if ($username == 'rem' && $password == 'kiwil') {
	echo "login berhasil";
}else{
	echo "login gagal";
}

?>