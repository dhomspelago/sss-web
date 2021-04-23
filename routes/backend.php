<?php


use App\Http\Controllers\Backend\ContentController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/backend-auth.php';

Route::middleware('auth:backend')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('', [UserController::class, 'index']);
        Route::delete('{user}', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('contents')->name('contents.')->group(function () {
        Route::get('', [ContentController::class, 'index']);
    });
});
