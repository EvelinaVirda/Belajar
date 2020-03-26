<!DOCTYPE html>
<html>
<head>
	<title>Ujian 1</title>
</head>
<body>
	<?php
		include 'koneksi.php';
		$query = mysqli_query($connect, "SELECT *, nilai_uas*0.6 + nilai_tugas*0.1 + nilai_uts*0.3 as total FROM ujian");
		
	?>
	<center>
			<table border="1">
			<tr>
				<th>nim</th>
				<th>nama</th>
				<th>nilai_uts</th>
				<th>nilai_tugas</th>
				<th>nilai_uas</th>
				<th>total nilai</th>
			</tr>
			<?php
				if (mysqli_num_rows($query) > 0 ) {
				while ($hasil = mysqli_fetch_assoc($query)) {
			?>

			<tr>
				<td><?php echo $hasil['nim']; ?></td>
				<td><?php echo $hasil['nama']; ?></td>
				<td><?php echo $hasil['nilai_uts']; ?></td>
				<td><?php echo $hasil['nilai_tugas']; ?></td>
				<td><?php echo $hasil['nilai_uas']; ?></td>
				<td><?php echo $hasil['total']; ?></td>
			</tr>
			<?php
			}
		}
		?>
		</table>
		</center>
	<form method="POST">
		<select name="lihat_nilai">
            <option value="a"> Nilai A </option>
            <option value="b"> Nilai B </option>
            <option value="c"> Nilai C </option>
            <option value="d"> Nilai D </option>
            <option value="e"> Nilai E </option>
        </select>
        <input type="submit" value="Lihat">
	</form>

	<?php
		switch (@$_POST['lihat_nilai']) {
			case 'a':

				$query = mysqli_query($connect, "SELECT *, nilai_uas*0.6 + nilai_tugas*0.1 + nilai_uts*0.3 as total FROM ujian");

					?>
			<center>
			<table border="1">
			<tr>
				<th>nim</th>
				<th>nama</th>
				<th>nilai_uts</th>
				<th>nilai_tugas</th>
				<th>nilai_uas</th>
				<th>total nilai</th>
			</tr>
			<?php
				if (mysqli_num_rows($query) > 0 ) {
				while ($hasil = mysqli_fetch_assoc($query)) {
			?>

			<tr>
				<td><?php echo $hasil['nim']; ?></td>
				<td><?php echo $hasil['nama']; ?></td>
				<td><?php echo $hasil['nilai_uts']; ?></td>
				<td><?php echo $hasil['nilai_tugas']; ?></td>
				<td><?php echo $hasil['nilai_uas']; ?></td>
				<td><?php echo $hasil['total']; ?></td>
			</tr>
				<?php
				}
			}
			?>
			</table>
			</center>
					<?php
		
				break;

			case 'b':
				# code...
			$a = 3;
			$b = 4;
			$hasil = $a+$b;

			echo $hasil;
				break;

			case 'c':
				# code...
				break;

			case 'd':
				# code...
				break;

			case 'e':
				# code...
				break;

			default:
				# code...
				break;
		}
	?>
</body>
</html>