<?php session_start(); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

<nav class="navbar navbar-expand-lg px-4">
   
    <!-- Logo -->
    <a class="navbar-brand fw-bold text-success" href="index.php">
		📢 Adu.in
	</a>

    <!-- Toggle Mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">

            <li class="nav-item">
                <a class="nav-link fw-semibold" href="index.php">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link fw-semibold" href="lapor.php">Lapor</a>
            </li>

            <li class="nav-item">
                <a class="nav-link fw-semibold" href="status.php">Status</a>
            </li>

            <!-- Button Admin -->
            <li class="nav-item ms-3">
                <a href="login.php" class="btn btn-success btn-sm px-3">
                    🔐 Admin
                </a>
            </li>

        </ul>
    </div>
</nav>

<!-- Bootstrap JS (biar toggle jalan) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>