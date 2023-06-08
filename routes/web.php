<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', \App\Http\Controllers\User\UsersListController::class);
Route::view('/users/create', 'users.create')->name('users.create');
// Home page
Route::get('/', function () {return view('app');});
// Page de connexions
Route::get('/connexions', function () {return view('connection');});
// Page creation de compte
Route::get('/cree-son-compte', function () {return view('creeCompte');});

