<?php

use App\Http\Controllers\Api\User\IndexController;
use App\Http\Controllers\Api\User\ShowController;
use App\Http\Controllers\Api\User\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestDataBaseController;
use App\Http\Controllers\CreateUserController;


Route::prefix('users')
    ->as('users.')
    ->group(function () {
        Route::get('/', IndexController::class)->name('index');
        Route::get('/{user}', ShowController::class)->name('show');
        Route::post('/', StoreController::class)->name('store');
    });
Route::get('/test', [TestDataBaseController::class, 'getAllUser']);
//Cree un utilisateur
Route::post('/cree-utilisateur', [CreateUserController::class, 'createUser']);





