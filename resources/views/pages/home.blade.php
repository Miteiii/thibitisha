@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="flex flex-col md:flex-row items-center justify-between p-6 bg-white rounded-xl shadow-lg mt-8">
    <div class="md:w-1/2 space-y-4 mb-6 md:mb-0">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">
            Welcome to <span class="text-blue-600">Thibitisha</span>
        </h1>
        <p class="text-xl text-gray-600">
            Your trusted partner for seamless doctor verification and credential management.
        </p>
        <a href="/verify" class="inline-block px-8 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg shadow-xl hover:bg-blue-700 transition duration-300 transform hover:scale-105">
            Verify a Doctor
        </a>
    </div>
    
</div>
@endsection
