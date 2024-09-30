<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('static.index');
})->name('home');

Route::get('/contact', function () {
    return view('static.contact');
});
