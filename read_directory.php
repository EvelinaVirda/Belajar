<?php
$kon = mysqli_connect('localhost', 'root', '', 'reee');
$dir = "C:\Users\RekapDigi06\Downloads";

// Open a directory, and read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "filename:" . $file . "<br>";
            mysqli_query($kon, "INSERT into comments value (null,'$file','tes','1')");
        }
        closedir($dh);
    }
}
