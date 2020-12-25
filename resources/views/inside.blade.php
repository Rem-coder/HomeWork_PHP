@extends('layouts.app')

@section('title')
    Сайт
@endsection

@section('style')
    "css/registration.css"
@endsection

@include('inc\window')

@include('inc\window_panel')


@section('content')
    <h1 style="position:absolute">{{session()->all()['user']}}</h1>
@endsection

<form action="{{route('exit-form')}}" method="get">
    @csrf
    <button class="exit_button"> ВЫХОД </button>
</form>
