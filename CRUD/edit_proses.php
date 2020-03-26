<?php

	include 'koneksi.php';

	$id = $_GET['id'];

	$nama = $_POST['nama'];
	$no_telp = $_POST['no_telp'];
	$pesan = $_POST['pesan'];

	$sql = 'UPDATE pesan set nama = "'.$nama.'", no_telp = "'.$no_telp.'", pesan = "'.$pesan.'" WHERE id = "'.$id.'"';
	mysqli_query($connect, $sql);

	header('location:index.php');

?>