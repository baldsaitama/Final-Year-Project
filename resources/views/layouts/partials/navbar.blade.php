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
                    <a class="nav-link" href="#buyHouse">Buy Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#rentHouse">Rent</a>
                </li>
                <li class="nav-item">
                    @auth
                        @if (authUser()->user_type=='owner')
                            <a class="nav-link" href="{{route('properties.create')}}">Post Property</a>
                        @endif
                    @endauth
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link logBtn" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                            @csrf
                        </form>
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
