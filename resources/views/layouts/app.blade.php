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
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>

<!-- Authentication Links -->
<nav>
    <ul>
        <li class="logo"><a href="{{ url('/') }}">SoundCloud</a></li>
        <li class="btn"><span class="fas fa-bars"></span></li>
        <div class="items">
            @auth
                <li><a href="/nouvelle">Ajouter chanson</a></li>
            @endauth
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li><a href="/user/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endguest
        </div>
        <form id="search">
            <li class="search-icon">
                <input name="search" required type="search" placeholder="Search" aria-label="Search">
                <label class="icon" >
                    <span class="fas fa-search" ><button type="submit"></button></span>
                </label>
            </li>
        </form>
    </ul>
</nav>
<div id="main">
    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $("nav ul li.btn span").click(function () {
        $("nav ul div.items").toggleClass("show");
        $("nav ul li.btn span").toggleClass("show");
    });
    $(window).resize(function () {
        $("nav ul div.items").removeClass("show");
        $("nav ul li.btn span").removeClass("show");
    });
</script>
@if( Route::currentRouteName() != 'login' &&  Route::currentRouteName() != 'register' && Route::currentRouteName() != 'reset')
    <footer>
        <div class="mb-5 flex-center" style="text-align: center">

            <!-- Facebook -->
            <a style="margin-left: 1vw;margin-right: 1vw;" href="#">
                <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a style="margin-left: 1vw;margin-right: 1vw;" href="#">
                <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a style="margin-left: 1vw;margin-right: 1vw;" href="#">
                <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a style="margin-left: 1vw;margin-right: 1vw;" href="#">
                <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a style="margin-left: 1vw;margin-right: 1vw;" href="#">
                <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
            </a>
            <!--Pinterest-->
            <a style="margin-left: 1vw;margin-right: 1vw;" href="#">
                <i class="fab fa-pinterest fa-lg white-text"> </i>
            </a>

        </div>
    </footer>
@endif
</body>

</html>
