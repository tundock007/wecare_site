FROM wordpress:latest

# Copy the theme to the WordPress themes directory
COPY . /var/www/html/wp-content/themes/wecare/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/wecare

# Remove files that shouldn't be in the theme folder
RUN rm -f /var/www/html/wp-content/themes/wecare/Dockerfile \
    && rm -f /var/www/html/wp-content/themes/wecare/.gitignore \
    && rm -rf /var/www/html/wp-content/themes/wecare/.git
