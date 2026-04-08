<?php 
include 'navbar_user.php';
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adu.in - Pengaduan Masyarakat</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="assets/css/style.css">

    <style>
        .hero {
            padding: 80px 0;
        }
        .hero h1 {
            font-weight: bold;
        }
        .feature-icon {
            font-size: 30px;
            color: green;
        }
    </style>
</head>

<body>

<!-- HERO -->
<div class="container hero">
    <div class="row align-items-center">

        <!-- KIRI -->
        <div class="col-md-6">
            <h1 class="fw-bold">Pengaduan Masyarakat Jadi Lebih Mudah</h1>
            <p class="text-muted">
                Sampaikan keluhan Anda dengan cepat, transparan, dan langsung ditangani oleh pihak terkait.
            </p>
            <a href="lapor.php" class="btn btn-success mt-3">🚀 Lapor Sekarang</a>
        </div>

        <!-- KANAN -->
        <div class="col-md-6 text-center">
            <div class="p-4 bg-white shadow rounded-4">
                <div style="font-size:90px;">📢✨</div>
                <p class="text-muted mt-2">Sistem Pengaduan Digital</p>
            </div>
        </div>

    </div>
</div>

<!-- FITUR -->
<div class="container text-center mt-5">
    <h2 class="fw-bold">Fitur Utama</h2>

    <div class="row mt-4 justify-content-center">

        <div class="col-md-4">
            <div class="feature-box p-4 bg-white shadow-sm">
                <div class="feature-icon">📢</div>
                <h5 class="mt-3">Kirim Pengaduan</h5>
                <p class="text-muted">Laporkan berbagai masalah dengan mudah dan cepat.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box p-4 bg-white shadow-sm">
                <div class="feature-icon">📍</div>
                <h5 class="mt-3">Tracking Status</h5>
                <p class="text-muted">Pantau proses laporan secara transparan.</p>
            </div>
        </div>

    </div>
</div>

<!-- CTA -->
<div class="container text-center mt-5 mb-5">
    <div class="p-5 bg-white shadow rounded-4">
        <h4 class="fw-bold">✨ Yuk bantu lingkungan jadi lebih baik!</h4>
        <p class="text-muted">Suara kamu berarti 💚</p>
    </div>
</div>

</body>
</html>