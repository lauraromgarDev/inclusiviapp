<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SobreNosotrosController;



Route::get('/', [MainController::class, 'index'])->name('main.index');

Route::prefix('sobreNosotros')->group(function () {
    Route::get('/', [SobreNosotrosController::class, 'index'])->name('sobreNosotros.index');
    // Route::get('/crear', [SobreNosotrosController::class, 'crear'])->name('sobreNosotros.crear');
});
