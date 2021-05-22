<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModeratorController;

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
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', [HomeController::class, 'determineHomePage']);

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/moderator', [ModeratorController::class, 'index'])->name('moderator.index');

require __DIR__.'/auth.php';
