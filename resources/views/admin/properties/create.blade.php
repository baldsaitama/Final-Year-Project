<!DOCTYPE html>
<html>

<head>
    <title>Post Property | Ghar Bhada</title>
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
        <a class="navbar-brand" href="index.html">GHAR BHADA</a>
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
<div class="wrapper">
    <div class="container-fluid">
        <div class="postProperty">
            <h2>Post Property</h2>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-4">
                            <label>Property Status</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control">
                                <option class="rent" value="rent">
                                    Rent
                                </option>
                                <option class="sale" value="sale">
                                    Sale
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-4">
                            <label>Category</label>
                        </div>
                        <div class="col-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">House</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Flat</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">Room</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                <label class="form-check-label" for="inlineRadio4">Apartment</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                <label class="form-check-label" for="inlineRadio5">Office Space</label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-4">
                            <label>Category</label>
                        </div>
                        <div class="col-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                                <label class="form-check-label" for="inlineRadio6">Residental</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option7">
                                <label class="form-check-label" for="inlineRadio7">Commercial</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-4">
                            <label>Property Face Option</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control">
                                <option class="east" value="east">
                                    East
                                </option>
                                <option class="west" value="west">
                                    West
                                </option>
                                <option class="southEast" value="southEast">
                                    South East
                                </option>
                                <option class="southWest" value="southWest">
                                    South West
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <label style="float: none; text-align: center;">Road :</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Text">
                        </div>
                        <div class="col-4">
                            <select class="form-control">
                                <option class="feet" value="feet">
                                    Feet
                                </option>
                                <option class="meter" value="meter">
                                    Meter
                                </option>
                            </select>
                        </div>
                        <div class="col-4">
                            <select class="form-control">
                                <option class="roadType" value="roadType">
                                    Road Type
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="bhadaBnt">
                        <buton class="btn btn-bhadaBtn">Submit</buton>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
