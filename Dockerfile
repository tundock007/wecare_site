FROM wordpress:6.4-apache

# Copy only the theme files (not Dockerfile, git, etc.)
COPY style.css functions.php header.php footer.php front-page.php index.php page.php /var/www/html/wp-content/themes/wecare/
COPY assets/ /var/www/html/wp-content/themes/wecare/assets/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/wecare
