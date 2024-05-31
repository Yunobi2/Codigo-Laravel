<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .activo a{
            color:green;
            text-decoration:underline;
        }
    </style>
</head>
<body>
    <h1>Home</h1>
    <nav>
    <table class="table">
        @include('partials.nav')
        @yield('content')
    </table>
    </nav>
        
</body>
</html>
