@extends('layouts.app')

@section('content')
  <a href="/blog/public/posts" class="btn btn-default">Назад</a>
  <h1>{{$post->title}}</h1>
  <p>{{$post->body}}</p>
  <hr>
  <small>Створено: {{$post->created_at}}</small>
  <hr>
  @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
      <a href="/blog/public/posts/{{$post->id}}/edit" class="btn btn-default">Редагувати</a>
      {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Видалити', ['class' => 'btn btn-danger'])}}
      {!!Form::close()!!}
    @endif
  @endif
@endsection
