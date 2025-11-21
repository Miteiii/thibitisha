<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Correctly yields the title -->
    <title>@yield('title') | Thibitisha Doctor Verification</title>
    
    <!-- Link to the compiled Tailwind CSS file -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->

    
    
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.css') }}" />
    <!--end::Required Plugin(AdminLTE)-->
    
    {{-- Page-specific styles --}}
    @stack('styles')
</head>
<!-- Apply Minimalist background and font -->
<body class="bg-gray-50 text-gray-800 font-sans min-h-screen flex flex-col"> 
    
    <!-- Includes the Navbar/Header -->
    @include('layouts.partials.navbar')

    <!-- @yield('content') for the page body (flex-grow ensures content area expands) -->
    <main class="content-area flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Includes the Footer -->
    @include('layouts.partials.footer')
    
</body>
</html>
