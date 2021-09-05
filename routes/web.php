<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {

    $comics = config('comics');// abbiamo associato il nostro array ad una variabile

    return view('index', [  //la devi inviare alla homepage, come secondo argomento con un array
        'comics' => $comics
    ]);
})-> name('homepage');
Route::get('/card/{id}', function ($id) { // id e una variabile e la inviamo alla callback
    $comics = config('comics');

    return view('card', [
        'id' => $id, //inviamo le nostre variabili al componente che le richiamera
        'comics' => $comics
    ]);
})->name('card');




