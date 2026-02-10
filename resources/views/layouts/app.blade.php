<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Blog')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('posts.index') }}">Blog</a>
        <a class="btn btn-primary" href="{{ route('posts.create') }}">Nuovo articolo</a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>