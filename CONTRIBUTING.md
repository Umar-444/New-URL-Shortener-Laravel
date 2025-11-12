# 🤝 Contributing to worldwebtree URL Shortener

Thank you for your interest in contributing to the worldwebtree URL Shortener! We welcome contributions from developers of all skill levels. This document provides guidelines and information for contributors.

## 📋 Table of Contents

- [Code of Conduct](#code-of-conduct)
- [Getting Started](#getting-started)
- [Development Setup](#development-setup)
- [How to Contribute](#how-to-contribute)
- [Pull Request Process](#pull-request-process)
- [Coding Standards](#coding-standards)
- [Testing](#testing)
- [Documentation](#documentation)
- [Reporting Issues](#reporting-issues)

## 🤝 Code of Conduct

This project adheres to a code of conduct to ensure a welcoming environment for all contributors. By participating, you agree to:

- **Be respectful** and inclusive in all interactions
- **Focus on constructive feedback** and collaboration
- **Accept responsibility** for mistakes and learn from them
- **Show empathy** towards other contributors
- **Help create a positive community** environment

## 🚀 Getting Started

### Prerequisites

Before you begin, ensure you have the following installed:

- **PHP 8.1 or higher**
- **Composer** (PHP dependency manager)
- **Node.js & NPM** (for frontend assets)
- **Git** (version control)
- **MySQL/PostgreSQL** or **SQLite** (database)

### Quick Setup

1. **Fork the repository** on GitHub
2. **Clone your fork** locally
3. **Set up the development environment** (see below)
4. **Create a feature branch** for your changes
5. **Make your changes** following our guidelines
6. **Test your changes** thoroughly
7. **Submit a pull request**

## 🛠️ Development Setup

### 1. Clone and Install

```bash
# Clone your fork
git clone https://github.com/your-username/worldwebtree-url-shortener.git
cd worldwebtree-url-shortener

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 2. Database Setup

```bash
# Configure your database in .env file
# Example for MySQL:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=url_shortener_dev
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Run migrations
php artisan migrate

# (Optional) Seed the database
php artisan db:seed
```

### 3. Build Assets

```bash
# For development (with file watching)
npm run dev

# Or for production build
npm run build
```

### 4. Start Development Server

```bash
php artisan serve
```

Visit `http://localhost:8000` to see the application running.

## 💡 How to Contribute

### Types of Contributions

We welcome various types of contributions:

- 🐛 **Bug fixes** - Fix existing issues
- ✨ **Features** - Add new functionality
- 📚 **Documentation** - Improve docs or add examples
- 🎨 **UI/UX** - Improve user interface and experience
- 🧪 **Tests** - Add or improve test coverage
- 🔧 **Performance** - Optimize code and improve performance
- 🔒 **Security** - Address security vulnerabilities

### Finding Issues to Work On

1. **Check existing issues** on GitHub
2. **Look for "good first issue"** or "help wanted" labels
3. **Check the roadmap** in the README for planned features
4. **Review open pull requests** for ongoing work

### Development Workflow

1. **Choose an issue** or create a new one
2. **Create a feature branch** from `main`
3. **Implement your changes**
4. **Write tests** for new functionality
5. **Test thoroughly** (see testing section)
6. **Update documentation** if needed
7. **Commit with clear messages**
8. **Push your branch** and create a pull request

## 🔄 Pull Request Process

### Before Submitting

1. **Ensure your code follows** our coding standards
2. **Add tests** for new features or bug fixes
3. **Update documentation** if needed
4. **Test your changes** thoroughly
5. **Run the full test suite** locally

### Creating a Pull Request

1. **Push your branch** to your fork
2. **Create a pull request** from your branch to the main repository
3. **Fill out the PR template** completely
4. **Link any related issues**
5. **Request review** from maintainers

### PR Template

```markdown
## Description
Brief description of the changes made.

## Type of Change
- [ ] Bug fix
- [ ] New feature
- [ ] Breaking change
- [ ] Documentation update
- [ ] Performance improvement

## Checklist
- [ ] Tests have been added/updated
- [ ] Documentation has been updated
- [ ] Code follows PSR-12 standards
- [ ] All tests pass
- [ ] No security vulnerabilities introduced

## Related Issues
Closes #123
```

### After Submission

- **Respond to feedback** from reviewers
- **Make requested changes** if needed
- **Keep your branch updated** with the main branch
- **Be patient** - reviews may take time

## 📏 Coding Standards

### PHP Standards

This project follows **PSR-12** coding standards:

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortLink;

class ShortLinkController extends Controller
{
    public function store(Request $request)
    {
        // Code follows PSR-12 standards
        $validated = $request->validate([
            'link' => 'required|url|max:2048',
        ]);

        // Use descriptive variable names
        $originalUrl = $validated['link'];
        $shortLink = ShortLink::create([
            'link' => $originalUrl,
            'code' => $this->generateUniqueCode(),
        ]);

        return response()->json([
            'short_url' => $shortLink->short_url,
            'original_url' => $originalUrl,
        ]);
    }

    private function generateUniqueCode(): string
    {
        do {
            $code = Str::random(6);
        } while (ShortLink::codeExists($code));

        return $code;
    }
}
```

### JavaScript Standards

```javascript
// Use modern ES6+ syntax
const handleUrlShortening = async (url) => {
    try {
        const response = await fetch('/api/shorten', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({ url }),
        });

        if (!response.ok) {
            throw new Error('Failed to shorten URL');
        }

        const data = await response.json();
        return data.shortUrl;
    } catch (error) {
        console.error('Error shortening URL:', error);
        throw error;
    }
};
```

### CSS/SCSS Standards

```scss
// Use BEM methodology or component-based naming
.navbar {
    &__brand {
        display: flex;
        align-items: center;

        &-logo {
            width: 40px;
            height: 40px;
            margin-right: 12px;
        }
    }

    &__menu {
        display: flex;
        gap: 20px;

        &-item {
            padding: 8px 16px;
            border-radius: 20px;
            transition: all 0.3s ease;

            &:hover {
                background-color: rgba(8, 198, 171, 0.1);
            }
        }
    }
}
```

### Commit Message Standards

Follow conventional commit format:

```
type(scope): description

[optional body]

[optional footer]
```

Types:
- `feat`: New feature
- `fix`: Bug fix
- `docs`: Documentation
- `style`: Code style changes
- `refactor`: Code refactoring
- `test`: Testing
- `chore`: Maintenance

Examples:
```
feat: add click tracking functionality
fix: resolve duplicate code generation bug
docs: update API documentation
test: add unit tests for URL validation
```

## 🧪 Testing

### Running Tests

```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/ShortLinkTest.php

# Run with coverage
php artisan test --coverage

# Run specific test method
php artisan test --filter=test_can_create_short_link
```

### Writing Tests

#### Feature Tests
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
            'link' => 'https://example.com/very/long/url/path'
        ]);

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'short_url'
                ]);
    }

    public function test_short_link_redirects_correctly()
    {
        $shortLink = ShortLink::factory()->create([
            'link' => 'https://example.com',
            'code' => 'abc123'
        ]);

        $response = $this->get('/abc123');

        $response->assertRedirect('https://example.com');
    }

    public function test_invalid_url_returns_error()
    {
        $response = $this->post('/shorten-link/store', [
            'link' => 'not-a-valid-url'
        ]);

        $response->assertStatus(422); // Validation error
    }
}
```

#### Unit Tests
```php
<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\ShortLink;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShortLinkModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_generate_short_url()
    {
        $shortLink = ShortLink::factory()->create(['code' => 'test123']);

        $this->assertEquals(
            url('test123'),
            $shortLink->short_url
        );
    }

    public function test_can_check_code_existence()
    {
        ShortLink::factory()->create(['code' => 'existing']);

        $this->assertTrue(ShortLink::codeExists('existing'));
        $this->assertFalse(ShortLink::codeExists('nonexistent'));
    }
}
```

### Test Coverage

Aim for high test coverage, especially for:
- URL shortening logic
- Validation rules
- Error handling
- API endpoints
- Model methods

## 📚 Documentation

### Code Documentation

Use PHPDoc for all classes, methods, and properties:

```php
/**
 * ShortLink Controller
 *
 * Handles URL shortening operations including creation,
 * redirection, and management of short links.
 */
class ShortLinkController extends Controller
{
    /**
     * Store a newly created short link.
     *
     * @param Request $request The HTTP request containing URL data
     * @return \Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        // Method implementation
    }
}
```

### README Updates

When adding features, update the README.md:

1. Add feature to the features section
2. Include usage examples
3. Update API documentation if needed
4. Add screenshots for UI changes

## 🐛 Reporting Issues

### Bug Reports

Use the GitHub issue template for bug reports:

```markdown
## Bug Report

**Describe the bug**
A clear and concise description of what the bug is.

**To Reproduce**
Steps to reproduce the behavior:
1. Go to '...'
2. Click on '....'
3. Scroll down to '....'
4. See error

**Expected behavior**
A clear description of what you expected to happen.

**Screenshots**
If applicable, add screenshots to help explain your problem.

**Environment:**
- OS: [e.g., Windows 10]
- Browser: [e.g., Chrome 91]
- PHP Version: [e.g., 8.1.5]
- Laravel Version: [e.g., 10.0]

**Additional context**
Add any other context about the problem here.
```

### Feature Requests

Use the feature request template:

```markdown
## Feature Request

**Is your feature request related to a problem? Please describe.**
A clear and concise description of what the problem is.

**Describe the solution you'd like**
A clear and concise description of what you want to happen.

**Describe alternatives you've considered**
A clear description of any alternative solutions you've considered.

**Additional context**
Add any other context or screenshots about the feature request here.
```

## 🎯 Development Guidelines

### Performance
- Optimize database queries
- Use eager loading when appropriate
- Cache frequently accessed data
- Minimize external API calls

### Security
- Validate all user inputs
- Use parameterized queries
- Implement rate limiting
- Sanitize URLs and data
- Follow Laravel security best practices

### Accessibility
- Ensure keyboard navigation works
- Provide alt text for images
- Maintain sufficient color contrast
- Test with screen readers

## 📞 Getting Help

- **GitHub Discussions**: Ask questions and get help
- **Discord**: Join our community chat
- **Documentation**: Check the docs first
- **Issues**: Search existing issues before creating new ones

## 🙏 Recognition

Contributors will be:
- Listed in the README contributors section
- Mentioned in release notes
- Recognized for their contributions

Thank you for contributing to worldwebtree URL Shortener! 🚀
