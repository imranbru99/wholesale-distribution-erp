#!/usr/bin/env sh
set -e
cd /var/www/html

if [ ! -f .env ] && [ -f .env.example ]; then
  cp .env.example .env
fi

if [ -z "$APP_KEY" ] || [ "$APP_KEY" = "base64:" ]; then
  php artisan key:generate --force --no-interaction || true
fi

php artisan config:clear || true
php artisan migrate --force --no-interaction || true
php artisan storage:link || true

exec "$@"
