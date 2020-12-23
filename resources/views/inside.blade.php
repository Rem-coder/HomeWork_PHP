@extends('layouts.app')

@section('title')
    Сайт
@endsection

@section('style')
    "css/registration.css"
@endsection

@section('content')
    <form class="my_form" action="{{route('registration-form')}}" method="post">
        @csrf
        <input class="my_input" placeholder="введите почту" id="почта" name="почта">
        <input class="my_input" type="password" placeholder="введите пароль" id="пароль" name="пароль">
        <input class="my_input" placeholder="введите имя" id="имя" name="имя">
        <input class="my_input" type="password" placeholder="повторите пароль" id="повтор_пароль" name="повтор_пароль">
        <button type="submit" class="my_button_server">Отправить</button>
    </form>
    <h1>Внутри сайта</h1>
@endsection

