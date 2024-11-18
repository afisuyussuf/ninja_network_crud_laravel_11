<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [['name' => 'mario', 'skill' => 75, 'id' => '1'], ['name' => 'luigi', 'skill' => 45, 'id' => '2']];

    return view('ninjas.index', ['greeting' => 'hello', 'ninjas' => $ninjas]);
});

Route::get('/ninjas/{id}', function ($id) {
    // do something with the id
    // e.g. fetch a record from the db
    return view('ninjas.show', ['id' => $id]);
});
