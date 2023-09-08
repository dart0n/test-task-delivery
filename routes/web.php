<?php

use App\Http\Controllers\DeliveryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/delivery', [DeliveryController::class, 'create']);
Route::post('/delivery', [DeliveryController::class, 'store'])->name('delivery.create');
