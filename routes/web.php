<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SobreNosotrosController;
use App\Http\Controllers\Proyectos\ProyectosController;
use App\Http\Controllers\LoginController;





Route::get('/', [MainController::class, 'index'])->name('main.index');

Route::get('/acceder', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::middleware(['auth', 'web' ])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});


Route::prefix('sobreNosotros')->group(function () {
    Route::get('/', [SobreNosotrosController::class, 'index'])->name('sobreNosotros.index');
    // Route::get('/crear', [SobreNosotrosController::class, 'crear'])->name('sobreNosotros.crear');
});

Route::prefix('proyectos')->group(function () {
    Route::get('/', [ProyectosController::class, 'index'])->name('proyectos.index');
    // Route::get('/crear', [ProyectosController::class, 'crear'])->name('sobreNosotros.crear');
});
