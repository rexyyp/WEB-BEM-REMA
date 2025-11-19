<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Panel BEM REMA UPI - Kabinet Suar Sangga 2025">
    <title>Login Admin - BEM REMA UPI</title>
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
            position: relative;
            overflow: hidden;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.98) !important;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .login-button {
            width: 100%;
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%) !important;
            color: white !important;
            font-weight: 600;
            padding: 16px 24px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            font-size: 17px;
            transition: all 0.3s ease;
            display: block !important;
            margin-top: 8px;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        }
        .login-button:hover {
            background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%) !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
        }
        .login-button:active {
            transform: translateY(0);
        }
        .input-field {
            transition: all 0.3s ease;
        }
        .input-field:focus {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15);
        }
    </style>
</head>
<body class="min-h-screen relative overflow-hidden">
    
    {{-- Background Image --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('build/assets/image/Isola.png') }}" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-white/60"></div>
    </div>

    {{-- Logo Section - Top Right --}}
    <div style="position: fixed; top: 24px; right: 24px; z-index: 50; display: flex; gap: 12px;">
        <img src="{{ asset('build/assets/image/Logo Suar Sangga.png') }}" alt="Logo BEM REMA" style="height: 56px; width: auto;">
        <img src="{{ asset('build/assets/image/Logo Upi.png') }}" alt="Logo UPI" style="height: 56px; width: auto;">
    </div>

    {{-- Main Container --}}
    <div class="relative min-h-screen flex items-center justify-center p-4 z-10">
        <div class="w-full max-w-md px-6">
            {{-- Login Card --}}
            <div class="login-card rounded-3xl shadow-2xl p-14">
                {{-- Header --}}
                <div class="text-center mb-10">
                    <h1 class="text-3xl font-bold text-gray-900 mb-3">Login Admin</h1>
                    <p class="text-base text-gray-600">BEM REMA UPI - Kabinet Suar Sangga 2025</p>
                </div>

                {{-- Alert Messages --}}
                @if(session('success'))
                <div class="mb-4 p-3 bg-green-100 border border-green-300 text-green-800 rounded text-sm">
                    {{ session('success') }}
                </div>
                @endif

                @if($errors->any())
                <div class="mb-4 p-3 bg-red-100 border border-red-300 text-red-800 rounded text-sm">
                    {{ $errors->first() }}
                </div>
                @endif

                {{-- Login Form --}}
                <form action="{{ route('admin.login.post') }}" method="POST">
                    @csrf

                    {{-- Username Field --}}
                    <div style="margin-bottom: 10px;">
                        <label for="email" class="block text-sm font-semibold text-gray-800 mb-3">
                            Username
                        </label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               value="{{ old('email') }}"
                               required 
                               autofocus
                               class="input-field w-full px-5 py-4 text-gray-900 bg-white border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all @error('email') border-red-400 @enderror"
                               placeholder="Masukkan username Anda">
                    </div>

                    {{-- Password Field --}}
                    <div style="margin-bottom: 10px;">
                        <label for="password" class="block text-sm font-semibold text-gray-800 mb-3">
                            Password
                        </label>
                        <div class="relative">
                            <input type="password" 
                                   id="password" 
                                   name="password" 
                                   required
                                   class="input-field w-full px-5 py-4 text-gray-900 bg-white border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all @error('password') border-red-400 @enderror"
                                   placeholder="Masukkan password Anda">
                            <button type="button" 
                                    onclick="togglePassword()"
                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-blue-600 transition-colors">
                                <svg id="eye-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div style="margin-top: 48px;">
                        <button type="submit" class="login-button">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>';
            }
        }
    </script>

</body>
</html>
