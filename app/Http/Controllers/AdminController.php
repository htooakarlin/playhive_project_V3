<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminView(){
        return view('admins.adminView');
    }

    public function adminCreate(){
        return view('admins.adminCreate');
    }
}
    