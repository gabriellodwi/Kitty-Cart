<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
</head>
<body>
    <header>
        @if (Auth::check())
            <a href="{{ route('profile') }}">Profile</a>
            <a href="{{ route('products') }}">Products</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <a href="{{ route('register') }}">Register</a>
            <a href="{{ route('login') }}">Login</a>
        @endif
    </header>

    <div>
        @yield('content')
    </div>
</body>
</html>
