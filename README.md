# Radii Assessment

A Laravel application using SQLite, Blade, and Bootstrap.

## Requirements

- PHP 8.5+
- Composer 2.x
- PHP PDO SQLite and SQLite3 extensions

## Setup

1. Clone or extract the project.
2. Run `composer install`.
3. Copy `.env.example` to `.env`.
4. Set `DB_CONNECTION=sqlite` and remove any `DB_DATABASE` setting.
5. Create an empty file at `database/database.sqlite`.
6. Run:

   ```sh
   php artisan key:generate
   php artisan config:clear
   php artisan migrate --seed
   php artisan serve
   ```

## Features

- Five categories and twenty Faker generated articles
- Article list with title search
- Article detail page
- JSON API

## Routes

- `/` — Article list
- `/articles/{article}` — Article detail by ID
- `/api/articles` — Articles as JSON

Bootstrap loads from a CDN and requires an internet connection.