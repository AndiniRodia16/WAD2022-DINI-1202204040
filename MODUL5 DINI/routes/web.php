<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShowroomController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post("logout", [LoginController::class, "logout"])->name("logout");
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::group(['middleware' => 'auth'], function () {

    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('new-car', [ShowroomController::class, 'create'])->name('new-car');
    Route::post('new-car', [ShowroomController::class, 'store'])->name('new-car.store');
    Route::get('my-car', [ShowroomController::class, 'index'])->name('my-car');
    Route::get('my-car/{id}', [ShowroomController::class, 'show'])->name('my-car.show');
    Route::get('my-car/{id}/edit', [ShowroomController::class, 'edit'])->name('my-car.edit');
    Route::put('my-car/{id}', [ShowroomController::class, 'update'])->name('my-car.update');
    Route::get('my-car/{id}/destroy', [ShowroomController::class, 'destroy'])->name('my-car.destroy');
    
});
