@extends('layouts.app')

@section('content')
    <style type="text/css">

        *,body,html{
            padding:0 ;
            margin: 0;

        }

        body {
            background-size: 100%;
            background-color: 	white;
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




        /*  NAV --------------------------*/

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
            float: right;
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

        input[type=text] {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            background-color: dimgrey;
            color: wgrey;
        }

        input[type=password] {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            background-color: dimgrey;
            color: grey;
        }

        p {

            margin-bottom: 10px;
        }

        .button1 {

            width: 10%;
            float: center;
            height: 50px;
            text-align: center;
            background-color: gainsboro;
            font-size: 20px;
            margin-bottom: -110px;
            margin-top: 10px;
            cursor: pointer;
            color: dimgray;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-transition: width 0.5s; /* Safari */
            transition: width 0.5s;
        }

        .button1:hover {

            width: 13%;

        }

    </style>

<form method="POST" action="/login">
    إسم المستخدم <br>
    <input type="text" name="name">
    <br>
    كلمة المرور<br>
    <input type="password" name="password">
<p>
    <a href="#">  هل نسيت كلمة المرور ؟</a></p>
<br>
<p> <a href="seller"></a>  هل أنت بائع جديد ؟</p>
<br>
<a href="home-s"><input type="submit" class="button1" value=" تسجيل الدخول"></a>
</form>
@endsection


