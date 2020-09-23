@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'LaravelBlog')}}</title>
    </head>
    <body>
      <h1> Вітаю! Це мій Блог на Laravel</h1>
      <h2> Привіт, на сторінці "Статті" ти можеш ознайомитись з усіма статтями.</h2>
      <h3> Відкривши певну статтю ти побачиш весь текст, а також зможеш видалити та редагувати її, але спочатку ввійди в свій аккаунт або зареєструйся!</h3>
      <h4> На сторінці <strong>"Створити"</strong> ти можеш створити нову статтю.</h4>
    </body>
</html>

@endsection
