<?php
include 'koneksi.php';

$hapus = $_GET['no'];

mysqli_query($connect, "DELETE from barang where no = '".$hapus."'");

header("location:index.php");

?>