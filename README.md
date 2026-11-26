# Практическая работа 10 Установка Laravel

Проект создан через Composer. Маршрут GET / возвращает изменённую приветственную страницу Blade. [Отчёт со скриншотами](REPORT.docx).

## Локальный запуск

Нужны PHP с SQLite и Composer 2. Проект проверен на PHP 8.4.

```sh
composer install
php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
php artisan migrate
php artisan serve --no-reload
```

Откройте http://127.0.0.1:8000/.
