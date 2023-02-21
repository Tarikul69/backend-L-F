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
        $data = DB::table('services')->get();
        return view('backend.services', compact('data'));
    }

    public function deleteservice($id)
    {
        
    }

    //profile
    public function profile()
    {
        $data = DB::table('contact')->get();
        return view('backend.profile', compact('data'));
    }
    
    //Table
    public function tables()
    {
        return view('backend.tables');
    }
    //Forms 
    public function forms()
    {
        $data = DB::table('support')->get();
        return view('backend.forms', compact('data'));
    }

    //Login
    public function login()
    {
        return view('backend.login');
    }
}
