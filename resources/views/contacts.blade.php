@extends('layouts.default')

@section('content')
    <h1>Контакты</h1>
    <p>Адрес: {{ $address }}</p>
    <p>Почтовый индекс: {{ $post_code }}</p>
    <p>Email: 
        @if(empty($email))
            <strong style="color: red;">Адрес электронной почты не указан</strong>
        @else
            {{ $email }}
        @endif
    </p>
    <p>Телефон: {{ $phone }}</p>
@endsection