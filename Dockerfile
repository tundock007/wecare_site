# WeCare Theme - WordPress with Custom Theme
FROM wordpress:latest

# Fix Apache MPM conflict on Railway
RUN a2dismod mpm_event && a2enmod mpm_prefork

# Copy custom theme into WordPress themes directory
COPY wp-content/themes/wecare-theme /var/www/html/wp-content/themes/wecare-theme

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/wecare-theme

# Expose port 80
EXPOSE 80
