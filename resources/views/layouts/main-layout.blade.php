<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>layout</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        {{-- other links bar --}}
        <div>

        </div>
        {{-- navbar  --}}
        <div>

        </div>
        {{-- jumbotron/hero  --}}
        <div>

        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>


    <footer>
        {{-- footer links --}}
        <div>

        </div>
        {{-- sign up & socials  --}}
        <div>

        </div>
    </footer>
</body>

</html>
