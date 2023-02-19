<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class frontendController extends Controller
{

    //about
    public function about()
    {
        return view('frontend.about');
    }

    // home or index
    public function index()
    {
        # code...
        return view('frontend.index');
    }

    //contact
    public function contact(Request $req)
    {
        return view('frontend.contact');
    }

    //blog
    public function blog()
    {
        return view('frontend.blog');
    }

    //portfolio
    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    //service
    public function services()
    {
        $data = DB::table('services')->get();
        return view('frontend.services', compact('data'));
    }

    //support
    public function support()
    {
        return view('frontend.support');
    }


}
