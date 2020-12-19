@extends('layouts.app')

@section('title')
    Авторизация
@endsection

@section('style')
    "css/app.css"
@endsection

@section('content')
    <div class="window_entry">
        <!-- Явный шаблон, придумать как выделить его. Повторяется в registration-->
        <a style="position: absolute; font-size: 30px; font-family: 'Lucida Console'; left: 50px; top: 30px">ДОБРО ПОЖАЛОВАТЬ!</a>
        <input class="my_input" placeholder="логин">
        <input class="my_input" placeholder="пароль">

        <input type="button" class="my_button" value="Регистрация">
        <input type="button" class="my_button" value="Вход">
    </div>
@endsection




