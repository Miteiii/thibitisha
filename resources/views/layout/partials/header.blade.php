{{-- <!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Start Navbar Links-->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
          <i class="bi bi-list"></i>
        </a>
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="{{ URL::to('/') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <!--end::Start Navbar Links-->
    
    <!--begin::End Navbar Links-->
    <ul class="navbar-nav ms-auto">
      <!--begin::Navbar Search-->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="bi bi-search"></i>
        </a>
      </li>
      <!--end::Navbar Search-->
      
      <!--begin::Notifications Dropdown Menu-->
      <li class="nav-item dropdown">
        <a class="nav-link" data-bs-toggle="dropdown" href="#">
          <i class="bi bi-bell-fill"></i>
          <span class="navbar-badge badge text-bg-warning">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="bi bi-envelope me-2"></i> 4 new messages
            <span class="float-end text-secondary fs-7">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <!--end::Notifications Dropdown Menu-->
      
      <!--begin::Fullscreen Toggle-->
      <li class="nav-item">
        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
          <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
          <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
        </a>
      </li>
      <!--end::Fullscreen Toggle-->
      
      <!--begin::User Menu Dropdown-->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <img
            src="{{ asset('adminlte/assets/img/user2-160x160.jpg') }}"
            class="user-image rounded-circle shadow"
            alt="User Image"
          />
          <span class="d-none d-md-inline">{{ auth()->user()->name ?? 'Guest' }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <!--begin::User Image-->
          <li class="user-header text-bg-primary">
            <img
              src="{{ asset('adminlte/assets/img/user2-160x160.jpg') }}"
              class="rounded-circle shadow"
              alt="User Image"
            />
            <p>
              <small>Member since 2024</small>
            </p>
          </li>
          <!--end::User Image-->
          
          <!--begin::Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <form action="#" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-default btn-flat float-end">Sign out</button>
            </form>
          </li>
          <!--end::Menu Footer-->
        </ul>
      </li>
      <!--end::User Menu Dropdown-->
    </ul>
    <!--end::End Navbar Links-->
  </div>
  <!--end::Container-->
</nav>

<!--end::Header--> --}}



<header class="bg-white shadow-md sticky top-0 z-10">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
        <!-- Logo and Brand Name -->
        <a href="{{ url('/') }}" class="flex items-center space-x-2 text-xl font-bold text-gray-800 tracking-wider">
            <!-- Logo from /public/images/logo.png -->
            <img src="{{ asset('images/logo.png') }}" alt="Thibitisha Logo" class="h-8 w-auto rounded-md shadow-sm"> 
            <span>Thibitisha</span>
        </a>

        <!-- Desktop Navigation Links -->
        <div class="hidden md:flex space-x-6">
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-blue-600 transition duration-150">Home</a>
            <a href="{{ url('/about') }}" class="text-gray-600 hover:text-blue-600 transition duration-150">About</a>
            <a href="{{ url('/verify') }}" class="px-3 py-1 text-white bg-blue-600 rounded-md hover:bg-blue-700 transition duration-150 shadow-md">Verification</a>
            <a href="{{ url('/mkubwa') }}" class="text-gray-600 hover:text-red-500 transition duration-150">Admin Panel</a>
        </div>

        <!-- Mobile Menu Button (Hamburger) -->
        <button id="mobile-menu-button" class="md:hidden p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none">
            <!-- Hamburger Icon (Menu) -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </nav>

    <!-- Mobile Menu (Collapsed by default) -->
    <div id="mobile-menu" class="hidden md:hidden bg-gray-50 border-t border-gray-200">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Home</a>
            <a href="{{ url('/about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">About</a>
            <a href="{{ url('/verify') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-blue-600 hover:bg-blue-700">Verification</a>
            <a href="{{ url('/mkubwa') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Admin Panel</a>
        </div>
    </div>
</header>

<script>
    // Simple JavaScript to handle the mobile menu toggle
    document.addEventListener('DOMContentLoaded', () => {
        const button = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');

        if (button && menu) {
            button.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    });
</script>
