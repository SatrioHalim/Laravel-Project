<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Satrio Halim Abdurrahman',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
                officia deserunt mollit anim id est laborum'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Satrio Halim Abdurrahman',
                'body' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                 doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis 
                 et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia 
                 voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui 
                 ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor 
                 sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt 
                 ut labore et dolore magnam aliquam quaerat voluptatem'
            ]
        ];
    }

    public static function find($slug): array {
        
        // pakai funtion call back

        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // pakai arrow function
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
            # code...
        }

        return $post;
    }
}