<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "db_automotif"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama_mobil = $_POST['nama_mobil'];
$merek = $_POST['merek'];
$tahun = $_POST['tahun'];

$sql = "INSERT INTO mobil (nama_mobil, merek, tahun) VALUES ('$nama_mobil', '$merek', '$tahun')";

if ($conn->query($sql) === TRUE) {
    echo "Data mobil berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location: index.php");
exit();
?>
