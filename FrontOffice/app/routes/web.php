<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\VoyageController;

Route::get('/',[AcceuilController::class,"index"])->name('index');

Route::post('/destination',[VoyageController::class,"afficheMessage"])->name('destination');
Route::get('/reservation/{idVoyage}',[AcceuilController::class,"reservation"])->name('reservation');
Route::post('/AjoutReservation/{idVoyage}',[AcceuilController::class,"AjoutReservation"])->name('AjoutReservation');
//ajouter une route messagerie
Route::get('/messagerie',[AcceuilController::class,"messagerie"])->name('messagerie');
//ajouter une route propos
Route::get('/propos',[AcceuilController::class,"propos"])->name('propos');
Route::get('/Destinations',[AcceuilController::class,"afficheDestination"])->name('destinations');
?>