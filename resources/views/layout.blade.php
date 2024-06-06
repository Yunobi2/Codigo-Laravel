<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    
    <title>Home</title>

</head>
<body>
    <nav>
        <table class="table">
            @include('partials.nav')
        </table>
        <table>
        @yield('content')  
        </table>   
    </nav>
     

</body>
</html>

