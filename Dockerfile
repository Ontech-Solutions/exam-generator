# Use the official PHP image as the base image
FROM php:8.2.1-apache

# Set the working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    unzip \
    git \
    libonig-dev \
    libzip-dev \
    libpng-dev \
    libxml2-dev \
    libpq-dev \
    zlib1g-dev \
    libjpeg-dev \
    vim \
    nano \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    zip \
    nodejs \
    npm \
    && apt-get install -y libicu-dev libzip-dev libonig-dev --no-install-recommends \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl zip calendar \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip intl

RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . /var/www/html

# Set the Apache document root
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Enable Apache modules
RUN a2enmod rewrite
RUN a2enmod headers

# Set the permissions for Laravel storage and bootstrap/cache folders
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Install Composer dependencies, including barryvdh/laravel-dompdf
RUN composer install --optimize-autoloader --no-dev

# Install Node.js dependencies
COPY package*.json ./
RUN npm install

# Publish DomPDF configuration file (in case the artisan command doesn't work)
RUN php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider" || true

# Generate key and configure .env
RUN php artisan key:generate

# Expose port 80 for HTTP traffic
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
