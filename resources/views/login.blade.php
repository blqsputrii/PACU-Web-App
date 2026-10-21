<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PACU!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {background-color: #bbbbbb; display:flex; align-items: center; justify-content: center; min-height: 100vh;}
        .login-card {width: 100%; max-width: 400px; padding: 2rem; border-radius: 12px; background: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.1);}
        .brand-title {font-weight: 700; color: #0d6efd; letter-spacing: 1px;}
    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center mb-4">
        <h3 class="brand-title mb-1">PACU!</h3>
        <p class="text-muted small">Pencapaian Aktif & Capaian Unggul</p>
    </div>

    <form action="#" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label font-weight-bold">Email Pegawai / Admin</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="nama@elpixglobal.com" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label font-weight-bold">Password</label>
            <input type="password" placeholder="Masukkan Password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Masuk ke Dashboard</button>
    </form>
</div>

</body>
</html>
