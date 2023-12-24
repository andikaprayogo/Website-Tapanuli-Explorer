<?php
include('db_conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $query = "INSERT INTO data_pelanggan (nama, alamat, tanggal_lahir) VALUES ('$nama', '$alamat', '$tanggal_lahir')";
    $result = $con->query($query);

    if (!$result) {
        die("Error dalam query: " . $con->errorInfo()[2]);
    }

    header("Location: crud.php");
    exit();
}
?>

<!-- Formulir HTML untuk Menambah Data -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <form action="add.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required><br>

        <input type="submit" value="Tambah Data">
    </form>
</body>
</html>
