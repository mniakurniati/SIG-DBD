<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TahunController;

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

//Route::get('/home', [TahunController::class, 'index']);

Route::resource('home', TahunController::class);

Route::get('/test', function(){
    return view('test');
});