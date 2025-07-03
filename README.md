# 📖 About

This is a study project built with **Laravel 11**, focused on exploring and implementing **caching using Redis** with the `predis` PHP client.

The project demonstrates how to integrate Redis into a Laravel application to optimize performance and reduce database load, especially for read-heavy operations.

## 🚀 Features

- ✅ Laravel 11
- ✅ Redis integration using [`predis/predis`](https://github.com/predis/predis)
- ✅ Cache usage with `Cache::put()` | `Cache::get()` | `Cache::remember()`
- ✅ Debug and performance insights via [`barryvdh/laravel-debugbar`](https://github.com/barryvdh/laravel-debugbar)
- ✅ Lightweight Redis container via **Docker Compose**

# 💿 Install

Set up your project using your preferred package manager.

Use the corresponding command to install the dependencies:

```bash
composer install
```

## Usage

This section covers how to start the development server and build your project for production.

### Configuration

Update your **.env** file with your database credentials (you can use **.env.example** as a template).

Run the following command to create the database structure:

```bash
php artisan migrate
```

Then, execute the NewsSeeder.php to populate the news table with sample data:

```bash
php artisan db:seed --class=NewsSeeder
```

### Starting the Development Server

To start the development server run the following command. The server will be accessible at [http://127.0.0.1:8000](http://127.0.0.1:8000):

```bash
php artisan serve
```

## 🐳 Docker Setup for Redis

To avoid installing Redis natively, this project includes a simple `docker-compose.yml` file that runs a Redis container.

### ▶️ Start Redis with Docker:

```bash
docker-compose up -d
```

Redis will be available at 127.0.0.1:6379

Make sure your .env is set as follows:

```bash
REDIS_CLIENT=predis
REDIS_HOST=127.0.0.1
REDIS_PORT=6379

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis
```

## 📊 Debugging with Laravel Debugbar
This project uses **Laravel Debugbar** to visualize and inspect Redis cache usage during development. Be sure to run the application in `APP_ENV=local` and `APP_DEBUG=true` to enable it.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).