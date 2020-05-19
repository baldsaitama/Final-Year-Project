<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('admin.dashboard') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><span style="color: #6e6e6e">G</span><span style="color: #cc3333">B</span></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><span style="color: #6e6e6e">Ghar</span><span style="color: #cc3333">Bhada</span></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
  
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
            
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ authUser()->present()->profilePicture }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ authUser()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ authUser()->present()->profilePicture }}" class="img-circle" alt="User Image">
  
                <p>
                  {{ authUser()->name }}
                  <small>Member since, {{ authUser()->created_at ? authUser()->created_at->format('F d, Y') : 'start' }}</small>
                </p>
              </li>
              {{-- <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li> --}}
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('admin.users.show', authUser()->id) }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          {{-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> --}}
        </ul>
      </div>
    </nav>
  </header>
  
  @section('javascripts')
      @parent
      <script>
        var notificationButton = $('.notificationButton');
        notificationButton.on('click', function(e){
              e.preventDefault();
              var $this = $(this)
              var url = $this.data('url')
              var showOrder = $this.data('id')
              // console.log(showOrder)
              if (url) {
                $.ajax({
                    url: url,
                    method: 'PATCH',
                  }).done(function(response){
                    console.log("Success")
                    window.location.href = showOrder
                    // var unseenNotificationCount = $('#unseenNotificationCount')
                    // var unseenCount = parseInt(unseenNotificationCount.text());
                    // unseenNotificationCount.text(unseenCount-1)
                 }).fail(function(response) {
                    console.log("Failed")
                });
              }
        })
      </script>
  @endsection