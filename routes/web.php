<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AboutController;

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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');

Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');

Route::get('/work/create', [WorkController::class, 'create'])->name('work.create');
Route::post('/work/store', [WorkController::class, 'store'])->name('work.store');

Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::post('/about/update', [AboutController::class, 'update'])->name('update.index');