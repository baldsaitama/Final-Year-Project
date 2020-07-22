<nav class="navbar my-nav navbar-expand-lg fixed-top ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">
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
                    <a class="nav-link" href="notifications.html"><span class="navNotify"></span>  <i data-feather="bell"></i>
                     <span class="countNot">2</span>
                    </a>
                </li>

                <li class="nav-item dropdown  mr-0 pr-0">
                    <div class="row">
                        <div class="col-7">
                            <a class="nav-link dropdown-toggle" href="notifications.index" id="userActionBtn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            </ul>
        </div>
    </div>
</nav>
