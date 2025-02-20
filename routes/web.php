<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Satrio Halim']);
});

Route::get('/blog', function () {
    return view('blog',[
        'writer1' => 'Satrio Halim Abdurrahman',
        'date1' => '1 Januari 2012',
        'writer2' => 'Charles Leclerc',
        'date2' => '17 Agustus 2023',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'email' => 'satriohalim21@gmail.com',
        'instagram' => '@satrio_halim',
        'github' => 'satriohalim',
        'LinkedIn' => 'Satrio Halim',
        'mobile' => '081284581960'
    ]);
});


/* 
    Task Buat 2 Rute Baru
    1. /blog
    2 Buah artikel, judul dan isi

    2. /contact
    Email/ Social Media
*/