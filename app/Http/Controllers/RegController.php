<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegRequest;
use App\Models\my_Users;

class RegController extends Controller
{
    public function Submit(RegRequest $req)
    {
        $user = new my_Users();
        $user->password = $req->input('password');
        $user->email = $req->input('почта');
        $user->username = $req->input('имя');

        $user->save();

        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }
}
