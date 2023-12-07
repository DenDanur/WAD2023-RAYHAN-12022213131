<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomController;

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
    return view('home');
});


Route::get('/showroom', [ShowroomController::class, 'index']) -> name('showroom.index');
Route::get('/showroom/create', [ShowroomController::class, 'create']) -> name('showroom.create');
Route::post('/showroom/store', [ShowroomController::class, 'index']) -> name('showroom.store');
Route::resource('showroom_mobil', \App\Http\Controllers\ShowroomController::class);
