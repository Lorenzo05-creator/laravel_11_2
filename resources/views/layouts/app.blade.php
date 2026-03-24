<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Blog Laravel</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Blog</a>

        <div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.create') }}">Crea Post</a>
                    </li>

                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm ms-3">Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Registrati</a>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
