<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <h1>Sports News</h1>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/news') }}">News</a></li>
            <li><a href="{{ url('/sports-news') }}">Sports News</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </nav>
    <form action="{{ url('/search') }}" method="get">
        <input type="text" name="query" placeholder="Tìm kiếm...">
        <button type="submit">Tìm kiếm</button>
    </form>
</header>

    <main>
        <article>
            @yield('content')
        </article>
        <aside>
            @yield('aside')
        </aside>
    </main>

    <footer>
        <p>&copy; 2023 Sports News. All rights reserved.</p>
    </footer>
</body>
</html>