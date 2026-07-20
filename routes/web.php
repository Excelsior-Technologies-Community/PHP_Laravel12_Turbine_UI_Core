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

Route::view('/settings', 'settings');

Route::post('/settings/app', function (Illuminate\Http\Request $request) {
    session([
        'app_name' => $request->app_name,
        'app_url' => $request->app_url,
        'timezone' => $request->timezone,
        'environment' => $request->environment
    ]);
    return back()->with('success', 'App settings saved successfully!');
});

Route::post('/settings/user', function (Illuminate\Http\Request $request) {
    session([
        'language' => $request->language,
        'items_per_page' => $request->items_per_page,
        'notifications_enabled' => $request->has('notifications_enabled'),
        'compact_mode' => $request->has('compact_mode')
    ]);
    return back()->with('success', 'User preferences saved successfully!');
});

Route::post('/settings/theme', function (Illuminate\Http\Request $request) {
    session([
        'turbine_theme' => $request->turbine_theme,
        'primary_color' => $request->primary_color,
        'dark_mode' => $request->has('dark_mode'),
        'border_radius' => $request->border_radius
    ]);
    return back()->with('success', 'Theme preferences saved successfully!');
});

Route::view('/component-preview', 'component-preview');

Route::view('/variant-builder', 'variant-builder');

Route::view('/theme-customizer', 'theme-customizer');
