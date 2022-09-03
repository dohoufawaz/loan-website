<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item @if(Request::url()==url('admin/dashboard'))active @endif">
        <a class="nav-link" href="{{url('admin/dashboard')}}">
          <i class="mdi mdi-flag-checkered menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item @if(Request::url()==url('admin/client'))active @endif">
        <a class="nav-link " href="{{url('admin/client')}}">
          <i class="mdi mdi-wallet-travel menu-icon"></i>
          <span class="menu-title">Clients</span>
        </a>
      </li>
      <li class="nav-item @if(Request::url()==url('admin/contact'))active @endif">
        <a class="nav-link" href="{{url('admin/contact')}}">
          <i class="mdi mdi-chart-pie menu-icon"></i>
          <span class="menu-title">Contact</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/blog')}}">
          <i class="mdi mdi-chart-pie menu-icon"></i>
          <span class="menu-title">Blog</span>
        </a>
      </li>
    </ul>
  </nav>