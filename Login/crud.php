<?php
include('db_conn.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Data</title>
</head>
<body>
    <h1>Tabel Data</h1>
    <a href="add.php">Tambah Data</a>

    <form action="index.php" method="get">
        <label for="search">Cari:</label>
        <input type="text" name="search" id="search">
        <input type="submit" value="Cari">
    </form>

    <table border="1">
        <tr>
            <th><a href="?sort=nama">Nama</a></th>
            <th><a href="?sort=alamat">Alamat</a></th>
            <th><a href="?sort=tanggal_lahir">Tanggal Lahir</a></th>
            <th>Update</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>

        <?php
        $sortColumn = isset($_GET['sort']) ? $_GET['sort'] : 'nama';
        $sortOrder = isset($_GET['order']) && strtolower($_GET['order']) === 'desc' ? 'DESC' : 'ASC';

        if (isset($_GET['search'])) {
            $search = $_GET['search'];

            // Periksa apakah input pencarian adalah format tanggal yang valid
            if (strtotime($search)) {
                $query = "SELECT * FROM data_pelanggan WHERE 
                          nama ILIKE '%$search%' OR
                          alamat ILIKE '%$search%' OR
                          tanggal_lahir = '$search'";
            } else {
                // Jika bukan tanggal, hanya mencari nama dan alamat
                $query = "SELECT * FROM data_pelanggan WHERE 
                          nama ILIKE '%$search%' OR
                          alamat ILIKE '%$search%'";
            }
        } else {
            $query = "SELECT * FROM data_pelanggan";
        }

        // Tambahkan ORDER BY ke query
        $query .= " ORDER BY $sortColumn $sortOrder";

        $result = $con->query($query);

        if (!$result) {
            die("Error dalam query: " . $con->errorInfo()[2]);
        }

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$row['nama']}</td>";
            echo "<td>{$row['alamat']}</td>";
            echo "<td>{$row['tanggal_lahir']}</td>";
            echo "<td>{$row['update_timestamp']}</td>";
            echo "<td><a href='edit.php?id={$row['id']}'>Edit</a></td>";
            echo "<td><a href='delete.php?id={$row['id']}'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

    
</body>
</html>
