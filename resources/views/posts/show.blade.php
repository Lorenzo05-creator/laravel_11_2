@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <h1 class="card-title">{{ $post->title }}</h1>
        <p class="card-text mt-3">{{ $post->body }}</p>

        <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">
            Torna indietro
        </a>
    </div>
</div>
@endsection
