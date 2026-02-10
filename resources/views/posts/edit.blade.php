@extends('layouts.app')

@section('title', 'Modifica articolo')

@section('content')
    <h1 class="mb-4">Modifica articolo</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}">
            @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Contenuto</label>
            <textarea name="content" rows="6" class="form-control">{{ old('content', $post->content) }}</textarea>
            @error('content') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna</button>
        <a href="{{ route('posts.show', $post) }}" class="btn btn-secondary">Annulla</a>
    </form>
@endsection