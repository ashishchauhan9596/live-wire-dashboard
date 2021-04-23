<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::middleware(['auth:web', 'role:SuperAdmin|Admin'])->group(function () {
    Route::get('/users', function () {
        return view('pages.users');
    });
    Route::get('/usersTable', [App\Http\Controllers\HomeController::class, 'usersTable'])->name('usersTable');
    Route::get('/authors', function () {
        return view('pages.authors');
    });
    Route::get('/authorsTable', [App\Http\Controllers\HomeController::class, 'authorsTable'])->name('authorsTable');

    Route::post('/addNewSystemUser', [App\Http\Controllers\HomeController::class, 'addNewSystemUser'])->name('addNewSystemUser');
});
Route::middleware(['auth:web', 'role:Author'])->group(function () {
    Route::get('/books', function () {
        return view('pages.books');
    });
    Route::get('/booksTable', [App\Http\Controllers\HomeController::class, 'booksTable'])->name('booksTable');
});
