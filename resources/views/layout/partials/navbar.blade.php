<!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Start Navbar Links-->
    <ul class="navbar-nav">
     <li class="nav-item d-flex align-items-center">
        <!-- Logo -->
          <img src="{{ asset('adminlte/assets/images/Thibitisha.png') }}" alt="Thibitisha Logo" class="rounded-lg shadow-2xl" style="width: 100px; height: auto;">
     </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
          <i class="bi bi-list"></i>
        </a>
      </li> --}}
      <li class="nav-item d-none d-md-block">
        <a href="{{ route('pages.home') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="{{ route('pages.about') }}" class="nav-link">About</a>  
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="{{ route('pages.verify') }}" class="nav-link">Verify</a>  
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="{{ route('admin.dashboard') }}" class="nav-link">Admin Dashboard</a>  
      </li>
    </ul>

    <!--end::Start Navbar Links-->
  </div>
  <!--end::Container-->
</nav>
<!--end::Header-->
