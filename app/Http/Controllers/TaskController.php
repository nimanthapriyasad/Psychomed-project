<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function create()
    {
        $data= user::latest()->first();
        log::debug("YOUTTAG",[$data]);
        return view('next'); // next:- page name created with next.blade.php 
    }


    //
}
