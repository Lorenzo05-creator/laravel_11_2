@extends('layouts.app')

@section('content')
    <h1>Crea Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label>Titolo</label>
        <input type="text" name="title">

        <label>Contenuto</label>
        <textarea name="body"></textarea>

        <button type="submit">Salva</button>
    </form>
@endsection
