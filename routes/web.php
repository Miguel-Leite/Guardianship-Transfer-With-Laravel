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
    if (\Illuminate\Support\Facades\Auth::check()) {
        return redirect()->route('dashboard.index');
    }
    return view('auth.index');
})->name('auth.index');


Route::post('/auth',[DashboardController::class,'auth'])
->name('auth.auth');


Route::get('/dashboard',[DashboardController::class,'index'])
->middleware('auth')
->name('dashboard.index');

Route::get('/telefone',[DashboardController::class,'phone'])
->middleware('auth')
->name('dashboard.phone');

Route::post('/telefone/adicionar',[DashboardController::class,'addPhone'])
->middleware('auth')
->name('dashboard.add');

Route::get('/tutelas',[DashboardController::class,'guardianshipTransfer'])
->middleware('auth')
->name('dashboard.guardianshipTransfer');

Route::post('/dashboard/user/create',[DashboardController::class,'createUser'])
->middleware('auth')
->name('dashboard.createUser');

Route::get('/dashboard/user/apagar/{id?}',[DashboardController::class,'deleteUser'])
->middleware('auth')
->name('dashboard.deleteUser')
->where(['id' => '[0-9]+']);

Route::get('/dashboard/phone/apagr/{id?}',[DashboardController::class,'deletePhone'])
->middleware('auth')
->name('dashboard.deletePhone')
->where(['id' => '[0-9]+']);






Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
