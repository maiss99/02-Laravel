<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Game Collection</title>
</head>

<body>

    <nav class="navbar navbar-light bg-light border-bottom">
        <div class="container">
            <a class="navbar-brand" href="/games">
                🎮 Game Collection
            </a>

            <a class="nav-link" href="/games">
                Overview
            </a>
        </div>
    </nav>

    <div class="container" style="margin-top:40px;">
        <h1 class="display-4">@yield('title')</h1>

        @yield('content')
    </div>

</body>
</html>