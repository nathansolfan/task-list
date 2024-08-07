<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hello my man';
});

Route::get('/home', function() {
    return 'my home';
});

Route::get('/home/{name}', function ($name){
    return 'hello ' . $name;
});
