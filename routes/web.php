<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilliereController;
use App\Http\Controllers\StagaireController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NoteController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('filiere', FilliereController::class)->only(['create', 'store']);
Route::resource('stagaire', StagaireController::class)->only(['create', 'store', 'index']);
Route::resource('grade', NoteController::class)->only(['create', 'store', 'index']);
Route::resource('module', ModuleController::class)->only(['create', 'store']);



