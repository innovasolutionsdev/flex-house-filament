#!/bin/bash
set -e  # exit if any command fails

# Ensure correct permissions
sudo chown -R webapp:webapp /var/app/current/storage /var/app/current/bootstrap/cache
sudo chmod -R 775 /var/app/current/storage /var/app/current/bootstrap/cache

# Install PHP dependencies (only if not already handled in buildspec)
composer install --no-dev --optimize-autoloader

# Laravel optimizations
# php artisan config:clear
# php artisan cache:clear
# php artisan route:clear
# php artisan view:clear

# php artisan config:cache
# php artisan route:cache
# php artisan view:cache

# Build frontend assets
npm ci || npm install
npm run build

# Run database migrations (optional, but risky in prod)
php artisan migrate --force || true
