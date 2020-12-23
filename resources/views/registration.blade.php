@extends('layouts.app')

@section('style')
    "css/registration.css"
@endsection

@section('content')
    <!-- Явный шаблон, придумать как выделить его. Повторяется в star_page-->

    <div class="window_entry">
        <a style="position: absolute; font-size: 30px; font-family: 'Lucida Console'; left: 100px; top: 30px">Регистрация!</a>
        <form class="my_form" action="{{route('registration-form')}}" method="post">
            @csrf
                <input class="my_input" placeholder="введите почту" id="почта" name="почта">
                <input class="my_input" placeholder="введите пароль" id="пароль" name="пароль">
                <input class="my_input" placeholder="введите имя" id="имя" name="имя">
                <input class="my_input" placeholder="повторите пароль" id="повтор_пароль" name="повтор_пароль">
                <button type="submit" class="my_button_server">Отправить</button>
        </form>

        <form action="{{route('home')}}" method="get">
            @csrf
            <button class="my_button" type="submit" style="top: 75.2%; margin-left: 65%">Отмена</button>
        </form>
    </div>
@endsection
