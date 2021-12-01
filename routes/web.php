<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookingController;
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

Route::get('/', [bookingController::class, 'index'])->name('booking.index');
Route::post('/', [bookingController::class, 'store'])->name('booking.save');
Route::get('/bookinglist', [bookingController::class, 'show'])->name('booking.show');
