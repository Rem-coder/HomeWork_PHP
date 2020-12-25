<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExitController extends Controller
{
    function Exit(Request $req)
    {
        session()->flush();
        return redirect()->route('home')->with('success', 'Вы вышли');
    }
}
