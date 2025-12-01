<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>503 - Maintenance | BEM REMA UPI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
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

        .illustration {
            margin-bottom: 32px;
            font-size: 100px;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <div class="illustration">🔧</div>
        <div class="error-code">503</div>
        <h1 class="error-title">Sedang Maintenance</h1>
        <p class="error-message">
            Kami sedang melakukan pemeliharaan sistem untuk meningkatkan performa. Mohon kembali beberapa saat lagi. Terima kasih atas kesabaran Anda!
        </p>
    </div>
</body>

</html>