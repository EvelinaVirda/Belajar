<?php
include 'koneksi.php';
		
		$no = $_GET['no'];

		$barang = $_POST['barang'];
		$harga = $_POST['harga_barang'];
		$jumlah = $_POST['jumlah_barang'];

		$sql_edit = mysqli_query($connect, "UPDATE barang SET barang='".$barang."', harga='".$harga."', jumlah='".$jumlah."' where no = '".$no."'");

		header("location:index.php");
	?>