<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>find my phone{{--{{ config('app.name', 'متجر الهواتف') }}--}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet">

</head>
<body >
    <div id="app" style="min-height:620px;">
        <nav class="navbar navbar-expand-md navbar-light navbar-dark bg-dark  navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{--{{ config('app.name', 'find my phone') }}--}}
                    find my phone
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        <li class="nav-item active">
                            <a class="nav-link" href="/home">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="#">About</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="#">Services</a>--}}
                        {{--</li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>

                        <li class="nav-item">
                            {{--@if(Auth()->check() && Auth()->user()->isAdmin())--}}
                                {{--<a class="nav-link" href="/dashboard">Dashboard</a>--}}
                            @if(Auth()->check() && Auth()->user()->isStore())
                                <a class="nav-link" href="/products/create">add product</a>
                            @endif
                        </li>





                        <li class="nav-item">
                            @if(Auth()->check() && Auth()->user()->isAdmin())
                                <a class="nav-link" href="/dashboard">Dashboard</a>
                            @elseif(Auth()->check() && Auth()->user()->isStore())
                                <a class="nav-link" href="/mystore">My Store</a>
                            @endif
                        </li>
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('create store') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @include('layouts.alerts')
            @yield('content')
        </main>
    </div>

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; F.M.P website 2018</p>
        </div>
        <!-- /.container -->
    </footer>
</body>
</html>
