<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - PACU!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5"
        <div class="card-shadow-sm p-4">
            <h2>Selamat Datang di Dashboard PACU" </h2>
            <p class="text-muted">Halo, <strong>{{session('user_name')}}</strong>! Kamu Berhasil Login sebagai <strong>{{ session('role_name')}}</strong>.</p>
            <hr>
            <a href="/logout" class="btn btn-danger w-auto">Logout</a>
        </div>
    </div>
</body>
</html>
