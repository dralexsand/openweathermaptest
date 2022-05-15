<?php

use App\Http\Controllers\Api\v1\DataController;
use App\Http\Controllers\Api\v1\ProjectController;
use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('users', [UserController::class, 'index'])->name('api.users');

Route::get('data', [DataController::class, 'index'])->name('api.data');

Route::get('projects/{userId}', [ProjectController::class, 'index'])->name('api.projects.user');

Route::get('project/{projectId}', [ProjectController::class, 'show'])->name('api.project.detail');

