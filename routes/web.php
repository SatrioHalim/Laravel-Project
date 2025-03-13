<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
    // 'author' & 'category' harus sama namanya seperti relasi di model Post 
    // n+1 Problem cara solve nya pake with()
    // efeknya ngaruh di performance karena query yang berkurang
    // $posts = Post::with(['author','category'])->latest()->get();
    // udah gaperlu pake cara diatas karena udah di set default di model Post
    
    return view('posts',[
        'title' => 'Blog Page',
        'posts' => Post::filter(request(['search','category','author']))->latest()->get()
    ]);
});

Route::get('/posts/{post:slug}', function(Post $post) {
    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function(User $user) {
    // kebalikan dari eager loading -> lazy eager loading
    // $posts = $user->posts->load(['category', 'author']);
    return view('posts', [
        'title' => count($user->posts) . ' Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    // $posts = $category->posts->load(['category', 'author']);
    return view('posts', [
        'title' => 'Articles in : ' . $category->name,
        'posts' => $category->posts
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
Buat Category
1. siapin model category
2. migrasi category
3. isi table name dan slug
4. buat factory category
5. buat relasi
*/
