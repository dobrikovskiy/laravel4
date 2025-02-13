<?php

use Illuminate\Support\Facades\Route;

// Роут для главной страницы
Route::get('/', function () {
    return view('home', [
        'name' => 'Иван Иванов',
        'age' => 17,
        'position' => 'Разработчик',
        'address' => 'ул. Пушкина, д. 10',
    ]);
});

// Роут для страницы контактов
Route::get('/contacts', function () {
    return view('contacts', [
        'address' => 'ул. Лермонтова, д. 15',
        'post_code' => '123456',
        'email' => '',
        'phone' => '+7 (123) 456-78-90',
    ]);
});
