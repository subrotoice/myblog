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
    return view('welcome');
});

Route::get('/g', function() {
    return view("greeting");
});

Route::get('/var/{name}/{id}', function($name, $id) {
    echo "good";
});
Route::get('/test/{name}/{id?}', function($name, $id=44) {  // Variable is passing in URL must {}
    echo "Good " . $name. $id;
});