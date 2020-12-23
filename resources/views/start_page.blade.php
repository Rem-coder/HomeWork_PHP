@extends('layouts.app')

@section('title')
    Авторизация
@endsection

@section('style')
    "css/app.css"
@endsection

@section('content')
    <div class="window_entry">
        <a style="position: absolute; font-size: 30px; font-family: 'Lucida Console'; left: 100px; top: 30px">Добро пожаловать!</a>
        <form  class="my_form" action="{{route('inside')}}" method="get">
            @csrf
            <!-- Явный шаблон, придумать как выделить его. Повторяется в registration-->
                <input class="my_input" placeholder="логин">
                <input class="my_input" placeholder="пароль">
                <button type="submit" class="my_button_server">Войти</button>
        </form>

        <form action="{{route('registration')}}" method="get">
            <button class="my_button" type="submit" style="top: 75%; margin-left: 50%">Зарегистрироваться</button>
        </form>
    </div>

@endsection




