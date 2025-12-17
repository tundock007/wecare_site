# WeCare Theme - WordPress with Custom Theme
FROM wordpress:latest

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
