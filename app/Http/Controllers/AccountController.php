<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //Verify the auth user
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('account');
    }
}
