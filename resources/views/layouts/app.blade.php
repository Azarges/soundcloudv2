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
        @auth

            <div><a href="/nouvelle">Ajouter chanson</a></div>
        @endauth
        <div>
            <form id="search" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 btn-sm" type="search" name="search" required placeholder="Recherche" aria-label="Search">
                <button class="btn my-2 my-sm-0 btn-sm" style="color: white; background-color: #018d8a" type="submit">Valider</button>
            </form>
        </div>
        @guest
            <div><a href="{{ route('login') }}">Login</a></div>
            <div><a href="{{ route('register') }}">Register</a></div>
        @else
            <div><a href="/user/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a></div>
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
<div id="main">
    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@if( Route::currentRouteName() != 'login' &&  Route::currentRouteName() != 'register' && Route::currentRouteName() != 'reset')
<footer>
    <ul>
        <li><a href="*">azertyuiop</a></li>
        <li><a href="*">azertyuiop</a></li>
        <li><a href="*">azertyuiop</a></li>
    </ul>
</footer>
@endif
</body>

</html>
