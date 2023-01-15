<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registrationController extends Controller
{
    public function registration()
    {
        $data = DB::select('select * from users');
        return response()->json(['data'=>$data], 200);
    }
     
}
