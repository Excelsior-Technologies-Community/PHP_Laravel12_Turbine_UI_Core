<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
});


Route::view('/alerts', 'alerts');

Route::view('/buttons', 'buttons');

Route::view('/cards', 'cards');

Route::view('/forms', 'forms');

Route::view('/badges', 'badges');

Route::view('/theme', 'theme');

// Route::get('/', function () {
//     return view('welcome');
// });
