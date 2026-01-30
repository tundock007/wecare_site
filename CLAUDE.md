# WeCare Theme - Development Instructions

## Docker Development Workflow

After making changes to theme files, rebuild and restart the Docker container:

```bash
docker compose build --no-cache wordpress && docker compose up -d wordpress
```

This is required because the theme is copied into the container at build time, not mounted directly.

## Project Structure

- `wp-content/themes/wecare-theme/` - Main WordPress theme files
- `docker-compose.yml` - Docker configuration
- `Dockerfile` - WordPress container build instructions
- `docker-entrypoint.sh` - Container startup script

## Local Development URL

- WordPress: http://localhost:8080
- phpMyAdmin: http://localhost:8081
