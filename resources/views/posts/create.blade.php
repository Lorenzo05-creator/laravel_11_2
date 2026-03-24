@extends('layouts.app')

@section('content')
<h1 class="mb-4">Crea Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Contenuto</label>
        <textarea name="body" class="form-control" rows="5"></textarea>
    </div>

    <button class="btn btn-success">Salva</button>
</form>
@endsection
