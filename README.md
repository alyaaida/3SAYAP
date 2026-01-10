# Food Ordering System

A web-based food ordering system built with Laravel.

## Features
- Browse menu items
- View locations
- Contact form
- User-friendly interface

## Setup Instructions

### Prerequisites
- PHP >= 8.1
- Composer
- MySQL
- Node.js & NPM

### Installation

1. Clone the repository
```bash
git clone https://github.com/YOUR_USERNAME/Food-Ordering-System.git
cd Food-Ordering-System
```

2. Install PHP dependencies
```bash
composer install
```

3. Install Node dependencies
```bash
npm install
```

4. Create environment file
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Configure database in `.env` file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run migrations
```bash
php artisan migrate
```

8. Start development server
```bash
php artisan serve
```

9. Compile assets (in another terminal)
```bash
npm run dev
```

10. Visit: http://localhost:8000

## Team Members
- [Your Name]
- [Member 2]
- [Member 3]

## Technologies Used
- Laravel
- Bootstrap
- MySQL