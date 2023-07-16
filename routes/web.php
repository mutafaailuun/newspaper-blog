<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MhsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Jaliel",
        "email" => "kangjaliel1998@gmail.com",
        "image" => "Jaliel.jpg"

    ]);
});


Route::get('/blog', [BlogController::class, 'showBlog']);
// Route::get('/blog', [MhsController::class, 'showMhs']);

//halaman single post
// Route::get('posts/{slug}', [PostController::class, "showPost"]);