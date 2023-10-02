<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

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
// reviews
Route::get('/', [ReviewController::class,'index']);
Route::post('/submit', [ReviewController::class,'submit']);
// admin
Route::get('/gallery', [AdminController::class,'gallery']);

