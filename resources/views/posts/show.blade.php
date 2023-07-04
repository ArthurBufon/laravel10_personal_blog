@extends('layouts.template')

@section('title', $post->title)

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="m-3">
                <h3>{{$post->title}}</h3>
                <h5>{{$post->description}}</h5>
                <p>{{$post->body}}</p>
            </div>
        </div>
    </div>
@endsection
