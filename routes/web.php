<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/profile', function () {
    $nama = 'Harsya Haryo Prastya';
    return view('profile')->with ('nama', $nama);
});
Route::get('/profile', function () {

    $users = [
        ['nama' => 'Zainal Nur Ali', 'Nim' => '0702232107', 'status' => 'Aktif'],
        ['nama' => 'Ibrahim Syahputra Harahap', 'Nim' => '0702232105', 'status' => 'Akktif'],
        ['nama' => 'Rizky Khaliq', 'Nim' => '0702231039', 'status' => 'Tidak Aktif'],
            
    ];


    return view('profile', compact('users'));
});