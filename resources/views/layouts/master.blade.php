<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <style>
        .navbar .nav-link {
            color: #000;
        }
        .navbar .nav-link:hover {
            color: #007bff;
        }
        .navbar .nav-item span.nav-link {
            font-weight: bold;
            padding: 5px 10px;
        }
        .role-tag {
            background-color: #ffc107;
            border-radius: 5px;
            padding: 0 5px;
            font-size: 0.8rem;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="{{ route('products.index') }}">AMANDEMY MARKET</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        @auth
                            @if (Auth::user()->hasRole('superadmin'))
                            <li class="nav-item">
                                <span class="nav-link">HI, {{ Auth::user()->name }} <span class="role-tag">Admin</span></span>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="{{ route('dashboard.products') }}">Manage Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="{{ route('dashboard.users') }}">Manage User</a>
                                </li>
                            @else
                            <li class="nav-item">
                                <span class="nav-link">HI, {{ Auth::user()->name }} <span class="role-tag">User</span></span>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="{{ route('dashboard.products') }}">Manage Product</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ url('/cafe') }}">HOME</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="{{ route('register') }}">Register</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
