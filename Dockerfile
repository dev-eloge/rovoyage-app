# --- Étape 1 : compilation du CSS/JS (Tailwind + Vite) ---
FROM node:22-alpine AS assets
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci --no-audit --no-fund
COPY vite.config.js ./
COPY resources ./resources
RUN npm run build

# --- Étape 2 : application PHP ---
FROM richarvey/nginx-php-fpm:3.1.6

WORKDIR /var/www/html
COPY . .
COPY --from=assets /app/public/build ./public/build

# Config de l'image
ENV SKIP_COMPOSER=1
ENV WEBROOT=/var/www/html/public
ENV PHP_ERRORS_STDERR=1
ENV RUN_SCRIPTS=1
ENV REAL_IP_HEADER=1

# Config Laravel
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr
# Sessions en cookie chiffré et cache en fichiers : aucune requête MySQL pour afficher une page
# (la base n'est utilisée qu'à l'envoi du formulaire). Modifiable dans Render > Environment.
ENV SESSION_DRIVER=cookie
ENV CACHE_STORE=file

ENV COMPOSER_ALLOW_SUPERUSER=1

# Dossiers nécessaires à Laravel
RUN mkdir -p storage/framework/sessions \
    storage/framework/views \
    storage/framework/cache/data \
    storage/logs \
    bootstrap/cache

# Dépendances PHP installées au build (pas à chaque démarrage)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Permissions
RUN chown -R nginx:nginx storage bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache && \
    chmod +x scripts/*.sh

CMD ["/start.sh"]
