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


Route::get('/regional', function(){
    return view('regional');
});
Route::get('/provincial', function(){
    return view('provincial');
});
// bdd
Route::get('/division-bdd-buk', function(){
    return view('division-bdd-buk');
});
Route::get('/division-bdd-ldn', function(){
    return view('division-bdd-ldn');
});
Route::get('/division-bdd-misor', function(){
    return view('division-bdd-misor');
});
Route::get('/division-bdd-misoc', function(){
    return view('division-bdd-misoc');
});
Route::get('/division-bdd-cam', function(){
    return view('division-bdd-cam');
});
//cpd
Route::get('/division-cpd-buk', function(){
    return view('division-cpd-buk');
});
Route::get('/division-cpd-ldn', function(){
    return view('division-cpd-ldn');
});
Route::get('/division-cpd-misor', function(){
    return view('division-cpd-misor');
});
Route::get('/division-cpd-misoc', function(){
    return view('division-cpd-misoc');
});
Route::get('/division-cpd-cam', function(){
    return view('division-cpd-cam');
});
//fad
Route::get('/division-fad-buk', function(){
    return view('division-fad-buk');
});
Route::get('/division-fad-ldn', function(){
    return view('division-fad-ldn');
});
Route::get('/division-fad-misor', function(){
    return view('division-fad-misor');
});
Route::get('/division-fad-misoc', function(){
    return view('division-fad-misoc');
});
Route::get('/division-fad-cam', function(){
    return view('division-fad-cam');
});

