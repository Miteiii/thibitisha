@extends('layouts.admin')

@section('title', 'Add Role')

{{-- Page Heading --}}
@section('page-title', 'Add Role')
{{-- Breadcrumb --}}
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a
></li>
    <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Role</li>
@endsection 

{{-- Main Content --}}

@section('content')
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>

    <div class="card card-primary card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">Add Role</div>
                </div>
                <form action="{{ route('roles.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input required type="{{ $request->old('name') }}" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description">{{ $request->old('description') }}</textarea>
                        </div>
 
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi-icons bi-save"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
@endsection    
