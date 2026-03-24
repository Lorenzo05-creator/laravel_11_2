@extends('layouts.app')

@section('content')
<h1 class="mb-4">Modifica Post</h1>

<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input type="text" name="title" class="form-control" value="{{ $post->title }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Contenuto</label>
        <textarea name="body" class="form-control" rows="5">{{ $post->body }}</textarea>
    </div>

    <button class="btn btn-warning">Aggiorna</button>
</form>
@endsection
