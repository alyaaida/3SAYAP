# Food Ordering System

3Sayap is a web-based halal food ordering application managed by Ayam & Co., a local Food & Beverage company inspired by modern fast-casual fried chicken brands such as 4Fingers.

The application allows customers to browse menus and place orders without requiring login, ensuring a fast and convenient ordering experience.
Administrative access is restricted to authorized staff who can log in to manage products, orders, and view sales reports.

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
- [NUR ALYA AIDA BINTI MOHD ABU BAKAR 2319286]
- [SHAUQINA BALQIS BINTI MAT HARUN 2316818]
- [FATHIN A'DLIN SOFEA BINTI BOLIA 2326814]

## Demo Video
- https://youtu.be/sAwRAmqG3eQ?si=sLDxVWfsYpl38UK0 

## Final Report
- https://docs.google.com/document/d/1Z9whqg eXxo5nwXQKSjon8eVLGySjaYNi8cbqC0NN0c8/edit?usp=sharing

## Technologies Used
- Laravel
- Bootstrap
- MySQL
