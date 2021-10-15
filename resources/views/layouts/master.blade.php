<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Blogger') Blogger</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="text-justify">
    <div class="container">

        <header class="blog-header py-3">
            <div class="center"><a href='/'>
                    <h2 style="text-align: center" class="blog-header-logo text-dark" href='/'>Blogger</h2>
                </a>
            </div>
        </header>

        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="/">All</a>
            <a class="p-2 text-muted" href="/blog/Technology">Technology</a>
            <a class="p-2 text-muted" href="/blog/Gaming">Gaming</a>
            <a class="p-2 text-muted" href="/blog/Life">Life</a>
        </nav>


        <main role="main" class="inner cover">
            @yield('content')
        </main>

        <footer class="home-footer">
            <div class="inner">
                <p style="text-align: center">
                    © <a href="/blog">Blogger </a>{{ date('Y') }}
                </p>
                <p style="text-align: center">
                    <a href="#">Back to top</a>
                </p>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
