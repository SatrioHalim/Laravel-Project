<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Satrio Halim']);
});

/* 
    Task Buat 2 Rute Baru
    1. /blog
    2 Buah artikel, judul dan isi

    2. /contact
    Email/ Social Media
*/