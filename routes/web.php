<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;

use App\Http\Controllers\CarController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Mesures\AppetitController;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/pets/store', [PetController::class, 'store'])->name('pets.store');

Route::resource('pets', PetController::class);

Route::get('user/profile', [UserController::class, 'index'])->name('user.index');
Route::get('user/profile/edit', [UserController::class, 'edit'])->name('user.edit-profile');
Route::put('user/profile/edit', [UserController::class, 'update'])->name('user.update-profile');

Route::view('pets/{id}/mesures', 'mesures.index')->name('mesures');

Route::get('pets/{id}/mesures/appetit', [AppetitController::class, 'index'])->name('appetit');