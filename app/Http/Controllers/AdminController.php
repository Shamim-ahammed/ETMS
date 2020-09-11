<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        
        //return view('admin.admin');
    }
    
    public function addUser(){
      return view('admin.includes.user.addUser');  
    }
    public function userControl(){
        
        return view('admin.includes.user.controlUser');
    }
        public function userList(){
        
        return view('admin.includes.user.userList');
    }
    
}
