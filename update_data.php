<!DOCTYPE html>
<html>
<head>
    <title>Update Data Mobil</title>
</head>
<body>

<h2>Data Berhasil di Update!</h2>


<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "db_automotif"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_mobil = $_POST['nama_mobil'];
    $merek = $_POST['merek'];
    $tahun = $_POST['tahun'];


    $sql = "UPDATE mobil SET nama_mobil = '$nama_mobil', merek = '$merek', tahun = '$tahun' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo " ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>

<br>
<input type="button" value="Kembali ke Data Mobil" onclick="location.href='tampilData.php';"><br><br>

</body>
</html>