<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.index');
})->name('auth.index');

Route::get('/dashboard',[DashboardController::class,'index'])
->name('dashboard.index');

Route::get('/telefone',[DashboardController::class,'phone'])
->name('dashboard.phone');

Route::get('/tutelas',[DashboardController::class,'guardianshipTransfer'])
->name('dashboard.guardianshipTransfer');


