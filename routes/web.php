<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('Inicio',[LandingController::Class,'Inicio']);
Route::get('/Acerca_de',[LandingController::Class,'Acerca_de']);
Route::get('Domicilios',[LandingController::Class,'Domicilios']);
