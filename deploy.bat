@echo off
REM ========================================
REM BEM REMA UPI - Windows Deployment Script
REM ========================================
REM Run this script on Windows server
REM ========================================

echo.
echo ========================================
echo  BEM REMA UPI - Deployment Script
echo ========================================
echo.

REM Check if .env exists
if not exist .env (
    echo [ERROR] .env file not found!
    echo Please copy .env.example to .env and configure it first.
    pause
    exit /b 1
)

echo [1/10] Putting application in maintenance mode...
call php artisan down

echo [2/10] Installing Composer dependencies...
call composer install --no-dev --optimize-autoloader

echo [3/10] Installing NPM dependencies...
call npm install

echo [4/10] Building production assets...
call npm run build

echo [5/10] Running database migrations...
call php artisan migrate --force

echo [6/10] Clearing all caches...
call php artisan cache:clear
call php artisan config:clear
call php artisan route:clear
call php artisan view:clear

echo [7/10] Optimizing for production...
call php artisan config:cache
call php artisan route:cache
call php artisan view:cache

echo [8/10] Creating storage symlink...
call php artisan storage:link

echo [9/10] Setting permissions...
REM For IIS
icacls "storage" /grant "IIS_IUSRS:(OI)(CI)F" /T
icacls "bootstrap\cache" /grant "IIS_IUSRS:(OI)(CI)F" /T

echo [10/10] Bringing application back online...
call php artisan up

echo.
echo ========================================
echo  Deployment completed successfully!
echo ========================================
echo.
echo Next steps:
echo 1. Test the website
echo 2. Check error logs in storage/logs/
echo 3. Monitor for any issues
echo.

pause
