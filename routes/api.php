<?php

use App\Http\Controllers\ClientController;
use App\Http\Middleware\SetLocaleMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware([SetLocaleMiddleware::class])->group(function () {
    Route::get('/clients/show', [ClientController::class, 'show']);
    Route::get('/clients', [ClientController::class, 'index']);

});
