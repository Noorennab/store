<DOCTYPE! html>
<html>




<head>

    <title> STORE </title>
    <link rel="icon" href="NOOr-ennab_03.png" />
    <link rel="stylesheet"  href="seller.css">
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
        margin-right: 1300px;
        width: 20px;
        height: 20px;
    }
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

    /*
    .banner {

        width: 100%;
        height: 600px;
        margin-bottom: 150px;
        position:scroll;

    }
    */
    /*

    .ph1 img {

        width: 20%;
        height: 500px;
        margin-right: 60%;
        margin-top: 50px;
    }


    .ph2 img {

        margin-top: -550px;
        height: 500px;
        width: 20%;
    }

    .ph3 img {
          margin-left: 60%;
        margin-top: -490px;
        height: 500px;
        width: 20%;
    }
    */


    .line img{


        margin-top: -100px;
        margin-bottom: 200px;
    }


    .para p{
        font-size: 20px;



    }
    .para span{

        font-size: 50px;
        margin-top: 300px;
    }


    .line2 img{


        margin-top: 200px;
        margin-bottom: auto;
    }

    .srch2 img{

        margin-top: -100px;
        margin-left: 600px;
    }

    .srch2 p{

        font-size: 40px;
        margin-top: -80px;

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

    .button {

        width: 30%;
        float: center;
        height: 100px;
        text-align: center;
        text-decoration-color: black;
        background-color: dimgray;
        font-size: 20px;
        margin-bottom: 50px;
        cursor: pointer;
        color: gainsboro;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-transition: width 0.5s; /* Safari */
        transition: width 0.5s;
    }

    .button:hover {

        width: 32%;

    }


    .button1 {

        width: 30%;
        float: center;
        height: 100px;
        text-align: center;
        background-color: dimgray;
        font-size: 20px;
        margin-bottom: -110px;
        margin-top: 50px;
        cursor: pointer;
        color: gainsboro;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-transition: width 0.5s; /* Safari */
        transition: width 0.5s;
    }

    .button1:hover {

        width: 32%;

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






<div class="line ">

    <img src="images/homepage_19.png">

</div>
<a href="login-form">
    <input type="button" class="button" value=" تسجيل دخول " >
</a>
<h1>  أو </h1>

<div class="para ">



    <span> بائع جديد ؟ </span>

    <p>


        إن الموقع يخدم أصحاب المحلات بشكل كبير، حيث يمكنك كبائع عرض منتجاتك بطريقة بسيطة وواضحة، حيث تقوم بالتسجيل داخل الموقع وتقوم بملأ بياناتك في الخانات المطلوبة <br>والموافقة على شروط الموقع، بعد أن تتم عملية التسجيل سيتاح لك خيار إضافة منتج جديد ، حيث تقوم بتعبئة بيانات منتجك في الصفحة الخاصة بالإضافة وتقوم بإضافته، بعد أن يتم الموافقة على منتجك من قبل الموقع، وعند بحث أي زبون عن نوع هاتف بجميع مواصفات أي منتج قمت بإضافته يتمكن من إيجاد اسم محلك وكامل البيانات من تواصل وموقع المحل حتى يقوم بالذهاب إلى محلك والشراء



    </p>

</div>

<a href="register">
    <input type="button" class="button1" value=" تسجيل بائع جديد ">
</a>

<div class="line2 ">

    <img src="images/homepage_19.png">


</div>



<footer>



    <p>  صمم من قبل مدراء الموقع &copy; 2018 </p>

</footer>

</body>

</html>


