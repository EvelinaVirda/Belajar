<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

mysqli_query($connect,"insert into ajax_input values('','$nama','$alamat','$pekerjaan')");
?>