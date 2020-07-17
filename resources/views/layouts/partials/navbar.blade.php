<!-- navbar begins -->
<div class="gharBhadaNavbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark container-fluid fixed-top">
        <a class="navbar-brand" href="{{url('/')}}">GHAR BHADA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('properties.buyrent',['status'=>'sale'])}}">Buy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('properties.buyrent',['status'=>'rent'])}}">Rent</a>
                </li>
                <li class="nav-item">
                    @auth
                        @if (authUser()->user_type=='owner')
                            <a class="nav-link" href="{{route('properties.create')}}">Post Property</a>
                        @endif
                    @endauth
                </li>

                @auth
                    <li class="nav-item dropdown  mr-0 pr-0">
                        <div class="row">
                            <div class="col-7">
                                <a class="nav-link dropdown-toggle" href="#" id="userActionBtn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{authUser()->name}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="userActionBtn">
                                    <a class="dropdown-item" href="{{route('users.show',authUser()->id)}}">Dashboard</a>
                                    <a class="dropdown-item" href="{{route('bookings.index')}}">Bookings</a>
                                    <a class="dropdown-item" href="{{route('notifications.index')}}">Notifications</a>
                                    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="menuUserImg">
                                    <img src="{{authUser()->present()->profilePicture}}" alt="user" class="d-flex img-responsive">
                                </div>
                            </div>
                        </div>
                    </li>
                @else
                        <li class="nav-item">
                            {{-- <a class="nav-link logBtn" href="{{route('register')}}">Register</a> --}}
                            <a class="nav-link logBtn" href="{{route('admin.dashboard')}}">Log In</a>
                        </li>
                @endauth
            </ul>
        </div>
    </nav>
</div>
<!-- navbar ends -->
