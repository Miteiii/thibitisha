<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    { 
        // get all roles
    $roles = Role::all();

    // pass the roles to the view
    return view('roles.index', compact('roles'));

    // return view('roles.index',['roles' => $roles]);
    }
}
