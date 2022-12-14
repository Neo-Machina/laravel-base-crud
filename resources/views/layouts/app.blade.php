<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('page_title')
    </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        Homepage
                    </a>
                </li>
                <li>
                    <a href="{{ route('comics.index') }}">
                        Comics
                    </a>
                </li>
                <li>
                    <a href="{{ route('comics.create') }}">
                        New product
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('main_content')
    </main>
</body>
</html>