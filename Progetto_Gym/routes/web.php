<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymController;

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

Route::get('/', [GymController::class, 'home'])->name('home');

Route::get('/corse', [GymController::class, 'corse'])->name('corse');

Route::get('/detail/{name}', [GymController::class, 'detail'])->name('detail');

Route::get('/contact', [GymController::class, 'contact'])->name('contact');