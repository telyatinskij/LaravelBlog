@extends('layouts.app')

@section('content')
  <h1>Редагувати пост</h1>
  {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::label('title', 'Назва статті')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Назва'])}}
      </div>
      <div class="form-group">
        {{Form::label('body', 'Текст')}}
        {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Текст'])}}
      </div>
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Оновити', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
@endsection
