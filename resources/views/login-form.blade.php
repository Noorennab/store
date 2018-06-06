<DOCTYPE! html>
<html>

<head>

    <title> STORE </title>
    <link rel="icon" href="NOOr-ennab_03.png" />
    <link rel="stylesheet"  href="login-form.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>

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


<body class="body">
<header>
    <div class="div1">


        <nav class="menu">



            <ul >

                <li class="item"><a href="welcome">الرئيسية <img src="images/images.png"></a>   </li>
                <li class="item"><a href="about">  حول الموقع <img src="images/habitat-icon-white.png"></a> </a>   </li>

                <li class="item"><a href="seller"> بائع ؟<img src="images/store.png"></a>  </a>  </li>



            </ul>
            <div class="search"     >


                <h3><input type="text3" name="search" placeholder="موجود ولالا"></h3>
            </div>

            <div class="login"     >

                <a href="login-form"></a> <img  src="images/white-login-512.png" >

            </div>

        </nav>


    </div>


    </nav>


    </div>

</header>


<form method="POST" action="{{ route('login') }}">
    إسم المستخدم <br>
    <input type="text" name="userid">
    <br>
    كلمة المرور<br>
    <input type="password" name="psw">
</form>
<p>
    <a href="#">  هل نسيت كلمة المرور ؟</p></a>
<br>
<p>
    <a href="seller">  هل أنت بائع جديد ؟</p></a>
<br>
<input type="button" class="button1" value=" تسجيل الدخول

 ">

<footer>



    <p>  صمم من قبل مدراء الموقع &copy; 2018 </p>

</footer>



</body>


</html>


