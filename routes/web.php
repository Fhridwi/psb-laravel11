<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\dataSantri\DataSantriController;
use App\Http\Controllers\admin\tahunAjaran\TahunAjaranController;
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
    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Data Santri Admin
    Route::get('/dataSantri', [DataSantriController::class,'index'])->name('admin.data_santri');
    Route::get('/dataSantri/{id}', [DataSantriController::class, 'show'] )->name('admin.detail.santri');
    Route::get('/dataSantri/{id}/edit', [DataSantriController::class, 'edit'] )->name('admin.edit.santri');
    Route::post('/dataSantri/{id}', [DataSantriController::class,'update'] )->name('admin.update.santri');
    Route::delete('/dataSantri/{id}/delete', [DataSantriController::class,'destroy'] )->name('admin.delete.santri');

    //Tahun Ajaran
    Route::get('/tahunAjaran', [TahunAjaranController::class, 'index'] )->name('admin.tahunAjaran');
    Route::get('/tahunAjaran/create', [TahunAjaranController::class, 'create'] )->name('admin.create.tahunAjaran');
    Route::get('/tahun-ajaran/{id}/edit', [TahunAjaranController::class, 'edit'] )->name('admin.edit.tahunAjaran');
    Route::post('/tahunAjaran', [TahunAjaranController::class,'store'] )->name('admin.store.tahunAjaran');
    Route::put('/tahun-ajaran/{id}', [TahunAjaranController::class,'update'] )->name('admin.tahunAjaran.update');
    Route::delete('/tahun-ajaran/{id}', [TahunAjaranController::class, 'destroy'])->name('admin.tahunAjaran.destroy');

});




