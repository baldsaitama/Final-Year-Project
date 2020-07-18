<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dashboard/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dashboard/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="dashboard/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="dashboard/css/styles.css">
    <title>Dashboard </title>
</head>

<body>
<!-- navbar -->
<nav class="navbar my-nav navbar-expand-lg fixed-top ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <h4>Gharbhada</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-signal fa-rotate-270"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item ">
                    <a class="nav-link " href="index.html">Home</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="notifications.html"><span class="navNotify">  <i data-feather="bell"></i>
                     <span class="countNot">2</span>
                    </a>
                </li>

                <li class="nav-item dropdown  mr-0 pr-0">
                    <div class="row">
                        <div class="col-7">
                            <a class="nav-link dropdown-toggle" href="#" id="userActionBtn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                User's Name
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userActionBtn">
                                <a class="dropdown-item" href="#">Sub Menu</a>
                                <a class="dropdown-item" href="#">Sub Menu</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="menuUserImg">
                                <img src="images/profile.jpg" alt="user" class="d-flex img-responsive">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- dashboard ui -->
<div class="dashboardUi">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 dashSpaceCut">
                <div class="dashGrp">
                    <div class="adminData">
                        <div class="row">
                            <div class="col-4">
                                <div class="userImg">
                                    <img src="images/profile.jpg">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="userInfo">
                                    <h6>Welcome Back</h6>
                                    <p>User name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboardMenus">
                        <ul>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="edit profile.html">Edit Profile</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="#">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 ">
                <div class="dashContain">
                    <div class="photobazarCard">
                        <h4>User Details</h4>

                        <div class="userProfileUi">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="userImgGrp">
                                            <div class="userImgs">
                                                <img src="images/caroBanner.jpg">
                                            </div>
                                            <div class="float-left">
                                                <h6><strong>Name : </strong></h6>
                                            </div>
                                            <div class="float-right">
                                                <h6>Sagar Khadka</h6>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="float-left">
                                                <h6><strong>Email : </strong></h6>
                                            </div>
                                            <div class="float-right">
                                                <h6>Sagar@gmailcom</h6>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="float-left">
                                                <h6><strong>Phone : </strong></h6>
                                            </div>
                                            <div class="float-right">
                                                <h6>786151812</h6>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="float-left">
                                                <h6><strong>Address : </strong></h6>
                                            </div>
                                            <div class="float-right">
                                                <h6>Mulpani</h6>
                                            </div>
                                            <div class="clear"></div>


                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="activeCase">
                                            <div class="float-left">

                                                <p><strong>Acive Properties : </strong></p>
                                            </div>
                                            <div class="float-right">
                                                <p>0</p>

                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="activeCase mt-3">
                                            <div class="float-left">

                                                <p><strong>Drafted Properties : </strong></p>
                                            </div>
                                            <div class="float-right">
                                                <p>0</p>

                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="seeAllGrp">
                                                    <div class="seeAllPr">
                                                        <img src="images/caroBanner.jpg">
                                                    </div>
                                                    <a href="activePr.html">See All Active Properties</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="seeAllGrp">
                                                    <div class="seeAllPr">
                                                        <img src="images/caroBanner.jpg">
                                                    </div>
                                                    <a href="drated.html">See All Drafted Properties</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- footer -->
<!--  JavaScript -->
<script type="text/javascript " src="dashboard/js/jquery-3.2.1.min.js "></script>
<script src="dashboard/js/bootstrap.min.js"></script>
<script type="text/javascript " src="dashboard/js/owl.carousel.min.js "></script>
<script src="dashboard/js/script.js"></script>
<script src="dashboard/js/feather.min.js"></script>
<script>
    feather.replace()
</script>
</body>

</html>
