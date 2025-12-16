# WeCare Theme - WordPress with Custom Theme
FROM wordpress:latest

# Copy custom theme into WordPress themes directory
COPY wp-content/themes/wecare-theme /var/www/html/wp-content/themes/wecare-theme

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/wecare-theme

# Create a startup script to fix Apache MPM before starting
RUN echo '#!/bin/bash\n\
# Remove all MPM modules first\n\
a2dismod mpm_event mpm_worker mpm_prefork 2>/dev/null || true\n\
# Enable only mpm_prefork\n\
a2enmod mpm_prefork\n\
# Start Apache\n\
exec apache2-foreground' > /usr/local/bin/start-apache.sh \
    && chmod +x /usr/local/bin/start-apache.sh

# Use our custom startup script
CMD ["/usr/local/bin/start-apache.sh"]

# Expose port 80
EXPOSE 80
