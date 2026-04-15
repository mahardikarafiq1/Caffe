FROM php:8.3-cli

# Set working directory
WORKDIR /app

# Install dependency sistem
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Copy composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy semua file project
COPY . .

# Install dependency Laravel
RUN composer install --no-interaction --optimize-autoloader

# Generate key (optional kalau belum ada)
RUN php artisan key:generate || true

# Expose port
EXPOSE 8000

# Run Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
