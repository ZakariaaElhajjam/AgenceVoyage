<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\URL;

Route::get('/', MenuController::class.'@dashboard')->name('dashboard');
Route::get('/buses/index', BusController::class.'@index')->name('buses.index');
Route::post('/buses/create', BusController::class .'@create')->name('buses.create');
Route::post('/buses/edit/{immatriculation}', BusController::class.'@update')->name('buses.update');
Route::delete('/buses/delete/{immatriculation}', BusController::class.'@destroy')->name('buses.destroy');
Route::get('/live_search/action', 'BusController@action')->name('buses.action');

