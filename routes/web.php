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
    return view('home', ['welcome' => 'Hello World!']);
});
Route::get('/about', function () {
    return view('about', [
        'about' => 'About Us',
        'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore in illo possimus corporis eveniet. Earum aperiam praesentium in labore sequi?'
    ]);
});
Route::get('/contacts', function () {
    return view('contacts', ['contact' => 'Call Me 😉']);
});
