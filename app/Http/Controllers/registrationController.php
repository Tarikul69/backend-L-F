<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

function post()
{
     
}

class registrationController extends Controller
{
    public function registration()
    {
        $data = DB::table('users')->get();
       // $success =DB::table('users')->pluck('email');
        return response()->json([/* "success" =>$success, */ 'data'=>$data,], 200);
    }
     

    public function test(Request $req)
    {
        $req->validate();
    }

 
}
