<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/user/{id}', [PageController::class, 'showUser'])
    ->whereNumber('id')->name('users.show');
Route::get('/hello/{name?}', [PageController::class, 'hello'])->name('hello');
Route::get('/posts/{post}/comments/{comment}', [PageController::class, 'showComment'])
    ->whereNumber(['post', 'comment'])->name('posts.comments.show');
Route::get('/posts/{id}', [PageController::class, 'showPost'])
    ->whereNumber('id')->name('posts.show');
