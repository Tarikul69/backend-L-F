<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class backendController extends Controller
{
    //dashboard
    public function test()
    {
        return view('backend.index');
    }

    //dashboard
    public function services()
    {
        $data['ab'] = DB::table('services')->get();
        return view('backend.services')->with('data');
    }

    //profile
    public function profile()
    {
        return view('backend.profile');
    }
    
    //Table
    public function tables()
    {
        return view('backend.tables');
    }
    //Forms 
    public function forms()
    {
        return view('backend.forms');
    }

    //Login
    public function login()
    {
        return view('backend.login');
    }
}
