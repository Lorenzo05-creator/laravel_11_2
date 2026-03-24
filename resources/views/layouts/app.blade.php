<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Blog Laravel</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('posts.index') }}">Posts</a></li>

            @auth
                <li><a href="{{ route('posts.create') }}">Crea Post</a></li>

                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endauth

            @guest
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Registrati</a></li>
            @endguest
        </ul>
    </nav>

    <hr>

    @yield('content')

</body>
</html>
