<?php

use Illuminate\Support\Facades\Route;

// Static Routes

Route::get('/', function () {
    return view('static.index');
})->name('home');

Route::get('/contact', function () {
    return view('static.contact');
})->name('contact');

Route::get('/about', function () {
    return view('static.about');
})->name('about');

Route::get('/privacy', function () {
    return view('static.privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('static.terms');
})->name('terms');

// Dashboard routes

Route::prefix('dashboard')->group(function () {

    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/login', function () {
        return view('dashboard.login');
    })->name('login');

    Route::get('/register', function () {
        return view('dashboard.register');
    })->name('register');

    Route::get('/resetpassword', function () {
        return view('dashboard.resetpassword');
    })->name('resetpassword');

    Route::post('/logout', function () {
        return view('dashboard.logout');
    })->name('logout');

});

// Jobs routes

Route::prefix('jobs')->group(function () {
    Route::get('/', function () {
        return view('jobs.index');
    })->name('jobs');

    Route::get('/create', function () {
        return view('jobs.create');
    })->name('jobs-create');

    Route::get('/{id}', function () {
        return view('jobs.show');
    })->name('jobs-show');

    Route::get('/{id}/edit', function ($id) {
        return view('jobs.edit', compact('id'));
    })->name('jobs-edit');

    Route::post('/', function () {
        return view('jobs');
    })->name('jobs');

});
