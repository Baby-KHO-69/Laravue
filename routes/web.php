<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/SignIn', function () {
    return Inertia::render('SignIn');

});
Route::get('/SignUp', function () {
    return Inertia::render('SignUp');
});









