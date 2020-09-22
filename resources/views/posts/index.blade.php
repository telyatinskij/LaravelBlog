@extends('layouts.app')

@section('content')

  <h1>Це створені пости</h1>
    @if(count($posts) > 0)
      @foreach($posts as $post)
      <div class="card">
        <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <h3><a href="/blog/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
          <small>Створено: {{$post->created_at}}</small>
        </div>
      @endforeach
    </ul>
  </div>
    @else

    @endif
@endsection
