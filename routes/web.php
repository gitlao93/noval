<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpcrController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\MeasureController;
use App\Http\Controllers\ObjectiveController;
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

