<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {

    $users = rand(100, 500);
    $projects = rand(20, 100);
    $revenue = rand(5000, 50000);

    return view('dashboard', compact(
        'users',
        'projects',
        'revenue'
    ));
});


Route::view('/alerts', 'alerts');

Route::view('/buttons', 'buttons');

Route::view('/cards', 'cards');

Route::view('/forms', 'forms');

Route::view('/badges', 'badges');

Route::view('/theme', 'theme');

Route::view('/about', 'about');

Route::get('/toggle-theme', function () {

    session([
        'dark_mode' => !session('dark_mode', false)
    ]);

    return back();
});

Route::view('/contact', 'forms');

Route::post('/contact', function (Illuminate\Http\Request $request) {

    return back()->with(
        'success',
        'Form Submitted Successfully!'
    );
});
