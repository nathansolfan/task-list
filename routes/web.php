<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// use the ->name('....') to use it as routes name
Route::get('/hello', function() {
    return 'my home';
})->name('hello');

// the ->name() is passed inside ->route()
Route::get('hallo', function () {
    return redirect()->route('hello');
});

Route::get('/home/{name}', function ($name){
    return 'hello ' . $name;
});

Route::fallback(function (){
    return 'still works empty page';
});
