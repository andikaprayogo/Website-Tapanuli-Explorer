<?php
include 'tapsel.php';

$searchQuery = $_POST['query'];

$sql = "SELECT * FROM destinasi WHERE nama LIKE '%$searchQuery%' OR deskripsi LIKE '%$searchQuery%'";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card mb-3">';
        echo '<img src="' . $row['gambar'] . '" class="card-img-top" alt="' . $row['nama'] . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['nama'] . '</h5>';
        echo '<p class="card-text">' . $row['deskripsi'] . '</p>';
        echo '</div></div>';
    }
} else {
    echo '<p>Tidak ada hasil pencarian</p>';
}

$conn->close();
?>
