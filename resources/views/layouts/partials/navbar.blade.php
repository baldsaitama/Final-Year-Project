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
                    <a class="nav-link" href="#buyHouse">Buy Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#rentHouse">Rent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="postProperty.html">Post Property</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Requirements</a>
                </li> -->
                @auth
                    {{-- <li class="nav-item">
                        <a class="nav-link logBtn" href="login">Log In</a>
                    </li> --}}
                @else
                        <li class="nav-item">
                            <a class="nav-link logBtn" href="login">Log In</a>
                        </li>
                @endauth
            </ul>
        </div>
    </nav>
</div>
<!-- navbar ends -->