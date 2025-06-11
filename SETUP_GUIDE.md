# Local Development Setup Guide

This guide provides detailed instructions for setting up and running this WordPress site locally using Local WP.

## Prerequisites

### 1. Required Software
- [Local WP](https://localwp.com/) (latest version)
- Git ([Download](https://git-scm.com/downloads))
- GitHub account (for repository access)

### 2. System Requirements
- macOS 10.15+, Windows 10+, or Ubuntu 18.04+
- 4GB RAM minimum (8GB recommended)
- 1GB free disk space minimum
- Administrator access on your machine

## Installation Steps

### 1. Install Local WP
1. Download Local WP from [localwp.com](https://localwp.com/)
2. Run the installer for your operating system
3. Complete the installation process
4. Launch Local WP
5. Complete the initial setup if this is your first time

### 2. Clone the Repository
1. Open Terminal (macOS/Linux) or Command Prompt (Windows)
2. Navigate to your preferred directory
3. Clone the repository:
   ```bash
   git clone https://github.com/Eli-Mutitu/growmodo-testlocal.git
   ```

### 3. Import Site in Local WP

#### Method 1: Direct Import
1. Open Local WP
2. Click the "+" button in the bottom left
3. Select "Import site"
4. Choose "Import from folder"
5. Navigate to and select the cloned `growmodo-testlocal` folder
6. Configure site settings:
   - Site Name: "Growmodo Test"
   - Domain: "growmodo-test.local"
   - PHP Version: 8.1
   - Web Server: Nginx
   - MySQL Version: 8.0

#### Method 2: Manual Setup
If direct import doesn't work:
1. In Local WP, click "+" to create a new site
2. Configure new site:
   - Site Name: "Growmodo Test"
   - Domain: "growmodo-test.local"
   - PHP Version: 8.1
   - Web Server: Nginx
   - MySQL Version: 8.0
3. Once created, right-click the site and select "Open site folder"
4. Replace the `app` and `conf` folders with those from the cloned repository

### 4. Database Setup
1. In Local WP, right-click the site
2. Select "Open adminer"
3. Import the database:
   - Select "Import" from the left menu
   - Choose the SQL file from `app/sql/local.sql`
   - Click "Execute"

### 5. Configure WordPress
1. In Local WP, click "Start site"
2. Access WordPress admin:
   - URL: https://growmodo-test.local/wp-admin
   - Default credentials:
     - Username: admin
     - Password: password
3. Update admin password immediately

### 6. Install Required Plugins
Navigate to Plugins > Add New and install:
1. Advanced Custom Fields PRO
2. WP Migration DB Pro
3. Yoast SEO

## Troubleshooting

### Common Issues and Solutions

#### Site Won't Start
1. Check port conflicts:
   - In Local WP, right-click site
   - Select "Site Settings"
   - Try different port numbers
2. Clear Local WP cache:
   - Exit Local WP
   - Delete cache folder:
     - macOS: `~/Library/Application Support/Local/cache`
     - Windows: `%APPDATA%\Local\cache`

#### Database Connection Issues
1. Verify database credentials in `wp-config.php`
2. Reset database user:
   - Right-click site in Local WP
   - Select "MySQL > Reset Root Password"

#### White Screen of Death
1. Enable WP_DEBUG in wp-config.php
2. Check PHP error logs in Local WP
3. Increase PHP memory limit in php.ini

## Development Workflow

### Making Changes
1. Create a new branch for your feature:
   ```bash
   git checkout -b feature/your-feature-name
   ```
2. Make your changes
3. Test thoroughly
4. Commit and push changes:
   ```bash
   git add .
   git commit -m "Description of changes"
   git push origin feature/your-feature-name
   ```

### Updating the Site
1. Pull latest changes:
   ```bash
   git pull origin main
   ```
2. Refresh Local WP site
3. Check WordPress admin for any required updates

## Support

If you encounter any issues:
1. Check Local WP's [Community Forums](https://community.localwp.com/)
2. Review [Local WP Documentation](https://localwp.com/help-docs/)
3. Submit an issue on the GitHub repository

## Security Notes

- Change default admin credentials immediately
- Keep Local WP and WordPress core updated
- Never commit sensitive data to the repository
- Use environment variables for sensitive information 