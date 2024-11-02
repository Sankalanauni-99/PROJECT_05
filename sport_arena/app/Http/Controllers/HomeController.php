<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view("welcome");
    }


public function redirects(){
    $usertype=Auth::user()->usertype;

    if($usertype=="1"){
        return view("Admin.dashboard-admin");
    }else if($usertype=="2"){
        return view("Manager.dashboard-manager");
    }else{
     return view("User.dashboard-user");
    //return view("dashboard");
    }
}
}
