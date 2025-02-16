<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Web Users
Route::get('/daftar', [HomePageController::class, 'index'])->name('user.dashboard');
Route::get('DaftarCalonSantri', [HomePageController::class, 'create'])->name('user.create');
Route::post('DaftarSantri', [HomePageController::class,'store'])->name('user.store');
 




