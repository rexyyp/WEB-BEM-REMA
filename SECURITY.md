# 🔒 Security Policy

## Supported Versions

| Version | Supported          |
| ------- | ------------------ |
| 1.0.x   | :white_check_mark: |

## Security Features

### Authentication & Authorization

-   ✅ Session-based authentication untuk admin
-   ✅ Password hashing menggunakan bcrypt
-   ✅ Rate limiting pada login (5 attempts/minute)
-   ✅ CSRF protection pada semua forms
-   ✅ Authorization checks di Form Requests

### Data Protection

-   ✅ SQL Injection protection (Laravel PDO)
-   ✅ XSS protection dengan Blade escaping
-   ✅ File upload validation (type, size, dimensions)
-   ✅ Environment variables untuk credentials (.env)
-   ✅ Sensitive files protection (.htaccess)

### Network Security

-   ✅ HTTPS enforcement (production)
-   ✅ Security headers (X-Frame-Options, X-XSS-Protection, etc.)
-   ✅ HSTS (HTTP Strict Transport Security)
-   ✅ Content Security Policy headers
-   ✅ Referrer Policy

### Application Security

-   ✅ Directory browsing disabled
-   ✅ Error handling dengan custom pages
-   ✅ Debug mode disabled (production)
-   ✅ Logging untuk monitoring
-   ✅ Cache optimization untuk performa

## Reporting a Vulnerability

Jika Anda menemukan vulnerability di aplikasi ini:

1. **JANGAN** buka public issue di GitHub
2. Email ke: **security@bemremaupi.ac.id** dengan detail:
    - Deskripsi vulnerability
    - Steps to reproduce
    - Potential impact
    - Suggested fix (optional)

### Response Timeline

-   **24 jam**: Acknowledgment email
-   **7 hari**: Initial assessment
-   **30 hari**: Fix & deployment (untuk critical issues)

### Recognition

Contributors yang melaporkan valid security issues akan:

-   Disebutkan di CHANGELOG (dengan permission)
-   Mendapat appreciation certificate
-   Listed di security hall of fame

## Security Best Practices

### For Developers

1. **Never commit sensitive data**

    ```bash
    # Add to .gitignore
    .env
    .env.production
    storage/*.key
    ```

2. **Use environment variables**

    ```php
    // ❌ Bad
    $apiKey = "hardcoded-key-123";

    // ✅ Good
    $apiKey = env('API_KEY');
    ```

3. **Validate all inputs**

    ```php
    // Always use Form Requests
    public function store(StoreBeritaRequest $request) {
        // Validated data only
    }
    ```

4. **Escape output**

    ```blade
    {{-- ✅ Escaped by default --}}
    {{ $user->name }}

    {{-- ⚠️ Use only when necessary --}}
    {!! $trustedHtml !!}
    ```

5. **Keep dependencies updated**
    ```bash
    composer update
    npm audit fix
    ```

### For Server Administrators

1. **Use HTTPS everywhere**

    - Install valid SSL certificate
    - Uncomment force HTTPS di .htaccess
    - Set APP_URL dengan https://

2. **Set proper permissions**

    ```bash
    # Linux/Mac
    chmod -R 775 storage bootstrap/cache
    chown -R www-data:www-data storage bootstrap/cache

    # Windows (PowerShell as Admin)
    icacls "storage" /grant "IIS_IUSRS:(OI)(CI)F" /T
    ```

3. **Secure .env file**

    ```bash
    chmod 600 .env
    # Ensure .htaccess blocks access to .env
    ```

4. **Enable firewall**

    ```bash
    # UFW (Ubuntu)
    ufw allow 80/tcp
    ufw allow 443/tcp
    ufw enable
    ```

5. **Regular backups**

    - Database (daily)
    - File uploads (daily)
    - .env file (secure location)

6. **Monitor logs**
    ```bash
    tail -f storage/logs/laravel.log
    ```

### For End Users (Admin)

1. **Use strong passwords**

    - Minimal 12 karakter
    - Kombinasi uppercase, lowercase, angka, simbol
    - Gunakan password manager

2. **Change default credentials**

    ```
    Default: admin@bemrema.upi.ac.id / admin123
    ⚠️ GANTI SEGERA setelah first login!
    ```

3. **Logout after use**

    - Selalu logout dari admin panel
    - Jangan simpan password di browser

4. **Beware of phishing**

    - Cek URL sebelum login
    - Jangan klik link mencurigakan
    - Verify email sender

5. **Report suspicious activity**
    - Login attempts yang tidak dikenal
    - Data yang berubah tanpa sepengetahuan
    - Error messages yang aneh

## Security Checklist

### Pre-Production

-   [ ] APP_ENV=production
-   [ ] APP_DEBUG=false
-   [ ] Strong APP_KEY generated
-   [ ] Database credentials secure
-   [ ] HTTPS configured
-   [ ] Security headers enabled
-   [ ] Rate limiting tested
-   [ ] File upload validation working
-   [ ] Admin password changed
-   [ ] Error pages working
-   [ ] Logs monitoring setup

### Post-Production

-   [ ] SSL certificate valid
-   [ ] Security headers verified (securityheaders.com)
-   [ ] Vulnerability scan passed
-   [ ] Backup system working
-   [ ] Monitoring alerts setup
-   [ ] Team notified of procedures
-   [ ] Documentation updated
-   [ ] Incident response plan ready

## Known Security Limitations

1. **No Two-Factor Authentication (2FA)**

    - Planned untuk versi selanjutnya
    - Gunakan strong password sebagai mitigasi

2. **No Audit Logging**

    - Admin actions belum ter-log
    - Planned untuk versi selanjutnya

3. **Single Admin Role**
    - Belum ada role-based permissions
    - Semua admin punya akses penuh

## Security Updates

Subscribe to security updates:

-   GitHub Watch repository
-   Email ke admin@bemremaupi.ac.id untuk newsletter

## Resources

-   [OWASP Top 10](https://owasp.org/www-project-top-ten/)
-   [Laravel Security](https://laravel.com/docs/security)
-   [PHP Security Guide](https://phptherightway.com/#security)
-   [Web Security Academy](https://portswigger.net/web-security)

## Contact

Security Team: security@bemremaupi.ac.id

---

**Last Updated**: December 1, 2025
