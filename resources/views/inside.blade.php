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
    <h1 style="position:absolute; top: 50px">Внутри сайта</h1>
@endsection

