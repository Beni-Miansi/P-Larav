<!DOCTYPE html>
<html>
<head>
    <title>E-commerce Application</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('products.index') }}">Products</a></li>
            <li><a href="{{ route('services.index') }}">Services</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
