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
    public function service()
    {
        # code...
    }

    //Contact
    public function contact(Request $req)
    {
        $req ->validate(
            [
                'name'=> 'required | max: 100',
                'email'=> 'required',
            ]
        );

        $abc = Db::table('contact')->insert([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'phone' => $req->input('phone'),
            'message' => $req->input('message'),
        ]);
    }

    //Support
    public function support()
    {
        # code...
    }
}
