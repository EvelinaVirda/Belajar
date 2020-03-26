 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "belajar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$a = $_POST['nama'];
$b = $_POST['alamat'];
$c = $_POST['pekerjaan'];

$a2 = $_POST['nama2'];
$b2 = $_POST['alamat2'];
$c2 = $_POST['pekerjaan2'];

$a3 = $_POST['nama3'];
$b3 = $_POST['alamat3'];
$c3 = $_POST['pekerjaan3'];

$sql = "INSERT INTO user (id, nama, alamat, pekerjaan)
VALUES (null, '$a', '$b', '$c');";
$sql .= "INSERT INTO user (id, nama, alamat, pekerjaan)
VALUES (null, '$a2', '$b2', '$c2');";
$sql .= "INSERT INTO user (id, nama, alamat, pekerjaan)
VALUES (null, '$a3','$b3',  '$c3')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 