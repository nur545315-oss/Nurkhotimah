<form action="proses_pengaduan.php" method="POST" enctype="multipart/form-data">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
    <input type="text" name="nama" placeholder="Nama" required><br>
    <input type="text" name="judul" placeholder="Judul Laporan" required><br>
    <textarea name="isi" placeholder="Isi laporan" required></textarea><br>

    Upload Bukti:
    <input type="file" name="foto" required><br>

    <button type="submit">Kirim</button>
</form>