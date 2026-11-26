<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return response('Учебный проект по маршрутизации Laravel.', 200, [
        'Content-Type' => 'text/plain; charset=UTF-8',
    ]);
})->name('about');

Route::get('/user/{id}', function (string $id) {
    return response("Страница пользователя №{$id}", 200, [
        'Content-Type' => 'text/plain; charset=UTF-8',
    ]);
})->whereNumber('id')->name('users.show');

Route::get('/hello/{name?}', function (string $name = 'гость') {
    return response("Привет, {$name}!", 200, [
        'Content-Type' => 'text/plain; charset=UTF-8',
    ]);
})->name('hello');

Route::get('/posts/{post}/comments/{comment}', function (string $post, string $comment) {
    return response("Статья №{$post}, комментарий №{$comment}", 200, [
        'Content-Type' => 'text/plain; charset=UTF-8',
    ]);
})->whereNumber(['post', 'comment'])->name('posts.comments.show');

Route::get('/posts/{id}', function (string $id) {
    return response("Просмотр статьи №{$id}", 200, [
        'Content-Type' => 'text/plain; charset=UTF-8',
    ]);
})->whereNumber('id')->name('posts.show');
