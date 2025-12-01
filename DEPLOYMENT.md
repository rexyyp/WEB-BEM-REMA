# 🚀 Panduan Deployment BEM REMA UPI

## 📋 Checklist Pre-Deployment

### 1. Environment Configuration

-   [ ] Copy `.env.example` ke `.env`
-   [ ] Update `APP_ENV=production`
-   [ ] Update `APP_DEBUG=false`
-   [ ] Update `APP_URL=https://yourdomain.com`
-   [ ] Update `ASSET_URL=https://yourdomain.com`
-   [ ] Setup database (MySQL recommended)
-   [ ] Generate APP_KEY: `php artisan key:generate`

### 2. Database Setup

```bash
# Jalankan migrations
php artisan migrate --force

# Seed data admin dan berita contoh
php artisan db:seed --force

# Atau fresh install (HATI-HATI: hapus semua data)
php artisan migrate:fresh --seed --force
```

### 3. Storage & Permissions

```bash
# Buat symlink storage
php artisan storage:link

# Set permissions (Linux/Mac)
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Windows (run PowerShell as Admin)
icacls "storage" /grant "IIS_IUSRS:(OI)(CI)F" /T
icacls "bootstrap\cache" /grant "IIS_IUSRS:(OI)(CI)F" /T
```

### 4. Cache Optimization

```bash
# Cache semua config untuk performa
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Build assets production
npm install
npm run build
```

### 5. Security Checklist

-   [ ] HTTPS aktif dan SSL certificate valid
-   [ ] Uncomment force HTTPS di `.htaccess` (line 9-10)
-   [ ] Uncomment HSTS header di `.htaccess` (line 44)
-   [ ] File `.env` tidak accessible dari web
-   [ ] Directory browsing disabled
-   [ ] Admin area protected dengan strong password

## 🔧 Server Requirements

### Minimum Requirements

-   PHP >= 8.2
-   MySQL/PostgreSQL/SQLite
-   Composer
-   Node.js & NPM (untuk build assets)

### PHP Extensions

-   BCMath
-   Ctype
-   Fileinfo
-   JSON
-   Mbstring
-   OpenSSL
-   PDO
-   Tokenizer
-   XML

## 📁 File Structure di Server

```
public_html/
├── .htaccess          # Security & rewrite rules
├── index.php          # Entry point
├── robots.txt         # SEO
├── storage/           # Symlink ke ../storage/app/public
└── build/             # Compiled assets

app/
bootstrap/
config/
database/
resources/
routes/
storage/
├── app/
│   ├── public/        # File uploads
│   │   └── beritas/   # Thumbnail berita
│   └── private/
├── framework/
│   ├── cache/
│   ├── sessions/
│   └── views/
└── logs/
vendor/
.env                   # JANGAN upload ke Git!
```

## 🌐 Deployment Steps

### Option A: Shared Hosting (cPanel)

1. Upload semua file KECUALI folder `node_modules` dan `vendor`
2. Set document root ke folder `public`
3. Jalankan `composer install --no-dev --optimize-autoloader`
4. Jalankan `npm install && npm run build`
5. Setup database di cPanel
6. Import atau jalankan migrations
7. Set permissions storage dan cache

### Option B: VPS (Ubuntu/Debian)

```bash
# Clone repository
git clone https://github.com/rexyyp/WEB-BEM-REMA.git
cd WEB-BEM-REMA

# Install dependencies
composer install --no-dev --optimize-autoloader
npm install && npm run build

# Setup environment
cp .env.example .env
php artisan key:generate

# Setup database
php artisan migrate --force
php artisan db:seed --force

# Setup storage
php artisan storage:link

# Cache everything
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set permissions
sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache

# Setup Nginx/Apache
# Point document root ke /path/to/WEB-BEM-REMA/public
```

## 🔐 Default Admin Credentials

**⚠️ PENTING: Ganti password setelah login pertama!**

```
Email: admin@bemrema.upi.ac.id
Password: admin123
```

Akses admin: `https://yourdomain.com/admin/login`

## 🐛 Troubleshooting

### Error "500 Internal Server Error"

```bash
# Check logs
tail -f storage/logs/laravel.log

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Regenerate cache
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Error "Permission Denied"

```bash
# Fix permissions
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### Error "Mix Manifest Not Found"

```bash
# Rebuild assets
npm install
npm run build
```

### Upload Gambar Tidak Berfungsi

```bash
# Pastikan symlink dibuat
php artisan storage:link

# Check permissions
ls -la public/storage
chmod -R 775 storage/app/public
```

## 📊 Monitoring & Maintenance

### Daily Tasks

-   Monitor error logs: `storage/logs/laravel.log`
-   Check disk space untuk storage/app/public

### Weekly Tasks

-   Backup database
-   Review admin activity logs
-   Update dependencies jika ada security patches

### Monthly Tasks

-   Review dan optimize images di storage
-   Cleanup old logs
-   Performance audit

## 🔄 Update/Rollback

### Update ke versi baru

```bash
# Backup dulu!
php artisan down

# Pull changes
git pull origin main

# Update dependencies
composer install --no-dev --optimize-autoloader
npm install && npm run build

# Run migrations
php artisan migrate --force

# Clear & rebuild cache
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

php artisan up
```

### Rollback jika ada masalah

```bash
php artisan migrate:rollback --step=1
git checkout <previous-commit>
```

## 📞 Support & Documentation

-   Laravel Docs: https://laravel.com/docs
-   BEM REMA UPI: https://yourdomain.com
-   Issue Tracker: https://github.com/rexyyp/WEB-BEM-REMA/issues

## ✅ Post-Deployment Checklist

-   [ ] Website accessible via HTTPS
-   [ ] Admin login berfungsi
-   [ ] Upload gambar berita berfungsi
-   [ ] CRUD berita berfungsi
-   [ ] Homepage, Tentang, Berita pages load dengan baik
-   [ ] Error pages (404, 500) tampil dengan benar
-   [ ] robots.txt accessible
-   [ ] sitemap.xml accessible dan valid
-   [ ] Meta tags SEO muncul di source code
-   [ ] Social media sharing menampilkan preview yang benar
-   [ ] Rate limiting login berfungsi (max 5x/menit)
-   [ ] Security headers aktif (check dengan securityheaders.com)

## 🎉 Selamat!

Website BEM REMA UPI sudah siap untuk production!

**Jangan lupa:**

1. Ganti password admin default
2. Setup backup otomatis
3. Monitor logs secara berkala
4. Update konten dan berita secara rutin
