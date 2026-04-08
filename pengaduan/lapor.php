<?php 
include 'navbar_user.php';
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lapor Pengaduan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card shadow p-4">

                <h3 class="text-center mb-4">Form Pengaduan</h3>

                <form action="proses_pengaduan.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label>Nama Pelapor</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Judul Laporan</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Deskripsi Kerusakan</label>
                        <textarea name="isi" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" placeholder="Contoh: Jl. Sudirman" required>
                    </div>

                    <div class="mb-3">
                        <label>Upload Bukti</label>
                        <input type="file" name="foto" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100">
                        🚀 Kirim Laporan
                    </button>

                </form>

            </div>
        </div>

    </div>
</div>

</body>
</html>