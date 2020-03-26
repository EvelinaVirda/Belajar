<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		
		$connect = mysqli_connect("localhost","root","","aplikasi_cuti");
	
		if (isset($_POST['submit'])) {


			if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
				echo "berhasil diupload";
			}

			$handle = fopen($_FILES['filename']['tmp_name'], "r"); 

			
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$sql="INSERT into tbl_user (id_karyawan, nama_user, username, password, alamat
						,jenis_kelamin, email, jabatan, level, no_ktp,foto) values ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]')"; 
//Melakukan Import
		$query = mysqli_query($connect,$sql);
		}
			fclose($handle); 
			echo "<strong><br><br>Import data selesai.</strong>";
		}else{?>
			<form enctype="multipart/form-data" action="" method="POST">
			<input type="file" name="filename" size="100">
			<input type="submit" name="submit" value="upload">
			</form>
				<?php
		}
	?>

</body>
</html>