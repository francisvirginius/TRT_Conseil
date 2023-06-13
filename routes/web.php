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
Route::get('/connexions/cree-son-compte', function () {return view('creeCompte');});
// Page des annonces 
Route::get('/voir-annonces', function () {return view('voirAnnonce');});
// Page de choix d'un users qui mène vers ça page de connexion
Route::get('/choix-utilisateur', function () {return view('choixUsers');});
// Page profil
Route::get('/profil', function () {return view('profil');});
// page qui recherche des utilisateur 
Route::get('/profil/chercher-utilisateur', function () {return view('searchUsers');});
// formulaire pour ajouter une annonce 
Route::get('/profil/ajouter-annonce', function () {return view('AjouterAnnonce');});






