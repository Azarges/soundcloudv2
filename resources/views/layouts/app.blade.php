<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<!-- Authentication Links -->
<nav>
        <div class="push"><a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a></div>
        @guest
            <div><a href="{{ route('login') }}">Login</a></div>
            <div><a href="{{ route('register') }}">Register</a></div>
        @else
            <div> Bonjour <a href="/user/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a></div>
            <div><a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a></div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest
</nav>
@auth
    <a href="/nouvelle">Ajouter chanson</a>
@endauth
<div id="main">
    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<footer>
    <ul>
        <li><a href="*">azertyuiop</a></li>
        <li><a href="*">azertyuiop</a></li>
        <li><a href="*">azertyuiop</a></li>
    </ul>
</footer>
</body>

</html>
