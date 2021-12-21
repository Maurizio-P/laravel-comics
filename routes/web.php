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
    return view('home.index');
})->name('home');

Route::get('/comics', function(){
    $comicsArray = config('comics');
    $comicsId = [];
    foreach ($comicsArray as $key => $comic) {
        $comic["id"] = $key;
        $comicsId[] = $comic;
    }

    return view('pages.comics', ["comics" => $comicsId]);
})->name("comics");

Route::get('comics.{id?}', function($id){
    $comicsArray = config('comics');
    $comicsId = [];
    foreach ($comicsArray as $key => $comic) {
        $comic["id"] = $key;
        $comicsId[] = $comic;
    }

    if ($id >= 0 && $id < count($comicsId)) {
        $singleComic = $comicsId[$id];
        return view('pages.comic', ["comic" => $singleComic]);
    }else{
        abort('404');
    }
})->name("comic");