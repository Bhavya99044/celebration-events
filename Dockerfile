FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git \
    zip \
    libzip-dev \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy project files
COPY . .

# Install Laravel dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Cache config and routes (optional — comment out if error persists)
# RUN php artisan config:cache && php artisan route:cache

# Expose port
EXPOSE 10000

# Start Laravel built-in server & generate app key
CMD php artisan key:generate --force && php -S 0.0.0.0:10000 -t public
