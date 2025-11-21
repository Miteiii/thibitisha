@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="p-6 bg-white rounded-xl shadow-lg space-y-6 mt-8">
    <h1 class="text-3xl font-bold text-blue-600 border-b-2 border-blue-100 pb-2">About Thibitisha</h1>
    <p class="text-gray-700 leading-relaxed">
        Thibitisha is a dedicated platform designed to streamline the process of medical practitioner verification. In an era where trust and authenticity are paramount, we provide a reliable solution for institutions and individuals to confirm the credentials of healthcare professionals.
    </p>

    <h3 class="text-2xl font-semibold text-gray-800 pt-4">Our Mission</h3>
    <p class="text-gray-700 leading-relaxed">
        To enhance trust and safety in the healthcare ecosystem by providing a fast, accurate, and secure verification system.
    </p>

    <h3 class="text-2xl font-semibold text-gray-800 pt-4">Key Benefits</h3>
    <ul class="list-disc list-inside space-y-2 pl-4 text-gray-700">
        <li>
            <strong class="text-blue-600">Instant Verification:</strong> Quickly confirm a doctor's license and specialization.
        </li>
        <li>
            <strong class="text-blue-600">Reduced Fraud:</strong> Minimize the risk of dealing with unqualified individuals.
        </li>
        <li>
            <strong class="text-blue-600">Regulatory Compliance:</strong> Ensure adherence to medical board requirements.
        </li>
    </ul>
</div>
@endsection
