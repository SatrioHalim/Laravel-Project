<?php

use App\Models\Post;
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
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function(Post $post) {


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
