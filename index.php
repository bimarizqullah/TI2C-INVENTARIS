<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mobil</title>
</head>
<body>

<h2>Input Data Mobil</h2>

<form method="post" action="connect.php">
    <label>Nama Mobil:</label><br>
    <input type="text" name="nama_mobil" required><br><br>
    
    <label>Merek:</label><br>
    <input type="text" name="merek" required><br><br>
    
    <label>Tahun Mobil:</label><br>
    <input type="number" name="tahun" required><br><br>
    
    <input type="submit" value="Simpan">
    <input type="button" value="Data Mobil" onclick="location.href='tampilData.php';"><br><br>
</form>
<title>Tampil Data Mobil</title>
    

</body>
</html>
