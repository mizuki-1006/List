<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    public function signin(){
        return view('List.signin');
    }

    public function signup(){
        return view('List.signup');
    }

    public function forget_pw(){
        return view('List.forget_pw');
    }

    public function reset_pw(){
        return view('List.reset_pw');
    }
}
