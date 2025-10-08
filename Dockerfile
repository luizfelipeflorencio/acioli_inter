FROM php:8.1-apache

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache modules
RUN a2enmod rewrite

# Copy application files
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Install composer (if needed)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html/

# Expose port
EXPOSE 80