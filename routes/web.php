<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\GatheringController;
use App\Http\Controllers\PublicController;
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

Route::get('/',[PublicController::class,'welcome'])->name('welcome');
Route::get('/mail/email',[PublicController::class,'email'])->name('email');
Route::post('/mail/submit',[PublicController::class,'submit'])->name('submit');
Route::get('/car/create', [CarController::class , 'create'])->name('car.create');
Route::post('/car/store', [CarController::class , 'store'])->name('car.store');
Route::get('/car/index', [CarController::class , 'index'])->name('car.index');
Route::get('/car/show/{car}', [CarController::class , 'show'])->name('car.show');
Route::get('/gathering/create', [GatheringController::class , 'create'])->name('gathering.create');
Route::post('/gathering/store', [GatheringController::class , 'store'])->name('gathering.store');
Route::get('/gathering/index', [GatheringController::class , 'index'])->name('gathering.index');
Route::get('/gathering/show/{gathering}', [GatheringController::class , 'show'])->name('gathering.show');
