<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Member\DashboardController;
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
});

Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login.index');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logut', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', [DashboardController::class, 'index'])->name('member.home.index');
