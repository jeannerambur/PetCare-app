<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;

use App\Http\Controllers\CarController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\VeterinaryController;
use App\Http\Controllers\Care\VaccineController;
use App\Http\Controllers\Health\WoundController;
use App\Http\Controllers\Hygiene\BathController;
use App\Http\Controllers\Hygiene\ClawController;
use App\Http\Controllers\Hygiene\DentController;
use App\Http\Controllers\Hygiene\FoodController;
use App\Http\Controllers\Care\DewormerController;
use App\Http\Controllers\Hygiene\GroomController;
use App\Http\Controllers\Mesures\PoidsController;
use App\Http\Controllers\Care\TreatmentController;
use App\Http\Controllers\Health\AllergyController;
use App\Http\Controllers\Health\DiseaseController;
use App\Http\Controllers\Hygiene\LitterController;
use App\Http\Controllers\Mesures\AppetitController;
use App\Http\Controllers\Care\PestControlController;

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

Route::post('/pets/store', [PetController::class, 'store'])->name('pets.store');

Route::resource('pets', PetController::class);

Route::get('user/profile', [UserController::class, 'index'])->name('user.index');
Route::get('user/profile/edit', [UserController::class, 'edit'])->name('user.edit-profile');
Route::put('user/profile/edit', [UserController::class, 'update'])->name('user.update-profile');

Route::view('pets/{id}/mesures', 'mesures.index')->name('mesures');
Route::view('pets/{id}/health', 'health.index')->name('health');
Route::view('pets/{id}/care', 'care.index')->name('care');
Route::view('pets/{id}/hygiene', 'hygiene.index')->name('hygiene');

Route::get('history', [HistoryController::class, 'index'])->name('history');
Route::resource('history', HistoryController::class);

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


Route::get('pets/{id}/care/treatments', [TreatmentController::class, 'index'])->name('treatments');
Route::put('pets/{id}/care/treatments/edit', [TreatmentController::class, 'update'])->name('treatments.update-treatment');
Route::get('pets/{id}/care/treatments/create', [TreatmentController::class, 'create'])->name('treatments.create-treatment');
Route::post('pets/{id}/care/treatments/create', [TreatmentController::class, 'store'])->name('treatments.store-treatment');
Route::resource('treatments', TreatmentController::class);


Route::get('pets/{id}/care/vaccines', [VaccineController::class, 'index'])->name('vaccines');
Route::put('pets/{id}/care/vaccines/edit', [VaccineController::class, 'update'])->name('vaccines.update-vaccine');
Route::get('pets/{id}/care/vaccines/create', [VaccineController::class, 'create'])->name('vaccines.create-vaccine');
Route::post('pets/{id}/care/vaccines/create', [VaccineController::class, 'store'])->name('vaccines.store-vaccine');
Route::resource('vaccines', VaccineController::class);

Route::get('pets/{id}/care/dewormers', [DewormerController::class, 'index'])->name('dewormers');
Route::put('pets/{id}/care/dewormers/edit', [DewormerController::class, 'update'])->name('dewormers.update-dewormer');
Route::get('pets/{id}/care/dewormers/create', [DewormerController::class, 'create'])->name('dewormers.create-dewormer');
Route::post('pets/{id}/care/dewormers/create', [DewormerController::class, 'store'])->name('dewormers.store-dewormer');
Route::resource('dewormers', DewormerController::class);


Route::get('pets/{id}/care/pestcontrols', [PestControlController::class, 'index'])->name('pestcontrols');
Route::put('pets/{id}/care/pestcontrols/edit', [PestControlController::class, 'update'])->name('pestcontrols.update-pestcontrol');
Route::get('pets/{id}/care/pestcontrols/create', [PestControlController::class, 'create'])->name('pestcontrols.create-pestcontrol');
Route::post('pets/{id}/care/pestcontrols/create', [PestControlController::class, 'store'])->name('pestcontrols.store-pestcontrol');
Route::resource('pestcontrols', PestControlController::class);


Route::get('pets/{id}/hygiene/foods', [FoodController::class, 'index'])->name('foods');
Route::put('pets/{id}/hygiene/foods/edit', [FoodController::class, 'update'])->name('foods.update-food');
Route::get('pets/{id}/hygiene/foods/create', [FoodController::class, 'create'])->name('foods.create-food');
Route::post('pets/{id}/hygiene/foods/create', [FoodController::class, 'store'])->name('foods.store-food');
Route::resource('foods', FoodController::class);

Route::get('pets/{id}/hygiene/claws', [ClawController::class, 'index'])->name('claws');
Route::put('pets/{id}/hygiene/claws/edit', [ClawController::class, 'update'])->name('claws.update-claw');
Route::get('pets/{id}/hygiene/claws/create', [ClawController::class, 'create'])->name('claws.create-claw');
Route::post('pets/{id}/hygiene/claws/create', [ClawController::class, 'store'])->name('claws.store-claw');
Route::resource('claws', ClawController::class);

Route::get('pets/{id}/hygiene/litters', [LitterController::class, 'index'])->name('litters');
Route::put('pets/{id}/hygiene/litters/edit', [LitterController::class, 'update'])->name('litters.update-litter');
Route::get('pets/{id}/hygiene/litters/create', [LitterController::class, 'create'])->name('litters.create-litter');
Route::post('pets/{id}/hygiene/litters/create', [LitterController::class, 'store'])->name('litters.store-litter');
Route::resource('litters', LitterController::class);

Route::get('pets/{id}/hygiene/grooms', [GroomController::class, 'index'])->name('grooms');
Route::put('pets/{id}/hygiene/grooms/edit', [GroomController::class, 'update'])->name('grooms.update-groom');
Route::get('pets/{id}/hygiene/grooms/create', [GroomController::class, 'create'])->name('grooms.create-groom');
Route::post('pets/{id}/hygiene/grooms/create', [GroomController::class, 'store'])->name('grooms.store-groom');
Route::resource('grooms', GroomController::class);

Route::get('pets/{id}/hygiene/baths', [BathController::class, 'index'])->name('baths');
Route::put('pets/{id}/hygiene/baths/edit', [BathController::class, 'update'])->name('baths.update-bath');
Route::get('pets/{id}/hygiene/baths/create', [BathController::class, 'create'])->name('baths.create-bath');
Route::post('pets/{id}/hygiene/baths/create', [BathController::class, 'store'])->name('baths.store-bath');
Route::resource('baths', BathController::class);

Route::get('pets/{id}/hygiene/dents', [DentController::class, 'index'])->name('dents');
Route::put('pets/{id}/hygiene/dents/edit', [DentController::class, 'update'])->name('dents.update-dent');
Route::get('pets/{id}/hygiene/dents/create', [DentController::class, 'create'])->name('dents.create-dent');
Route::post('pets/{id}/hygiene/dents/create', [DentController::class, 'store'])->name('dents.store-dent');
Route::resource('dents', DentController::class);

Route::get('pets/{id}/veterinary', [VeterinaryController::class, 'index'])->name('veterinary');
