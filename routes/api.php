<?php

use App\Http\Controllers\Api\v1\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get(
    'weather/{slug}',
    [WeatherController::class, 'show']
)->name('api.show');

