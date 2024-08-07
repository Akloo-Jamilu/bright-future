# Use the official PHP image with FPM
FROM php:8.2-fpm

# Set the working directory
WORKDIR /var/www/html

# Copy the application code into the container
COPY . /var/www/html

# Install any PHP extensions required
RUN docker-php-ext-install pdo pdo_mysql

# Expose the port on which the app will run
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
