<?php

use App\Http\Controllers\TodosController;
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

// Route::get('/', function(){ return view('welcome'); });
Route::get('/', [TodosController::class, 'index']);

Route::get('/todo/edit/{id}', [TodosController::class, 'edit']);
Route::get('/todo/update/{id}', [TodosController::class, 'update']);

Route::resource('todo', 'App\Http\Controllers\TodosController');
