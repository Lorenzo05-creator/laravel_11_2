@extends('layouts.app')

@section('title', 'Tutti gli articoli')

@section('content')
    <h1 class="mb-4">Tutti gli articoli</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @forelse ($posts as $post)
        <x-post-card :post="$post" />
    @empty
        <p>Non ci sono articoli.</p>
    @endforelse

    {{ $posts->links() }}
@endsection