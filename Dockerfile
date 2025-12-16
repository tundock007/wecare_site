FROM wordpress:6.4-php8.2-apache

# Copy custom entrypoint to fix MPM issue
COPY docker-entrypoint-custom.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint-custom.sh

# Copy theme files
COPY style.css functions.php header.php footer.php front-page.php index.php page.php README.md /var/www/html/wp-content/themes/wecare/
COPY assets/ /var/www/html/wp-content/themes/wecare/assets/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/wecare

# Use custom entrypoint
ENTRYPOINT ["docker-entrypoint-custom.sh"]
CMD ["apache2-foreground"]
