<DOCTYPE! html>
<html>



<head>

    <title> STORE </title>
    <link rel="icon" href="NOOr-ennab_03.png" />
    <link rel="stylesheet"  href="search-pro.css">
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
        margin-top: -400px;
        margin-left: 350px;
        box-sizing: border-box;
        border: none;
        background-color: grey;
        color: white;
    }

    .apple img{

        width: 50px;
        height: 50px;
        margin-top: 50px;
        margin-left: 100px;
        margin-left: 500px;
    }

    .samsung img{

        width: 130px;
        height: 50px;
        margin-left: 200px;
        margin-top: -50px;
        margin-right: 400px;
    }

    .s6 img{

        width: 250px;
        height: 300px;
        margin-top: 50px;
        margin-left: 100px;
        margin-left: 500px;
    }

    .s6plus img{

        width: 250px;
        height: 300px;

        margin-top: -320px;
        margin-right: 400px;

    }
    input[type=text2] {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        background-color: grey;
        color: white;
    }
    input[type=text4] {
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


    input[type=checkbox]{

        float: right;
        margin-right: 550px;
        margin-top: 5px;
        width: 15px;
        height: 15px;
        margin-bottom: 30px;

    }



    /*span {


        margin-left: 700px;
        font-size: 15px;
        margin-top: -50px;
         margin-top: -200px;
    }*/


    h4 {

        font-size: 40px;
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
        margin-top: 100px;
        cursor: pointer;
        color: dimgray;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-transition: width 0.5s; /* Safari */
        transition: width 0.5s;
    }

    input[type=submit]:hover {

        width: 13%;

    }

    select[name=phone-S]{

        width: 10%;
        padding: 12px 20px;
        margin-top: -200px;
        margin-left: 500px;
        box-sizing: border-box;
        border: none;
        background-color: grey;
        color: white;

    }
    select[name=phone-C]{

        width: 10%;
        padding: 12px 20px;
        margin-top: -200px;
        margin-left: 500px;
        box-sizing: border-box;
        border: none;
        background-color: grey;
        color: white;

    }

    select[name=phone-ST]{

        width: 10%;
        padding: 12px 20px;
        margin-top: -200px;
        margin-left: 500px;
        box-sizing: border-box;
        border: none;
        background-color: grey;
        color: white;

    }


    .card img

    {

        width: 100px;
        height: 90px;
        margin-left: 700px;
        margin-top: 30px;

    }

    .cash img

    {

        width: 130px;
        height: 100px;
        margin-right: 80px;
        margin-top: -80px;

    }


    .cheuqe img

    {

        width: 130px;
        height: 100px;

        margin-top: -110px;
        margin-right: 470px;
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

</header>





<h4>  الرجاء إختيار مواصفات الجهاز المطلوبة </h4>

<form action="">


    <p> اسم الجهاز  </p>
    <input type="text" name="userid">
    <br>
    <br>
    <br>

    <p> النوع  </p>

    <div class="apple">

        <img src="images/2000px-Apple_logo_black.svg.png">

    </div>
    <div class="samsung">
        <img src="images/2000px-Samsung_Logo.svg.png">


    </div>
    <br>
    <p>  المودل </p>

    <div class="s6">

        <img src="images/iphone-6s-topic.png." title="IPHONE 6S">

    </div>
    <div class="s6plus">
        <img src="images/iphone-6s-plus-topic (1).png" title="IPHONE 6S PLUS">


    </div>
    <br>
    <br>
    <p>  اللون </p>
    <select name="phone-C">
        <option value="dahra">grey</option>
        <option value="delshara3">grey space</option>
        <option value="zawiatadhmani">gold</option>
        <option value="nofliien">rose gold</option>
    </select>

    <br>
    <br>
    <p>  السعة </p>
    <select name="phone-S">
        <option value="dahra">32GB</option>
        <option value="delshara3">64GB</option>
        <option value="zawiatadhmani">128GB</option>

    </select>
    <br>
    <br>
    <p> الحالة </p>
    <select name="phone-ST">
        <option value="dahra">جديد</option>
        <option value="delshara3">مستعمل</option>


    </select>
    <br>
    <br>
    <p> طريقة الدفع </p>

    <div class="card">

        <img src="images/credit-card-2761073_960_720.png" title="بطاقة مصرفية">

    </div>
    <div class="cash">
        <img src="images/256.png" title="نقداا">


    </div>
    <div class="cheuqe">
        <img src="images/373b52c3.png" title="شيك مصدق">


    </div>
    <br>


    <!--    <p>  كلمة المرور</p>
        <input type="password" name="psw">
     <br>
         <p>   إعادة كتابة كلمة المرور</p>
        <input type="password" name="psw-repeat">
     <br>
     <p>إسم المحل </p>
        <input type="text2" name="userid">

        <br>
      <p>  إيميل </p>
      <input type="email" name="email">
    <br>
     <p>رقم الهاتف </p>
      <input type="text4" name="tel" min="0" max="100" s value="00218">
    <br>
     <p> رابط المحل على فيسبوك </p>
        <input type="text" name="fb-pg">

        <br>
    <p> موقع المحل </p>
      <select name="place">
        <option value="dahra">الظهرة</option>
        <option value="delshara3">شارع الظل</option>
        <option value="zawiatadhmani">زاوية الدهماني</option>
        <option value="nofliien">النوفليين</option>
      </select> -->








    <input type="submit" value=" أوجد ">
    <!-- <input type="checkbox" name="vehicle2" value="Car">  <span><a href="#">   الــــــموافقة على شروط وسياسات الموقع .</span></a>
     -->

</form>






<footer>



    <p>  صمم من قبل مدراء الموقع &copy; 2018 </p>

</footer>



</body>


</html>


