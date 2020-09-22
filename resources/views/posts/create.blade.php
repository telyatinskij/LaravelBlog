@extends('layouts.app')

@section('content')
  <h1>Нова стаття</h1>
  {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::label('title', 'Назва статті')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Назва'])}}
      </div>
      <div class="form-group">
        {{Form::label('body', 'Текст статті')}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Текст'])}}
      </div>
      {{Form::submit('Створити', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
@endsection
