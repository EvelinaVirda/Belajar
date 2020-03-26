<html>
<head>
<title>Upload page</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<div align='center'>
<?php
//connect function
	$hostname  = "localhost";
	$username  = "root";
	$password  = "";
	$dbname    = "aplikasi_cuti";
	$db = new mysqli($hostname, $username, $password, $dbname);

//Script akan berjalan jika di tekan tombol submit
if (isset($_POST['submit'])) {

//Script Upload File..
if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
echo "<h2>" . "File ". $_FILES['filename']['name'] ." Berhasil di Upload" . "</h2>";
echo "<h4>Menampilkan Hasil Upload:</h4>";
}

?> 
<input type="button" value="Klik Disini" onclick="SelectName()" />
<?php

//Import uploaded file to Database
$handle = fopen($_FILES['filename']['tmp_name'], "r"); 
//Membuka file dan membacanya
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

//Import processing 
//data array sesuaikan dengan jumlah kolom pada CSV anda mulai dari “0” bukan “1”
$sql="INSERT into tbl_user (id_karyawan, nama_user, username, password, alamat
						,jenis_kelamin, email, jabatan, level, no_ktp,foto) values ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]')"; 
//Melakukan Import
$query = $db->query($sql); 
}
//Menutup CSV file
fclose($handle); 
echo "<strong><br><br>Import data selesai.</strong>";
}else { ?>

<!-- Form Untuk Upload File CSV-->
Silahkan masukan file csv yang ingin diupload<br />
<form enctype='multipart/form-data' action='' method='post'>
Cari CSV File anda:<br />
<input type='file' name='filename' size='100' required>
<input type='submit' name='submit' value='Upload'></form>
<?php }  ?>



<script type="text/javascript">
    var popup;
    function SelectName() {
        popup = window.open("paging.php", "Popup", "width=500,height=300");
        popup.focus();
        return false
    }
</script>
</div>
</body>
</html>