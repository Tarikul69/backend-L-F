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

    public function deleteservice(Request $req, $id)
    {
        DB::table('services')->where('id', '=', $id)->delete();

        if($req)
        {
            return back()->with('message', 'Deleted Successfuly');
        }
        else{
            return back()->with('Fail', 'Failed to delete data');
        }
    }

    //profile /contact
    public function profile()
    {
        $data = DB::table('contact')->get();
        return view('backend.profile', compact('data'));
    }

    public function deletecontact(Request $req, $id)
    {
        DB::table('contact')->where('id', '=', $id)->delete();

        if($req)
        {
            return back()->with('message', 'Deleted Successfuly');
        }
        else{
            return back()->with('Fail', 'Failed to delete data');
        }
    }
    
    //Table
    public function tables()
    {
        return view('backend.tables');
    }
    //Forms /Support
    public function forms()
    {
        $data = DB::table('support')->get();
        return view('backend.forms', compact('data'));
    }

    public function deletesupport(Request $req, $id)
    {
        DB::table('support')->where('id', '=', $id)->delete();

        if($req)
        {
            return back()->with('message', 'Deleted Successfuly');
        }
        else{
            return back()->with('Fail', 'Failed to delete data');
        }
    }

    //Login
    public function login()
    {
        return view('backend.login');
    }
}
