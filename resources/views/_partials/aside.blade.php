<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-truck"></i>
      </div>
      <div class="sidebar-brand-text mx-3">{{config('app.name')}}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
      <a class="nav-link" href="/">
        <i class="fas fa-home"></i>
        <span>Pagrindinis</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/truck&create">
        <i class="fas fa-truck"></i>
        <span>Pridėti sunkvežimį</span></a>
    </li>

    
    <!-- Divider -->
    <hr class="sidebar-divider my-0 mb-2">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->