<!DOCTYPE html>
<html>
<head>
<style>
	<link rel="stylesheet" href="assets/css/style.css">
</style>
    <title>Login Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>

<body class="coffee-bg">

<div class="container d-flex align-items-center justify-content-center" style="min-height:100vh;">

    <div class="col-md-4">
        <div class="card p-4 text-center">

            <h3 class="mb-2 fw-bold">☕ Login Admin</h3>
            <p class="text-muted mb-3">Masuk ke dashboard pengaduan</p>

            <form action="proses_login.php" method="POST">
                
                <input type="text" name="username" class="form-control mb-3 input-coffee" placeholder="Username" required>

                <input type="password" name="password" class="form-control mb-3 input-coffee" placeholder="Password" required>

                <button type="submit" class="btn btn-coffee w-100">
                    Login
                </button>
            </form>

        </div>
    </div>

</div>

</body>
</html>