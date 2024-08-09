<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});


Route::get('/tasks', function ()  {
    return view('index',[ 'tasks' => \App\Models\Task::all()]);
})->name('tasks.index');


// ::find() gives error if no $id is found. use findOrFail()
Route::get('/tasks/{id}', function ($id) {
    return view('show', ['task' =>\App\Models\Task::findOrFail($id)]);
})->name('tasks.show');


Route::fallback(function (){
    return 'still works empty page';
});







// Route::get('/tasks/{id}', function ($id) {
//     return 'One single task';
// })->name('tasks.show');



// $task = collect($tasks)->firstWhere('id', $id);
// if (!$task) {
//     abort(Response::HTTP_NOT_FOUND);
// }
// use - use ($tasks) on the Route::() function

// // use the ->name('....') to use it as routes name
// Route::get('/hello', function() {
//     return 'my home';
// })->name('hello');

// // the ->name() is passed inside ->route()
// Route::get('hallo', function () {
//     return redirect()->route('hello');
// });

// Route::get('/home/{name}', function ($name){
//     return 'hello ' . $name;
// });
