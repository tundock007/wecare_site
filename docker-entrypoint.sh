#!/bin/bash
set -e

# Copy theme from build location to volume if it doesn't exist
if [ ! -d "/var/www/html/wp-content/themes/wecare-theme" ]; then
    echo "Installing WeCare theme..."
    cp -r /tmp/wecare-theme /var/www/html/wp-content/themes/
    chown -R www-data:www-data /var/www/html/wp-content/themes/wecare-theme
    echo "WeCare theme installed!"
fi

# Fix Apache MPM conflict
echo "Fixing Apache MPM configuration..."
a2dismod mpm_event mpm_worker 2>/dev/null || true
a2enmod mpm_prefork
echo "Apache MPM configured!"

# Run original WordPress entrypoint
exec docker-entrypoint.sh "$@"
