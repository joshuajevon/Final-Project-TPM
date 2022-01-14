<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function payment(){
        $users = User::all(); //all itu mengambil seluruh data, $member declare var
        return view('payment', ['users' => $users]);
    }

    public function timeline(){
        return view('timeline');
    }
}
