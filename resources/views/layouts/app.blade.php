<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <header>
        <nav>
            <a href="/welcome1">Home</a> | <a href="/about1">About Us</a> | <a href="/contact1">Contact Us</a>
        </nav>
    </header>
    
    <div class="content">
        @yield('content')
    </div>
    <script src="js/script1.js"></script>
    @include('partials.footer')
</body>
</html>
