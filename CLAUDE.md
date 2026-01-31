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

## CSS Font Size Variables

Font sizes are controlled via CSS custom properties in `style.css` (lines 50-55). Change these values to update fonts across the entire site:

```css
:root {
    --font-size-hero: clamp(24px, 4vw, 30px);      /* Hero/page titles (h1) */
    --font-size-section: clamp(16px, 3vw, 20px);   /* Section titles (h2) */
    --font-size-heading: 14px;                      /* Card/subsection headings (h3/h4) */
    --font-size-body: 12px;                         /* Body text, paragraphs */
    --font-size-small: 11px;                        /* Small text, captions */
    --font-size-button: 10px;                       /* Buttons */
}
```

| Variable | Current Value | Used For |
|----------|---------------|----------|
| `--font-size-hero` | 24-30px (responsive) | Hero headings, page titles |
| `--font-size-section` | 16-20px (responsive) | Section titles (h2) |
| `--font-size-heading` | 14px | Card headings, h3/h4 |
| `--font-size-body` | 12px | Body text, paragraphs |
| `--font-size-small` | 11px | Small text, captions, eligibility text |
| `--font-size-button` | 10px | Buttons |

## Deployment

Deploy theme files to WordPress.com via SSH/rsync:

```bash
rsync -avz -e "ssh -i ~/.ssh/id_ed25519" /Users/Ola/wecare-theme/wp-content/themes/wecare-theme/ wecaremn.wordpress.com@sftp.wp.com:htdocs/wp-content/themes/wecare-theme/
```
