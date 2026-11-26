<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('welcome');
    }

    public function about(): Response
    {
        return $this->plainText('Учебный проект по маршрутизации Laravel.');
    }

    public function showUser(string $id): Response
    {
        return $this->plainText("Страница пользователя №{$id}");
    }

    public function hello(string $name = 'гость'): Response
    {
        return $this->plainText("Привет, {$name}!");
    }

    public function showComment(string $post, string $comment): Response
    {
        return $this->plainText("Статья №{$post}, комментарий №{$comment}");
    }

    public function showPost(string $id): Response
    {
        return $this->plainText("Просмотр статьи №{$id}");
    }

    private function plainText(string $text): Response
    {
        return response($text, 200, [
            'Content-Type' => 'text/plain; charset=UTF-8',
        ]);
    }
}
