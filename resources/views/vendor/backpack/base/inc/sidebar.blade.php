@if (Auth::check() && getAdminMemberID() == 0)
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->

          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

          <li class="treeview">
            <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-newspaper-o"></i> <span>Client</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/member') }}"><i class="fa fa-file-o"></i> <span>Member</span></a></li>
            </ul>
          </li>


          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>

          <li class="treeview">
            <a href="#"><i class="fa fa-cogs"></i> <span>Business Setting</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/business_intermediary') }}"><i class="fa fa-file-o"></i> <span>Intermediary</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/business_function') }}"><i class="fa fa-file-o"></i> <span>Function</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/business_type') }}"><i class="fa fa-file-o"></i> <span>Type</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/business_category') }}"><i class="fa fa-file-o"></i> <span>Category</span></a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-cogs"></i> <span>Contact Setting</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/email_company') }}"><i class="fa fa-file-o"></i> <span>Email Company</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/mobile') }}"><i class="fa fa-file-o"></i> <span>Mobile</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/telephone') }}"><i class="fa fa-file-o"></i> <span>Telephone</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/social_media') }}"><i class="fa fa-file-o"></i> <span>Social Media</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/mobile_network') }}"><i class="fa fa-file-o"></i> <span>Mobile Network</span></a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-cogs"></i> <span>Location Setting</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/village') }}"><i class="fa fa-file-o"></i> <span>Village</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/commune') }}"><i class="fa fa-file-o"></i> <span>Commune</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/district') }}"><i class="fa fa-file-o"></i> <span>District</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/province') }}"><i class="fa fa-file-o"></i> <span>Province</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/country') }}"><i class="fa fa-file-o"></i> <span>Country</span></a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-cogs"></i> <span>HR Setting</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/position') }}"><i class="fa fa-file-o"></i> <span>Position</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/department') }}"><i class="fa fa-file-o"></i> <span>Department</span></a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-cogs"></i> <span>Advanced</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language') }}"><i class="fa fa-flag-o"></i> <span>Languages</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language/texts') }}"><i class="fa fa-language"></i> <span>Language Files</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
            </ul>
          </li>
          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

@endif

@if(getMemberID() > 0 || getAdminMemberID() > 0)
  <?php  $getMemberInfo = getMemberInfo(); ?>
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr($getMemberInfo['name'], 0, 1) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ $getMemberInfo['name'] }}</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu">
        <li class="header">{{ trans('backpack::base.administration') }}</li>
        <!-- ================================================ -->
        <!-- ==== Recommended place for admin menu items ==== -->
        <!-- ================================================ -->

        <li><a href="{{ url('/bcf/'.create_code_number(getMember2ID())) }}"><i class="fa fa-dashboard"></i> <span>User Account</span></a></li>

        <li><a href="{{ url('/') }}"><i class="fa fa-file-o"></i> <span>Head Office Business Card</span></a></li>
        <li><a href="{{ url('/') }}"><i class="fa fa-file-o"></i> <span>Official Document Upload</span></a></li>
        <li><a href="{{ url('/') }}"><i class="fa fa-file-o"></i> <span>Departmental Name Card</span></a></li>
        <li><a href="{{ url('/') }}"><i class="fa fa-file-o"></i> <span>Departmental Name Card View</span></a></li>


        <!-- ======================================= -->
        <li class="header">{{ $getMemberInfo['name'] }}</li>
        <li><a href="{{ url('bcf/back-home') }}"><i class="fa fa-arrow-left"></i> <span>Back Home</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

@endif
