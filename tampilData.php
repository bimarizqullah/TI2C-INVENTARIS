<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data Mobil</title>
</head>
<body>

<h2>Data Mobil</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Mobil</th>
        <th>Merek</th>
        <th>Tahun</th>
        <th>Action</th>
    </tr>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "db_automotif"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "SELECT id, nama_mobil, merek, tahun FROM mobil";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nama_mobil"] . "</td>";
            echo "<td>" . $row["merek"] . "</td>";
            echo "<td>" . $row["tahun"] . "</td>";
            echo "<td>";
            echo "<a href='edit_data.php?id=" . $row["id"] . "'>Edit</a> | ";
            echo "<a href='hapus_data.php?id=" . $row["id"] . "' onclick=\"return confirm('Anda yakin ingin menghapus data ini?');\">Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
    }

    $conn->close();
    ?>

</table>
<br>
<input type="button" value="Kembali" onclick="location.href='index.php';"><br><br>

</body>
</html>
