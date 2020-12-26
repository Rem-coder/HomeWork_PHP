<?php

namespace App\Http\Controllers;

use App\Models\my_Users;
use App\Models\User;
use Illuminate\Http\Request;
use \App\Http\Requests\AuthorizationRequest;
use Illuminate\Support\Facades\DB;
use \App\Http\Controllers\MessageAddController;

class AuthorizationController extends Controller
{
    #пытаюсь реализовать сессии. Не знаю правильно-ли но что то вроде выходит
    public function Authorization(AuthorizationRequest $req)
    {
        $email_password = DB::table('my__users')->pluck('password','email');
        if($email_password[$req->input('почта')] != $req->input('пароль'))
            return redirect()->route('home')->with('success', 'Не верный пароль!');
        $req->session()->put('email', $req->input('почта'));
        $req->session()->put('user', $this->Entry()[$req->input('почта')]);
        if($req->session()->all()['email'] == $req->input('почта'))
        {
            return redirect()->route('inside')->with('success', 'Добро пожаловать ' . $req->session()->all()['user'] . '!');
        }
        return redirect()->route('home')->with('success', 'Вы не вошли!');

    }

    public function Entry()
    {
        return DB::table('my__users')->pluck('user', 'email');
    }
}
