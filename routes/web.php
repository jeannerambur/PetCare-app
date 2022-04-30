<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;

use App\Http\Controllers\CarController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VeterinaryController;
use App\Http\Controllers\Health\WoundController;
use App\Http\Controllers\Mesures\PoidsController;
use App\Http\Controllers\Health\AllergyController;
use App\Http\Controllers\Health\DiseaseController;
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
Route::view('pets/{id}/health', 'health.index')->name('health');

Route::get('pets/{id}/mesures/appetit', [AppetitController::class, 'index'])->name('appetit');
Route::put('pets/{id}/mesures/appetit/edit', [AppetitController::class, 'update'])->name('appetit.update-appetit');
Route::get('pets/{id}/mesures/appetit/create', [AppetitController::class, 'create'])->name('appetit.create-appetit');
Route::post('pets/{id}/mesures/appetit/create', [AppetitController::class, 'store'])->name('appetit.store-appetit');
Route::resource('appetit', AppetitController::class);


Route::get('pets/{id}/mesures/poids', [PoidsController::class, 'index'])->name('poids');
Route::put('pets/{id}/mesures/poids/edit', [PoidsController::class, 'update'])->name('poids.update-poids');

Route::get('pets/{id}/mesures/poids/create', [PoidsController::class, 'create'])->name('poids.create-poids');
Route::post('pets/{id}/mesures/poids/create', [PoidsController::class, 'store'])->name('poids.store-poids');

Route::resource('poids', PoidsController::class);

Route::get('pets/{id}/health/allergies', [AllergyController::class, 'index'])->name('allergies');
Route::put('pets/{id}/health/allergies/edit', [AllergyController::class, 'update'])->name('allergies.update-allergy');
Route::get('pets/{id}/health/allergies/create', [AllergyController::class, 'create'])->name('allergies.create-allergy');
Route::post('pets/{id}/health/allergies/create', [AllergyController::class, 'store'])->name('allergies.store-allergy');
Route::resource('allergies', AllergyController::class);


Route::get('pets/{id}/health/wounds', [WoundController::class, 'index'])->name('wounds');
Route::put('pets/{id}/health/wounds/edit', [WoundController::class, 'update'])->name('wounds.update-wound');
Route::get('pets/{id}/health/wounds/create', [WoundController::class, 'create'])->name('wounds.create-wound');
Route::post('pets/{id}/health/wounds/create', [WoundController::class, 'store'])->name('wounds.store-wound');
Route::resource('wounds', WoundController::class);


Route::get('pets/{id}/health/diseases', [DiseaseController::class, 'index'])->name('diseases');
Route::put('pets/{id}/health/diseases/edit', [DiseaseController::class, 'update'])->name('diseases.update-disease');
Route::get('pets/{id}/health/diseases/create', [DiseaseController::class, 'create'])->name('diseases.create-disease');
Route::post('pets/{id}/health/diseases/create', [DiseaseController::class, 'store'])->name('diseases.store-disease');
Route::resource('diseases', DiseaseController::class);



Route::get('pets/{id}/veterinary', [VeterinaryController::class, 'index'])->name('veterinary');
