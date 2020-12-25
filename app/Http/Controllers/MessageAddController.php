<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\messages;

class MessageAddController extends Controller
{
    function Add(Request $req)
    {
        $messages = new messages();
        $messages->user = $req->session()->all()['user'];
        $messages->message = $req->input('text');
        $messages->save();
        return redirect()->route('inside')->with('success', 'Сообшение добавлено!');
    }

    public function GetData()
    {
        return view('window', ['data'=> messages::all()]);
    }
}
