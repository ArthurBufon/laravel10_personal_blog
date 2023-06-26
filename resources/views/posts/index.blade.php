@extends('layouts.template')

@section('title', 'Articles')

@section('content')
    <div class="card">
        <div class="card-body">
            @foreach ($posts as $post)
                <div class="m-3">
                    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                        <h3>{{$post->title}}</h3>
                    </a>
                    <p>{{ $post->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
