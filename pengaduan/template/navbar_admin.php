<link rel="stylesheet" href="../assets/css/style.css">
<nav class="navbar navbar-expand-lg px-4">
    <a class="navbar-brand fw-bold text-white" href="../admin/dashboard.php">ADMIN PANEL</a>

    <div class="ms-auto">
        <span class="text-white me-3">
            Halo, <?= $_SESSION['username']; ?>
        </span>

        <a href="../index.php" class="btn btn-light btn-sm me-2">Home</a>
        <a href="../logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>