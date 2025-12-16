FROM bitnami/wordpress:latest

# Copy theme files to Bitnami's WordPress location
COPY *.php /bitnami/wordpress/wp-content/themes/wecare/
COPY style.css /bitnami/wordpress/wp-content/themes/wecare/
COPY assets/ /bitnami/wordpress/wp-content/themes/wecare/assets/
