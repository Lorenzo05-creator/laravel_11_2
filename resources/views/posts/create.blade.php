@extends('layouts.app')

@section('title', 'Nuovo articolo')

@section('content')
    <h1 class="mb-4">Crea un nuovo articolo</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Contenuto</label>
            <textarea name="content" rows="6" class="form-control">{{ old('content') }}</textarea>
            @error('content') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
@endsection