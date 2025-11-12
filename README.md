# 🚀 worldwebtree URL Shortener

<div align="center">

![worldwebtree Logo](https://img.shields.io/badge/worldwebtree-URL%20Shortener-blue?style=for-the-badge&logo=data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDJDMTMuMSAyIDE0IDIuOSAxNCA0VjE2QzE0IDE3LjEgMTMuMSAxOCA5IDE4QzQuOSAxOCA0IDE3LjEgNCAxNlY0QzQgMi45IDQuOSAyIDYgMkg5QzEwLjEgMiAxMSAyLjkgMTEgNFYxNkMxMSAxNi45IDEwLjEgMTcgOSAxN0g2VjRDNiAzLjEgNi45IDQgOCA0SDEyWk05IDIwQzEwLjY2IDIwIDEyIDE4LjY2IDEyIDE3QzEyIDE1LjM0IDEwLjY2IDE0IDkgMTRDOS44IDE0IDggMTUuMzQgOCA5QzggOS42NiA5LjM0IDExIDYuNjYgMTFIMTQuNjZDMTMuMzQgMTMgMTIgMTQuMzQgMTIgMTZDMTEuMzQgMTYuNjYgMTEgMTcgMTEgMTdIMTlDMjAuNjYgMTcgMjIgMTUuMzQgMjIgMTNDMjIgMTEuMzQgMjAuNjYgMTAgMTkgMTBaIiBmaWxsPSIjMDhjNmFiIi8+Cjwvc3ZnPgo=)

[![Laravel Version](https://img.shields.io/badge/Laravel-10.x-red?style=flat-square)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.1+-blue?style=flat-square)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/badge/Build-Passing-brightgreen?style=flat-square)](#)

**Transform long URLs into clean, trackable short links with worldwebtree's enterprise-grade URL shortening platform.**

[🚀 Live Demo](#) • [📖 Documentation](#) • [🎯 Features](#features) • [⚡ Quick Start](#installation)

</div>

## ✨ Features

### 🎯 Core Features
- **Lightning Fast Shortening** - Create short links in milliseconds
- **Custom Domains** - Use your own branded domains
- **Real-time Analytics** - Track clicks, geography, and referral sources
- **API Access** - RESTful API for bulk operations
- **Enterprise Security** - SSL encryption and DDoS protection
- **Mobile Optimized** - Responsive design for all devices

### 🔧 Technical Features
- **Laravel 10** - Built with the latest Laravel framework
- **MySQL/PostgreSQL** - Robust database support
- **Rate Limiting** - Built-in protection against abuse
- **RESTful API** - Complete API for integrations
- **Background Jobs** - Queue support for high-volume processing
- **Caching** - Redis/Memcached support for performance

### 📊 Analytics & Insights
- **Click Tracking** - Monitor link performance in real-time
- **Geographic Data** - See where your audience comes from
- **Device Analytics** - Mobile vs desktop usage statistics
- **Referral Tracking** - Understand traffic sources
- **Custom Reports** - Export data for further analysis

## 🚀 Quick Start

### Prerequisites
- **PHP 8.1+**
- **Composer**
- **MySQL 5.7+/PostgreSQL** or **SQLite**
- **Node.js & NPM** (for asset compilation)
- **Git**

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/worldwebtree-url-shortener.git
   cd worldwebtree-url-shortener
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install && npm run dev
   # or for production
   npm run build
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup**
   ```bash
   # Configure your database in .env file
   # Then run migrations
   php artisan migrate
   ```

6. **Storage & Permissions**
   ```bash
   php artisan storage:link
   # Set proper permissions for storage and bootstrap/cache directories
   ```

7. **Start the Application**
   ```bash
   php artisan serve
   ```

   Visit `http://localhost:8000` in your browser!

## 📖 Usage

### 🌐 Web Interface

1. **Access the homepage** at `http://localhost:8000`
2. **Enter your long URL** in the input field
3. **Click "Shorten URL"** to generate your short link
4. **Copy the generated link** and share it anywhere

### 🔌 API Usage

#### Create Short Link
```bash
curl -X POST http://localhost:8000/shorten-link/store \
  -H "Content-Type: application/json" \
  -H "X-CSRF-TOKEN: your-csrf-token" \
  -d '{"link": "https://example.com/very/long/url"}'
```

#### Get Link Statistics
```bash
curl http://localhost:8000/api/stats/{short_code}
```

#### Delete Short Link
```bash
curl -X DELETE http://localhost:8000/api/links/{id} \
  -H "Authorization: Bearer your-token"
```

## 🗄️ Database Schema

### Short Links Table
```sql
CREATE TABLE short_links (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(6) UNIQUE NOT NULL,
    link TEXT NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    INDEX idx_code (code)
);
```

### Migration Commands
```bash
# Create initial migration
php artisan make:migration create_short_links_table

# Update existing table
php artisan make:migration update_short_links_table --table=short_links
```

## 🔧 Configuration

### Environment Variables
```env
# Application
APP_NAME="worldwebtree URL Shortener"
APP_ENV=production
APP_KEY=your-generated-key
APP_DEBUG=false

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=url_shortner
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Cache & Queue
CACHE_DRIVER=file
QUEUE_CONNECTION=database
SESSION_DRIVER=file

# Mail (optional)
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
```

## 🏗️ Project Structure

```
worldwebtree-url-shortener/
├── app/
│   ├── Http/Controllers/
│   │   └── ShortLinkController.php  # Main controller
│   ├── Models/
│   │   └── ShortLink.php           # Eloquent model
│   └── Providers/                   # Service providers
├── database/
│   ├── migrations/                  # Database migrations
│   └── factories/                   # Model factories
├── public/                          # Public assets
├── resources/
│   ├── views/                       # Blade templates
│   │   ├── frontend/
│   │   │   ├── index.blade.php     # Main landing page
│   │   │   └── partials/           # Reusable components
│   └── sass/                        # Stylesheets
├── routes/
│   ├── web.php                      # Web routes
│   └── api.php                      # API routes
├── storage/                         # File storage
├── tests/                           # Test files
├── artisan                          # Laravel CLI
├── composer.json                    # PHP dependencies
├── package.json                     # Node dependencies
└── webpack.mix.js                   # Asset compilation
```

## 🧪 Testing

### Run Tests
```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/ShortLinkTest.php

# Run with coverage
php artisan test --coverage
```

### Writing Tests
```php
<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\ShortLink;

class ShortLinkTest extends TestCase
{
    public function test_can_create_short_link()
    {
        $response = $this->post('/shorten-link/store', [
            'link' => 'https://example.com'
        ]);

        $response->assertStatus(200)
                ->assertJsonStructure(['short_url']);
    }

    public function test_short_link_redirects()
    {
        $shortLink = ShortLink::factory()->create();

        $response = $this->get('/' . $shortLink->code);

        $response->assertRedirect($shortLink->link);
    }
}
```

## 🚀 Deployment

### Production Deployment

1. **Environment Setup**
   ```bash
   # Set production environment
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   ```

2. **Optimize Laravel**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   composer install --optimize-autoloader --no-dev
   ```

3. **Database Migration**
   ```bash
   php artisan migrate --force
   ```

4. **Queue Workers** (if using queues)
   ```bash
   php artisan queue:work
   ```

5. **SSL Certificate**
   - Configure HTTPS for security
   - Update APP_URL to use https://

### Docker Deployment

```dockerfile
FROM php:8.1-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application
COPY . .

# Install dependencies
RUN composer install --optimize-autoloader --no-dev

# Generate key
RUN php artisan key:generate

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

EXPOSE 9000
CMD ["php-fpm"]
```

## 🤝 Contributing

We welcome contributions! Please see our [Contributing Guide](CONTRIBUTING.md) for details.

### Development Setup

1. **Fork the repository**
2. **Clone your fork**
   ```bash
   git clone https://github.com/your-username/worldwebtree-url-shortener.git
   cd worldwebtree-url-shortener
   ```

3. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

4. **Setup database**
   ```bash
   cp .env.example .env
   php artisan migrate
   php artisan db:seed
   ```

5. **Run development server**
   ```bash
   php artisan serve
   npm run watch
   ```

### Pull Request Process

1. **Create a feature branch**
   ```bash
   git checkout -b feature/amazing-feature
   ```

2. **Write tests** for your changes
3. **Ensure tests pass**
   ```bash
   php artisan test
   ```

4. **Update documentation** if needed
5. **Commit your changes**
   ```bash
   git commit -m 'Add amazing feature'
   ```

6. **Push to your branch**
   ```bash
   git push origin feature/amazing-feature
   ```

7. **Create a Pull Request**

### Code Style

This project follows:
- **PSR-12** coding standards
- **Laravel conventions**
- **Descriptive commit messages**

Run code style checks:
```bash
composer run style-check
```

## 📋 Roadmap

- [ ] **Click Tracking System** - Advanced analytics dashboard
- [ ] **Custom Domains** - White-label solutions
- [ ] **API Rate Limiting** - Advanced throttling
- [ ] **Bulk Operations** - Import/export functionality
- [ ] **QR Code Generation** - Mobile-friendly links
- [ ] **Link Expiration** - Time-based link deactivation
- [ ] **Password Protection** - Secure links with passwords
- [ ] **Admin Dashboard** - Complete management interface
- [ ] **Mobile App** - iOS/Android applications
- [ ] **Multi-tenant Support** - SaaS capabilities

## 🐛 Bug Reports & Support

### Reporting Bugs
Please use the [GitHub Issues](https://github.com/your-username/worldwebtree-url-shortener/issues) to report bugs.

**Before reporting a bug, please:**
- Check if the issue already exists
- Use a clear, descriptive title
- Include steps to reproduce
- Add relevant code snippets
- Include your environment details

### Support
- 📧 **Email**: support@worldwebtree.com
- 💬 **Discord**: [Join our community](https://discord.gg/worldwebtree)
- 📖 **Documentation**: [Read the docs](https://docs.worldwebtree.com)
- 🐛 **Bug Tracker**: [GitHub Issues](https://github.com/your-username/worldwebtree-url-shortener/issues)

## 📜 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

```
MIT License

Copyright (c) 2025 worldwebtree

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be
included in all substantial portions or the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

## 🙏 Acknowledgments

- **Laravel Framework** - The PHP framework powering this application
- **Bootstrap** - Responsive frontend framework
- **Font Awesome** - Icon library
- **All Contributors** - Thank you for your contributions!

---

<div align="center">

**Built with ❤️ by worldwebtree**

⭐ Star us on GitHub • 📧 Contact us • 🌐 Visit worldwebtree.com

</div>
