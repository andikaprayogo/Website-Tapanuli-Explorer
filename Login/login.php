<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        header("Location: index.php?error=Email is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        // Check if email contains "@"
        if (!strpos($email, "@")) {
            header("Location: index.php?error=Invalid email format");
            exit();
        }

        // Hashing the password using bcrypt
        $pass = password_hash($pass, PASSWORD_BCRYPT);

        // Connect to PostgreSQL using PDO
        include "db_conn.php"; // Gantilah dengan nama file koneksi PostgreSQL Anda

        try {
            $conn = new PDO("pgsql:dbname=$db;host=$host", $user, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit();
        }

        $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() === 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($pass, $row['password'])) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: index.php?error=Incorrect Email or password");
                exit();
            }
        } else {
            header("Location: index.php?error=Incorrect Email or password");
            exit();
        }
    }

} else {
    header("Location: index.php");
    exit();
}
?>
