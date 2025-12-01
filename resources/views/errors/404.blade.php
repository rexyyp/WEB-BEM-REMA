<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan | BEM REMA UPI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 20px;
        }

        .error-container {
            text-align: center;
            color: white;
            max-width: 600px;
        }

        .error-code {
            font-size: 120px;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 20px;
            text-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .error-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .error-message {
            font-size: 18px;
            opacity: 0.9;
            margin-bottom: 32px;
            line-height: 1.6;
        }

        .btn-home {
            display: inline-block;
            background: white;
            color: #667eea;
            padding: 14px 32px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .btn-home:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .illustration {
            margin-bottom: 32px;
            font-size: 100px;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <div class="illustration">🔍</div>
        <div class="error-code">404</div>
        <h1 class="error-title">Halaman Tidak Ditemukan</h1>
        <p class="error-message">
            Maaf, halaman yang Anda cari tidak dapat ditemukan. Halaman mungkin telah dipindahkan atau dihapus.
        </p>
        <a href="{{ url('/') }}" class="btn-home">
            ← Kembali ke Beranda
        </a>
    </div>
</body>

</html>