# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Install any additional PHP extensions or packages you need
# Install cURL and other extensions you may require
RUN apt-get update && apt-get install -y libcurl4-openssl-dev
RUN docker-php-ext-install pdo pdo_mysql curl

# Expose port 80 to the outside world
EXPOSE 80

# Define the command to start the Apache web server
CMD ["apache2-foreground"]
