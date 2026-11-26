# Практическая работа 12 Контроллеры Laravel

Все шесть маршрутов вызывают методы класса [PageController](app/Http/Controllers/PageController.php). Имена, параметры и ответы сохранились. [Отчёт со скриншотами](REPORT.docx).

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

Откройте http://127.0.0.1:8000. Для просмотра списка маршрутов выполните `php artisan route:list --except-vendor`.

| Адрес | Имя | Назначение |
| --- | --- | --- |
| `/` | `home` | Приветственная страница Blade |
| `/about` | `about` | Информация о проекте |
| `/user/7` | `users.show` | Числовой идентификатор пользователя |
| `/hello` или `/hello/Анна` | `hello` | Приветствие с необязательным именем |
| `/posts/3/comments/12` | `posts.comments.show` | Номер статьи и комментария |
| `/posts/5` | `posts.show` | Числовой идентификатор статьи |

`/user/abc` возвращает HTTP 404. Маршруты описаны в [routes/web.php](routes/web.php), базовый контроллер находится в [app/Http/Controllers](app/Http/Controllers), шаблон — в [resources/views/welcome.blade.php](resources/views/welcome.blade.php).
