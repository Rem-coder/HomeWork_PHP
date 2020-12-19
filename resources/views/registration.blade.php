@extends('layouts.app')

@section('style')
    "css/registration.css"
@endsection

@section('content')
    <!-- Явный шаблон, придумать как выделить его. Повторяется в star_page-->
    <div class="window_entry">
        <input class="my_input" placeholder="почта">
        <input class="my_input" placeholder="пароль">
        <input class="my_input" placeholder="подтверждение пароля">

        <input type="button" class="my_button" value="Регистрация">
        <input type="button" class="my_button" value="Назад">
    </div>
@endsection
