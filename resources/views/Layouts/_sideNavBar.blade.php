<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href=""><img src="{{asset('user/images/logo.png')}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href=""><img src="{{asset('user/images/admin.png ')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-category">
          </li>
          <li class="nav-item menu-items ">
            <a class="nav-link " href="{{route('admin')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi mdi-account-supervisor"></i>
              </span>
              <span class="menu-title">Employees</span>
            </a>

          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">Departments</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('leaveType')}}">
              <span class="menu-icon">
                <i class="mdi mdi-human-greeting"></i>
              </span>
              <span class="menu-title">Leave Type</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-foot-print"></i>
              </span>
              <span class="menu-title">Manage Leave</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('getAllUsers')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Manage Users</span>
            </a>
          </li>
        </ul>
      </nav>
