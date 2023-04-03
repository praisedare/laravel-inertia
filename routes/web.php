<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    sleep(1);
    return inertia('Welcome', ['name' => 'Obinna']);
});

Route::get('/about', fn() => inertia('About'));
Route::prefix('users/')->group(function() {
    Route::name('users.')->group(function() {
        Route::get('/', fn() => inertia('Users/Index'));
    });
});

