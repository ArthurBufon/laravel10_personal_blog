@extends('layouts.template')

@section('title', 'Articles')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="m-3">
                <a href="{{ route('posts.show', ['id' => 1]) }}"><h3>Postagem 1</h3></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quae reiciendis. Magni ipsum at dolorem.</p>
            </div>
            <div class="m-3">
                <h3>Postagem 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quae reiciendis. Magni ipsum at dolorem.</p>
            </div>
            <div class="m-3">
                <h3>Postagem 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quae reiciendis. Magni ipsum at dolorem.</p>
            </div>
            <div class="m-3">
                <h3>Postagem 4</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quae reiciendis. Magni ipsum at dolorem.</p>
            </div>
            <div class="m-3">
                <h3>Postagem 5</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quae reiciendis. Magni ipsum at dolorem.</p>
            </div>
        </div>
    </div>
@endsection
