<?php
session_start();
include "db_conn.php"; // Gantilah dengan nama file koneksi PostgreSQL Anda

if (
    isset($_POST['email']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])
) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    $re_pass = validate($_POST['re_password']);
    $name = validate($_POST['name']);

    $user_data = 'email=' . $email . '&name=' . $name;

    if (empty($email)) {
        header("Location: signup.php?error=Email dibutuhkan&$user_data");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?error=Format email tidak valid&$user_data");
        exit();
    } else if (empty($pass)) {
        header("Location: signup.php?error=Kata sandi dibutuhkan&$user_data");
        exit();
    } else if (empty($re_pass)) {
        header("Location: signup.php?error=Harap ketik ulang kata sandi&$user_data");
        exit();
    } else if (empty($name)) {
        header("Location: signup.php?error=Nama dibutuhkan&$user_data");
        exit();
    } else if ($pass !== $re_pass) {
        header("Location: signup.php?error=Konfirmasi kata sandi tidak sesuai&$user_data");
        exit();
    } else {
        // Mengenkripsi kata sandi menggunakan bcrypt
        $pass = password_hash($pass, PASSWORD_BCRYPT);

        $stmt = $con->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location: signup.php?error=Email sudah digunakan, coba yang lain&$user_data");
            exit();
        } else {
            $stmt = $con->prepare("INSERT INTO users(email, password, name) VALUES(:email, :pass, :name)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);
            $stmt->bindParam(':name', $name);
            $stmt->execute();

            if ($stmt) {
                header("Location: index.php?success=Akun Anda berhasil dibuat");
                exit();
            } else {
                header("Location: signup.php?error=Terjadi kesalahan tidak diketahui&$user_data");
                exit();
            }
        }
    }
} else {
    header("Location: signup.php");
    exit();
}
?>
