#!/bin/bash

# ========================================
# BEM REMA UPI - Production Deployment Script
# ========================================
# Run this script on your server to deploy
# Usage: bash deploy.sh
# ========================================

echo "🚀 Starting BEM REMA UPI Deployment..."
echo "======================================"

# Color codes
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Check if .env exists
if [ ! -f .env ]; then
    echo -e "${RED}❌ Error: .env file not found!${NC}"
    echo "Please copy .env.example to .env and configure it first."
    exit 1
fi

# Maintenance mode
echo -e "${YELLOW}⚠️  Putting application in maintenance mode...${NC}"
php artisan down

# Pull latest changes (if using Git)
echo -e "${YELLOW}📥 Pulling latest changes...${NC}"
git pull origin main

# Install/Update Composer dependencies
echo -e "${YELLOW}📦 Installing Composer dependencies...${NC}"
composer install --no-dev --optimize-autoloader

# Install/Update NPM dependencies
echo -e "${YELLOW}📦 Installing NPM dependencies...${NC}"
npm install

# Build assets
echo -e "${YELLOW}🔨 Building production assets...${NC}"
npm run build

# Run migrations
echo -e "${YELLOW}🗄️  Running database migrations...${NC}"
php artisan migrate --force

# Clear all caches
echo -e "${YELLOW}🧹 Clearing all caches...${NC}"
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize for production
echo -e "${YELLOW}⚡ Optimizing for production...${NC}"
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage symlink if not exists
if [ ! -L public/storage ]; then
    echo -e "${YELLOW}🔗 Creating storage symlink...${NC}"
    php artisan storage:link
fi

# Set proper permissions
echo -e "${YELLOW}🔒 Setting permissions...${NC}"
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Bring application back online
echo -e "${YELLOW}✅ Bringing application back online...${NC}"
php artisan up

echo ""
echo -e "${GREEN}======================================"
echo "🎉 Deployment completed successfully!"
echo "======================================${NC}"
echo ""
echo "Next steps:"
echo "1. Test the website"
echo "2. Check error logs: tail -f storage/logs/laravel.log"
echo "3. Monitor for any issues"
echo ""
