<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Articles')</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        [hidden] {
            display: none !important;
        }

        .article-body {
            white-space: pre-line;
            overflow-wrap: anywhere;
            line-height: 1.8;
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('articles.index') }}">
                Articles
            </a>
        </div>
    </nav>

    <main class="container py-4">
        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>