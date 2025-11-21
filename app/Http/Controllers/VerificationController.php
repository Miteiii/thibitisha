<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class VerificationController extends Controller
{
    public function show(){
        return view('pages.verify');
    }

    /*
    * 
    *
    */
    public function verifyDoctor($id, Request $request)
    {
        $doctor = User::where('id', $id)->first();

        if(!$doctor){
            return redirect()->back()->with('error', 'Sorry cannot verify you');
        } 
        // $doctor = User::create([
        //     'name'=>request->name, 
        //     'reg_no'=>request->re
        // ]);
        return view('pages.verify', [

        ]);
    }
}
