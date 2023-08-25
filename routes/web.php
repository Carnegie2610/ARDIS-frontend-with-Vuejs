<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllers;
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

 
// Route::get('/user', [Controller::class, 'show']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', [Controllers::class, 'index']);

Route::get('/getAll', [Controllers::class, 'getAll']);
Route::get('/getId/{id}', [Controllers::class, 'getId']);
Route::get('/create', [Controllers::class, 'create']);
Route::get('/update', [Controllers::class, 'update']);
Route::get('/delete', [Controllers::class, 'delete']);

