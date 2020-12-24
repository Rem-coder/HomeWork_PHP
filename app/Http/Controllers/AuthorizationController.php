<?php

namespace App\Http\Controllers;

use App\Models\my_Users;
use Illuminate\Http\Request;
use \App\Http\Requests\AuthorizationRequest;
use Illuminate\Support\Facades\DB;

class AuthorizationController extends Controller
{
    public function Authorization(AuthorizationRequest $req)
    {
        $email_password = DB::table('my__users')->pluck('password','email');
        if($email_password[$req->input('почта')] == $req->input('пароль'))
            return redirect()->route('inside')->with('success', 'Добро пожаловать '.'!');
        else
            return redirect()->route('home')->with('success', 'Не верный пароль!');
    }
}
