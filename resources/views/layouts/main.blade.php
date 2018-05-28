<html>

<link>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/styles.css"/>
    @yield('styles')
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>KWD @yield('tab-title')</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    


</head>

<body>

    <header>
        @include('partials.nav')
        @include('partials.header')
        <h1>@yield('title')</h1>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    @yield('scripts')
</body>

</html>