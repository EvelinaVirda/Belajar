<?php
include 'koneksi.php';

if ($hapus = $_GET['hapus']) {
	# code...
	mysqli_query($connect, "DELETE from keranjang");

header("location:index.php");
}
?>