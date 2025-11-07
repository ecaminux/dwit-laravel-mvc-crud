<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


// EN LA última clase vimos como esta ruta nos permitió obtener la lista de Artículos 
// sin embargo existe otra nomenclatura directa
// que se encuentra a continuacion:

// // Forma revisada en la clase anterior tomando la vista directamente:
// Route::get('/', function () {
//     return view('articles.index');
// })->name('articles.index');

// Forma directa usando el controlador y su método index:
Route::get('/', [ArticleController::class, 'index'])->name('articles.index');


Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::post('articles/store', [ArticleController::class, 'store'])->name('articles.store');