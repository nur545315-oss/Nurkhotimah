<?php
include '../config/auth.php';
include '../koneksi.php';
include '../template/navbar_admin.php';

$data = mysqli_query($conn, "SELECT * FROM pengaduan ORDER BY id DESC");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

<div class="container mt-4">

<h2>Status Laporan</h2>

<table class="table table-bordered">
<tr>
    <th>Judul</th>
    <th>Lokasi</th>
    <th>Status</th>
    <th>Bukti</th>
</tr>

<?php while($d = mysqli_fetch_array($data)){ ?>
<tr>
    <td><?= $d['judul'] ?></td>
    <td><?= $d['lokasi'] ?></td>
    <td>
        <?php 
        if($d['status']=='menunggu') echo "<span class='badge bg-warning'>Menunggu</span>";
        elseif($d['status']=='diproses') echo "<span class='badge bg-primary'>Diproses</span>";
        else echo "<span class='badge bg-success'>Selesai</span>";
        ?>
    </td>
    <td>
        <img src="../uploads/<?= $d['foto'] ?>" width="100">
    </td>
</tr>
<?php } ?>

</table>
</div>