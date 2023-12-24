<?php
include('db_conn.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM data_pelanggan WHERE id = $id";
    $result = $con->query($query);

    if (!$result) {
        die("Error dalam query: " . $con->errorInfo()[2]);
    }

    header("Location: crud.php");
    exit();
}
?>
