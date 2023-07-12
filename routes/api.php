<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestmonialsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/test', [TestmonialsController::class,'api'])->name('test');
Route::get('/teams', [TeamController::class,'api'])->name('teams');
Route::get('/works', [WorkController::class,'api'])->name('works');
Route::get('/about', [AboutController::class,'api'])->name('about');




Route::post('/contact', [ContactController::class,'store'])->name('contact');