<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\NapTienController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::middleware('auth')->group(function () {
    Route::get('/', [ExampleController::class, 'index'])->name('home');
    Route::get('/profile', [ExampleController::class, 'profile']);
    Route::controller(DonHangController::class)->group(function () {
        Route::get('/laydon', 'layDon')->name('lay_don');
        Route::get('/dondat', 'donDat')->name('don_dat');
    });
    Route::controller(NapTienController::class)->group(function () {
        Route::get('/naptien', 'napTien')->name('nap_tien');
    });
});
