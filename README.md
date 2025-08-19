🛒 Shop Laravel

A simple E-commerce web application built with Laravel framework.
This project demonstrates authentication, product management, cart, and order handling in a clean Laravel structure.

✨ Features

User Authentication (Register / Login / Logout)

Product CRUD (Create, Read, Update, Delete)

Shopping Cart functionality

Checkout & Order Management

Database migrations & seeders

Blade templating with responsive UI

Secure password hashing & CSRF protection

🛠 Requirements

PHP 8.0 or higher

Composer

Laravel 10+

MySQL / MariaDB

Node.js & npm (for frontend assets)

🚀 Installation

Clone the repository:

git clone git@github.com:amiralidev01/shop-laravel.git
cd shop-laravel


Install dependencies:

composer install
npm install && npm run dev


Copy .env.example to .env and update database credentials:

cp .env.example .env
php artisan key:generate


Run migrations and seed database:

php artisan migrate --seed


Start the development server:

php artisan serve


Now open in your browser:

http://127.0.0.1:8000

📂 Project Structure
<br>
shop-laravel/
<br>
│-- app/              # Application logic (Models, Controllers, Middleware)
<br>
│-- bootstrap/        # Laravel bootstrap files
<br>
│-- config/           # Configuration files
<br>
│-- database/         # Migrations & seeders
<br>
│-- public/           # Publicly accessible files (index.php, assets)
<br>
│-- resources/        # Blade templates, JS, CSS
<br>
│-- routes/           # Web & API routes
<br>
│-- storage/          # Logs, cache, uploads
<br>
│-- tests/            # PHPUnit tests
<br>
│-- .env.example      # Environment variables template
<br>
│-- artisan           # Laravel CLI tool
