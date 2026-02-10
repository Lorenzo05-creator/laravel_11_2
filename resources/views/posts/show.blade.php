@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>{{ $post->title }}</h1>
        <div>
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Modifica</a>

            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline"
                  onsubmit="return confirm('Sei sicuro di voler eliminare questo articolo?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Elimina</button>
            </form>
        </div>
    </div>

    <p class="text-muted">Pubblicato il {{ $post->created_at->format('d/m/Y H:i') }}</p>
    <hr>
    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.index') }}" class="btn btn-link mt-3">← Torna alla lista</a>
@endsection