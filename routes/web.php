<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        "users" => User::paginate(10)->through(fn($user) => [
            "id" => $user->id,
            "name" => $user->name,
            "email" => $user->email,
            "is_active" => $user->is_active,
            "role" => $user->role,
            "avatar" => $user->avatar
        ])
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd(request()->all());
});
