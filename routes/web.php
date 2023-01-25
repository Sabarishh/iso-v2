<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\DpiaController;
use App\Http\Controllers\RopController;

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


Route::get('/locations', [LocationController ::class, 'index']);
Route::get('/assets', [AssetController ::class, 'index']);
Route::get('/dpia', [DpiaController ::class, 'index']);
Route::get('/rop', [RopController ::class, 'index']);
