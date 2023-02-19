<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class backendLogicController extends Controller
{
    //Portfolio 
    public function portfolio()
    {
        # code...
    }

    //Services
    public function service1(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'details'=> 'required',
        ]);

        $abc = DB::table('services')->insert([
            'name'=>$req->input('name'),
            'details'=>$req->input('details'),
        ]);

        return redirect()->back();
    }

    public function service2()
    {
        $data = DB::table('service')->get();
        return view('backend.services', compact('data'));
    }

    //Contact
    public function contact(Request $req)
    {
        $req ->validate(
            [
                'name'=> 'required',
                'email'=> 'required',
                'phone'=> 'required',
                'message'=> 'required',
            ]
        );

        $abc = Db::table('contact')->insert([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'phone' => $req->input('phone'),
            'message' => $req->input('message'),
        ]);

        return redirect()->back();
    }


    //Support
     public function support1(Request $req)
    {
        $req ->validate(
            [
                'name'=> 'required',
                'email'=> 'required',
                'phone'=> 'required',
                'message'=> 'required',
            ]
        );

        $abc = Db::table('support')->insert([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'phone' => $req->input('phone'),
            'message' => $req->input('message'),
        ]);


        return redirect()->back();
    } 

    //Login
    public function login1(Request $req)
    {
        $email = $req->input('email');
        $pass = $req->input('pass');

        if ($email == "admin123@gmail.com" & $pass == "12345") {
            return view('backend.index');
        }else{
            return view('backend.login');
        }
    }

}
