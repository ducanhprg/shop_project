# Use the official PHP image as base
FROM php:8.2-fpm

# Install necessary extensions
RUN apt-get update && \
    apt-get install -y libzip-dev libonig-dev libpng-dev && \
    docker-php-ext-install pdo_mysql zip bcmath gd mysqli

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory to php app directory
WORKDIR /var/www/html

# Expose port 9000 for the FPM process to listen on
EXPOSE 9000
# Start the FPM process
CMD ["php-fpm"]
