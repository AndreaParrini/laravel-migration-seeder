<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/alltrains', [PageController::class, 'allTrains'])->name('alltrains');

Route::get('/contact', [PageController::class, 'index'])->name('contact');

Route::get('/aboutus', [PageController::class, 'index'])->name('aboutus');
