<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мой первый проект на Laravel</title>
    <style>
        body { margin: 0; background: #f4f6fa; color: #172033; font: 17px/1.55 system-ui, sans-serif; }
        main { max-width: 650px; margin: 6vh auto; padding: 28px; background: white; border: 1px solid #dce2ec; border-radius: 16px; }
        h1 { margin: 0 0 12px; line-height: 1.18; }
        a { color: #174ca1; }
        li + li { margin-top: 5px; }
    </style>
</head>
<body>
    <main>
        <h1>Мой первый проект на Laravel</h1>
        <p>Проект создан через Composer. Эта страница выводится из шаблона Blade.</p>
        <nav aria-label="Примеры маршрутов">
            <h2>Маршруты проекта</h2>
            <ul>
                <li><a href="{{ route('about') }}">О проекте</a></li>
                <li><a href="{{ route('users.show', ['id' => 7]) }}">Пользователь №7</a></li>
                <li><a href="{{ route('hello') }}">Приветствие гостя</a></li>
                <li><a href="{{ route('hello', ['name' => 'Анна']) }}">Приветствие Анны</a></li>
                <li><a href="{{ route('posts.comments.show', ['post' => 3, 'comment' => 12]) }}">Комментарий №12 к статье №3</a></li>
                <li><a href="{{ route('posts.show', ['id' => 5]) }}">Статья №5</a></li>
            </ul>
        </nav>
    </main>
</body>
</html>
