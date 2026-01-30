#!/bin/bash
set -e

# Always copy theme from build location to ensure updates
echo "Installing/Updating WeCare theme..."
rm -rf /var/www/html/wp-content/themes/wecare-theme
cp -r /tmp/wecare-theme /var/www/html/wp-content/themes/
chown -R www-data:www-data /var/www/html/wp-content/themes/wecare-theme
echo "WeCare theme installed/updated!"

# Fix Apache MPM conflict
echo "Fixing Apache MPM configuration..."
a2dismod mpm_event mpm_worker 2>/dev/null || true
a2enmod mpm_prefork
echo "Apache MPM configured!"

# Enable mod_rewrite for WordPress permalinks
echo "Enabling mod_rewrite..."
a2enmod rewrite
echo "mod_rewrite enabled!"

# Create .htaccess for WordPress permalinks if it doesn't exist
if [ ! -f /var/www/html/.htaccess ]; then
    echo "Creating .htaccess for WordPress permalinks..."
    cat > /var/www/html/.htaccess << 'EOF'
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress
EOF
    chown www-data:www-data /var/www/html/.htaccess
    echo ".htaccess created!"
fi

# Run original WordPress entrypoint
exec docker-entrypoint.sh "$@"
