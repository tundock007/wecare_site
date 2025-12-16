FROM wordpress:latest

# Disable conflicting MPM modules and ensure only prefork is enabled
RUN a2dismod mpm_event mpm_worker 2>/dev/null || true \
    && a2enmod mpm_prefork 2>/dev/null || true

# Copy the theme to the WordPress themes directory
COPY . /var/www/html/wp-content/themes/wecare/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/wecare

# Remove files that shouldn't be in the theme folder
RUN rm -f /var/www/html/wp-content/themes/wecare/Dockerfile \
    && rm -f /var/www/html/wp-content/themes/wecare/.gitignore \
    && rm -rf /var/www/html/wp-content/themes/wecare/.git

# Expose port
EXPOSE 80

# Use the default WordPress entrypoint
CMD ["apache2-foreground"]
