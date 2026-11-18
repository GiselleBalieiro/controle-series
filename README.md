# Controle de Séries

A small **Laravel 12** app for keeping a list of TV series. It was built while learning Laravel's core pieces: routing, controllers, Blade components, migrations and database queries with parameter binding.

![PHP](https://img.shields.io/badge/PHP_8.2-777BB4?logo=php&logoColor=ffffff&style=flat-square)
![Laravel](https://img.shields.io/badge/Laravel_12-FF2D20?logo=laravel&logoColor=ffffff&style=flat-square)
![SQLite](https://img.shields.io/badge/SQLite-003B57?logo=sqlite&logoColor=ffffff&style=flat-square)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_4-06B6D4?logo=tailwindcss&logoColor=ffffff&style=flat-square)
![Vite](https://img.shields.io/badge/Vite-646CFF?logo=vite&logoColor=ffffff&style=flat-square)

## Features

- List all saved series.
- Add a new series through a form, with CSRF protection.
- Shared page layout as a Blade component (`resources/views/components/layout.blade.php`).
- `series` table created by a migration. Inserts use bound parameters, so they are safe against SQL injection.

## Routes

| Method | Route | Action |
|---|---|---|
| `GET` | `/series` | List series (`SeriesController@index`) |
| `GET` | `/series/create` | Form to add a series (`SeriesController@create`) |
| `POST` | `/series/save` | Save a series and redirect to the list (`SeriesController@store`) |

## Running locally

Requirements: PHP 8.2+, Composer and Node.js.

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
```

Then start the app:

```bash
composer run dev
```

Or start only the PHP server with `php artisan serve` (run `npm run build` first) and open http://localhost:8000/series.

## Tests

```bash
php artisan test
```

## Author

Made by [Giselle Balieiro](https://github.com/GiselleBalieiro) while studying Laravel.
