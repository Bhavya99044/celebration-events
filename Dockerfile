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

# Generate Laravel app key
RUN php artisan key:generate --force

# Cache config and routes
RUN php artisan config:cache && php artisan route:cache

# Expose port
EXPOSE 10000

# Serve Laravel from public folder
CMD php -S 0.0.0.0:10000 -t public
