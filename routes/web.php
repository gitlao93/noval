<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpcrController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\MeasureController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\ObjectiveController;
use App\Http\Controllers\ProvincialController;
use App\Http\Controllers\DivisionBddController;
use App\Http\Controllers\DivisionCpdController;
use App\Http\Controllers\DivisionFadController;
use App\Http\Controllers\AnnualTargetController;
use App\Http\Controllers\MonthlyTargetController;

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



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [ObjectiveController::class, 'index'])->name('objectives.index');
Route::post('/objectives', [ObjectiveController::class, 'store'])->name('objectives.store');
Route::post('/drivers', [DriverController::class, 'store'])->name('drivers.store');
Route::post('/measures', [MeasureController::class, 'store'])->name('measures.store');
Route::post('/measures-update', [MeasureController::class, 'update'])->name('measures.update');
Route::post('/annual_targets', [AnnualTargetController::class, 'store'])->name('annual_targets.store');
Route::post('/monthly_targets', [MonthlyTargetController::class, 'store'])->name('monthly_targets.store');
Route::post('/opcr', [OpcrController::class, 'store'])->name('opcr.store');
Route::put('/annual_targets', [AnnualTargetController::class, 'update'])->name('annual_targets.update');


Route::get('/regional', [RegionalController::class, 'index'])->name('regional.index');
Route::get('/provincial', [ProvincialController::class, 'index'])->name('regional.index');
// bdd
Route::get('/division-bdd-buk', [DivisionBddController::class, 'bukidnunBddIndex'])->name('division.bukidnunBddIndex');
Route::get('/division-bdd-ldn', [DivisionBddController::class, 'lanaoDNBddIndex'])->name('division.lanaoDNBddIndex');
Route::get('/division-bdd-misor', [DivisionBddController::class, 'misOrBddIndex'])->name('division.misOrBddIndex');
Route::get('/division-bdd-misoc', [DivisionBddController::class, 'misOcBddIndex'])->name('division.misOcBddIndex');
Route::get('/division-bdd-cam', [DivisionBddController::class, 'camiguinBddIndex'])->name('division.camiguinBddIndex');

//cpd
Route::get('/division-cpd-buk', [DivisionCpdController::class, 'bukidnunCpdIndex'])->name('division.bukidnunCpdIndex');
Route::get('/division-cpd-ldn', [DivisionCpdController::class, 'lanaoDNCpdIndex'])->name('division.lanaoDNCpdIndex');
Route::get('/division-cpd-misor', [DivisionCpdController::class, 'misOrCpdIndex'])->name('division.misOrCpdIndex');
Route::get('/division-cpd-misoc', [DivisionCpdController::class, 'misOcCpdIndex'])->name('division.misOcCpdIndex');
Route::get('/division-cpd-cam', [DivisionCpdController::class, 'camiguinCpdIndex'])->name('division.camiguinCpdIndex');

//fad
Route::get('/division-fad-buk', [DivisionFadController::class, 'bukidnunFadIndex'])->name('division.bukidnunFadIndex');
Route::get('/division-fad-ldn', [DivisionFadController::class, 'lanaoDNFadIndex'])->name('division.lanaoDNFadIndex');
Route::get('/division-fad-misor', [DivisionFadController::class, 'misOrFadIndex'])->name('division.misOrFadIndex');
Route::get('/division-fad-misoc', [DivisionFadController::class, 'misOcFadIndex'])->name('division.misOcFadIndex');
Route::get('/division-fad-cam', [DivisionFadController::class, 'camiguinFadIndex'])->name('division.camiguinFadIndex');

