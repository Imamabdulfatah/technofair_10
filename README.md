# FiktiTechnofair Laravel Application

## Description

A modern web platform built with **Laravel** that serves the Technofair event organized by BEM FIKTI. It provides event management, participant registration, exhibitor showcase, and real‑time notifications.

## Installation

### Prerequisites
- Docker & Docker Compose (recommended) **or** PHP 8.2+, Composer, and a MySQL server.
- Node.js & npm (for frontend asset compilation).

### Using Docker Compose (quick start)
```bash
# Clone the repository
git clone <repository-url>
cd technofair

# Build and start containers
docker compose up -d

# Install PHP dependencies
docker exec -it laravel_app composer install

# Install Node dependencies & compile assets
docker exec -it laravel_app npm ci && docker exec -it laravel_app npm run dev

# Generate application key
docker exec -it laravel_app php artisan key:generate

# Run database migrations
docker exec -it laravel_app php artisan migrate
```
The application will be available at **http://localhost:8080**.

### Manual setup (without Docker)
```bash
# Clone the repository
git clone <repository-url>
cd technofair

# Install PHP dependencies
composer install

# Install Node assets
npm ci && npm run dev

# Copy example env and configure
cp .env.example .env
# edit .env (set DB credentials, etc.)

php artisan key:generate
php artisan migrate
php artisan serve # default http://127.0.0.1:8000
```

## Technologies Used
- **Laravel 10** – PHP framework
- **PHP 8.2** (FPM) & **Composer**
- **MySQL 8** – relational database
- **Nginx** – web server / reverse proxy
- **Docker & Docker Compose** – containerisation
- **Tailwind CSS** – utility‑first styling (via Vite)
- **Vite** – frontend build tool for JS/CSS
- **Redis** (optional) – caching & queue driver
- **Git** – version control

## Core Features
- Event & schedule management for organizers
- Participant & exhibitor registration with role‑based access
- Dynamic searchable catalog of projects and presenters
- Real‑time notifications & email confirmations
- Responsive UI built with Tailwind CSS & Blade components
- RESTful API endpoints for future mobile integration
- Secure authentication (Laravel Fortify / Breeze)
- Automated testing with PHPUnit

## License

This project is open‑source and licensed under the [MIT License](https://opensource.org/licenses/MIT).
