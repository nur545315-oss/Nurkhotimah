<?php include 'navbar_user.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

<div class="container mt-5">

    <h3 class="mb-4">🔍 Cek Status Laporan</h3>

    <form method="GET" class="mb-4">
        <input type="number" name="id" class="form-control" placeholder="Masukkan ID Laporan" required>
        <button class="btn btn-success mt-2">Cek Status</button>
    </form>

<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $data = mysqli_query($conn, "SELECT * FROM pengaduan WHERE id='$id'");
    $d = mysqli_fetch_assoc($data);

    if($d){
        
        // progress
        if($d['status']=='menunggu') $progress = 33;
        elseif($d['status']=='diproses') $progress = 66;
        else $progress = 100;
?>

    <div class="card shadow p-4">

        <!-- 🔥 ID LAPORAN -->
        <h6 class="text-muted">ID Laporan: <b>#<?= $d['id'] ?></b></h6>

        <h5><?= $d['judul'] ?></h5>

        <p><b>Lokasi:</b> <?= $d['lokasi'] ?></p>

        <p><b>Status:</b>
        <?php 
        if($d['status']=='menunggu') echo "<span class='badge bg-warning'>⏳ Menunggu</span>";
        elseif($d['status']=='diproses') echo "<span class='badge bg-primary'>🔧 Diproses</span>";
        else echo "<span class='badge bg-success'>✅ Selesai</span>";
        ?>
        </p>

        <!-- PROGRESS BAR -->
        <div class="progress mt-2 mb-3">
            <div class="progress-bar" style="width: <?= $progress ?>%">
                <?= $progress ?>%
            </div>
        </div>

        <!-- GAMBAR -->
        <div>
            <b>Bukti:</b><br>
            <img src="uploads/<?= $d['foto'] ?>" class="img-fluid mt-2 rounded" width="300">
        </div>

    </div>

<?php
    } else {
        echo "<div class='alert alert-danger'>❌ ID tidak ditemukan!</div>";
    }
}
?>

</div>