# WeCare Theme - WordPress with Custom Theme
FROM wordpress:latest

# Enable mod_rewrite for WordPress permalinks
RUN a2enmod rewrite

# Configure Apache to allow .htaccess overrides
RUN echo '<Directory /var/www/html>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/wordpress-htaccess.conf \
    && a2enconf wordpress-htaccess

# Copy theme to temp location (volume will override /var/www/html)
COPY wp-content/themes/wecare-theme /tmp/wecare-theme

# Copy custom entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/wecare-entrypoint.sh
RUN chmod +x /usr/local/bin/wecare-entrypoint.sh

# Use custom entrypoint that copies theme to volume at runtime
ENTRYPOINT ["wecare-entrypoint.sh"]
CMD ["apache2-foreground"]

# Expose port 80
EXPOSE 80
