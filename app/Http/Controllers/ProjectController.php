<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function payment(){
        return view('payment');
    }

    public function timeline(){
        return view('timeline');
    }
}
