<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{Auth::user()->avatar}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="menu active" file = "category" >
                <a href="{{route('admin')}}">
                    <i class="fa fa-list"></i> <span>Categorys</span>
                </a>
            </li>
            <li class="menu">
                    <a href="{{route('admin/item')}}">
                    <i class="fa fa-list-ul"></i> <span>Items</span>
                </a>
            </li>
            <li class="menu">
                <a href="{{route('admin/reservation')}}">
                    <i class="fa fa-users"></i>
                    <span>Customer</span>
                    </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<style>
    .sidebar-menu .menu:hover {
        color: #fff;
    }
    .sidebar-menu .menu .active {
        color: #fff;
    }
</style>
