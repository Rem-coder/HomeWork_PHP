<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\messages;
use Carbon\Carbon;

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
        return view('window', ['data' => messages::all()]);
    }

    public function DeleteMessage(Request $req)
    {
        $messages = new messages();
        #Проверка сессии.
        if(session()->all()['user'] == $messages->find($req->input('id'))['user'])
        {
            messages::destroy($req->input('id'));
            return redirect()->route('inside')->with('success', 'Сообшение удалено!');
        }
        return redirect()->route('inside')->with('success', 'У вас нет прав для удаления!');

    }
}
