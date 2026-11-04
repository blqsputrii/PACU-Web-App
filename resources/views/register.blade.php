<!DOCTYPE html>
<html lang="id" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - PACU!</title>
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
        .card {
            background: #ffffff;
            padding: 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            text-align: center;
        }
        .title {
            color: #ff9900;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .subtitle {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: bold;
            color: #444;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border-radius: 25px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 14px;
            box-sizing: border-box;
        }

        .login-label {
            text-align:right;
            font-size: 11px;
            color: #666;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .btn-group {
            display: flex;
            gap: 15px;
        }

        .btn {
            flex: 1;
            padding: 12px 0;
            border-radius: 25px;
            border: none;
            font-size: 15px;
            cursor: pointer;
            color: #fff;
            background-color: #ff9800;
            text-decoration: none;
            display: inline-block;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 3px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="title">Hi, there!</div>
        <p class="subtitle">Register your account now!</p>

        <form action="/register" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{ old('name') }}" required>
                @error('name') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required>
                @error('email') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm your password" required>
                @error('password_confirmation') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>Role</label>
                <select name="role" class="form-control" required>
                    <option value="" disabled selected>Select a role</option>
                    <option value="admin">Admin</option>
                    <option value="pegawai">Pegawai</option>
                </select>
                @error('role') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="login-label">I already have an account</div>
            <div class=btn-group>
                <button type="submit" class="btn">Sign Up</button>
                <a href="{{ route('login') }}" class="btn">Log In</a>
            </div>
        </form>
    </div>
</body>
</html>
