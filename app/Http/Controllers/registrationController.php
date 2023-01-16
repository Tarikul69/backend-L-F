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
        $success =DB::table('users')->pluck('email');
        return response()->json(["Success" =>$success, 'data'=>$data], 200);
    }
     
}
