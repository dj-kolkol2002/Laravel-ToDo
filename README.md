# Laravel ToDo

Aplikacja do zarządzania zadaniami (ToDo) zbudowana w Laravel 12.

## Funkcjonalności

- Tworzenie, edycja i usuwanie zadań
- Oznaczanie zadań jako ukończone / nieukończone
- Paginacja listy zadań
- Walidacja formularzy (tytuł, opis, szczegółowy opis)

## Wymagania

- PHP >= 8.2
- Composer
- MySQL / MariaDB (lub Docker)

## Instalacja

```bash
# Klonowanie repozytorium
git clone https://github.com/dj-kolkol2002/Laravel-ToDo.git
cd Laravel-ToDo

# Instalacja zależności
composer install

# Konfiguracja środowiska
cp .env.example .env
php artisan key:generate
```

## Baza danych

Projekt zawiera `docker-compose.yml` z MariaDB i Adminer.

```bash
# Uruchomienie bazy przez Docker
docker compose up -d mysql

# Konfiguracja .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-task-list
DB_USERNAME=root
DB_PASSWORD=root

# Uruchomienie migracji
php artisan migrate
```

## Uruchomienie

```bash
php artisan serve
```

Aplikacja będzie dostępna pod adresem `http://localhost:8000`.

## Struktura bazy danych

### Tabela `tasks`

| Kolumna            | Typ     | Opis                        |
|--------------------|---------|-----------------------------|
| id                 | bigint  | Klucz główny                |
| title              | string  | Tytuł zadania               |
| description        | text    | Krótki opis                 |
| long_description   | text    | Szczegółowy opis (opcjonalny)|
| completed          | boolean | Status ukończenia           |
| created_at         | timestamp | Data utworzenia            |
| updated_at         | timestamp | Data aktualizacji         |

## Technologie

- Laravel 12
- PHP 8.2+
- MySQL / MariaDB
- Blade (szablony)
