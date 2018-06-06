<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

        *,body,html{
            padding:0 ;
            margin: 0;
        }
        body {

            background-size: 100%;
            background-color:   white;
            font-size: 88%;
            font-family: arial;
            line-height: 2;
            text-align: center;

        }

        a:link {
            color: white;
        }

        a:hover {

            color: dimgrey;
        }


        .body{
            margin: 0 auto;
            width: 100%;
            clear: both;

        }

        nav{

            width: 100%;
            height: 60px;
            position: fixed;

        }



        nav > ul {
            margin: 0;
            padding: 0;

            list-style: none;
            padding-left: 40%;
            text-align: center;
            height: 60px;
            background-color: black;




        }
        nav > ul > li{
            display: inline-block;
            padding: 15px 20px ;
            margin-right: 50px;
            margin-top: 0 auto;
            font-size: 20px ;
            height: 1px;
            text-align: center;
            float: right;


        }
        nav > ul > li >a {
            color: white;
            text-decoration: none;
            float: right;

        }
        nav ul  a:hover {
            color: dimgrey;
        }

        /* search icon __________________________*/

        .search img {

            margin-top: -45px;
            margin-right: 760px;
            width: 30px;
            height: 30px;
        }

        .login img {

            margin-top: -43px;
            margin-right: 1300px;
            width: 20px;
            height: 20px;
        }
        input[type=text3] {

            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        /* When the input field gets focus, change its width to 100% */
        input[type=text3]:focus {
            width: 30%;
            margin-left: 50px;
            border: solid black 1px;
        }
        input[type=text3]:unfocus {
            height: 30px;
            width: 130px;
        }

        input[placeholder="موجود ولالا"]{

            color: white;
            font-family: sans-serif;;

        }
        input[type=text3]{
            height: 30px;
            width: 130px;
            margin-top: -47px;
            background-color: black;
            border: solid black 1px;
            margin-right: 885px;
            text-decoration-color: darkgrey;
            font-size: 24px;


        }
        input[name="search2"] {

            font-size: 40px;
            margin-top: -80px;
            text-align: center;
            border:solid white 1px;

        }

        .item a img {

            width: 20px;
            height: 20px;
            margin-left: 10px;
        }
        .search h3 a{

            color: darkgray;
        }

        .search h3 a:hover{

            color: dimgrey;
        }
        footer {

            width: 100%;
            height: 150px;
            background-color: dimgrey;
            margin-top: 200px;
        }

        footer p{

            font-size: 20px;
            padding: 55px;
            color: white;
            text-align: center;
        }

        a {

            text-decoration: none;

        }

        form {

            margin-top:150px;
            margin-bottom: 20px;
            font-size: 20px;
            font-family: arial;


        }

        form p{

            float: right;
            margin-right: 300px;
        }

        input[type=text] {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            background-color: grey;
            color: white;
        }

        input[type=password] {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            background-color: grey;
            color: white;
        }
        input[type=email] {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            background-color: grey;
            color: white;
        }

        select[name=store_locate] {
            width: 15%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            background-color: grey;
            color: white;
            float: right;
            margin-right: 475px;
        }

        select option[value=dahra] {
            float: right;
        }
        input[type=checkbox]{

            float: right;
            margin-right: 550px;
            margin-top: 5px;
            width: 15px;
            height: 15px;
            margin-bottom: 30px;

        }


        p {

            margin-bottom: -45px;
            margin-left: 590px;



        }

        /*span {


            margin-left: 700px;
            font-size: 15px;
            margin-top: -50px;
             margin-top: -200px;
        }*/


        h1 {

            font-size: 50px;
            margin-top: 100px;
            margin-bottom: -100px;
        }
        input[type=submit]{

            width: 10%;
            float: center;
            height: 50px;
            text-align: center;
            background-color: gainsboro;
            font-size: 20px;
            margin-top: 200px;
            cursor: pointer;
            color: dimgray;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-transition: width 0.5s; /* Safari */
            transition: width 0.5s;
        }

        input[type=submit]:hover {

            width: 13%;

        }

        #map {
            height: 400px;
            width: 40%;
            margin-left: 400px;
            margin-top: 90px;
        }


    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul >
                    <li class="item"><a href="welcome">الرئيسية <img src="images/images.png"></a>   </li>
                    <li class="item"><a href="about">  حول الموقع <img src="images/habitat-icon-white.png"></a> </a>   </li>

                    <li class="item"><a href="seller"> بائع ؟<img src="images/store.png"></a>  </a>  </li>
                </ul>
                <div class="search">
                    <h3><input type="text3" name="search" placeholder="موجود ولالا"></h3>
                </div>
                <div class="login">
                    <a href="login-form"></a> <img  src="images/white-login-512.png" >
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
            @yield('content')
        </main>
    </div>

    <footer>
        <p>  صمم من قبل مدراء الموقع &copy; 2018 </p>
    </footer>
</body>
</html>
