<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;

use App\Http\Controllers\CarController;
use App\Http\Controllers\PetController;

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


//Route::view('/pets/create', 'pet/create-pet')->name('create-pet');

Route::post('/pets/store', [PetController::class, 'store'])->name('pets.store');

Route::resource('pets', PetController::class);

Route::post('pets', [PetController::class, 'upload'])->name('pets.upload');