<?php

use Illuminate\Support\Arr;
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

Route::get('/posts', function () {
    return view('posts',[
        'title' => 'Blog Page',
        'posts' => [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Satrio Halim Abdurrahman',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Debitis corrupti dicta libero enim reprehenderit autem vitae distinctio 
                cupiditate aliquam, voluptates temporibus placeat consequatur quisquam 
                asperiores, expedita ipsa iusto maiores! Provident?'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Satrio Halim Abdurrahman',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Debitis corrupti dicta libero enim reprehenderit autem vitae distinctio 
                cupiditate aliquam, voluptates temporibus placeat consequatur quisquam 
                asperiores, expedita ipsa iusto maiores! Provident?'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Satrio Halim Abdurrahman',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Debitis corrupti dicta libero enim reprehenderit autem vitae distinctio 
            cupiditate aliquam, voluptates temporibus placeat consequatur quisquam 
            asperiores, expedita ipsa iusto maiores! Provident?'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Satrio Halim Abdurrahman',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Debitis corrupti dicta libero enim reprehenderit autem vitae distinctio 
            cupiditate aliquam, voluptates temporibus placeat consequatur quisquam 
            asperiores, expedita ipsa iusto maiores! Provident?'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
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