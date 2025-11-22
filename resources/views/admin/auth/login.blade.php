<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Panel BEM REMA UPI - Kabinet Suar Sangga 2025">
    <title>Admin Login - BEM REMA UPI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            min-height: 100vh;
            background: #f8fafc;
            overflow-x: hidden;
        }
        
        /* Split Layout Container */
        .split-container {
            display: flex;
            min-height: 100vh;
            width: 100%;
        }
        
        /* Left Side - Login Card (40-45%) */
        .left-panel {
            flex: 0 0 42%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background: #ffffff;
        }
        
        /* Right Side - Abstract Illustration (55-60%) */
        .right-panel {
            flex: 1;
            position: relative;
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 25%, #3b82f6 50%, #fbbf24 75%, #FACC15 100%);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Abstract Shapes */
        .abstract-shape {
            position: absolute;
            border-radius: 200px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.05));
            backdrop-filter: blur(10px);
        }
        
        .shape-1 {
            width: 400px;
            height: 600px;
            top: -100px;
            right: -50px;
            transform: rotate(-15deg);
            animation: float-slow 20s ease-in-out infinite;
        }
        
        .shape-2 {
            width: 350px;
            height: 500px;
            bottom: -80px;
            left: 10%;
            transform: rotate(25deg);
            animation: float-slow 18s ease-in-out infinite reverse;
        }
        
        .shape-3 {
            width: 250px;
            height: 400px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-30deg);
            animation: float-slow 22s ease-in-out infinite;
        }
        
        @keyframes float-slow {
            0%, 100% { transform: translateY(0) rotate(-15deg); }
            50% { transform: translateY(-30px) rotate(-20deg); }
        }
        
        /* Login Card */
        .login-card {
            width: 100%;
            max-width: 480px;
            background: #ffffff;
            border-radius: 40px;
            padding: 50px 45px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
        }
        
        /* Typography */
        .login-title {
            font-size: 32px;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }
        
        .login-subtitle {
            font-size: 14px;
            color: #94a3b8;
            margin-bottom: 40px;
        }
        
        /* Input Fields - Underline Style */
        .input-group {
            margin-bottom: 32px;
        }
        
        .input-label-static {
            display: block;
            font-size: 14px;
            color: #64748b;
            font-weight: 600;
            margin-bottom: 8px;
        }
        
        .input-underline {
            width: 100%;
            padding: 12px 0;
            font-size: 15px;
            color: #1e293b;
            background: transparent;
            border: none;
            border-bottom: 2px solid #e2e8f0;
            outline: none;
            transition: all 0.3s ease;
        }
        
        .input-underline:focus {
            border-bottom-color: #2563eb;
        }
        
        .input-underline::placeholder {
            color: #cbd5e1;
        }
        
        /* Checkbox Remember Me */
        .remember-checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 24px;
        }
        
        .remember-checkbox input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #2563eb;
        }
        
        .remember-checkbox label {
            font-size: 14px;
            color: #64748b;
            cursor: pointer;
            user-select: none;
        }
        
        /* Button - Blue Pill */
        .login-button {
            width: 100%;
            background: #2563eb;
            color: #ffffff;
            font-weight: 700;
            font-size: 15px;
            padding: 16px 32px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.3);
            letter-spacing: 0.5px;
        }
        
        .login-button:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(37, 99, 235, 0.4);
        }
        
        .login-button:active {
            transform: translateY(0);
        }
        
        /* Logo Section */
        .logo-section {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .logo-img {
            height: 60px;
            width: auto;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
        }
        
        .logo-divider {
            width: 2px;
            height: 50px;
            background: linear-gradient(to bottom, transparent, #cbd5e1, transparent);
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .split-container {
                flex-direction: column;
            }
            
            .left-panel {
                flex: none;
                min-height: 100vh;
            }
            
            .right-panel {
                display: none;
            }
        }
        
        @media (max-width: 640px) {
            .login-card {
                padding: 40px 30px;
                border-radius: 30px;
            }
            
            .login-title {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    {{-- Split Screen Layout --}}
    <div class="split-container">
        
        {{-- Left Panel - Login Card --}}
        <div class="left-panel">
            <div class="login-card">
                
                {{-- Logo Section --}}
                <div class="logo-section">
                    <img src="{{ asset('build/assets/image/Logo Suar Sangga.png') }}" alt="Logo Suar Sangga" class="logo-img">
                    <div class="logo-divider"></div>
                    <img src="{{ asset('build/assets/image/Logo Upi.png') }}" alt="Logo UPI" class="logo-img">
                </div>
                
                {{-- Header --}}
                <div class="mb-8">
                    <h1 class="login-title">Login to Admin</h1>
                    <p class="login-subtitle">Please enter your login information</p>
                </div>

                {{-- Alert Messages --}}
                @if(session('success'))
                <div class="mb-4 p-3 bg-green-50 border-l-4 border-green-400 text-green-700 rounded text-sm">
                    {{ session('success') }}
                </div>
                @endif

                @if($errors->any())
                <div class="mb-4 p-3 bg-red-50 border-l-4 border-red-400 text-red-700 rounded text-sm">
                    {{ $errors->first() }}
                </div>
                @endif

                {{-- Login Form --}}
                <form action="{{ route('admin.login.post') }}" method="POST">
                    @csrf

                    {{-- Username Field --}}
                    <div class="input-group">
                        <label for="email" class="input-label-static">Username</label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               value="{{ old('email') }}"
                               required 
                               autofocus
                               class="input-underline"
                               placeholder="Enter your email">
                    </div>

                    {{-- Password Field --}}
                    <div class="input-group">
                        <label for="password" class="input-label-static">Password</label>
                        <input type="password" 
                               id="password" 
                               name="password" 
                               required
                               class="input-underline"
                               placeholder="Enter your password">
                    </div>

                    {{-- Remember Me Checkbox --}}
                    <div class="remember-checkbox">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember me</label>
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit" class="login-button">
                        Log In
                    </button>
                </form>
                
            </div>
        </div>
        
        {{-- Right Panel - Abstract Illustration --}}
        <div class="right-panel">
            <div class="abstract-shape shape-1"></div>
            <div class="abstract-shape shape-2"></div>
            <div class="abstract-shape shape-3"></div>
        </div>
        
    </div>



</body>
</html>
