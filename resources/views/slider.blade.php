<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<style type="text/css">

    body {

        background-color: #cccccc;

    }

    .mySlides {
        float: center;
        margin :50px 400px;
        width: 600px;
        height: 500px;


    }

    .left {
        margin-left: 600px;
    }


    .right {
        margin-left: 100px;
    }

</style>
<body>
<img class="mySlides" src="images/homepage_04.png">
<img class="mySlides" src="images/homepage_06.png">


<button class="left" onclick="plusDivs(-1)">&#10094;</button>
<button class="right" onclick="plusDivs(+1)">&#10095;</button>

<script type="text/javascript">



    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }


    // var myIndex = 0;
    // carousel();

    // function carousel() {
    //     var i;
    //     var x = document.getElementsByClassName("mySlides");
    //     for (i = 0; i < x.length; i++) {
    //        x[i].style.display = "none";
    //     }
    //     myIndex++;
    //     if (myIndex > x.length) {myIndex = 1}
    //     x[myIndex-1].style.display = "block";
    //     setTimeout(carousel, 2000); // Change image every 2 seconds
    // }

</script>
</body>
</html>