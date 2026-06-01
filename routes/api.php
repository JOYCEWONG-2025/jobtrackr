<?php

use App\Http\Controllers\Api\JobController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('jobs', JobController::class)->names([
        'index' => 'api.jobs.index',
        'store' => 'api.jobs.store',
        'show' => 'api.jobs.show',
        'update' => 'api.jobs.update',
        'destroy' => 'api.jobs.destroy',
    ]);
});