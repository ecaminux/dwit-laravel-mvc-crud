<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;


Route::get('/',function(){
    return view('index')->with('articles', Article::getAll());
} )->name('index');

// EN LA última clase vimos como esta ruta nos permitió obtener la lista de Artículos 
// sin embargo existe otra nomenclatura directa
// que se encuentra a continuacion:

// // Forma revisada en la clase anterior tomando la vista directamente:
// Route::get('/', function () {
//     return view('articles.index');
// })->name('articles.index');



// Forma directa usando el controlador y su método index:
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');

// Se agrega la ruta para eliminar artículos
Route::delete('articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');