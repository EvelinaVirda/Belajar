<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$pesan = $_POST['pesan'];

$sql = "INSERT into pesan values (NULL, '$nama', '$no_telp', '$pesan')";

$query = mysqli_query($connect, $sql);

header('location:index.php');
?>