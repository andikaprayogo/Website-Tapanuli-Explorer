<?php
include('db_conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $query = "UPDATE data_pelanggan SET nama='$nama', alamat='$alamat', tanggal_lahir='$tanggal_lahir' WHERE id=$id";
    $result = $con->query($query);

    if (!$result) {
        die("Error dalam query: " . $con->errorInfo()[2]);
    }

    header("Location: crud.php");
    exit();
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM data_pelanggan WHERE id = $id";
    $result = $con->query($query);
    $data = $result->fetch(PDO::FETCH_ASSOC);
}
?>

<!-- Formulir HTML untuk Mengedit Data -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" required><br>

        <input type="submit" value="Perbarui Data">
    </form>
</body>
</html>
