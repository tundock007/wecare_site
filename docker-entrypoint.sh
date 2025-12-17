#!/bin/bash
set -e

# Copy theme from build location to volume if it doesn't exist
if [ ! -d "/var/www/html/wp-content/themes/wecare-theme" ]; then
    echo "Installing WeCare theme..."
    cp -r /tmp/wecare-theme /var/www/html/wp-content/themes/
    chown -R www-data:www-data /var/www/html/wp-content/themes/wecare-theme
    echo "WeCare theme installed!"
fi

# Run original WordPress entrypoint
exec docker-entrypoint.sh "$@"
