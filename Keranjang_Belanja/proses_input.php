<?php
include 'koneksi.php';
$a = $_POST['barang'];
$b = $_POST['harga_barang'];
$c = $_POST['jumlah_barang'];

$sql =  "INSERT INTO barang VALUES (NULL,'$a','$b','$c')";

$query = mysqli_query($connect, $sql);

if (!$query) {
	die("query gagal dijalankan");
}

header('location:index.php');
?>