<!DOCTYPE html>
<html>

<head>
    <title>Register | Ghar Bhada</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>

<body>
<!-- navbar begins -->
<div class="gharBhadaNavbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark container-fluid fixed-top">
        <a class="navbar-brand" href="{{ route('welcome') }}">GHAR BHADA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html#buyHouse">Buy Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html#rentHouse">Rent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="postProperty.html">Post Property</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Requirements</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link logBtn" href="login.html">Log In</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- navbar ends -->

<!-- register -->
<form method="POST" action="{{ route('login') }}">
@csrf
<div class="wrapper logBox">
    <div class="container-fluid">
        <div class="registerBox logBox">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Log In</h2>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-4">
                            <label>Email Address</label>
                        </div>
                        <div class="col-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-4">
                            <label>Password</label>
                        </div>
                        <div class="col-8">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="bhadaBnt">
                        <button type="submit" class="btn btn-bhadaBtn">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="alreadyAc">
                        <p>Don't have an account ? <a href="{{route("register")}}">Register Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>


<!-- footer begins -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <p>2020 © Ghar Bhada Pvt. Ltd.</p>
                <p>All rights reserved </p>
                <div class="socialIcons">
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/gharBhadaScrollTop.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script>
    new WOW().init();
</script>


<script src="js/smooth-scroll.js"></script>
<script type="text/javascript">
    var scroll = new SmoothScroll('a[href*="#buyHouse"]', {
        speed: 1500,
        offset: 100,

    });
    var scroll = new SmoothScroll('a[href*="#rentHouse"]', {
        speed: 1500,
        offset: 100,

    });
</script>



</body>

</html>
