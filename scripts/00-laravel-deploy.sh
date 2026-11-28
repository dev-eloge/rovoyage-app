#!/usr/bin/env bash
# Exécuté automatiquement au démarrage du conteneur (RUN_SCRIPTS=1)
set -e
cd /var/www/html

echo "Mise en cache de la configuration..."
php artisan config:cache

echo "Mise en cache des routes et des vues..."
php artisan route:cache
php artisan view:cache

echo "Migrations de la base de données..."
php artisan migrate --force
