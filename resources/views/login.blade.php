<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PACU!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: radial-gradient(circle, white 0%, #fef58e 40%, #ffbe00 68%, #ff9a00 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            font-family: "SF Pro Display", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .brand-title {
            font-weight: 800;
            color: #ff9900;
            font-size: 1.75rem;
        }

        .brand-subtitle {
            color: #6c757d;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .form-label {
            font-weight: 600;
            color: #555555;
            font-size: 0.9rem;
            margin-bottom: 0.4rem;
        }
        .form-control {
            border-radius: 50px;
            padding: 0.65rem 1.25rem;
            border: 1.5px solid #dcdcdc;
            font-size: 0.9rem;
        }

        .form-control:focus {
            border-color: #ff9900;
            box-shadow: 0 0 0 0.25rem rgba(255, 153, 0, 0.25);
        }

        .btn-custom {
            background-color: #ff9900;
            border: none;
            color: white;
            border-radius: 50px;
            padding: 0.55rem 3.5rem;
            min-width: 160px;
            font-weight: 700;
            font-size: 1.05rem;
            transition: all 0.2s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #e68a00;
            color: white;
        }

    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center mb-4">
        <h3 class="brand-title mb-1">PACU!</h3>
        <p class="brand-subtitle mb-0">Platform Aplikasi Capaian Unggul</p>
    </div>

    <form action="/login" method="POST">
        @csrf

        @if(session('error'))
           <div class="alert alert-danger p-2 small text-center mb-3"
                {{session('error')}}
           </div>
        @endif

        <div class="mb-3">
            <label for="email" class="form-label">Email Pegawai / Admin</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-custom">Log In</button>
        </div>
    </form>
</div>

</body>
</html>
