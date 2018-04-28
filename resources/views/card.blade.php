<DOCTYPE! html>
<html>




<head>

    <title> STORE </title>
    <link rel="icon" href="NOOr-ennab_03.png" />
    <link rel="stylesheet"  href="card.css">
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

    /*.search img {

        margin-top: -45px;
        margin-right: 810px;
        width: 30px;
        height: 30px;
    }*/
    input[type=text] {

        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
    }

    /* When the input field gets focus, change its width to 100% */
    input[type=text]:focus {
        width: 30%;
        margin-left: 50px;
        border: solid black 1px;
    }
    input[type=text]:unfocus {
        height: 30px;
        width: 130px;
    }

    input[placeholder="موجود ولالا"]{

        color: white;
        font-family: sans-serif;;

    }
    input[type=text]{
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


    .login img {

        margin-top: -43px;
        margin-right: 1300px;
        width: 20px;
        height: 20px;
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

    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 70%;
        height: 450px;
        margin-left: 200px;
        margin-top: 100px;
        background-color: #cccccc;


    }

    .card img {
        height: 300px;
        width: 30%;
        padding-right: 630px;
        margin-top: 30px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
        padding: 2px 16px;

    }

    .container h4 b{
        padding-right: 630px;
    }

    h2 {
        margin-top: 50px;
        font-size: 30px;
    }


    .price p{

        margin-top: -300px;
        margin-left: 300px;
        font-size: 20px;
        color: black;

    }

    .shop-in p{

        margin-top: 20px;
        margin-left: 300px;
        font-size: 20px;
        color: black;

    }

    input[name="output"] {

        margin-top: -100px;
        margin-right: 20px;
        background-color: #cccccc;
        text-decoration-color: darkgrey;
        font-size: 20px;
    }

    input[name="phone-no"] {

        margin-top: -100px;
        margin-right: 20px;
        height: 50px;
        background-color: #cccccc;
        text-decoration-color: darkgrey;
        font-size: 20px;
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


                <h3><input type="text" name="search" placeholder="موجود ولالا"></h3>

            </div>

            <div class="login"     >

                <img  src="images/white-login-512.png" >

            </div>

        </nav>


    </div>

</header>



<h2> نتائج البحث </h2>

<div class="card">


    <a href="slider.blade.php"> <img src="images/iphone-6s-plus-topic.png" title=" شاهد الصور "  ></a>

    <div class="container">
        <h4><b>iphone 6</b></h4>
        <p></p>
    </div>
    <div class="price">
        <p>&nbsp;&nbsp; <input type="text4" name="output"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: السعر </p>
    </div>
    <div class="shop-in">
        <p>&nbsp;&nbsp; <input type="text4" name="output">&nbsp;&nbsp;: اسم المحل  </p>
    </div>
    <div class="shop-in">
        <p>&nbsp;&nbsp; <input type="text4" name="output">&nbsp;&nbsp;: رقم الهاتف   </p>
    </div>
    <div class="shop-in">
        <p>&nbsp;&nbsp; <input type="text4" name="output">&nbsp;&nbsp;: موقع المحل  </p>
    </div>
    <div class="shop-in">
        <p>&nbsp;&nbsp; <input type="text4" name="output">&nbsp;: صفحة المحل   </p>
    </div>
    <div class="shop-in">
        <p>&nbsp;&nbsp; &nbsp;<input type="text4" name="phone-no">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ملاحظات   </p>
    </div>
</div>



<footer>



    <p>  صمم من قبل مدراء الموقع &copy; 2018 </p>

</footer>



</body>


</html>


