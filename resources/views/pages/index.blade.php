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
      <h1> Вітаю! Це мій Блог.</h1>
      <h2> Привіт, на сторінці "Статті" ти можеш ознайомитись з усіма статтями.</h2>
      <h4>Відкривши певну статтю ти побачиш весь текст, а також зможеш видалити та редагувати її.</h4>
      <h5> На сторінці "Управління" ти можеш створити нову статтю.</h5>
    </body>
</html>

@endsection
