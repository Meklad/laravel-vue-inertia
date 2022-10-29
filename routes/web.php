<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    return Inertia::render('Users/Index', [
        "users" => User::query()
                       ->when(Request::input('search'), function($query, $search) {
                            $query->where("name", "like", "%{$search}%");
                       })->paginate(10)
                       ->withQueryString()
                       ->through(fn($user) => [
            "id" => $user->id,
            "name" => $user->name,
            "email" => $user->email,
            "is_active" => $user->is_active,
            "role" => $user->role,
            "avatar" => $user->avatar
        ]),
        "filters" => Request::only(['search'])

    ]);
});

Route::get('/users/create', function () {
    return Inertia::render('Users/Create');
});

Route::post('/users', function (Request $request) {
    $active = request()->active == "true" ? true : false;

    User::create([
        'name' => request()->name,
        'email' => request()->email,
        'password' => request()->password,
        'is_active' => $active,
        'role' => request()->role,
        'avatar' => request()->avatar,
    ]);

    return redirect("/users");
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd(request()->all());
});
