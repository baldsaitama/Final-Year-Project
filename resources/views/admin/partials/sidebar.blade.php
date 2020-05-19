<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ authUser()->present()->profilePicture }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ authUser()->name }}</p>
        </div>
      </div>
  
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ setActive('admin.dashboard') }}">
          <a href="{{ route('admin.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="{{ setActive('admin.amenities') }}">
          <a href="{{ route('admin.amenities.index') }}">
            <i class="fa fa-dashboard"></i> <span>Amenities</span>
          </a>
        </li>
        <li class="{{ setActive('admin.properties') }}">
          <a href="{{ route('admin.properties.index') }}">
            <i class="fa fa-dashboard"></i> <span>Properties</span>
          </a>
        </li>
        <li class="treeview {{ setActive(['admin.users.index', 'admin.users.create']) }}">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ setActive('admin.users.index') }}"><a href="{{ route('admin.users.index') }}"><i class="fa fa-circle-o"></i>All Users</a></li>
            <li class="{{ setActive('admin.users.create') }}"><a href="{{ route('admin.users.create') }}"><i class="fa fa-circle-o"></i> Add new</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>