<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Site\HomeController::class, 'index'])->name('site.home');

Route::prefix('panel')->name('panel.')->middleware(['auth'])->group(function () {
    /* ===== TIPS ===== */
    Route::controller(App\Http\Controllers\Panel\TipController::class)->group(function () {
        Route::get('dicas', 'index')->name('tips');
        Route::get('dicas/cadastrar', 'create')->name('tips.create');
        Route::post('dicas/cadastrar', 'store')->name('tips.store');
        Route::get('dicas/editar/{tip}', 'edit')->name('tips.edit');
        Route::put('dicas/editar/{tip}', 'update')->name('tips.update');
        Route::delete('dicas/excluir/{tip}', 'destroy')->name('tips.destroy');
        Route::post('dicas/buscar/marca', 'fetchBrand')->name('tips.fetch.brand');
        Route::post('dicas/buscar/modelo', 'fetchModel')->name('tips.fetch.model');
    });
});

require __DIR__.'/auth.php';
