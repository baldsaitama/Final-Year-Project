<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/styles.css">
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
                    <a class="nav-link" href=""><span class="navNotify">  <i data-feather="bell"></i>
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
            <div class="wrapper">
                <div class="bhdaTable">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 mb-3 text-center">
                                <h2>Notifications</h2>
                            </div>
                            <div class="col-lg-12">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Property Details</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <div class="pprtGrp">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p>You property have been booked by Mr. Amit Acharya</p>
                                                        <div style="font-style: italic;">
                                                            <div>Name:</div>
                                                            <div>Phone:</div>
                                                            <div>Email:</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pprtGrp">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <img src="images/caroBanner.jpg" width="180">
                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button>Confirm</button>
                                            <button>Delete</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <div class="pprtGrp">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p>You property have been booked by Mr. Amit Acharya</p>
                                                        <div style="font-style: italic;">
                                                            <div>Name:</div>
                                                            <div>Phone:</div>
                                                            <div>Email:</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pprtGrp">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <img src="images/caroBanner.jpg" width="180">
                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button>Confirm</button>
                                            <button>Delete</button>
                                        </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- footer -->
    <!--  JavaScript -->
    <script type="text/javascript " src="js/jquery-3.2.1.min.js "></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript " src="js/owl.carousel.min.js "></script>
    <script src="js/script.js"></script>
    <script src="js/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>
