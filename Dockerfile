# Use PHP with Apache
FROM php:8.2-apache

# Copy all files into the container
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
