@extends('layouts.app')

@section('title', 'Verification')

@section('content')
<div class="max-w-3xl mx-auto mt-8">
    <h1 class="text-3xl font-bold text-blue-600 mb-2">Doctor Verification</h1>
    <p class="text-xl text-gray-600 mb-6">Use this tool to verify the credentials of a medical practitioner.</p>

    <div class="bg-white rounded-xl shadow-2xl p-8 space-y-6">
        <h3 class="text-2xl font-semibold text-gray-800">Verification Portal</h3>
        <p class="text-gray-500">This is a creative placeholder for the verification functionality.</p>

        <!-- Placeholder Image/Content -->
        <div class="text-center border-2 border-dashed border-blue-300 p-8 rounded-lg bg-blue-50">
            <img src="https://placehold.co/400x200/0D6EFD/FFFFFF?text=Scan+Doctor+ID+Here" alt="Verification Placeholder" class="img-fluid rounded my-3 mx-auto shadow-md">
            <br>
            <p class="text-sm font-medium text-blue-800 mt-4">
                Enter a license number or national ID to check the doctor's status.
            </p>
        </div>
        
        <!-- Verification Form Placeholder -->
        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
            <input type="text" placeholder="Enter License Number or Name" 
                   class="flex-grow p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 shadow-sm"
                   disabled>
            <button class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-700 transition duration-300" 
                    disabled>
                Verify Now (Coming Soon)
            </button>
        </div>
        <p class="text-center text-sm italic text-gray-500 mt-4">"Secure, Simple, and Trustworthy."</p>
    </div>
</div>
@endsection
