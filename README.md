# 🎓 Website BEM REMA UPI

Website resmi **Badan Eksekutif Mahasiswa Raya Universitas Pendidikan Indonesia** - Portal informasi, berita, dan kegiatan kemahasiswaan.

![Laravel](https://img.shields.io/badge/Laravel-12.x-red?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-blue?style=flat-square&logo=php)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-38bdf8?style=flat-square&logo=tailwind-css)

## ✨ Features

### Public Features

-   🏠 **Homepage** dengan hero section dan preview berita terbaru
-   📰 **Berita & Artikel** dengan sistem kategori dan pencarian
-   👥 **Tentang BEM** dengan profil organisasi dan struktur kepengurusan
-   🔍 **SEO Optimized** dengan meta tags, sitemap, dan robots.txt
-   📱 **Fully Responsive** untuk mobile, tablet, dan desktop

### Admin Features

-   🔐 **Secure Authentication** dengan rate limiting
-   📝 **CRUD Berita** lengkap dengan upload thumbnail
-   🖼️ **Image Management** dengan validasi ketat
-   📊 **Dashboard Analytics** untuk monitoring
-   ⚡ **Fast & Efficient** dengan caching optimization

## 🚀 Quick Start

### Prerequisites

-   PHP >= 8.2
-   Composer
-   Node.js & NPM
-   MySQL/PostgreSQL (production) atau SQLite (development)

### Installation

```bash
# Clone repository
git clone https://github.com/rexyyp/WEB-BEM-REMA.git
cd WEB-BEM-REMA

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Setup database
# Edit .env untuk konfigurasi database
php artisan migrate
php artisan db:seed

# Setup storage
php artisan storage:link

# Build assets
npm run dev  # untuk development
# atau
npm run build  # untuk production

# Run development server
php artisan serve
```

Akses website di `http://localhost:8000`

## 🔐 Default Admin Access

```
URL: http://localhost:8000/admin/login
Email: admin@bemrema.upi.ac.id
Password: admin123
```

**⚠️ PENTING:** Ganti password setelah login pertama!

## 📁 Project Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── BeritaController.php         # Public berita controller
│   │   ├── SitemapController.php        # SEO sitemap
│   │   └── Admin/
│   │       ├── AuthController.php       # Admin auth
│   │       ├── BeritaController.php     # Admin CRUD
│   │       └── DashboardController.php  # Admin dashboard
│   ├── Middleware/
│   │   └── AdminAuth.php                # Admin authentication
│   └── Requests/
│       ├── StoreBeritaRequest.php       # Validation untuk create
│       └── UpdateBeritaRequest.php      # Validation untuk update
├── Models/
│   ├── Berita.php                       # Berita model
│   └── User.php                         # User model
└── Helpers/
    └── DateHelper.php                   # Helper untuk format tanggal

resources/
├── views/
│   ├── home.blade.php                   # Homepage
│   ├── berita.blade.php                 # Daftar berita
│   ├── berita-detail.blade.php          # Detail berita
│   ├── tentang.blade.php                # Tentang BEM
│   ├── admin/                           # Admin views
│   ├── errors/                          # Custom error pages
│   │   ├── 404.blade.php
│   │   ├── 500.blade.php
│   │   └── 503.blade.php
│   ├── layouts/                         # Layout templates
│   └── partials/                        # Reusable components
├── css/
│   └── app.css                          # Tailwind CSS
└── js/
    └── app.js                           # JavaScript

public/
├── .htaccess                            # Security & rewrite rules
├── robots.txt                           # SEO robots file
└── storage/                             # Symlink ke storage/app/public
```

## 🔒 Security Features

-   ✅ HTTPS force (production)
-   ✅ CSRF protection
-   ✅ Rate limiting (5 login attempts per minute)
-   ✅ SQL injection protection (PDO)
-   ✅ XSS protection headers
-   ✅ File upload validation (type, size, dimensions)
-   ✅ Admin authentication middleware
-   ✅ Environment variables (.env)
-   ✅ Directory browsing disabled
-   ✅ Sensitive files protected

## 📦 Tech Stack

### Backend

-   **Laravel 12.x** - PHP Framework
-   **PHP 8.2+** - Programming Language
-   **MySQL/SQLite** - Database

### Frontend

-   **TailwindCSS 3.x** - CSS Framework
-   **Vite** - Build Tool
-   **Blade Templates** - Templating Engine
-   **Vanilla JavaScript** - Interactivity

### Tools & Libraries

-   **Composer** - PHP Dependency Manager
-   **NPM** - Node Package Manager
-   **Laravel Mix/Vite** - Asset Compilation

## 🌐 Deployment

Lihat **[DEPLOYMENT.md](DEPLOYMENT.md)** untuk panduan lengkap deployment ke production.

### Quick Deployment Checklist

```bash
# 1. Set environment
cp .env.example .env
# Edit .env: APP_ENV=production, APP_DEBUG=false

# 2. Install dependencies
composer install --no-dev --optimize-autoloader
npm install && npm run build

# 3. Setup database
php artisan migrate --force
php artisan db:seed --force

# 4. Cache optimization
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 5. Setup storage
php artisan storage:link
```

## 📝 Available Commands

```bash
# Development
php artisan serve              # Run development server
npm run dev                    # Watch assets untuk development
php artisan migrate:fresh      # Fresh database migration
php artisan db:seed            # Seed database dengan data dummy

# Production
npm run build                  # Build assets untuk production
php artisan optimize           # Optimize aplikasi (cache config, routes, views)
php artisan config:cache       # Cache configuration
php artisan route:cache        # Cache routes
php artisan view:cache         # Cache blade views

# Maintenance
php artisan cache:clear        # Clear application cache
php artisan config:clear       # Clear config cache
php artisan route:clear        # Clear route cache
php artisan view:clear         # Clear compiled views
php artisan storage:link       # Create storage symlink
```

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👥 Team

Developed by **BEM REMA UPI** Development Team

## 📞 Contact & Support

-   Website: https://yourdomain.com
-   Email: admin@bemrema.upi.ac.id
-   Instagram: @bemremaupi
-   GitHub Issues: [Create an issue](https://github.com/rexyyp/WEB-BEM-REMA/issues)

---

Made with ❤️ by BEM REMA UPI

# Run development server

php artisan serve

```

Akses website di `http://localhost:8000`

## 🔐 Default Admin Access

```

URL: http://localhost:8000/admin/login
Email: admin@bemrema.upi.ac.id
Password: admin123

```

**⚠️ PENTING:** Ganti password setelah login pertama!

## 📁 Project Structure

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
```
