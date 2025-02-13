@extends('layouts.default')

@section('content')
    <h1>Добро пожаловать на главную страницу!</h1>
    <p>Имя: {{ $name }}</p>
    <p>Возраст: 
        @if($age > 18)
            {{ $age }}
        @else
            <strong style="color: red;">Указанный человек слишком молод!</strong>
        @endif
    </p>
    <p>Должность: {{ $position }}</p>
    <p>Адрес: {{ $address }}</p>
@endsection