<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            background: url('/images/office-background.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .login-card img {
            max-width: 150px;
            margin-bottom: 1rem;
        }
        .login-card h2 {
            color: #1e3a8a;
            margin-bottom: 1rem;
        }
        .login-card .form-group {
            margin-bottom: 1rem;
            text-align: left;
        }
        .login-card .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #1e3a8a;
        }
        .login-card .form-group input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-card button {
            width: 100%;
            padding: 0.75rem;
            background-color: #1e40af;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-card button:hover {
            background-color: #1e3a8a;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <img src="/images/desnet-logo.png" alt="Logo Desnet">
        <h2>PT. DES Teknology Informasi</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>