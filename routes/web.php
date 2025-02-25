<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Satrio Halim',
        'title' => 'About Page']);
});

Route::get('/blog', function () {
    return view('blog',[
        'writer1' => 'Satrio Halim Abdurrahman',
        'date1' => '1 Januari 2012',
        'writer2' => 'Charles Leclerc',
        'date2' => '17 Agustus 2023',
        'title' => 'Blog Page'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'fullname' => 'Satrio Halim Abdurrahman',
        'email' => 'satriohalim21@gmail.com',
        'instagram' => '@satrio_halim',
        'github' => 'satriohalim',
        'linkedin' => 'Satrio Halim',
        'mobile' => '081284581960',
        'title' => 'Contact Page'
    ]);
});


/* 
    Task Buat 2 Rute Baru
    1. /blog
    2 Buah artikel, judul dan isi

    2. /contact
    Email/ Social Media
*/