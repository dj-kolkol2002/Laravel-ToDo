# Laravel ToDo

A task management (ToDo) application built with Laravel 12.

## Features

- Create, edit and delete tasks
- Mark tasks as completed / incomplete
- Paginated task list
- Form validation (title, description, long description)

## Requirements

- PHP >= 8.2
- Composer
- MySQL / MariaDB (or Docker)

## Installation

```bash
# Clone the repository
git clone https://github.com/dj-kolkol2002/Laravel-ToDo.git
cd Laravel-ToDo

# Install dependencies
composer install

# Configure environment
cp .env.example .env
php artisan key:generate
```

## Database

The project includes a `docker-compose.yml` with MariaDB and Adminer.

```bash
# Start the database via Docker
docker compose up -d mysql

# Configure .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-task-list
DB_USERNAME=root
DB_PASSWORD=root

# Run migrations
php artisan migrate
```

## Running the application

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`.

## Database structure

### `tasks` table

| Column             | Type      | Description              |
|--------------------|-----------|--------------------------|
| id                 | bigint    | Primary key              |
| title              | string    | Task title               |
| description        | text      | Short description        |
| long_description   | text      | Detailed description (optional) |
| completed          | boolean   | Completion status        |
| created_at         | timestamp | Creation date            |
| updated_at         | timestamp | Last update date         |

## Tech stack

- Laravel 12
- PHP 8.2+
- MySQL / MariaDB
- Blade templates
