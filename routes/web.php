<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('articles.index');
});


Route::get('articles/create', function () {
    return ArticleController::create();
    //return view('articles.create');
})->name('articles.create');