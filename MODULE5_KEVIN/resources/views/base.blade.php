<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - EAD Inventory</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body class="bg-light">
    
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('product') }}">PRODUCT</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('order') }}">ORDER</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('history') }}">HISTORY</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-3 mb-5">
        @yield('content')
    </div>

</body>
</html>
