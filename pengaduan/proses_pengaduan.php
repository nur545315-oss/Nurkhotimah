<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$lokasi = $_POST['lokasi'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp, "uploads/" . $foto);

// simpan data
mysqli_query($conn, "INSERT INTO pengaduan 
(nama, judul, isi, lokasi, foto) 
VALUES ('$nama','$judul','$isi','$lokasi','$foto')");

// ambil ID terakhir
$id = mysqli_insert_id($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4 text-center">

        <h3 class="text-success">✅ Laporan Berhasil Dikirim!</h3>

        <p class="mt-3">Simpan ID laporan Anda untuk cek status:</p>

        <!-- 🔥 TAMPILIN ID -->
        <h1 class="fw-bold text-primary">#<?= $id ?></h1>

        <a href="status.php?id=<?= $id ?>" class="btn btn-success mt-3">
            🔍 Cek Status Sekarang
        </a>

        <br><br>
        <a href="index.php">← Kembali ke Home</a>

    </div>
</div>

</body>
</html>