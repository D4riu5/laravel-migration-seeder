<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\PageController as GuestController;

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

Route::get('/', [GuestController::class, 'index'])->name('home');
Route::get('/train/{id}', [GuestController::class, 'show'])->name('trainInfo');