<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mobil</title>
</head>
<body>

<h2>Edit Data Mobil</h2>

<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "db_automotif"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM mobil WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>

        <form method="post" action="update_data.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label>Nama Mobil:</label><br>
            <input type="text" name="nama_mobil" value="<?php echo $row['nama_mobil']; ?>" required><br><br>
            
            <label>Merek:</label><br>
            <input type="text" name="merek" value="<?php echo $row['merek']; ?>" required><br><br>
            
            <label>Tahun Mobil:</label><br>
            <input type="number" name="tahun" value="<?php echo $row['tahun']; ?>" required><br><br>
            
            <input type="submit" value="Simpan Perubahan">
        </form>

        <?php
    } else {
        echo "Data mobil tidak ditemukan.";
    }
} else {
    echo "Parameter ID tidak diberikan.";
}

$conn->close();
?>

<br>
<input type="button" value="Kembali ke Data Mobil" onclick="location.href='tampilData.php';"><br><br>

</body>
</html>
