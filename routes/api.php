<?php

use App\Http\Controllers\Api\v1\DataController;
use App\Http\Controllers\Api\v1\ProjectController;
use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::get('users', [UserController::class, 'index'])->name('api.users');

Route::get('users/{userId}', [UserController::class, 'show'])->name('api.user.data');

Route::get('data/{pid}', [DataController::class, 'show'])
    ->name('api.data.show')
    ->where('pid', '[0-9]+');

Route::get('data/files', [DataController::class, 'filesList'])->name('api.files');

Route::get('projects/{userId}', [ProjectController::class, 'index'])->name('api.projects.user');

Route::get('project/{projectId}', [ProjectController::class, 'show'])->name('api.project.detail');

Route::fallback(function () {
    abort(404, 'API resource not found');
});*/

