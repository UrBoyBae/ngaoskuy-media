<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Member\DashboardController;
use App\Http\Controllers\RegistrasionController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('components.templates.splash-screen');
})->name('splash-screen');

//authentication routes
Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login.index');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// registrasion router
Route::get('/registrasi', [RegistrasionController::class, 'index'])->middleware('guest')->name('registrasi.index');
Route::post('/registrasi', [RegistrasionController::class, 'registrasion'])->name('registrasi.proses');

Route::get('/home', [DashboardController::class, 'index']) ->name('member.home.index');

Route::get('/user/dashboard', function () {
    return view('components.templates.dashboard');
});
