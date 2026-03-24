@extends('layouts.app')

@section('content')
    <h1>Lista Post</h1>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>

            <a href="{{ route('posts.show', $post) }}">Vedi</a>

            @auth
                <a href="{{ route('posts.edit', $post) }}">Modifica</a>

                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            @endauth
        </div>
        <hr>
    @endforeach
@endsection
