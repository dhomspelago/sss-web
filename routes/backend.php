<?php


use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return 'test backend';
})->middleware('auth:backend');

require __DIR__ . '/backend-auth.php';
