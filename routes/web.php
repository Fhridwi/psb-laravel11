<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataSantriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Web User
Route::get('daftar', [HomePageController::class, 'index'])->name('user.dashboard');
Route::get('DaftarCalonSantri', [HomePageController::class, 'create'])->name('user.create');
Route::post('DaftarSantri', [HomePageController::class,'store'])->name('user.store');

//Route Auth
Route::get('/login' , [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('store.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


//Route Admin

 Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dataSantri', [DataSantriController::class,'index'])->name('admin.data_santri');
 });




