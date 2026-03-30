<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json(['ok' => true]);
});
Route::post('/guardar_orden', [App\Http\Controllers\CoffeshopController::class, 'guardar_orden']);