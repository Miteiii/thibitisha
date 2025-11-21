{{-- @extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="alert alert-info">
        <h4>Admin Panel Placeholder</h4>
        <p>This is the backend admin area. No functionality is implemented yet.</p>
    </div>
</div>
@endsection --}}


@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
<div class="text-center p-12 bg-gray-200 rounded-xl shadow-inner mt-8 max-w-2xl mx-auto border-4 border-red-500">
    <h1 class="text-4xl font-extrabold text-red-600 mb-4">Mkubwa Dashboard (Admin Panel)</h1>
    <p class="text-xl text-gray-700">
        This is a placeholder for the backend administration interface.
    </p>
    <p class="text-lg font-semibold text-gray-600 mt-4">
        **Note:** No backend implementation is required for this assignment (Lab 6).
    </p>
</div>
@endsection
