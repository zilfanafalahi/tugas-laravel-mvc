<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        return view('form');
    }

    public function home(Request $request){
        // dd($nama["nama"]);
        // dd($nama->all())
        $first_name = $request->input('firstname');
        $last_name = $request->input('lastname');
        return view('home', ['first_name' => $first_name, 'last_name' => $last_name]);
    }
}
