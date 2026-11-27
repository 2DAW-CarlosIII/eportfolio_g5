<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamiliaProfesionalController;

Route::controller(FamiliaProfesionalController::class)->prefix('familias-profesionales')->name('familias-profesionales.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('show/{id}', 'show')->name('show')->whereNumber('id');
    Route::get('create', 'create')->name('create');
    Route::get('edit/{id}', 'edit')->name('edit')->whereNumber('id');
    Route::post('/', 'store')->name('store');
    Route::put('edit/{id}', 'update')->whereNumber('id')->name('update');
});
