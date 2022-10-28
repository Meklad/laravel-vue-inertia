<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        "time" => now()->format("H:i:s A")
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd(request()->all());
});
