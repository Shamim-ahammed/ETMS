<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
       public function index(){
        
        //return view('frontEnd.home.homeContent');
        return view('user.user');
    }
}
