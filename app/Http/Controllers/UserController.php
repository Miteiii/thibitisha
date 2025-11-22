<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     /*
    * Display a listing of the resource.
    */
    public function index()
    {
        $users = User::paginate(env('PAGINATION_COUNT',10)); // get the data
        return view('users.index', compact('users')); // return and pass the data
    }

    /*
    * Show the form for creating a new resource.
    */
    public function create()
    {
        
    }

    /*
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        
    }

    /*
    * Display the specified resource.
    */
    public function show(User $user)
    {
        
    }

    /*
    * Show the form for editing the specified resource.
    */
    public function edit(User $user)
    {
        
    }

    /*
    * Update the specified resource in storage.
    */
    public function update(Request $request, User $user)
    {
        
    }

    /*
    * Remove the specified resource from storage.
    */
    public function destroy(User $user)
    {
        
    }

    /*
    * Search for a resource.
    */
    public function search(Request $request)
    {
        
    }

    /*
    * Export the resource to a file.
    */
    public function export(Request $request)
    {
        
    }

    /*
    * Import the resource from a file.
    */
    public function import(Request $request)
    {
        
    }
}
