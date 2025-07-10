# Use the official PHP image with Apache
FROM php:8.2-apache

# Enable mod_rewrite if needed (optional for clean URLs)
RUN a2enmod rewrite

# Copy your website files into the web root
COPY . /var/www/html/

# Optional: Set file permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
