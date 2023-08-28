<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/user', [UserController::class, 'index']);

Route::get('/getAll', [UserController::class, 'getAll']);
Route::get('/getId/{id}', [UserController::class, 'getId']);
Route::post('/create', [UserController::class, 'create'])->name('usercreate');
Route::patch('/update/{user}/update', [UserController::class, 'update']);
Route::delete('/delete/{user}/delete', [UserController::class, 'delete']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });// ->middleware(['auth', 'verified'])->name('dashboard');
 
// Route::resource('chirps', ChirpController::class)
//     ->only(['index', 'store']);
//     // ->middleware(['auth', 'verified']);
 
