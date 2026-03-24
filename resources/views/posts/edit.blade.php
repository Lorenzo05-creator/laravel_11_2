@extends('layouts.app')

@section('content')
    <h1>Modifica Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Titolo</label>
        <input type="text" name="title" value="{{ $post->title }}">

        <label>Contenuto</label>
        <textarea name="body">{{ $post->body }}</textarea>

        <button type="submit">Aggiorna</button>
    </form>
@endsection
