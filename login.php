<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator - SMKN 1 Dlanggu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0d6efd 0%, #003d99 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .login-card {
            background: #ffffff;
            border: none;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
            padding: 40px;
        }
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-header img {
            width: 70px;
            margin-bottom: 15px;
        }
        .login-header h4 {
            font-weight: 600;
            color: #333;
        }
        .form-label {
            font-size: 0.9rem;
            font-weight: 500;
            color: #555;
        }
        .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 1px solid #ddd;
        }
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.1);
        }
        .btn-login {
            background: #0d6efd;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-login:hover {
            background: #0b5ed7;
            transform: translateY(-2px);
        }
        .back-home {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #777;
            text-decoration: none;
            font-size: 0.85rem;
        }
        .back-home:hover {
            color: #0d6efd;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-header">
            <img src="assets/logo_smk.jpeg" alt="Logo Sekolah">
            <h4>Login Admin</h4>
            <p class="text-muted small">Silahkan masuk ke panel pengelola</p>
        </div>

        <form action="proses_login.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="admin" required>
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login">Masuk Sekarang</button>
        </form>

        <a href="index.php" class="back-home">← Kembali ke Beranda</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>