<?php

include 'koneksi.php';

$id = $_GET['id'];

$sql = 'DELETE from pesan where id = "'.$id.'"';

mysqli_query($connect, $sql);

header('location:index.php');

