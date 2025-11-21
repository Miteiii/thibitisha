<?php

namespace App\Http\Controllers\Mkubwa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        
    }

    public function dashboard() {
        return view('admin.dashboard');
    }
}
