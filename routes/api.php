<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'kamar'], function () {
    Route::get('/', [KamarController::class, 'index']);
    Route::get('/{id}', [KamarController::class, 'show']);
    Route::delete('/{id}', [KamarController::class, 'destroy']);
});
