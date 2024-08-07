<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hello my man';
});

Route::get('/home', function() {
    return 'my home';
});

// use the ->name('....') to use it as routes name
Route::get('/home/{name}', function ($name){
    return 'hello ' . $name;
})->name('hello');

// the ->name() is passed inside ->route()
Route::get('', function () {
    return redirect()->route('hello');
});
