<?php
include '../koneksi.php';
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

$id = $_GET['id'];
$status = $_GET['status'];

mysqli_query($conn, "UPDATE pengaduan SET status='$status' WHERE id=$id");

header("Location: index.php");
?>