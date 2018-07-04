<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>find my phone</title>
    <!-- Bootstrap core CSS-->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom mplate-->
    <link href="/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Store</div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputName">First name</label>
                            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputLastName">Last name</label>
                            <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="store_name">Store Name</label>
                    <input class="form-control" id="store_name" name="store_name" type="text" aria-describedby="emailHelp" placeholder="Your store Name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone No.</label>
                    <input class="form-control" id="phone" name="phone" type="text" aria-describedby="emailHelp" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="fb_page">Facebook Page Link</label>
                    <input class="form-control" id="fb_page" name="fb_page" type="text" placeholder="fb_page">
                </div>

                <div class="form-group">
                    <label for="fb_page">Your location</label>
                    <select name="store_locate" class="form-control">
                        <option value="dahra">الظهرة</option>
                        <option value="delshara3">شارع الظل</option>
                        <option value="zawiatadhmani">زاوية الدهماني</option>
                        <option value="nofliien">النوفليين</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fb_page">Your location In Map</label>
                    <div id="map">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Password</label>
                            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleConfirmPassword">Confirm password</label>
                            <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" >Register</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="/login">Login Page</a>
                {{--<a class="d-block small" href="/password/reset">Forgot Password?</a>--}}
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2VXOp02EuAqVBvDaczTnGP8buPIgWZ9M&callback=initMap">
</script>
<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
