<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "belajar";
$connect = mysqli_connect($host,$username,$password,$database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>