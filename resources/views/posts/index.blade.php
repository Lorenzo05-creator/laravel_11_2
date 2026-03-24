@extends('layouts.app')

@section('content')
<h1 class="mb-4">Lista Post</h1>

<div class="row">
    @foreach ($posts as $post)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">
                        {{ Str::limit($post->body, 100) }}
                    </p>

                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary btn-sm">
                        Leggi
                    </a>

                    @auth
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">
                            Modifica
                        </a>

                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                Elimina
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
