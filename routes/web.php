<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
// use App\Models\Author;

Route::get('/', function () {
    return view('home',[
        'posts' => Post::all()
    ]);
});

Route::get('/news', function () {
    $posts = Post::with('author')->paginate(10);
    return view('news', [
        'posts' => $posts
    ]);
});

Route::get('/about', function () {
    return view('about');
});
