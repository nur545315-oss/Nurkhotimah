<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND role='admin'");
$user = mysqli_fetch_assoc($data);

if ($user) {
    if ($password == $user['password']) {

        $_SESSION['admin'] = true;
        $_SESSION['username'] = $user['username'];

        header("Location: admin/dashboard.php");
        exit;

    } else {
        echo "<script>alert('Password salah!'); window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Admin tidak ditemukan!'); window.location='login.php';</script>";
}
?>