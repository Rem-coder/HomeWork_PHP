<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('registration');
    }

    public function postSignup(Request $request)
    {

    }
}
