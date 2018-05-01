<DOCTYPE! html>
<html>




<head>

    <title> STORE </title>
    <link rel="icon" href="NOOr-ennab_03.png" />
    <link rel="stylesheet"  href="profile.css">
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
        color: grey;
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
        padding-left: 10%;
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

        margin-top: -27px;
        float: right;
        margin-right: 1033px;
        height: 25px;
        width: 25px;
    }
    .search1 img {

        margin-top: -27px;
        float: right;
        margin-right: 1110px;
        height: 25px;
        width: 25px;
    }
    .item img {

        width: 20px;
        height: 20px;
        margin-left: 10px;
    }


    .h1 {
        margin-top: -48px;
        margin-right: 820px;
        color: white;
        font-size: 18px;
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
        margin-top: 30px;
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
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 30%;
        height: 65%;
        margin-left: 10px;
        margin-top: 35px;
        background-color: #cccccc;
        margin-bottom: 0px;

    }

    .card img {
        height: 200px;
        width: 50%;
        padding-right:0px;
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
    .a1 a{

    }

    .price p{


        margin-left: 700px;
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
        background-color: white;
        text-decoration-color: darkgrey;
        font-size: 20px;
        width: 100px;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover, a:hover {
        opacity: 0.7;
    }

    .left{
        float: left;
        margin-top: -400px;
    }

    .left h4{
        font-size: 30px;
        margin-left: 1150px;
        margin-bottom: 40px;
        margin-top: -30px;
        text-shadow: 2px 2px #cccccc;

    }
</style>


<body class="body">
<header>
    <div class="div1">


        <nav class="menu">



            <ul >

                <li class="item"><a href="home-s."> الرئيسية <img src="images/images.png"></a>  </li>


                <li class="item"><a href="add-pro."> إضافة منتج <img src="images/images (3).png"></a>  </li>
                <li class="item"><a href="contact"> تواصل مع الموقع  <img src="images/contact.png"></a>  </li>



            </ul>
            <h1 class="h1"> | </h1>
            <div class="search"     >

                <a href="profile.html">  <img  src="images/profile.png" ></a>

            </div>

            <div class="search1"     >

                <a href="#"> <img  src="images/makefg.png" ></a>

            </div>


        </nav>


    </div>

</header>




<!-- <h2> نتائج البحث </h2> -->





<div class="card">

    <img src="images/user-account-profile-avatar-person-male-336ae12fefbbe619-512x512.png" alt="John" >
    <h1>  نور الهدى برقناب </h1>
    <p class="title"> اسم المحل :   تواصل  </p>

    <a href="#"><i class="fa fa-facebook"></i></a>
    <p><button>  تعديل

</div>
<div class="left">
    <h4> منتجات المحل </h4>
    <div class="price">
        <p>&nbsp;&nbsp; &nbsp; رمز الجهاز :&nbsp;&nbsp;<input type="text4" name="output"> &nbsp;&nbsp;&nbsp; &nbsp; اسم الجهاز :&nbsp;&nbsp;<input type="text4" name="output"> &nbsp;<a href="#" > تعديل </a> &nbsp;<a href="#"> ازالة </a></p>
    </div>
    <div class="price">
        <p>&nbsp;&nbsp; &nbsp; رمز الجهاز :&nbsp;&nbsp;<input type="text4" name="output"> &nbsp;&nbsp;&nbsp; &nbsp; اسم الجهاز :&nbsp;&nbsp;<input type="text4" name="output"> &nbsp;<a href="#" > تعديل </a> &nbsp;<a href="#"> ازالة </a></p>
    </div>
    <div class="price">
        <p>&nbsp;&nbsp; &nbsp; رمز الجهاز :&nbsp;&nbsp;<input type="text4" name="output"> &nbsp;&nbsp;&nbsp; &nbsp; اسم الجهاز :&nbsp;&nbsp;<input type="text4" name="output"> &nbsp;<a href="#" > تعديل </a> &nbsp;<a href="#"> ازالة </a></p>
    </div>+
</div>


<footer>



    <p>  صمم من قبل مدراء الموقع &copy; 2018 </p>

</footer>



</body>


</html>


