<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manager extends Controller
{
    public function show(){
        return view('manager/manager2');
    }
}
